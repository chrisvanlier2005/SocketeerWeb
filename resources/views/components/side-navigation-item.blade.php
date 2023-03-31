@props(["text", "href", 'active' => false])
<li>
    <a href="{{$href}}"
       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
        {{ $logo ?? '' }}
        <span class="ml-3">{{$text}}</span>
        {{$after ?? ''}}
    </a>
</li>
