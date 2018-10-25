@php
    //dd($object);
@endphp
@extends('layouts.app')

@section('content')
<header class="container-fluid edge-header bg-primary">
    <div class="row">
        <h2>Cursos</h2>
        <input type="text" name="pesquisar" value="Pesquisar">
    </div>
</header>
<div class="container">
    <div class="card-columns">
        @foreach ($object as $curso)
            <div class="card ">
                <div class="card-body mb-4">
                    <small class="text-muted">{{$curso->category}}</small>
                    <h4 class="card-title">{{$curso->title}}</h4>
                    <p class="text-muted">{{$curso->Address->city}}</p>
                    <hr>
                    <p class="card-text float-left">{{$curso->start->format("d \d\\e F \d\\e Y")}}</p>
                    <a href="{{ route('curso.show', $curso->id) }}" class="float-right"><i class="material-icons">calendar_today</i></a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

<style type="text/css">

</style>
