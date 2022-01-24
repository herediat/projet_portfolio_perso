@extends('layouts.app')

@section('content')

<a href="{{route('dashboard')}}">Vers Dashboard</a>

    <!-- component -->

<div class="animate-pulse min-h-screen bg-slate-200 py-6 flex flex-col justify-center relative overflow-hidden sm:py-12">
    <span class="border text-4xl text-yellow-800 px-6 pt-10 pb-8 bg-white w-1/2 max-w-md mx-auto rounded-t-md sm:px-10">Création description</span>
<div class="border relative px-4 pt-7 pb-8 bg-white shadow-xl w-1/2 max-w-md mx-auto sm:px-10 rounded-b-md">

    <form methode= "POST" action="{{route('accueil.store')}}">
        @csrf
        <label for="" class="block">Créer une description</label>
        <input type="text" class="border w-full h-10 px-3 mb-5 rounded-md" placeholder="Description">
                <div class="flex items-start"></div>
                    <div class="flex items-start"></div>
                        <div class="flex items-center"></div>
      <button class="mt-5 bg-green-500 hover:bg-blue-700 shadow-xl text-white uppercase text-sm font-semibold px-14 py-3 rounded">Login</button>
    </form>
</div>
</div>
@endsection