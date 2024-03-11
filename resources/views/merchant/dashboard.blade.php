@section('title', __('Dashboard'))

<div>
    <div class="tabs_vid_section lg:mx-auto xl:w-3/4">
        {{-- dash tabs --}}
        <x-ui.tabs.verticalTabsGroup />
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
    <div class="hidden dash_data">
        {{-- dashboard top row --}}
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-5">
            <div class="col-span-1 lg:col-span-4">
                {{-- numbers cards --}}
                <x-ui.card
                    class="h-fit overflow-scroll [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]"
                    slot-class="!p-4 min-w-max grid grid-cols-3 content-center">
                    <div class="flex gap-3 pr-4 bg-white ">
                        <div class="flex items-center justify-center p-2 bg-fuchsia-100 rounded-lg h-fit w-fit">
                            <x-ui.icon name="credit-card" class="!w-9 text-primary self-start" />
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="font-medium text-xs text-primary">Weekly Sales</p>
                            <p class="font-bold text-lg text-primary">7.000 Dhs</p>
                        </div>
                    </div>
                    <div class="flex gap-3 px-4 border-x border-gray-200 bg-white ">
                        <div class="flex items-center justify-center p-2 bg-fuchsia-100 rounded-lg h-fit w-fit">
                            <x-ui.icon name="calendar" class="!w-9 text-primary self-start" />
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="font-medium text-xs text-primary">Week Orders</p>
                            <p class="font-bold text-lg text-primary">12</p>
                        </div>
                    </div>
                    <div class="flex gap-3 px-4 bg-white ">
                        <div class="flex items-center justify-center p-2 bg-fuchsia-100 rounded-lg h-fit w-fit">
                            <x-ui.icon name="calendar-days" class="!w-9 text-primary self-start" />
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="font-medium text-xs text-primary">Month Sales</p>
                            <p class="font-bold text-lg text-primary">45</p>
                        </div>
                    </div>

                </x-ui.card>
                <x-charts.lineChart class="col-span-4 mt-5" />
            </div>
            <div class="col-span-1 lg:col-span-2">
                {{-- low stock warning --}}
                <x-ui.card class="col-span-2 w-full" header="Products low availability in stock"
                    headerClass="text-white bg-primary !py-3" icon="exclamation-triangle">
                    <div class="flex">
                        <p class="grow">Product 1</p>
                        <div class="flex gap-1">
                            <x-ui.badge data-tooltip-target="tooltip-min" data-tooltip-placement="left" style="warning"
                                class="!text-sm">20</x-ui.badge>
                            <div id="tooltip-min" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                minimum quantity before alert
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <x-ui.badge data-tooltip-target="tooltip-curr" data-tooltip-placement="left" style="error"
                                class="!text-sm">15</x-ui.badge>
                            <div id="tooltip-curr" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                current quantity in warehouse
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                </x-ui.card>

                <div class="mt-5">
                    <x-charts.radialChart />
                </div>

                {{-- Invite card --}}
                <div class="flex flex-col items-end mt-5">
                    <x-ui.card class="max-w-lg text-center">
                        <div>
                            <h2 class="font-bold mb-2">INVITE & EARN 3 MONTHS FEE-FREE</h2>
                            <p class="mt-2 mb-5 text-sm">
                                Earn 3 months free for every 3 invited users who make at least one integration, the'll
                                get a
                                fee-free for 3 months
                            </p>

                            <div class="mb-2 flex gap-2 items-center justify-center">
                                <p class="font-medium mt-1">YOUR REFERRAL CODE</p>
                                <x-ui.clipboard />
                            </div>
                        </div>

                        <div>
                            <x-ui.button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="text-xl mt-2">
                                INVITE PARTNERS
                            </x-ui.button>
                            <p class="text-sm mt-1">Active referals: <span class="font-medium">0 user</span></p>
                        </div>

                    </x-ui.card>
                </div>
            </div>
        </div>
    </div>

    {{-- invite modal --}}
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center max-w-xl mx-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        INVITE & EARN 3 MONTHS FEE-FREE
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Earn 3 months free for every 3 invited users who make at least one integration, the'll get a
                        fee-free for 3 motnhs
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <x-ui.button data-modal-hide="default-modal" style="outline">
                        Decline
                    </x-ui.button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('scripts/dashboard.js') }}"></script>
</div>
