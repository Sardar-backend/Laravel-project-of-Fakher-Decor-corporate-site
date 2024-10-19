@extends('base')
@section('content')

        <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
            <div class="flex justify-center">
                <div class="text-sm absolute top-1/4 md:top-1/2">
                    <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4"> {{ __('messages.projects') }}</h2>
                    <div class="breadcrumbs flex justify-center">
                        <ul class="">
                          <li><a>{{ __('messages.Home') }}</a></li>
                          <li> {{ __('messages.projects') }}</li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>

    </section>

    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="container mx-auto max-w-screen-xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach ($projects as  $project)

                    <div class="swiper-slide text-center group/proj cursor-pointer">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl">
                            <a href="{{route('project_single',['id'=>$project->id])}}">
                                <img class="relative" src="/storage/{{$project->gallery()->first()->image}}" alt="" srcset="">
                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-gradient-to-t from-slate-900 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-70"></div>
                            </a>
                        </div>
                        <figcaption class="absolute bottom-2 w-full invisible group-hover/proj:visible transition ease-in duration-1000 group-hover/proj:transition-all group-hover/proj:-translate-y-4 group-hover/proj:duration-1000 group-hover/proj:text-white">
                            <h3 class="font-YekanBakh-Bold text-sm">پروژه {{$project->name}}</h3>
                            <p class="">{{ __('messages.click_to_view') }}</p>
                        </figcaption>
                    </div>

                    @endforeach


                </div>
            </div>
        </div>
    </section>

    @endsection
