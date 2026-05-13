@props(['image', 'title', 'subtitle'])

<a {{ $attributes->merge(['class' => 'flex items-center gap-3 px-2 py-2 hover:bg-gray-800/50 rounded-md transition-colors duration-200 group cursor-pointer']) }}>
    <img src="{{ $image }}" alt="{{ $title }}" class="w-12 h-12 rounded object-cover">
    <div class="flex flex-col overflow-hidden">
        <span class="text-white text-base truncate">{{ $title }}</span>
        <span class="text-gray-400 text-sm truncate">{{ $subtitle }}</span>
    </div>
</a>
