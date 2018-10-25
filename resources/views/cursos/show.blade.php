@php
    //dd($curso);
@endphp
@extends('layouts.app')

@section('content')
<header class="container-fluid edge-header bg-primary">

</header>
<div class="container">
    <div class="card-columns">
        <div class="card ">
            <div class="card-body mb-12">
                <h4 class="card-title">{{$curso->title}}</h4>
                <p>{{$curso->description}}</p>
                <p><i class="material-icons">calendar_today</i> {{$curso->start->format("d \d\\e F \d\\e Y")}}</p>
                <p><i class="material-icons">access_time</i>De  {{$curso->start->format('H:i')}} Até {{$curso->finish->format('H:i')}}</p>
                <p><i class="material-icons">access_time</i> <a href="#">{{$curso->Address->city}}</a></p>
                <p><i class="material-icons">access_time</i> {{$curso->Address->city}}</p>
                <p><i class="material-icons">access_time</i> {{$curso->Address->city}}</p>

                <a href="#" class="float-right"><i class="material-icons">calendar_today</i></a>
            </div>
        </div>
    </div>
</div>


@endsection

<style type="text/css">

</style>
