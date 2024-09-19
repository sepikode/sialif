<?php

namespace App\Repositories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class MenuRepository
{
    public function create(array $data): Menu
    {
        return $this->execute(function() use ($data) {
            return Menu::create($data);
        }, 'creating menu');
    }

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->execute(function() {
            return Menu::with('children')->get();
        }, 'fetching menus');
    }

    public function update(int $id, array $data): Menu
    {
        return $this->execute(function() use ($id, $data) {
            $menu = Menu::findOrFail($id);
            $menu->update($data);
            return $menu;
        }, 'updating menu');
    }

    public function delete(int $id): bool
    {
        return $this->execute(function() use ($id) {
            $menu = Menu::findOrFail($id);
            return $menu->delete();
        }, 'deleting menu');
    }

    private function execute(callable $callback, string $action)
    {
        try {
            return $callback();
        } catch (ModelNotFoundException $e) {
            \Log::error("Error $action: " . $e->getMessage());
            throw new Exception("Menu not found. Please check the ID and try again.");
        } catch (Exception $e) {
            \Log::error("Error $action: " . $e->getMessage());
            throw new Exception("Unable to $action. Please try again later.");
        }
    }
}
