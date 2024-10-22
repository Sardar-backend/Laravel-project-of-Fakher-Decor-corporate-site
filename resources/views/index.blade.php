<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from mahdghanon.ir/public/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:42 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <link rel="stylesheet" href="{{ asset(path: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}">


    <title>صفحه اصلی</title>


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


        .menu-content a:hover {
            background-color: #f0f0f0;
        }
        .mt-2{
            text-align: center;
        }
        @if (LaravelLocalization::getCurrentLocale() == 'en')


        /* body , h2 , h3 , h5  , p , P , span {
            text-align: center ;
            font-family: 'Roboto', sans-serif !important;
            direction: rtl !important;
        } */
        .y{
            direction: ltr !important;
        }
        @endif

    </style>
</head>
<body class="font-YekanBakh-Regular text-sm bg-slate-50">

    <section class="mb-8 bg-white md:bg-transparent">
        <div class="container mx-auto max-w-screen-xl relative">
            <div class="p-6 md:absolute bg-white rounded-2xl left-3 top-3 right-3 z-10">
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
                                  <li><a href="{{route('index')}}">صفحه اصلی</a></li>
                                <li><a href="{{route('services')}}">خدمات ما</a></li>
                                <li><a href="{{route('projects')}}">پروژه ها</a></li>
                                <li><a href="{{route('faq')}}">سوالات متداول</a></li>
                                <li><a href="{{route('blogs')}}">وبلاگ</a></li>
                                <li><a href="{{route('about')}}">درباره ما</a></li>
                                <li><a href="{{route('contact')}}">تماس با ما</a></li>
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
                        <li><a href="{{route('index')}}">صفحه اصلی</a></li>
                            <li><a href="{{route('services')}}">خدمات ما</a></li>
                            <li><a href="{{route('projects')}}">پروژه ها</a></li>
                            <li><a href="{{route('faq')}}">سوالات متداول</a></li>
                            <li><a href="{{route('blogs')}}">وبلاگ</a></li>
                            <li><a href="{{route('about')}}">درباره ما</a></li>
                            <li><a href="{{route('contact')}}">تماس با ما</a></li>
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

        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <img class="object-cover w-full" src="../assets/images/slider-1.jpg" alt="">
                  </div>
              <div class="swiper-slide">
                <img class="object-cover w-full" src="../assets/images/slider-2.jpg" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <section class="my-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack">{{ __('messages.company_services') }}</h2>
                <p class="text-stone-700 mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
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
            </div>
        </div>
    </section>

    <section class="my-20 bg-slate-800 px-4">
        <div class="container mx-auto max-w-screen-2xl">
            <div class="py-20">
                <div class="text-center mb-10">
                    <h2 class="text-3xl text-white font-YekanBakh-ExtraBlack"> {{ __('messages.projects') }}</h2>
                    <p class="text-white mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                </div>
                <div class="swiper project y">
                    <div class="swiper-wrapper">
                        @foreach ($projects as $project )

                        <div class="swiper-slide text-center group/proj cursor-pointer">
                          <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl">
                              <a href="{{route('project_single',['id'=>$project->id])}}">
                                  <img class="relative" src="/storage/{{$project->gallery()->first()->image}}" alt="" srcset="">
                                  <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-gradient-to-t from-slate-900 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-70"></div>
                              </a>
                          </div>
                          <figcaption class="absolute bottom-2 w-full invisible group-hover/proj:visible transition ease-in duration-1000 group-hover/proj:transition-all group-hover/proj:-translate-y-4 group-hover/proj:duration-1000 group-hover/proj:text-white">
                              <h3 class="font-YekanBakh-Bold text-sm">{{$project->name}}</h3>
                              <p class="">{{ __('messages.click_to_view') }}</p>
                          </figcaption>
                        </div>
                        @endforeach
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section class="my-20 px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-YekanBakh-ExtraBlack">{{ __('messages.about_company') }} </h2>
            <p class="text-stone-700 mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
        </div>
        <div  class="container mx-auto max-w-screen-xl y">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-2xl" src="../assets/images/54.jpg" alt="">
                </div>
                <div class="col-span-12 md:col-span-8 leading-8">
                    <p  class="mb-4">
                    {{ __('messages.company_intro') }}
                    </p>
                    <a href="{{route('about')}}"  class="bg-yellow-400 py-4 px-8 rounded-2xl">{{ __('messages.read_more') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="my-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack"> {{ __('messages.user_reviews') }}</h2>
                <p class="text-stone-700 mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
            <div class="swiper customer">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center">
                        <div class="bg-white rounded-2xl w-full sm:w-3/4 p-8 leading-8 text-center">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                </p>
                                <div class="flex items-center justify-center mt-4">
                                    <div class="avatar ml-4">
                                        <div class="w-24 rounded-full">
                                          <img src="../assets/images/avatar-3.jpg" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">یاسمن حیدری</h3>
                                        <p>برنامه نویس وب</p>
                                    </div>

                                </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center">
                        <div class="bg-white rounded-2xl w-full sm:w-3/4 p-8 leading-8 text-center">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                </p>
                                <div class="flex items-center justify-center mt-4">
                                    <div class="avatar ml-4">
                                        <div class="w-24 rounded-full">
                                          <img src="../assets/images/avatar-1.jpg" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">علی رضا ناصری</h3>
                                        <p>طراح گرافیک</p>
                                    </div>

                                </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center">
                        <div class="bg-white rounded-2xl w-full sm:w-3/4 p-8 leading-8 text-center">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                </p>
                                <div class="flex items-center justify-center mt-4">
                                    <div class="avatar ml-4">
                                        <div class="w-24 rounded-full">
                                          <img src="../assets/images/avatar-2.jpg" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">سهیلا صادقی</h3>
                                        <p>طراح گرافیک</p>
                                    </div>

                                </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination static mt-4"></div>
              </div>
        </div>

    </section> -->

    <section class="my-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack"> {{ __('messages.news_articles') }}</h2>
                <p class="text-stone-700 mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 y">
                @foreach ($blogs as $blog)

                <div class="bg-white rounded-2xl overflow-hidden">
                    <div class="relative">
                        <div class="flex justify-center">
                            <a href="{{route('blog_single',['id'=>$blog->id])}}" class="absolute -bottom-4 bg-white p-2 rounded-lg shadow-lg"> {{ __('messages.category') }}: {{$blog->categories()->first()->name}}</a>
                        </div>
                        <a href="{{route('blog_single',['id'=>$blog->id])}}"><img src="/storage/{{$blog->image}}" alt=""></a>
                    </div>
                    <div class="p-4 leading-8 w-full">
                        <a href="{{route('blog_single',['id'=>$blog->id])}}"><h3 class="font-YekanBakh-Bold mt-6 mb-2 text-slate-800 text-sm">{{$blog->title}}</h3></a>
                        <p>{{substr(strip_tags($blog->content),0,211)}}...</p>
                        <a href="{{route('blog_single',['id'=>$blog->id])}}" class="text-yellow-400">مشاهده بیشتر »</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="my-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack"> {{ __('messages.our_team') }}</h2>
                <p class="text-stone-700 mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
            <div class="swiper partners">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <img src="../assets/images/logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <img src="../assets/images/logo-2.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <img src="../assets/images/logo-3.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <img src="../assets/images/logo-5.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <img src="../assets/images/logo-6.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <img src="../assets/images/logo-4.png" alt="">
                        </div>
                    </div>

                  </div>
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
                    <li><a href="{{route('index')}}">صفحه اصلی</a></li>
                        <li><a href="{{route('about')}}">درباره ما</a></li>
                        <li><a href="{{route('contact')}}">تماس با ما</a></li>
                        <li><a href="{{route('projects')}}">پروژه ها</a></li>
                        <li><a href="{{route('services')}}">خدمات</a></li>
                    </ul>
                </div>
                <div class="text-right md:text-center">
                    <h3 class="font-YekanBakh-Bold text-white mb-4 text-lg">خدمات شرکت</h3>
                    <ul>
                        <li><a href="single-project.html">جزئیات پروژه</a></li>
                        <li><a href="{{route('blog_single',['id'=>$blog->id])}}">جزئیات بلاگ</a></li>
                        <li><a href="table.html">جدول</a></li>
                        <li><a href="{{route('faq')}}">سوالات متداول</a></li>
                        <li><a href="">404</a></li>
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

    <!-- <footer class="footer footer-center p-4 bg-slate-700 text-white">
        <div>
          <p>Copyright © 2023 - تمامی حقوق برای راست چین محفوظ می باشد</p>
        </div>
    </footer> -->

    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="../src/js/main.js"></script>
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

<!-- Mirrored from mahdghanon.ir/public/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:50 GMT -->
</html>
