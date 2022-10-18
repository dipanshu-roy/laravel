<div class="sticky">
        <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
            <div class="main-sidebar-header main-container-1 active">
                <div class="sidemenu-logo">
                    <a class="main-logo" href="{{ route('dashboard') }}">
                        <img src="{{ asset(config('app.images.logo_small_url'))}}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset(config('app.images.logo_small_url'))}}" class="header-brand-img icon-logo" alt="logo">
                        <img src="{{ asset(config('app.images.logo_url'))}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
                        <img src="{{ asset(config('app.images.logo_url'))}}" class="header-brand-img icon-logo theme-logo" alt="logo">
                    </a>
                </div>
                <div class="main-sidebar-body main-body-1">
                    <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                    <ul class="menu-nav nav">
                        <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                        <li class="nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-home sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-bar-chart-alt sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Charts</span>
                                <span class="badge bg-danger side-badge">5</span>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-morris.html">Morris Charts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-flot.html">Flot Charts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-chartjs.html">ChartJS</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-spark-peity.html">Sparkline &amp; Peity</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-echart.html">Echart</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-shopping-cart-full sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">ECommerce</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-dashboard.html">Dashboard</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-products.html">Products</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-product-details.html">Product Details</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-cart.html">Cart</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-wishlist.html">Wishlist</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-checkout.html">Checkout</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-orders.html">Orders</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-add-product.html">Add Product</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-account.html">Account</a></li>
                            </ul>
                        </li>
                        <li class="nav-header"><span class="nav-label">Landing</span></li>
                        
                        <li class="nav-header"><span class="nav-label">Applications</span></li>
                        
                        
                        
                        
                    </ul>
                <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>