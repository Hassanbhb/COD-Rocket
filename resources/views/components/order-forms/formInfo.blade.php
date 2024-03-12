<x-ui.card header="Form Information" icon="information-circle">
  {{-- form name and language --}}
  <div class="flex flex-col md:flex-row gap-3 md:gap-12">
      {{-- form name --}}
      <div class="flex-auto">
          <label for="form_name" class="font-medium text-gray-900 dark:text-gray-300">
              Form name
          </label>
          <x-form.input id="form_name" placeholder="Name your form" size="lg" class="mt-2" />
      </div>

      {{-- language --}}
      <div class="w-full md:w-48">
          <label for="language" class="font-medium text-gray-900 dark:text-gray-300">
              Language
          </label>
          <x-form.select id="language" size="lg" class="mt-2">
              <option value="en">English</option>
              <option value="ar">العربية</option>
          </x-form.select>
      </div>

  </div>
  <div class="flex gap-3 md:gap-12">
      {{-- status toggle --}}
      <label class="flex flex-col mt-4 cursor-pointer gap-4">
          <input type="checkbox" value="" class="sr-only peer">
          <span class="font-medium text-gray-900 dark:text-gray-300">Status</span>
          <div
              class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-purple-300 dark:peer-focus:ring-purple-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
          </div>
      </label>
      {{-- templates --}}
      <div class="mt-4 flex-auto">
          <label for="templates" class="font-medium text-gray-900 dark:text-gray-300">
              Templates
          </label>
          <x-form.select id="templates" size="lg" class="mt-2">
              <option value="en">Template 1</option>
              <option value="ar">Template 2</option>
          </x-form.select>
      </div>
  </div>
</x-ui.card>