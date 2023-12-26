<!DOCTYPE html>
<html lang="en">

<head>
    <!-- specifies the character encoding for the HTML document -->
    <meta charset="UTF-8">
    <!-- Displays site properly based on user's device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Provides a brief summary of a web page -->
    <meta name="description"
        content="This is a solution to the Skilled e-learning landing page challenge on Frontend Mentor.
        The purpose of this challenge is to improve my coding skills by building realistic projects.">
    <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <!-- Favicon -->
{{--    <link rel="icon" type="image/ico" sizes="32x32" href="">--}}
    <!-- CSS File  -->
    <link rel="stylesheet" href="css/welcome.css">
    <title>e-Harfa</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header__container container">
            <a href="/" class="logo-dark">
                <h1>e-Harfa</h1>
            </a>
            @if (Route::has('login'))
                <div class="conn_btns">
                    @auth
                        <a href="{{ url('/home') }}" class="header__get-started btn byn-yan-blue">My Account</a>
                    @else
                        <a href="{{ route('login') }}" class="header__get-started btn byn-yan-blue">Log In</a>
                        {{-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> --}}

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="header__get-started btn byn-yan-blue">Get Started</a>
                            {{-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif

                {{-- <a href="/register" class="header__get-started btn byn-yan-blue">Get Started</a>
                <a href="/login" class="header__get-started btn byn-yan-blue">Log In</a>
            </div> --}}
        </div>
    </header>
    <main>
        <!-- Hero section -->
        <section class="hero">
            <div class="hero__container container">
                <div class="hero__content">
                    <h1>Maximize skill, minimize budget</h1>
                    <p>Our modern courses across a range of in-demand skills
                        will give you the knowledge you need to live the life you want.</p>
                    <a href="/register" class="btn btn-mag-orange">Get Started</a>
                </div>
                <div class="hero__img">
                    <div class="abs__stat members">
                        <h3>Members </h3>
                        <h1>39K</h1>
                    </div>
                    <div class="abs__stat hours">
                        <h3>Course hours</h3>
                        <h1>1,4561</h1>
                    </div>
                    <picture>
                        <source media="(min-width: 992px)" srcset="assets/image-hero-desktop.png">
                        <source media="(min-width: 768px)" srcset="assets/image-hero-tablet.png">
                        <img src="assets/image-hero-mobile@.svg" alt="image hero">

                    </picture>
                </div>
                <div class="phone__view">
                    <div class="abs__stat members">
                        <h3>Members </h3>
                        <h1>39K</h1>
                    </div>
                    <div class="abs__stat hours">
                        <h3>Course hours</h3>
                        <h1>1,4561</h1>
                    </div>
                    <img class="img__phone" src="assets/img_index_phone.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- Courses section -->
        <section class="courses">
            <div class="courses__container container">
                <div class="courses__heading">
                    <h2>Check out our most popular courses!</h2>
                </div>

                {{-- we will pass all the informations about the courses from the DB in the future--}}

                @foreach ($courses as $course)
                <x-course-card
                        :title="$course->title"
                        :content="$course->content"
                        :link="$course->link"
                />
                @endforeach


            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <div class="footer__container container">
            <div>
                <a href="/" class="logo-light">
                    <h1>e-Harfa</h1>
                </a>
                <div class="social__media">
                    <a href="https://instagram.com/aouabeboubaker"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com/aouabeboubaker"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <p>By <a class="developper" target="_blank" href="https://aouabe-boubker.vercel.app/">AOUABE Boubker</a></p>
            <a href="/register" class="footer__get-started btn btn-mag-blue">Get Started</a>
        </div>
    </footer>
</body>

</html>
