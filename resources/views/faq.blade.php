@extends('base')
@section('content')

      <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
          <div class="flex justify-center">
              <div class="text-sm absolute top-1/4 md:top-1/2">
                  <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">{{ __('messages.frequently_asked_questions') }}</h2>
                  <div class="breadcrumbs flex justify-center">
                      <ul class="">
                        <li><a>            {{ __('messages.Home') }}</a></li>
                        <li>{{ __('messages.frequently_asked_questions') }}</li>
                      </ul>
                  </div>
                </div>
          </div>
      </div>

  </section>

    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
          <div class="collapse collapse-plus bg-base-200 my-4">
            <input type="radio" name="my-accordion-3" checked="checked" />
            <div class="collapse-title text-base font-YekanBakh-ExtraBold">
            {{ __('messages.3d_design_offer') }}

            </div>
            <div class="collapse-content">
                <p>            {{ __('messages.3d_design_response') }}
                </p>
            </div>
          </div>
          <div class="collapse collapse-plus bg-base-200 my-4">
            <input type="radio" name="my-accordion-3" checked="checked" />
            <div class="collapse-title text-base font-YekanBakh-ExtraBold">
            {{ __('messages.timeframe') }}

            </div>
            <div class="collapse-content">
                <p>            {{ __('messages.project_duration') }}
                </p>
            </div>
          </div>
          <div class="collapse collapse-plus bg-base-200 my-4">
            <input type="radio" name="my-accordion-3" checked="checked" />
            <div class="collapse-title text-base font-YekanBakh-ExtraBold">
            {{ __('messages.cost_calculation') }}

            </div>
            <div class="collapse-content">
        <p>                                {{ __('messages.cost_details') }}
        </p>
        </div>
          </div>
          <div class="collapse collapse-plus bg-base-200 my-4">
            <input type="radio" name="my-accordion-3" checked="checked" />
            <div class="collapse-title text-base font-YekanBakh-ExtraBold">
            {{ __('messages.how_to_book_consultation') }}

        </div>
            <div class="collapse-content">
                <p>
                {{ __('messages.booking_consultation_info') }}

                </p>
            </div>
          </div>
          <div class="collapse collapse-plus bg-base-200 my-4">
            <input type="radio" name="my-accordion-3" checked="checked" />
            <div class="collapse-title text-base font-YekanBakh-ExtraBold">
            {{ __('messages.services_offered') }}
            </div>
            <div class="collapse-content">
                <p>
                                {{ __('messages.decor_services') }}
                </p>
            </div>
          </div>

        </div>
    </section>
    @endsection
