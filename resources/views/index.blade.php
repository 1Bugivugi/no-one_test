<x-layout banner="My Blog">
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($articles->count())
            <x-articles-grid :articles="$articles"/>
        @else
            <p style="text-align: center">No articles yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
