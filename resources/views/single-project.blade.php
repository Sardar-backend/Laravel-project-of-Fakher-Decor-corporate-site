<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from mahdghanon.ir/public/single-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:53 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(path: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('../node_modules/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('build/style.css')}}">
    <!-- <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css"> -->
    <title>جزئیات پروژه</title>
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

        @if (LaravelLocalization::getCurrentLocale() == 'en')
        body , h2 , h3 , h5  , p , P , span {
            font-family: 'Roboto', sans-serif !important;
        }
        .y{
            direction: ltr !important;
        }
        tr {
            display: flex;

            flex-direction: row-reverse;
        }
        th, td {
            width: 50%;
            text-align: left;
            padding: 10px;
            box-sizing: border-box;
            padding-left: 3rem !important;
        }

         th {
            order: 2;
        }

         td {
            order: 1;
        }
        @endif

        .menu-content a:hover {
            background-color: #f0f0f0;
        }

    </style>
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
                        <li><a href="index.html">صفحه اصلی</a></li>
                        <li><a href="services.html">خدمات ما</a></li>
                        <li><a href="project.html">پروژه ها</a></li>
                        <li><a href="faq.html">سوالات متداول</a></li>
                        <li><a href="blog.html">وبلاگ</a></li>
                        <li><a href="about-us.html">درباره ما</a></li>
                        <li><a href="contact-us.html">تماس با ما</a></li>

                      </ul>
                    </div>
                  </div>
            </div>
               <div class="flex items-center gap-8">
                <div>
                    <a href="index.html"><img src="../assets/images/logo.png" alt=""></a>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex gap-x-8">
                        <li><a href="index.html">صفحه اصلی</a></li>
                        <li><a href="services.html">خدمات ما</a></li>
                        <li><a href="project.html">پروژه ها</a></li>
                        <li><a href="faq.html">سوالات متداول</a></li>
                        <li><a href="blog.html">وبلاگ</a></li>
                        <li><a href="about-us.html">درباره ما</a></li>
                        <li><a href="contact-us.html">تماس با ما</a></li>
                    </ul>
                </div>
               </div>
                <div class="flex gap-2">
                    <a href="login.html" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </a>
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

<div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
        <div class="flex justify-center">
            <div class="text-sm absolute top-1/4 md:top-1/2">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">{{ __('messages.project_details') }} </h2>
                <div class="breadcrumbs flex justify-center">
                    <ul class="">
                      <li><a>{{ __('messages.Home') }}</a></li>
                      <li>{{ __('messages.project_details') }}</li>
                    </ul>
                </div>
              </div>
        </div>
    </div>

</section>

    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="bg-white rounded-2xl p-4">
                <div class="grid grid-cols-12 gap-4 lg:gap-8 mb-20">
                  <div class="col-span-12 md:col-span-5">
                    <div class="border-r-4 bg-slate-100 border-yellow-400 mb-4 rounded-2xl y p-4">
                      <h1 class="mb-2 text-base font-YekanBakh-Bold">{{$project->name}}</h1>
                      <div class="flex items-center gap-4 text-xs">
                          <span class="flex items-center gap-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                @if (LaravelLocalization::getCurrentLocale() == 'en')
                                {{Carbon\Carbon::parse($project->updated_at)->format('Y-m-d')}}
                                @else
                                    {{jdate($project->updated_at)->format('%B %d، %Y')}}
                                @endif
                          </span>
                          <!-- <span class="flex items-center gap-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                </svg>
                                کسب و کار
                          </span> -->
                      </div>
                  </div>
                    <div class="overflow-x-auto">
                      <table class="table table-zebra">

                        <tbody class="y">
                          <!-- row 1 -->
                          <tr >
                            <th> {{ __('messages.project_name') }}:</th>
                            <td>{{$project->name}}</td>
                          </tr>
                          <!-- row 2 -->
                          <tr>
                            <th>{{ __('messages.area') }}:</th>
                            <td>{{$project->area}}</td>
                          </tr>
                          <!-- row 3 -->
                          <tr>
                            <th> {{ __('messages.start_date') }}:</th>
                            <td>
                                @if (LaravelLocalization::getCurrentLocale() == 'en')

                                {{Carbon\Carbon::parse($project->start_date)->format('Y-m-d')}}
                                @else
                                    {{jdate($project->start_date)->format('%B %d، %Y')}}
                                @endif

                            </td>
                          </tr>
                          <tr>
                            <th>{{ __('messages.foundation_area') }}:</th>
                            <td>{{$project->infrastructure}}</td>
                          </tr>
                          <tr>
                            <th> {{ __('messages.financial_value') }}:</th>
                            <td>{{$project->FinancialValue}}</td>
                          </tr>
                          <tr>
                            <th> {{ __('messages.project_location') }}:</th>
                            <td>{{$project->location}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="mt-4 rounded-2xl p-4 bg-slate-100 b">
                      <h3 class="text-xl text-center font-YekanBakh-ExtraBold mb-2"> {{ __('messages.project_engineer') }}:</h3>

                      <div class="flex justify-center items-center mb-2">
                        <div class="avatar">
                            <div class="w-24 rounded-full">
                              <img src="/storage/{{$project->EngineerPhoto}}" />
                            </div>
                          </div>
                          <div class="leading-8 mr-2">
                            <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">   {{$project->engineer}}</h3>
                            <p> {{$project->EngineerSpecialty}}</p>
                          </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-span-12 md:col-span-7">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper project-main">
                      <div class="swiper-wrapper">
                        @foreach ($images as $i)

                        <div class="swiper-slide">
                          <img class="rounded-xl cursor-pointer" src="/storage/{{$i->image}}" />
                        </div>
                        @endforeach

                      </div>
                      <div class="swiper-button-next after:text-sm"></div>
                      <div class="swiper-button-prev after:text-sm"></div>
                    </div>
                    <div thumbsSlider="" class="swiper gall-project mt-4">
                      <div class="swiper-wrapper">
                          @foreach ($images as $i)

                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="/storage/{{$i->image}}" />
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>

                </div>
                <section class="px-4">
                  <div class="text-center mb-10">
                      <h2 class="text-3xl font-YekanBakh-ExtraBlack">{{ __('messages.about_project') }} </h2>
                  </div>

                <p class="mb-4 y leading-8">{!! nl2br(e($project->about)) !!}</p>
              </section>
            </div>
        </div>
    </section>

    <footer class="p-10 bg-slate-800 text-white">
      <div class="container mx-auto max-w-screen-xl">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 leading-8">
              <div>
                  <img class="mb-4" src="../assets/images/logo-footer.png" alt="">
                  <p>
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است،
                  </p>
              </div>
              <div class="text-right md:text-center">
                  <h3 class="font-YekanBakh-Bold text-white mb-4 text-lg">دسترسی سریع</h3>
                  <ul>
                      <li><a href="index.html">صفحه اصلی</a></li>
                      <li><a href="about-us.html">درباره ما</a></li>
                      <li><a href="contact-us.html">تماس با ما</a></li>
                      <li><a href="project.html">پروژه ها</a></li>
                      <li><a href="services.html">خدمات</a></li>
                  </ul>
              </div>
              <div class="text-right md:text-center">
                  <h3 class="font-YekanBakh-Bold text-white mb-4 text-lg">خدمات شرکت</h3>
                  <ul>
                      <li><a href="single-project.html">جزئیات پروژه</a></li>
                      <li><a href="blog.html">جزئیات بلاگ</a></li>
                      <li><a href="table.html">جدول</a></li>
                      <li><a href="faq.html">سوالات متداول</a></li>
                      <li><a href="404.html">404</a></li>
                  </ul>
              </div>
              <div class="">
                  <h3 class="font-YekanBakh-Bold text-white mb-4 text-lg">عضویت در خبرنامه</h3>

                  <div class="form-control">
                      <label class="label">
                        <span>ایمیل خود را وارد کنید</span>
                      </label>
                      <div class="relative">
                        <input type="text" placeholder="username@gmail.com" class="input input-bordered w-full text-black" />
                        <button class="btn bg-yellow-500 hover:bg-yellow-600 absolute top-0 left-0 rounded-r-none">ثبت</button>
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </footer>

  <footer class="footer footer-center p-4 bg-slate-700 text-white">
      <div>
        <p>Copyright © 2023 - تمامی حقوق برای راست چین محفوظ می باشد</p>
      </div>
  </footer>

    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="../src/js/main.js"></script>
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

<!-- Mirrored from mahdghanon.ir/public/single-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:53 GMT -->
</html>
