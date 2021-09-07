
  <footer class="site-footer">
    <div class="site-footer-bg" style="background-image: url('https://www.indochinatravel.com/images/donating-books-at-school-in-vietnam.jpg')"></div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <h3 class="footer-widget__title">{{__('Giới Thiệu')}}</h3>
                        <p class="footer-widget__text">Lorem ipsum dolor sit ame consect etur pisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="{{asset('/about')}}" class="footer-widget__about-btn"><i class="fas fa-arrow-circle-right"></i>{{__('Xem Chi Tiết')}} </a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title">{{__('Liên Hệ')}}</h3>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="icon-chat"></i>
                                </div>
                                <div class="text">
                                    <p>
                                        <span>{{__('Gọi mọi lúc')}}</span>
                                        <a href="tel:92 666 888 0000">92 666 888 0000</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-message"></i>
                                </div>
                                <div class="text">
                                    <p>
                                        <span>{{__('Gửi Email')}}</span>
                                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-address"></i>
                                </div>
                                <div class="text">
                                    <p><span>{{__('Địa Chỉ')}}</span>80 broklyn golden street</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <h3 class="footer-widget__title">{{__('Đăng Kí Nhận Tin')}}</h3>
                        <p class="footer-widget__newsletter-text">Lorem ipsum dolor sit ame consect etur pisicing elit sed do.</p>
                        <form class="footer-widget__newsletter-form">
                            @csrf
                            <input id="fullName" type="text" class="mb-2 nameSub" name="name" placeholder="{{__('Tên Của Bạn')}}" >
                            <input id="email" type="email" name="emailSub" class="emailSub" placeholder="{{__('Email Của Bạn')}}">
                            <button id="send-mail" type="button" class="footer-widget__newsletter-btn mt-2"><i class="fas fa-arrow-circle-right"></i>{{__('Đăng Ký')}}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__bottom-logo-social">
                            <div class="site-footer__bottom-logo">
                                <a href="index.html"><img src="{{asset('dist/assets/images/resources/Charity.png')}}" alt=""></a>
                            </div>
                            <div class="site-footer__bottom-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="site-footer__bottom-copy-right">
                            <p>© Copyright 2021 by <a href="https://aptech.fpt.edu.vn/">FPT Aptech - eProject</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
