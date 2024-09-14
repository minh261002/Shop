@extends('admin.layouts.master')

@section('title', 'Quản lý nhóm bài viết')

@section('content')
    <div class="container-fluid">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Thêm Mới Nhóm Bài Viết</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Trang chủ</a></li>
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Quản lý nhóm bài viết</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm mới nhóm bài viết</li>

                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Thêm mới nhóm bài viết</h5>
                    </div>
                    <div class="card-body">
                        @include('admin.components.content')
                    </div>
                </div>

                <div class="card">
                    @include('admin.components.album')
                </div>

                <div class="card">
                    @include('admin.components.seo')
                </div>
            </div>

            <div class="col-lg-3">
                @include('admin.post.catalogue.components.aside')

            </div>
        </div>
    </div>
@endsection
