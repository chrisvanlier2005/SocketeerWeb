<div {{$attributes->merge([
    "class" =>
    "block relative overflow-hidden z-1 p-6 rounded-2xl w-full h-full bg-gray-800"
    ]
    )}}>
    {{$slot}}
</div>
