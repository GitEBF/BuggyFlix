@extends("layouts.app")

@section("contenu")
<section class="main-container">
    <div>
<h1>Page du film {{$film->titre}}</h1>
@if (isset($film))
    <li>{{ $film->titre}} </li>
    <li>{{$film->resume}} </li>
@else
    <p>Le film n'existe pas</p>
@endif
    </div>
</section>
@endsection