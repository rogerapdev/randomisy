@extends('layouts.default')

@section('content')
    <!-- HOME -->
    <div id="home-area">
        <div class="overlay">
            <div class="container">
                <div class="row">

                    <!-- HOME CONTENT -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="home-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                            <h1>Gerador GRATUITO Rápido e Fácil</h1>
                            <p>Nós <strong>geramos</strong> para você dados de uso geral de forma rápida, segura e totalmente gratuito. Utilize nossos serviços.</p>
                            <a class="button home" href="#services">Serviços</a>
                        </div>
                    </div>
                    <!-- END HOME CONTENT -->

                    <!-- HOME FEATURE IMAGE -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="home-feature pull-right center-block wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
                            <img class="img-responsive" src="img/numbers.jpg" alt="">
                        </div>
                    </div>
                    <!-- END HOME FEATURE IMAGE -->

                </div>
            </div>
        </div>
    </div>
    <!-- END HOME -->

    <!-- SERVICES -->
    <section id="services" class="section text-center">
        <div class="container">
            <h2 class="section-title wow fadeIn">Serviços</h2>
            <div class="row">


                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-title">
                            <i class="fa fa-ticket fa-3x"></i>
                        </div>
                        <div class="service-content">
                            <h3>Loterias</h3>
                            <p>Gerador de números para jogos de loteria.</p>
                            <a href="lotteries">Gerar</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->

                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="service-title">
                            <i class="fa fa-unlock fa-3x"></i>
                        </div>
                        <div class="service-content">
                            <h3>Hash/Senhas</h3>
                            <p>Gerador de senhas ou hash</p>
                            <a href="#">Gerar</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->

                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="service-title">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <div class="service-content">
                            <h3>Nomes</h3>
                            <p>Gerador automático de nomes.</p>
                            <a href="#">Gerar</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->


            </div>
            <!--.row-->
        </div>
        <!--/.container -->
    </section>
    <!-- END SERVICES -->
@endsection