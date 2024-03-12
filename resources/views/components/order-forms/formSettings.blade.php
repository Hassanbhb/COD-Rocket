<x-ui.card header="Form Settings" icon="cog-6-tooth">

    {{-- tabs --}}
    <div class="mb-4 mt-2 pl-1 bg-gray-50 dark:bg-gray-900 rounded-lg border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-nowrap overflow-scroll md:overflow-auto no-scrollbar -mb-px text-sm font-medium text-center"
            id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="text-primary hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-primary dark:border-purple-500"
            data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
            role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                    data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="false">General</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                    aria-controls="dashboard" aria-selected="false">Offer</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="shipping-tab" data-tabs-target="#shipping" type="button" role="tab"
                    aria-controls="shipping" aria-selected="false">Shipping</button>
            </li>
            {{-- <li role="presentation">
              <button
                  class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                  id="upsell-tab" data-tabs-target="#upsell" type="button" role="tab"
                  aria-controls="upsell" aria-selected="false">Upsell</button>
          </li> --}}
            <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="advanced-tab" data-tabs-target="#advanced" type="button" role="tab"
                    aria-controls="advanced" aria-selected="false">Advanced</button>
            </li>
        </ul>
    </div>

    {{-- tabs content --}}
    <div id="default-styled-tab-content">
        {{-- general tab --}}
        <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="styled-profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <div>
                <div>
                    <label for="form_name" class="font-medium text-gray-900 dark:text-gray-300">
                        Headline
                    </label>
                    <x-form.input id="form_name" placeholder="Name your form" size="lg"
                        class="preview-header-input mt-2" />
                </div>
                {{-- Button colors --}}
                <div class="mt-5">
                    <legend class="mb-2 font-medium text-gray-900 dark:text-gray-300">Color palette
                    </legend>
                    <div class="flex flex-wrap gap-5">
                        <label for="ColorBlack"
                            class="block size-8 cursor-pointer rounded-full bg-gray-600 shadow-sm has-[:checked]:ring-2 has-[:checked]:ring-black has-[:checked]:ring-offset-2">
                            <input type="radio" name="ColorOption" value="#4b5563" id="ColorBlack" class="sr-only"
                                checked />

                            <span class="sr-only"> Texas Tea </span>
                        </label>

                        <label for="ColorRed"
                            class="block size-8 cursor-pointer rounded-full bg-red-600 shadow-sm has-[:checked]:ring-2 has-[:checked]:ring-red-500 has-[:checked]:ring-offset-2">
                            <input type="radio" name="ColorOption" value="#dc2626" id="ColorRed" class="sr-only" />

                            <span class="sr-only">Fiesta Red</span>
                        </label>

                        <label for="ColorBlue"
                            class="block size-8 cursor-pointer rounded-full bg-blue-600 shadow-sm has-[:checked]:ring-2 has-[:checked]:ring-blue-500 has-[:checked]:ring-offset-2">
                            <input type="radio" name="ColorOption" value="#2563eb" id="ColorBlue" class="sr-only" />

                            <span class="sr-only">Cobalt Blue</span>
                        </label>

                        <label for="ColorGold"
                            class="block size-8 cursor-pointer rounded-full bg-amber-600 shadow-sm has-[:checked]:ring-2 has-[:checked]:ring-amber-500 has-[:checked]:ring-offset-2">
                            <input type="radio" name="ColorOption" value="#d97706" id="ColorGold" class="sr-only" />

                            <span class="sr-only">Goldtop</span>
                        </label>
                    </div>
                </div>
                {{-- Button text field --}}
                <div class="mt-5">
                    <label for="button_text" class="font-medium text-gray-900 dark:text-gray-300">
                        Button text
                    </label>
                    <x-form.input id="button_text" placeholder="Order NOW!" size="lg"
                        class="preview-button-input mt-2" />
                </div>
            </div>
            {{-- Table custom fields --}}
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption
                        class="pt-5 pb-2 text-base font-medium text-left rtl:text-right text-gray-900 dark:text-gray-300 bg-white dark:bg-gray-800">
                        Custom fields
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Field
                            </th>
                            <th scope="col" class="min-w-48 px-6 py-3">
                                Field Text
                            </th>
                            <th scope="col" class="px-3 py-3 text-center">
                                Is Required
                            </th>
                            <th scope="col" class="px-3 py-3 text-center">
                                Is enabled
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-300">
                                First Name
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <x-form.input id="first_name" placeholder="First Name" size="md" />
                                    <label for="first_name" class="sr-only">first name</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium  text-gray-900 whitespace-nowrap dark:text-gray-300">
                                Last name
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <x-form.input id="last-name" placeholder="Last Name" size="md" />
                                    <label for="last_name" class="sr-only">last name</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50    dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-300">
                                Phone
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <x-form.input id="phone" placeholder="phone" size="md" />
                                    <label for="Phone" class="sr-only">Phone</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-300">
                                Address
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <x-form.input id="Address" placeholder="Address" size="md" />
                                    <label for="Address" class="sr-only">Address</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-300">
                                Email
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <x-form.input id="email" placeholder="Email" size="md" />
                                    <label for="Email" class="sr-only">Email</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-300">
                                Gender
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <x-form.input id="gender" placeholder="Gender" size="md" />
                                    <label for="Gender" class="sr-only">Gender</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-300">
                                Note
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <x-form.input id="note" placeholder="Note" size="md" />
                                    <label for="Note" class="sr-only">Note</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded placeholder:text-sm focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary/50 dark:focus:ring-primary dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- offer tab --}}
        <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
            aria-labelledby="dashboard-tab">

            {{-- offer 1 --}}
            <div id="accordion-flush" data-accordion="collapse"
                data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full py-2 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-300 gap-3"
                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                        aria-controls="accordion-flush-body-1">
                        <span>Offer 1</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                {{-- Offer 1 content --}}
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">

                        <div>
                            <label for="select_product" class="font-medium text-gray-900 dark:text-gray-300">
                                Select product
                            </label>

                            <x-form.select id="select_product" size="lg" class="mt-3">
                                <option selected>Select</option>
                                <option value="US">Product 1</option>
                                <option value="CA">Product 2</option>
                                <option value="FR">Product 3</option>
                            </x-form.select>
                        </div>

                        <div class="mt-5">
                            <label for="offer_name" class="font-medium text-gray-900 dark:text-gray-300">
                                Offer name
                            </label>
                            <x-form.input id="offer_name" placeholder="Buy 2 and get 1 FREE" size="lg"
                                class="mt-2" />
                        </div>

                        <div class="mt-5 flex flex-col md:flex-row gap-8">
                            {{-- Qty --}}
                            <div class="flex-1">
                                <label for="quantity-input"
                                    class="block mb-2 font-medium text-gray-900 dark:text-gray-300">Choose
                                    quantity:</label>
                                <div class="relative flex items-center max-w-[8rem]">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="quantity-input"
                                        class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <input type="text" id="quantity-input" data-input-counter
                                        aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-primary focus:border-primary block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                        placeholder="0" required />
                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="quantity-input"
                                        class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            {{-- tags --}}
                            <div class="flex-1">
                                <label for="tags" class="font-medium text-gray-900 dark:text-gray-300">
                                    Tags
                                </label>
                                <x-form.input id="tags" placeholder="50% off" size="lg" class="mt-2" />
                            </div>
                            {{-- total price --}}
                            <div class="flex-1">
                                <label for="total_price" class="font-medium text-gray-900 dark:text-gray-300">
                                    Total price
                                </label>
                                <x-form.input id="total_price" placeholder="99" size="lg" class="mt-2" />
                            </div>
                        </div>

                        {{-- prices --}}
                        <div class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex gap-5 dark:text-gray-300">
                                <p class="font-medium">Unit Price</p>
                                <p>120 Dhs</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="flex py-4">
                <x-ui.button style="outline">
                    Add offer
                </x-ui.button>
            </div>
        </div>

        {{-- shipping tab --}}
        <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="shipping" role="tabpanel"
            aria-labelledby="shipping-tab">
            <div>
                <p class="font-medium text-gray-900 dark:text-gray-300 pb-2 mb-2 border-b">Shipping</p>
                <div class="flex gap-12">
                    <div class="flex-none">
                        <label class="flex flex-col cursor-pointer gap-4">
                            <input type="checkbox" value="" class="sr-only peer">
                            <span class="font-medium text-sm pt-0.5 text-gray-900 dark:text-gray-300">Status</span>
                            <div
                                class="relative w-11 h-6 mt-2.5 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                            </div>
                        </label>
                    </div>
                    <div class="flex-1">
                        <label for="select_product" class="font-medium text-sm text-gray-900 dark:text-gray-300">
                            Type
                        </label>

                        <x-form.select id="shipping_type" size="lg" class="mt-3">
                            <option selected>Select</option>
                            <option value="free">Free</option>
                            <option value="city">By City</option>
                            <option value="offer">By Offer</option>
                        </x-form.select>
                    </div>
                </div>

                <div class="shipping_options_section hidden">

                    <p class="font-medium text-gray-900 dark:text-gray-300 pb-2 pt-6 border-b">Shipping
                        Options
                    </p>
                    {{-- city shipping option --}}
                    <div class="city hidden">
                        <div class="flex gap-8 mt-3">
                            <div class="flex-1">
                                <label for="option_name" class="font-medium text-sm text-gray-900 dark:text-gray-300">
                                    City name
                                </label>
                                <x-form.input name="option_name" placeholder="Standard" size="lg"
                                    class="mt-2" />
                            </div>
                            <div class="flex-1">
                                <label for="shipping_price"
                                    class="font-medium text-sm text-gray-900 dark:text-gray-300">
                                    Shipping Price
                                </label>
                                <x-form.input name="shipping_price" placeholder="15" size="lg"
                                    class="mt-2" />
                            </div>
                        </div>
                        {{-- shipping button --}}
                        <div class="flex py-4">
                            <x-ui.button style="outline">
                                Add City
                            </x-ui.button>
                        </div>
                    </div>

                    {{-- offer shipping option --}}
                    <div class="offer hidden">
                        <div class="flex gap-8 mt-3">
                            <div class="flex-initial flex items-center">
                                <p>Offer 1</p>
                            </div>

                            <div class="flex-1 flex gap-4 items-center justify-end">
                                <label for="shipping_price"
                                    class="font-medium text-sm text-gray-900 dark:text-gray-300">
                                    Shipping Price
                                </label>
                                <x-form.input name="shipping_price" placeholder="15" size="lg"
                                    class="mt-2" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- upsell tab
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="upsell" role="tabpanel"
          aria-labelledby="upsell-tab">
          <div>
              <p class="font-medium text-gray-900 dark:text-gray-300 pb-2 mb-2 border-b">Upsell options
              </p>
              <div>

              </div>
          </div>
      </div> --}}

        {{-- Advanced options --}}
        <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="advanced" role="tabpanel"
            aria-labelledby="advanced-tab">
            <div>
                <p class="font-medium text-gray-900 dark:text-gray-300 pb-2 mb-2 border-b">Advanced options
                </p>
                <div class="flex flex-col md:flex-row gap-5">
                    <div class="flex-1">
                        <label for="staff" class="font-medium text-sm text-gray-900 dark:text-gray-300">Assign to
                            staff</label>
                        <x-form.select id="staff" size="lg" class="mt-3">
                            <option selected>Select</option>
                            <option>Staff 1</option>
                            <option>Staff 2</option>
                        </x-form.select>
                    </div>
                    <div class="flex-1">
                        <label for="staff" class="font-medium text-sm text-gray-900 dark:text-gray-300">Assign to
                            freelancer</label>
                        <x-form.select id="staff" size="lg" class="mt-3">
                            <option selected>Select</option>
                            <option>freelancer 1</option>
                            <option>freelancer 2</option>
                        </x-form.select>
                    </div>
                    <div class="flex-1">
                        <label for="staff"
                            class="font-medium text-sm text-gray-900 dark:text-gray-300">Deliverer</label>
                        <x-form.select id="staff" size="lg" class="mt-3">
                            <option selected>Select</option>
                            <option>Deliverer 1</option>
                            <option>Deliverer 2</option>
                        </x-form.select>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-5 mt-5">
                    <div class="flex-1">
                        <label for="staff"
                            class="font-medium text-sm text-gray-900 dark:text-gray-300">Confirmation
                            status</label>
                        <x-form.select id="staff" size="lg" class="mt-3">
                            <option selected>Select</option>
                            <option>Pending</option>
                            <option>Confirmed</option>
                            <option>No answer</option>
                        </x-form.select>
                    </div>
                    <div class="flex-1">
                        <label for="staff" class="font-medium text-sm text-gray-900 dark:text-gray-300">Payment
                            status</label>
                        <x-form.select id="staff" size="lg" class="mt-3">
                            <option selected>Select</option>
                            <option>Unpaid</option>
                            <option>Paid</option>
                        </x-form.select>
                    </div>
                </div>
                <div class="mt-5">
                    <label for="staff" class="font-medium text-sm text-gray-900 dark:text-gray-300">
                        Note
                    </label>
                    <x-form.textarea name="note" class="mt-3" />
                </div>
            </div>
        </div>
    </div>
</x-ui.card>
