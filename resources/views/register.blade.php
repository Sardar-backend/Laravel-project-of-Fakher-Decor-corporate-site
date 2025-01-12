<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from mahdghanon.ir/public/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:56 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../node_modules/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('build/style.css')}}">
    <!-- <title>{{ __('messages.register') }}</title> -->
    {!! SEO::generate() !!}
</head>
<body class="font-YekanBakh-Regular text-sm bg-slate-50">


    <section class="h-screen px-4 flex items-center">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-white rounded-2xl overflow-hidden">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-1 p-8 md:p-4 lg:p-20 md:pb-0">
                        <form action="" method="post">
                            @csrf
                            <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">{{ __('messages.register') }}</h2>
                            <label class="label">
                                <span class="label-text-alt">  {{ __('messages.username') }} :</span>
                              </label>
                            <input name="name" type="text" class="input input-bordered w-full my-2" />
                            <label class="label">
                                <span class="label-text-alt"> {{ __('messages.email') }}:</span>
                              </label>
                            <input name="email" type="email" class="input input-bordered w-full my-2" />
                            <label class="label">
                                <span class="label-text-alt"> {{ __('messages.password') }}:</span>
                              </label>
                            <input name="password" type="password" class="input input-bordered w-full my-2" />
                            <label class="label">
                                <span class="label-text-alt"> {{ __('messages.confirm_password') }} :</span>
                              </label>
                            <input name="password_confirmation" type="password" class="input input-bordered w-full my-2" />
                            <button type="submit" class="btn btn-primary w-full my-4">{{ __('messages.register') }}</button>
                        </form>
                        <p class="text-center my-4"><a href="login"> {{ __('messages.already_registered') }}</a></p>
                    </div>
                    <div class="hidden md:block">
                        <img class="bg-cover" src="../assets/images/sign-up.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<!-- Mirrored from mahdghanon.ir/public/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:34:56 GMT -->
</html>
