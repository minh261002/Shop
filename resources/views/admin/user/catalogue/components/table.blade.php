<div class="table-responsive">
    <table class="table mb-0">
        <thead>
            <tr>
                <td>
                    <input type="checkbox" value="" id="checkAll" class="input-checkbox">
                </td>

                <th>Tên nhóm thành viên</th>
                <th>Mô tả</th>
                <th class="text-center">Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($user_catalogues as $user)
                <tr>
                    <td>
                        <input type="checkbox" value="{{ $user->id }}" class="input-checkbox checkBoxItem">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->description }}</td>
                    <td class="text-center js-switch-{{ $user->id }}">
                        <input type="checkbox" value="{{ $user->publish }}" class="js-switch status "
                            data-field="publish" data-model="{{ $model }}"
                            {{ $user->publish == 2 ? 'checked' : '' }} data-modelId="{{ $user->id }}" />
                    </td>
                    <td>
                        <a href="{{ route('admin.user.catalogue.edit', $user->id) }}" class="btn btn-sm btn-primary">
                            <i data-feather="edit-2"></i>
                        </a>
                        <a href="{{ route('admin.user.catalogue.delete', $user->id) }}"
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

    {{ $user_catalogues->links('pagination::bootstrap-5') }}

</div>
