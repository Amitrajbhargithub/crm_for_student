<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('student/dashboard') }}">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                <div class="badge badge-danger">new</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('student/test-series')}}">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Test Series</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#questionnaires">
                <i class="typcn typcn-film menu-icon"></i>
                <span class="menu-title">Courses</span>
                <i class="menu-arrow"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#letters" aria-expanded="false" aria-controls="letters">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Our Placement</span>
                <i class="menu-arrow"></i>
            </a>
        </li>
    </ul>
</nav>