@extends('layouts.home')
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Everyone has something to learn. Everyone has something to teach.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Create a learning experience</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Monetize your knowledge.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Analytics</h2>
                <p>We provide information that will help you improve your course content and identify opportunities to
                    help your students. You want to know which students have progressed through your materials, how
                    engaged students are with your content, and if they are prepared for your next class. Learana
                    provides you with the usage data about your content, alerts you when a learner is struggling, and
                    gives you suggestions to improve your course content.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Automation</h2>
                <p>We provide virtual teaching and administrative assistants that help you save time, teach effectively,
                    and make money. Our teaching assistants monitor course content usage and automate processes needed
                    to use online chat and webinars. Our virtual assistants are available through popular messaging
                    platforms such as Slack and Facebook.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Monetization</h2>
                <p>We help you monetize your knowledge and reputation by providing high quality personalized learning
                    experiences for learners. We provide an online marketplace for independent educators such as
                    personal trainers, coaches, and social media influencers. We provide the option to participate in
                    our marketplace, or to use services within your existing business or school.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row ">
            <div class="col-md">
                <h2 class="featurette-heading">Mission<span
                            class="text-muted"> - Make education more affordable.</span></h2>
                <p class="lead">Learana exists to help people achieve their goals through education, assisting both
                    educators and learners. Our mission is to help people create a better future for themselves by
                    supporting those who want to share their knowledge with people eager to learn. We believe the most
                    fun & effective way to learn is within a social group that is led by a supportive and knowledgeable
                    person.
                    (link to What does learna do).
                </p>
            </div>

        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">What does Learana do?. <span
                            class="text-muted">See for yourself.</span></h2>
                <p class="lead">
                    Learana makes education more affordable & effective for everyone. We provide tools to continuously
                    improve the learning process and connect educators with learners through instant messaging and
                    webinars. (Link to chat and webinars)
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Educators</h5>

                        </div>
                        <p class="mb-1">Learana analyzes content usage to help you understand learner engagement. We use
                            this data to provide advice on ways to improve the learning experience. (Link to Analytics).
                            We also use this information to automate common tasks like reminding students to watch
                            videos and read articles that are in your course. Our goal is to give you an extra set of
                            eyes and hands, so you can spend more time connecting with your students. (Link to Automated
                            Teaching Assistant)
                        </p>

                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Learners</h5>

                        </div>
                        <p class="mb-1">Learana helps learners stay accountable to their learning goals, tracks their
                            progress, and helps learners make better decisions. (Link to Accountability in Learning)</p>

                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Everyone</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">We provide our core features to everyone for free, so everyone can benefit from
                            our tools. We make money by providing tools that help you monetize your knowledge. (Link to
                            Monetize Your Knowledge)</p>

                    </a>
                </div>


            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Accountability in Learning</h2>

                    <p class="lead">Frequently learners fail to complete self paced courses that consist of only
                        recorded content and documents. Learners are more more likely to complete online courses when
                        they are led by a knowledgeable and motivated educator. Our platform connects popular tools used
                        to teach online through chat, webinars, and other tools that help you connect with your
                        students. (Link to tools)

                        We create personalized reminders for learners based on their engagement with course content.
                        These reminders help learners make more informed decisions about their education. We help
                        students understand how long it will take them to complete course content and how they compare
                        to others.</p>
            </div>

        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@stop