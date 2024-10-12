<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from mahdghanon.ir/public/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:42 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="build/style.css">
    <title>صفحه اصلی</title>

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
                        <a class="p-2.5 flex items-center cursor-pointer" onclick="my_modal_3.showModal()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                              </svg>
                        </a>
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
                <h2 class="text-3xl font-YekanBakh-ExtraBlack">برخی از خدمات شرکت</h2>
                <p class="text-stone-700 mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                      </svg>


                    <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm">شخصی سازی آسان</h3>
                    <p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                </div>
                <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                      </svg>

                    <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm">کد نویسی تمیز و استاندارد</h3>
                    <p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                </div>
                <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                      </svg>

                    <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm">کاملا ریسپانسیو و واکنشگرا</h3>
                    <p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                </div>
                <div class="bg-white p-4 flex items-center justify-center flex-col leading-8 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 pb-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                      </svg>
                    <h3 class="border-t-4 border-yellow-400 pt-3 font-YekanBakh-Bold text-sm">پیاده سازی با Tailwind Css</h3>
                    <p class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-20 bg-slate-800 px-4">
        <div class="container mx-auto max-w-screen-2xl">
            <div class="py-20">
                <div class="text-center mb-10">
                    <h2 class="text-3xl text-white font-YekanBakh-ExtraBlack">پروژه ها</h2>
                    <p class="text-white mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                </div>
                <div class="swiper project">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide text-center group/proj cursor-pointer">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl">
                            <a href="single-project.html">
                                <img class="relative" src="../assets/images/blog-1.jpg" alt="" srcset="">
                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-gradient-to-t from-slate-900 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-70"></div>
                            </a>
                        </div>
                        <figcaption class="absolute bottom-2 w-full invisible group-hover/proj:visible transition ease-in duration-1000 group-hover/proj:transition-all group-hover/proj:-translate-y-4 group-hover/proj:duration-1000 group-hover/proj:text-white">
                            <h3 class="font-YekanBakh-Bold text-sm">پروژه شماره یک</h3>
                            <p class="">جهت مشاهده مطالب کلیک کنید</p>
                        </figcaption>
                      </div>
                      <div class="swiper-slide text-center group/proj cursor-pointer">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl">
                            <a href="single-project.html">
                                <img class="relative" src="../assets/images/blog-2.jpg" alt="" srcset="">
                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-gradient-to-t from-slate-900 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-70"></div>
                            </a>
                        </div>
                        <figcaption class="absolute bottom-2 w-full invisible group-hover/proj:visible transition ease-in duration-1000 group-hover/proj:transition-all group-hover/proj:-translate-y-4 group-hover/proj:duration-1000 group-hover/proj:text-white">
                            <h3 class="font-YekanBakh-Bold text-sm">پروژه شماره دو</h3>
                            <p class="">جهت مشاهده مطالب کلیک کنید</p>
                        </figcaption>
                      </div>
                      <div class="swiper-slide text-center group/proj cursor-pointer">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl">
                            <a href="single-project.html">
                                <img class="relative" src="../assets/images/blog-3.jpg" alt="" srcset="">
                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-gradient-to-t from-slate-900 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-70"></div>
                            </a>
                        </div>
                        <figcaption class="absolute bottom-2 w-full invisible group-hover/proj:visible transition ease-in duration-1000 group-hover/proj:transition-all group-hover/proj:-translate-y-4 group-hover/proj:duration-1000 group-hover/proj:text-white">
                            <h3 class="font-YekanBakh-Bold text-sm">پروژه شماره سه</h3>
                            <p class="">جهت مشاهده مطالب کلیک کنید</p>
                        </figcaption>
                      </div>
                      <div class="swiper-slide text-center group/proj cursor-pointer">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl">
                            <a href="single-project.html">
                                <img class="relative" src="../assets/images/blog-4.jpg" alt="" srcset="">
                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-gradient-to-t from-slate-900 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-70"></div>
                            </a>
                        </div>
                        <figcaption class="absolute bottom-2 w-full invisible group-hover/proj:visible transition ease-in duration-1000 group-hover/proj:transition-all group-hover/proj:-translate-y-4 group-hover/proj:duration-1000 group-hover/proj:text-white">
                            <h3 class="font-YekanBakh-Bold text-sm">پروژه شماره چهار</h3>
                            <p class="">جهت مشاهده مطالب کلیک کنید</p>
                        </figcaption>
                      </div>
                      <div class="swiper-slide text-center group/proj cursor-pointer">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl">
                            <a href="single-project.html">
                                <img class="relative" src="../assets/images/blog-5.jpg" alt="" srcset="">
                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-gradient-to-t from-slate-900 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-70"></div>
                            </a>
                        </div>
                        <figcaption class="absolute bottom-2 w-full invisible group-hover/proj:visible transition ease-in duration-1000 group-hover/proj:transition-all group-hover/proj:-translate-y-4 group-hover/proj:duration-1000 group-hover/proj:text-white">
                            <h3 class="font-YekanBakh-Bold text-sm">پروژه شماره پنج</h3>
                            <p class="">جهت مشاهده مطالب کلیک کنید</p>
                        </figcaption>
                      </div>
                      <div class="swiper-slide text-center group/proj cursor-pointer">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl">
                            <a href="single-project.html">
                                <img class="relative" src="../assets/images/blog-6.jpg" alt="" srcset="">
                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-gradient-to-t from-slate-900 bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-70"></div>
                            </a>
                        </div>
                        <figcaption class="absolute bottom-2 w-full invisible group-hover/proj:visible transition ease-in duration-1000 group-hover/proj:transition-all group-hover/proj:-translate-y-4 group-hover/proj:duration-1000 group-hover/proj:text-white">
                            <h3 class="font-YekanBakh-Bold text-sm">پروژه شماره شش</h3>
                            <p class="">جهت مشاهده مطالب کلیک کنید</p>
                        </figcaption>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section class="my-20 px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-YekanBakh-ExtraBlack">درباره شرکت</h2>
            <p class="text-stone-700 mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
        </div>
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-2xl" src="../assets/images/54.jpg" alt="">
                </div>
                <div class="col-span-12 md:col-span-8 leading-8">
                    <p class="mb-4">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                    <a href="about-us.html" class="bg-yellow-400 py-4 px-8 rounded-2xl">بیشتر بخوانید</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack">نظرات کاربران</h2>
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

    </section>

    <section class="my-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack">اخبار و مقالات</h2>
                <p class="text-stone-700 mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="bg-white rounded-2xl overflow-hidden">
                    <div class="relative">
                        <div class="flex justify-center">
                            <a href="blog.html" class="absolute -bottom-4 bg-white p-2 rounded-lg shadow-lg">دسته بندی: کسب و کار</a>
                        </div>
                        <a href="single-blog.html"><img src="../assets/images/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="p-4 leading-8 w-full">
                        <a href="single-blog.html"><h3 class="font-YekanBakh-Bold mt-6 mb-2 text-slate-800 text-sm">جذاب ترین ایده دکوراسیون</h3></a>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                        <a href="single-blog.html" class="text-yellow-400">مشاهده بیشتر »</a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden">
                    <div class="relative">
                        <div class="flex justify-center">
                            <a href="blog.html" class="absolute -bottom-4 bg-white p-2 rounded-lg shadow-lg">دسته بندی: مبلمان و دکور</a>
                        </div>
                        <a href="single-blog.html"><img src="../assets/images/blog-6.jpg" alt=""></a>
                    </div>
                    <div class="p-4 leading-8 w-full">
                        <a href="single-blog.html"><h3 class="font-YekanBakh-Bold mt-6 mb-2 text-slate-800 text-sm">5 مدل مبلمان فضای بسته</h3></a>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                        <a href="single-blog.html" class="text-yellow-400">مشاهده بیشتر »</a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden">
                    <div class="relative">
                        <div class="flex justify-center">
                            <a href="blog.html" class="absolute -bottom-4 bg-white p-2 rounded-lg shadow-lg">دسته بندی: اکسسوری زیبا</a>
                        </div>
                        <a href="single-blog.html"><img src="../assets/images/blog-7.jpg" alt=""></a>
                    </div>
                    <div class="p-4 leading-8 w-full">
                        <a href="single-blog.html"><h3 class="font-YekanBakh-Bold mt-6 mb-2 text-slate-800 text-sm">زیبا ترین گل های آپارتمانی</h3></a>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                        <a href="single-blog.html" class="text-yellow-400">مشاهده بیشتر »</a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl overflow-hidden">
                    <div class="relative">
                        <div class="flex justify-center">
                            <a href="blog.html" class="absolute -bottom-4 bg-white p-2 rounded-lg shadow-lg">دسته بندی: رنگ آمیزی</a>
                        </div>
                        <a href="single-blog.html"><img src="../assets/images/blog-8.jpg" alt=""></a>
                    </div>
                    <div class="p-4 leading-8 w-full">
                        <a href="single-blog.html"><h3 class="font-YekanBakh-Bold mt-6 mb-2 text-slate-800 text-sm">بهترین رنگ های ساختمان</h3></a>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                        <a href="single-blog.html" class="text-yellow-400">مشاهده بیشتر »</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="my-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack">همکاران ما</h2>
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
                        <li><a href="blog.html">جزئیات بلاگ</a></li>
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

    <footer class="footer footer-center p-4 bg-slate-700 text-white">
        <div>
          <p>Copyright © 2023 - تمامی حقوق برای راست چین محفوظ می باشد</p>
        </div>
    </footer>

    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="../src/js/main.js"></script>
</body>

<!-- Mirrored from mahdghanon.ir/public/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:50 GMT -->
</html>
