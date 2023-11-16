@extends("layouts.app")

@section("contenu")

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="main-container flex justify-center">
@auth
<div class="location" id="home">
@role('1')
  <a class="top-right-link" href="{{ route('buggyflix.create.person')}}"><i class="fa fa-plus"></i></a>
  @endrole
      <h1 id="home">Les gens toutes biggie</h1>
      <div class="box">
      @if (count($persons))
        @foreach ($persons as $person)
          <a href="{{ route('buggyflix.cinemographie', [$person]) }}"><img src="{{$person->img}}" alt="" class="h-48 w-48 mx-auto"></a>
          @endforeach 
        @else
          <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/t1.PNG?raw=true" alt=""></a>
        @endif
      </div>
  </div>
  @else
  <div class="main-container location" id="home">
   <a class="location" href="{{ route('UsagersController.login')}}"><p>Veuillez vous connecter</p></a>
</div>
  @endauth
</section>

<style>
  .top-right-link {
    position: absolute;
    top: 80px;
    right: 10px; 
    background-color: #D81f26;
    color: #ffffff; 
    padding: 10px 15px;
    border-radius: 5px;
  }
</style>


@endsection

