@component('admin.master')
<div class="row">
    <div class="col-lg-12">
        @include('admin.layaut.errors')
    <div class="card ">
              <div class="card-header">
                <h3 class="card-title">ایجاد محصول</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('admin_project.store')}}"  enctype="multipart/form-data" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">{{ __('messages.project_name') }} </label>
                  <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام محصول را وارد کنید">
                  </div>
                  </div>
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">{{ __('messages.area') }}</label>
                      <div class="col-sm-10">
                          <input type="text" name="area" class="form-control" id="inputEmail3" placeholder="قیمت را وارد کنید">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">{{ __('messages.about') }}</label>

                    <div class="col-sm-10">
                        <textarea name="about"  class="form-control" placeholder="توضیحات را وارد کنید" id="discription" cols="30" rows="10"></textarea>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">{{ __('messages.start_date') }}</label>

                    <div class="col-sm-10">
                        <input name="start_date" type="date" class="form-control" placeholder="توضیحات را وارد کنید" id="discription" cols="30" rows="10">
                      <!-- <input type="text-eria" name="discription" id="discription" placeholder="توضیحات را وارد کنید" > -->
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"> {{ __('messages.foundation_area') }}</label>

                      <div class="col-sm-10">
                          <input name="infrastructure"  class="form-control" placeholder="نقد را وارد کنید" id="discription" cols="30" rows="10">
                          <!-- <input type="text-eria" name="discription" id="discription" placeholder="توضیحات را وارد کنید" > -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">{{ __('messages.financial_value') }}</label>

                        <div class="col-sm-10">
                            <input type="text" max="5" min="0" name="FinancialValue" class="form-control" id="inputEmail3" placeholder="ستاره را وارد کنید">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">{{ __('messages.project_location') }}</label>
                    <div class="col-sm-10">
                        <input type="text" name="location" class="form-control" id="inputEmail3" placeholder="برند محصول را وارد کنید">
                    </div>
                    </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">{{ __('messages.project_engineer') }}</label>

                    <div class="col-sm-10">
                      <input type="text" min="0" name="engineer" class="form-control" id="inputEmail3" placeholder="طول را وارد کنید">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">{{ __('messages.engineer_specialty') }}</label>

                    <div class="col-sm-10">
                      <input type="text" min="0" name="EngineerSpecialty" class="form-control" id="inputEmail3" placeholder="عرض را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-sm-10">
                  <label for="email">عکس مقاله  :</label>
                  <input name="EngineerPhoto" accept="image/*" type="file" class="form-control"   >
                  </div></div>







                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">ایجاد محصول</button>
                  <a href="{{route('admin_project.index')}}" class="btn btn-default float-left">{{ __('messages.cancel') }}<a/>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </div>
</div>

@endcomponent
