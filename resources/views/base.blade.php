<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">

<!-- Mirrored from mahdghanon.ir/public/"{{route('blogs')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(path: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('../node_modules/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('build/style.css')}}">
    {!! SEO::generate() !!}
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->
    <style>
        .alert{
            padding: 1rem;
            border: 1px solid #f1b3b9;
            background-color: #f8d7da;
            border-radius: 10px;
        }
        .s{
            color: #b63844;
            margin-bottom: 0.5rem;
        }
        .div{
            display: flex !important;
            align-items: flex-start !important ;
            margin-top: 5rem !important;

        }
        /* .text-sm .absolute {
            margin-top: 1rem;
        } */
        /* .div>h3{
            font-size: larger !important;
        } */
        .flex .gap-2{
            display: flex !important;
            align-content: center !important;
        }
        .gf{
            padding-top: 5px;
            width: 1.5rem;
            height: 1.5rem;
            font-size: 22px;
        }
        .yy{
            border-radius: 5px;
            border: whitesmoke 2px solid;
            padding: 0.35rem;
        }
    </style>
        <style>

        .iii{
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .language-menu {
            position: relative;
            display: inline-block;
        }
        .menu-content {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            z-index: 1;
            left: 0;
            padding: 10px;
            border-radius: 5px;
        }
        .menu-content a {
            display: block;
            padding: 5px;
            text-decoration: none;
            color: black;
        }
        .ty > ul > li , .ty > h3{
            color: #1e293b ;

        }
        @if (LaravelLocalization::getCurrentLocale() == 'en')
        .y{
            direction: ltr !important;
        }
        /* body , h2 , h3 , h5  , p , P , span {
            font-family: 'Roboto', sans-serif !important;
            direction: rtl !important;
        } */

        @endif

        .menu-content a:hover {
            background-color: #f0f0f0;
        }
    </style>

    <!-- <title>{{ __('messages.blog') }}</title> -->
</head>
<body class="font-YekanBakh-Regular text-sm bg-slate-50">

    <section class="mb-8 bg-white md:bg-transparent">
        <div class="container mx-auto max-w-screen-xl relative">
            <div class="p-6 md:absolute bg-white rounded-2xl left-3 top-3 right-3 z-10 iii">
                <div class="flex justify-between items-center">
                    <div class="lg:hidden leading-none">
                        <div class="drawer drawer-end z-10">
                            <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                            <div class="drawer-content">
                              <label for="my-drawer-4" class="swap swap-rotate drawer-button">

                                <!-- this hidden checkbox controls the state -->
                                <input type="checkbox" />

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black swap-off fill-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                  </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black swap-on fill-current">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>

                              </label>
                            </div>
                            <div class="drawer-side" style="justify-items: start;">
                              <label for="my-drawer-4" class="drawer-overlay"></label>
                              <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content">
                                <div class="drawer-content text-left">
                                    <label for="my-drawer-4" class="swap swap-rotate drawer-button">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                      </svg>
                                    </label>
                                  </div>
                                <li><a href="{{route('index')}}"> {{ __('messages.home_page') }}</a></li>
                                <li><a href="{{route('services')}}">{{ __('messages.our_services') }}</a></li>
                                <li><a href="{{route('projects')}}"> {{ __('messages.projects') }}</a></li>
                                <li><a href="{{route('faq')}}"> {{ __('messages.frequently_asked_questions') }}</a></li>
                                <li><a href="{{route('blogs')}}">{{ __('messages.blog') }}</a></li>
                                <li><a href="{{route('about')}}">{{ __('messages.about') }}</a></li>
                                <li><a href="{{route('contact')}}">{{ __('messages.contact_us') }}</a></li>

                              </ul>
                            </div>
                          </div>
                    </div>
                   <div class="flex items-center gap-8">
                    <div>
                        <a href="{{route('index')}}"><img src="../assets/images/logo.png" alt=""></a>
                    </div>
                    <div class="hidden lg:block">
                        <ul class="flex gap-x-8">
                            <li><a href="{{route('index')}}"> {{ __('messages.home_page') }}</a></li>
                            <li><a href="{{route('services')}}">{{ __('messages.our_services') }}</a></li>
                            <li><a href="{{route('projects')}}"> {{ __('messages.projects') }}</a></li>
                            <li><a href="{{route('faq')}}"> {{ __('messages.frequently_asked_questions') }}</a></li>
                            <li><a href="{{route('blogs')}}">{{ __('messages.blog') }}</a></li>
                            <li><a href="{{route('about')}}">{{ __('messages.about') }}</a></li>
                            <li><a href="{{route('contact')}}">{{ __('messages.contact_us') }}</a></li>
                        </ul>
                    </div>
                   </div>
                    <div class="flex gap-2">
                        @guest

                        <a href="login" class="flex items-center">{{ __('messages.login') }}/{{ __('messages.register') }}
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg> -->
                        </a>
                        @else
                        <a  class="flex items-center yy">
                            {{request()->user()->name}}
                        </a>
                        @endif
                        <dialog id="my_modal_3" class="modal">
                            <form method="dialog" class="modal-box">
                              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                              <div class="form-control">
                                <label class="label mt-4">
                                  <span class="label-text">جستجو کنید...</span>
                                </label>
                                <div class="relative">
                                  <input type="text" placeholder="تایپ کنید" class="input input-bordered w-full" />
                                  <button class="btn btn-primary absolute top-0 left-0 rounded-r-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                      </svg>

                                  </button>
                                </div>
                              </div>
                            </form>
                          </dialog>
                          <div class="language-menu">
                            <i class="fas fa-globe gf" style="font-size: 24px; cursor: pointer;" onclick="toggleMenu()"></i> <!-- آیکون گلوب -->
                            <div class="menu-content" id="languageMenu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>

                            @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        @yield(section: 'content')


    <footer class="p-10 bg-slate-800 text-white">
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 leading-8 uuu">
                <div>
                    <img class="mb-4" src="../assets/images/logo-footer.png" alt="">
                    <p class="y">
                    {{ __('messages.site_description') }}
                    </p>
                </div>
                <div class="text-right md:text-center">
                    <h3 class="font-YekanBakh-Bold text-white mb-4 text-lg"> {{ __('messages.quick_access') }}</h3>
                    <ul>
                        <li><a href="{{route('index')}}"> {{ __('messages.home_page') }}</a></li>
                        <li><a href="{{route('about')}}">{{ __('messages.about') }}</a></li>
                        <li><a href="{{route('contact')}}">{{ __('messages.contact_us') }}</a></li>
                        <li><a href="{{route('projects')}}"> {{ __('messages.projects') }}</a></li>
                        <li><a href="{{route('services')}}">{{ __('messages.our_services') }}</a></li>
                    </ul>
                </div>
                <div class="text-right md:text-center ty">
                    <h3 class="font-YekanBakh-Bold text-white mb-4 text-lg">{{ __('messages.our_services') }}</h3>
                    <ul>
                        <li><a href="single-project.html">جزئیات پروژه</a></li>
                        <li><a href="">جزئیات بلاگ</a></li>
                        <li><a href="table.html">جدول</a></li>
                        <li><a href="{{route('faq')}}">{{ __('messages.frequently_asked_questions') }}</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </div>
                <div class="">
                    <h3 class="font-YekanBakh-Bold text-white mb-4 text-lg y">  {{ __('messages.newsletter_signup') }}</h3>

                    <div class="form-control y">
                        <label class="label">
                          <span>  {{ __('messages.enter_your_email') }}</span>
                        </label>
                        <div class="relative">
                            <form action="{{route('newsletter_post')}}" method="post">
                                @csrf
                                <input type="text" name="email" placeholder="username@gmail.com" class="input input-bordered w-full text-black" />
                                <button type="submit" class="btn bg-yellow-500 hover:bg-yellow-600 absolute top-0 left-0 rounded-r-none">{{ __('messages.submit') }}</button>
                            </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <footer class="footer footer-center p-4 bg-slate-700 text-white">
        <div>
          <p>Copyright © 2023 - تمامی حقوق برای راست چین محفوظ می باشد</p>
        </div>
    </footer> -->
    @include('sweetalert::alert')
    <script>
        function toggleMenu() {
            const menu = document.getElementById("languageMenu");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        }

        // بستن منو وقتی کاربر روی جاهای دیگر کلیک می‌کند
        window.onclick = function(event) {
            if (!event.target.matches('.fas.fa-globe')) {
                const menu = document.getElementById("languageMenu");
                if (menu.style.display === "block") {
                    menu.style.display = "none";
                }
            }
        }
    </script>
</body>

<!-- Mirrored from mahdghanon.ir/public/"{{route('blogs')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:51 GMT -->
</html>
