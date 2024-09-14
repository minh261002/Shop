@if (!isset($offTitle))
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="form-group">
                <label for="" class="form-label">Tiêu Đề</label>
                <input type="text" name="name" value="{{ old('name', $model->name ?? '') }}"
                    class="form-control change-title" data-flag = "{{ isset($model->name) ? 1 : 0 }}" placeholder=""
                    autocomplete="off" {{ isset($disabled) ? 'disabled' : '' }}>
            </div>
        </div>
    </div>
@endif
<div class="row mb-3">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="" class="form-label">Mô tả</label>
            <textarea name="description" class="ck-editor" id="ckDescription" {{ isset($disabled) ? 'disabled' : '' }}
                data-height="100">{{ old('description', $model->description ?? '') }}</textarea>
        </div>
    </div>
</div>

@if (!isset($offContent))
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <div class="d-flex align-items-center justify-content-between">
                    <label for="" class="form-label">Nội dung </label>
                    <a href="" class="multipleUploadImageCkeditor" data-target="ckContent">
                        <i class="fa fa-image"></i> Thêm ảnh
                    </a>
                </div>
                <textarea name="content" class="form-control ck-editor" placeholder="" autocomplete="off" id="ckContent"
                    data-height="500" {{ isset($disabled) ? 'disabled' : '' }}>{{ old('content', $model->content ?? '') }}</textarea>
            </div>
        </div>
    </div>
@endif
