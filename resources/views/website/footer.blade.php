<footer>
            <img src="{{ asset('website/imgs/footer_bg.png') }}" alt="footer-phone">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_about">
                            <h2>
                                Source
                                <span>shoes & bags</span>
                            </h2>
                            <p>
 
 {{ trans('DataLang.Since') }}

 </p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_links">
                            <h3>our site</h3>
                            <ul class="list-unstyled">
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('category',[$category->id])}}">
                                {{ $category->name}}
                            </a>
                        </li>
                        @endforeach
                            </ul>
                        </div>
                    </div>
                   
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_contact">
                            <h3>contact us</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-map-marker fa-fw"></i>
                                    <span>14 syria st , El-Mohandessen, Cairo, Egypt</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker fa-fw"></i>
                                    <span>2 Casino Street, San Stefano, Alexandia, Egypt</span>
                                </li>
                            </ul>
                            <ul class="socials list-unstyled list-inline">
                                <li>
                                    <a href="https://www.instagram.com/source_shoesandbags/" target="_blank">
                                        <i class="fa fa-instagram fa-fw"></i>
                                    </a>
                                </li>
								<li>
                                    <a href="https://www.facebook.com/sourceshoesandbags/?ref=bookmarks" target="_blank">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    
                </div><!--End row-->
            </div><!--End Container-->
        </footer>