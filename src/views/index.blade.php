<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <title>فرم تماس با ما - {{config('contactForm.siteName')}}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>
    <link rel="stylesheet" href="{{url('vendor/maak/contactForm/assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{url('vendor/maak/contactForm/assets/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{url('vendor/maak/contactForm/assets/css/styles.css')}}"/>
    <link rel="stylesheet" href="{{url('vendor/maak/contactForm/assets/css/color-switcher.min.css')}}"/>
    <link rel="stylesheet" href="{{url('vendor/maak/contactForm/assets/css/preloader.min.css')}}"/>
    <link rel="stylesheet" href="{{url('vendor/maak/contactForm/assets/css/rtl.css')}}"/>

</head>

    <body>

        <!-- Begin::preloader -->
        <div id="preloader-wrapper">
            <div id="loading-layer">
               <div class="loading">
                  <div class="rect-one"></div>
                  <div class="rect-two"></div>
                  <div class="rect-three"></div>
                  <div class="rect-four"></div>
                  <div class="rect-five"></div>
              </div>
            </div>
        </div>
        <!-- End::preloader -->

        <!-- Begin::color-switcher -->
        <div id="color-switcher" class="shadow text-center">
            <h5>تغییر رنگ</h5>
            <hr>
            <ul class="color-scheme">
                <li class="c_f44336" data-color="#f44336"></li>
                <li class="c_e91e63" data-color="#e91e63"></li>
                <li class="c_ea4c89" data-color="#ea4c89"></li>
                <li class="c_9c27b0" data-color="#9c27b0"></li>
                <li class="c_673ab7" data-color="#673ab7"></li>
                <li class="c_3f51b5" data-color="#3f51b5"></li>
                <li class="c_5173b8" data-color="#5173b8"></li>
                <li class="c_5e72e4" data-color="#5e72e4"></li>
                <li class="c_2196f3" data-color="#2196f3"></li>
                <li class="c_03a9f4" data-color="#03a9f4"></li>
                <li class="c_00bcd4" data-color="#00bcd4"></li>
                <li class="c_009688" data-color="#009688"></li>
                <li class="c_4caf50" data-color="#4caf50"></li>
                <li class="c_8bc34a" data-color="#8bc34a"></li>
                <li class="c_ffc107" data-color="#ffc107"></li>
                <li class="c_ff9800" data-color="#ff9800"></li>
                <li class="c_795548" data-color="#795548"></li>
                <li class="c_9e9e9e" data-color="#9e9e9e"></li>
                <li class="c_607d8b" data-color="#607d8b"></li>
                <li class="c_333645" data-color="#333645"></li>
            </ul>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">گرد شده</span>
              </div>
              <input type="text" id="rounded-demo" oninput="if (!window.__cfRLUnblockHandlers) return false; this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="3" class="form-control" placeholder="Rounded" data-cf-modified-e060d6bb18548ac5bd31d046-="">
              <div class="input-group-append">
                <span class="input-group-text">px</span>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">سایه</span>
              </div>
              <select id="shadow-demo" class="form-control">
                  <option value="off" selected>خاموش</option>
                  <option value="on">روشن</option>
              </select>
            </div>

            <button class="btn switcher-toggle" title="Color Switcher">
                <i class="fas fa-cog fa-spin"></i>
            </button>

        </div>
        <!-- End::color-switcher -->

        <!-- Begin::auth-page -->
        <div class="d-flex justify-content-center swish-wrapper text-center" id="auth-page">
            <div class="container-fluid form-container shadow rounded my-auto">
                <div class="row h-100">
                    <!-- Begin::form-box -->
                    <div class="col-md-7 form-box bg-white rounded-left">
                        <div class="d-flex flex-column sign-in-container h-100">
                            <div class="align-items-center sign-in mx-auto my-auto px-4">
                                <!-- Begin::form -->
                                <form action="{{route('maak.contactForm.send')}}" class="sign-in-form box-rounded" method="post">
                                    @csrf
                                    <div class="py-3">
                                        <a class="logo-link" href="/">
{{--                                            <img class="logo-image" alt="Logo" src="assets/images/logo.png" />--}}
                                        </a>
                                    </div>

                                    <h3 class="text-neutral font-weight-bold py-1">{{config('contactForm.siteName')}}</h3>
                                    <p class="text-main">فرم تماس با ما</p>

{{--                                    <!-- Begin::social -->--}}
{{--                                    <div id="social-container" class="text-center py-3">--}}
{{--                                        <button class="btn btn-sm btn-facebook mr-2 box-rounded" type="button"><i class="fab fa-facebook-square"></i></button>--}}
{{--                                        <button class="btn btn-sm btn-pinterest mr-2 box-rounded" type="button"><i class="fab fa-pinterest"></i></button>--}}
{{--                                        <button class="btn btn-sm btn-twitter box-rounded" type="button"><i class="fab fa-twitter"></i></button>--}}
{{--                                    </div>--}}
{{--                                    <!-- End::social -->--}}

                                    <span class="text-main py-2 font-weight-light">ارسال پیام</span>

                                    <!-- Begin::form-group -->
                                    <div class="form-group mt-3">
                                        @auth
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-lg box-rounded" type="text" name="name" placeholder="نام شما" required="" value="{{auth()->user()->name}}"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-lg box-rounded" type="email" name="email" placeholder="ایمیل" required="" value="{{auth()->user()->email}}"/>
                                                </div>
                                            </div>
                                            @else
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-lg box-rounded" type="text" name="name" placeholder="نام شما" required="" />
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-lg box-rounded" type="email" name="email" placeholder="ایمیل" required="" />
                                                </div>
                                            </div>
                                        @endauth
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="پیام" required></textarea>
                                    </div>
                                    <!-- End::form-group -->

{{--                                    <!-- Begin::form-row -->--}}
{{--                                    <div class="form-row text-nowrap d-flex my-4">--}}
{{--                                        <div class="col d-flex align-items-center">--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" id="formCheck" />--}}
{{--                                                <label class="form-check-label justify-content-lg-center align-items-lg-center" for="formCheck">مرا به خاطر بسپار</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col d-flex justify-content-end align-items-center">--}}
{{--                                            <a class="text-neutral font-weight-bold" href="forgot-password.html">رمز عبور خود را فراموش کرده اید؟</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- End::form-row -->--}}

                                    <div class="d-flex">
                                        <button class="btn btn-main mr-4 col-md-12 shadow-sm box-rounded text-600" type="submit">ارسال پیام</button>
{{--                                        <a class="col btn btn-outline-main btn-link btn-lg shadow-sm box-rounded text-600" href="register.html">ثبت نام</a>--}}
                                    </div>
                                </form>
                                <!-- End::form -->
                            </div>
                        </div>
                    </div>
                    <!-- End::form-box -->

                    <!-- Begin::overlay-box -->
                    <div class="col-md-5 overlay-box bg-white rounded-right d-none d-md-block">
                        <div class="overlay-background mx-auto rounded-right"></div>
                    </div>
                    <!-- End::overlay-box -->
                </div>
            </div>
        </div>
        <!-- End::auth-page -->
        <script src="{{url('vendor/maak/contactForm/assets/js/jquery.min.js')}}"></script>
        <script src="{{url('vendor/maak/contactForm/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{url('vendor/maak/contactForm/assets/js/color-switcher.min.js')}}"></script>
        <script src="{{url('vendor/maak/contactForm/assets/js/preloader.min.js')}}"></script>
        <script src="{{url('vendor/maak/contactForm/assets/js/rocket-loader.min.js')}}" defer=""></script>
    </body>
</html>
