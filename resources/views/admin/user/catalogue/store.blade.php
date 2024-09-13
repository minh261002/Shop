@if ($type == 'create')
    @php
        $action = route('admin.user.catalogue.store');
    @endphp
@else
    @php
        $action = route('admin.user.catalogue.update', $user_catalogue->id);
    @endphp
@endif

@extends('admin.layouts.master')

@if ($type == 'create')
    @section('title', 'Thêm nhóm thành viên mới')
@else
    @section('title', 'Chỉnh sửa nhóm thành viên')
@endif

@section('content')
    <div class="container-fluid">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản Lý Nhóm Thành Viên</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Trang chủ</a></li>
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Quản lý nhóm thành viên</a>
                    </li>
                    <li class="breadcrumb-item">Thêm nhóm thành viên mới</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0 fs-20">Thêm thành nhóm viên mới</h5>
                </div>

                <div class="card-body">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @if ($type == 'edit')
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Tên nhóm thành viên</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ isset($user_catalogue->name) ? $user_catalogue->name : old('name') }}">
                        </div>

                        @if ($type == 'edit')
                            <div class="mb-3">
                                <label for="publish">Trạng thái</label>
                                <select class="form-select" id="publish" name="publish">
                                    @foreach (config('apps.general.publish') as $key => $val)
                                        <option value="{{ $key }}"
                                            {{ $user_catalogue->publish == $key ? 'selected' : '' }}>
                                            {{ $val }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ isset($user_catalogue->description) ? $user_catalogue->description : old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('admin.user.catalogue.index') }}" class="btn btn-secondary">Quay lại</a>
                            <button type="submit" class="btn btn-primary">
                                {{ $type == 'create' ? 'Thêm nhóm thành viên mới' : 'Cập nhật' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
