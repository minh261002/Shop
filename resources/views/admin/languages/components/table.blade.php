<div class="table-responsive">
    <table class="table mb-0">
        <thead>
            <tr>
                <td class="text-center">
                    <input type="checkbox" value="" id="checkAll" class="input-checkbox">
                </td>
                <th class="text-center">Tên ngôn ngữ</th>
                <th class="text-center">Ảnh</th>
                <th class="text-center">Mã</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($languages as $lang)
                <tr>
                    <td class="text-center">
                        <input type="checkbox" value="{{ $lang->id }}" class="input-checkbox checkBoxItem">
                    </td>
                    <td class="text-center">{{ $lang->name }}</td>
                    <td class="text-center">{{ $lang->image }}</td>
                    <td class="text-center">{{ $lang->canonical }}</td>
                    <td class="text-center js-switch-{{ $lang->id }}">
                        <input type="checkbox" value="{{ $lang->publish }}" class="js-switch status "
                            data-field="publish" data-model="{{ $model }}"
                            {{ $lang->publish == 2 ? 'checked' : '' }} data-modelId="{{ $lang->id }}" />
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.language.edit', $lang->id) }}" class="btn btn-sm btn-primary">
                            <i data-feather="edit-2"></i>
                        </a>
                        <a href="{{ route('admin.language.delete', $lang->id) }}"
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

    {{ $languages->links('pagination::bootstrap-5') }}

</div>
