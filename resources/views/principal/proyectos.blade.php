@extends('welcome')
@section('contenido')
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/Portfolio.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Proyectos</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="/"><i class="fa fa-home"></i> Inicio</a></li>
                <li>Proyectos</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

            <!-- PAGINATION START -->
            <div class="filter-wrap p-tb15">
                <ul class="masonry-filter link-style  text-uppercase">
                    <li class="active"><a data-filter="*" href="#">Todos</a></li>
                    <li><a data-filter=".cat-1" href="#">Casa</a></li>
                    <li><a data-filter=".cat-2" href="#">Edificios</a></li>
                    <li><a data-filter=".cat-3" href="#">Oficinas</a></li>
                    <li><a data-filter=".cat-4" href="#">Jardines</a></li>
                    <li><a data-filter=".cat-5" href="#">Interiores</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->

            <!-- GALLERY START -->
            <div class="row">
                <div class="portfolio-wrap mfp-gallery no-col-gap" style="position: relative; height: 4541.72px;">

                    <!-- COLUMNS 1 -->
                    <div class="masonry-item cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 0px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic2.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">House</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 504px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic3.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Building</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                               
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="masonry-item cat-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 1009px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic4.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Office</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="masonry-item cat-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 1513px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic5.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Garden</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 5 -->
                    <div class="masonry-item cat-5 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 2018px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic6.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Interior</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                               
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 6 -->
                    <div class="masonry-item cat-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 2523px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic7.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Office</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 7 -->
                    <div class="masonry-item cat-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 3027px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic8.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Building</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                               
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 8 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 3532px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic1.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">House</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                               
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 9 -->
                    <div class="masonry-item cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc" style="position: absolute; left: 0px; top: 4037px;">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="images/portfolio/pic2.jpg" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Office</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- GALLERY END -->

        </div>
    </div>
    <!-- SECTION CONTENT END  -->

</div>
@stop
