<div class="row align-items-center mb-3">
    <form class="col-md-10">
        <div class="d-flex align-items-center justify-center">
            <select name="perpage" class="w-50 form-control rounded-0">
                @php
                    $perpage = request('perpage') ?: old('perpage');
                @endphp
                <option value="">[Chọn số bản ghi]</option>
                @for ($i = 20; $i <= 150; $i += 10)
                    <option {{ $perpage == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }} bản
                        ghi</option>
                @endfor
            </select>

            <select name="publish" id="" class="w-50 form-control rounded-0">
                @php
                    $publish = request('publish') ?: old('publish');
                @endphp
                @foreach (config('apps.general.publish') as $key => $val)
                    <option {{ $publish == $key ? 'selected' : '' }} value="{{ $key }}">{{ $val }}
                    </option>
                @endforeach
            </select>

            <select name="id" id="" class="w-50 form-control rounded-0">
                <option value="">[Chọn nhóm thành viên]</option>
                @foreach ($user_catalogues as $user)
                    <option {{ request('id') == $user->id ? 'selected' : '' }} value="{{ $user->id }}">
                        {{ $user->name }}</option>
                @endforeach
            </select>

            <input type="text" class="form-control rounded-0" placeholder="Tìm kiếm ..." name="keyword">

            <button class="btn btn-primary rounded-0 ">
                <i data-feather="search" class="icon-xs"></i>
            </button>
        </div>
    </form>

    <div class="col-md-2">
        <a class="w-100 btn btn-primary rounded-0" href="{{ route('admin.user.catalogue.create') }}" class="w-100">
            <i data-feather="plus" class="icon-xs me-1"></i>
            Thêm nhóm thành viên mới</a>
    </div>
</div>
