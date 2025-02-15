<div class="pl-2">
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight">
            {{$carrera->titulo}}
        </h2>
		<p class="max-w-3xl text-gray-800 my-3">
			{{$carrera->descripcion}}
		</p>
		<div class="flex space-x-4">
			<span class="text-sm text-gray-500"> <i class="fa-solid fa-clock"> </i> {{$carrera->duracion}}</span>
			<span class="text-sm text-gray-500"> <i class="py-1 fa-solid fa-tag"></i> {{$carrera->categoria->categoria}}</span>
			<span class="text-sm text-gray-500"> <i class="fa-solid fa-graduation-cap"></i> {{$carrera->grado->grado}}</span>
			<span class="text-sm text-gray-500"> <i class="fa-solid fa-laptop"></i> {{$carrera->modalidad}}</span>
		</div>
    </x-slot>
	<div class="row">
		<div class="left">
			<h1 class="font-bold text-xl text-blue-900 leading-tight">
				Acerca del programa
			</h1>
			<p class="text-gray-800 my-3">
				{!! nl2br(e($carrera->programa)) !!}
			</p>
			<br>
			<h1 class="font-bold text-xl text-blue-900 leading-tight">
				Requisitos
			</h1>
			<p class="text-gray-800 my-3">
				{!! nl2br(e($carrera->requisitos)) !!}
			</p>
			<h1 class="font-bold text-xl text-blue-900 leading-tight">
				Certificacion
			</h1>
			<p class="text-gray-800 my-3">
				{!! nl2br(e($carrera->certificacion)) !!}
			</p>
		</div>

		<div class="hidden lg:block md:block rigth shadow-xl bg-white mb-6 rounded-3xl h-full">
			<img class="rounded-3xl" src="{{ asset('storage/carreras/' . $carrera->imagen) }}" alt="Imagen del post {{ $carrera->titulo }}">
			<div class="p-4">
				<p class="font-bold text-s text-blue-900">
					{{$carrera->titulo}}
				</p>
				<p class="font-bold text-3xl text-gray-800 my-1">
					{{$carrera->precio}}
				</p>

				<div class="bg-green-200 rounded-lg mt-3">
					<p class="text-center text-green-800 p-1 text-base">¡Comienza el {{$carrera->ultimo_dia}}!</p>
				</div>

				<p class="text-center mt-2 text-sm text-blue-900">Obtendrás certificación por {{$carrera->certificacion}}</p>
			</div>
			<div class="ml-7">
				<p class="text-sm mt-1 text-rigth"><i class="fa-brands fa-youtube"></i>Vídeo bajo demanda</p>
				<p class="text-sm mt-1 text-rigth"><i class="fa-solid fa-file-pdf"></i> PDFs descargables</p>
				<p class="text-sm mt-1 text-rigth"><i class="fa-solid fa-mobile-screen-button"></i> Acceso en dispositivos móviles y TV</p>
				<p class="text-sm mt-1 text-rigth"><i class="fa-solid fa-trophy"></i> Certificado de finalizacion</p>
			</div>

			<div class="p-4">
				@cannot('create', App\Models\Carrera::class)
					<livewire:solicitar-carrera
						:carrera="$carrera"
					/>
				@endcannot
			</div>		

			@guest
				<div class="mt-5 border-dashed p-2 text-center">
					<p>¿Estas interesado? <a  class="font-bold text-blue-600" href="{{route('register')}}">¡Crea una cuenta e inscribite!</a></p>
				</div>
			@endguest
		</div>
	</div>
</div>


