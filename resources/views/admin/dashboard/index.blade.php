@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <p class="text-muted mb-3 fw-semibold">Total Images</p>
                            <h4 class="m-0 mb-3 fs-18">45 GB Space</h4>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2"><i class="mdi mdi-arrow-top-right text-success"></i>+
                                    12%</span>Last month
                            </p>
                        </div>

                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div id="total_space" class="me-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <p class="text-muted mb-3 fw-semibold">View Video</p>
                            <h4 class="m-0 mb-3 fs-18">159 GB Space</h4>
                            <p class="mb-0 text-muted">
                                <span class="text-danger me-2"><i class="mdi mdi-arrow-bottom-left text-danger"></i>-
                                    25%</span>Last month
                            </p>
                        </div>

                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div id="video_space" class="me-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <p class="text-muted mb-3 fw-semibold">Listen Music</p>
                            <h4 class="m-0 mb-3 fs-18">258 GB Space</h4>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2"><i class="mdi mdi-arrow-top-right text-success"></i> +
                                    45%</span>last month
                            </p>
                        </div>

                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div id="music_space" class="me-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <p class="text-muted mb-3 fw-semibold">Document File</p>
                            <h4 class="m-0 mb-3 fs-18">58 GB Space</h4>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2"><i class="mdi mdi-arrow-top-right text-success"></i> +
                                    25%</span>last month
                            </p>
                        </div>

                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div id="document_space" class="me-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Repeat Customer Rate</h5>
                    </div>
                </div>

                <div class="card-body">
                    <div class="justify-content-center">
                        <div id="customer_rate" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Top Customers</h5>
                        <div class="dropdown mx-0">
                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal text-muted fs-20"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Last 28 Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="justify-content-center">
                        <div class="table-responsive card-table">
                            <table class="table align-middle table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center my-1">
                                                <div
                                                    class="avatar-sm rounded me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/users/user-11.jpg"
                                                        class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 mb-1">Noam Henson</h5>
                                                    <span class="text-muted">14 Verified
                                                        Purchases</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal my-1">$88K</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center my-1">
                                                <div
                                                    class="avatar-sm rounded me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/users/user-12.jpg"
                                                        class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 mb-1">Israel Faizul</h5>
                                                    <span class="text-muted">23 Verified
                                                        Purchases</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal my-1">$104K</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center my-1">
                                                <div
                                                    class="avatar-sm rounded me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/users/user-13.jpg"
                                                        class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 mb-1">Pascal Kremp</h5>
                                                    <span class="text-muted">13 Verified
                                                        Purchases</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal my-1">$67K</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center my-1">
                                                <div
                                                    class="avatar-sm rounded me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/users/user-14.jpg"
                                                        class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 mb-1">Jenny Dubois</h5>
                                                    <span class="text-muted">08 Verified
                                                        Purchases</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal my-1">$48K</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <div class="d-flex align-items-center my-1">
                                                <div
                                                    class="avatar-sm rounded me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/users/user-15.jpg"
                                                        class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 mb-1">Felipa Silva</h5>
                                                    <span class="text-muted">08 Verified
                                                        Purchases</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-0">
                                            <p class="fw-normal my-1">$95K</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xl-6">
            <div class="card overflow-hidden">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0">Top Selling Products</h5>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="justify-content-center">
                        <div class="table-responsive card-table">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="py-2 border-0">Product</th>
                                        <th class="py-2 border-0">Progress</th>
                                        <th class="py-2 border-0">Status</th>
                                        <th class="py-2 border-0">Sales</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="p-1 me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/products/dresses.jpg"
                                                        class="img-fluid rounded" alt="product image" width="40px">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 my-1">Dresses</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-14 my-1 fw-normal">68.8%</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-success-subtle fs-13 px-2 rounded-5 text-success fw-medium">Medium</span>
                                        </td>
                                        <td>
                                            <p class="fs-14 my-1 fw-normal">$5,451</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="p-1 me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/products/bags.jpg" class="img-fluid rounded"
                                                        alt="product image" width="40px">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 my-1">Leather Bags</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-14 my-1 fw-normal">52.7%</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-warning-subtle fs-13 px-2 rounded-5 text-warning fw-medium">Low</span>
                                        </td>
                                        <td>
                                            <p class="fs-14 my-1 fw-normal">$7,451</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="p-1 me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/products/shoes.jpg" class="img-fluid rounded"
                                                        alt="product image" width="40px">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 my-1">Shoes</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-14 my-1 fw-normal">90.5%</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-secondary-subtle fs-13 px-2 rounded-5 text-secondary fw-medium">High</span>
                                        </td>
                                        <td>
                                            <p class="fs-14 my-1 fw-normal">$1,245</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="p-1 me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/products/headphone.jpg"
                                                        class="img-fluid rounded" alt="product image" width="40px">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 my-1">Headphone</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fs-14 my-1 fw-normal">72.2%</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-warning-subtle fs-13 px-2 rounded-5 text-warning fw-medium">Low</span>
                                        </td>
                                        <td>
                                            <p class="fs-14 my-1 fw-normal">$4,580</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <div class="d-flex align-items-center">
                                                <div class="p-1 me-3 align-items-center justify-content-center d-flex">
                                                    <img src="assets/images/products/camera.jpg" class="img-fluid rounded"
                                                        alt="product image" width="40px">
                                                </div>
                                                <div>
                                                    <h5 class="fs-14 my-1">Camara</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-0">
                                            <p class="fs-14 my-1 fw-normal">68.7%</p>
                                        </td>
                                        <td class="border-0">
                                            <span
                                                class="badge bg-success-subtle fs-13 px-2 rounded-5 text-success fw-medium">Medium</span>
                                        </td>
                                        <td class="border-0">
                                            <p class="fs-14 my-1 fw-normal">$9,812</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xl-6">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Author Sales</h5>
                    </div>
                </div>

                <div class="card-body">
                    <div class="justify-content-center">
                        <div id="author_chart" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
