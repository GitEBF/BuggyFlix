@extends("layouts.app")

@section("contenu")
<section class="main-container">
    <div class="row">
        @if (count($persons))
            @foreach ($persons as $person)
            <div class="col-3">
                <img class="vw-50" src="{{$person->img}}">
                <h1>{{$person->nom}}</h1>
                <p>{{$person->dateNaissance}}</p>
            </div>
            @endforeach 
        @else
            <div class="col-12">
                <p>mallo</p>
            </div>
        @endif
    </div>
</section>
@endsection
