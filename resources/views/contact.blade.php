<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>contact us</title>
        <!--=============== Bootstrap css ===============-->
        <link href="{{ asset('website/css/bootstrap.min.css')}}" rel="stylesheet">
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
      
        <!--============ Start nav ============-->
        @include('website.header')
        <!--============ End nav ============-->
        
        <!--============ Start banner ============-->
        <section class="banner banner-contact">
            <div class="overlay">
                <div class="container"><!--Start Container-->
                    <div class="row"><!--Start row-->
                        
                        <div class="col-xs-12">
                            <h2>contact us</h2>
                            <p>
                                we are so pleased to hear you any time...
                            </p>
                        </div>
                        
                    </div><!--End row-->
                </div><!--End Container-->
            </div>
        </section>
        <!--============ End banner ============-->
        
        <!--============ Start branches ============-->
        <section class="branches">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->
                
                    <div class="col-md-6 col-xs-12">
                        <div class="branches_info_cairo">
                            <h3>CAIRO BRANCHES</h3>
                            <p><b>El Mohandssin 1:</b> 14 Syria St, Cairo.</p>
                            <p><span>phone:</span> 01065502820</p>
                            
                            <p><b>El Mohandssin 2:</b> 28 Jazerat El Arab</p>
                            <p><span>phone:</span> 01017618955</p>
                            
                            
                            
                            <p><b>El Mohandssin 3:</b>9 Lebanon Square beside KFC</p>
                            <p><span>phone:</span> 0106550822</p>
                            
                            
                            <p><b>Dokki:</b>  36 EL Seid Club st, Cairo.</p>
                            <p><span>phone:</span>  01065502823 </p>
                            
                            <p><b>Nasr City:</b> 31 El Btrawy St. Abbas EL Akkad St, Cairo.</p>
                            <p><span>phone:</span>  01065502826 </p>
                            
                            <p><b>Heliopolis :</b> 5 El Sasyed El Merghany St., Roxy, Cairo.</p>
                            <p><span>phone:</span> 01065502824 </p>
                            
                            <p><b>Shubra</b> Shubra : 97 Kholousy St, Cairo.</p>
                            <p><span>phone:</span> 01065502824 </p>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="branches_info_alex">
                            <h3>ALEXANDRIA BRANCHES</h3>
                            <p>2 El kazino st, San Stefano, Alexandria.</p>
                            <p><span>phone:</span> 01011056099</p>
                            
                            <p>274 Gmal Bad El Nasser St,Miami, Alexandria.</p>
                            <p><span>phone:</span> 01065502828</p>
                            
                            <p>Downtown in Front of Carredour, Alexandria.</p>
                            <p><span>phone:</span> 01065502829</p>
                            
                            <p>Fawzi Moaaz St., Kasr El Salam Building - Smouha, Alexandria.</p>
                            <p><span>phone:</span> 01017618954  </p>
                        </div>
                    </div>
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--============ End branches ============-->
        
        <!--============ Start forming ============-->
        <section class="forming" style="    background: #989898;">
            <div class="container"><!--Start Container-->
			                            <h3> CONTACT US
 </h3>
<br>
                <div class="row"><!--Start row-->
                    
                    <div class="col-xs-12">
                   	{!! Form::open( [ 'route' =>  'form', 'method' => 'post'] ) !!}
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="name..." name="title" required  >
                            </div>
                            
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="email" name="email"  required >
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="phone..."  name="phone"  required >
                            </div>
                            
                            <div class="form-group">
                                <textarea  name="body"  class="form-control" placeholder="message..." required ></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">
                                send
                                <i class="fa fa-paper-plane"></i>
                            </button>
					{!! Form::close() !!}
                    </div>
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--============ End forming ============-->
        
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
        <script src=" {{ asset('website/js/custom.js')}}"></script>
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