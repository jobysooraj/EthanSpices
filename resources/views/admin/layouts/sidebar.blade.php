<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="index.html">
        <svg>
            <use xlink:href="#ion-ios-pulse-strong"></use>
        </svg>
        Ethan Spices
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
            <div class="fw-bold">Admin</div>
            <small>Ethan Spices</small>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>
            <li class="sidebar-item active">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
                    <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
                </a>

            </li>
             <li class="sidebar-item">
                <a data-bs-target="#gst" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-flask"></i> <span class="align-middle">GST</span>
                </a>
                <ul id="gst" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('taxes.index')}}">List</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('taxes.create')}}">Add</a></li>

                </ul>
            </li>
             <li class="sidebar-item">
                <a data-bs-target="#units" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-flask"></i> <span class="align-middle">Units</span>
                </a>
                <ul id="units" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('units.index')}}">List</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('units.create')}}">Add</a></li>

                </ul>
            </li>
             <li class="sidebar-item">
                <a data-bs-target="#Suppliers" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-table"></i> <span class="align-middle">Suppliers</span>
                </a>
                <ul id="Suppliers" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('suppliers.index')}}">Lists</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('suppliers.create')}}">Add</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Categories</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('categories.index')}}">Lists </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('categories.create')}}">Add <span class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>

                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">Products</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('products.index')}}">Lists</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('products.create')}}">Add</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#documentation" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Combos</span>
                </a>
                <ul id="documentation" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('combos.index')}}">List</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('combos.create')}}">Add</a></li>
                </ul>
            </li>

           
            <li class="sidebar-item">
                <a data-bs-target="#discounts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Discounts</span>
                    <span class="sidebar-badge badge rounded-pill bg-primary">New</span>
                </a>
                <ul id="discounts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('discounts.index')}}">List</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('discounts.create')}}">Add</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#promocodes" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Promocodes</span>
                    <span class="sidebar-badge badge rounded-pill bg-primary">New</span>
                </a>
                <ul id="promocodes" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('promocodes.index')}}">List</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('promocodes.create')}}">Add</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#orders" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-check-square"></i> <span class="align-middle">Order Details</span>
                </a>
                <ul id="orders" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">list</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-elements.html">Cancelled Lists</a></li>

                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#stocks" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-check-square"></i> <span class="align-middle">Stock</span>
                </a>
                <ul id="stocks" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">list</a></li>

                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#customers" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-table"></i> <span class="align-middle">Customers</span>
                </a>
                <ul id="customers" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-responsive.html">Lists</a></li>
                </ul>
            </li>
          

            <li class="sidebar-item">
                <a data-bs-target="#testimonials" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-heart"></i> <span class="align-middle">Testimonials</span>
                </a>
                <ul id="testimonials" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Lists</a></li>

                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="calendar.html">
                    <i class="align-middle me-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">CMS</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#reports" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-map-marker-alt"></i> <span class="align-middle">Reports</span>
                </a>
                <ul id="reports" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Cancelled Products</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Ordered Lists</a></li>
                </ul>
            </li>


        </ul>
    </div>
</nav>
