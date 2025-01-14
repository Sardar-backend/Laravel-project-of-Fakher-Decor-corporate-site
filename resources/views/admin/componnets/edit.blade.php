@component('admin.master')

<div class="row">
    <div class="col-lg-12">
        @include('admin.layaut.errors')
    <div class="card ">
              <div class="card-header">
                <h3 class="card-title">{{ __('messages.edit') }} کاربر</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('edituser', ['id'=>$user->id])}}" enctype="multipart/form-data" method="post">
                @method('PATCH')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام کاربر</label>
                  <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام کاربر را وارد کنید">
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">پسورد</label>

                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="پسورد را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">تکرار پسورد</label>

                    <div class="col-sm-10">
                      <input type="password" name="password_confirmation" class="form-control" id="inputEmail3" placeholder="پسورد را وارد کنید">
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
                        <input name="is_staff" type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">کاربر ادمین</label>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
                        <input id="exampleCheck2" onclick="let sds= document.querySelector('exampleCheck2').value == 1 " name="is_superuser" type="checkbox" value="0" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck2">کاربر کارمند</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">{{ __('messages.edit') }}</button>
                  <a href="{{route('admin')}}" class="btn btn-default float-left">{{ __('messages.cancel') }}<a/>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </div>
</div>

@endcomponent
