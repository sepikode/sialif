<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuRepository;

    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function index()
    {
        $menus = $this->menuRepository->getAll();
        return view('menus.index', [
            'title' => 'Menu',
            'menus' => $menus
        ]);
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $this->menuRepository->create($request->all());
        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit($id)
    {
        $menu = $this->menuRepository->getById($id);
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $this->menuRepository->update($id, $request->all());
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy($id)
    {
        $this->menuRepository->delete($id);
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
