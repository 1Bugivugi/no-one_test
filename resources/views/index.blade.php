<x-layout banner="My Blog">
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($articles->count())
            <div class="container">
                <div class="inner-wrapper d-flex flex-wrap justify-content-between py-5">
                    <div class="row gx-4">
                        <x-articles-grid :articles="$articles"/>
                    </div>
                </div>
            </div>
        @else
            <p style="text-align: center">No articles yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
