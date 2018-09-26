     
  <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "494474224064931", // Facebook page ID
            whatsapp: "0201065502820", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->


<section class="side_contacts">
            <ul class="list-unstyled">
                <li>
                    <a style="     color: #3b5998;" href="https://www.facebook.com/sourceshoesandbags/?ref=bookmarks" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a  style="color: #f00c4b;" href="https://www.instagram.com/source_shoesandbags/" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </section>

		<!--============ Start nav1 ============-->
        <nav class="navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{ asset('website/imgs/logo.jpg') }}" alt="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="activ e">
                            <a href="{{ route('home')}}">  		{{ trans('DataLang.Home') }} <span class="sr-only">(current)</span>
                                <img src="{{ asset('website/imgs/nav/house.png') }}" alt="nav-home-icon">
                            </a>
                        </li>
                        
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('category',[$category->id])}}">
                                {{ $category->name}}
                                <img src="{{ asset($category->icon) }}" alt="nav-shoes-icon">
                            </a>
                        </li>
                        @endforeach
                        
                        <li>
                            <a href="{{route('contact') }}"> {{ trans('DataLang.Contact') }}  
                                <img src="{{ asset('website/imgs/nav/phone.png') }}" alt="nav-contact-icon">
                            </a>
                        </li>
                    </ul>
                    
                    <ul class="lang nav navbar-nav navbar-right">
                        <li>
                            @if(\Session::get('lang', 'en') == "en")
                            <a href="{{route('ar')}}" >عربى
                            </a>
                            @else
                            <a href="{{route('en')}}" >English</a>
                            @endif
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>