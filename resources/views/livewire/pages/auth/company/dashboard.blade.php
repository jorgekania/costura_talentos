@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl m-0 bg-white flex justify-center flex-1">
        <div>
            <h1 class="mt-20">Dasboard Empresa</h1>
            <p>{{ Auth::guard('company')->user()->corporate_reason }}</p>
        </div>
    </div>
@endsection
