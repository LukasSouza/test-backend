@php
    //dd($object);
@endphp
@extends('layouts.app')

@section('content')
<header class="container-fluid edge-header deep-purple">
<h2>Cursos</h2>
</header>
<div class="container">
    <div class="card-columns">
        <!-- Card -->
        @foreach ($object as $curso)
            <div class="card ">
                <div class="card-body mb-4">
                    <small class="text-muted">{{$curso->category}}</small>
                    <!--Title-->
                    <h4 class="card-title">{{$curso->title}}</h4>
                    <!--Text-->
                    <p class="text-muted">{{$curso->Address->city}}</p>
                    <hr>
                    <p class="card-text float-left">{{$curso->start->format("d \d\\e F \d\\e Y")}}</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <a href="#" class="float-right"><i class="material-icons">calendar_today</i></a>

                </div>
            </div>
        @endforeach


    </div>
</div>


@endsection

<style type="text/css">

</style>
