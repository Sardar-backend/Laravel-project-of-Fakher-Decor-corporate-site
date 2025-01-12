<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../node_modules/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .social-login-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .social-login-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .social-login-button i {
            color: white;
        }

        .google {
            background-color: #db4437;
        }

        .google:hover {
            box-shadow: 0 4px 6px rgba(219, 68, 55, 0.5);
        }

        .linkedin {
            background-color: #0a66c2;
        }

        .linkedin:hover {
            box-shadow: 0 4px 6px rgba(10, 102, 194, 0.5);
        }

        .facebook {
            background-color: #1877f2;
        }

        .facebook:hover {
            box-shadow: 0 4px 6px rgba(24, 119, 242, 0.5);
        }

        .twitter {
            background-color: black;
            color: white;
        }

        .twitter:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body class="font-YekanBakh-Regular text-sm bg-slate-50">

    <section class="h-screen px-4 flex items-center">
        <div class="container mx-auto max-w-screen-lg">
            <div class="bg-white rounded-2xl overflow-hidden">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-1 p-8 md:p-4 lg:p-20 md:pb-0">
                        <form action="" method="post">
                            @csrf
                            <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">{{ __('messages.login') }}</h2>
                            <label class="label">
                                <span class="label-text-alt">{{ __('messages.username') }} :</span>
                            </label>
                            <input name="name" type="text" class="input input-bordered w-full my-2" />
                            <label class="label">
                                <span class="label-text-alt">{{ __('messages.password') }}:</span>
                            </label>
                            <input name="password" type="password" class="input input-bordered w-full my-2" />
                            <button type="submit" class="btn btn-primary w-full my-4">{{ __('messages.login') }}</button>
                        </form>
                        <div class="divider my-8">{{__('messages.loogin_with')}}</div>

                        <!-- دکمه‌های ورود با شبکه‌های اجتماعی -->
                        <div class="social-login-container">
                            <a href="{{ url('login/google') }}">
                            <div class="social-login-button google">
                                <i class="fab fa-google"></i>
                            </div></a><a href="{{ url('login/linkedin') }}">
                            <div class="social-login-button linkedin">
                                <i class="fab fa-linkedin"></i>
                            </div></a><a href="{{ url('login/facebook') }}">
                            <div class="social-login-button facebook">
                                <i class="fab fa-facebook-f"></i>
                            </div></a><a href="{{ url('login/x') }}">
                            <div class="social-login-button twitter">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/X_logo_2023.svg" alt="X" style="width: 20px; height: 20px;">
                                <!-- <i class="fab fa-twitter"></i> -->
                            </div></a>
                        </div><br>


                        <p class="text-center my-4"><a href="register">{{ __('messages.no_account') }}!!!</a></p>
                    </div>
                    <div class="hidden md:block">
                        <img class="bg-cover" src="../assets/images/login.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
