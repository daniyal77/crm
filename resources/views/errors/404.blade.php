
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>

    <title>صفحه مورد نظر یافت نشد</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script src="{{asset('js/app.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
        document.documentElement.classList.add("dark");
    </script>
</head>
<body x-data x-bind="$store.global.documentBody">
<!-- App preloader-->
<div
    class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
>
    <div class="app-preloader-inner relative inline-block size-48"></div>
</div>

<!-- Page Wrapper -->
<div
    id="root"
    class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
    x-cloak
>
    <main
        :style="$store.global.isDarkModeEnabled ? {backgroundImage : `url('/images/illustrations/ufo-bg-dark.svg')`} :{backgroundImage : `url('/images/illustrations/ufo-bg.svg')`}"
        class="grid w-full grow grid-cols-1 place-items-center bg-center"
    >
        <div class="max-w-[26rem] text-center">
            <div class="w-full">
                <img
                    class="w-full"
                    x-show="!$store.global.isDarkModeEnabled"
                    src="{{asset('images/illustrations/ufo.svg')}}"
                    alt="image"
                />
                <img
                    class="w-full"
                    x-show="$store.global.isDarkModeEnabled"
                    src="{{asset('images/illustrations/ufo-dark.svg')}}"
                    alt="image"
                />
            </div>
            <p class="pt-4 text-7xl font-bold text-primary dark:text-accent">
                404
            </p>
            <p class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50">
                اوه. این صفحه یافت نشد.
            </p>
            <p class="pt-2 text-slate-500 dark:text-navy-200">
                این صفحه که به دنبال آن هستید در دسترس نیست

            </p>

            <a href="/"
                class="btn mt-8 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
               بازگشت به خانه
            </a>
        </div>
    </main>
</div>

<!--
    This is a place for Alpine.js Teleport feature
    @see https://alpinejs.dev/directives/teleport
  -->
<div id="x-teleport-target"></div>
<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
</script>
</body>
</html>
