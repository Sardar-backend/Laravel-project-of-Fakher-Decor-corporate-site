@extends('base')
@section('content')


        <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
            <div class="flex justify-center">
                <div class="text-sm absolute top-1/4 md:top-1/2">
                    <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">وبلاگ</h2>
                    <div class="breadcrumbs flex justify-center">
                        <ul class="">
                          <li><a>خانه</a></li>
                          <li>وبلاگ</li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>

    </section>

    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="container mx-auto max-w-screen-xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8">
                    @foreach ($blogs as $blog )

                    <div class="bg-white rounded-2xl overflow-hidden">
                        <div class="relative">
                            <div class="flex justify-center">
                                <a href="blog.html" class="absolute -bottom-4 bg-white p-2 rounded-lg shadow-lg">دسته بندی: کسب و کار</a>
                            </div>
                            <a href="{{route('blog_single',['id'=>$blog->id])}}"><img src="../assets/images/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="p-4 leading-8 w-full">
                            <a href="{{route('blog_single',['id'=>$blog->id])}}"><h3 class="font-YekanBakh-Bold mt-6 mb-2 text-slate-800 text-sm">جذاب ترین ایده دکوراسیون</h3></a>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ..</p>
                            <a href="{{route('blog_single',['id'=>$blog->id])}}" class="text-yellow-400">مشاهده بیشتر »</a>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="join flex justify-center">
                    <button class="join-item btn">1</button>
                    <button class="join-item btn">2</button>
                    <button class="join-item btn">...</button>
                    <button class="join-item btn">9</button>
                    <button class="join-item btn">10</button>
                  </div>
            </div>
        </div>
    </section>

    @endsection
