@extends('layouts.app')

@section('content')
    <div class="w-full">
        <section id="latest-vacancies" class="py-20 justify-center border-b border-primary-orange">
            <x-latest-vacancies :latestVacancies="$latestVacancies" />
        </section>
        <section id="differences" class="mt-8 py-14 justify-center">
            <x-differences />
        </section>
        <section id="benefits" class="mt-8 justify-center">
            <x-benefits />
        </section>
        <section id="depositions" class="mt-20 justify-center">
            <x-depositions />
        </section>
    </div>
@endsection
