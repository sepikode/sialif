<div class="sidebar-wrapper">
    <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
            @foreach($menus as $menu)
                @if($menu->permission && !$hasPermission($menu->permission))
                    @continue
                @endif
                <li class="nav-item {{ $isActive($menu->url) }}">
                    <a href="{{ url($menu->url) }}" class="nav-link">
                        <i class="nav-icon bi bi-{{ $menu->icon }}"></i>
                        <p>{{ $menu->name }}</p>
                    </a>
                    @if($menu->children->isNotEmpty())
                        <ul class="nav nav-treeview">
                            @foreach($menu->children as $child)
                                @if($child->permission && !$hasPermission($child->permission))
                                    @continue
                                @endif
                                <li class="nav-item {{ $isActive($child->url) }}">
                                    <a href="{{ url($child->url) }}" class="nav-link">
                                        <i class="nav-icon bi bi-{{ $child->icon }}"></i>
                                        <p>{{ $child->name }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
        <!--end::Sidebar Menu-->
    </nav>
</div>
