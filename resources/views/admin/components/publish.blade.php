<div class="card">
    <div class="card-header">
        <h5>Ảnh đại diện</h5>
    </div>
    <div class="card-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <span class="image img-cover image-target"><img class="w-100"
                            src="{{ old('image', $model->image ?? '') ? old('image', $model->image ?? '') : asset('admin/assets/images/not-found.jpg') }}"
                            alt=""></span>
                    <input type="hidden" name="image" value="{{ old('image', $model->image ?? '') }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5>{{ __('Nâng cao') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="mb-3">
                        <select name="publish" class="form-control setupSelect2" id="">
                            {{-- @foreach (__('messages.publish') as $key => $val)
                                <option
                                    {{ $key == old('publish', isset($model->publish) ? $model->publish : '2') ? 'selected' : '' }}
                                    value="{{ $key }}">{{ $val }}</option>
                            @endforeach --}}
                            <option value="2">Trạng thái</option>
                        </select>
                    </div>

                    <select name="follow" class="form-control setupSelect2" id="">
                        {{-- @foreach (__('messages.follow') as $key => $val)
                            <option
                                {{ $key == old('follow', isset($model->follow) ? $model->follow : '') ? 'selected' : '' }}
                                value="{{ $key }}">{{ $val }}</option>
                        @endforeach --}}
                        <option value="0">Theo dõi</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
