<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>details</title>
        <!--=============== Bootstrap css ===============-->
        <link href=" {{ asset('website/css/bootstrap.min.css')}}" rel="stylesheet">
        <!--=============== Animate css ===============-->
        <link href=" {{ asset('website/css/animate.css')}}" rel="stylesheet">
        <!--=============== fontAwesome css ===============-->
        <link href=" {{ asset('website/css/font-awesome.min.css')}}" rel="stylesheet">
        <!--=============== google fonts css ===============-->
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Indie+Flower|Kaushan+Script|PT+Sans|Pacifico|Raleway" rel="stylesheet">
        <!--=============== gallery css ===============-->
        <link href=" {{ asset('website/css/gallery.css')}}" rel="stylesheet">
        <!--=============== bxslider css ===============-->
        <link href=" {{ asset('website/css/jquery.bxslider.min.css')}}" rel="stylesheet">
        <!--=============== style css ===============-->
        <link href=" {{ asset('website/css/style.css')}}" rel="stylesheet">
        <!--=============== RTL css ===============-->
<!--        <link href="css/bootstrap-rtl.min.css" rel="stylesheet">-->
    </head>
    <body>
      
      @include('website.header')
        <!--============ End banner ============-->
        
        <!--============ Start pro_slider ============-->
        <section class="slide_pro">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 col-xs-12">
                        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-outer'>
                                <!-- me art lab slider -->
                                <div class='carousel-inner '>
                                    <div class='item active'>
                                        <img src="{{asset($product->image) }}"
                                              id="zoom_05"  data-zoom-image="{{asset($product->image) }}" />
                                    </div>

                                    <div class='item'  id="zoom_05">
                                        <img src="{{asset($product->image) }}"
                                              
                                             data-zoom-image="{{asset($product->image) }}" />
                                    </div>

                                    <div class='item'>
                                        <img src="{{asset($product->image) }}"
                                            data-zoom-image="{{asset($product->image) }}" />
                                    </div>

                                    <div class='item'>
                                        <img src="{{asset($product->image) }}"
                                              
                                             data-zoom-image="{{asset($product->image) }}" id="zoom_05"/>
                                    </div>

                                    <div class='item'>
                                        <img src="{{asset($product->image) }}"
                                              
                                             data-zoom-image="{{asset($product->image) }}" id="zoom_05"/>
                                    </div>

                                    <div class='item'>
                                        <img src="{{asset($product->image) }}"
                                              
                                            data-zoom-image="{{asset($product->image) }}" id="zoom_05"/>
                                    </div>

                                    <div class='item'>
                                        <img src="{{asset($product->image) }}"
                                              
                                             data-zoom-image="{{asset($product->image) }}" id="zoom_05"/>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- thumb -->
                            <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                <li data-target='#carousel-custom' data-slide-to='0' class='active'>
                                    <img src="{{asset($product->image) }}"   />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='1'>
                                    <img src="{{asset($product->image) }}"   />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='2'>
                                    <img src="{{asset($product->image) }}"   />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='3'>
                                    <img src="{{asset($product->image) }}"   />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='4'>
                                    <img src="{{asset($product->image) }}"  />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='5'>
                                    <img src="{{asset($product->image) }}"   />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='6'>
                                    <img src="{{asset($product->image) }}"   />
                                </li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="info">
                            <ul class="list-unstyled">
                                <li>
                                    <h4>{{ "Code".$product->code}}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </section>
        <!--============ End pro_slider ============-->
        
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
        <script src=" {{ asset('website/js/jquery-3.2.1.min.js')}}"></script>
        <!--========== bootstrap js ==========-->
        <script src=" {{ asset('website/js/bootstrap.min.js')}}"></script>
        <!--========== gallery js ==========-->
        <script src=" {{ asset('website/js/gallery.js')}}"></script>
        <!--========== bxslider js ==========-->
        <script src=" {{ asset('website/js/jquery.bxslider.min.js')}}"></script>
        <!--========== wow js ==========-->
        <script src=" {{ asset('website/js/wow.min.js')}}"></script>
        <!--========== slider images js ==========-->
<!--
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
        <script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
-->
        <!--========== custom js ==========-->
        <script src="{{ asset('website/js/custom.js')}}"></script>
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