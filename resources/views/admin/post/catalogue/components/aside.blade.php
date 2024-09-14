<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Chọn danh mục cha</h5>
    </div>

    <div class="card-body">
        <div class="form-group">
            <label for="parent_id" class="form-label">Danh mục cha</label>
            <select name="parent_id" class="form-control select2" id="">
                {{-- @foreach ($dropdown as $key => $val)
                    <option
                        {{ $key == old('parent_id', isset($postCatalogue->parent_id) ? $postCatalogue->parent_id : '') ? 'selected' : '' }}
                        value="{{ $key }}">{{ $val }}</option>
                @endforeach --}}
                <option value="0">Danh mục gốc</option>
            </select>
        </div>
    </div>
</div>

@include('admin.components.publish')
