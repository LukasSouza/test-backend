@php
    // /dd($curso);
@endphp
@extends('layouts.app')

@section('content')
<header class="container-fluid edge-header bg-primary">

</header>
<div class="container">
    <div class="card-columns">
        <div class="card ">
            <div class="card-body mb-4">
                <h4 class="card-title">{{$curso->title}}</h4>
                <p>{{$curso->description}}</p>
                <p><i class="material-icons">calendar_today</i> {{$curso->start->format("d \d\\e F \d\\e Y")}}</p>
                <p><i class="material-icons">access_time</i>De  {{$curso->start->format('%H:%i:%s')}} Até {{$curso->finish->diff($curso->start)->format('%H:%i:%s')}}</p>
                <p><i class="material-icons">access_time</i> <a href="#">{{$curso->Address->city}}</a></p>
                <p><i class="material-icons">access_time</i> {{$curso->Address->city}}</p>
                <p><i class="material-icons">access_time</i> {{$curso->Address->city}}</p>

                <a href="{{route('curso.show')}}" class="float-right"><i class="material-icons">calendar_today</i></a>
            </div>
        </div>
    </div>
</div>


@endsection

<style type="text/css">

</style>
