@extends('laravel_dashboard::layout')

@section('title')
    {{$name}}
@stop

@section('content')
    <div class="box box-solid">
        <div class="box-body">
            {!! $content !!}
        </div>
    </div>
@stop