@extends("layouts.app")

@section("contenu")
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<section class="main-container"> <!-- component -->
<section class="max-w-4xl p-6 mx-auto bgFlix rounded-md shadow-md mt-20">
<h1 class="text-xl font-bold text-white capitalize dark:text-white">Modifier {{ $person->nom}}</h1>
<form method="post" action="{{route('persons.update', [$person]) }}" enctype="multipart/form-data">
@csrf
@method('PATCH')
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
    <div>
    <label class="text-white dark:text-gray-200" for="nom">Nom</label>
    <input name="nom" id="nom" type="text" value="{{ $person->nom }}"
    class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
</div>

        <div>
            <label class="text-white dark:text-gray-200" for="lieuNaissance">Lieu de naissance</label>
            <input id="lieuNaissance" name="lieuNaissance" type="text" value="{{ $person->lieuNaissance}}"
            class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="dateNaissance">Date de naissance</label>
            <input id="dateNaissance" name="dateNaissance" type="date" value="{{ $person->dateNaissance}}"
            class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
        <img src="{{ asset('img/persons/' . $person->img)}}" alt="" title="{{$person->img}}" class="h-48 w-48 mx-auto"></a>
        <label class="text-white dark:text-gray-200" for="img">Image</label>
            <input id="img" name="img" type="file"
            class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
    </div>

    <div class="flex justify-end mt-6">
        <button
        class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-800 focus:outline-none focus:bg-gray-600">Modifier</button>
    </div>
    @if(isset($errors) && $errors->any())
    
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>

    @endif
</form>
</div>
<div>
    </section>
    </section>

@endsection