@props(['add_class' => ''])

@php $active = request()->is($attributes['href']=='/' ? '/' : substr($attributes['href'], 1, strlen($attributes['href']))) @endphp
<a 
{{ $attributes; }} 
class="
{{  $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
rounded-md px-3 py-2 text-sm font-medium {{ $add_class }}" 
aria-current="{{ $active ? 'page' : false}}"
>{{ $slot }}</a>