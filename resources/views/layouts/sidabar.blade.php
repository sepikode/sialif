<div class="sidebar-wrapper">
    <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
            <li class="nav-item"> <a href="{{ $menu->url }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"><i class="nav-icon bi bi-speedometer"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>

            @can('profile-index')
            <li class="nav-item"> <a href="{{ $menu->url }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"><i class="nav-icon bi bi-speedometer"></i>
                <p>{{ $menu->name }}</p>
                </a>
            </li>
            @endcan

            @canany(['satker-index', 'kegiatan-index', 'kartukeluarga-index', 'ptkp-index'])
            <li class="nav-item {{ Request::is('admin/satker*','admin/kegiatan*', 'admin/kartukeluarga*', 'admin/ptkp*') ? 'menu-open' : '' }}">
                <a href=" #" class="nav-link {{ Request::is('admin/satker*','admin/kegiatan*', 'admin/kartukeluarga*', 'admin/ptkp*') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-database-check"></i>

                    <p>
                        {{ __('Master') }}
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>


                <ul class="nav nav-treeview">
                    @can('satker-index')
                    <li class="nav-item"> <a href="{{ $menu->url }}" class="nav-link {{ Request::is('admin/satker*') ? 'active' : '' }}"><i class="nav-icon bi bi-house-door-fill"></i>
                            <p>{{ __('Satuan/Unit') }}</p>
                        </a>
                    </li>
                    @endcan
                    @can('kegiatan-index')
                    <li class="nav-item"> <a href="{{ route('admin.kegiatan.index') }}" class="nav-link {{ Request::is('admin/kegiatan*') ? 'active' : '' }}"><i class="nav-icon bi bi-person-walking"></i>
                            <p>{{ $menu->name }}</p>
                        </a>
                    </li>
                    @endcan
                    @can('kartukeluarga-index')
                    <li class="nav-item"> <a href="{{ route('admin.kartukeluarga.index') }}" class="nav-link {{ Request::is('admin/kartukeluarga*') ? 'active' : '' }}"><i class="nav-icon bi bi-person-vcard-fill"></i>
                            <p>{{ $menu->name }}</p>
                        </a>
                    </li>
                    @endcan
                    @can('ptkp-index')
                    <li class="nav-item"> <a href="{{ route('admin.ptkp.index') }}" class="nav-link {{ Request::is('admin/ptkp*') ? 'active' : '' }}"><i class="nav-iconbi bi-dpad"></i>
                            <p>{{ $menu->name }}</p>
                        </a>
                    </li>
                    @endcan

                </ul>

            </li>
            @endcanany

        </ul>
        <!--end::Sidebar Menu-->
    </nav>
</div>
