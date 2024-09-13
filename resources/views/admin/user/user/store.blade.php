@if ($type == 'create')
    @php
        $action = route('admin.user.store');
    @endphp
@else
    @php
        $action = route('admin.user.update', $user->id);
    @endphp
@endif

@extends('admin.layouts.master')

@if ($type == 'create')
    @section('title', 'Thêm thành viên mới')
@else
    @section('title', 'Chỉnh sửa thành viên')
@endif

@section('content')
    <div class="container-fluid">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Quản Lý Thành Viên</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Trang chủ</a></li>
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Quản lý thành viên</a>
                    </li>
                    <li class="breadcrumb-item">Thêm thành viên mới</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0 fs-20">Thêm thành viên mới</h5>
                </div>

                <div class="card-body">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @if ($type == 'edit')
                            @method('PUT')
                        @endif
                        <div>
                            <p class="fs-18 fw-semibold text-primary">Thông tin cơ bản</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $user->name ?? '') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="name" name="email"
                                        value="{{ old('email', $user->email ?? '') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone', $user->phone ?? '') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                @php
                                    $userCatalogue = ['[Chọn nhóm thành viên]', 'Quản trị viên', 'Cộng tác viên'];
                                @endphp
                                <div class="col-md-6 mb-3">
                                    <label for="user_catalogue_id" class="form-label">Nhóm thành viên</label>
                                    <select name="user_catalogue_id" id="user_catalogue_id" class="form-select select2">
                                        @foreach ($userCatalogue as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_catalogue_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="birthday" class="form-label">Ngày sinh</label>
                                    <input type="date" name="birthday"
                                        value="{{ old('birthday', isset($user->birthday) ? date('Y-m-d', strtotime($user->birthday)) : '') }}"
                                        class="form-control" placeholder="" autocomplete="off">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="" class="form-label">Ảnh đại diện </label>
                                    <input type="text" name="image" value="{{ old('image', $user->image ?? '') }}"
                                        class="form-control upload-image" placeholder="" autocomplete="off"
                                        data-upload="Images">
                                </div>
                            </div>
                        </div>
                        @if ($type == 'create')
                            <div>
                                <p class="fs-18 fw-semibold text-primary">Mật khẩu</p>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div>
                            <p class="fs-18 fw-semibold text-primary">Thông tin liên hệ</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="province_id" class="form-label">Chọn Tỉnh / Thành Phố</label>
                                    <select name="province_id" class="form-control select2 province location"
                                        data-target="districts">
                                        <option value="0">[Chọn Tỉnh / Thành Phố]</option>
                                        @if (isset($provinces))
                                            @foreach ($provinces as $province)
                                                <option @if (old('province_id') == $province->code) selected @endif
                                                    value="{{ $province->code }}">{{ $province->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="" class="form-label">Chọn Quận / Huyện </label>
                                    <select name="district_id" class="form-control districts select2 location"
                                        data-target="wards">
                                        <option value="0">[Chọn Quận / Huyện]</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="" class="form-label">Chọn Phường / Xã </label>
                                    <select name="ward_id" class="form-control select2 wards">
                                        <option value="0">[Chọn Phường / Xã]</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ old('address', $user->address ?? '') }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="description" class="form-label">Ghi chú</label>
                                    <textarea name="description" id="note" class="form-control" rows="3">{{ old('description', $user->description ?? '') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Quay lại</a>
                            <button type="submit" class="btn btn-primary">
                                {{ $type == 'create' ? 'Thêm thành viên mới' : 'Lưu thay đổi' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var province_id = '{{ isset($user->province_id) ? $user->province_id : old('province_id') }}'
        var district_id = '{{ isset($user->district_id) ? $user->district_id : old('district_id') }}'
        var ward_id = '{{ isset($user->ward_id) ? $user->ward_id : old('ward_id') }}'
    </script>
@endsection

@push('scripts')
    <script src="{{ asset('admin/assets/custom/location.js') }}"></script>
@endpush
