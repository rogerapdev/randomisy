@extends('layouts.default')

@section('content')

    <!-- CONTACT US -->
    <section id="contact" class="section text-center">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="row">

                <!-- CONTACT FORM -->
                <div class="col-md-7 col-md-offset-1 text-left wow fadeInLeft" data-wow-duration="1s">
                    <form action="#" method="post" class="contact-form  wow fadeInLeft">
                        <div class="form-group">
                            <input type="text" required class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea required class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="pull-left send-button button">Send Message</button>
                    </form>
                </div>
                <!-- END CONTACT FORM -->

                <!-- CONTACT INFO -->
                <div class="col-md-3">
                    <div class="contact-info text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>Get In Touch</h3>
                        <p><span><i class="fa fa-map-marker"></i></span> Little Lonsdale St, Talay</p>
                        <p><span><i class="fa fa-phone"></i></span> +123 456 789</p>
                        <p><span><i class="fa fa-envelope-o"></i></span> info@email.com</p>
                    </div>
                    <div class="business-hours text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">
                        <h3>Business Hours</h3>
                        <p>Monday - Friday: 9 am to 20 pm</p>
                        <p>Saturday: 9 am to 17 pm</p>
                        <p>Sunday: day off</p>
                    </div>
                </div>
                <!-- END CONTACT INFO -->

            </div>
        </div>
    </section>
    <!-- END CONTACT US -->

@endsection