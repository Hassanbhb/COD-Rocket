@section('title', __('Order Forms'))

@section('breadcrumps')
    <x-ui.breadcrumps.item icon="credit-card">{{ __('Order Forms') }}</x-ui.breadcrumps.item>
@endsection

<x-ui.card>
    <div>
        <x-ui.button sideover="create_form">
            Create form
        </x-ui.button>
    </div>
    <x-dialog.sideover id="create_form" title="Create form" size="md:max-w-7xl" footer="save form"
        class="flex flex-col lg:flex-row gap-6">

        <div class="flex flex-col gap-6 w-full lg:w-1/2">

            {{-- form settings card --}}
            <x-order-forms.formInfo />

            {{-- tabs card --}}
            <x-order-forms.formSettings />
        </div>

        {{-- preview card --}}
        <x-ui.card header="Form Preview" icon="squares-plus" class=" lg:!w-1/2 relative">
            {{-- template 1 --}}
            <x-order-forms.template1 />
        </x-ui.card>
    </x-dialog.sideover>
    <script src="{{ asset('scripts/shipping_type.js') }}"></script>
    <script src="{{ asset('scripts/preview.js') }}"></script>
</x-ui.card>
