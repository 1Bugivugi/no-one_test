<x-layout banner="All articles">
    <main class="pt-4">
        @if ($articles->count())
            <div class="container">
                <div class="inner-wrapper">
                    <x-sidebar :tags="$tags"/>
                    <div class="grid-wrapper">
                        <div class="row gx-5">
                            <x-articles-grid :articles="$articles"/>
                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p style="text-align: center">No articles yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
