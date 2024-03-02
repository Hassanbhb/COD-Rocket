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
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-200">Search</label>
                        <div class="relative">
                            <input type="search" id="search"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary focus:border-primary/80 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary dark:focus:border-primary"
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
                    <div class="cursor-pointer" data-drawer-target="order_sideOver" data-drawer-show="order_sideOver"
                        data-drawer-placement="right">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3">
                            <div class="flex flex-col gap-y-3 mt-4">
                                <p class="flex gap-1 items-start text-sm font-bold">
                                    <x-ui.icon name="phone" type="o" class="w-4 text-primary" />
                                    <span class="font-normal dark:text-gray-100 flex items-center">+212 61 23 45
                                        37</span>
                                </p>
                                <p class="flex gap-1 items-start row-span-2 text-sm font-bold">
                                    <x-ui.icon name="calendar-days" type="o" class="w-4 text-primary" />
                                    <span class="font-normal dark:text-gray-100">3 Days ago (Mars 23/02)</span>
                                </p>
                            </div>
                            <div class="md:mt-4">
                                <p class="flex gap-1 items-start text-sm font-bold">
                                    <x-ui.icon name="map-pin" type="o" class="min-w-5 text-primary" />
                                    <span class="font-normal dark:text-gray-100">
                                        Dakhla, Rue foulan, Agadir-ida-ou-tnan
                                    </span>
                                </p>
                            </div>
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
                        <div class="bg-primary/50 mt-5 text-xs text-white p-1 w-full text-center rounded-lg">
                            <p>View details</p>
                        </div>
                    </div>
                </div>

                {{-- sideover --}}
                <x-dialog.sideover id="order_sideOver" title="Order N°: 3431" size="md:max-w-2xl overflow-y-auto"
                    footer="confirm">
                    <div class="flex flex-col gap-5">

                        {{-- merchant card --}}
                        <div
                            class="p-3 bg-white rounded-lg border border-gray-200 dark:border-gray-800 dark:bg-gray-800">
                            <div class="flex gap-3">
                                <img src="https://ui-avatars.com/api/?name=sthammed&background=792e88&color=fff&rounded=true"
                                    alt="img" class="w-10">
                                <div class="flex justify-between w-full">
                                    <div class="dark:text-gray-200">
                                        <p class="text-base font-[500]">Merchant name</p>
                                        <p class="text-xs">@merchantname</p>
                                    </div>
                                    <div class="flex justify-center items-center gap-2">
                                        <a href="#" class="w-10 bg-gray-50 dark:bg-gray-700 p-2 rounded-lg">
                                            <x-ui.icon name="chat-bubble-left-right" type="o"
                                                class="w-3.5 text-gray-400 dark:text-gray-200" />
                                        </a>
                                        <a href="tel: 061 32 45 56 22"
                                            class="w-10 bg-gray-50 dark:bg-gray-700 p-2 rounded-lg">
                                            <x-ui.icon name="phone" type="o"
                                                class="w-3.5 text-gray-400 dark:text-gray-200" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-3 border border-gray-200 dark:border-gray-800 dark:bg-gray-800 bg-white rounded-lg">
                            <div class="pb-3 flex gap-3 dark:text-gray-200 border-b border-gray-100">
                                <x-ui.icon name="user" type="o"
                                    class="w-4 text-primary" />
                                Hassan ben haj bouih
                            </div>
                            <div class="pt-3 flex flex-col gap-3 text-sm">
                                <div class="flex gap-2">
                                    <x-ui.icon name="phone" type="o"
                                        class="w-4 text-primary" />
                                    <p class="dark:text-gray-200">+212 61 23 45 37 55</p>
                                </div>
                                <div class="flex gap-2">
                                    <x-ui.icon name="calendar-days" type="o"
                                        class="w-4 text-primary" />
                                    <p class="dark:text-gray-200">3 Days ago (Mars 23/02)</p>
                                </div>
                                <div class="flex items-center justify-between md:justify-normal gap-3">
                                    <p class="dark:text-gray-200">Dakhla, Rue foulan, Agadir-ida-ou-tnan</p>
                                    <a href="#"
                                        class="max-w-10 h-10 bg-gray-50 dark:bg-gray-700 grow flex items-center justify-center rounded-lg">
                                        <x-ui.icon name="map-pin" type="o"
                                            class="w-10 text-primary dark:text-gray-200" />
                                    </a>
                                </div>
                                {{-- button group --}}
                                <div class="mt-1 flex gap-3">
                                    <button
                                        class="p- flex-1 items-center justify-center flex gap-2 border border-gray-200 dark:border-gray-400 rounded-lg">
                                        <x-ui.icon name="paper-airplane" type="o"
                                            class="w-3 text-primary dark:text-gray-200" />
                                        <p class="dark:text-gray-200">SMS</p>
                                    </button>
                                    <button
                                        class="p-3 flex-1 flex gap-2 justify-center items-center border border-gray-200 dark:border-gray-400 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="text-green-500 dark:text-green-200 w-5 h-full " width="1em"
                                            height="1em" viewBox="0 0 256 256">
                                            <path fill="currentColor"
                                                d="m186.68 146.63l-32-16a6 6 0 0 0-6 .38L133 141.46A42.49 42.49 0 0 1 114.54 123L125 107.33a6 6 0 0 0 .38-6l-16-32A6 6 0 0 0 104 66a38 38 0 0 0-38 38a86.1 86.1 0 0 0 86 86a38 38 0 0 0 38-38a6 6 0 0 0-3.32-5.37M152 178a74.09 74.09 0 0 1-74-74a26 26 0 0 1 22.42-25.75l12.66 25.32l-10.39 15.58a6 6 0 0 0-.54 5.63a54.43 54.43 0 0 0 29.07 29.07a6 6 0 0 0 5.63-.54l15.58-10.39l25.32 12.66A26 26 0 0 1 152 178M128 26a102 102 0 0 0-89.65 150.69l-11.62 34.87a14 14 0 0 0 17.71 17.71l34.87-11.62A102 102 0 1 0 128 26m0 192a90 90 0 0 1-45.06-12.08a6.09 6.09 0 0 0-3-.81a6.2 6.2 0 0 0-1.9.31l-37.39 12.46a2 2 0 0 1-2.53-2.53L50.58 178a6 6 0 0 0-.5-4.91A90 90 0 1 1 128 218" />
                                        </svg>
                                        <p class="dark:text-gray-200">WhatsApp</p>
                                    </button>
                                    <button
                                        class="p-3 flex-1 items-center justify-center flex gap-2 border border-gray-200 dark:border-gray-400 rounded-lg">
                                        <x-ui.icon name="phone" type="o"
                                            class="w-3 text-primary dark:text-gray-200" />
                                        <p class="dark:text-gray-200">Call</p>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- note area --}}
                        <div>
                            <div id="accordion-collapse" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-2.5 pl-5 pr-3 bg-white dark:bg-gray-600 border border-gray-200 rounded-lg dark:border-gray-700 dark:text-gray-200 gap-3"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                        <span class="text-gray-800 dark:text-gray-100 text-sm">Add Note</span>
                                        <x-ui.icon name="plus" type="o" class="w-3" />
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-1">
                                    <div
                                        class="p-5 bg-white border border-t-0 rounded-b-lg border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                        <label for="message"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Your
                                            Note</label>
                                        <textarea id="message" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary dark:focus:border-primary"
                                            placeholder="Write your note here..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- status dropdown --}}
                        <div
                            class="p-3 border border-gray-200 dark:border-gray-800 dark:bg-gray-800 bg-white rounded-lg">
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Confirmation
                                status</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full px-5 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary dark:focus:border-primary">
                                <option selected>Select a Confirmation status</option>
                                <option value="US">Status 1</option>
                                <option value="CA">Status 2</option>
                                <option value="FR">Status 3</option>
                            </select>
                        </div>

                        {{-- status & price cards --}}
                        <div
                            class="p-3 border border-gray-200 dark:border-gray-800 dark:bg-gray-800 bg-white rounded-lg dark:text-gray-200">
                            <div class="flex gap-5">
                                <div class="p-5 bg-gray-50 dark:bg-gray-700 flex-1 rounded-lg">
                                    <p class="text-blue-500 dark:text-blue-200">Processed</p>
                                    <span class="text-xs">Status</span>
                                </div>
                                <div class="p-5 bg-gray-50 dark:bg-gray-700 flex-1 rounded-lg">
                                    <p class="font-bold">1200 Dhs</p>
                                    <span class="text-xs">Total price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-dialog.sideover>
            </div>

            {{-- card 2 --}}
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
                                #4325
                            </button>

                        </div>
                        <div class="flex justify-between items-center gap-5 border-t border-b py-2">
                            <p class="flex items-center gap-2">
                                <x-ui.icon name="user" type="o" class="w-4 text-primary" />
                                Oualid benza
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
                    <div class="cursor-pointer" data-drawer-target="order_sideOver" data-drawer-show="order_sideOver"
                        data-drawer-placement="right">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3">
                            <div class="flex flex-col gap-y-3 mt-4">
                                <p class="flex gap-1 items-start text-sm font-bold">
                                    <x-ui.icon name="phone" type="o" class="w-4 text-primary" />
                                    <span class="font-normal dark:text-gray-100 flex items-center">+212 61 45 45
                                        37</span>
                                </p>
                                <p class="flex gap-1 items-start row-span-2 text-sm font-bold">
                                    <x-ui.icon name="calendar-days" type="o" class="w-4 text-primary" />
                                    <span class="font-normal dark:text-gray-100">4 Days ago (Mars 22/02)</span>
                                </p>
                            </div>
                            <div class="md:mt-4">
                                <p class="flex gap-1 items-start text-sm font-bold">
                                    <x-ui.icon name="map-pin" type="o" class="min-w-5 text-primary" />
                                    <span class="font-normal dark:text-gray-100">
                                        walfa, Rue 3alan, Inzegan
                                    </span>
                                </p>
                            </div>
                        </div>

                        <dl class="mt-6 flex justify-between">
                            <div class="flex flex-col">
                                <dt class="font-bold text-blue-600">Processed</dt>
                                <dd class="text-xs text-gray-500 dark:text-gray-100">Status</dd>
                            </div>

                            <div class="flex flex-col">
                                <dt class="font-medium text-gray-600 dark:text-gray-100">1200.00 Dhs</dt>
                                <dd class="text-xs text-gray-500 dark:text-gray-100">Price total</dd>
                            </div>
                        </dl>
                        <div class="bg-primary/50 mt-5 text-xs text-white p-1 w-full text-center rounded-lg">
                            <p>View details</p>
                        </div>
                    </div>
                </div>
                <x-dialog.sideover id="order_sideOver" title="Order N°: 3431" size="md:max-w-4xl">
                    <x-ui.card as="div">
                        <h1>Order Details</h1>

                    </x-ui.card>
                </x-dialog.sideover>
            </div>
        </div>
    </div>
</div>
