@section('title', __('Dashboard'))

<div>
    <div class="hidden lg:mx-auto xl:w-3/4">
        {{-- dash tabs --}}
        <div class="dash-tabs p-6 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="flex justify-between mb-5 font-bold text-2xl">
                <h1>You're ahead of a good start</h1>
                <button class="dash-close-btn text-sm cursor-pointer">
                    •••
                </button>
            </div>

            <div class="grid gap-3 grid-cols-1 lg:grid-cols-4">
                {{-- tabs section --}}
                <ul class="md:col-span-1 space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0"
                    id="default-tab" data-tabs-toggle="#default-tab-content"
                    data-tabs-active-classes="text-white hover:text-white bg-primary active dark:bg-primary"
                    data-tabs-inactive-classes="hover:text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white"
                    role="tablist">
                    <li>
                        <button class="flex px-4 py-3 rounded-lg w-full" title="Add product" id="product-tab"
                            data-tabs-target="#product" type="button" role="tab" aria-controls="product"
                            aria-selected="false">
                            <x-ui.icon name="archive-box" type="o" class="mr-1" />
                            Add product
                        </button>
                    </li>
                    <li>
                        <button class="flex px-4 py-3 rounded-lg w-full" title="connect your store" id="connect-tab"
                            data-tabs-target="#connect" type="button" role="tab" aria-controls="connect"
                            aria-selected="false">
                            <x-ui.icon name="link" type="o" class="mr-1" />
                            Connect your store
                        </button>
                    </li>
                    <li>
                        <button class="flex px-4 py-3 rounded-lg w-full" title="Business information" id="info-tab"
                            data-tabs-target="#info" type="button" role="tab" aria-controls="info"
                            aria-selected="false">
                            <x-ui.icon name="building-office" type="o" class="mr-1" />
                            Business information
                        </button>
                    </li>
                    <li>
                        <button class="inline-flex items-center px-4 py-3 w-full rounded-lg" id="deliverer-tab"
                            data-tabs-target="#deliverer" type="button" role="tab" aria-controls="deliverer"
                            aria-selected="false">
                            <x-ui.icon name="truck" type="o" class="mr-1" />
                            Add deliverer
                        </button>
                    </li>
                    <li>
                        <button class="inline-flex items-center px-4 py-3 w-full rounded-lg" id="order-tab"
                            data-tabs-target="#order" type="button" role="tab" aria-controls="order"
                            aria-selected="false">
                            <x-ui.icon name="shopping-cart" type="o" class="mr-1" />
                            Add Order
                        </button>
                    </li>
                </ul>

                {{-- tabs content section --}}
                <div id="default-tab-content" class="md:col-span-3">
                    <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full"
                        id="product" role="tabpanel" aria-labelledby="product-tab">
                        <div class="mx-auto w-3/4">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Add Your first product</h3>
                            <div class="mb-4 flex gap-5 items-center justify-center">
                                <p class="mb-2">Create your first simple or variable product, with cost and sell price
                                    so
                                    you
                                    will
                                    have a full vision about your profit.</p>
                                <svg class="w-40 hidden md:block" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                    y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill: url(#SVGID_1_);
                                        }

                                        .st1 {
                                            fill: url(#SVGID_2_);
                                        }

                                        .st2 {
                                            fill: url(#SVGID_3_);
                                        }

                                        .st3 {
                                            fill: url(#SVGID_4_);
                                        }

                                        .st4 {
                                            fill: url(#SVGID_5_);
                                        }

                                        .st5 {
                                            fill: url(#SVGID_6_);
                                        }

                                        .st6 {
                                            fill: url(#SVGID_7_);
                                        }

                                        .st7 {
                                            fill: url(#SVGID_8_);
                                        }

                                        .st8 {
                                            fill: url(#SVGID_9_);
                                        }
                                    </style>
                                    <title>Commercial delivery</title>
                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256"
                                        y1="16" x2="256" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st0"
                                        d="M472.9,224H448c-2.9-10.6-12.5-17.9-23.4-18H398v-65c0.1-2.5-1.2-4.8-3.3-6.1L207.1,26.6c-2.2-1.3-4.8-1.3-7,0  L12.5,134.9c-2.2,1.3-3.5,3.6-3.5,6.1v216.7c0,2.5,1.3,4.8,3.5,6.1l187.7,108.3c1.1,0.6,2.3,0.9,3.5,0.9c1.3,0,2.5-0.3,3.6-0.9  l98.7-57v41.2c0,16.4,13.2,29.7,29.6,29.7c0.1,0,0.2,0,0.3,0h137c16.5,0.2,29.9-13.1,30.1-29.5c0-0.1,0-0.1,0-0.2V254.2  C503,237.6,489.5,224.1,472.9,224z M435,230.8c0,5.6-4.5,10.2-10.2,10.2l0,0h-40.7c-5.6,0-10.2-4.5-10.2-10.2l0,0v-0.7  c0-5.6,4.5-10.2,10.2-10.2c0,0,0,0,0,0h40.7c5.6,0,10.2,4.5,10.2,10.2V230.8z M203.7,241.2L122,194.1L295.6,93.8l81.7,47.2  L203.7,241.2z M203.7,40.7l78,45L108,186l-78-45L203.7,40.7z M23,153.1l174,100.3v200.5L23,353.6V153.1z M211,453.9V253.3l173-100.3  V206h0.2c-10.9,0.1-20.5,7.4-23.4,18h-24.9c-16.6,0.1-30,13.6-29.9,30.2v144.8L211,453.9z M489,456.3c0,8.7-7.1,15.8-15.9,15.7  c-0.1,0-0.1,0-0.2,0h-137c-8.6,0.1-15.7-6.7-15.9-15.4c0-0.1,0-0.2,0-0.4V254.2c-0.1-8.8,7-16.1,15.9-16.2c0,0,0,0,0,0h25.2  c3.1,10.2,12.5,17.1,23.1,17h40.4c10.6,0.1,20.1-6.8,23.1-17h25.2c8.9,0.1,16.1,7.3,16.1,16.2V456.3z" />
                                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="360.4999"
                                        y1="16" x2="360.4999" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st1"
                                        d="M343.9,325h7.3c3.9,0,7-3.1,7-7s-3.1-7-7-7H351v-19h19.3c0.9,2.9,3.6,4.8,6.7,4.7c3.9,0,7-3.1,7-7V285  c0-3.9-3.2-7-7.1-7h-33c-3.9,0-7,3.2-6.9,7c0,0,0,0,0,0v33C337,321.8,340.1,325,343.9,325C343.9,325,343.9,325,343.9,325z" />
                                    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="360.5"
                                        y1="16" x2="360.5" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st2"
                                        d="M384,349c0-3.9-3.1-7-7-7h-33c-3.9,0-7,3.1-7,7v33c0,3.9,3.1,7,7,7h33c3.9,0,7-3.1,7-7V349z M351,356h19v19h-19  V356z" />
                                    <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="360.4998"
                                        y1="16" x2="360.4998" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st3"
                                        d="M351.3,439H351v-19h18.9c0.1,3.9,3.3,7,7.2,6.9c3.8-0.1,6.8-3.1,6.9-6.9v-6.7c0-3.9-3.1-7.1-7.1-7.3h-33  c-3.9,0.1-7,3.4-6.9,7.3v33c0,3.7,3,6.8,6.7,6.8c0.1,0,0.1,0,0.2,0h7.3c3.9,0,7-3.1,7-7S355.1,439,351.3,439L351.3,439z" />
                                    <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="379.6745"
                                        y1="16" x2="379.6745" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st4"
                                        d="M393,286.6l-20.5,20.5l-6.2-6.2c-2.7-2.7-7.2-2.7-9.9,0s-2.7,7.2,0,9.9l11.2,11.2c2.7,2.7,7.2,2.7,9.9,0  c0,0,0,0,0,0l25.5-25.5c2.7-2.7,2.7-7.2,0-9.9S395.8,283.9,393,286.6L393,286.6z" />
                                    <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="379.6745"
                                        y1="16" x2="379.6745" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st5"
                                        d="M393,415.8l-20.5,20.5l-6.2-6.2c-2.7-2.7-7.2-2.7-9.9,0s-2.7,7.2,0,9.9l11.2,11.2c2.7,2.7,7.2,2.7,9.9,0  c0,0,0,0,0,0l25.5-25.5c2.7-2.7,2.7-7.2,0-9.9S395.8,413.1,393,415.8L393,415.8z" />
                                    <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="442.874"
                                        y1="16" x2="442.874" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st6"
                                        d="M464.9,295h-44c-3.9,0-7,3.1-7,7s3.1,7,7,7h44c3.9,0,7-3.1,7-7S468.7,295,464.9,295z" />
                                    <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="442.874"
                                        y1="16" x2="442.874" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st7"
                                        d="M464.9,359h-44c-3.9,0-7,3.1-7,7s3.1,7,7,7h44c3.9,0,7-3.1,7-7S468.7,359,464.9,359z" />
                                    <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="442.874"
                                        y1="16" x2="442.874" y2="492.424"
                                        gradientTransform="matrix(1 0 0 -1 0 512)">
                                        <stop offset="0" style="stop-color:#C045CE" />
                                        <stop offset="1" style="stop-color:#82278A" />
                                    </linearGradient>
                                    <path class="st8"
                                        d="M464.9,423h-44c-3.9,0-7,3.1-7,7s3.1,7,7,7h44c3.9,0,7-3.1,7-7S468.7,423,464.9,423z" />
                                </svg>
                            </div>
                            <a href="#" class="py-2 px-3 text-white text-sm bg-primary rounded-lg">Add
                                Product</a>
                            <div class="flex gap-2 mt-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-primary"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                                <p class="text-xs">Learn more about: </p>
                                <a href="#" class="text-primary text-xs">Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-5 md:p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full"
                        id="connect" role="tabpanel" aria-labelledby="connect-tab">
                        <div class="mx-auto w-3/4">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Integrate your Woo,
                                Shopify or
                                YouCan store</h3>
                            <div class="mb-4 flex gap-5 items-center justify-center">
                                <p class="mb-2">Syncronise your orders automatically from your store, you can link
                                    your
                                    Wordpress, Shopify or YouCan store, COD Rocket will import products and orders in
                                    real
                                    time.
                                </p>
                                <img src="../images/integration.svg" alt="">
                            </div>
                            <a href="#" class="py-2 px-3 text-white text-sm bg-primary rounded-lg">Connect your
                                store</a>
                            <div class="flex gap-1 mt-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-primary"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                                <p class="text-xs">Learn more about: </p>
                                <a href="#" class="text-primary text-xs">Sales channels</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full"
                        id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="mx-auto w-3/4">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Add your business
                                information
                            </h3>
                            <div class="mb-4 flex gap-5 items-center justify-center">
                                <p class="mb-2">Brand your business, using your business informations when you print
                                    label for your orders, so your customers will remember your brand.
                                </p>
                                <svg class="w-40 fill-primary hidden md:block" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M384 48c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H384zM96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM240 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H208zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z" />
                                </svg>
                            </div>
                            <a href="#" class="py-2 px-3 text-white text-sm bg-primary rounded-lg">Add
                                Deliverer</a>
                        </div>
                    </div>
                    <div class="hidden p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full"
                        id="deliverer" role="tabpanel" aria-labelledby="deliverer-tab">
                        <div class="mx-auto w-3/4">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Add your delivery company
                                or
                                your delivery men.</h3>
                            <div class="mb-4 flex gap-5 items-center justify-center">
                                <p class="mb-2">You have a delivery company, or delivery man?add them to your
                                    partners
                                    list so you can send orders and control stock in one click.</p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 fill-primary hidden md:block"
                                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M0 32C0 14.3 14.3 0 32 0h72.9c27.5 0 52 17.6 60.7 43.8L257.7 320c30.1 .5 56.8 14.9 74 37l202.1-67.4c16.8-5.6 34.9 3.5 40.5 20.2s-3.5 34.9-20.2 40.5L352 417.7c-.9 52.2-43.5 94.3-96 94.3c-53 0-96-43-96-96c0-30.8 14.5-58.2 37-75.8L104.9 64H32C14.3 64 0 49.7 0 32zM244.8 134.5c-5.5-16.8 3.7-34.9 20.5-40.3L311 79.4l19.8 60.9 60.9-19.8L371.8 59.6l45.7-14.8c16.8-5.5 34.9 3.7 40.3 20.5l49.4 152.2c5.5 16.8-3.7 34.9-20.5 40.3L334.5 307.2c-16.8 5.5-34.9-3.7-40.3-20.5L244.8 134.5z" />
                                </svg>
                            </div>
                            <a href="#" class="py-2 px-3 text-white text-sm bg-primary rounded-lg">Add
                                Product</a>
                            <div class="flex gap-2 mt-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-primary"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                                <p class="text-xs">Learn more about: </p>
                                <a href="#" class="text-primary text-xs">Deliverers</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full"
                        id="order" role="tabpanel" aria-labelledby="order-tab">
                        <div class="mx-auto w-3/4">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Add your fist order
                                manually
                            </h3>
                            <div class="mb-4 flex gap-5 items-center justify-center">
                                <p class="mb-2">Creating an order is easy, all you need is the customer's phone
                                    number,
                                    then you can add other information when you have it.</p>
                                <img src="" alt="">
                            </div>
                            <a href="#" class="py-2 px-3 text-white text-sm bg-primary rounded-lg">Add Order</a>
                            <div class="flex gap-2 mt-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-primary"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                                <p class="text-xs">Learn more about: </p>
                                <a href="#" class="text-primary text-xs">Orders</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- video section --}}
        <div
            class="dash-video-card p-6 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 mt-5">
            <div class="flex justify-between">
                <button class="py-3 px-4 bg-primary text-white text-sm rounded-lg">
                    Quick overview about COD Rocket
                </button>

                <button class="dash-video-close-btn w-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-primary"
                        viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
            </div>
            <iframe class="mt-4 w-full h-96"
                src="https://www.youtube.com/embed/MSqxbeLDCwU?si=DEoHnQE_SFvLFqJi&amp;controls=0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </iframe>
        </div>

    </div>
    <div>
        {{-- dashboard top row --}}
        <div class="flex gap-5">
            {{-- numbers cards --}}
            <div class="py-5 pr-11 pl-5 flex gap-6 justify-between border-2 border-primary bg-white rounded-lg">
                <x-ui.icon name="credit-card" class="!w-9 text-primary self-start" />
                <div class="flex flex-col gap-2">
                    <p class="font-medium text-xl text-primary">Weekly Sales</p>
                    <p class="font-bold text-2xl text-primary">7.000 Dhs</p>
                </div>
            </div>
            <div class="py-5 pr-11 pl-5 flex gap-6 justify-between border-2 border-primary bg-white rounded-lg">
                <x-ui.icon name="calendar" class="!w-9 text-primary self-start" />
                <div class="flex flex-col gap-2">
                    <p class="font-medium text-xl text-primary">Week Orders</p>
                    <p class="font-bold text-2xl text-primary">12</p>
                </div>
            </div>
            <div class="py-5 pr-11 pl-5 flex gap-6 justify-between border-2 border-primary bg-white rounded-lg">
                <x-ui.icon name="calendar-days" class="!w-9 text-primary self-start" />
                <div class="flex flex-col gap-2">
                    <p class="font-medium text-xl text-primary">Month Sales</p>
                    <p class="font-bold text-2xl text-primary">45</p>
                </div>
            </div>
            {{-- low stock warning --}}
            <div class="flex flex-grow flex-col border-2 border-primary bg-white rounded-lg">
                <div class="flex gap-4 px-5 py-2 items-center bg-primary w-full">
                    <x-ui.icon name="exclamation-triangle" class="!w-8 text-gray-100" />
                    <p class="font-bold text-gray-100">Products low availability in stock</p>
                </div>
                <div class="flex p-5">
                    <p class="grow">Product 1</p>
                    <x-ui.badge style="warning" class="!text-sm">20</x-ui.badge>
                </div>
            </div>
        </div>
        <div class="flex gap-5 mt-5">
            <x-charts.lineChart class="flex-1" />
            <x-charts.radialChart class="flex-none" />
        </div>
    </div>
    <script src="{{ asset('scripts/dashboard.js') }}"></script>
</div>
