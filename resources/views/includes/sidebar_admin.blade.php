
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('admin.index')}}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('services.index')}}">
                    <span data-feather="shopping-cart"></span>
                    Services
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('pages.index')}}">
                <span data-feather="shopping-cart"></span>
                Pages
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('teams.index')}}">
                    <span data-feather="shopping-cart"></span>
                    Team
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
        </ul>
    </div>
</nav>
