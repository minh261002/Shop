<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Đăng Nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-color">

    <!-- Begin page -->
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12">
                <div class="p-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 col-xl-6 col-lg-6">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="mb-0 border-0">
                                        <div class="p-0">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <a href="#" class="auth-logo">
                                                        <img src="{{ asset('admin/assets/images/logo-dark.png') }}"
                                                            alt="logo-dark" class="mx-auto" height="28" />
                                                    </a>
                                                </div>

                                                <div class="auth-title-section mb-3">
                                                    <h3 class="text-dark fs-20 fw-medium mb-2">Đăng Nhập</h3>
                                                    <p class="text-dark text-capitalize fs-14 mb-0">
                                                        Vui lòng đăng nhập với quyền quản trị viên của bạn.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-0">
                                            <form action="{{ route('admin.login.post') }}" class="my-4"
                                                id="login-form" method="POST">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label for="emailaddress" class="form-label">Email</label>
                                                    <input class="form-control" type="email" id="emailaddress"
                                                        name="email" value="{{ old('email') }}">
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-3">

                                                    <label for="password" class="form-label">Mật
                                                        Khẩu</label>
                                                    <div class="position-relative">
                                                        <input class="form-control" type="password" id="password"
                                                            name="password">

                                                        <div class="position-absolute top-50 end-0 translate-middle-y me-2"
                                                            style="cursor: pointer;">
                                                            <span class="mdi mdi-eye-outline fs-3"></span>
                                                        </div>
                                                    </div>

                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group d-flex mb-3">
                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="checkbox-signin" name="remember">
                                                            <label class="form-check-label" for="checkbox-signin">Lưu
                                                                thông tin</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-end">
                                                        <a class='text-muted fs-14' href='auth-recoverpw.html'>Quên mật
                                                            khẩu?</a>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit"
                                                                id="login-button"> Đăng Nhập
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-md-6 col-xl-6 col-lg-6 p-0 vh-100 d-flex justify-content-center account-page-bg">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
