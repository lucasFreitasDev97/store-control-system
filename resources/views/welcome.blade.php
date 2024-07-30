@extends('templates.default')
@section('main')
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            @include('templates.partials.menu')
            <div class="layout-page">
                @include('templates.partials.navbar')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="text-center mb-6">
                            <h1>
                                <img src="/assets/img/icons/brands/slack.png" alt="">
                                Store Control System
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <div class="card">
                                    <div class="card-body">
                                        {{--Icon--}}
                                        <h4>Products</h4>
                                        <p>latest products registered</p>
                                        <ul>
                                            <li>Product 01</li>
                                            <li>Product 02</li>
                                            <li>Product 03</li>
                                            <li>Product 04</li>
                                            <li>Product 05</li>
                                            <li>...</li>
                                        </ul>
                                        <p class="fw-bold mb-0"><a class="stretched-link" href="#">Access products<i class="ri-arrow-right-s-line"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="card">
                                    <div class="card-body">
                                        {{--Icon--}}
                                        <h4>Suppliers</h4>
                                        <p>latest suppliers registered</p>
                                        <ul>
                                            <li>Supplier 01</li>
                                            <li>Supplier 02</li>
                                            <li>Supplier 03</li>
                                            <li>Supplier 04</li>
                                            <li>Supplier 05</li>
                                            <li>...</li>
                                        </ul>
                                        <p class="fw-bold mb-0"><a class="stretched-link" href="#">Access suppliers<i class="ri-arrow-right-s-line"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <div class="card">
                                    <div class="card-body">
                                        {{--Icon--}}
                                        <h4>Customers</h4>
                                        <p>latest customers registered</p>
                                        <ul>
                                            <li>Customer 01</li>
                                            <li>Customer 02</li>
                                            <li>Customer 03</li>
                                            <li>Customer 04</li>
                                            <li>Customer 05</li>
                                            <li>...</li>
                                        </ul>
                                        <p class="fw-bold mb-0"><a class="stretched-link" href="#">Access customers<i class="ri-arrow-right-s-line"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="card">
                                    <div class="card-body">
                                        {{--Icon--}}
                                        <h4>Orders</h4>
                                        <p>latest orders registered</p>
                                        <ul>
                                            <li>Order 01</li>
                                            <li>Order 02</li>
                                            <li>Order 03</li>
                                            <li>Order 04</li>
                                            <li>Order 05</li>
                                            <li>...</li>
                                        </ul>
                                        <p class="fw-bold mb-0"><a class="stretched-link" href="#">Access orders<i class="ri-arrow-right-s-line"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="content-footer footer">
                        <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center text-center py-4">
                            <div>
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>

                                <a href="https://github.com/lucasFreitasDev97" class="footer-text fw-medium" target="_blank">Lucas Freitas</a>, Web Developer
                                <span class="text-danger">💻</span>

                            </div>
                        </div>
                    </footer>
                    <!-- / Content -->
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection
