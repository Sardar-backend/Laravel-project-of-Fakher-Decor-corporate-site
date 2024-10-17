@extends('base')
@section('content')


    <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
        <div class="flex justify-center">
            <div class="text-sm absolute top-1/4 md:top-1/2">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">{{ __('messages.our_services') }}</h2>
                <div class="breadcrumbs flex justify-center">
                    <ul class="">
                      <li><a>خانه</a></li>
                      <li>{{ __('messages.our_services') }}</li>
                    </ul>
                </div>
              </div>
        </div>
    </div>

</section>

    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="container mx-auto max-w-screen-xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25l9.75 9.75h-3.75v7.5H6.75v-7.5H3L12 2.25z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 21.75v-6h4.5v6h-4.5z" />
                    </svg>




                        <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm"> {{ __('messages.home_interior_design') }} </h3>
                        <p class="mt-2">{{ __('messages.interior_design_description') }}</p>
                    </div>
                    <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21V5.25A2.25 2.25 0 0018.75 3h-13.5A2.25 2.25 0 003 5.25V21m18 0H3m18 0a2.25 2.25 0 002.25-2.25v-13.5A2.25 2.25 0 0021 3.75M3 21a2.25 2.25 0 01-2.25-2.25v-13.5A2.25 2.25 0 013 3.75m9 3v9" />
                    </svg>

                        <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm">{{ __('messages.office_space_design') }}</h3>
                        <p class="mt-2"> {{ __('messages.office_interior_design') }}</p>
                    </div>
                    <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                          </svg>

                        <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm">{{ __('messages.renovation_and_remodeling') }}</h3>
                        <p class="mt-2">{{ __('messages.renovation_services') }}</p>
                    </div>
                    <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 9V7.5A2.25 2.25 0 016.75 5.25h10.5A2.25 2.25 0 0119.5 7.5V9M3 21v-9m18 9v-9m-10.5 3.75v5.25m1.5 0v-5.25M6 21h12" />
</svg>

                        <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm"> {{ __('messages.modern_kitchen_design_and_execution') }} </h3>
                        <p class="mt-2"> {{ __('messages.modern_kitchen_design') }}</p>
                    </div>
                    <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                        </svg>


                      <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm"> {{ __('messages.lighting_design_and_execution') }}</h3>
                      <p class="mt-2"> {{ __('messages.professional_and_artistic_lighting_execution') }}</p>
                  </div>
                  <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>

                      <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm"> {{ __('messages.custom_furniture_design') }}</h3>
                      <p class="mt-2"> {{ __('messages.custom_furniture_design_description') }}</p>
                  </div>
                  <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>

                      <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm">{{ __('messages.commercial_decor_design_description') }}</h3>
                      <p class="mt-2">{{ __('messages.custom_furniture_design_description') }}</p>
                  </div>
                  <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                        </svg>
                      <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm">{{ __('messages.online_decoration_consultation_description') }}</h3>
                      <p class="mt-2">{{ __('messages.online_decoration_consultation') }}</p>
                  </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
