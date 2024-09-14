<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ env('APP_URL') }}" />
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Custom css -->
    <link href="{{ asset('admin/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Switchery CSS -->
    <link href="{{ asset('admin/assets/css/switchery.css') }}" rel="stylesheet" type="text/css" />
    <!--Select2 css-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom-select2.css') }}">

    <!--FuiToast css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">

    <script>
        var BASE_URL = '{{ env('APP_URL') }}';
        var SUFFIX = '{{ config('apps.general.suffix') }}';
    </script>
</head>

<!-- body start -->

<body data-menu-color="dark" data-sidebar="default">
    <div id="fui-toast"></div>

    <!-- Begin page -->
    <div id="app-layout">


        <!-- Navbar Start -->
        @include('admin.layouts.partials.navbar')
        <!-- end Navbar -->

        <!-- Left Sidebar Start -->
        @include('admin.layouts.partials.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="main">
                    @yield('content')
                </div>
            </div>

            <!-- Footer Start -->
            @include('admin.layouts.partials.footer')
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- ckeditor -->
    <script src="{{ asset('admin/assets/libs/ckeditor/ckeditor.js') }}"></script>

    <!--FuiToast js-->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/js/toast@1.0.1/fuiToast.min.js"></script>

    <!-- Vendor -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- Apexcharts JS -->
    <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- for basic area chart -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

    <!-- Widgets Init Js -->
    <script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    <!-- Switchery js -->
    <script src="{{ asset('admin/assets/js/switchery.js') }}"></script>

    <!--custom script-->
    <script src="{{ asset('admin/assets/custom/index.js') }}"></script>

    <!--Select2 js-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!--Sweet Alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('admin/assets/custom/finder.js') }}"></script>

    <script src="{{ asset('admin/assets/custom/seo.js') }}"></script>

    <script src="{{ asset('admin/assets/libs/ckfinder_2/ckfinder.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap-5',
                width: '100%'
            });

            $('.delete-item').on('click', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');

                Swal.fire({
                    title: "Cảnh báo",
                    text: "Dữ liệu sẽ bị xóa vĩnh viễn và không thể khôi phục. Bạn có chắc chắn muốn xóa không?",
                    icon: "warning",
                    showCancelButton: true,
                    cancelButtonColor: "#d33",
                    cancelButtonText: "Hủy",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Tiếp tục",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                setTimeout(() => {
                                    location.reload();
                                }, 1000);
                            }
                        })
                    }
                });
            })
        });
    </script>

    @stack('scripts')

</body>

</html>
