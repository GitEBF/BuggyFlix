@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/pageInfoUser.css')}}">
@section('contenu')
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<section class="main-container"> <!-- component -->
    <section class="max-w-4xl p-6 mx-auto bgFlix rounded-md shadow-md mt-20">
        <h1 class="text-xl font-bold text-white capitalize dark:text-white">Liste des Admin</h1>
        <br>
        @if (count($users))
            @foreach ($users as $user)
                @if ($user->role == 1)
                <div class="rowRole">
                    <h2>{{ $user->email }}</h2>
                    <div class="supRole">
                        <a href="{{route('UsagersController.user.edit', [$user->id]) }}"><i class="fa fa-pen"></i></a>
                        <form method="POST" action="{{route('user.destroy', [$user->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa fa-trash role2"></i></button>
                        </form>
                    </div>
                </div>
                @endif
            @endforeach
            <h1 class="text-xl font-bold text-white capitalize dark:text-white">Liste des Adultes</h1>
            <br>
            @foreach ($users as $user)
                @if ($user->role == 2)
                <div class="rowRole">
                    <h2>{{ $user->email }}</h2>
                    <div class="supRole">
                        <a href="{{route('UsagersController.user.edit', [$user->id]) }}"><i class="fa fa-pen"></i></a>
                        <form method="POST" action="{{route('user.destroy', [$user->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa fa-trash role2"></i></button>
                        </form>
                    </div>
                </div>
                @endif
            @endforeach
            <h1 class="text-xl font-bold text-white capitalize dark:text-white">Liste des Enfants</h1>
            <br>
            @foreach ($users as $user)
                @if ($user->role == 3)
                <div class="rowRole">
                    <h2>{{ $user->email }}</h2>
                    <div class="supRole">
                        <a href="{{route('UsagersController.user.edit', [$user->id]) }}"><i class="fa fa-pen"></i></a>
                        <form method="POST" action="{{route('user.destroy', [$user->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa fa-trash role2"></i></button>
                        </form>
                    </div>
                  
                </div>
                @endif
            @endforeach
        @endif
    </section>
</section>

@endsection
