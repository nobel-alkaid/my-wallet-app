{{-- {{dd(request()->is('home'))}} --}}

<div class="-translate-x-full ease-in fixed inset-y-0 left-0 z-30 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
	<div class="flex items-center justify-center mt-8">
		<div class="flex items-center">
			<x-elements.logo></x-elements.logo>
			<span class="mx-4 text-xl font-semibold text-white capitalize">My wallet</span>
		</div>
	</div>
	<nav class="mt-10 flex-grow">
		<ul>
			<li>
				@php
					$active = request()->is('home');
				@endphp
				<a href="{{route('dashboard')}}" @class([
					'flex', 'items-center', 'px-6', 'py-2', 'mt-4', 'duration-200', 'text-gray-500', 'border-l-4', 'border-gray-900', 'hover:bg-gray-600', 'hover:bg-opacity-25', 'hover:text-gray-100',
					'active-link' => $active
				]) >
				<svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2 10C2 5.58172 5.58172 2 10 2V10H18C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10Z" fill="currentColor"></path>
					<path d="M12 2.25195C14.8113 2.97552 17.0245 5.18877 17.748 8.00004H12V2.25195Z" fill="currentColor"></path>
				</svg>
				<span class="mx-4">Dashboard</span>
				</a>
			</li>
			@php
				$active = request()->is('account/*') || request()->is('account') ;
			@endphp
			<li class="relative" @if ($active) x-data="{ open: true }" @else x-data="{ open: false }" @endif >
				<button @click="open = ! open" @class([
					'flex', 'items-center', 'px-6', 'py-2', 'mt-4', 'duration-200', 'text-gray-500', 'border-l-4', 'border-gray-900', 'hover:bg-gray-600', 'hover:bg-opacity-25', 'hover:text-gray-100', 'w-full',
					'active-link' => $active
				])>
					<svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5 3C3.89543 3 3 3.89543 3 5V7C3 8.10457 3.89543 9 5 9H7C8.10457 9 9 8.10457 9 7V5C9 3.89543 8.10457 3 7 3H5Z" fill="currentColor"></path>
						<path d="M5 11C3.89543 11 3 11.8954 3 13V15C3 16.1046 3.89543 17 5 17H7C8.10457 17 9 16.1046 9 15V13C9 11.8954 8.10457 11 7 11H5Z" fill="currentColor"></path>
						<path d="M11 5C11 3.89543 11.8954 3 13 3H15C16.1046 3 17 3.89543 17 5V7C17 8.10457 16.1046 9 15 9H13C11.8954 9 11 8.10457 11 7V5Z" fill="currentColor"></path>
						<path d="M11 13C11 11.8954 11.8954 11 13 11H15C16.1046 11 17 11.8954 17 13V15C17 16.1046 16.1046 17 15 17H13C11.8954 17 11 16.1046 11 15V13Z" fill="currentColor"></path>
					</svg>
					<span class="mx-4">Compte</span>
				</button>
				<ul x-show="open" x-transition:enter="transition ease-out duration-200"
					x-transition:enter-start="transform opacity-0 scale-95"
					x-transition:enter-end="transform opacity-100 scale-100"
					x-transition:leave="transition ease-in duration-75"
					x-transition:leave-start="transform opacity-100 scale-100"
					x-transition:leave-end="transform opacity-0 scale-95" class="text-center">
					
					<li><a href="{{route('account.index')}}" class="block px-4 py-2 text-sm text-gray-100 bg-gray-600 hover:bg-gray-400">
						Mes comptes
						</a>
					</li>
					<li>
						<a href="{{route('account.create')}}" class="block px-4 py-2 text-sm text-gray-100 bg-gray-600 hover:bg-gray-400">
							Ajouter un compte
						</a>
					</li>
				</ul>

				{{-- <div x-show="open" class="absolute inset-0 top-5 py-2 mt-2  rounded-md shadow-xl w-44" @click="open = false">
				</div> --}}
			</li>
			<li>
				<a href="/tables" class="flex items-center px-6 py-2 mt-4 duration-200 border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100">
					<svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7 3C6.44772 3 6 3.44772 6 4C6 4.55228 6.44772 5 7 5H13C13.5523 5 14 4.55228 14 4C14 3.44772 13.5523 3 13 3H7Z" fill="currentColor"></path>
						<path d="M4 7C4 6.44772 4.44772 6 5 6H15C15.5523 6 16 6.44772 16 7C16 7.55228 15.5523 8 15 8H5C4.44772 8 4 7.55228 4 7Z" fill="currentColor"></path>
						<path d="M2 11C2 9.89543 2.89543 9 4 9H16C17.1046 9 18 9.89543 18 11V15C18 16.1046 17.1046 17 16 17H4C2.89543 17 2 16.1046 2 15V11Z" fill="currentColor"></path>
					</svg>
					<span class="mx-4">Tables</span>
				</a>
			</li>
			<li>
				<a href="/forms" class="flex items-center px-6 py-2 mt-4 duration-200 border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
						<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
					</svg>
					<span class="mx-4">Forms</span>
				</a>
			</li>
			<li>
				<a href="/cards" class="flex items-center px-6 py-2 mt-4 duration-200 border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
						<path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
					</svg>
					<span class="mx-4">Cards</span>
				</a>
			</li>
			<li>
				<a href="/modal" class="flex items-center px-6 py-2 mt-4 duration-200 border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
						<path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z"></path><path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"></path><path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
					</svg>
					<span class="mx-4">Modal</span>
				</a>
			</li>
			<li>
				<a href="{{route('settings')}}" class="flex items-center px-6 py-2 mt-4 duration-200 border-l-4 border-gray-900 text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
					  </svg>
					<span class="mx-4">Settings</span>
				</a>
			</li>
		</ul>
	</nav>
</div>