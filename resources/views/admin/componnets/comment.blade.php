@component('admin.master')



<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex">
                <h3 class="card-title">فهرست {{ __('messages.user_reviews') }}</h3>

                <div class="card-tools d-flex"><form action="">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                    <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                    </form>
                    <div class="btn-group-sm mr-2"></div>
                    <a href="{{ route('create') }}" class="btn btn-info">{{ __('messages.create_user') }}</a>
                    </div>
                </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>{{ __('messages.id') }}</th>
                    <th> {{ __('messages.username') }}</th>
                    <th>{{ __('messages.content') }}</th>
                    <th>{{ __('messages.status') }}</th>
                    <th>{{ __('messages.id') }} کامنت والد</th>
                    <th>{{ __('messages.actions') }}</th>
                  </tr>
                  @foreach ($comments as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->user->name}}</td>
                    <td>{{$user->content}}</td>
                    <td>
                        @if (! $user->status)
                        <span class="badge bg-danger p-2">{{ __('messages.unapproved') }}</span>

                        @else
                        <span class="badge badge-success p-2">{{ __('messages.approved') }}</span>

                        @endif

                    </td>
                    <td>{{$user->parent_id}}</td>
                    <td class="d-flex">
                        <!-- <a href="{{route('edit_post', ['id'=>$user->id])}}">< class="btn btn-primary"><span class="badge badge-primary">{{ __('messages.edit') }}</span></a> -->
                        @if (! $user->status)
                    <form action="{{route('admin_comment.edit', ['admin_comment'=>$user->id])}}" method="get" class="mr-1">
                        @csrf

                        <button type="submit" class="btn btn-primary"><span class="badge badge-primary">{{ __('messages.approve') }}</span></button>
                    </form>

                        @endif


                    <form action="{{route('admin_comment.destroy', ['admin_comment'=>$user->id])}}" method="post" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><span class="badge badge-danger">{{ __('messages.delete') }}</span></button>
                    </form></td>
                  </tr>
                  @endforeach

                </tbody></table>

              <!-- /.card-body -->
            </div>
            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    <div class="cca card-footer d-flex">
                                        <div class="cca cart d-flex">
                                            {{$comments->render()}}
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
            </div></div>

            <!-- /.card -->
          </div>
        </div>





@endcomponent
