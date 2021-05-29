<x-layout>
    @include('posts._header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts='$posts' />
            {{$posts->links()}}
        @else
            <p>There is not any post yet. Please check later again. </p>
        @endif
    </main>
</x-layout>
    
