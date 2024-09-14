@php
    if ($type == 'create') {
        $action = route('admin.language.store');
        $title = 'Thêm ngôn ngữ mới';
        $breadcrumb = 'Thêm ngôn ngữ mới';
    } else {
        $action = route('admin.language.update', $language->id);
        $title = 'Chỉnh sửa ngôn ngữ';
        $breadcrumb = 'Chỉnh sửa ngôn ngữ';
    }
@endphp

@extends('admin.layouts.master')

@section('title', $title)

@section('content')
    <div class="container-fluid">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản Lý Ngôn Ngữ</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Trang chủ</a></li>
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Quản lý ngôn ngữ</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">{{ $breadcrumb }}</a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0 fs-20">Thêm ngôn ngữ mới</h5>
                </div>

                <div class="card-body">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @if ($type == 'edit')
                            @method('PUT')
                        @endif

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Tên ngôn ngữ</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ isset($language->name) ? $language->name : old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="canonical" class="form-label">Mã</label>
                                <input type="text" class="form-control" id="canonical" name="canonical"
                                    value="{{ isset($language->canonical) ? $language->canonical : old('canonical') }}">
                                @error('canonical')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            @if ($type == 'edit')
                                <div class="col-md-6 mb-3">
                                    <label for="publish">Trạng thái</label>
                                    <select class="form-select" id="publish" name="publish">
                                        @foreach (config('apps.general.publish') as $key => $val)
                                            <option value="{{ $key }}"
                                                {{ $language->publish == $key ? 'selected' : '' }}>
                                                {{ $val }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('publish')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="current">Mặc định</label>
                                    <select class="form-select" id="current" name="current">
                                        @foreach (config('apps.general.current') as $key => $val)
                                            <option value="{{ $key }}"
                                                {{ $language->current == $key ? 'selected' : '' }}>
                                                {{ $val }}
                                            </option>
                                        @endforeach
                                    </select>


                                    @error('current')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="canonical" class="form-label">Ảnh</label>
                                <input type="text" class="form-control" id="image" name="image">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <a href="{{ route('admin.user.catalogue.index') }}" class="btn btn-secondary">Quay lại</a>
                                <button type="submit" class="btn btn-primary">
                                    {{ $type == 'create' ? 'Thêm ngôn ngữ mới' : 'Cập nhật' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
