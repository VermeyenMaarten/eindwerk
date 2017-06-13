<div class="nav-side-menu">
        <div class="brand">GYMLIFE</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-dashboard fa-lg"></i> Dashboard
                    </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> Products <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="{{ route('admin.products') }}">All Products</a></li>
                    <li><a href={{ route('admin.add') }}>Add New Product</a></li>
                </ul>
                <li>
                    <a href="{{ route('admin.orders') }}">
                        <i class="fa fa-credit-card fa-lg"></i> Orders
                    </a>
                </li>

            </ul>
        </div>
    </div>