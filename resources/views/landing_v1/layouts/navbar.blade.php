<nav class="navbar rounded-box flex w-full items-center justify-between gap-2 shadow-[0px_4px_34.5px_-3px_#0000000D]">
    <div class="navbar-start max-md:w-1/4">
        <a class="link link-neutral text-xl font-semibold no-underline" href="#">
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
        <div class="flex items-center gap-4">
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

            <a class="btn max-md:btn-square btn-secondary font-medium text-17px h-12" href="#">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.73802 15.476V13.7565H13.7565V1.71956H7.73802V0H13.7565C14.2294 0 14.6343 0.168517 14.9714 0.505551C15.3084 0.842585 15.4766 1.24725 15.476 1.71956V13.7565C15.476 14.2294 15.3078 14.6343 14.9714 14.9714C14.6349 15.3084 14.2299 15.4766 13.7565 15.476H7.73802ZM6.01846 12.0369L4.83626 10.7902L7.0287 8.5978H0V6.87824H7.0287L4.83626 4.6858L6.01846 3.43912L10.3174 7.73802L6.01846 12.0369Z"
                        fill="white" />
                </svg>
                <span class="max-lg:hidden font-medium text-17px">تسجيل الدخول</span>
            </a>
        </div>
    </div>
</nav>
