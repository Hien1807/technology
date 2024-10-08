<footer class="footer-area">
    <div class="footer-top pt-10 pb-10">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget mb-10">
                        <div class="footer-text mb-35">
                            <p>{{trans('language.slogan')}}</p>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> --}}
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-10">
                            <div class="footer-contact">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i> Tân Lập, Đan Phượng, Hà Nội</li>
                                    <li><i class="fas fa-headphones"></i> 458-965-3224</li>
                                </ul>
                            </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-10">
                        <div class="footer-contact">
                            <ul>
                                <li><i class="fas fa-envelope-open"></i>Support@info.com</li>
                                <li><i class="fas fa-fax"></i>458-965-3224</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-10">
                    </div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29781.514870086943!2d105.69118186103269!3d21.085065749659922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455bf5790704b%3A0x338abf092a03d8f0!2zVMOibiBM4bqtcCwgxJBhbiBQaMaw4bujbmcsIEhhbm9pLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1723992823511!5m2!1sen!2s" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap copyright-style-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Copyright © {{date('Y')}} <a href="#">{{trans('language.website')}}</a> All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="payment-method-img text-right">
                        <img src="{{asset('images/card_img_footer.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>