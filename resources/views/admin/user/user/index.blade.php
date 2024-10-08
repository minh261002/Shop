@extends('admin.layouts.master')

@section('title', 'Quản lý thành viên')

@section('content')
    <div class="container-fluid">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản Lý Thành Viên</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý thành viên</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Danh sách thành viên</h5>

                    @include('admin.components.toolbox')
                </div><!-- end card header -->

                <div class="card-body">
                    @include('admin.user.user.components.filter')
                    @include('admin.user.user.components.table')
                </div>
            </div>
        </div>
    </div>
@endsection
