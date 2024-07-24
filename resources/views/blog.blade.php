<x-layout :data=$layout>
  @if (@$posts)
    @foreach ($posts as $post)
      <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/blog/{{ $post['slug'] }}" class="mb-1 text-3xl tracking-tight font-bold text-gray-100 hover:underline">{{ $post['title'] }}</a>
        <div class="text-base text-gray-200">
          By <a href="/blog/author/{{ $post->author->username }}" class="font-medium hover:underline">{{ $post->author->name }}</a> in <a href="/blog/category/{{ $post->category->slug }}" class="font-medium hover:underline">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans()  }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
        <a href="/blog/{{ $post['slug'] }}" class="sont-medium text-blue-200 hover:underline">Read More &raquo;</a>
      </article>
    @endforeach
  @else
    <article class="py-8 max-w-screen-md">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-100">{{ $post->title }}</h2>
      <div class="text-base text-gray-200">
        By <a href="/blog/author/{{ $post->author->username }}" class="font-medium hover:underline">{{ $post->author->name }}</a> in <a href="/blog/category/{{ $post->category->slug }}" class="font-medium hover:underline">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
      </div>
      <p class="my-4 font-light">{{ $post->body }}</p>
      <a href="/blog" class="sont-medium text-blue-200 hover:underline">&laquo; Back</a>
    </article>
  @endif
</x-layout>