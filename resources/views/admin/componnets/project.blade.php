

@component('admin.master')
<style>
    th{
        font-size: small !important;
    }
</style>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex">
                <h3 class="card-title">فهرست {{ __('messages.projects') }}</h3>

                <div class="card-tools d-flex"><form action="">
                  <div class="input-group input-group-sm" style="width :150px;">

                    <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                    <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                    </form>
                    <div class="btn-group-sm mr-2"></div>
                    <a href="{{ route('admin_project.create') }}" class="btn btn-info">{{ __('messages.create_project') }}</a>
                    </div>
                </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>{{ __('messages.id') }}</th>
                    <th>{{ __('messages.project_name') }}</th>
                    <th>{{ __('messages.area') }}</th>
                    <th>{{ __('messages.start_date') }} </th>
                    <th>{{ __('messages.foundation_area') }}</th>
                    <th> {{ __('messages.financial_value') }}</th>
                    <th>{{ __('messages.project_location') }} </th>
                    <th>{{ __('messages.project_engineer') }} </th>
                    <th>{{ __('messages.engineer_specialty') }} </th>

                  </tr>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->area}}</td>
                    <td>
                    @if (LaravelLocalization::getCurrentLocale() == 'en')

                    {{Carbon\Carbon::parse($user->updated_at)->format('Y-m-d')}}
                    @else
                        {{jdate($user->updated_at)->format('%B %d، %Y')}}
                    @endif
                    <!-- {{jdate($user->start_date)->format('%B %d، %Y')}} -->


                    </td>
                    <td>{{$user->infrastructure}}</td>
                    <td>{{$user->FinancialValue}}</td>
                    <td>{{$user->location}}</td>
                    <td>{{$user->engineer}}</td>
                    <td>{{$user->EngineerSpecialty}}</td>
                    <!-- <td>{{$user->Chosen}}</td> -->


                    <td class="d-flex"><a href="{{route('admin_project.show', ['admin_project'=>$user->id])}}"><button class="btn btn-primary"><span class="badge badge-primary">{{ __('messages.edit') }}</span></button></a>
                    <form action="{{route('admin_project.destroy', ['admin_project'=>$user->id])}}" method="post" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><span class="badge badge-danger">{{ __('messages.delete') }}</span></button>

                    </form>
                    <a class="mr-1" href="{{route('project.gallery.index', ['project'=>$user->id])}}"><button class="btn btn-warning"><span class="badge badge-warning">{{ __('messages.image_gallery') }}</span></button></a>

                    <!-- <button type="submit" class="btn btn-warning mr-1"><span class="badge badge-warning ">{{ __('messages.image_gallery') }}</span></button> -->
                </td>
                  @endforeach

                </tbody></table>

              <!-- /.card-body -->
            </div></div></div>
            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    <div class="cca card-footer d-flex">
                                        <div class="cca cart d-flex">
                                            {{$users->render()}}
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

          </div>
        </div>
@endcomponent
