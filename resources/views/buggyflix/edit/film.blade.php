@extends('layouts.app')

@section('contenu')
<link rel="stylesheet" href="{{ asset('css/form.css') }}"> <section class="main-container"> <!-- component -->
<section class="max-w-4xl p-6 mx-auto bgFlix rounded-md shadow-md mt-20">
<h1 class="text-xl font-bold text-white capitalize dark:text-white">Modification {{ $film->titre}}</h1>
<form method="post" action="{{route('buggyflix.update', [$film]) }}" enctype="multipart/form-data">
@csrf
@method('PATCH')
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
            <label class="text-white dark:text-gray-200" for="titre">Titre</label>
            <input id="titre" type="text" name="titre" value="{{ $film->titre }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="type">Type</label>
            <select name="type" id="type" value="{{ $film->type }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
                <option>Documentaire</option>
                <option>Serie</option>
                <option>Film</option>
            </select>
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="brand">Compagnie</label>
            <input id="brand" type="text" name="brand" value="{{ $film->brand }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="cote">Cote</label>
            <input id="cote" type="text" name="cote" value="{{ $film->cote }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="duree">Duree</label>
            <input id="duree" type="text" name="duree" value="{{ $film->duree }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="rating">Classification</label>
            <select id="rating" name="rating" value="{{ $film->rating }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
                <option>PG</option>
                <option>G</option>
                <option>13+</option>
                <option>16+</option>
                <option>18+</option>
                <option>18+ (explicit)</option>
            </select>
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="Langues">Linguistique</label>
            <details>
                <summary>Langues</summary>
                <ul>
                    <li>
                        <label><input type="checkbox" name="langue[]" value="FR" {{ in_array('FR', $selectedLangues) ? 'checked' : '' }}/>Francais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue[]" value="EN" {{ in_array('EN', $selectedLangues) ? 'checked' : '' }}/>Englais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue[]" value="ES" {{ in_array('ES', $selectedLangues) ? 'checked' : '' }}/>Espagnol</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue[]" value="JA" {{ in_array('JA', $selectedLangues) ? 'checked' : '' }}/>Japonais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue[]" value="HI" {{ in_array('HI', $selectedLangues) ? 'checked' : '' }}/>Hindou</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue[]" value="DE" {{ in_array('DE', $selectedLangues) ? 'checked' : '' }}/>Allemand</label>
                    </li>
                </ul>
            </details>
        </div>
        
        <div>
            <label class="text-white dark:text-gray-200" for="date">Date</label>
            <input id="date" type="date" name="date" value="{{ $film->date }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-white-300 rounded-md bgFlixLight dark:text-red-300 dark:border-red-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <details>
                <summary>Sous-Titres</summary>
                <ul>
                    <li>
                        <label><input type="checkbox" name="subtitle[]" value="FR" {{ in_array('FR', $selectedSubtitles) ? 'checked' : '' }}/>Francais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="subtitle[]" value="EN" {{ in_array('EN', $selectedSubtitles) ? 'checked' : '' }}/>Englais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="subtitle[]" value="ES" {{ in_array('ES', $selectedSubtitles) ? 'checked' : '' }}/>Espagnol</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="subtitle[]" value="JA" {{ in_array('JA', $selectedSubtitles) ? 'checked' : '' }}/>Japonais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="subtitle[]" value="HI" {{ in_array('HI', $selectedSubtitles) ? 'checked' : '' }}/>Hindou</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="subtitle[]" value="DE" {{ in_array('DE', $selectedSubtitles) ? 'checked' : '' }}/>Allemand</label>
                    </li>
                </ul>
            </details>
        </div>
        <div>
            </label>
            <img src="{{ asset('img/films/' . $film->pochette)}}" alt="" title="{{$film->pochette}}">
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                    <span class="text-red-600 font-bold">Pochette</span>
                    <input id="pochette" name="pochette" type="file"
                class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-white dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring
                 form-control-file">
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end mt-6">
        <button
            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-800 focus:outline-none focus:bg-gray-600">Modifier</button>
    </div>
<div>
            <label class="text-white dark:text-gray-200" for="resume">Resume</label>
            <input id="resume" type="text" name="resume" value="{{ $film->resume }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
</form>
<div>
    </section>
    </section>
    @if(isset($errors) && $errors->any())
    
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>

@endif

    @endsection