<x-app-layout>
    <div class="max-w-5xl mx-auto py-6 px-2">
        <ul class="divide-y">
                @empty($posts)
                    @foreach($posts as $post)
                        <li class="py-4 px-2">
                            <a href="{{ route('posts.show', $post) }}" class="text-xl font-semibold block">{{ $post->title }}</a>
                            <span class="text-sm text-gray-600">
                                {{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}
                            </span>
                        </li>
                    @endforeach
                    @else($posts)
                    <li class="py-4 px-2">
                        <p> Kein Artikel vorhanden.</p>
                    </li>
                @endempty
        </ul>

        <div>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
