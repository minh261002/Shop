<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">SEO</h5>
    </div>
    <div class="card-body">
        <div class="seo-container border p-3 mb-3">
            <div class="meta-title">
                {{ old('meta_title', $model->meta_title ?? '') ? old('meta_title', $model->meta_title ?? '') : 'Tiêu đề' }}
            </div>
            <div class="canonical">
                {{ old('canonical', $model->canonical ?? '') ? config('app.url') . old('canonical', $model->canonical ?? '') . config('apps.general.suffix') : 'Đường dẫn' }}
            </div>
            <div class="meta-description">
                {{ old('meta_description', $model->meta_title ?? '') ? old('meta_description', $model->meta_title ?? '') : 'Mô tả' }}
            </div>
        </div>

        <div>
            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <label for="" class="form-label d-flex align-items-center justify-content-between">
                        <span>Tiêu đề</span>
                    </label>
                    <input type="text" name="meta_title" value="{{ old('meta_title', $model->meta_title ?? '') }}"
                        class="form-control" placeholder="" autocomplete="off" {{ isset($disabled) ? 'disabled' : '' }}>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label d-flex align-items-center justify-content-between">
                        <span>Mô tả</span>
                        <span class="count_meta-description"><span class="countD">0</span> / 160
                            Ký tự</span>
                    </label>
                    <textarea name="meta_description" class="form-control" placeholder="" autocomplete="off"
                        {{ isset($disabled) ? 'disabled' : '' }}>{{ old('meta_description', $model->meta_description ?? '') }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <div class="form-group position-relative">
                        <label for="" class="form-label">
                            Đường dẫn
                        </label>

                        <input type="text" name="canonical" value="{{ old('canonical', $model->canonical ?? '') }}"
                            class="form-control seo-canonical" placeholder="" autocomplete="off"
                            {{ isset($disabled) ? 'disabled' : '' }}>
                        <span class="baseUrl">{{ config('app.url') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
