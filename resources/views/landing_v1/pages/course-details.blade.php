@extends('landing_v1.layouts.app')

@section('content')
@php($landingImg = asset('assets/landing_v1/img/instructors'))
<main>

    <header class="min-h-[80vh] bg-primary text-white flex items-center"
        style="background-image: url('{{ asset('assets/landing_v1/img/home/triangles-exp.webp') }}'); background-size: 100%; background-repeat: no-repeat; background-position: bottom;">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-16 gap-4">
                <div class="lg:col-span-8">
                    <div class=" w-full ">
                        <div class="breadcrumbs mb-1.5">
                            <ul>
                                <li>
                                    <a href="/" class="font-medium text-20px text-white">
                                        الرئيسية
                                    </a>
                                </li>
                                <li class="breadcrumbs-separator">
                                    <span class="icon-[tabler--chevron-right] text-white rtl:rotate-180"></span>
                                </li>
                                <li>
                                    <a href="{{ route('landing.v1.courses') }}"
                                        class="font-medium text-20px text-white">
                                        الدورات
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h1 class="font-bold text-64px mb-5 text-white">استشارات نسخ</h1>
                        <p class="font-medium text-base mb-7">اكتب هنا وصف الكورس اكتب هنا وصف الكورس اكتب هنا وصف
                            الكورس اكتب هنا وصف الكورس اكتب هنا </p>

                        <div class="flex gap-2 mb-13">
                            <div class="size-11 center bg-white rounded-full">
                                <img class="avatar" src="" alt="">
                            </div>
                            <div>
                                <p class="font-medium text-19px ">اسم المعلم</p>
                                <p class="font-medium text-12px">اسم المعلم</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-10 flex-wrap">
                            <div class="flex items-center gap-1.5">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_362_6354)">
                                        <path
                                            d="M20.9996 9.80234H16.7996V1.40234H11.1996V9.80234H6.99963L13.9996 16.8023L20.9996 9.80234ZM27.0728 18.9471C26.7788 18.6335 24.8174 16.5349 24.2574 15.9875C23.8653 15.611 23.3423 15.4012 22.7986 15.4023H20.3388L24.6284 19.5939H19.6668C19.5993 19.5921 19.5325 19.6084 19.4734 19.6412C19.4143 19.6739 19.3651 19.7219 19.3308 19.7801L18.1884 22.4023H9.81083L8.66843 19.7801C8.63311 19.7229 8.58365 19.6757 8.5248 19.6431C8.46596 19.6105 8.39971 19.5935 8.33243 19.5939H3.37083L7.65903 15.4023H5.20063C4.64483 15.4023 4.11423 15.6249 3.74183 15.9875C3.18183 16.5363 1.22043 18.6349 0.926431 18.9471C0.241832 19.6765 -0.134768 20.2575 0.0444315 20.9757L0.829831 25.2793C1.00903 25.9989 1.79723 26.5897 2.58263 26.5897H25.4194C26.2048 26.5897 26.993 25.9989 27.1722 25.2793L27.9576 20.9757C28.134 20.2575 27.7588 19.6765 27.0728 18.9471Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_362_6354">
                                            <rect width="28" height="28" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="font-medium text-19px text-white">محتوى قابل للتنزيل</span>
                            </div>

                            <div class="flex items-center gap-1.5">
                                <div class="flex items-center gap-1.5">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_362_6354)">
                                            <path
                                                d="M20.9996 9.80234H16.7996V1.40234H11.1996V9.80234H6.99963L13.9996 16.8023L20.9996 9.80234ZM27.0728 18.9471C26.7788 18.6335 24.8174 16.5349 24.2574 15.9875C23.8653 15.611 23.3423 15.4012 22.7986 15.4023H20.3388L24.6284 19.5939H19.6668C19.5993 19.5921 19.5325 19.6084 19.4734 19.6412C19.4143 19.6739 19.3651 19.7219 19.3308 19.7801L18.1884 22.4023H9.81083L8.66843 19.7801C8.63311 19.7229 8.58365 19.6757 8.5248 19.6431C8.46596 19.6105 8.39971 19.5935 8.33243 19.5939H3.37083L7.65903 15.4023H5.20063C4.64483 15.4023 4.11423 15.6249 3.74183 15.9875C3.18183 16.5363 1.22043 18.6349 0.926431 18.9471C0.241832 19.6765 -0.134768 20.2575 0.0444315 20.9757L0.829831 25.2793C1.00903 25.9989 1.79723 26.5897 2.58263 26.5897H25.4194C26.2048 26.5897 26.993 25.9989 27.1722 25.2793L27.9576 20.9757C28.134 20.2575 27.7588 19.6765 27.0728 18.9471Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_362_6354">
                                                <rect width="28" height="28" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="font-medium text-19px text-white">3 ساعات</span>
                                </div>
                            </div>

                            <div class="flex items-center gap-1.5">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.9163 14.0012C16.9163 14.7747 16.6091 15.5166 16.0621 16.0636C15.5151 16.6106 14.7732 16.9179 13.9997 16.9179C13.2261 16.9179 12.4843 16.6106 11.9373 16.0636C11.3903 15.5166 11.083 14.7747 11.083 14.0012C11.083 13.2277 11.3903 12.4858 11.9373 11.9388C12.4843 11.3918 13.2261 11.0845 13.9997 11.0845C14.7732 11.0845 15.5151 11.3918 16.0621 11.9388C16.6091 12.4858 16.9163 13.2277 16.9163 14.0012Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M18.6664 5.83454C21.5597 5.83454 23.5547 6.28254 24.6549 6.62321C25.2884 6.81921 25.6664 7.42004 25.6664 8.08271V19.4635C25.6664 20.7644 24.2337 21.7432 22.955 21.5017C21.8584 21.2952 20.4292 21.1284 18.6664 21.1284C13.1247 21.1284 11.7947 23.2354 3.66886 21.4434C3.28828 21.3571 2.94851 21.1436 2.70564 20.8382C2.46277 20.5327 2.33133 20.1536 2.33302 19.7634V8.07454C2.33302 6.93587 3.40636 6.10637 4.52402 6.32804C11.8962 7.79104 13.3242 5.83454 18.6664 5.83454Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M2.33301 10.5012C4.60917 10.5012 6.65551 8.64035 6.91684 6.71418M21.583 6.41785C21.583 8.79785 23.6422 11.0483 25.6663 11.0483M25.6663 17.5012C23.4497 17.5012 21.303 19.0295 21.1187 21.1155M6.99967 21.5798C6.99967 20.3422 6.50801 19.1552 5.63284 18.28C4.75767 17.4048 3.57068 16.9132 2.33301 16.9132"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                                <span class="font-medium text-19px text-white">مجانية</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4">
                    <div class="border border-[#0000002B] rounded-10px bg-white text-primary">
                        <div>
                            <img src="{{ asset('assets/landing_v1/img/home/course.webp') }}" alt="Course Image"
                                class="w-full h-[200px] object-cover rounded-t-10px">
                        </div>
                        <div class="p-7">
                            <p class="font-bold text-32px text-primary mb-7">
                                1.10ر.س
                            </p>
                            <a href="{{ route('landing.v1.login') }}"
                                class="btn btn-primary btn-block h-15 rounded-5px font-semibold text-20px mb-3">
                                اشترك الان </a>
                            <a href="{{ route('landing.v1.courses') }}"
                                class="btn btn-outline-primary btn-block h-15 rounded-5px font-semibold text-20px">
                                اضف للسلة
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section-gap course_details_page relative">
        <div class="container ">
            <div class="w-[65%]">
                <nav data-scrollspy="#course-content-scrollspy" class="sticky top-4 bg-white z-50 flex gap-6 border-b border-[#B4B4B4] mb-25 overflow-x-auto whitespace-nowrap">
                    <a href="#about-course"
                        class="font-medium text-24px text-[#B4B4B4] pb-7 border-b-2 border-transparent hover:border-primary hover:text-primary transition scrollspy-active:border-primary scrollspy-active:text-primary active">
                        عن الدورة
                    </a>
                    <a href="#course-content"
                        class="font-medium text-24px text-[#B4B4B4] pb-7 border-b-2 border-transparent hover:border-primary hover:text-primary transition scrollspy-active:border-primary scrollspy-active:text-primary">
                        المحتوى
                    </a>
                    <a href="#course-instructor"
                        class="font-medium text-24px text-[#B4B4B4] pb-7 border-b-2 border-transparent hover:border-primary hover:text-primary transition scrollspy-active:border-primary scrollspy-active:text-primary">
                        عن المدرب
                    </a>
                    <a href="#course-faq"
                        class="font-medium text-24px text-[#B4B4B4] pb-7 border-b-2 border-transparent hover:border-primary hover:text-primary transition scrollspy-active:border-primary scrollspy-active:text-primary">
                        الاسئلة الشائعة
                    </a>
                    <a href="#course-rating"
                        class="font-medium text-24px text-[#B4B4B4] pb-7 border-b-2 border-transparent hover:border-primary hover:text-primary transition scrollspy-active:border-primary scrollspy-active:text-primary">
                        التقييم
                    </a>
                </nav>

                <div id="course-content-scrollspy">

                <div id="about-course" class="mb-16 scroll-mt-10">
                    <h3 class="font-medium text-36px text-primary mb-8">عن الدورة</h3>
                    <div class="border border-[#CFCFCF] px-8 py-11 rounded-8px">
                        <p class="font-normal text-24px text-primary mb-9">
                            تستهدف هذه الدورة تقديم رؤية شاملة حول كيفية بناء استشارات ذات قيمة مضافة عالية، مع
                            التركيز على لغة الثقة والرصانة في التعامل مع الجهات الحكومية والخاصة .

                        </p>
                        <h4 class="font-bold text-32px text-primary mb-3">ماذا ستتعلم؟</h4>
                        <ul class="text-[#7C7F88] space-x-3">
                            <li>إتقان منهجيات التحليل الاستشاري الحديثة.</li>
                            <li>بناء نماذج أعمال مرنة تتوافق مع المعايير المؤسسية.</li>
                            <li>أدوات عملية لزيادة معدل التحويل وتفاعل العملاء.</li>
                        </ul>
                    </div>
                </div>


                <div id="course-content" class="mb-16 scroll-mt-10">
                    <h3 class="font-medium text-36px text-primary mb-8">منهج الدورة</h3>
                    <div class="border border-[#CFCFCF]   px-8 py-11 rounded-8px">

                        <div class="accordion accordion-shadow">
                            <div class="accordion-item active" id="curriculum-1">
                                <button
                                    class="accordion-toggle inline-flex items-center gap-x-4 px-5 font-medium text-24px text-primary py-8 border-[#E7E7E7] text-start"
                                    aria-controls="curriculum-1-collapse" aria-expanded="true">
                                    <span
                                        class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                                    <span
                                        class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                                    الوحدة الأولى: فهم احتياجات السوق وبناء استشارات ذات قيمة مضافة.
                                </button>
                                <div id="curriculum-1-collapse"
                                    class="accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="curriculum-1" role="region">
                                    <div class="px-5 pb-4">
                                        <ul class="text-base-content/80 font-normal list-disc list-inside space-y-2">
                                            <li>التعرف على احتياجات السوق الحالية.</li>
                                            <li>بناء نماذج استشارية فعالة.</li>
                                            <li>تقديم قيمة حقيقية للعملاء.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" id="curriculum-2">
                                <button
                                    class="accordion-toggle inline-flex items-center gap-x-4 px-5 font-medium text-24px text-primary py-8 border-[#E7E7E7] text-start "
                                    aria-controls="curriculum-2-collapse" aria-expanded="false">
                                    <span
                                        class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                                    <span
                                        class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                                    الوحدة الثانية: أدوات التحليل والتطوير.
                                </button>
                                <div id="curriculum-2-collapse"
                                    class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="curriculum-2" role="region">
                                    <div class="px-5 pb-4">
                                        <ul class="text-base-content/80 font-normal list-disc list-inside space-y-2">
                                            <li>استخدام أحدث أدوات التحليل.</li>
                                            <li>تطوير استراتيجيات العمل.</li>
                                            <li>قياس الأداء وتحسين النتائج.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" id="curriculum-3">
                                <button
                                    class="accordion-toggle inline-flex items-center gap-x-4 px-5 font-medium text-24px text-primary py-8 border-[#E7E7E7] text-start "
                                    aria-controls="curriculum-3-collapse" aria-expanded="false">
                                    <span
                                        class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                                    <span
                                        class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                                    الوحدة الثالثة: بناء المجتمع والتفاعل مع المستفيدين.
                                </button>
                                <div id="curriculum-3-collapse"
                                    class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="curriculum-3" role="region">
                                    <div class="px-5 pb-4">
                                        <ul class="text-base-content/80 font-normal list-disc list-inside space-y-2">
                                            <li>أسس بناء مجتمع تفاعلي.</li>
                                            <li>طرق التواصل الفعال مع المستفيدين.</li>
                                            <li>تعزيز ولاء العملاء.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="course-instructor" class="mb-16 scroll-mt-10">
                    <h3 class="font-medium text-36px text-primary mb-8">عن المدرب</h3>
                    <div class="border border-[#CFCFCF]  flex items-center gap-10 px-8 py-11 rounded-8px">
                        <div class="mb-4 bg-e3 w-[40%] center h-[222px]">
                            <img src="/assets/landing_v1/img/home/instructor.webp" alt="م. خالد السديري">
                        </div>
                        <div class="">
                            <h6 class="font-semibold text-24px text-primary mb-2">م. أحمد بن صالح آل سعود</h6>
                            <p class="font-normal text-base text-primary leading-6 mb-6">
                                خبير استراتيجيات التحول الرقمي ومستشار تطوير الأعمال.
                            </p>

                            <div class="flex justify-between items-center lg:gap-4 xl:gap-9 flex-wrap mb-7">
                                <div class="flex items-center gap-2">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.79083 0C4.95659 0 5.11557 0.065848 5.23278 0.183058C5.34999 0.300269 5.41583 0.45924 5.41583 0.625V1.26083C5.9675 1.25 6.575 1.25 7.24333 1.25H10.6708C11.34 1.25 11.9475 1.25 12.4992 1.26083V0.625C12.4992 0.45924 12.565 0.300269 12.6822 0.183058C12.7994 0.065848 12.9584 0 13.1242 0C13.2899 0 13.4489 0.065848 13.5661 0.183058C13.6833 0.300269 13.7492 0.45924 13.7492 0.625V1.31417C13.9658 1.33083 14.1711 1.35194 14.365 1.3775C15.3417 1.50917 16.1325 1.78583 16.7567 2.40917C17.38 3.03333 17.6567 3.82417 17.7883 4.80083C17.9158 5.75083 17.9158 6.96333 17.9158 8.495V10.255C17.9158 11.7867 17.9158 13 17.7883 13.9492C17.6567 14.9258 17.38 15.7167 16.7567 16.3408C16.1325 16.9642 15.3417 17.2408 14.365 17.3725C13.415 17.5 12.2025 17.5 10.6708 17.5H7.245C5.71333 17.5 4.5 17.5 3.55083 17.3725C2.57417 17.2408 1.78333 16.9642 1.15917 16.3408C0.535833 15.7167 0.259167 14.9258 0.1275 13.9492C0 12.9992 0 11.7867 0 10.255V8.495C0 6.96333 0 5.75 0.1275 4.80083C0.259167 3.82417 0.535833 3.03333 1.15917 2.40917C1.78333 1.78583 2.57417 1.50917 3.55083 1.3775C3.74528 1.35194 3.95056 1.33083 4.16667 1.31417V0.625C4.16667 0.459384 4.2324 0.300539 4.34943 0.183353C4.46646 0.0661663 4.62522 0.000220821 4.79083 0ZM3.71583 2.61667C2.87833 2.72917 2.395 2.94083 2.0425 3.29333C1.69 3.64583 1.47833 4.12917 1.36583 4.96667C1.34694 5.10833 1.33083 5.25806 1.3175 5.41583H16.5975C16.5842 5.25806 16.5681 5.10806 16.5492 4.96583C16.4367 4.12833 16.225 3.645 15.8725 3.2925C15.52 2.94 15.0367 2.72833 14.1983 2.61583C13.3425 2.50083 12.2133 2.49917 10.6242 2.49917H7.29083C5.70167 2.49917 4.57333 2.50167 3.71583 2.61667ZM1.24917 8.54167C1.24917 7.83 1.24917 7.21083 1.26 6.66667H16.655C16.6658 7.21083 16.6658 7.83 16.6658 8.54167V10.2083C16.6658 11.7975 16.6642 12.9267 16.5492 13.7833C16.4367 14.6208 16.225 15.1042 15.8725 15.4567C15.52 15.8092 15.0367 16.0208 14.1983 16.1333C13.3425 16.2483 12.2133 16.25 10.6242 16.25H7.29083C5.70167 16.25 4.57333 16.2483 3.71583 16.1333C2.87833 16.0208 2.395 15.8092 2.0425 15.4567C1.69 15.1042 1.47833 14.6208 1.36583 13.7825C1.25083 12.9267 1.24917 11.7975 1.24917 10.2083V8.54167Z"
                                            fill="#A6AAB5"></path>
                                    </svg>

                                    <div class="font-medium text-10px flex flex-col   text-[#A6AAB5]">
                                        <span>عضو منذ</span>
                                        <span>0</span>
                                    </div>
                                </div>

                                <div class="flex items-center gap-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.0625 2.5C3.31658 2.5 2.60121 2.79632 2.07376 3.32376C1.54632 3.85121 1.25 4.56658 1.25 5.3125V14.6875C1.25 15.4334 1.54632 16.1488 2.07376 16.6762C2.60121 17.2037 3.31658 17.5 4.0625 17.5H15.9375C16.6834 17.5 17.3988 17.2037 17.9262 16.6762C18.4537 16.1488 18.75 15.4334 18.75 14.6875V5.3125C18.75 4.56658 18.4537 3.85121 17.9262 3.32376C17.3988 2.79632 16.6834 2.5 15.9375 2.5H4.0625ZM2.5 5.3125C2.5 4.8981 2.66462 4.50067 2.95765 4.20765C3.25067 3.91462 3.6481 3.75 4.0625 3.75H15.9375C16.3519 3.75 16.7493 3.91462 17.0424 4.20765C17.3354 4.50067 17.5 4.8981 17.5 5.3125V14.6875C17.5 15.1019 17.3354 15.4993 17.0424 15.7924C16.7493 16.0854 16.3519 16.25 15.9375 16.25H4.0625C3.6481 16.25 3.25067 16.0854 2.95765 15.7924C2.66462 15.4993 2.5 15.1019 2.5 14.6875V5.3125ZM7.5 7.50063V12.5C7.50007 12.6079 7.52805 12.7139 7.58123 12.8077C7.6344 12.9015 7.71095 12.98 7.80344 13.0355C7.89593 13.091 8.0012 13.1216 8.10902 13.1244C8.21685 13.1271 8.32355 13.1019 8.41875 13.0513L13.105 10.5519C13.2048 10.4985 13.2883 10.4191 13.3465 10.322C13.4047 10.2249 13.4355 10.1138 13.4355 10.0006C13.4355 9.88743 13.4047 9.77635 13.3465 9.67927C13.2883 9.58218 13.2048 9.50272 13.105 9.44938L8.41937 6.94938C8.32411 6.89851 8.21728 6.87319 8.10932 6.87591C8.00135 6.87861 7.89593 6.90926 7.80333 6.96484C7.71074 7.02042 7.63412 7.09905 7.58096 7.19306C7.5278 7.28707 7.49991 7.39263 7.5 7.50063Z"
                                            fill="#A6AAB5"></path>
                                    </svg>


                                    <div class="font-medium text-10px flex flex-col   text-[#A6AAB5]">
                                        <span>عضو منذ</span>
                                        <span>0</span>
                                    </div>
                                </div>


                                <div class="flex items-center gap-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 13.5C15.519 13.5 13.5 15.5182 13.5 18C13.5 20.4818 15.519 22.5 18 22.5C20.481 22.5 22.5 20.4818 22.5 18C22.5 15.5182 20.481 13.5 18 13.5ZM18 21C16.3455 21 15 19.6545 15 18C15 16.3455 16.3455 15 18 15V18H21C21 19.6545 19.6545 21 18 21Z"
                                            fill="#A6AAB5"></path>
                                        <path
                                            d="M12 21H6.75V6H17.25V11.25H18.75V3C18.75 2.17275 18.0773 1.5 17.25 1.5H6.75C5.92275 1.5 5.25 2.17275 5.25 3V21C5.25 21.8272 5.92275 22.5 6.75 22.5H12V21ZM6.75 3H17.25V4.5H6.75V3Z"
                                            fill="#A6AAB5"></path>
                                    </svg>



                                    <div class="font-medium text-10px flex flex-col   text-[#A6AAB5]">
                                        <span>عضو منذ</span>
                                        <span>0</span>
                                    </div>
                                </div>

                                <div class="flex items-center gap-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.5 15C19.0304 15 19.5391 14.7893 19.9142 14.4142C20.2893 14.0391 20.5 13.5304 20.5 13V2C20.5 1.46957 20.2893 0.960859 19.9142 0.585786C19.5391 0.210714 19.0304 0 18.5 0H7.96C8.31 0.61 8.5 1.3 8.5 2H18.5V13H9.5V15M13.5 5V7H7.5V20H5.5V14H3.5V20H1.5V12H0V7C0 6.46957 0.210714 5.96086 0.585786 5.58579C0.960859 5.21071 1.46957 5 2 5H13.5ZM6.5 2C6.5 2.53043 6.28929 3.03914 5.91421 3.41421C5.53914 3.78929 5.03043 4 4.5 4C3.96957 4 3.46086 3.78929 3.08579 3.41421C2.71071 3.03914 2.5 2.53043 2.5 2C2.5 1.46957 2.71071 0.960859 3.08579 0.585786C3.46086 0.210714 3.96957 0 4.5 0C5.03043 0 5.53914 0.210714 5.91421 0.585786C6.28929 0.960859 6.5 1.46957 6.5 2Z"
                                            fill="#A6AAB5"></path>
                                    </svg>


                                    <div class="font-medium text-10px flex flex-col   text-[#A6AAB5]">
                                        <span>عضو منذ</span>
                                        <span>0</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a href="" class="btn btn-primary h-13 rounded-4px font-medium text-14px btn-block">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.08333 0.75C4.48083 0.75 0.75 4.48083 0.75 9.08333C0.75 13.6858 4.48083 17.4167 9.08333 17.4167C13.6858 17.4167 17.4167 13.6858 17.4167 9.08333C17.4167 4.48083 13.6858 0.75 9.08333 0.75Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M2.64258 14.3704C2.64258 14.3704 4.50008 11.9987 9.08341 11.9987C13.6667 11.9987 15.5251 14.3704 15.5251 14.3704M9.08341 9.08203C9.74645 9.08203 10.3823 8.81864 10.8512 8.3498C11.32 7.88096 11.5834 7.24507 11.5834 6.58203C11.5834 5.91899 11.32 5.28311 10.8512 4.81426C10.3823 4.34542 9.74645 4.08203 9.08341 4.08203C8.42037 4.08203 7.78449 4.34542 7.31564 4.81426C6.8468 5.28311 6.58341 5.91899 6.58341 6.58203C6.58341 7.24507 6.8468 7.88096 7.31564 8.3498C7.78449 8.81864 8.42037 9.08203 9.08341 9.08203Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>

                                    عرض الملف الشخصي

                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="course-faq" class="mb-16 scroll-mt-10">
                    <h3 class="font-medium text-36px text-primary mb-8">الاسئلة الشائعة</h3>
                    <div class="border border-[#CFCFCF]   px-8 py-11 rounded-8px">

                        <div class="accordion accordion-shadow">
                            <div class="accordion-item active" id="faq-1">
                                <button
                                    class="accordion-toggle inline-flex items-center gap-x-4 px-5 font-medium text-24px text-primary py-8 border-[#E7E7E7] text-start"
                                    aria-controls="faq-1-collapse" aria-expanded="true">
                                    <span
                                        class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                                    <span
                                        class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                                    1. هل يمكنني الوصول إلى محتوى الدورة بعد الانتهاء منها؟
                                </button>
                                <div id="faq-1-collapse"
                                    class="accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="faq-1" role="region">
                                    <div class="px-5 pb-4">
                                        <p class="text-base-content/80 font-normal">
                                            نعم، يمكنك الوصول إلى محتوى الدورة في أي وقت بعد الاشتراك وتظل متاحة في حسابك مدى الحياة.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" id="faq-2">
                                <button
                                    class="accordion-toggle inline-flex items-center gap-x-4 px-5 font-medium text-24px text-primary py-8 border-[#E7E7E7] text-start "
                                    aria-controls="faq-2-collapse" aria-expanded="false">
                                    <span
                                        class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                                    <span
                                        class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                                    2. هل توجد برامج مخصصة للشركات والجهات الحكومية؟
                                </button>
                                <div id="faq-2-collapse"
                                    class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="faq-2" role="region">
                                    <div class="px-5 pb-4">
                                        <p class="text-base-content/80 font-normal">
                                            نعم، نقدم برامج مخصصة تتناسب مع احتياجات الشركات والجهات الحكومية. يمكنك التواصل معنا لمزيد من التفاصيل.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" id="faq-3">
                                <button
                                    class="accordion-toggle inline-flex items-center gap-x-4 px-5 font-medium text-24px text-primary py-8 border-[#E7E7E7] text-start "
                                    aria-controls="faq-3-collapse" aria-expanded="false">
                                    <span
                                        class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                                    <span
                                        class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                                    3. هل يمكنني التواصل مع المدرب مباشرة؟
                                </button>
                                <div id="faq-3-collapse"
                                    class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="faq-3" role="region">
                                    <div class="px-5 pb-4">
                                        <p class="text-base-content/80 font-normal">
                                            نعم، يمكنك التواصل مع المدرب من خلال منصة الدورة وطرح الأسئلة في قسم النقاشات المخصص لذلك.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="course-rating" class="mb-16 scroll-mt-10">
                    <h3 class="font-medium text-36px text-primary mb-8">التقييم</h3>
                    <div class="border border-[#CFCFCF] flex justify-center items-center px-8 py-11 rounded-8px">

                        <div class="flex items-center gap-12">
                            <!-- Big box (Right in RTL) -->
                            <div class="w-[120px] h-[120px] bg-[#EAEAEA] rounded-8px shrink-0"></div>

                            <!-- Rows of Stars and Bars -->
                            <div class="flex flex-col gap-4">
                                @for($i = 0; $i < 4; $i++)
                                <div class="flex items-center gap-6">
                                    <!-- Stars (Middle) -->
                                    <div class="flex items-center gap-1.5">
                                        @for($j = 0; $j < 4; $j++)
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#FFAA00"/>
                                        </svg>
                                        @endfor
                                    </div>
                                    <!-- Bar (Left in RTL) -->
                                    <div class="h-2.5 w-[160px] bg-[#EAEAEA] rounded-full"></div>
                                </div>
                                @endfor
                            </div>
                        </div>

                    </div>
                </div>

                </div>
            </div>


    </section>



</main>
@endsection
@push('scripts')
@endpush
