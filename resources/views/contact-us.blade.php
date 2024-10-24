@extends('base')
@section('content')


      <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
          <div class="flex justify-center">
              <div class="text-sm absolute top-1/4 md:top-1/2">
                  <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">{{ __('messages.contact_us') }}</h2>
                  <div class="breadcrumbs flex justify-center">
                      <ul class="">
                        <li><a>{{ __('messages.Home') }}</a></li>
                        <li> {{ __('messages.contact_us') }} </li>
                      </ul>
                  </div>
                </div>
          </div>
      </div>

    </section>

    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div class="y">
                <h3 class="text-xl font-YekanBakh-ExtraBold mb-2"> {{ __('messages.contact_methods') }}</h3>
                <div class="bg-white p-4 rounded-2xl flex items-center gap-4 my-4">
                  <div class="bg-yellow-400 p-2 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                  </div>
                  <div>
                    <h3 class="text-base font-YekanBakh-ExtraBold mb-2">{{ __('messages.address') }}:</h3>
                    <p> تهران، خیابان، کوچه، فرعی 2</p>
                  </div>
                </div>
                <div class="bg-white p-4 rounded-2xl flex items-center gap-4 my-4">
                  <div class="bg-yellow-400 p-2 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>

                  </div>
                  <div>
                    <h3 class="text-base font-YekanBakh-ExtraBold mb-2">  {{ __('messages.email') }}:</h3>
                    <p>sitename@info.com</p>
                  </div>
                </div>
                <div class="bg-white p-4 rounded-2xl flex items-center gap-4 my-4">
                  <div class="bg-yellow-400 p-2 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>

                  </div>
                  <div>
                    <h3 class="text-base font-YekanBakh-ExtraBold mb-2"> {{ __('messages.contact_number') }}:</h3>
                    <p>09011111111 - 02155211111</p>
                  </div>
                </div>
              </div>
              <div class="y">
                <h3 class="text-xl font-YekanBakh-ExtraBold mb-2">{{ __('messages.contact_us') }}</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="s">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form action="" method="post">
                    @csrf
                <div class="form-control w-full">
                  <label class="label">
                    <span class="label-text-alt">{{ __('messages.message_subject') }}</span>
                  </label>
                  <input name="subject" type="text" class="input input-bordered w-full" />
                  <label class="label">
                    <span class="label-text-alt"> {{ __('messages.email') }}</span>
                  </label>
                  <input name="email" type="email" class="input input-bordered w-full" />
                  <label class="label">
                    <span class="label-text-alt">{{ __('messages.message_text') }}</span>
                  </label>
                  <textarea name="content" class="textarea textarea-bordered h-24" ></textarea>
                  <button type="submit" class="btn btn-primary my-3">{{ __('messages.submit_message') }}</button>
                </div></form>
              </div>
              <div class="">
                  <img src="../assets/images/contact.png" alt="">
              </div>
            </div>
        </div>
    </section>
    @endsection
