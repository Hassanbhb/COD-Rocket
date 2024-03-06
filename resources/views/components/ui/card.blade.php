@props(['header', 'icon', 'as' => 'div'])

<{{ $as }}
    {{ $attributes->merge([
        'class' =>
            'flex flex-col w-full bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 divide-y divide-gray-300 dark:divide-gray-700',
    ]) }}>
    @isset($header)
        <header class="px-6 py-5 flex gap-3 font-medium dark:text-white">
            @isset($icon)
                <x-ui.icon :name="$icon" type="o" />
            @endisset
            {{ $header }}
        </header>
    @endisset

    <section @class([
        'flex-1 p-6',
        'pt-4' => isset($header),
        'pb-4' => isset($footer),
        $attributes->get('slot-class'),
    ])>
        {{ $slot }}
    </section>

    @isset($footer)
        <footer class="px-6 py-5 empty:hidden dark:text-white">{{ $footer }}</footer>
    @endisset
    </{{ $as }}>
