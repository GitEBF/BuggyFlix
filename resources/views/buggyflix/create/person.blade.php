@extends("layouts.app")

@section("contenu")
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<section class="main-container"> <!-- component -->
@if(isset($errors) && $errors->any())
    
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>

@endif


<section class="max-w-4xl p-6 mx-auto bgFlix rounded-md shadow-md mt-20">
<h1 class="text-xl font-bold text-white capitalize dark:text-white">Creation Acteur</h1>
<form method="post" action="{{ route('acteurs.store') }}">
@csrf
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
    <div>
    <label class="text-white dark:text-gray-200" for="nom">Nom</label>
    <input name="nom" id="nom" type="text"
        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
</div>

        <div>
            <label class="text-white dark:text-gray-200" for="lieuNaissance">Lieu de naissance</label>
            <input id="lieuNaissance" name="lieuNaissance" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="dateNaissance">Date de naissance</label>
            <input id="dateNaissance" name="dateNaissance" type="date"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="img">Image</label>
            <input id="img" name="img" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
    </div>

    <div class="flex justify-end mt-6">
        <button
            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save</button>
    </div>
</form>
</div>
<div>
    </section>
    </section>

@endsection