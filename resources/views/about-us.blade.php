@extends('base')
@section('content')

<style>
    .about-button{
        background-color: black !important;
        padding: 0.75rem 1rem !important;
        margin-right: 0.2rem !important;
        border-radius: 0.5rem !important;;
        color: white !important;
    }
    .about-button:hover{
        background-color: white !important;
        color: black !important;
    }
    /* .ico{
            color: black !important;
            width: 4% !important;
            height: 4% !important;
            margin: 0 2px 0 2px !important;

        } */
        .about-img{
            box-shadow: 25px 25px 15px #8A8A8A;
            border-radius: 2px !important;
        }
        .social-icons {
    display: flex;            /* آیکون‌ها کنار هم قرار می‌گیرند */
    justify-content:flex-start;   /* مرکز کردن آیکون‌ها */
    gap: 20px;                 /* فاصله بین آیکون‌ها */
}

.social-icons a {
    display: inline-flex;      /* هر لینک به صورت بلوک در کنار هم قرار می‌گیرد */
    justify-content: center;   /* مرکز کردن محتویات لینک */
    align-items: center;       /* مرکز کردن محتویات لینک */
    width: 40px;               /* عرض دایره */
    height: 40px;              /* ارتفاع دایره */
    background-color: #000;    /* رنگ پس‌زمینه دایره */
    border-radius: 50%;        /* دایره‌ای کردن */
    text-decoration: none;     /* حذف خط زیر لینک‌ها */
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.social-icons i {
    color: #fff;               /* رنگ آیکون‌ها سفید */
    font-size: 24px;           /* اندازه آیکون‌ها */
    transition: transform 0.3s ease;  /* انیمیشن برای تغییر اندازه */
}

.social-icons a:hover {
    background-color: #333;    /* تغییر رنگ پس‌زمینه دایره هنگام هاور */
    transform: scale(1.1);     /* بزرگ شدن دایره هنگام هاور */
}

.social-icons a:hover i {
    color: #f0f0f0;            /* تغییر رنگ آیکون‌ها در هاور */
}



</style>

        <div class="bg-[url('/assets/images/ber.jpg')] bg-no-repeat h-40 md:h-64 relative">
            <div class="flex justify-center">
                <div class="text-sm absolute top-1/4 md:top-1/2">
                    <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4"> {{ __('messages.about') }}</h2>
                    <div class="breadcrumbs flex justify-center">
                        <ul class="">
                          <li><a>{{ __('messages.Home') }}</a></li>
                          <li> {{ __('messages.about') }}</li>

                        </ul>
                    </div>
                  </div>
            </div>
        </div>

    </section>

    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <img class="rounded-2xl about-img" src="../assets/images/about.jpg" alt="">
                </div>
                <div class="div">
                <div class="leading-8 mb-8">
                    <h3 class="text-xl font-YekanBakh-ExtraBold mb-2">{{ __('messages.about') }}</h3>
                    <h4>{{ __('messages.mohammad_javad_sardar_abadi') }}  </h4>
                    <p>{{ __('messages.freelance_backend_developer') }}</p>
                    <P class="mt-2">{{ __('messages.committed_to_quality_solutions') }}</P>
                    <br><div class="social-icons">
                                <a class="ico" target="_blank" href="https://www.instagram.com/sardar.devloper"  ><i class="ico fab fa-instagram"></i></a>    <!-- اینستاگرام -->
                                <a class="ico" target="_blank" href="https://www.linkedin.com/in/mohammadjavad-sardar-48044a308"><i class="ico fab fa-linkedin"></i></a>     <!-- لینکدین -->
                                <a class="ico" target="_blank" href="https://t.me/Sardar_backend"><i class="ico fab fa-telegram"></i></a>     <!-- تلگرام -->
                                <a class="ico" target="_blank" href="https://github.com/Sardar-backend"><i class="ico fab fa-github"></i></a>       <!-- گیت‌هاب -->


                            </div><br>
                            <span class="about-button">
                                <a style="color: inherit;" class="main-btn" href="/download">{{ __('messages.download_resume') }}</a>
                            </span>
                </div></div>
            </div>
        </div>
    </section>



@endsection
