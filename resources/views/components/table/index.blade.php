@props(['headers'])

@php $hasHeader = isset($actions) || isset($search) @endphp

<section class="space-y-6">
    @if ($hasHeader)
        <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0">
            @isset($actions)
                <div class="actions flex gap-1">{{ $actions }}</div>
            @endisset

            @isset($search) 
                <div class="search flex gap-1">{{ $search }}</div>
            @endisset
        </div>
    @endif

    <section class="overflow-y-hidden">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @isset($selectAll)
                        <th scope="col" class="p-4">
                            {{ $selectAll }}
                        </th>
                    @endisset

                    @foreach ($headers as $header)
                        <th scope="col" class="px-6 py-3 whitespace-nowrap tracking-wide">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                {{ $slot }}
            </tbody>

            @isset($tfooter)
                <tfooter>{{ $tfooter }}</tfooter>
            @endisset
        </table>
    </section>

    @isset($pagination)
        <div class="pt-6 px-6 -mx-6 border-t border-gray-300 dark:border-gray-700">
            {{ $pagination }}
        </div>
    @endisset
</section>