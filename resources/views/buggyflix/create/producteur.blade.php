@extends("layouts.app")

@section("contenu")
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<section class="main-container"> <!-- component -->


<section class="max-w-4xl p-6 mx-auto bgFlix rounded-md shadow-md mt-20">
<h1 class="text-xl font-bold text-white capitalize dark:text-white">Ajout d'un producteur pour {{$test->titre}}</h1>
<form method="post" action="{{ route('producteurs.store') }}">
@csrf
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
    <div>
    <label class="text-white dark:text-gray-200" for="nom">Personne</label>
    <select id="person_id" name="person_id" 
    class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        @foreach ($persons as $person)
            <option class="text-white" value="{{$person->id}}">{{$person->nom}}</option>
        @endforeach
    </select>     
</div>

        <div>
        <input type="hidden" value="{{$test->id}}" id="film_id" name="film_id" >  
    </div>
    </div>

    <div class="flex justify-end mt-6">
        <button type="submit"
        class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-800 focus:outline-none focus:bg-gray-600">Ajouter</button>
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