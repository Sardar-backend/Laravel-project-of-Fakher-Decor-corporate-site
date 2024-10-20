

@component('admin.master')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex">
                <h3 class="card-title">فهرست کاربران</h3>

                <div class="card-tools d-flex"><form action="">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                    <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                    </form>
                    <div class="btn-group-sm mr-2"></div>
                    <a href="{{ route('admin_blogCategory.create') }}" class="btn btn-info"> {{ __('messages.create_category') }} </a>
                    </div>
                </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>{{ __('messages.id') }}</th>
                    <th>نام</th>
                    <th>دسته بندی والد</th>
                    <th>{{ __('messages.actions') }}</th>

                  </tr>
                  @foreach ($category as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->parent}}</td>

                    <td class="d-flex"><a href="{{route('admin_blogCategory.show', ['admin_blogCategory'=>$user->id])}}"><button class="btn btn-primary"><span class="badge badge-primary">{{ __('messages.edit') }}</span></button></a>
                    <form action="{{route('admin_blogCategory.destroy', ['admin_blogCategory'=>$user->id])}}" method="post" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><span class="badge badge-danger">{{ __('messages.delete') }}</span></button>
                    </form></td>
                  </tr>
                  @endforeach

                </tbody></table>

              <!-- /.card-body -->
            </div>
            <!-- <div class="card-footer d-flex">
                <div class="cart ">
                    {{$category->render()}}
                </div>

              </div> -->
            </div></div>
            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    <div class="cca card-footer d-flex">
                                        <div class="cca cart d-flex">
                                            {{$category->render()}}
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

            <!-- /.card -->
          </div>
        </div>
@endcomponent
