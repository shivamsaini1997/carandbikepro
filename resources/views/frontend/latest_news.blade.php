@extends('frontend.layouts.main')
@section('main')
<section class="b-pageHeader py-5">
    <div class="container py-5">
        <h1 class=" wow zoomInLeft" data-wow-delay="0.3s">Latest News</h1>

    </div>
</section>
<!--b-pageHeader-->

<div class="b-breadCumbs s-shadow">
    <div class="container wow zoomInUp" data-wow-delay="0.3s">
        <a href="home.html" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="blogTwo.html" class="b-breadCumbs__page m-active">Latest News</a>
    </div>
</div>
<!--b-breadCumbs-->

<div class="b-blog s-shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <aside class="b-blog__aside">
                    <form class="b-blog__aside-search wow zoomInUp" data-wow-delay="0.3s" action="https://pro-theme.com/" method="post">
                        <div>
                            <input type="text" name="search" value="" placeholder="Search" />
                            <button type="submit"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                    <div class="b-blog__aside-categories wow zoomInUp" data-wow-delay="0.3s">
                        <header class="s-lineDownLeft">
                            <h2 class="s-titleDet">Explore Other Cars Brands</h2>
                        </header>
                        <nav>
                            <ul class="b-blog__aside-categories-list">
                                <li><a href="#">Maruti</a></li>
                                <li><a href="#">Hyundai Honda
                                    </a></li>
                                <li class="m-active"><a href="#">Tata</a></li>
                                <li><a href="#">Mahindra</a></li>
                                <li><a href="#">Renault</a></li>
                                <li><a href="#">Maruti</a></li>
                                <li><a href="#">Hyundai Honda
                                    </a></li>
                                <li class="m-active"><a href="#">Tata</a></li>
                                <li><a href="#">Mahindra</a></li>
                                <li><a href="#">Renault</a></li>
                            </ul>
                        </nav>
                    </div>



                </aside>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="b-blog__posts">
                    <div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-xs-8">
                                <header class="b-blog__posts-one-body-head s-lineDownLeft">
                                    <div class="b-blog__posts-one-body-head-notes">
                                        <span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-calendar-o"></span>20th May 2015</span>
                                    </div>
                                    <h2 class="s-titleDet">Redesigned 2016 Nissan Maxima Introduced</h2>
                                </header>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 pull-right">
                                <img class="img-responsive center-block" src="https://pro-theme.com/html/sokolcov/auto-club/media/blog/ferrariBlogTwo.jpg" alt="nissan" />
                            </div>
                            <div class="col-xs-8 pull-right">
                                <div class="b-blog__posts-one-info">
                                    <p>
                                        Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamu sd nunc. Nunc conseq usemdw veld metus imperdiet lacinia. In viverra dolor non justo. Proin molest erat inder rhoncus posuere de nibh quam onsectet uer lectus acwl vulputate ligulad lorem dolor. Donec nunc. Suspendisse potent. Integer blandit massa sit amet condimentum laoreet diam elementum urna sed tincidunt lacus sapien.
                                    </p>
                                    <a href="{{route('latest-news-details')}}" class="btn m-btn m-readMore">Read More<span class="fa fa-angle-right"></span></a>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-xs-8">
                                <header class="b-blog__posts-one-body-head s-lineDownLeft">
                                    <div class="b-blog__posts-one-body-head-notes">
                                        <span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-calendar-o"></span>20th May 2015</span>
                                    </div>
                                    <h2 class="s-titleDet">2015 Ferrari California T</h2>
                                </header>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 pull-right">
                                <img class="img-responsive center-block" src="https://pro-theme.com/html/sokolcov/auto-club/media/blog/ferrariBlogTwo.jpg" alt="ferrari" />
                            </div>
                            <div class="col-xs-8 pull-right">
                                <div class="b-blog__posts-one-info">
                                    <p>
                                        Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamu sd nunc. Nunc conseq usemdw veld metus imperdiet lacinia. In viverra dolor non justo. Proin molest erat inder rhoncus posuere de nibh quam onsectet uer lectus acwl vulputate ligulad lorem dolor. Donec nunc. Suspendisse potent. Integer blandit massa sit amet condimentum laoreet diam elementum urna sed tincidunt lacus sapien.
                                    </p>
                                    <a href="{{route('latest-news-details')}}" class="btn m-btn m-readMore">Read More<span class="fa fa-angle-right"></span></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-xs-8">
                                <header class="b-blog__posts-one-body-head s-lineDownLeft">
                                    <div class="b-blog__posts-one-body-head-notes">
                                        <span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-calendar-o"></span>20th May 2015</span>
                                    </div>
                                    <h2 class="s-titleDet">2015 Ferrari California T</h2>
                                </header>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 pull-right">
                                <img class="img-responsive center-block" src="https://pro-theme.com/html/sokolcov/auto-club/media/blog/ferrariBlogTwo.jpg" alt="ferrari" />
                            </div>
                            <div class="col-xs-8 pull-right">
                                <div class="b-blog__posts-one-info">
                                    <p>
                                        Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamu sd nunc. Nunc conseq usemdw veld metus imperdiet lacinia. In viverra dolor non justo. Proin molest erat inder rhoncus posuere de nibh quam onsectet uer lectus acwl vulputate ligulad lorem dolor. Donec nunc. Suspendisse potent. Integer blandit massa sit amet condimentum laoreet diam elementum urna sed tincidunt lacus sapien.
                                    </p>
                                    <a href="{{route('latest-news-details')}}" class="btn m-btn m-readMore">Read More<span class="fa fa-angle-right"></span></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-xs-8">
                                <header class="b-blog__posts-one-body-head s-lineDownLeft">
                                    <div class="b-blog__posts-one-body-head-notes">
                                        <span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-calendar-o"></span>20th May 2015</span>
                                    </div>
                                    <h2 class="s-titleDet">2015 Ferrari California T</h2>
                                </header>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 pull-right">
                                <img class="img-responsive center-block" src="https://pro-theme.com/html/sokolcov/auto-club/media/blog/ferrariBlogTwo.jpg" alt="ferrari" />
                            </div>
                            <div class="col-xs-8 pull-right">
                                <div class="b-blog__posts-one-info">
                                    <p>
                                        Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamu sd nunc. Nunc conseq usemdw veld metus imperdiet lacinia. In viverra dolor non justo. Proin molest erat inder rhoncus posuere de nibh quam onsectet uer lectus acwl vulputate ligulad lorem dolor. Donec nunc. Suspendisse potent. Integer blandit massa sit amet condimentum laoreet diam elementum urna sed tincidunt lacus sapien.
                                    </p>
                                    <a href="{{route('latest-news-details')}}" class="btn m-btn m-readMore">Read More<span class="fa fa-angle-right"></span></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-blog__posts-one wow zoomInUp" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-xs-8">
                                <header class="b-blog__posts-one-body-head s-lineDownLeft">
                                    <div class="b-blog__posts-one-body-head-notes">
                                        <span class="b-blog__posts-one-body-head-notes-note"><span class="fa fa-calendar-o"></span>20th May 2015</span>
                                    </div>
                                    <h2 class="s-titleDet">2015 Chrysler 300: 7 Things You Need to Know</h2>
                                </header>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 pull-right">
                                <img class="img-responsive center-block" src="https://pro-theme.com/html/sokolcov/auto-club/media/blog/ferrariBlogTwo.jpg" alt="" />
                            </div>
                            <div class="col-xs-8 pull-right">
                                <div class="b-blog__posts-one-info">
                                    <p>
                                        Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat. Aenean vitae quam. Vivamu sd nunc. Nunc conseq usemdw veld metus imperdiet lacinia. In viverra dolor non justo. Proin molest erat inder rhoncus posuere de nibh quam onsectet uer lectus acwl vulputate ligulad lorem dolor. Donec nunc. Suspendisse potent. Integer blandit massa sit amet condimentum laoreet diam elementum urna sed tincidunt lacus sapien.
                                    </p>
                                    <a href="{{route('latest-news-details')}}" class="btn m-btn m-readMore">Read More<span class="fa fa-angle-right"></span></a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="text-center wow zoomInUp" data-wow-delay="0.3s">
                        <div class="b-items__pagination-main text-center">
                            <a href="#" class="m-left"><span class="fa fa-angle-left"></span></a>
                            <span class="m-active"><a href="#">1</a></span>
                            <span><a href="#">2</a></span>
                            <span><a href="#">3</a></span>
                            <span><a href="#">4</a></span>
                            <a href="#" class="m-right"><span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--b-blog-->


@endsection
