<main class="page flex-1 p-5 bg-white dark:bg-gray-800 rounded-md">
    @if (isset($isBlog) && $isBlog)
        {!! $content[0] !!}
        @if ($posts && $posts->count())
            @include("frontend.common.posts", ["posts" => $posts])
        @endif

        @if (isset($content[1]))
            {!! $content[1] !!}
        @endif
    @else
        <div class="text-gray-800 dark:text-gray-300">
            {!! $page->content !!}
        </div>
    @endif
</main>
