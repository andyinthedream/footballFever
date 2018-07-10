@extends('layouts.default')

@section('content')
    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{--@include('plugin.carousel')--}}
                @include('plugin.notice')
            </div>
        </div>
        <div class="row">...</div>
    </div>

    @stop