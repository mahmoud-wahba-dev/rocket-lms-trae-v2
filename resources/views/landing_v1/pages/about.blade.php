@extends('landing_v1.layouts.app')

@section('content')
@php($landingImg = asset('assets/landing_v1/img'))
<nav class="navbar rounded-box flex w-full items-center justify-between gap-2  shadow-[0px_4px_34.5px_-3px_#0000000D]">
    <div class="navbar-start max-md:w-1/4">
        <a class="link  link-neutral text-xl font-semibold no-underline" href="#">
            <img src="{{ asset('assets/landing_v1/logo_nav.png') }}" alt="Logo" class="h-16">
        </a>
    </div>
    <div class="navbar-center max-md:hidden">
        <ul class="menu menu-horizontal p-0 font-medium">
            <li><a class="font-medium text-20px text-[#3D455D]" href="#">الرئيسية</a></li>
            <li><a class="font-medium text-20px text-[#3D455D]" href="#">من نحن</a></li>
            <li><a class="font-medium text-20px text-[#3D455D]" href="#">الدورات</a></li>
            <li><a class="font-medium text-20px text-[#3D455D]" href="#">المدربين</a></li>
            <li><a class="font-medium text-20px text-[#3D455D]" href="#">المقالات</a></li>
            <li><a class="font-medium text-20px text-[#3D455D]" href="#">تواصل معنا</a></li>
        </ul>
    </div>
    <div class="navbar-end items-center gap-4">
        <div class="dropdown relative inline-flex md:hidden rtl:[--placement:bottom-end]">
            <button id="dropdown-default" type="button"
                class="dropdown-toggle btn btn-text bg-secondary text-white btn-square" aria-haspopup="menu"
                aria-expanded="false" aria-label="Dropdown">
                <span class="icon-[tabler--menu-2] dropdown-open:hidden size-5"></span>
                <span class="icon-[tabler--x] dropdown-open:block hidden size-5"></span>
            </button>
            <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical"
                aria-labelledby="dropdown-default">
                <li><a class="dropdown-item font-medium text-20px text-[#3D455D]" href="#">الرئيسية</a></li>
                <li><a class="dropdown-item font-medium text-20px text-[#3D455D]" href="#">من نحن</a></li>
                <li><a class="dropdown-item font-medium text-20px text-[#3D455D]" href="#">الدورات</a></li>
                <li><a class="dropdown-item font-medium text-20px text-[#3D455D]" href="#">المدربين</a></li>
                <li><a class="dropdown-item font-medium text-20px text-[#3D455D]" href="#">المقالات</a></li>
                <li><a class="dropdown-item font-medium text-20px text-[#3D455D]" href="#">تواصل معنا</a></li>
            </ul>
        </div>
        <div class="flex items-center gap-4 ">

            <div class="flex items-center gap-4">
                <a href="" class="btn btn-text">
                    <svg width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.33074 8.58362H20.3943C20.8028 8.58357 21.2065 8.67186 21.5777 8.84244C21.949 9.01302 22.2789 9.26186 22.5449 9.57189C22.8109 9.88192 23.0068 10.2458 23.119 10.6386C23.2312 11.0314 23.2572 11.4438 23.1951 11.8476L21.4172 23.3963C21.2628 24.3999 20.7542 25.3151 19.9835 25.9762C19.2127 26.6373 18.2308 27.0006 17.2153 27.0003H7.50833C6.49314 27.0002 5.51151 26.6368 4.74105 25.9757C3.9706 25.3147 3.46222 24.3997 3.30791 23.3963L1.52999 11.8476C1.4679 11.4438 1.49385 11.0314 1.60607 10.6386C1.7183 10.2458 1.91414 9.88192 2.18016 9.57189C2.44619 9.26186 2.77612 9.01302 3.14732 8.84244C3.51852 8.67186 3.92222 8.58357 4.33074 8.58362Z"
                            stroke="#3D455D" stroke-width="2.994" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M8.11328 12.8303V5.74695C8.11328 4.61978 8.56105 3.53877 9.35808 2.74174C10.1551 1.94471 11.2361 1.49695 12.3633 1.49695C13.4905 1.49695 14.5715 1.94471 15.3685 2.74174C16.1655 3.53877 16.6133 4.61978 16.6133 5.74695V12.8303"
                            stroke="#3D455D" stroke-width="2.994" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </a>

                <svg width="3" height="25" viewBox="0 0 3 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.01163" x2="1.01163" y2="24.2791" stroke="#3D455D" stroke-width="2.02326" />
                </svg>


                <a href="" class="btn btn-text">
                    <svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.0406 2.71557e-08C10.1205 0.000163613 8.2282 0.459516 6.52167 1.33973C4.81514 2.21995 3.34386 3.49551 2.23056 5.05998C1.11726 6.62446 0.39424 8.43249 0.121812 10.3332C-0.150615 12.234 0.0354539 14.1723 0.664495 15.9865C1.29354 17.8007 2.34731 19.4382 3.73789 20.7623C5.12848 22.0864 6.81556 23.0588 8.65837 23.5983C10.5012 24.1378 12.4463 24.2288 14.3314 23.8636C16.2165 23.4985 17.987 22.6879 19.4951 21.4993L24.6688 26.673C24.936 26.9311 25.2938 27.0738 25.6653 27.0706C26.0367 27.0674 26.3921 26.9184 26.6547 26.6557C26.9174 26.3931 27.0664 26.0378 27.0696 25.6663C27.0728 25.2949 26.93 24.937 26.672 24.6698L21.4983 19.4962C22.898 17.7205 23.7695 15.5867 24.013 13.3389C24.2566 11.0912 23.8624 8.8202 22.8756 6.78597C21.8888 4.75174 20.3492 3.03642 18.4331 1.83633C16.5169 0.636234 14.3016 -0.000151786 12.0406 2.71557e-08ZM2.83231 12.0417C2.83231 9.59946 3.80247 7.25729 5.52937 5.53039C7.25626 3.80349 9.59844 2.83333 12.0406 2.83333C14.4828 2.83333 16.825 3.80349 18.5519 5.53039C20.2788 7.25729 21.249 9.59946 21.249 12.0417C21.249 14.4839 20.2788 16.826 18.5519 18.5529C16.825 20.2798 14.4828 21.25 12.0406 21.25C9.59844 21.25 7.25626 20.2798 5.52937 18.5529C3.80247 16.826 2.83231 14.4839 2.83231 12.0417Z"
                            fill="#3D455D" />
                    </svg>


                </a>
            </div>

            <a class="btn max-md:btn-square btn-secondary  font-medium text-17px h-12 " href="#">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.73802 15.476V13.7565H13.7565V1.71956H7.73802V0H13.7565C14.2294 0 14.6343 0.168517 14.9714 0.505551C15.3084 0.842585 15.4766 1.24725 15.476 1.71956V13.7565C15.476 14.2294 15.3078 14.6343 14.9714 14.9714C14.6349 15.3084 14.2299 15.4766 13.7565 15.476H7.73802ZM6.01846 12.0369L4.83626 10.7902L7.0287 8.5978H0V6.87824H7.0287L4.83626 4.6858L6.01846 3.43912L10.3174 7.73802L6.01846 12.0369Z"
                        fill="white" />
                </svg>
                <span class="max-lg:hidden  font-medium text-17px">تسجيل الدخول


                </span>

            </a>
        </div>


    </div>
</nav>

<main class="mt-20">
    <header class="mt-16">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-6 ">

                <div class="md:w-[80%]">
                    <h1 class="font-bold text-57px  text-primary mb-6">التميز المهني عبر حلول تعليمية متكاملة </h1>
                    <p class="font-medium text-18px text-primary mb-7">تلتزم منصة "سمات بلس" بتقديم مسارات تدريبية نوعية
                        مصممة وفق أعلى المعايير المهنية، لتمكين الكوادر
                        الوطنية وتطوير كفاءاتهم.</p>
                    <div class="flex items-center flex-wrap gap-6 h-14 font-medium text-20px">
                        <a href="" class="btn btn-primary h-14 font-medium text-20px ">

                            <svg width="21" height="14" viewBox="0 0 21 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.25 5.115H13.75C13.608 5.115 13.489 5.06733 13.393 4.972C13.297 4.87667 13.2493 4.75767 13.25 4.615C13.2507 4.47233 13.2983 4.35333 13.393 4.258C13.4877 4.16267 13.6067 4.115 13.75 4.115H16.25V1.615C16.25 1.473 16.2977 1.354 16.393 1.258C16.4883 1.162 16.6073 1.11433 16.75 1.115C16.8927 1.11567 17.0117 1.16333 17.107 1.258C17.2023 1.35267 17.25 1.47167 17.25 1.615V4.115H19.75C19.8927 4.115 20.0117 4.16267 20.107 4.258C20.2023 4.35333 20.25 4.47233 20.25 4.615C20.25 4.75767 20.2023 4.87667 20.107 4.972C20.0117 5.06733 19.8927 5.115 19.75 5.115H17.25V7.615C17.25 7.75767 17.2023 7.87667 17.107 7.972C17.0117 8.06733 16.8927 8.115 16.75 8.115C16.6073 8.115 16.4883 8.06733 16.393 7.972C16.2977 7.87667 16.25 7.75767 16.25 7.615V5.115ZM4.877 5.123C4.29233 4.53767 4 3.83 4 3C4 2.17 4.29233 1.46233 4.877 0.877001C5.46167 0.291668 6.16933 -0.000665529 7 1.13766e-06C7.83067 0.000667804 8.53833 0.293001 9.123 0.877001C9.70767 1.461 10 2.16867 10 3C10 3.83133 9.70767 4.539 9.123 5.123C8.53833 5.707 7.83067 5.99933 7 6C6.16933 6.00067 5.46167 5.70833 4.877 5.123ZM0 12.192V11.584C0 11.1713 0.12 10.7853 0.36 10.426C0.600667 10.066 0.924 9.78667 1.33 9.588C2.274 9.13533 3.21867 8.796 4.164 8.57C5.10867 8.34333 6.054 8.23 7 8.23C7.946 8.23 8.89167 8.34333 9.837 8.57C10.7823 8.79667 11.7263 9.136 12.669 9.588C13.0757 9.78667 13.399 10.066 13.639 10.426C13.8797 10.7853 14 11.1713 14 11.584V12.192C14 12.4853 13.9003 12.732 13.701 12.932C13.5017 13.1307 13.255 13.23 12.961 13.23H1.04C0.746 13.23 0.499333 13.1303 0.3 12.931C0.100667 12.7317 0.000666667 12.4853 0 12.192Z"
                                    fill="white" />
                            </svg>

                            سجل لدينا الان
                        </a>

                        <a href="" class="btn btn-text h-14 font-medium text-20px">



                            اكتشف المزيد عنا </a>
                    </div>
                </div>

                <div>
                    <div>
                        <img src="{{ $landingImg }}/home/hero.webp" alt="hero image" class="max-w-full max-h-full">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section-gap">
        <div class="container">
            <h2 class="font-semibold text-32px text-primary mb-8">معتمدون لدى</h2>

            <div id="multi-slide"
                data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1, "sm": 2, "lg": 3 , "xl": 4 }, "isRTL": true ,"dotsItemClasses": "carousel-dot" ,"isInfiniteLoop": true }'
                class="relative w-full">
                <div class="carousel h-80">
                    <div class="carousel-body  h-full opacity-0">
                        <!-- Slide 1 -->
                        <div class="carousel-slide">
                            <div class="shadow-[0px_3px_29.3px_0px_#3D455D1A] flex h-full justify-center p-5">
                                <img class="object-contain"
                                    src="{{ asset('assets/landing_v1/img/partners/partner_1.webp') }}" alt="partner 1">
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-slide">
                            <div class="shadow-[0px_3px_29.3px_0px_#3D455D1A] flex h-full justify-center p-5">
                                <img class="object-contain"
                                    src="{{ asset('assets/landing_v1/img/partners/partner_2.webp') }}" alt="partner 2">
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-slide">
                            <div class="shadow-[0px_3px_29.3px_0px_#3D455D1A] flex h-full justify-center p-5">
                                <img class="object-contain"
                                    src="{{ asset('assets/landing_v1/img/partners/partner_3.webp') }}" alt="partner 3">
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="carousel-slide">
                            <div class="shadow-[0px_3px_29.3px_0px_#3D455D1A] flex h-full justify-center p-5">
                                <img class="object-contain"
                                    src="{{ asset('assets/landing_v1/img/partners/partner_4.webp') }}" alt="partner 4">
                            </div>
                        </div>
                        <!-- Slide 5 -->
                        <div class="carousel-slide">
                            <div class="shadow-[0px_3px_29.3px_0px_#3D455D1A] flex h-full justify-center p-5">
                                <img class="object-contain"
                                    src="{{ asset('assets/landing_v1/img/partners/partner_5.webp') }}" alt="partner 5">
                            </div>
                        </div>
                        <!-- Slide 6 -->
                        <div class="carousel-slide">
                            <div class="shadow-[0px_3px_29.3px_0px_#3D455D1A] flex h-full justify-center p-5">
                                <img class="object-contain"
                                    src="{{ asset('assets/landing_v1/img/partners/partner_6.webp') }}" alt="partner 6">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Previous Slide -->
                <button type="button" class="carousel-prev">
                    <span
                        class="size-12 bg-[#F4F4F6] border border-primary flex items-center justify-center rounded-full shadow">
                        <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>
                <!-- Next Slide -->
                <button type="button" class="carousel-next">
                    <span class="sr-only">Next</span>
                    <span
                        class="size-12 bg-[#F4F4F6] border border-primary flex items-center justify-center rounded-full shadow">
                        <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                    </span>
                </button>
            </div>
        </div>
    </section>


    <section class="section-gap">
        <div class="container">
            <h2 class="font-semibold text-32px text-primary mb-8">سمات في ارقام</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
                <div class="center flex-col px-4">
                    <p class="font-bold text-71px mb-7 text-secondary">
                        <span>+</span>
                        <span data-toggle-count='{"target":"#stats-1","min":0,"max":95000,"duration":1200}'>
                            0
                        </span>
                    </p>
                    <span id="stats-1" class="sr-only">95000</span>
                    <p class="font-semibold text-28px text-primary">عميل مستفيد </p>

                </div>




                <div class="center flex-col px-8 border-x border-[#B9A68566]">
                    <p class="font-bold text-71px mb-7 text-secondary">
                        <span>+</span>
                        <span data-toggle-count='{"target":"#stats-2","min":0,"max":620,"duration":1200}'>
                            0
                        </span>
                    </p>
                    <span id="stats-2" class="sr-only">620</span>
                    <p class="font-semibold text-28px text-primary">برنامج تدريبي </p>

                </div>

                <div class="center flex-col px-8 border-e border-[#B9A68566]">
                    <p class="font-bold text-71px mb-7 text-secondary">
                        <span>+</span>
                        <span data-toggle-count='{"target":"#stats-3","min":0,"max":66,"duration":1200}'>
                            0
                        </span>
                    </p>
                    <span id="stats-3" class="sr-only"> 66</span>
                    <p class="font-semibold text-28px text-primary">مستشارين ومدربين </p>

                </div>

                <div class="center flex-col px-4">
                    <p class="font-bold text-71px mb-7 text-secondary">
                        <span>+</span>
                        <span data-toggle-count='{"target":"#stats-4","min":0,"max":1200,"duration":1200}'>
                            0
                        </span>
                    </p>
                    <span id="stats-4" class="sr-only">+ 1200</span>
                    <p class="font-semibold text-28px text-primary">خدمة استشارية </p>

                </div>
            </div>
        </div>
    </section>
    <section class="section-gap bg-blue py-28 pb-36"
        style="background-image: url('{{ $landingImg }}/home/triangles-exp.webp'); background-size: 100%; background-repeat: no-repeat; background-position: bottom;">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div>
                    <h3 class="font-semibold text-white text-36px md:w-[60%]">ما الذي يجعل تجربتك التعليمية معنا
                        استثنائية؟</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:gap-28 gap-4 gap-y-16 text-white">
                    <div class="flex flex-col gap-3">
                        <div>
                            <svg width="50" height="42" viewBox="0 0 50 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.33333 19.4438L0 14.5833L25 0L50 14.5833V32.2917H45.8333V17.0146L41.6667 19.4438V33.3563L41.2021 33.9292C39.2512 36.3476 36.7831 38.298 33.9793 39.637C31.1755 40.976 28.1072 41.6696 25 41.6667C21.8928 41.6696 18.8245 40.976 16.0207 39.637C13.2168 38.298 10.7488 36.3476 8.79792 33.9292L8.33333 33.3563V19.4438ZM12.5 21.875V31.8583C14.0624 33.6337 15.9856 35.0553 18.1412 36.0281C20.2967 37.001 22.6351 37.5028 25 37.5C27.3649 37.5028 29.7033 37.001 31.8588 36.0281C34.0144 35.0553 35.9376 33.6337 37.5 31.8583V21.875L25 29.1667L12.5 21.875ZM8.27083 14.5833L25 24.3438L41.7292 14.5833L25 4.82292L8.27083 14.5833Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <h6 class="font-semibold text-32px">نخبة المدربين</h6>
                        <p class="font-medium text-20px">دورات مقدمة من خبراء ممارسين لنقل المعرفة الحقيقية من الميدان.
                        </p>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div>
                            <svg width="41" height="42" viewBox="0 0 41 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20.3125 3.125C13.5604 3.125 8.32083 7.35417 7.42708 12.5H11.9792C12.3936 12.5 12.791 12.6646 13.084 12.9576C13.377 13.2507 13.5417 13.6481 13.5417 14.0625V28.6458C13.5417 29.0602 13.377 29.4577 13.084 29.7507C12.791 30.0437 12.3936 30.2083 11.9792 30.2083H5.72917C4.2097 30.2083 2.75246 29.6047 1.67803 28.5303C0.603607 27.4559 1.25887e-07 25.9986 1.25887e-07 24.4792V18.2292C-0.000263959 16.969 0.414976 15.7439 1.18142 14.7435C1.94786 13.7432 3.02273 13.0235 4.23958 12.6958C5.03542 5.39583 12.1333 0 20.3125 0C28.4917 0 35.5896 5.39583 36.3854 12.6958C37.6023 13.0235 38.6771 13.7432 39.4436 14.7435C40.21 15.7439 40.6253 16.969 40.625 18.2292V24.4792C40.6254 25.7432 40.2078 26.9718 39.4372 27.9738C38.6666 28.9757 37.5863 29.6947 36.3646 30.0188C36.0334 32.3827 34.8589 34.5473 33.0576 36.1135C31.2563 37.6798 28.9495 38.5421 26.5625 38.5417H24.1771C23.8145 39.4381 23.1514 40.1804 22.3015 40.6415C21.4516 41.1027 20.4677 41.2538 19.5186 41.0691C18.5694 40.8844 17.7141 40.3753 17.0991 39.6292C16.4841 38.883 16.1478 37.9461 16.1478 36.9792C16.1478 36.0122 16.4841 35.0754 17.0991 34.3292C17.7141 33.583 18.5694 33.0739 19.5186 32.8892C20.4677 32.7045 21.4516 32.8557 22.3015 33.3168C23.1514 33.7779 23.8145 34.5203 24.1771 35.4167H26.5625C28.0868 35.417 29.5666 34.903 30.7625 33.9578C31.9584 33.0126 32.8003 31.6915 33.1521 30.2083H28.6458C28.2314 30.2083 27.834 30.0437 27.541 29.7507C27.248 29.4577 27.0833 29.0602 27.0833 28.6458V14.0625C27.0833 13.6481 27.248 13.2507 27.541 12.9576C27.834 12.6646 28.2314 12.5 28.6458 12.5H33.1979C32.3042 7.35417 27.0646 3.125 20.3125 3.125ZM5.72917 15.625C4.29167 15.625 3.125 16.7917 3.125 18.2292V24.4792C3.125 25.9167 4.29167 27.0833 5.72917 27.0833H10.4167V15.625H5.72917ZM37.5 18.2292C37.5 16.7917 36.3333 15.625 34.8958 15.625H30.2083V27.0833H34.8958C36.3333 27.0833 37.5 25.9167 37.5 24.4792V18.2292Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <h6 class="font-semibold text-32px">دعم مستمر</h6>
                        <p class="font-medium text-20px">فريقنا معك دائماً لضمان تجربة تعليمية تقنية خالية من العوائق.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div>
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.1538 12.8205V21.1538L27.4038 27.4038M2.86839 25.3205C3.65272 28.7617 5.39241 31.9117 7.88739 34.4082C10.3824 36.9046 13.5313 38.6462 16.9721 39.4325C20.4128 40.2189 24.0057 40.0182 27.3374 38.8534C30.6691 37.6886 33.6045 35.607 35.8058 32.8482C38.0071 30.0893 39.3851 26.7651 39.7811 23.2579C40.1772 19.7508 39.5753 16.203 38.0447 13.0227C36.5141 9.84235 34.117 7.15862 31.1289 5.28012C28.1409 3.40162 24.6833 2.40464 21.1538 2.40384C17.466 2.40284 13.8598 3.48935 10.7864 5.52744C7.71296 7.56552 5.30878 10.4647 3.87464 13.8622M10.7371 14.9038H2.40381V6.57051"
                                    stroke="white" stroke-width="4.80769" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>


                        </div>
                        <h6 class="font-semibold text-32px">مرونة التعلم</h6>
                        <p class="font-medium text-20px">محتوى متاح على مدار الساعة، تعلم في الوقت والمكان الذي يناسبك.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div>
                            <svg width="41" height="33" viewBox="0 0 41 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0833 30.6667H5.66667C4.5616 30.6667 3.50179 30.2277 2.72039 29.4463C1.93899 28.6649 1.5 27.6051 1.5 26.5V5.66667C1.5 3.375 3.375 1.5 5.66667 1.5H34.8333C35.9384 1.5 36.9982 1.93899 37.7796 2.72039C38.561 3.50179 39 4.5616 39 5.66667V26.5C38.9992 27.2307 38.8064 27.9483 38.4407 28.5809C38.075 29.2135 37.5495 29.7388 36.9167 30.1042M7.75 9.83333H32.75M7.75 16.0833H14M7.75 22.3333H11.9167"
                                    stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>


                        </div>
                        <h6 class="font-semibold text-32px">شهادات معتمدة </h6>
                        <p class="font-medium text-20px">احصل على شهادات إتمام تعزز من سيرتك الذاتية وتثبت جدارتك أمام
                            أصحاب العمل.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div>
            <!-- <img src="{{ $landingImg }}/home/triangles-exp.webp" alt="Section 2 Image"> -->
        </div>
    </section>

    <section class="section-gap">
        <div class="container">
            <h2 class="font-semibold text-36px text-primary mb-12">حلول تعليمية مخصصة لكل احتياج</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2  gap-8">
                <div class="flex items-center p-6 py-20"
                    style="background-image: url('{{ $landingImg }}/home/sol1.webp'); background-size: cover; background-position: center;">
                    <div class="lg:w-[45%] text-white">
                        <h5 class="mb-2 font-bold text-32px"> مسار الأفراد </h5>
                        <p class="mb-4">صُمم هذا المسار للافراد الطموحين الذين يسعون لاكتساب مهارات تنافسية في سوق العمل
                            السعودي. </p>
                        <div>
                            <a href="" class="btn btn-gold h-10 font-medium text-14px">
                                تسجيل الدخول
                                <span class="icon-[tabler--arrow-left]"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-6 py-20"
                    style="background-image: url('{{ $landingImg }}/home/sol2.webp'); background-size: cover; background-position: center;">
                    <div class="lg:w-[45%] text-white">
                        <h5 class="mb-2 font-bold text-32px"> مسار الشركات </h5>
                        <p class="mb-4">نقدم حلولاً تدريبية متكاملة للشركات والجهات الحكومية التي تسعى لرفع كفاءة فرق
                            عملها بما يتوافق مع رؤية المملكة 2030 </p>
                        <div>
                            <a href="" class="btn btn-primary h-10 font-medium text-14px">
                                تواصل معنا الان
                                <span class="icon-[tabler--arrow-left]"></span> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="flex justify-between items-center mb-15 flex-wrap ">
                <div>
                    <h4 class="font-semibold text-36px mb-3 text-primary">انطلق في رحلتك التعليمية القادمة</h4>
                    <p class="font-normal text-20px text-primary">برامج مكثفة مصممة لسد الفجوة المهارية وتعزيز التنافسية
                        في القطاعات الحيوية</p>
                </div>
                <div>
                    <a href="" class="btn btn-text font-semibold text-20px text-primary">
                        عرض كل الكورسات
                        <span class="icon-[tabler--arrow-left]"></span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-landing_v1::course-card title="استشارات نسخ"
                    description="اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا"
                    teacher-name="اسم المعلم" price="1.10ر.س" image="{{ $landingImg }}/home/course.webp" />
                <x-landing_v1::course-card title="استشارات نسخ"
                    description="اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا"
                    teacher-name="اسم المعلم" price="1.10ر.س" image="{{ $landingImg }}/home/course.webp" />
                <x-landing_v1::course-card title="استشارات نسخ"
                    description="اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا"
                    teacher-name="اسم المعلم" price="1.10ر.س" image="{{ $landingImg }}/home/course.webp" />
            </div>
        </div>
    </section>


    <section class="section-gap bg-blue py-28 pb-36"
        style="background-image: url('{{ $landingImg }}/home/bg-slide1.webp'); background-size: cover; background-repeat: no-repeat; background-position: bottom;">
        <div class="container">
            <div id="featured-courses"
                data-carousel='{ "loadingClasses": "opacity-0", "slidesQty": { "xs": 1, "lg": 1 }, "isRTL": true, "isInfiniteLoop": true, "dotsItemClasses": "carousel-dot", "isAutoPlay": true, "speed": 3500 }'
                class="relative w-full">
                <div class="carousel">
                    <div class="carousel-body opacity-0">
                        <div class="carousel-slide">
                            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                                <div class="lg:col-span-8 text-white">
                                    <div class="lg:w-[80%]">
                                        <p class="font-semibold text-white text-36px md:w-[60%] mb-5">
                                            <span class="icon-[tabler--star-filled] text-[#F9AA00]"></span>
                                            <span class="icon-[tabler--star-filled] text-[#F9AA00]"></span>
                                            ابدأ رحلة التميز مع دوراتنا الأكثر طلباً
                                        </p>
                                        <h3 class="font-bold text-50px text-white mb-8 lg:w-[75%]">
                                            الاستراتيجيات الحديثة في إدارة المشاريع الهندسية
                                        </h3>
                                        <p class="font-normal text-20px mb-8 lg:w-[70%]">
                                            دورة مكثفة صُممت خصيصاً لسد الفجوة بين المعرفة الأكاديمية التطبيق الميداني
                                            في كبرى الشركات،
                                            حيث
                                            نأخذك في رحلة تطبيقية شاملة
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-gold h-12 px-20 font-medium text-24px"> اشترك الان
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-4">
                                    <x-landing_v1::course-card title="استشارات نسخ"
                                        description="اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا"
                                        teacher-name="اسم المعلم" price="1.10ر.س"
                                        image="{{ $landingImg }}/home/course.webp" />
                                </div>
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                                <div class="lg:col-span-8 text-white">
                                    <div class="lg:w-[80%]">
                                        <p class="font-semibold text-white text-36px md:w-[60%] mb-5">
                                            <span class="icon-[tabler--star-filled] text-[#F9AA00]"></span>
                                            <span class="icon-[tabler--star-filled] text-[#F9AA00]"></span>
                                            ابدأ رحلة التميز مع دوراتنا الأكثر طلباً
                                        </p>
                                        <h3 class="font-bold text-50px text-white mb-8 lg:w-[75%]">
                                            الاستراتيجيات الحديثة في إدارة المشاريع الهندسية
                                        </h3>
                                        <p class="font-normal text-20px mb-8 lg:w-[70%]">
                                            دورة مكثفة صُممت خصيصاً لسد الفجوة بين المعرفة الأكاديمية التطبيق الميداني
                                            في كبرى الشركات،
                                            حيث
                                            نأخذك في رحلة تطبيقية شاملة
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-gold h-12 px-20 font-medium text-24px"> اشترك الان
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-4">
                                    <x-landing_v1::course-card title="استشارات نسخ"
                                        description="اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا"
                                        teacher-name="اسم المعلم" price="1.10ر.س"
                                        image="{{ $landingImg }}/home/course.webp" />
                                </div>
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                                <div class="lg:col-span-8 text-white">
                                    <div class="lg:w-[80%]">
                                        <p class="font-semibold text-white text-36px md:w-[60%] mb-5">
                                            <span class="icon-[tabler--star-filled] text-[#F9AA00]"></span>
                                            <span class="icon-[tabler--star-filled] text-[#F9AA00]"></span>
                                            ابدأ رحلة التميز مع دوراتنا الأكثر طلباً
                                        </p>
                                        <h3 class="font-bold text-50px text-white mb-8 lg:w-[75%]">
                                            الاستراتيجيات الحديثة في إدارة المشاريع الهندسية
                                        </h3>
                                        <p class="font-normal text-20px mb-8 lg:w-[70%]">
                                            دورة مكثفة صُممت خصيصاً لسد الفجوة بين المعرفة الأكاديمية التطبيق الميداني
                                            في كبرى الشركات،
                                            حيث
                                            نأخذك في رحلة تطبيقية شاملة
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-gold h-12 px-20 font-medium text-24px"> اشترك الان
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-4">
                                    <x-landing_v1::course-card title="استشارات نسخ"
                                        description="اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا"
                                        teacher-name="اسم المعلم" price="1.10ر.س"
                                        image="{{ $landingImg }}/home/course.webp" />
                                </div>
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                                <div class="lg:col-span-8 text-white">
                                    <div class="lg:w-[80%]">
                                        <p class="font-semibold text-white text-36px md:w-[60%] mb-5">
                                            <span class="icon-[tabler--star-filled] text-[#F9AA00]"></span>
                                            <span class="icon-[tabler--star-filled] text-[#F9AA00]"></span>
                                            ابدأ رحلة التميز مع دوراتنا الأكثر طلباً
                                        </p>
                                        <h3 class="font-bold text-50px text-white mb-8 lg:w-[75%]">
                                            الاستراتيجيات الحديثة في إدارة المشاريع الهندسية
                                        </h3>
                                        <p class="font-normal text-20px mb-8 lg:w-[70%]">
                                            دورة مكثفة صُممت خصيصاً لسد الفجوة بين المعرفة الأكاديمية التطبيق الميداني
                                            في كبرى الشركات،
                                            حيث
                                            نأخذك في رحلة تطبيقية شاملة
                                        </p>
                                        <div>
                                            <a href="" class="btn btn-gold h-12 px-20 font-medium text-24px"> اشترك الان
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-4">
                                    <x-landing_v1::course-card title="استشارات نسخ"
                                        description="اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا"
                                        teacher-name="اسم المعلم" price="1.10ر.س"
                                        image="{{ $landingImg }}/home/course.webp" />
                                </div>
                            </div>
                        </div>
                        <!-- Duplicate .carousel-slide blocks for additional slides. -->
                    </div>
                </div>
                <div class="mt-6 flex flex-col items-center gap-3">
                    <div class="carousel-pagination flex justify-center gap-3"></div>
                    <div class="flex items-center gap-3">
                        <button type="button" class="carousel-prev">
                            <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                                <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                            </span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button type="button" class="carousel-next">
                            <span class="sr-only">Next</span>
                            <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                                <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap">
        <div class="container">
            <h2 class="font-semibold text-36px text-primary mb-14">حلول تعليمية مخصصة لكل احتياج</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <div class="border border-[#00000029] rounded-8px">
                    <div class="mb-4 bg-e3">
                        <img src="{{ $landingImg }}/home/instructor.webp" alt="م. خالد السديري">
                    </div>
                    <div class="px-5 py-2">
                        <h6 class="font-semibold text-24px text-primary mb-1">م. خالد السديري</h6>
                        <p class="font-normal text-base text-primary leading-6">
                            في تطوير الحلول التقنية وإدارة المشاريع الهندسية في تطوير الحلول التقنية وإدارة المشاريع
                            الهندسيةفي تطوير الحلول التقنية وإدارة المشاريع الهندسية
                        </p>
                    </div>
                </div>

                <div class="border border-[#00000029] rounded-8px">
                    <div class="mb-4 bg-e3">
                        <img src="{{ $landingImg }}/home/instructor.webp" alt="م. خالد السديري">
                    </div>
                    <div class="px-5 py-2">
                        <h6 class="font-semibold text-24px text-primary mb-1">م. خالد السديري</h6>
                        <p class="font-normal text-base text-primary leading-6">
                            في تطوير الحلول التقنية وإدارة المشاريع الهندسية في تطوير الحلول التقنية وإدارة المشاريع
                            الهندسيةفي تطوير الحلول التقنية وإدارة المشاريع الهندسية
                        </p>
                    </div>
                </div>

                <div class="border border-[#00000029] rounded-8px">
                    <div class="mb-4 bg-e3">
                        <img src="{{ $landingImg }}/home/instructor.webp" alt="م. خالد السديري">
                    </div>
                    <div class="px-5 py-2">
                        <h6 class="font-semibold text-24px text-primary mb-1">م. خالد السديري</h6>
                        <p class="font-normal text-base text-primary leading-6">
                            في تطوير الحلول التقنية وإدارة المشاريع الهندسية في تطوير الحلول التقنية وإدارة المشاريع
                            الهندسيةفي تطوير الحلول التقنية وإدارة المشاريع الهندسية
                        </p>
                    </div>
                </div>
                <div class="border border-[#00000029] rounded-8px">
                    <div class="mb-4 bg-e3">
                        <img src="{{ $landingImg }}/home/instructor.webp" alt="م. خالد السديري">
                    </div>
                    <div class="px-5 py-2">
                        <h6 class="font-semibold text-24px text-primary mb-1">م. خالد السديري</h6>
                        <p class="font-normal text-base text-primary leading-6">
                            في تطوير الحلول التقنية وإدارة المشاريع الهندسية في تطوير الحلول التقنية وإدارة المشاريع
                            الهندسيةفي تطوير الحلول التقنية وإدارة المشاريع الهندسية
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-primary text-white pt-13 pb-4">
        <div class="container">
            <footer class="footer">
                <div class="">
                    <div class="flex items-center gap-2 text-xl font-bold mb-4">
                        <img src="{{ $landingImg }}/home/logo-footer.svg" alt="logo" class="">
                    </div>
                    <p class="font-normal text-20px mb-4 text-white lg:w-[70%]">شريكك المهني الأول في المملكة نقدم
                        حلولاً تعليمية
                        مبتكرة لصناعة مستقبل
                        واعد.</p>
                    <div class="flex items-center gap-4 flex-wrap">
                        <a href="#" class="bg-[#7C849A] size-9 center rounded-full">
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.574711 8.25221C0.624947 8.22709 0.675206 8.20322 0.724187 8.18061C1.57569 7.78626 2.43849 7.41704 3.30004 7.0478C3.34651 7.0478 3.42436 6.99379 3.46831 6.97621C3.53487 6.94732 3.60145 6.9197 3.66801 6.89081C3.79611 6.83555 3.92422 6.78154 4.05107 6.72628C4.30727 6.61702 4.5622 6.50776 4.81841 6.39849L6.35186 5.74166C7.37416 5.30461 8.39774 4.86629 9.42004 4.42923C10.4423 3.99218 11.4659 3.55388 12.4882 3.11682C13.5105 2.67977 14.5341 2.24147 15.5564 1.80441C16.5787 1.36736 17.6022 0.929041 18.6245 0.491987C18.8519 0.394027 19.098 0.248339 19.3417 0.205638C19.5464 0.169217 19.746 0.0988974 19.952 0.0599645C20.3426 -0.0141337 20.7734 -0.0442802 21.1476 0.117731C21.277 0.174247 21.3963 0.253368 21.4955 0.352584C21.9703 0.822291 21.9037 1.59342 21.8032 2.25402C21.1037 6.85815 20.4041 11.4635 19.7033 16.0677C19.6079 16.6994 19.4773 17.3926 18.9787 17.792C18.5567 18.1299 17.9564 18.1675 17.4352 18.0244C16.914 17.8799 16.4543 17.5773 16.0035 17.2796C14.1334 16.0413 12.2621 14.803 10.3921 13.5647C9.94752 13.2708 9.45271 12.8865 9.45773 12.3527C9.46024 12.0312 9.65238 11.7449 9.8483 11.4899C11.4734 9.36996 13.8182 7.91311 15.5626 5.89111C15.8088 5.60602 16.0022 5.0911 15.6644 4.92658C15.4634 4.82862 15.2323 4.96174 15.049 5.08858C12.7431 6.68986 10.4386 8.29239 8.13275 9.89366C7.38046 10.4161 6.59176 10.9537 5.685 11.0818C4.87368 11.1973 4.05735 10.9712 3.27241 10.7401C2.61432 10.5467 1.95746 10.3483 1.30314 10.1436C0.955255 10.0356 0.596065 9.91878 0.327302 9.67388C0.0585393 9.42898 -0.0959157 9.01705 0.0660955 8.69051C0.167824 8.4858 0.365004 8.35644 0.572227 8.25095L0.574711 8.25221Z"
                                    fill="#FEFFFC" />
                            </svg>

                        </a>

                        <a href="" class="bg-[#7C849A] size-9 center rounded-full">
                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.3321 16.7058C10.6957 16.7058 6.92363 12.9324 6.92236 8.29603C6.92363 7.12075 7.88062 6.16504 9.05336 6.16504C9.17393 6.16504 9.29323 6.17519 9.40745 6.1955C9.65876 6.23738 9.89738 6.32242 10.1169 6.45061C10.1487 6.46965 10.1702 6.50011 10.1753 6.53565L10.6652 9.62361C10.6716 9.65915 10.6602 9.69596 10.636 9.72261C10.3657 10.0221 10.0205 10.2379 9.63592 10.3458L9.45062 10.3978L9.52041 10.5768C10.1525 12.1861 11.4395 13.4718 13.0501 14.1064L13.229 14.1775L13.2811 13.9922C13.3889 13.6076 13.6047 13.2624 13.9042 12.9921C13.9258 12.9718 13.955 12.9616 13.9842 12.9616C13.9905 12.9616 13.9969 12.9616 14.0045 12.9629L17.0925 13.4528C17.1293 13.4591 17.1597 13.4794 17.1788 13.5112C17.3057 13.7307 17.3907 13.9706 17.4339 14.2219C17.4542 14.3336 17.4631 14.4517 17.4631 14.5748C17.4631 15.7488 16.5074 16.7045 15.3321 16.7058Z"
                                    fill="#FDFDFD" />
                                <path
                                    d="M23.5538 10.3948C23.3038 7.56952 22.0092 4.94862 19.9087 3.01562C17.7955 1.07121 15.054 0 12.1869 0C5.89417 0 0.774225 5.11996 0.774225 11.4127C0.774225 13.5246 1.35678 15.582 2.45971 17.3741L0 22.819L7.8754 21.98C9.24487 22.541 10.6943 22.8253 12.1856 22.8253C12.5778 22.8253 12.9801 22.805 13.3837 22.7631C13.7391 22.725 14.0983 22.6692 14.4511 22.5981C19.7209 21.5333 23.5678 16.8563 23.5983 11.4736V11.4127C23.5983 11.07 23.583 10.7273 23.5526 10.396L23.5538 10.3948ZM8.17874 19.5901L3.82158 20.0546L5.12251 17.1723L4.86232 16.8233C4.84328 16.7979 4.82424 16.7725 4.80267 16.7433C3.67308 15.1835 3.07654 13.3406 3.07654 11.4139C3.07654 6.39043 7.16337 2.3036 12.1869 2.3036C16.8931 2.3036 20.8822 5.9754 21.2667 10.6626C21.287 10.9139 21.2985 11.1664 21.2985 11.4152C21.2985 11.4863 21.2972 11.5561 21.2959 11.631C21.1995 15.8333 18.2638 19.4023 14.1567 20.311C13.8432 20.3808 13.5221 20.4341 13.2022 20.4684C12.8697 20.5065 12.5283 20.5255 12.1894 20.5255C10.9824 20.5255 9.80966 20.292 8.70165 19.83C8.57854 19.7805 8.45796 19.7272 8.345 19.6726L8.18001 19.5927L8.17874 19.5901Z"
                                    fill="#FDFDFD" />
                            </svg>


                        </a>


                        <a href="" class="bg-[#7C849A] size-9 center rounded-full">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.8258 0.000244141H5.61622C2.51936 0.000244141 0 2.51961 0 5.61646V15.8716C0 18.9685 2.51936 21.4878 5.61622 21.4878H16.8258C19.9227 21.4878 22.442 18.9685 22.442 15.8716V5.61646C22.442 2.51961 19.9227 0.000244141 16.8258 0.000244141ZM1.98123 5.61646C1.98123 3.61239 3.61215 1.98147 5.61622 1.98147H16.8258C18.8299 1.98147 20.4608 3.61239 20.4608 5.61646V15.8716C20.4608 17.8757 18.8299 19.5066 16.8258 19.5066H5.61622C3.61215 19.5066 1.98123 17.8757 1.98123 15.8716V5.61646Z"
                                    fill="white" />
                                <path
                                    d="M11.2187 15.9681C14.0985 15.9681 16.4427 13.6251 16.4427 10.7441C16.4427 7.86297 14.0998 5.52002 11.2187 5.52002C8.33758 5.52002 5.99463 7.86297 5.99463 10.7441C5.99463 13.6251 8.33758 15.9681 11.2187 15.9681ZM11.2187 7.50251C13.007 7.50251 14.4615 8.95702 14.4615 10.7453C14.4615 12.5336 13.007 13.9881 11.2187 13.9881C9.43036 13.9881 7.97585 12.5336 7.97585 10.7453C7.97585 8.95702 9.43036 7.50251 11.2187 7.50251Z"
                                    fill="white" />
                                <path
                                    d="M16.9393 6.3627C17.7148 6.3627 18.3468 5.73191 18.3468 4.95516C18.3468 4.17841 17.716 3.54761 16.9393 3.54761C16.1625 3.54761 15.5317 4.17841 15.5317 4.95516C15.5317 5.73191 16.1625 6.3627 16.9393 6.3627Z"
                                    fill="white" />
                            </svg>


                        </a>

                        <a href="" class="bg-[#7C849A] size-9 center rounded-full">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.83833 5.59033H0.286133V16.9181H3.83833V5.59033Z" fill="white" />
                                <path
                                    d="M13.4479 5.3449C13.317 5.32853 13.1778 5.32035 13.0387 5.31216C11.0498 5.23031 9.92846 6.40892 9.5356 6.91638C9.42919 7.05552 9.38008 7.13737 9.38008 7.13737V5.62318H5.9834V16.9509H9.38008H9.5356C9.5356 15.7969 9.5356 14.651 9.5356 13.4969C9.5356 12.8749 9.5356 12.2529 9.5356 11.6308C9.5356 10.8614 9.4783 10.043 9.86299 9.33907C10.1904 8.74977 10.7797 8.45512 11.4426 8.45512C13.407 8.45512 13.4479 10.2312 13.4479 10.3949C13.4479 10.4031 13.4479 10.4113 13.4479 10.4113V17H17.0001V9.60917C17.0001 7.08007 15.7151 5.59044 13.4479 5.3449Z"
                                    fill="white" />
                                <path
                                    d="M2.06256 4.12513C3.20168 4.12513 4.12513 3.20169 4.12513 2.06256C4.12513 0.923442 3.20168 0 2.06256 0C0.923438 0 0 0.923442 0 2.06256C0 3.20169 0.923438 4.12513 2.06256 4.12513Z"
                                    fill="white" />
                            </svg>


                        </a>
                    </div>
                </div>
                <nav class="">
                    <h6 class="footer-title font-semibold text-24px text-white mb-4">روابط سريعة</h6>
                    <a href="#" class="link link-hover font-normal text-19px text-white">الرئيسية</a>
                    <a href="#" class="link link-hover font-normal text-19px text-white">من نحن</a>
                    <a href="#" class="link link-hover font-normal text-19px text-white">الدورات</a>
                    <a href="#" class="link link-hover font-normal text-19px text-white">المدربين</a>
                    <a href="#" class="link link-hover font-normal text-19px text-white">المقالات</a>


                </nav>
                <nav class="">
                    <h6 class="footer-title font-semibold text-24px text-white mb-4">الاقسام</h6>
                    <a href="#" class="link link-hover font-normal text-19px text-white">تسويق</a>
                    <a href="#" class="link link-hover font-normal text-19px text-white">استراتيجية العمل</a>
                    <a href="#" class="link link-hover font-normal text-19px text-white">الصحة واللياقة البدنية</a>
                    <a href="#" class="link link-hover font-normal text-19px text-white">تطوير الشبكة</a>


                </nav>

                <nav class="">
                    <h6 class="footer-title font-semibold text-24px text-white mb-4">شركة سمات للتطوير و الاستشارات</h6>
                    <p href="#" class="link link-hover font-normal text-19px text-white">المملكة العربية السعودية - المنطقة الشرقية الدمام</p>
                    <a href="mailto:info@siematplus.com" class="link link-hover font-normal text-19px text-white">info@siematplus.com</a>



                </nav>

            </footer>
            <div class="footer text-white border-[#FFFFFF5E] border-t px-6 py-5 mt-9">
                <div class="center w-full ">
                    <aside class="grid-flow-col items-center">
                        <p class="font-normal text-white text-17px text-center">© كل الحقوق محفوطة لدي @ <a class="link link-hover font-medium" href="#">SIEMATPLUS</a></p>
                    </aside>

                </div>
            </div>

        </div>
    </footer>

</main>
@endsection
