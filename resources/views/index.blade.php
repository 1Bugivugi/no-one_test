<x-layout banner="My Blog">

    <x-_header />

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($articles->count())
            <x-articles-grid :articles="$articles"/>

            {{$articles->links()}}
        @else
            <p style="text-align: center">No articles yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
