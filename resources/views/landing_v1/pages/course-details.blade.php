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
                                    <a href="" class="font-medium text-20px text-white">
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
                            <a href="" class="btn btn-primary btn-block h-15 rounded-5px font-semibold text-20px mb-3">
                                اشترك الان </a>
                            <a href=""
                                class="btn btn-outline-primary btn-block h-15 rounded-5px font-semibold text-20px">
                                اضف للسلة
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section-gap course_details_page">
        <div class="container ">
            <nav class="tabs tabs-bordered gap-6 border-b-[#B4B4B4] mb-25" aria-label="Tabs" role="tablist"
                aria-orientation="horizontal">
                <button type="button" class="tab active-tab:tab-active active font-medium text-24px text-[#B4B4B4] pb-7"
                    id="tabs-basic-item-1" data-tab="#tabs-basic-1" aria-controls="tabs-basic-1" role="tab"
                    aria-selected="true">
                    عن الدورة
                </button>
                <button type="button" class="tab active-tab:tab-active font-medium text-24px text-[#B4B4B4] pb-7"
                    id="tabs-basic-item-2" data-tab="#tabs-basic-2" aria-controls="tabs-basic-2" role="tab"
                    aria-selected="false">
                    المحتوى
                </button>
                <button type="button" class="tab active-tab:tab-active font-medium text-24px text-[#B4B4B4] pb-7"
                    id="tabs-basic-item-3" data-tab="#tabs-basic-3" aria-controls="tabs-basic-3" role="tab"
                    aria-selected="false">
                    التعليقات
                </button>


                <button type="button" class="tab active-tab:tab-active font-medium text-24px text-[#B4B4B4] pb-7    "
                    id="tabs-basic-item-4" data-tab="#tabs-basic-4" aria-controls="tabs-basic-4" role="tab"
                    aria-selected="false">
                    المراجعات
                </button>
            </nav>

            <div class="mt-3">
                <div id="tabs-basic-1" role="tabpanel" aria-labelledby="tabs-basic-item-1">
                    <h3>عن الدورة</h3>
                    <div>
                        <p>
                            تستهدف هذه الدورة تقديم رؤية شاملة حول كيفية بناء استشارات ذات قيمة مضافة عالية، مع التركيز على لغة الثقة والرصانة في التعامل مع الجهات الحكومية والخاصة .

                        </p>
                        <h4>ماذا ستتعلم؟</h4>
                        <ul>
                            <li>إتقان منهجيات التحليل الاستشاري الحديثة.</li>
                            <li>بناء نماذج أعمال مرنة تتوافق مع المعايير المؤسسية.</li>
                            <li>أدوات عملية لزيادة معدل التحويل وتفاعل العملاء.</li>
                        </ul>
                    </div>
                </div>
                <div id="tabs-basic-2" class="hidden" role="tabpanel" aria-labelledby="tabs-basic-item-2">

                </div>
                <div id="tabs-basic-3" class="hidden" role="tabpanel" aria-labelledby="tabs-basic-item-3">

                </div>
                 <div id="tabs-basic-4" class="hidden" role="tabpanel" aria-labelledby="tabs-basic-item-4">

                </div>
            </div>


    </section>



</main>
@endsection
@push('scripts')
@endpush
