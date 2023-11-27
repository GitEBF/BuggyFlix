@extends("layouts.app")

@section("contenu")
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<section class="main-container"> <!-- component -->



<section class="max-w-4xl p-6 mx-auto bgFlix rounded-md shadow-md mt-20">
<h1 class="text-xl font-bold text-white capitalize dark:text-white">Creation Acteur</h1>
<form method="post" action="{{ route('acteurs.store') }}">
@csrf
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
    <div>
    <label class="text-white dark:text-gray-200" for="nom">Acteur</label>
    <select id="person_id" name="person_id" 
        class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        @foreach ($persons as $person)
            <option class="text-white" value="{{$person->id}}">{{$person->nom}}</option>
        @endforeach
    </select>    
</div>

        <div>
            <label class="text-white dark:text-gray-200" for="lieuNaissance">Film</label>
            <select  id="film_id" name="film_id" 
                class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                @foreach ($films as $film)
                    @if($film->id == $test->id)
                    <option class="text-white"value="{{$test->id}}" selected>{{$test->titre}}</option>
                    @else
                    <option class="text-white"value="{{$film->id}}" >{{$film->titre}}</option>
                    @endif
                @endforeach
            </select>   
    </div>
        <div>
            <label class="text-white dark:text-gray-200" for="dateNaissance">Role</label>
            <input id="role" name="role" type="text"
                class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="img">Nom personnage</label>
            <input id="nomPersonnage" name="nomPersonnage" type="text"
                class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
    </div>

    <div class="flex justify-end mt-6">
        <button type="submit"
            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save
        </button>
    </div>
</form>

@if(isset($errors) && $errors->any())
    
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>

@endif

</div>
<div>
    </section>
    </section>

@endsection