@extends('layouts.app')

@section('contenu')
<link rel="stylesheet" href="{{ asset('css/form.css') }}"> <section class="main-container"> <!-- component -->
<section class="max-w-4xl p-6 mx-auto bgFlix rounded-md shadow-md mt-20">
<h1 class="text-xl font-bold text-white capitalize dark:text-white">Creation Film</h1>
<form method="post" action="{{ route('buggyflix.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
            <label class="text-white dark:text-gray-200" for="titre">Titre</label>

            <input id="titre" type="text" name="titre" value="{{ old('titre') }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="type">Type</label>
            <select name="type" id="type" 
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
                <option value="Documentaire" {{ old('type') == 'Documentaire' ? 'selected' : '' }}>Documentaire</option>
                <option value="Serie" {{ old('type') == 'Serie' ? 'selected' : '' }}>Serie</option>
                <option value="Film" {{ old('type') == 'Film' ? 'selected' : '' }}>Film</option>
            </select>
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="brand">Compagnie</label>
            <input id="brand" type="text" name="brand" value="{{ old('brand') }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="cote">Cote</label>
            <input id="cote" type="text" name="cote" value="{{ old('cote') }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="duree">Duree</label>
            <input id="duree" type="text" name="duree" value="{{ old('duree') }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
            <label class="text-white dark:text-gray-200" for="rating">Classification</label>
            <select id="rating" name="rating"
        class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        <option value="PG" {{ old('rating') == 'PG' ? 'selected' : '' }}>PG</option>
        <option value="G" {{ old('rating') == 'G' ? 'selected' : '' }}>G</option>
        <option value="13+" {{ old('rating') == '13+' ? 'selected' : '' }}>13+</option>
        <option value="16+" {{ old('rating') == '16+' ? 'selected' : '' }}>16+</option>
        <option value="18+" {{ old('rating') == '18+' ? 'selected' : '' }}>18+</option>
        <option value="18+ (explicit)" {{ old('rating') == '18+ (explicit)' ? 'selected' : '' }}>18+ (explicit)</option>
    </select>
        </div>
        <div>
        <label class="text-white dark:text-gray-200" for="Langues">Linguistique</label>
    <details>
        <summary>Langues</summary>
        <ul>
            <li>
                <label>
                    <input type="checkbox" name="langue[]" value="FR" {{ in_array('FR', old('langue', [])) ? 'checked' : '' }}/>
                    Francais
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="langue[]" value="EN" {{ in_array('EN', old('langue', [])) ? 'checked' : '' }}/>
                    Englais
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="langue[]" value="ES" {{ in_array('ES', old('langue', [])) ? 'checked' : '' }}/>
                    Espagnol
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="langue[]" value="JA" {{ in_array('JA', old('langue', [])) ? 'checked' : '' }}/>
                    Japonais
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="langue[]" value="HI" {{ in_array('HI', old('langue', [])) ? 'checked' : '' }}/>
                    Hindou
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="langue[]" value="DE" {{ in_array('DE', old('langue', [])) ? 'checked' : '' }}/>
                    Allemand
                </label>
            </li>
        </ul>
    </details>
        </div>
        
        <div>
            <label class="text-white dark:text-gray-200" for="date">Date</label>
            <input id="date" type="date" name="date" value="{{ old('date') }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-white-300 rounded-md bgFlixLight dark:text-red-300 dark:border-red-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        </div>
        <div>
        <details>
        <summary>Sous-Titres</summary>
        <ul>
            <li>
                <label><input type="checkbox" name="subtitle[]" value="FR" {{ in_array('FR', old('subtitle', [])) ? 'checked' : '' }}/>Francais</label>
            </li>
            <li>
                <label><input type="checkbox" name="subtitle[]" value="EN" {{ in_array('EN', old('subtitle', [])) ? 'checked' : '' }}/>Englais</label>
            </li>
            <li>
                <label><input type="checkbox" name="subtitle[]" value="ES" {{ in_array('ES', old('subtitle', [])) ? 'checked' : '' }}/>Espagnol</label>
            </li>
            <li>
                <label><input type="checkbox" name="subtitle[]" value="JA" {{ in_array('JA', old('subtitle', [])) ? 'checked' : '' }}/>Japonais</label>
            </li>
            <li>
                <label><input type="checkbox" name="subtitle[]" value="HI" {{ in_array('HI', old('subtitle', [])) ? 'checked' : '' }}/>Hindou</label>
            </li>
            <li>
                <label><input type="checkbox" name="subtitle[]" value="DE" {{ in_array('DE', old('subtitle', [])) ? 'checked' : '' }}/>Allemand</label>
            </li>
        </ul>
    </details>
        </div>
        <div>
            </label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                    <span class="text-red-600 font-bold">Pochette</span>
                    <input id="pochette" name="pochette" type="file"
                class="block w-full px-4 py-2 mt-2 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-white dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring
                 form-control-file">
                </div>
            </div>
        </div>

    <div class="flex justify-end mt-6">
        <button
            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-800 focus:outline-none focus:bg-gray-600">Créer</button>
    </div>
<div>
            <label class="text-white dark:text-gray-200" for="resume">Resume</label>
            <input id="resume" type="text" name="resume" value="{{ old('resume') }}"
                class="block w-full px-4 py-2 mt-2 text-white-700 bg-white border border-gray-300 rounded-md bgFlixLight dark:text-gray-300 dark:border-gray-600 focus:border-red-500 dark:focus:border-red-500 focus:outline-none focus:ring ring-red-600">
        
            </div>
            @if(isset($errors) && $errors->any())
    
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>

@endif
</form>
<div>
    </section>
    </section>


    @endsection