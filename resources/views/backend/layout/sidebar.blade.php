<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('dashboard')}}" class="brand-link text-center">
        <!-- Logo -->
        <img src="{{ asset('app_logo/' . websiteInfo()->app_logo) }}" alt="Company Logo" class="brand-image img-circle elevation-3"  style="max-width: 55px;max-height: 55px" alt="">

        <!-- Website Info -->
        <span class="brand-text font-weight-light">
        {{ websiteInfo() ? websiteInfo()->app_name : 'Default App Name' }}
    </span>
        <br>
        <span class="text-sm text-muted">Hello {{ Auth::user()->name }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('site-settings.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Site Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Tables
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
