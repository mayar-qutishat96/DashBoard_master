<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{url('admin/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <!-- Category Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCategory" aria-labelledby="headingCategory" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-category')}}">Add Category</a>
                        <a class="nav-link" href="{{url('admin/category')}}">View Category</a>
                    </nav>
                </div>

                <!-- Posts Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePosts" aria-labelledby="headingPosts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-post')}}">Add Post</a>
                        <a class="nav-link" href="{{url('admin/posts')}}">View Posts</a>
                    </nav>
                </div>

                <!-- Customer Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCustomer" aria-expanded="false" aria-controls="collapseCustomer">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Customer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCustomer" aria-labelledby="headingCustomer" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/customer')}}">View Customer</a>
                    </nav>
                </div>

                <!-- Order Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrders" aria-expanded="false" aria-controls="collapseOrders">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Orders
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseOrders" aria-labelledby="headingOrders" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-order')}}">Add Order</a>
                        <a class="nav-link" href="{{url('admin/order')}}">View Orders</a>
                    </nav>
                </div>

                <!-- Product Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Products
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProducts" aria-labelledby="headingProducts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-product')}}">Add Product</a>
                        <a class="nav-link" href="{{url('admin/products')}}">View Products</a>
                    </nav>
                </div>

                <!-- Coupons Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCoupons" aria-expanded="false" aria-controls="collapseCoupons">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Coupons
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCoupons" aria-labelledby="headingCoupons" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-coupon')}}">Add Coupon</a>
                        <a class="nav-link" href="{{url('admin/coupons')}}">View Coupons</a>
                    </nav>
                </div>

                <!-- Messages Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMessages" aria-expanded="false" aria-controls="collapseMessages">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Messages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMessages" aria-labelledby="headingMessages" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/message')}}">View Messages</a>
                    </nav>
                </div>

                <!-- Testimonials Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTestimonials" aria-expanded="false" aria-controls="collapseTestimonials">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Testimonials
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTestimonials" aria-labelledby="headingTestimonials" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/testimonial')}}">View Testimonials</a>
                    </nav>
                </div>

                <!-- Wishlist Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseWishlist" aria-expanded="false" aria-controls="collapseWishlist">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Wishlist
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseWishlist" aria-labelledby="headingWishlist" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                   
                        <a class="nav-link" href="{{url('admin/wishlist')}}">View Wishlist</a>
                    </nav>
                </div>


            

<!-- Users -->
<a class="nav-link" href="{{url('admin/users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Users
                </a>



        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
