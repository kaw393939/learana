@extends('layouts.landing')
@section('content')
    <div class="container">
    @include('includes.jumbotron')

    <!-- Marketing messaging and featurettes
================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <!-- Three columns of text below the carousel -->
    @include('includes.row-col-lg4')
    <!-- /.row -->
        <!-- START THE FEATURETTES -->
    </div>
    <hr class="featurette-divider">
    <div class="container-fluid bg-primary">
        <div class="container">
            @include('includes.featurette1')
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="container">
        @include('includes.featurette2')
    </div>
    <hr class="featurette-divider">

    <div class="container-fluid bg-primary ">
        <div class="container">
            @include('includes.featurette3')
        </div>
    </div>
    <hr class="featurette-divider">

    <div class="container">
        @include('includes.featurette4')
    </div>


    <hr class="featurette-divider">
    <div class="container-fluid bg-primary">
        <div class="container">
            @include('includes.featurette5')
        </div>
    </div>
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->

@stop