<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MONZY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #e7e7e7;
    }

    .max-width {
        max-width: 850px !important;
    }

    .card {
        background-color: #f9e0bb;
        margin-bottom: 2px;
        padding-bottom: 8px;
    }

    a {
        text-decoration: none;
    }

    .btn {
        border-bottom: 3px solid #684c40;
        border-radius: 10px;
        box-shadow: 0 5px 5px -6px rgba(0, 0, 0, .3);
        text-shadow: 1px 1px 0 #9d5331;
        height: 40px;
    }

    .svg-inline--fa {
        display: inline-block;
        height: 1em;
        overflow: visible;
        vertical-align: -0.125em;
    }

    .main {
        background-color: #e7b38f;
        border-radius: 0.5rem;
        margin-top: 0.5rem;
        padding: 3px;
    }

    .operating-system span {
        font-size: 14px;
    }
</style>
<div class="main container max-width">
    <header>
        <div class="text-center card">
            <a href="/">
                <div class="">
{{--                    <img class="logo" alt="Logo" src="https://nsokun.me/images/logo.png?v1" style="max-width: 200px;">--}}
                    <h3>MONZY</h3>
                </div>
            </a>

            <div class="mt-3">
                <div class="mt-3">
                    <button type="button" class="btn-sd btn btn-danger">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right-to-bracket"
                             class="svg-inline--fa fa-arrow-right-to-bracket " role="img"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor"
                                  d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"></path>
                        </svg>
                        Đăng nhập
                    </button>
                    <a href="{{ route('register')  }}" type="button" class="ms-2 btn-sd btn btn-danger">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus"
                             class="svg-inline--fa fa-user-plus " role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 640 512">
                            <path fill="currentColor"
                                  d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                        </svg>
                        Đăng ký
                    </a>
                </div>
            </div>
        </div>
        <div class="operating-system">
            <div class="row text-center justify-content-center row-cols-2 row-cols-lg-6 g-2 g-lg-2 my-1 mb-2">
                {{--                <div class="col">--}}
                {{--                    <div class="px-2"><span class="btn btn-menu btn-danger w-100 fw-semibold">--}}
                {{--                            <svg--}}
                {{--                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="jar"--}}
                {{--                                class="svg-inline--fa fa-jar " role="img" xmlns="http://www.w3.org/2000/svg"--}}
                {{--                                viewBox="0 0 320 512">--}}
                {{--                                <path fill="currentColor"--}}
                {{--                                      d="M32 32C32 14.3 46.3 0 64 0H256c17.7 0 32 14.3 32 32s-14.3 32-32 32H64C46.3 64 32 49.7 32 32zM0 160c0-35.3 28.7-64 64-64H256c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160zm96 64c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32H224c17.7 0 32-14.3 32-32V256c0-17.7-14.3-32-32-32H96z">--}}
                {{--                                </path>--}}
                {{--                            </svg> JAVA--}}
                {{--                        </span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col">
                    <div class="px-2">
                        <a href="{{ asset('upload/game/monzy(koi).apk') }}">
                            <span class="btn btn-menu btn-danger w-100 fw-semibold">
                                <svg
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen"
                                    class="svg-inline--fa fa-mobile-screen " role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="currentColor"
                                          d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z">
                                    </path>
                                </svg> ANDROID
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="px-2">
                        <a href="{{ asset('upload/game/NRO MONZY.zip') }}">
                            <span class="btn btn-menu btn-danger w-100 fw-semibold">
                                <svg
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="desktop"
                                    class="svg-inline--fa fa-desktop " role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                          d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64H240l-10.7 32H160c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H346.7L336 416H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM512 64V288H64V64H512z">
                                    </path>
                                </svg> WINDOWS
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="px-2">
                        <a href="{{ asset('upload/game/monzy(koi).ipa') }}">
                            <span class="btn btn-menu btn-danger w-100 fw-semibold">
                                <svg
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="apple-whole"
                                    class="svg-inline--fa fa-apple-whole " role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                          d="M224 112c-8.8 0-16-7.2-16-16V80c0-44.2 35.8-80 80-80h16c8.8 0 16 7.2 16 16V32c0 44.2-35.8 80-80 80H224zM0 288c0-76.3 35.7-160 112-160c27.3 0 59.7 10.3 82.7 19.3c18.8 7.3 39.9 7.3 58.7 0c22.9-8.9 55.4-19.3 82.7-19.3c76.3 0 112 83.7 112 160c0 128-80 224-160 224c-16.5 0-38.1-6.6-51.5-11.3c-8.1-2.8-16.9-2.8-25 0c-13.4 4.7-35 11.3-51.5 11.3C80 512 0 416 0 288z">
                                    </path>
                                </svg> IPHONE
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('client-content')
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
