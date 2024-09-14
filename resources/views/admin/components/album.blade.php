    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <h5>Album ảnh</h5>
            <div class="upload-album"><a href="" class="upload-picture">Tải lên ảnh</a></div>
        </div>
    </div>
    <div class="card-body">
        @php
            $album =
                isset($model->album) && is_array($model->album)
                    ? $model->album
                    : (!empty($model->album)
                        ? json_decode($model->album)
                        : []);
            $gallery = isset($album) && count($album) ? $album : old('album');
        @endphp
        <div class="row">
            <div class="col-lg-12">
                @if (!isset($gallery) || count($gallery) == 0)
                    <div class="click-to-upload">
                        <div class="icon">
                            <a class="upload-picture">
                                <svg style="width:80px;height:80px;fill: #d3dbe2;margin-bottom: 10px;"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <path
                                        d="M80 57.6l-4-18.7v-23.9c0-1.1-.9-2-2-2h-3.5l-1.1-5.4c-.3-1.1-1.4-1.8-2.4-1.6l-32.6 7h-27.4c-1.1 0-2 .9-2 2v4.3l-3.4.7c-1.1.2-1.8 1.3-1.5 2.4l5 23.4v20.2c0 1.1.9 2 2 2h2.7l.9 4.4c.2.9 1 1.6 2 1.6h.4l27.9-6h33c1.1 0 2-.9 2-2v-5.5l2.4-.5c1.1-.2 1.8-1.3 1.6-2.4zm-75-21.5l-3-14.1 3-.6v14.7zm62.4-28.1l1.1 5h-24.5l23.4-5zm-54.8 64l-.8-4h19.6l-18.8 4zm37.7-6h-43.3v-51h67v51h-23.7zm25.7-7.5v-9.9l2 9.4-2 .5zm-52-21.5c-2.8 0-5-2.2-5-5s2.2-5 5-5 5 2.2 5 5-2.2 5-5 5zm0-8c-1.7 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3-1.3-3-3-3zm-13-10v43h59v-43h-59zm57 2v24.1l-12.8-12.8c-3-3-7.9-3-11 0l-13.3 13.2-.1-.1c-1.1-1.1-2.5-1.7-4.1-1.7-1.5 0-3 .6-4.1 1.7l-9.6 9.8v-34.2h55zm-55 39v-2l11.1-11.2c1.4-1.4 3.9-1.4 5.3 0l9.7 9.7c-5.2 1.3-9 2.4-9.4 2.5l-3.7 1h-13zm55 0h-34.2c7.1-2 23.2-5.9 33-5.9l1.2-.1v6zm-1.3-7.9c-7.2 0-17.4 2-25.3 3.9l-9.1-9.1 13.3-13.3c2.2-2.2 5.9-2.2 8.1 0l14.3 14.3v4.1l-1.3.1z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="small-text">Nhấn tải ảnh hoặc click vào đây để thêm hình ảnh</div>
                    </div>
                @endif

                <div class="upload-list {{ isset($gallery) && count($gallery) ? '' : 'hidden' }}">
                    <ul id="sortable" class="clearfix data-album sortui ui-sortable">
                        @if (isset($gallery) && count($gallery))
                            @foreach ($gallery as $key => $val)
                                <li class="ui-state-default">
                                    <div class="thumb">
                                        <span class="span image img-scaledown">
                                            <img src="{{ $val }}" alt="{{ $val }}">
                                            <input type="hidden" name="album[]" value="{{ $val }}">
                                        </span>
                                        <button class="delete-image btn btn-sm btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>

                                        </button>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>
