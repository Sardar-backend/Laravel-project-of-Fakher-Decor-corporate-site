@component('admin.layouts.content' , ['title' => 'ایجاد محصول'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item">{{ $product->title }}</li>
        <li class="breadcrumb-item active">{{ __('messages.edit') }} تصویر</li>
    @endslot

    @slot('script')
        <script>
            // input
            let image;
            $('body').on('click','.button-image' , (event) => {
                event.preventDefault();

                image = $(event.target).closest('.image-field');

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });

            // set file link
            function fmSetLink($url) {
                image.find('.image_label').first().val($url);
            }
        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.edit') }} تصویر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('admin.products.gallery.update' , ['product' => $product->id, 'gallery' => $gallery->id ]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="card-body">
{{--                        <h6>ویژگی محصول</h6>--}}
{{--                        <hr>--}}
                        <div id="images_section">
                            <div class="row image-field">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label>تصویر</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control image_label" name="image" value="{{ old('image' , $gallery->image) }}"
                                                   aria-label="Image" aria-describedby="button-image">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary button-image" type="button">انتخاب</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label>عنوان تصویر</label>
                                        <input type="text" name="alt" class="form-control" value="{{ old('alt' , $gallery->alt) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">{{ __('messages.edit') }} تصاویر</button>
                        <a href="{{ route('admin.products.gallery.index' , ['product' => $product->id]) }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>



@endcomponent
