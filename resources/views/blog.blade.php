@extends('base')
@section('content')
<!-- <head>
        <link rel="stylesheet" href="build/bootstrap.rtl.min.css">
</head> -->
<style>
    .cca {
    margin-top: 20px; /* فاصله از بالا */
}

.card-footer {
    background-color: #f8f9fa; /* رنگ پس‌زمینه برای فوتر کارت */
    border-top: 1px solid #dee2e6; /* خط بالای فوتر */
    padding: 10px; /* فاصله داخلی */
}

.pagination {
    display: flex !important;

    justify-content: center; /* مرکز کردن pagination */
}

.pagination li {
    margin: 0 5px; /* فاصله بین آیتم‌های pagination */
}

.pagination a,
.pagination span {
    display: inline-block; /* نمایش به‌صورت بلوک */
    padding: 8px 12px; /* فاصله داخلی */
    border-radius: 5px; /* گوشه‌های گرد */
    border: 1px solid #007bff; /* رنگ حاشیه */
    color: #007bff; /* رنگ متن */
    transition: background-color 0.3s; /* انیمیشن تغییر رنگ پس‌زمینه */
}

.pagination a:hover,
.pagination span:hover {
    background-color: #007bff; /* رنگ پس‌زمینه روی هاور */
    color: #ffffff; /* رنگ متن روی هاور */
}

.pagination .active a {
    background-color: #007bff; /* رنگ پس‌زمینه برای آیتم فعال */
    color: #ffffff; /* رنگ متن برای آیتم فعال */
    border: 1px solid #007bff; /* رنگ حاشیه برای آیتم فعال */
}
.active{
    z-index: 3;
  color: #fff !important;
  background-color: #0d6efd;
  border-color: #0d6efd;
  border-radius: 5px;
}
.active>span{
    color: #fff !important;
}
</style>

        <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
            <div class="flex justify-center">
                <div class="text-sm absolute top-1/4 md:top-1/2">
                    <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">{{ __('messages.blog') }}</h2>
                    <div class="breadcrumbs flex justify-center">
                        <ul class="">
                          <li><a>{{ __('messages.Home') }}</a></li>
                          <li>{{ __('messages.blog') }}</li>
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
                                <a href="blog.html" class="absolute -bottom-4 bg-white p-2 rounded-lg shadow-lg"> {{ __('messages.category') }}: {{$blog->categories()->first()->name}}</a>
                            </div>
                            <a href="{{route('blog_single',['id'=>$blog->id])}}"><img src="/storage/{{$blog->image}}" alt=""></a>
                        </div>
                        <div class="p-4 leading-8 w-full">
                            <a href="{{route('blog_single',['id'=>$blog->id])}}"><h3 class="font-YekanBakh-Bold mt-6 mb-2 text-slate-800 text-sm">جذاب ترین ایده دکوراسیون</h3></a>
                            <p>{{substr(strip_tags($blog->content),0,211)}}...</p>
                            <a href="{{route('blog_single',['id'=>$blog->id])}}" class="text-yellow-400"> {{ __('messages.view_more') }} »</a>
                        </div>
                    </div>
                    @endforeach


                </div>
                <!-- <div class="join flex justify-center">
                    <button class="join-item btn">1</button>
                    <button class="join-item btn">2</button>
                    <button class="join-item btn">...</button>
                    <button class="join-item btn">9</button>
                    <button class="join-item btn">10</button>
                  </div> -->
                  <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    <div class="cca card-footer ">
                                        <div class="cca cart ">
                                            {{$blogs->render()}}
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </section>

    @endsection
