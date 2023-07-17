<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interesados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
					<h1 class="my-10 text-3xl font-bold text-center mb-10">Interesados en "{{$carrera->titulo}}"</h1>
                    <div class="md:flex md:justify-center p-5">
						<ul class="divide-y divide-gray-200 w-full">
							@forelse ($carrera->interesados as $interesado )
								<li class="p-3 flex items-center">
									<div class="flex-1">
										<p class="text-xl font-medium text-gray-800">
											{{$interesado->user->name}}
										</p>
										<p class="text-sm text-gray-600">
											{{$interesado->user->email}}
										</p>
										<p class="text-sm text-gray-600">
											Postulado {{$interesado->created_at->diffForHumans()}}
										</p>
									</div>
								</li>
								<hr>
							@empty
								<p class="p-3 text-center text-sm text-gray-600">No hay candidatos aún</p>
							@endforelse
						</ul>
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>