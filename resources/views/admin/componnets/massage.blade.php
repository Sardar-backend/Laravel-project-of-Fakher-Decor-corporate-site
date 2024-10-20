

@component('admin.master')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex">
                <h3 class="card-title">فهرست {{ __('messages.messages') }}</h3>

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

                    <th>{{ __('messages.message_subject') }}</th>
                    <th>{{ __('messages.message_text') }}</th>
                    <th>{{ __('messages.email') }}</th>
                    <th>{{ __('messages.date_sent') }} </th>
                  </tr>
                  @foreach ($all as $user)
                  <tr>

                    <td>{{$user->subject}}</td>
                    <td>{{$user->content}}</td>
                    <td>{{$user->email}}</td>

                    <td>
                    @if (LaravelLocalization::getCurrentLocale() == 'en')

                    {{Carbon\Carbon::parse($user->failed_at)->format('Y-m-d')}}
                    @else
                        {{jdate($user->failed_at)->format('%B %d، %Y')}}
                    @endif


                </td>

                  </tr>
                  @endforeach

                </tbody></table>

              <!-- /.card-body -->
            </div>

            </div></div>

            <!-- /.card -->
          </div>
        </div>
@endcomponent
