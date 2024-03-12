<div class="preview-form w-full md:w-[500px] mx-auto sticky top-0 p-5 border-2 border-gray-400 rounded-lg">
  <div class="flex flex-col gap-3">
      <div class="pb-7 mb-3 border-b border-gray-200">
          <ul class="grid w-full gap-6">
              <li class="relative">
                  <input type="radio" id="offer-1" name="offer" value="offer-1"
                      class="hidden peer" required />
                  <label for="offer-1"
                      class="inline-flex items-center justify-between w-full p-5 md:p-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-gray-500 peer-checked:bg-gray-100 peer-checked:border-gray-400 peer-checked:text-gray-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                      <div class="flex gap-5 items-center">
                          <img src="https://images.unsplash.com/photo-1592789705501-f9ae4278a9c9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                              alt="product" class="object-cover w-20 h-14 rounded-lg">
                          <div>
                              <div class="w-full font-medium text-lg">Buy 2 get 1 for Free</div>
                          </div>
                      </div>
                      <div class="w-fit h-fit ms-3 rtl:rotate-180 font-bold" aria-hidden="true">340 Dhs
                      </div>
                  </label>
                  <span
                      class="absolute right-5 -top-2 bg-gray-200 px-5 py-1 text-sm rounded-full font-medium">save
                      25%
                  </span>
              </li>
              <li class="relative">
                  <input type="radio" id="offer-2" name="offer" value="offer-2"
                      class="hidden peer" required />
                  <label for="offer-2"
                      class="inline-flex items-center justify-between w-full p-5 md:p-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-gray-500 peer-checked:bg-gray-100 peer-checked:border-gray-400 peer-checked:text-gray-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                      <div class="flex gap-5 items-center">
                          <img src="https://images.unsplash.com/photo-1592789705501-f9ae4278a9c9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                              alt="product" class="object-cover w-20 h-14 rounded-lg">
                          <div>
                              <div class="w-full font-medium text-lg">Buy 1</div>
                          </div>
                      </div>
                      <div class="w-fit h-fit ms-3 rtl:rotate-180 font-bold" aria-hidden="true">240 Dhs
                      </div>
                  </label>
                  <span
                      class="absolute right-5 -top-2 bg-gray-200 px-5 py-1 text-sm rounded-full font-medium">save
                      0%
                  </span>
              </li>
          </ul>
      </div>
      <p class="preview-header text-xl font-bold mb-3 text-center">Enter your shipping addresst</p>
      <div class="pb-7 border-b border-gray-200">
          <div class="px-5 border-2 rounded-lg border-gray-400">
              <div class="mt-3">
                  <label for="First name" class="font-medium">
                      First name
                  </label>
                  {{-- <x-form.input type="text" size="lg" prefixIcon="user" name="First name"
                      class="preview-input mt-3 border-gray-600" /> --}}
                  <div class="relative mb-6">
                      <div
                          class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                          </svg>
                      </div>
                      <input type="text" id="first-name" name="first name"
                          class="preview-input mt-3 bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full ps-12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-600 dark:focus:border-gray-600"
                          placeholder="Youness">
                  </div>
              </div>
              <div class="mt-3">
                  <label for="Last name" class="font-medium">
                      phone
                  </label>
                  {{-- <x-form.input type="text" name="Last name"
                      class="preview-input mt-3 border-gray-600" /> --}}
                  <div class="relative mb-6">
                      <div
                          class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                          </svg>

                      </div>
                      <input type="text" id="first-name" name="first name"
                          class="preview-input mt-3 bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full ps-12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-600 dark:focus:border-gray-600"
                          placeholder="0976435678">
                  </div>
              </div>
              <div class="mt-3">
                  <label for="phone" class="font-medium">
                      Address
                  </label>
                  {{-- <x-form.input type="number" name="phone" class="preview-input mt-3 border-gray-600" /> --}}
                  <div class="relative mb-6">
                      <div
                          class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                          </svg>
                      </div>
                      <input type="text" id="first-name" name="first name"
                          class="preview-input mt-3 bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full ps-12 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-600 dark:focus:border-gray-600"
                          placeholder="Inzegan alhouda">
                  </div>
              </div>
          </div>
      </div>
      {{-- shipping --}}
      <div class="mt-4 pb-7 border-b border-gray-200">
          <div class="flex flex-col gap-3">
              <div
                  class="flex items-center justify-between px-4 border border-gray-200 rounded-lg dark:border-gray-700">
                  <div class="flex-1 py-3">
                      <input id="bordered-radio-1" type="radio" value="" name="bordered-radio"
                          class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 dark:focus:ring-gray-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="bordered-radio-1"
                          class="w-full py-4 ms-2 text-gray-900 dark:text-gray-300">Free
                          Shipping</label>
                  </div>
                  <p class="flex-none font-medium">Free</p>
              </div>
              <div class="flex items-center px-4 border border-gray-200 rounded-lg dark:border-gray-700">
                  <div class="flex-1 py-3">
                      <input checked id="bordered-radio-2" type="radio" value=""
                          name="bordered-radio"
                          class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 dark:focus:ring-gray-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="bordered-radio-2"
                          class="w-full py-4 ms-2 text-gray-900 dark:text-gray-300">Express</label>
                  </div>
                  <p class="flex-none font-medium">30 Dhs</p>
              </div>
          </div>
      </div>
      {{-- prices --}}
      <div class="flex flex-col gap-2">
          <div class="py-1 px-4 flex justify-between">
              <p>Subtotal</p>
              <p>240 Dhs</p>
          </div>
          <div class="px-4 flex justify-between">
              <p>Shipping</p>
              <p>Free</p>
          </div>
          <div class="bg-gray-100 rounded-b-lg py-2 px-4 flex justify-between">
              <p class="font-bold">Total price</p>
              <p class="font-bold">240 Dhs</p>
          </div>
      </div>
      <div>
          <button
              class="preview-input preview_button w-full flex-none font-medium  bg-gray-600 text-gray-100 flex items-center justify-center gap-3 rounded-lg text-sm px-3 md:px-4 py-2.5 disabled:cursor-not-allowed focus:outline-none">
              Order Now
          </button>
      </div>
  </div>
</div>