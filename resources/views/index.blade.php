<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SOURCE</title>
        <!--=============== Bootstrap css ===============-->
        <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">
        <!--=============== Animate css ===============-->
        <link href="{{ asset('website/css/animate.css') }}" rel="stylesheet">
        <!--=============== fontAwesome css ===============-->
        <link href="{{ asset('website/css/font-awesome.min.css') }}" rel="stylesheet">
        <!--=============== google fonts css ===============-->
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Indie+Flower|Kaushan+Script|PT+Sans|Pacifico|Raleway" rel="stylesheet">
        <!--=============== gallery css ===============-->
        <link href="{{ asset('website/css/gallery.css') }}" rel="stylesheet">
        <!--=============== bxslider css ===============-->
        <link href="{{ asset('website/css/jquery.bxslider.min.css') }}" rel="stylesheet">
        <!--=============== style css ===============-->
        <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
        <!--=============== RTL css ===============-->
<!--        <link href=" website/css/bootstrap-rtl.min.css" rel="stylesheet">-->
    </head>
    <body>
      
        @include('website.header')
        <!--============ End nav1 ============-->
        
        <!--============ Start main_slider ============-->
        <div class="homeSlider" id="home">
            <div class="container">
            
                <ul class="bxslider container">
                @for($i = 0 ; $i < count($sliders);$i++)
                    <li class="{{Terbilang::make($i+1)}}">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <h2 class="wow fadeInUp">
                                    {{$sliders[$i]->title}}
                                    <img src="{{ asset('website/imgs/slides/line.png') }}" alt="line">
                                </h2>
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <a href="#"><img class="wow fadeInRight" src="{{ asset($sliders[$i]->image) }}" alt="slide-{{$i+1}}"
                                 data-wow-duration="2s"> </a>
                            </div>
                        </div>
                    </li>
                 @endfor   

                </ul>
                
            </div>
        </div>    
        <!--============ End main_slider ============-->
      
        <!--============ Start we ============-->
        <section class="we">
            <div class="container-fluid"><!--Start Container-->
                <div class="row"><!--Start row-->
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="details">
                            <div class="cover">
                                <h2>we are</h2>
                            </div>
                            <p>  {{ trans('DataLang.About_data') }}  </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="we_imgs">
                            <div class="cover">
                                <ul class="list-unstyld list-inline">
                                    <li>
                                        <img src="{{ asset('website/imgs/about/shoe.png') }}" alt="shoes">
                                    </li>
                                    <li>
                                        <img src="{{ asset('website/imgs/about/bag.png') }}" alt="bag">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div><!--End row-->
            </div><!--End Contaiber-->
        </section>
        <!--============ End we ============-->
        
        <!--============ Start message ============-->
        <section class="message">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->
                    
                    <div class="col-md-8 col-xs-12">
                        <p>increase your beauty look with us</p>
                    </div>
                    
                    <div class="col-md-4 col-xs-12">
                        <div class="visit">
                            <img class="img-responsive" src="{{ asset('website/imgs/heart.png') }}" alt="heart">
                            <a href="#" target="_blank">visit us</a>
                        </div>
                    </div>
                    
                </div><!--End row-->
            </div><!--End container-->
        </section>
        <!--============ End message ============-->
        
        <!--============ Start store ============-->
        <section class="store">
            <div class="container-fluid"><!--Start Container-fluid-->
                <div class="row"><!--Start row-->
                    <div class="col-xs-12">
                        <div class="cover">
                            <h2>New Arrival</h2>
                        </div>
                    </div>
                </div><!--End row-->
            </div><!--Start Container-fluid-->
            
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->
                    @foreach($products as $product)
                    <div class="col-md-3 col-xs-12">
                        <div class="single_pro">
                            <ul class="frames list-unstyled">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <div class="store_img">
                                <img class="img-responsive" src="{{ asset($product->image) }}" alt="1">
                            </div>
                            <span class="code">code | {{$product->code}}</span>
                            <span class="price">{{$product->price }} LE</span>
                            <a href="<?php echo url('/product/'); 	?>/{{ $product->id }}" target="_blank">
                                <i class="fa fa-link fa-fw"></i>
                            </a>
                        </div>
                        </div>
                        @endforeach

                       
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--============ End store ============-->
        
        <!--============ Start footer ============-->
        @include('website.footer')
        <!--============ End footer ============-->
        
        <!--============ Start rights ============-->
        <section class="rights text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>
                            all rights &copy; reserved to SOURCE company... designed by <a href="https://www.be4em.com/" target="_blank">be4em</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--============ End rights ============-->
        
        <!--============ Start side_contacts ============-->
        
        <!--============ End side_contacts ============-->
       
        
        <!--========== jQuery library ==========-->
        <script src="{{ asset('website/js/jquery-3.2.1.min.js') }}"></script>
        <!--========== bootstrap js ==========-->
        <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
        <!--========== gallery js ==========-->
        <script src="{{ asset('website/js/gallery.js') }}"></script>
        <!--========== bxslider js ==========-->
        <script src="{{ asset('website/js/jquery.bxslider.min.js') }}"></script>
        <!--========== wow js ==========-->
        <script src="{{ asset('website/js/wow.min.js') }}"></script>
        <!--========== slider images js ==========-->
<!--
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
        <script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
-->
        <!--========== custom js ==========-->
        <script src="{{ asset('website/js/custom.js') }}"></script>
        <script>
//            $(document).ready(function(){
//                 new WOW().init();
//            });
//            new Vue({
//                el: '#carousel3d',
//                    data: {
//                    slides: 7
//                    },
//                    components: {
//                    'carousel-3d': Carousel3d.Carousel3d,
//                    'slide': Carousel3d.Slide
//                }
//                
//            })
        </script>
    </body>
</html>