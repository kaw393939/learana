@extends('layouts.landing')
@section('content')

    <div class="row ml-auto mr-auto topCallout">
        <div class="container justify-content-center ">
            <h1 class="text-center text-white">Monetize your Knowledge</h1>
            <p class="text-center text-white">Share your experience with others.</p>
            <div class="card-deck">
                <div class="card mb-3 pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Influencers</h4>
                        <p class="card-text">Talk about benefits for influencers</p>
                    </div>
                </div>
                <div class="card shadow mb-3  pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Educators</h4>
                        <p class="card-text">Talk about teachers.</p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Trainers</h4>
                        <p class="card-text">Talk about coaches
                        </p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Guides</h4>
                        <p class="card-text">talk about trainers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid">
            <div class="container">
                @include('includes.what')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid bg-primary">
            <div class="container">
                @include('includes.influencers')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid ">
            <div class="container">
                @include('includes.educators')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid bg-primary">
            <div class="container">
                @include('includes.trainers')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>
    <div class="row">
        <hr class="featurette-divider">
        <div class="container-fluid ">
            <div class="container">
                @include('includes.guides')
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
    </div>


@stop