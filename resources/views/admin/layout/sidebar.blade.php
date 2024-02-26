<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/dashboard') }}">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                <div class="badge badge-danger">new</div>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/student-list')}}">
                <i class="typcn typcn-document-text menu-icon"></i>
                    <span class="menu-title">student all</span>
                <i class="menu-arrow"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/test-series-list')}}">
                <i class="typcn typcn-film menu-icon"></i>
                <span class="menu-title">Test Series</span>
                <i class="menu-arrow"></i>
            </a>
        </li>

    </ul>
</nav>