<aside class="w-60 bg-[#0f0f0f] text-white flex flex-col justify-between h-screen shadow-md">
    <!-- Logo -->
    <div>
        <div class="text-center py-6 border-b border-gray-700">
             <div class="flex items-center justify-center mb-6">
            <img src="{{ asset('images/logo aida.png') }}" alt="Aida Logo" class="h-20 w-auto">
        </div>
        </div>

        <!-- Main Links -->
        <nav class="mt-6 px-4 space-y-2">
            @php
                $links = [
                    ['route' => 'client.dashboard', 'label' => 'Dashboard', 'icon' => 'layout-dashboard'],
                    ['route' => 'client.zones', 'label' => 'Zones', 'icon' => 'bar-chart'],
                    ['route' => 'client.control', 'label' => 'Control', 'icon' => 'sliders'],
                    ['route' => 'client.network', 'label' => 'Network', 'icon' => 'users'],
                ];
            @endphp

            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                   class="flex items-center px-3 py-2 rounded-md transition
                   {{ request()->routeIs($link['route']) ? 'bg-[#1a1a1a] text-green-400' : 'hover:bg-[#1a1a1a]' }}">
                    <i data-lucide="{{ $link['icon'] }}" class="w-5 h-5 mr-3"></i>
                    <span>{{ $link['label'] }}</span>
                    @if($link['label'] === 'Control')
                        <span class="ml-auto bg-orange-500 text-black rounded-full text-xs px-2">5</span>
                    @endif
                </a>
            @endforeach

            <!-- Shortcut -->
            <div class="mt-4 mb-1 text-xs text-gray-400 uppercase">Shortcut</div>

            <a href="{{ route('client.configuration') }}" class="flex items-center px-3 py-2 hover:bg-[#1a1a1a]">
                <i data-lucide="settings" class="w-5 h-5 mr-3"></i> Configuration
            </a>
            <a href="{{ route('client.reports') }}" class="flex items-center px-3 py-2 hover:bg-[#1a1a1a]">
                <i data-lucide="file-text" class="w-5 h-5 mr-3"></i> Reports
            </a>
            <a href="{{ route('client.settings') }}" class="flex items-center px-3 py-2 hover:bg-[#1a1a1a]">
                <i data-lucide="cog" class="w-5 h-5 mr-3"></i> Settings
            </a>
        </nav>
    </div>

    <!-- Bottom Profile -->
    <div class="border-t border-gray-700 p-4 flex items-center">
        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" class="w-8 h-8 rounded-full mr-3" alt="User Avatar">
        <div>
            <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
            <form action="{{ route('logout') }}" method="GET">
                <button class="text-xs text-red-400 hover:underline">Logout</button>
            </form>
        </div>
    </div>
</aside>
