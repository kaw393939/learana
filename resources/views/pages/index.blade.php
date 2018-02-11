@extends('layouts.landing')
@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel topCallout slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide"
                         src="#"
                         alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Everyone has something to teach. Everyone has something to learn.</h1>
                            <p>Meet Learana, where you can teach and learn online from real people</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Share your knowledge</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide"
                         src="//placehold.it/1010x367"
                         alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Create a learning experience</h1>
                            <p>Combine greate content with real-time chat and web conferencing to create a personalized
                                learning experiences</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Create</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide"
                         src="//placehold.it/1010x367"
                         alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Monetize your knowledge.</h1>
                            <p>Earn money by teaching what you love</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn How</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container-flex">
        <!-- Three columns of text below the carousel -->
        <div class="row ml-auto mr-auto topCallout">
            <div class="container justify-content-center ">
                <h1 class="text-center text-white">Online Course Management Services</h1>
                <p class="text-center text-white"></p>
                <div class="card-deck">
                    <div class="card mb-3 pb-3">
                        <div class="card-block pl-3 pr-3">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <h5 class="card-title">Teachers and Students</h5>
                            <lead class="card-body">Free with .edu address</lead>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <h4 class="card-title">Signup</h4>
                        </div>
                    </div>
                    <div class="card mb-3 pb-3">
                        <div class="card-block pl-3 pr-3">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <h5 class="card-title">Individuals</h5>
                            <lead class="card-body">19.99 or free with Marketplace courses</lead>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <h4 class="card-title">Signup</h4>
                        </div>
                    </div>
                    <div class="card mb-3 pb-3">
                        <div class="card-block pl-3 pr-3">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <h5 class="card-title">Businesses</h5>
                            <lead class="card-body">$99 a Month</lead>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <h4 class="card-title">Signup</h4>
                        </div>
                    </div>
                    <div class="card mb-3 pb-3">

                        <div class="card-block pl-3 pr-3">
                            <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                            <h5 class="card-title">Enterprise</h5>
                            <lead class="card-body">Call</lead>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <h4 class="card-title">Signup</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@stop