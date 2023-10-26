@extends("layouts.app")

@section("contenu")
<div>
    @if (count($persons))
    <div class="container d-flex justify-content-center mt-5">
        @foreach ($persons as $person)

        <div class="card" style="background-color: #fff; width: 280px; border-radius: 33px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 2rem !important;">
            <div style="display: flex; align-items: center;">
                <img src="{{ $person->img}}" class="img-fluid profile-image" width="70" style="border-radius: 10px; border:2px solid #5957f9;"> 
                <div class="ml-3">
                    <h5 style="font-size: 15px; font-weight: bold; color: #272727; position: relative; top: 8px;">{{$person->nom}}</h5>
                    <p style="font-size: 14px; color: grey; position: relative; top: 2px;">{{$person->dateNaissance}}</p>
                </div>
            </div> 
        </div> @endforeach 
    </div>
                @else
                <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true"alt=""></a>
                @endif
</div>
        @endsection