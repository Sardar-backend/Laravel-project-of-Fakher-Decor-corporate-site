@component('admin.master')


    <div class="row">
        <div class="col-lg-12">
        @include('admin.layaut.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ثبت تصویر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('project.gallery.store' , ['project' => $project->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="project_id" value="{{$project->id}}">
                    <div id="father">
                     <!-- card -->
                    <div class="card-body">
                    <div class="form-group">

                    <div class="col-sm-10">
                    <label for="email">عکس مقاله  :</label>
                    <input name="image" accept="image/*" type="file" class="form-control"   ></div>
                    <br>
                    <div class="col-sm-10">
                    <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                    <div class="col-sm-10">
                      <input type="text" name="alt" class="form-control" id="inputEmail3" placeholder="توضیحات را وارد کنید">
                    </div>
                    </div><hr></div>
                    </div>

                    <!-- card -->
                    </div>
                        <!-- <button class="btn btn-sm btn-danger" type="button" id="add_project_image">تصویر جدید</button>
                    </div> -->
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت تصاویر</button>
                        <a href="{{ route('project.gallery.index' , ['project' => $project->id]) }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('my-editor', options);
    </script>


@endcomponent
