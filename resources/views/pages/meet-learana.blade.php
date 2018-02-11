@extends('layouts.landing')
@section('content')
    <div class="row ml-auto mr-auto ">
        <div class="container justify-content-center ">
            <h1 class="text-center">Meet Learana</h1>
            <p class="text-center text-white">We provide tools that help people learn</p>
            <div class="card-deck">
                <div class="card mb-3 pb-3 shadow">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Affordable Education</h4>
                        <p class="card-text">We want to make education more affordable by helping people save time and make better decisions.</p>
                    </div>
                </div>
                <div class="card shadow mb-3  pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Save Time</h4>
                        <p class="card-text">Is for 1-1 interactions through webconferencing, in person meetings, and online chat.(Slack and FacebooK)</p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 shadow">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Better Decisions</h4>
                        <p class="card-text">Is for a  group interactions through webconferencing, in person meetings, and online chat.(Slack and FacebooK)</p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 shadow ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Motivation</h4>
                        <p class="card-text">Lare groups that meet through web conferencing and online chat (Slack and FacebooK)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-flex ">
        <div class="row">
            <div class="container-fluid">
                <div class="container">
                    @include('includes.what')
                </div>
                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->
            </div>
        </div>
        <div class="row bgDark">
            <hr class="featurette-divider">
            <div class="container-fluid">
                <div class="container">
                    @include('includes.affordable')
                </div>
                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->
            </div>
        </div>
        <div class="row">
            <hr class="featurette-divider">
            <div class="container-fluid">
                <div class="container">
                    @include('includes.time')
                </div>
                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->
            </div>
        </div>
        <div class="row">
            <hr class="featurette-divider">
            <div class="container-fluid bg-primary">
                <div class="container">
                    @include('includes.decisions')
                </div>
                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->
            </div>
        </div>
        <div class="row">
            <hr class="featurette-divider">
            <div class="container-fluid ">
                <div class="container">
                    @include('includes.motivation')
                </div>
                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->
            </div>
        </div>
    </div>

@stop
