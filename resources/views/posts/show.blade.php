<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 py-6">
        <div>
            <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
            <span class="text-sm text-gray-600">
                {{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}
            </span>
        </div>

        <div class="prose mt-6">
            {!! $post->html !!}
        </div>

        <div class="mt-12">
            <h2 id="comments" class="text-2xl font-semibold">Comments</h2>

            <ul class="divide-y mt-4">
                @empty($comments)
                    <li class="py-4 px-2">
                        <p> Kein Kommentar vorhanden.</p>
                    </li>
                @else
                    @foreach($comments as $comment)
                        <li class="py-4 px-2">
                            <p>{{ $comment->body }}</p>
                            <span class="text-sm text-gray-600">
                                {{ $comment->created_at->diffForHumans() }} by {{ $comment->user->name }}
                            </span>
                        </li>
                    @endforeach
                @endempty
            </ul>

            <div class="mt-2">
                {{ $comments->fragment('comments')->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
