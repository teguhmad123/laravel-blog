<x-layout :data=$layout>
  @if (@$posts)
  <section class="mb-5">
    <div class="grid gap-4 lg:grid-cols-3 md:grid-cols-2">
      @foreach ($posts as $post)
        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between items-center mb-5 text-gray-500">
                <a href="/blog/category/{{ $post->category->slug }}" class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded hover:underline">
                    {{ $post->category->name }}
                </a>
                <span class="text-sm">{{ $post->created_at->diffForHumans()  }}</span>
            </div>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 200) }}</p>
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="/blog/author/{{ $post->author->username }}" class="font-medium text-gray-500 dark:text-white hover:underline">{{ $post->author->name }}</a>
                </div>
                <a href="/blog/{{ $post['slug'] }}" class="inline-flex items-center font-medium text-gray-500 dark:text-primary-500 hover:underline">
                    Read more &raquo;
                </a>
            </div>
        </article>
      @endforeach
    </div>
  </section>
  @else
    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-between items-center mb-5 text-gray-500">
            <div class="flex items-center space-x-4">
                <a href="/blog" class="inline-flex items-center font-medium text-gray-500 dark:text-primary-500 hover:underline">&laquo; Back</a>
                <a href="/blog/category/{{ $post->category->slug }}" class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded hover:underline">{{ $post->category->name }}</a>
                <a href="/blog/author/{{ $post->author->username }}" class="font-medium text-gray-500 dark:text-white hover:underline">{{ $post->author->name }}</a>
            </div>
            <span class="text-sm">{{ $post->created_at->diffForHumans()  }}</span>
        </div>
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 200) }}</p>
        <div class="flex justify-between items-center">
        </div>
    </article>
  @endif
</x-layout>