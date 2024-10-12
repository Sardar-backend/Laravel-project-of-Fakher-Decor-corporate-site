@extends('base')
@section('content')


    <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
        <div class="flex justify-center">
            <div class="text-sm absolute top-1/4 md:top-1/2">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">جزئیات وبلاگ</h2>
                <div class="breadcrumbs flex justify-center">
                    <ul class="">
                      <li><a>خانه</a></li>
                      <li>جزئیات وبلاگ</li>
                    </ul>
                </div>
              </div>
        </div>
    </div>

</section>

    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-3 order-2 md:order-1">
                    <div class="bg-white p-4 rounded-2xl mb-4 leading-8">
                        <div class="border-r-4 bg-slate-100 border-yellow-400 mb-4 rounded-2xl p-4">
                            <h3 class="font-YekanBakh-Bold text-slate-800 text-base">پربازدیدترین ها</h3>
                        </div>
                        <div>
                            @foreach ($PopularBlogs as $item)

                            <div class="flex items-center my-4">
                                <div class="avatar">
                                    <div class="w-16 rounded-full">
                                      <img src="../assets/images/blog-2.jpg" />
                                    </div>
                                  </div>
                                  <div class="mr-2">
                                    <h3 class="font-YekanBakh-Bold text-slate-800 text-sm">جذاب ترین ایده دکوراسیون</h3>
                                    <p></p>
                                  </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                    <div class="bg-white p-4 rounded-2xl mb-4 leading-8">
                        <div class="border-r-4 bg-slate-100 border-yellow-400 mb-4 rounded-2xl p-4">
                            <h3 class="font-YekanBakh-Bold text-slate-800 text-base">دسته بندی</h3>
                        </div>
                        <ul class="menu">
                            <li><a>دسته بندی اول</a></li>
                            <li>
                              <details open>
                                <summary>دسته بندی دوم</summary>
                                <ul>
                                  <li><a>زیر منوی 1 دسته بندی دوم</a></li>
                                  <li><a>زیر منوی 2 دسته بندی دوم</a></li>
                                  <li>
                                    <details open>
                                      <summary>دسته بندی سوم</summary>
                                      <ul>
                                        <li><a>زیر منوی 1 دسته بندی سوم</a></li>
                                        <li><a>زیر منوی 2 دسته بندی سوم</a></li>
                                      </ul>
                                    </details>
                                  </li>
                                </ul>
                              </details>
                            </li>
                            <li><a>دسته بندی چهارم</a></li>
                          </ul>

                    </div>
                </div>
                <div class="col-span-12 md:col-span-9 order-1 md:order-2">
                    <div class="bg-white p-4 rounded-2xl leading-8">
                        <div class="border-r-4 bg-slate-100 border-yellow-400 mb-4 rounded-2xl p-4">
                            <h1 class="mb-2 text-base font-YekanBakh-Bold">{{$blog->title}}</h1>
                            <div class="flex items-center gap-4 text-xs">
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                      </svg>
                                        {{jdate($blog->updated_at)->format('%B %d، %Y')}}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                      </svg>
                                      کسب و کار
                                </span>
                            </div>
                        </div>
                        <img class="rounded-2xl" src="../assets/images/4.jpg" alt="">
                        <p class="mt-4">{!! nl2br(e($blog->content)) !!}</p>

                        <div class="mt-4">
                            <h3 class="font-YekanBakh-Bold text-slate-800 text-base">نظرات</h3>
                            <p>شما با نام یاسمن وارد شده اید!!</p>
                            <textarea class="textarea textarea-bordered w-full h-36 rounded-2xl" placeholder="نظر خود را بنویسید..."></textarea>
                            <button class="btn btn-primary rounded-2xl">ارسال پیام</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
