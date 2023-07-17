<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

			<x-slot name="header">
				<h2 class="font-semibold text-xl text-gray-800 leading-tight">
					{{ __('Mis carreras') }}
				</h2>
			</x-slot>
			
			@if (session()->has('mensaje'))
				<div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">
					{{session('mensaje')}}
				</div>
			@endif
			
			<livewire:mostar-carreras />
        </div>
    </div>
</x-app-layout>