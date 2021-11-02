<x-layout banner="My Blog">
    <main class="">
        @if ($articles->count())
            <div class="container">
                <div class="inner-wrapper d-flex flex-wrap justify-content-between py-5">
                    <div class="row gx-4">
                        <x-articles-grid :articles="$articles"/>
                    </div>
                </div>
            </div>
        @else
            <p style="text-align: center;" class="mt-5">No articles yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
