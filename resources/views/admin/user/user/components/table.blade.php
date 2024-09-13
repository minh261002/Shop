<div class="table-responsive">
    <table class="table mb-0">
        <thead>
            <tr>
                <td>
                    <input type="checkbox" value="" id="checkAll" class="input-checkbox">
                </td>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Trạng thái</th>
                <th>Nhóm thành viên</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>
                        <input type="checkbox" value="{{ $user->id }}" class="input-checkbox checkBoxItem">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td class="text-center js-switch-{{ $user->id }}">
                        <input type="checkbox" value="{{ $user->publish }}" class="js-switch status "
                            data-field="publish" data-model="{{ $model }}"
                            {{ $user->publish == 2 ? 'checked' : '' }} data-modelId="{{ $user->id }}" />
                    </td>
                    <td>
                        {{ $user->user_catalogues->name }}
                    </td>
                    <td>
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-primary">
                            <i data-feather="edit-2"></i>
                        </a>
                        <a href="{{ route('admin.user.delete', $user->id) }}"
                            class="btn btn-sm btn-danger delete-item">
                            <i data-feather="trash"></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Không có dữ liệu</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links('pagination::bootstrap-5') }}

</div>
