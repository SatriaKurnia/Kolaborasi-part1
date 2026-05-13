<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'SaMus App' }}</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(["resources/css/app.css", "resources/js/app.js"])
    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background-color: #3f3f46; border-radius: 20px; }
        .custom-scrollbar:hover::-webkit-scrollbar-thumb { background-color: #52525b; }
    </style>
</head>
<body class="bg-[#121212] flex h-screen overflow-hidden antialiased text-white">

    <!-- === Sidebar Component === -->
    <x-sidebar>
        <!-- Navigation -->
        <nav class="px-4 space-y-4">
            <x-sidebar.nav-item href="/" icon="home" :active="request()->is('/')">Home</x-sidebar.nav-item>
            <x-sidebar.nav-item href="/library" icon="rectangle-stack" :active="request()->is('library')">Library</x-sidebar.nav-item>
            <x-sidebar.nav-item href="/liked" icon="heart" :active="request()->is('liked')">Liked Songs</x-sidebar.nav-item>
            <x-sidebar.nav-item href="/recent" icon="clock" :active="request()->is('recent')">Recent</x-sidebar.nav-item>
        </nav>

        <!-- Playlists Section -->
        <x-sidebar.playlist-section>
            <!-- Playlist Items -->
            <x-sidebar.playlist-item 
                image="https://images.unsplash.com/photo-1621360841013-c76831f1728e?auto=format&fit=crop&q=80&w=100&h=100" 
                title="Sweet Home Alabama" 
                subtitle="120 songs" 
            />
            <x-sidebar.playlist-item 
                image="https://images.unsplash.com/photo-1621360841013-c76831f1728e?auto=format&fit=crop&q=80&w=100&h=100" 
                title="Sweet Home Alabama" 
                subtitle="120 songs" 
            />
            <x-sidebar.playlist-item 
                image="https://images.unsplash.com/photo-1621360841013-c76831f1728e?auto=format&fit=crop&q=80&w=100&h=100" 
                title="Sweet Home Alabama" 
                subtitle="120 songs" 
            />
        </x-sidebar.playlist-section>
    </x-sidebar>

    <!-- === Main Content Area === -->
    <main class="flex-1 overflow-y-auto w-full">
        {{ $slot }}
    </main>

</body>
</html>