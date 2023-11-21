@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl m-0 bg-white flex justify-center flex-1">
        <div>
            <h1 class="mt-20">Dasboard Cadidatos</h1>
            <p>{{ Auth::guard('professional')->user()->name }}</p>
        </div>
    </div>
@endsection
