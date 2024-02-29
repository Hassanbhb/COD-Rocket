@section('title', __('Name'))

@section('breadcrumps')
    <x-ui.breadcrumps.item icon="credit-card">{{ __('Name') }}</x-ui.breadcrumps.item>
@endsection

<div class="lg:mx-auto xl:w-3/4">
    <div class="p-6 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700">
        <div class="text-lg font-bold mb-4 flex flex-col">
            <p class="mb-2">
                Orders: <span class="font-normal">12</span>
            </p>
            {{-- filter section --}}
            <div>
                <form class="flex gap-3 justify-between">
                    <div class="w-20 flex rounded-lg bg-gray-50 dark:bg-gray-700">
                        <button class="w-full h-full flex items-center justify-center">
                            <x-ui.icon name="arrow-path" type="o" class="w-12" />
                        </button>
                    </div>
                    <div class="grow">
                        <label for="search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <input type="search" id="search"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary focus:border-primary/80 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Search" required />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary/50 dark:hover:bg-primary dark:focus:ring-primary">
                                <x-ui.icon name="magnifying-glass" type="o" class="w-4" />
                            </button>
                        </div>
                    </div>
                    <div class="w-20 flex rounded-lg bg-gray-50 dark:bg-gray-700">
                        <button class="w-full h-full flex items-center justify-center">
                            <x-ui.icon name="funnel" type="o" class="w-12" />
                        </button>
                    </div>
                </form>
            </div>
        </div>
        {{-- orders cards --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            {{-- card 1 --}}
            <div
                class="relative block overflow-hidden border border-gray-100 dark:border-gray-800 dark:bg-gray-800 rounded-lg border-t-2">
                <div class="h-1 bg-primary"></div>
                <div class="p-5">
                    <div class="flex flex-col gap-3">
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2 items-center">
                                <img src="https://ui-avatars.com/api/?name=sthammed&background=792e88&color=fff&rounded=true"
                                    alt="img" class="w-10">
                                <p class="flex flex-col text-sm">
                                    Merchant name
                                    <span class="text-xs text-gray-400">@MerchantUsername</span>
                                </p>
                            </div>

                            <button class="flex gap-1 bg-gray-50 dark:bg-gray-700 p-2 rounded-lg font-bold">
                                <x-ui.icon name="document-duplicate" type="o" class="w-4" />
                                #3431
                            </button>

                        </div>
                        <div class="flex justify-between items-center gap-5 border-t border-b py-2">
                            <p class="flex items-center gap-2">
                                <x-ui.icon name="user" type="o" class="w-4 text-primary" />
                                Hassan ben haj
                            </p>
                            <div class="flex gap-2">
                                <div class="bg-gray-50 dark:bg-gray-700 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-green-500 w-6 h-full"
                                        width="1em" height="1em" viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="m186.68 146.63l-32-16a6 6 0 0 0-6 .38L133 141.46A42.49 42.49 0 0 1 114.54 123L125 107.33a6 6 0 0 0 .38-6l-16-32A6 6 0 0 0 104 66a38 38 0 0 0-38 38a86.1 86.1 0 0 0 86 86a38 38 0 0 0 38-38a6 6 0 0 0-3.32-5.37M152 178a74.09 74.09 0 0 1-74-74a26 26 0 0 1 22.42-25.75l12.66 25.32l-10.39 15.58a6 6 0 0 0-.54 5.63a54.43 54.43 0 0 0 29.07 29.07a6 6 0 0 0 5.63-.54l15.58-10.39l25.32 12.66A26 26 0 0 1 152 178M128 26a102 102 0 0 0-89.65 150.69l-11.62 34.87a14 14 0 0 0 17.71 17.71l34.87-11.62A102 102 0 1 0 128 26m0 192a90 90 0 0 1-45.06-12.08a6.09 6.09 0 0 0-3-.81a6.2 6.2 0 0 0-1.9.31l-37.39 12.46a2 2 0 0 1-2.53-2.53L50.58 178a6 6 0 0 0-.5-4.91A90 90 0 1 1 128 218" />
                                    </svg>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-2">
                                    <x-ui.icon name="phone" type="o" class="text-blue-500 w-6" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 mt-4">
                        <p class="flex gap-1 text-sm font-bold">
                            <x-ui.icon name="phone" type="o" class="w-4 text-primary" />
                            <span class="font-normal dark:text-gray-100">+212 6 23 45 37</span>
                        </p>
                        <p class="flex gap-1 text-sm font-bold">
                            <x-ui.icon name="map-pin" type="o" class="w-4 text-primary" />
                            <span class="font-normal dark:text-gray-100">Dakhla, Rue foulan</span>
                        </p>
                        <p class="flex gap-1 text-sm font-bold">
                            <x-ui.icon name="building-office" type="o" class="w-4 text-primary" />
                            <span class="font-normal dark:text-gray-100">Agadir-ida-ou-tnan</span>
                        </p>
                        <p class="flex gap-1 text-sm font-bold">
                            <x-ui.icon name="calendar-days" type="o" class="w-4 text-primary" />
                            <span class="font-normal dark:text-gray-100">3 Days ago (Mars 23/02)</span>
                        </p>
                    </div>

                    <dl class="mt-6 flex justify-between">
                        <div class="flex flex-col">
                            <dt class="font-bold text-blue-600">Processed</dt>
                            <dd class="text-xs text-gray-500 dark:text-gray-100">Status</dd>
                        </div>

                        <div class="flex flex-col">
                            <dt class="font-medium text-gray-600 dark:text-gray-100">600.00 Dhs</dt>
                            <dd class="text-xs text-gray-500 dark:text-gray-100">Price total</dd>
                        </div>
                    </dl>
                </div>
                <div class="bg-primary/50">
                    <a href="#" class="block text-xs text-white p-1 w-full text-center">View Details</a>
                </div>
            </div>
            <div
                class="relative block overflow-hidden border border-gray-100 dark:border-gray-800 dark:bg-gray-800 rounded-lg border-t-2">
                <div class="h-1 bg-primary"></div>
                <div class="p-5">
                    <div class="flex flex-col gap-3">
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2 items-center">
                                <img src="https://ui-avatars.com/api/?name=sthammed&background=792e88&color=fff&rounded=true"
                                    alt="img" class="w-10">
                                <p class="flex flex-col text-sm">
                                    Merchant name
                                    <span class="text-xs text-gray-400">@MerchantUsername</span>
                                </p>
                            </div>

                            <button class="flex gap-1 bg-gray-50 dark:bg-gray-700 p-2 rounded-lg">
                                <x-ui.icon name="document-duplicate" type="o" class="w-4" />
                                #3431
                            </button>

                        </div>
                        <div class="flex justify-between items-center gap-5 border-t border-b py-2">
                            <p class="flex items-center gap-2">
                                <x-ui.icon name="user" type="o" class="w-4 text-primary" />
                                Hassan ben haj
                            </p>
                            <div class="flex gap-2">
                                <div class="bg-gray-50 dark:bg-gray-700 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-green-500 dark:text-gray-50 w-6 h-full" width="1em"
                                        height="1em" viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="m186.68 146.63l-32-16a6 6 0 0 0-6 .38L133 141.46A42.49 42.49 0 0 1 114.54 123L125 107.33a6 6 0 0 0 .38-6l-16-32A6 6 0 0 0 104 66a38 38 0 0 0-38 38a86.1 86.1 0 0 0 86 86a38 38 0 0 0 38-38a6 6 0 0 0-3.32-5.37M152 178a74.09 74.09 0 0 1-74-74a26 26 0 0 1 22.42-25.75l12.66 25.32l-10.39 15.58a6 6 0 0 0-.54 5.63a54.43 54.43 0 0 0 29.07 29.07a6 6 0 0 0 5.63-.54l15.58-10.39l25.32 12.66A26 26 0 0 1 152 178M128 26a102 102 0 0 0-89.65 150.69l-11.62 34.87a14 14 0 0 0 17.71 17.71l34.87-11.62A102 102 0 1 0 128 26m0 192a90 90 0 0 1-45.06-12.08a6.09 6.09 0 0 0-3-.81a6.2 6.2 0 0 0-1.9.31l-37.39 12.46a2 2 0 0 1-2.53-2.53L50.58 178a6 6 0 0 0-.5-4.91A90 90 0 1 1 128 218" />
                                    </svg>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-2">
                                    <x-ui.icon name="phone" type="o"
                                        class="text-blue-500 dark:text-gray-50 w-6" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 mt-4">
                        <p class="flex gap-1 text-sm font-bold">
                            <x-ui.icon name="phone" type="o" class="w-4 text-primary" />
                            <span class="font-normal dark:text-gray-100">+212 6 23 45 37</span>
                        </p>
                        <p class="flex gap-1 text-sm font-bold">
                            <x-ui.icon name="map-pin" type="o" class="w-4 text-primary" />
                            <span class="font-normal dark:text-gray-100">Dakhla, Rue foulan</span>
                        </p>
                        <p class="flex gap-1 text-sm font-bold">
                            <x-ui.icon name="building-office" type="o" class="w-4 text-primary" />
                            <span class="font-normal dark:text-gray-100">Agadir-ida-ou-tnan</span>
                        </p>
                        <p class="flex gap-1 text-sm font-bold">
                            <x-ui.icon name="calendar-days" type="o" class="w-4 text-primary" />
                            <span class="font-normal dark:text-gray-100">3 Days ago (Mars 23/02)</span>
                        </p>
                    </div>

                    <dl class="mt-6 flex justify-between">
                        <div class="flex flex-col">
                            <dt class="font-bold text-blue-600">Processed</dt>
                            <dd class="text-xs text-gray-500 dark:text-gray-100">Status</dd>
                        </div>

                        <div class="flex flex-col">
                            <dt class="font-medium text-gray-600 dark:text-gray-100">600.00 Dhs</dt>
                            <dd class="text-xs text-gray-500 dark:text-gray-100">Price total</dd>
                        </div>
                    </dl>
                </div>
                <div class="bg-primary/50">
                    <a href="#" class="block text-xs text-white p-1 w-full text-center">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
