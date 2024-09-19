<?php

namespace App\View\Components;

use Closure;
use App\Models\Menu;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SidebarMenu extends Component
{
    public $menus;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menus = Menu::with('children')->whereNull('parent_id')->get();
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.sidebar-menu');
    }

    public function isActive($url)
    {
        return request()->is($url) ? 'active' : '';
    }

    public function hasPermission($permission)
    {
        return Auth::user()->hasPermissionTo($permission);
    }

}
