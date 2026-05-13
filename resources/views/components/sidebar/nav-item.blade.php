@props(['icon' => null, 'active' => false])

<a {{ $attributes->merge(['class' => 'flex items-center gap-4 px-2 py-1 transition-colors duration-200 ' . ($active ? 'text-white font-medium' : 'text-gray-400 hover:text-white')]) }}>
    @if($icon)
        <div class="w-6 h-6 flex items-center justify-center">
            @svg('heroicon-' . ($active ? 's' : 'o') . '-' . $icon, 'w-6 h-6')
        </div>
        
    @else
        <div class="w-6 h-6"></div>
    @endif
    <span class="text-lg">{{ $slot }}</span>
</a>
