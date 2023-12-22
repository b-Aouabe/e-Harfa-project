<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0 relative">
    <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">
            <svg class="w-12 h-12" fill="#4f46e5" id="Layer_1" data-name="Layer 1"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path class="cls-1" d="M4.64648,10.64648,7,8.293l2,2,1.64648-1.64649.707.707L9,11.707l-2-2L5.35352,11.35352ZM14,2V14H2V2ZM4,7H7V4H4Zm8,1H4v4h8V8Zm0-4H8V7h4Z"/>
            </svg>

            <span class="mx-2 text-2xl font-semibold text-white">Dashboard</span>
        </div>
    </div>

    <nav class="mt-10">
        <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="/">
            <svg class="w-6 h-6" fill="#dcdcdc" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                <path d="M833.935 1063.327c28.913 170.315 64.038 348.198 83.464 384.79 27.557 51.84 92.047 71.944 144 44.387 51.84-27.558 71.717-92.273 44.16-144.113-19.426-36.593-146.937-165.46-271.624-285.064Zm-43.821-196.405c61.553 56.923 370.899 344.81 415.285 428.612 56.696 106.842 15.811 239.887-91.144 296.697-32.64 17.28-67.765 25.411-102.325 25.411-78.72 0-154.955-42.353-194.371-116.555-44.386-83.802-109.102-501.346-121.638-584.245-3.501-23.717 8.245-47.21 29.365-58.277 21.346-11.294 47.096-8.02 64.828 8.357ZM960.045 281.99c529.355 0 960 430.757 960 960 0 77.139-8.922 153.148-26.654 225.882l-10.39 43.144h-524.386v-112.942h434.258c9.487-50.71 14.231-103.115 14.231-156.084 0-467.125-380.047-847.06-847.059-847.06-467.125 0-847.059 379.935-847.059 847.06 0 52.97 4.744 105.374 14.118 156.084h487.454v112.942H36.977l-10.39-43.144C8.966 1395.137.044 1319.128.044 1241.99c0-529.243 430.645-960 960-960Zm542.547 390.686 79.85 79.85-112.716 112.715-79.85-79.85 112.716-112.715Zm-1085.184 0L530.123 785.39l-79.85 79.85L337.56 752.524l79.849-79.85Zm599.063-201.363v159.473H903.529V471.312h112.942Z" fill-rule="evenodd"/>
            </svg>

            <span class="mx-3">Dashboard</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="/ui-elements">
            <svg class="w-6 h-6" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.6" cx="15" cy="6" r="3" fill="#fff"/>
                <ellipse opacity="0.4" cx="16" cy="17" rx="5" ry="3" fill="#fff"/>
                <circle cx="9.00098" cy="6" r="4" fill="#fff"/>
                <ellipse cx="9.00098" cy="17.001" rx="7" ry="4" fill="#fff"/>
            </svg>

            <span class="mx-3">Users</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="/tables">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 12V4C20 2.89543 19.1046 2 18 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V18.5" stroke="#dcdcdc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13 2V14L16.8182 11L20 14V5" stroke="#dcdcdc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <span class="mx-3">Courses</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="/forms">
            <svg class="w-6 h-6" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="m0 0h32v32h-32z"/>
                    <path  fill="#dcdcdc" d="m19 1.73205081 7.8564065 4.53589838c1.8564064 1.07179677 3 3.05255889 3 5.19615241v9.0717968c0 2.1435935-1.1435936 4.1243556-3 5.1961524l-7.8564065 4.5358984c-1.8564065 1.0717968-4.1435935 1.0717968-6 0l-7.85640646-4.5358984c-1.85640646-1.0717968-3-3.0525589-3-5.1961524v-9.0717968c0-2.14359352 1.14359354-4.12435564 3-5.19615241l7.85640646-4.53589838c1.8564065-1.07179677 4.1435935-1.07179677 6 0zm4.0203166 9.82532719c-.259282-.4876385-.8647807-.672758-1.3524192-.4134761l-5.6794125 3.0187491-5.6793299-3.0187491c-.4876385-.2592819-1.09313718-.0741624-1.35241917.4134761-.25928198.4876385-.07416246 1.0931371.41347603 1.3524191l5.61827304 2.9868539.0000413 6.7689186c0 .5522848.4477153 1 1 1 .5522848 0 1-.4477152 1-1l-.0000413-6.7689186 5.6183556-2.9868539c.4876385-.259282.6727581-.8647806.4134761-1.3524191z"/>
                </g>
            </svg>

            <span class="mx-3">Products</span>
        </a>

{{--        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="/forms">--}}
{{--            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />--}}
{{--            </svg>--}}

{{--            <span class="mx-3">Forms</span>--}}
{{--        </a>--}}


    </nav>
    <div class="flex items-center px-6 py-2 mt-4 text-gray-500 absolute bottom-2 left-2" href="/forms">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296" stroke="#dcdcdc" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M13.9868 5L12.9934 8.70743M11.8432 13L10.0132 19.8297" stroke="#dcdcdc" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296" stroke="#dcdcdc" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        <span class="mx-3 text-xs">Made by <a class="font-semibold text-blue-400 hover:text-blue-600" href="https://www.linkedin.com/in/aouabe-boubker-87a076225/" target="_blank">Aouabe Boubker</a> </span>
    </div>
</div>
