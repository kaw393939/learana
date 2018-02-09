@extends('layouts.landing')
@section('content')
    <div class="jumbotron whyJumbotron pb-0 pt-md-4 py-lg-6">

        <h1 class="alt-h1 text-center mt-md-4 mb-3 mx-2 lh-condensed-ultra">Why Learana?</h1>

        <div class="container-xl MarketplaceFeature-wrap pt-2 pb-4 pb-lg-0 mb-lg-4 d-flex">


            <div class="MarketplaceFeature col-3 flex-auto px-2 anim-fade-in">
                <a href="#" class="no-underline MarketplaceFeature-link">
                    <div class="p-4 text-center rounded-1 box-shadow-medium mb-3 js-hero-listing-container"
                         style="background-image:url('https://marketplace-images.githubusercontent.com/703/b8de6004-e40e-11e7-9505-4588e169dd67?auto=webp&amp;format=jpeg&amp;width=600'); background-size: cover; background-position: center top;">
                        <div class="CircleBadge CircleBadge--medium CircleBadge--feature mx-auto js-hero-listing-bgcolor"
                             style="background-color: #ffffff;">
                            <img src="//placehold.it/500x200" alt="" class="CircleBadge-icon">
                        </div>
                        <h3 class="h2 no-wrap js-hero-listing-name text-white">Zube</h3>
                    </div>
                    <p class="MarketplaceFeature-text text-white text-center px-3 lh-condensed js-hero-listing-description">
                        Agile project management that lets the entire team work with developers on GitHub</p>
                </a>
            </div>


            <div class="MarketplaceFeature col-3 flex-auto px-2 anim-fade-in">
                <a href="#" class="no-underline MarketplaceFeature-link">
                    <div class="p-4 text-center rounded-1 box-shadow-medium mb-3 js-hero-listing-container"
                         style="background-image:url('https://marketplace-images.githubusercontent.com/703/187cf8e6-e40e-11e7-95de-9259ba946191?auto=webp&amp;format=jpeg&amp;width=600'); background-size: cover; background-position: center top;">
                        <div class="CircleBadge CircleBadge--medium CircleBadge--feature mx-auto js-hero-listing-bgcolor"
                             style="background-color: #FFF;">
                            <img src="//placehold.it/500x200" alt="" class="CircleBadge-icon">
                        </div>
                        <h3 class="h2 no-wrap js-hero-listing-name text-gray-dark">codebeat</h3>
                    </div>
                    <p class="MarketplaceFeature-text text-white text-center px-3 lh-condensed js-hero-listing-description">
                        Code review expert on demand. Automated for mobile and web</p>
                </a>
            </div>


            <div class="MarketplaceFeature col-3 flex-auto px-2 anim-fade-in">
                <a href="#" class="no-underline MarketplaceFeature-link">
                    <div class="p-4 text-center rounded-1 box-shadow-medium mb-3 js-hero-listing-container"
                         style="background-image:url('https://marketplace-images.githubusercontent.com/703/f2a4458e-e40d-11e7-9d0d-7a153eb82100?auto=webp&amp;format=jpeg&amp;width=600'); background-size: cover; background-position: center top;">
                        <div class="CircleBadge CircleBadge--medium CircleBadge--feature mx-auto js-hero-listing-bgcolor"
                             style="background-color: #ffffff;">
                            <img src="//placehold.it/500x200" alt="" class="CircleBadge-icon">
                        </div>
                        <h3 class="h2 no-wrap js-hero-listing-name text-white">BackHub</h3>
                    </div>
                    <p class="MarketplaceFeature-text text-white text-center px-3 lh-condensed js-hero-listing-description">
                        Create daily recurring backups of your repositories</p>
                </a>
            </div>


            <div class="MarketplaceFeature col-3 flex-auto px-2 anim-fade-in">
                <a href="#" class="no-underline MarketplaceFeature-link">
                    <div class="p-4 text-center rounded-1 box-shadow-medium mb-3 js-hero-listing-container"
                         style="background-image:url('https://marketplace-images.githubusercontent.com/703/b18a51b4-e40e-11e7-8c7b-6aaebd6fb62d?auto=webp&amp;format=jpeg&amp;width=600'); background-size: cover; background-position: center top;">
                        <div class="CircleBadge CircleBadge--medium CircleBadge--feature mx-auto js-hero-listing-bgcolor"
                             style="background-color: #ffffff;">
                            <img src="//placehold.it/500x200" alt="" class="CircleBadge-icon">
                        </div>
                        <h3 class="h2 no-wrap js-hero-listing-name text-white">WakaTime</h3>
                    </div>
                    <p class="MarketplaceFeature-text text-white text-center px-3 lh-condensed js-hero-listing-description">
                        Metrics, goals, and time tracking automatically generated from your programming activity.</p>
                </a>
            </div>

        </div>
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