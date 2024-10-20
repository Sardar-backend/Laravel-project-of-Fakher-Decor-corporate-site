

@component('admin.master')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.images') }}</h3>

                    <div class="card-tools d-flex">
                        <div class="btn-group-sm mr-1">
                            <a href="{{ route('project.gallery.create' , ['project' => $project->id]) }}" class="btn btn-info">  {{ __('messages.upload_new_image') }}</a>

                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        @foreach($images as $image)
                            <div class="col-sm-2">
                                <a href="">
                                    <img src="/storage/{{$image->image}}" class="img-fluid mb-2" alt="">
                                </a>
                                <form action="{{ route('project.gallery.destroy' , ['project' => $project->id , 'gallery' => $image->id]) }}" id="image-{{ $image->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                </form>

                                <a href="#" class="btn btn-sm btn-danger" onclick="document.getElementById('image-{{ $image->id }}').submit()">{{ __('messages.delete') }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $images->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endcomponent
