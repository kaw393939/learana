@extends('layouts.landing')
@section('content')
    <div class="jumbotron MarketplaceJumbotron pb-0 pt-md-4 py-lg-6">

        <h1 class="alt-h1 text-center text-white mt-md-4 mb-3 mx-2 lh-condensed-ultra">Discover Teachers and
            Courses</h1>
        <p class="alt-lead mb-5 mx-2 text-center text-white lh-condensed">Achieve your Goals</p>
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

    <div class="container">

        <div>
            <div class="container-lg p-responsive">
                <div class="d-md-flex mt-md-6">
                    <nav class="col-md-3 pl-3 pl-md-0 pr-3 pr-md-5 pt-3 pt-md-2 pb-md-6 ml-n3 mr-n3 ml-sm-n6 mr-sm-n6 ml-md-0 mr-md-0 MarketplaceSideNav">
                        <div class="d-none d-md-block">
                            <h4 class="mb-2">
                                Search
                                Marketplace
                            </h4>
                            <!-- '"` --><!-- </textarea></xmp> -->
                            <form accept-charset="UTF-8" action="https://github.com/marketplace" class="mb-4"
                                  method="get">
                                <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
                                                                                      value="✓"></div>
                                <input value="" type="text" name="query" placeholder="Name or description"
                                       aria-label="Search by name, or description"
                                       class="form-control input-contrast width-full">
                            </form>
                        </div>
                        <div class="border border-gray-dark pt-4 pb-2 my-lg-4 my-md-4 text-center rounded-1">
                            <img src="https://assets-cdn.github.com/images/modules/marketplace/mpft-icon.svg"
                                 class="mb-2" alt="">
                            <h3 class="h5 lh-condensed mb-1">Now offering free trials</h3>
                            <p class="mb-2 lh-condensed">Free for 14 days</p>
                            <p><a href="/marketplace/free-trials" class="btn btn-outline px-lg-6 mt-2">View apps</a></p>
                        </div>
                        <h4 class="d-none d-md-block mb-md-1">Categories</h4>
                        <ul class="d-md-none py-2 mb-4 list-style-none d-flex overflow-auto" aria-hidden="">
                            <li>
                                <a href="https://github.com/marketplace/category/code-quality"
                                   class="filter-item py-1 mb-0 ">
                                    Code quality
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/code-review"
                                   class="filter-item py-1 mb-0 ">
                                    Code review
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/continuous-integration"
                                   class="filter-item py-1 mb-0 ">
                                    Continuous integration
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/dependency-management"
                                   class="filter-item py-1 mb-0 ">
                                    Dependency management
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/deployment"
                                   class="filter-item py-1 mb-0 ">
                                    Deployment
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/localization"
                                   class="filter-item py-1 mb-0 ">
                                    Localization
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/monitoring"
                                   class="filter-item py-1 mb-0 ">
                                    Monitoring
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/project-management"
                                   class="filter-item py-1 mb-0 ">
                                    Project management
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/publishing"
                                   class="filter-item py-1 mb-0 ">
                                    Publishing
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/recently-added"
                                   class="filter-item py-1 mb-0 ">
                                    Recently added
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/security"
                                   class="filter-item py-1 mb-0 ">
                                    Security
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/support"
                                   class="filter-item py-1 mb-0 ">
                                    Support
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/testing"
                                   class="filter-item py-1 mb-0 ">
                                    Testing
                                </a>
                            </li>
                        </ul>
                        <ul class="list-style-none d-none d-md-block" style="margin-left: -10px;">
                            <li>
                                <a href="https://github.com/marketplace/category/code-quality" class="filter-item py-1">
                                    Code quality
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/code-review" class="filter-item py-1">
                                    Code review
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/continuous-integration"
                                   class="filter-item py-1">
                                    Continuous integration
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/dependency-management"
                                   class="filter-item py-1">
                                    Dependency management
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/deployment" class="filter-item py-1">
                                    Deployment
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/localization" class="filter-item py-1">
                                    Localization
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/monitoring" class="filter-item py-1">
                                    Monitoring
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/project-management"
                                   class="filter-item py-1">
                                    Project management
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/publishing" class="filter-item py-1">
                                    Publishing
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/recently-added"
                                   class="filter-item py-1">
                                    Recently added
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/security" class="filter-item py-1">
                                    Security
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/support" class="filter-item py-1">
                                    Support
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/marketplace/category/testing" class="filter-item py-1">
                                    Testing
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="col-md-9 pl-md-5 mt-1 mb-4">

                        <div class="mb-6 mb-md-0">
                            <a href="/marketplace/free-trials"
                               class="btn btn-outline f6 mt-2 float-right d-none d-md-inline-block">View all</a>
                            <h2 class="h2">Apps with free trials</h2>
                            <p class="f3-light mb-4 text-gray">Discover new ways to build better—now with a free 14-day
                                trial.</p>
                            <div class="d-md-flex flex-wrap mb-3">

                                <a href="/marketplace/zube" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars3.githubusercontent.com/ml/55?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Zube</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Agile project management that lets
                                            the entire team work with developers on GitHub</p>
                                    </div>
                                </a>

                                <a href="/marketplace/waffle" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #FFFFFF;">
                                            <img src="https://avatars1.githubusercontent.com/ml/22?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Waffle</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Automated project management
                                            powered by your GitHub issues and pull requests</p>
                                    </div>
                                </a>

                                <a href="/marketplace/better-code-hub" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #2a568f;">
                                            <img src="https://avatars0.githubusercontent.com/ml/246?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Better Code Hub</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Write better code. With a
                                            Definition of Done</p>
                                    </div>
                                </a>

                                <a href="/marketplace/poeditor" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/216?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">POEditor</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Manage your software localization
                                            collaboratively</p>
                                    </div>
                                </a>

                                <a href="/marketplace/sideci" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/475?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">SideCI</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Static code analysis to uncover
                                            anti-patterns, bad API use, and more</p>
                                    </div>
                                </a>

                                <a href="/marketplace/myget" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars0.githubusercontent.com/ml/469?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">MyGet</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Create hosted NuGet, npm, Bower,
                                            Maven, PHP Composer and VSIX feeds</p>
                                    </div>
                                </a>

                                <a href="/marketplace/dependabot" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars3.githubusercontent.com/ml/211?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Dependabot</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Automated dependency updates for
                                            Ruby, JavaScript, Python, PHP, Elixir and Java</p>
                                    </div>
                                </a>

                                <a href="/marketplace/greenkeeper" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #FFFFFF;">
                                            <img src="https://avatars1.githubusercontent.com/ml/405?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Greenkeeper</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Real-time notifications about
                                            updates and changes for JavaScript dependencies</p>
                                    </div>
                                </a>

                            </div>
                            <a href="/marketplace/free-trials"
                               class="btn btn-outline btn-block f6 mt-2 mb-4 float-right d-md-none">View all</a>
                        </div>


                        <div class="mb-6 mb-md-0">
                            <h2 class="h2">
                                Recently added
                            </h2>

                            <p class="f3-light mb-4 text-gray">
                                The latest apps that help you and your team build software better, together.
                            </p>

                            <div class="d-md-flex flex-wrap mb-3">

                                <a href="/marketplace/sideci" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/475?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">SideCI</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Static code analysis to uncover
                                            anti-patterns, bad API use, and more</p>
                                    </div>
                                </a>

                                <a href="/marketplace/cloud-66-skycap" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/491?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Cloud 66 Skycap</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Skycap is a container native CI/CD
                                            tool</p>
                                    </div>
                                </a>

                                <a href="/marketplace/issue-sh" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #48CDED;">
                                            <img src="https://avatars3.githubusercontent.com/ml/493?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">issue.sh</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Issue management inside GitHub,
                                            without access to code</p>
                                    </div>
                                </a>

                                <a href="/marketplace/cloud-66-for-rails" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/527?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Cloud 66 for Rails </h3>
                                        <p class="text-gray-light lh-condensed mb-0">Build, deploy, and maintain your
                                            Rails apps on any cloud or server</p>
                                    </div>
                                </a>

                                <a href="/marketplace/pageclip" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars0.githubusercontent.com/ml/614?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Pageclip</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Save information from your website
                                            via forms or front-end JavaScript</p>
                                    </div>
                                </a>

                                <a href="/marketplace/testquality" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars3.githubusercontent.com/ml/671?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">TestQuality</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Modern, powerful, test plan
                                            management</p>
                                    </div>
                                </a>

                                <a href="/marketplace/backhub" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/706?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">BackHub</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Create daily recurring backups of
                                            your repositories</p>
                                    </div>
                                </a>

                            </div>

                        </div>


                        <div class="mb-6 mb-md-0">
                            <h2 class="h2">
                                Code quality
                            </h2>

                            <p class="f3-light mb-4 text-gray">
                                Automate your code review with style, quality, security, and test‑coverage checks when
                                you need them.


                            </p>

                            <div class="d-md-flex flex-wrap mb-3">

                                <a href="/marketplace/codecov" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #fc2b6a;">
                                            <img src="https://avatars0.githubusercontent.com/ml/30?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Codecov</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Code coverage done right.® Group,
                                            merge, archive and compare coverage reports</p>
                                    </div>
                                </a>

                                <a href="/marketplace/codacy" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #242C33;">
                                            <img src="https://avatars0.githubusercontent.com/ml/43?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Codacy</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Automated code reviews to help
                                            developers ship better software, faster</p>
                                    </div>
                                </a>

                                <a href="/marketplace/codebeat" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #FFF;">
                                            <img src="https://avatars2.githubusercontent.com/ml/89?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">codebeat</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Code review expert on demand.
                                            Automated for mobile and web</p>
                                    </div>
                                </a>

                                <a href="/marketplace/styleci" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #E44041;">
                                            <img src="https://avatars1.githubusercontent.com/ml/208?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">StyleCI</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Automatically fix the code style of
                                            your PHP, Python, JavaScript and CSS code</p>
                                    </div>
                                </a>

                                <a href="/marketplace/better-code-hub" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #2a568f;">
                                            <img src="https://avatars0.githubusercontent.com/ml/246?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Better Code Hub</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Write better code. With a
                                            Definition of Done</p>
                                    </div>
                                </a>

                                <a href="/marketplace/code-climate" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #45D298;">
                                            <img src="https://avatars3.githubusercontent.com/ml/283?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Code Climate</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Automated code review for technical
                                            debt and test coverage</p>
                                    </div>
                                </a>

                                <a href="/marketplace/coveralls" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/318?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Coveralls</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Ensure that new code is fully
                                            covered, and see coverage trends emerge. Works with any CI service</p>
                                    </div>
                                </a>

                                <a href="/marketplace/sideci" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/475?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">SideCI</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Static code analysis to uncover
                                            anti-patterns, bad API use, and more</p>
                                    </div>
                                </a>

                            </div>

                        </div>


                        <div class="mb-6 mb-md-0">
                            <h2 class="h2">
                                Continuous integration
                            </h2>

                            <p class="f3-light mb-4 text-gray">
                                Automatically build and test your code as you push it to GitHub, preventing bugs from
                                being deployed to production.
                            </p>

                            <div class="d-md-flex flex-wrap mb-3">

                                <a href="/marketplace/travis-ci" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #EFF9F9;">
                                            <img src="https://avatars0.githubusercontent.com/ml/4?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Travis CI</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Test and deploy with confidence</p>
                                    </div>
                                </a>

                                <a href="/marketplace/circleci" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars3.githubusercontent.com/ml/7?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">CircleCI</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Automatically build, test, and
                                            deploy your project in minutes</p>
                                    </div>
                                </a>

                                <a href="/marketplace/appveyor" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #FFFFFF;">
                                            <img src="https://avatars3.githubusercontent.com/ml/11?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">AppVeyor</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Cloud service for building, testing
                                            and deploying Windows apps</p>
                                    </div>
                                </a>

                                <a href="/marketplace/percy" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #FFFFFF;">
                                            <img src="https://avatars1.githubusercontent.com/ml/92?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Percy</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Continuous visual testing and
                                            reviews for web apps</p>
                                    </div>
                                </a>

                                <a href="/marketplace/buddy" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #1A67FD;">
                                            <img src="https://avatars3.githubusercontent.com/ml/248?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Buddy</h3>
                                        <p class="text-gray-light lh-condensed mb-0">One-click delivery automation for
                                            Web Developers</p>
                                    </div>
                                </a>

                                <a href="/marketplace/semaphore" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #fff;">
                                            <img src="https://avatars0.githubusercontent.com/ml/264?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Semaphore</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Test and deploy at the push of a
                                            button</p>
                                    </div>
                                </a>

                                <a href="/marketplace/cloud-66-skycap" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/491?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Cloud 66 Skycap</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Skycap is a container native CI/CD
                                            tool</p>
                                    </div>
                                </a>

                            </div>

                        </div>


                        <div class="mb-6 mb-md-0">
                            <h2 class="h2">
                                Monitoring
                            </h2>

                            <p class="f3-light mb-4 text-gray">
                                Monitor the impact of your code changes. Measure performance, track errors, and analyze
                                your application.
                            </p>

                            <div class="d-md-flex flex-wrap mb-3">

                                <a href="/marketplace/sentry" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #e03e2f;">
                                            <img src="https://avatars3.githubusercontent.com/ml/67?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Sentry</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Real-time, cross-platform crash
                                            reporting and error logging</p>
                                    </div>
                                </a>

                                <a href="/marketplace/blackfire-io" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #323232;">
                                            <img src="https://avatars3.githubusercontent.com/ml/72?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Blackfire.io</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Fire up your PHP Apps
                                            Performance</p>
                                    </div>
                                </a>

                                <a href="/marketplace/rollbar" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #365a7b;">
                                            <img src="https://avatars0.githubusercontent.com/ml/195?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Rollbar</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Real-time, full-stack error
                                            monitoring and debugging for developers</p>
                                    </div>
                                </a>

                                <a href="/marketplace/airbrake" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars3.githubusercontent.com/ml/226?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Airbrake</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Real time error monitoring and
                                            alerts</p>
                                    </div>
                                </a>

                                <a href="/marketplace/logrocket" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #764abc;">
                                            <img src="https://avatars3.githubusercontent.com/ml/356?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">LogRocket</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Record videos of user sessions with
                                            enhanced logging information</p>
                                    </div>
                                </a>

                                <a href="/marketplace/moesif-api-insights" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #FF4F00;">
                                            <img src="https://avatars3.githubusercontent.com/ml/602?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Moesif API Insights</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Easy debugging and analytics for
                                            REST APIs. Live bug free</p>
                                    </div>
                                </a>

                            </div>

                        </div>


                        <div class="mb-6 mb-md-0">
                            <h2 class="h2">
                                Project management
                            </h2>

                            <p class="f3-light mb-4 text-gray">
                                Organize, manage, and track your project with tools that build on top of issues and pull
                                requests.
                            </p>

                            <div class="d-md-flex flex-wrap mb-3">

                                <a href="/marketplace/zenhub" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #5E5FB9;">
                                            <img src="https://avatars0.githubusercontent.com/ml/9?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">ZenHub</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Agile Task Boards, Epics, Estimates
                                            and Reports, all within GitHub's UI</p>
                                    </div>
                                </a>

                                <a href="/marketplace/waffle" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #FFFFFF;">
                                            <img src="https://avatars1.githubusercontent.com/ml/22?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Waffle</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Automated project management
                                            powered by your GitHub issues and pull requests</p>
                                    </div>
                                </a>

                                <a href="/marketplace/codetree" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #6FBD3B;">
                                            <img src="https://avatars0.githubusercontent.com/ml/25?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Codetree</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Lightweight project management for
                                            GitHub issues</p>
                                    </div>
                                </a>

                                <a href="/marketplace/zube" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars3.githubusercontent.com/ml/55?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">Zube</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Agile project management that lets
                                            the entire team work with developers on GitHub</p>
                                    </div>
                                </a>

                                <a href="/marketplace/issue-sh" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #48CDED;">
                                            <img src="https://avatars3.githubusercontent.com/ml/493?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">issue.sh</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Issue management inside GitHub,
                                            without access to code</p>
                                    </div>
                                </a>

                                <a href="/marketplace/deepaffects" class="col-md-6 mb-4 d-flex no-underline">
                                    <div>
                                        <div class="CircleBadge CircleBadge--small" style="background-color: #ffffff;">
                                            <img src="https://avatars2.githubusercontent.com/ml/811?s=62&amp;v=4" alt=""
                                                 class="CircleBadge-icon">
                                        </div>
                                    </div>
                                    <div class="px-3 pt-1">
                                        <h3 class="h4 lh-condensed">DeepAffects</h3>
                                        <p class="text-gray-light lh-condensed mb-0">Metrics for Team Dynamics and
                                            Productivity</p>
                                    </div>
                                </a>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="border-top border-bottom px-2 py-5 py-md-6 px-md-4 px-lg-6 d-md-flex">
                    <div class="d-md-flex text-center text-md-left pr-md-6 col-md-6">
                        <div class="mb-3 mb-md-0"><img
                                    src="https://assets-cdn.github.com/images/modules/marketplace/icon-marketplace.svg"
                                    alt=""></div>
                        <h2 class="alt-h2 mb-3 mb-md-0 ml-md-4 f2 text-normal lh-condensed">List your app on GitHub&nbsp;Marketplace</h2>
                    </div>
                    <div class="d-md-flex clearfix text-center text-md-left pl-md-6">
                        <div class="col-sm-6 pr-sm-3 mb-3 mb-sm-0 float-sm-left">
                            <dl class="mt-1 mb-0">
                                <dt><a href="https://developer.github.com/apps" class="lh-condensed d-block mb-1">Get
                                        started with apps</a></dt>
                                <dd class="text-gray-light text-small">Build the tools your workflow needs with GitHub
                                    GraphQL and REST APIs.
                                </dd>
                            </dl>
                        </div>
                        <div class="col-sm-6 pl-sm-3 float-sm-left">
                            <dl class="mt-1 mb-0">
                                <dt><a href="/marketplace/new" class="lh-condensed d-block mb-1">Submit your app for
                                        review</a></dt>
                                <dd class="text-gray-light text-small">Select a registered OAuth or GitHub app to share
                                    with millions of developers.
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop