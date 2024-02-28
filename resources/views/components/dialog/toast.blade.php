<div x-cloak class="fixed inset-x-4 bottom-5 md:bottom-9 z-[999] md:left-1/2 md:-translate-x-1/2 flex items-center md:w-full md:max-w-sm p-4 space-x-4 rtl:space-x-reverse text-gray-400 border rounded-lg shadow space-x bg-gray-900 border-gray-700" role="alert" x-data="toast" x-show="message">
	<x-ui.icon name="check-circle" class="!w-8 rounded-md -m-1.5 text-green-500"/>
	<div class="ps-4 w-full text-sm font-normal border-s border-gray-700">
		<span x-text="message"></span>
	</div>

	<div class="flex items-center bg-red-500 ms-auto">
		<button x-on:click="hide" type="button" class="-m-1.5 bg-gray-900 text-gray-400 hover:text-gray-200 rounded-lg p-1.5 hover:bg-gray-800 inline-flex items-center justify-center h-8 w-8"  aria-label="Close">
			<x-ui.icon name="x-mark" />
		</button>
    </div>
</div>