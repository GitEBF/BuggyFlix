@extends('layouts.app')

@section('contenu')
<link rel="stylesheet" href="{{ asset('css/form.css') }}"> <section class="main-container"> <!-- component -->
<section class="max-w-4xl p-6 mx-auto bgFlix rounded-md shadow-md mt-20">
<h1 class="text-xl font-bold text-white capitalize dark:text-white">Creation Film</h1>
<form method="post" action="{{ route('acteurs.store') }}">
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
            <label class="text-white dark:text-gray-200" for="titre">Titre</label>
            <input id="titre" type="text"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="type">Type</label>
            <select
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
                <option>Documentaire</option>
                <option>Serie</option>
                <option>Film</option>
            </select>
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="brand">Compagnie</label>
            <input id="brand" type="text"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="cote">Cote</label>
            <input id="cote" type="text"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="duree">Duree</label>
            <input id="duree" type="text"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="rating">Classification</label>
            <select id="rating"
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
                        <label><input type="checkbox" name="langue" value="FR"/>Francais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="EN" />Englais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="ES" />Espagnol</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="JA" />Japonais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="HI" />Hindou</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="DE" />Allemand</label>
                    </li>
                </ul>
            </details>
        </div>
        
        <div>
            <label class="text-white dark:text-gray-200" for="date">Date</label>
            <input id="date" type="date"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-white-300 rounded-md bgFlixLight dark:text-red-300 dark:border-red-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <details>
                <summary>Sous-Titres</summary>
                <ul>
                    <li>
                        <label><input type="checkbox" name="langue" value="FR"/>Francais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="EN" />Englais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="ES" />Espagnol</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="JA" />Japonais</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="HI" />Hindou</label>
                    </li>
                    <li>
                        <label><input type="checkbox" name="langue" value="DE" />Allemand</label>
                    </li>
                </ul>
            </details>
        </div>
        <div>
            </label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                    <span class="text-red-600 font-bold">Pochette</span>
                    <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                        aria-hidden="true">
                        <path
                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <label for="pochette"
                            class="relative cursor-pointer bg-inherit rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span class="text-red-600 font-bold">Cliquer</span>
                            <input id="pochette" name="pochette" type="file" class="sr-only">
                        </label>
                        <p class="pl-1 text-white font-bold">ou glisser-déposer</p>
                    </div>
                    <p class="text-xs text-white">
                        PNG, JPG, GIF j'usqu'a 10MB
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end mt-6">
        <button
            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-800 focus:outline-none focus:bg-gray-600">Créer</button>
    </div>
</form>
<label class="text-white dark:text-gray-200" for="resume">Resume</label>
<textarea id="resume" type="textarea"
    class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600"></textarea>
</div>
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