<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('dashboard')}}" class="brand-link text-center">
        <!-- Logo -->
        <img src="{{ file_exists(public_path('app_logo/' . websiteInfo()->app_logo)) ? asset('app_logo/' . websiteInfo()->app_logo) : asset('default/no-image.png') }}"
             alt="{{ websiteInfo() ? websiteInfo()->app_name : 'Default App Name' }}"
             class="brand-image img-circle elevation-3"
             style="max-width: 48px; max-height: 50px;">


        <!-- Website Info -->
        <span class="brand-text font-weight-light">
        {{ websiteInfo() ? websiteInfo()->app_name : 'Default App Name' }}
    </span>
        <br>
        <span class="text-sm text-muted">Hello {{ Auth::user()->name }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                <li class="nav-item {{ request()->route()->named('dashboard') || request()->route()->named('dashboard')  ? 'menu-open' : '' }}">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->route()->named('site-settings.index') || request()->route()->named('site-settings.index')  ? 'menu-open' : '' }}">
                    <a href="{{route('site-settings.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Site Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->route()->named('tables.create') || request()->route()->named('tables.index') || request()->route()->named('tables.edit') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('tables.create') }}" class="nav-link {{ request()->route()->named('tables.create') ? 'active' : '' }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <p>Add Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tables.index') }}" class="nav-link {{ request()->route()->named('tables.index') ? 'active' : '' }}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <p>View Tables</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
