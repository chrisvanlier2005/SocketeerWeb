<div {{$attributes->merge([
    "class" =>
    "block relative before-bg overflow-hidden z-1 p-6 rounded-2xl w-full h-full border border-white/30 bg-gray-800"
    ]
    )}}>
    {{$slot}}
</div>
