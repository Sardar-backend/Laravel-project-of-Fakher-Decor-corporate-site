@extends('base')
@section('content')
<style>

/* سبک عمومی کامنت */
.comment {
    background-color: #ffffff; /* پس‌زمینه سفید */
    border-radius: 12px; /* گوشه‌های گرد */
    border: 1px solid #dedede; /* حاشیه باریک */
    padding: 20px; /* فاصله داخلی */
    margin-bottom: 20px; /* فاصله بین کامنت‌ها */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* سایه نرم برای برجسته کردن */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* انیمیشن تغییر */
}

.comment:hover {
    transform: translateY(-5px); /* بلند شدن کامنت هنگام hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* سایه بیشتر هنگام hover */
}

/* بخش اطلاعات فرستنده */
.sender-details {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.sender-details .name {
    font-weight: bold;
    color: #333333; /* رنگ تیره برای نام */
    font-size: 1.2em; /* اندازه بزرگ‌تر */
    margin-bottom: 5px;
}

.sender-details .date {
    font-size: 0.9em;
    color: #888888; /* رنگ خاکستری برای تاریخ */
}

.sender-details img {
    width: 60px;
    height: 60px;
    border-radius: 50%; /* تصویر گرد */
    object-fit: cover;
    margin-right: 15px; /* فاصله بین تصویر و نام */
    border: 2px solid #f0f0f0; /* حاشیه نازک دور تصویر */
    transition: border-color 0.3s ease;
}

.sender-details img:hover {
    border-color: #007bff; /* تغییر رنگ حاشیه تصویر هنگام hover */
}

/* سبک متن کامنت */
.comment p {
    font-size: 1.05em;
    line-height: 1.6; /* فاصله بین خطوط */
    color: #555555; /* رنگ تیره‌تر برای متن کامنت */
    margin-top: 15px;
}

/* دکمه پاسخ */
.reply {
    cursor: pointer;
    color: #007bff; /* رنگ آبی برای دکمه */
    font-size: 0.95em;
    display: inline-flex;
    align-items: center;
    margin-top: 15px;
    transition: color 0.3s ease;
}

.reply:hover {
    color: #0056b3; /* تغییر رنگ دکمه هنگام hover */
}

.reply img {
    width: 16px;
    height: 16px;
    margin-left: 5px; /* فاصله تصویر از متن */
}

/* کامنت‌های فرعی (پاسخ‌ها) */
.child-comment {
    margin-top: 25px;
    padding-left: 40px; /* فاصله برای ایجاد تو رفتگی */
    border-left: 3px solid #eeeeee; /* خط عمودی برای تمایز پاسخ‌ها */
}

.child-comment img {
    width: 50px;
    height: 50px;
    border-radius: 50%; /* تصویر گرد */
    object-fit: cover;
    margin-right: 10px;
    border: 2px solid #f0f0f0;
}

.child-comment .name {
    font-size: 1.1em;
    font-weight: bold;
    color: #333333;
}

.child-comment .date {
    font-size: 0.85em;
    color: #999999;
}

.child-comment p {
    font-size: 1em;
    line-height: 1.5;
    color: #666666;
}

/* واکنش‌گرایی */
@media (max-width: 768px) {
    .sender-details img, .child-comment img {
        width: 50px;
        height: 50px;
    }

    .comment, .child-comment {
        padding: 15px;
    }

    .reply {
        font-size: 0.9em;
    }

    .sender-details .name {
        font-size: 1.1em;
    }
}



</style>

    <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
        <div class="flex justify-center">
            <div class="text-sm absolute top-1/4 md:top-1/2">
                <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">جزئیات وبلاگ</h2>
                <div class="breadcrumbs flex justify-center">
                    <ul class="">
                      <li><a>{{ __('messages.Home') }}</a></li>
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
                            <!-- <li><a>دسته بندی اول</a></li> -->
                        @include('layout/cat')
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
                                      @if (LaravelLocalization::getCurrentLocale() == 'en')
                                        {{Carbon\Carbon::parse($blog->updated_at)->format('Y-m-d')}}
                                    @else
                                        {{jdate($blog->updated_at)->format('%B %d، %Y')}}
                                    @endif
                                        <!-- {{jdate(str: $blog->updated_at)->format('%B %d، %Y')}} -->
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                      </svg>
                                      @foreach ($blog->categories()->get() as $cat )

                                        {{$cat->name }}
                                      @endforeach
                                </span>
                            </div>
                        </div>
                        <img class="rounded-2xl" src="/storage/{{$blog->image}}" alt="">
                        <p class="mt-4">{!! nl2br(e($blog->content)) !!}</p>

                        <div class="mt-4 y">



                                                                @foreach ($comments as $comment)
                                                                <div class="comment p-3 my-2">
                                                                    <div class="sender-details">
                                                                        <div class="row">
                                                                            <div class="col-3 col-sm-2 col-md-1 pl-md-0 pl-lg-2 pl-xl-3">
                                                                                <!-- <img oncontextmenu="function d (event){ event.preventDefault()}" style="pointer-events: none;"  src="/storage/{{$comment->user->image}}" alt="image" class="rounded"> -->
                                                                                <img oncontextmenu="function d (event){ event.preventDefault()}" style="pointer-events: none;"  src="../assets/images/user.png" alt="image" class="rounded">
                                                                            </div>
                                                                            <div class="col-9 col-sm-10 col-md-11 pr-0 pr-md-2 pr-xl-0 pt-0 pt-lg-1">
                                                                                <div class="name">{{$comment->user->name}}</div>
                                                                                <div class="date">  {{ __('messages.sent_at') }}

                                                                                @if (LaravelLocalization::getCurrentLocale() == 'en')
                                                                                    {{Carbon\Carbon::parse($comment->failed_at)->ago()}}
                                                                                @else
                                                                                    {{jdate($comment->failed_at)->ago()}}
                                                                                @endif

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <p>{{$comment->content}}</p>
                                                                                <span onclick="let parent_id = document.querySelector('.parent_id').value={{$comment->id}};" class="reply"><img  src="assets/images/comment-reply.png" alt=""> {{ __('messages.submit_response') }} </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <script>
                                                                        let t =document.querySelector('.rounded')
                                                                    t.addEventListener('contextmenu', event => event.preventDefault());</script>
                                                                    <!-- Comment Reply -->
                                                                    @foreach ($comment->child->where('status',1) as $child )


                                                                    <div class="row justify-content-end">
                                                                        <div class="col-11 pt-2 pr-0">
                                                                            <div class="comment p-3">
                                                                                <div class="sender-details">
                                                                                    <div class="row">
                                                                                        <div class="col-3 col-sm-2 col-md-1 pl-md-0 pl-lg-2 pl-xl-3">
                                                                                            <!-- <img src="/storage/{{$child->user->image}}" alt="image" class="rounded"> -->
                                                                                            <img src="../assets/images/user.png" alt="image" class="rounded">
                                                                                        </div>
                                                                                        <div class="col-9 col-sm-10 col-md-11 pr-0 pr-md-2 pr-xl-0 pt-0 pt-lg-1">
                                                                                            <div class="name">{{$child->user->name}}</div>
                                                                                            <div class="date">  {{ __('messages.sent_at') }}
                                                                                            @if (LaravelLocalization::getCurrentLocale() == 'en')
                                                                                    {{Carbon\Carbon::parse($child->failed_at)->ago()}}
                                                                                @else
                                                                                    {{jdate($child->failed_at)->ago()}}
                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <p>{{$child->content}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   @endforeach
                                                                    <!-- /Comment Reply -->
                                                                </div>

                                                                @endforeach









                            <h3 class="font-YekanBakh-Bold text-slate-800 text-base">نظرات</h3>
                            @guest
                                <p>برای ثبت نظر ابتدا وارد شوید</p>
                            @else
                            <p>شما با نام {{Auth::user()->name}} وارد شده اید!!</p>
                            <form action="{{route('craete_comment')}}" method="post">
                                @csrf
                                <input type="hidden" class="parent_id"  name="parent_id" value="0"  id="">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <textarea name="content" class="textarea textarea-bordered w-full h-36 rounded-2xl" placeholder=" {{ __('messages.write_your_comment') }}"></textarea>
                                <button type="submit" class="btn btn-primary rounded-2xl"> {{ __('messages.submit_comment') }}</button>
                            </form>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
