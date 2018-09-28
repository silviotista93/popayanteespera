<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Popayán te Espera | Bienvenidos</title>

    <!-- Favicons-->
    <link rel="shortcut icon" sizes="114x114" href="{{{ asset('assets/img/fivicon.png') }}}">
    <!-- BASE CSS -->
    <link href="/web/css/bootstrap.min.css" rel="stylesheet">
    <link href="/web/css/style.css" rel="stylesheet">
    <link href="/web/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/web/css/custom.css" rel="stylesheet">

    <link href="/web/js/modernizr_slider.js" rel="stylesheet">

</head>

<body>

<div id="page">

    <header class="header menu_fixed">
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div><!-- /Page Preload -->
        <div id="logo">
            <a href="/">
                <img src="/web/img/logo-popayan-blanco.png" width="155" height="76" data-retina="true" alt=""
                     class="logo_normal" style="margin-left: 23px">
                <img src="/web/img/logo-popayan.png" width="165" height="79" data-retina="true" alt=""
                     class="logo_sticky" style="margin-left: 23px">
            </a>
        </div>
        <ul id="top_menu" style="margin-top: 21px;">
            <li><a href="" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
            <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
            <li><a href="" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
        </ul>
        <!-- /top_menu -->
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <!-- Navegacion -->
        @include('web.partials.navegation')

    </header>
    <!-- /header -->

    <!-- Contenido -->

@yield('contenido')
<!-- /main -->

    <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-5 col-md-12 p-r-5">
                    <p><img src="/web/img/logo-popayan-blanco.png" width="150" height="76" data-retina="true" alt="">
                    </p>
                    <p>En el 2005, la UNESCO designó a la ciudad de Popayán como Ciudad UNESCO de la Gastronomía​ por
                        su variedad y significado para el patrimonio intangible de los colombianos. La cocina caucana
                        fue seleccionada por mantener sus métodos tradicionales de preparación a través de la tradición
                        oral. El 28 de septiembre de 2009 las Procesiones de Semana Santa de Popayán fueron
                        declaradas por la UNESCO como Obra Maestra del Patrimonio Oral e Inmaterial de la Humanidad.</p>
                    <div class="follow_us">
                        <ul>
                            <li>Siguenos</li>
                            <li><a href="#0"><i class="ti-facebook"></i></a></li>
                            <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#0"><i class="ti-google"></i></a></li>
                            <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#0"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ml-lg-auto">
                    <h5>Enlaces útiles</h5>
                    <ul class="links">
                        <li><a href="about.html">Acerca de</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="register.html">Registrate</a></li>
                        <li><a href="blog.html">Noticias &amp; Eventos</a></li>
                        <li><a href="contacts.html">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contactar con nosotros</h5>
                    <ul class="contacts">
                        <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
                        <li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> info@popayanteespera.com</a></li>
                    </ul>
                    <div id="newsletter">
                        <h6>Hoja Informativa</h6>
                        <div id="message-newsletter"></div>
                        <form method="post" action="/web/assets/newsletter.php" name="newsletter_form"
                              id="newsletter_form">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control"
                                       placeholder="Tu email">
                                <input type="submit" value="Enviar" id="submit-newsletter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <ul id="footer-selector">
                        <li>
                            <div class="styled-select" id="lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select" id="currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Peso Colombiano</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="/web/img/cards_all.svg" alt=""></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul id="additional_links">
                        <li><a href="#0">Términos y Condiciones</a></li>
                        <li><a href="#0">Privacidad</a></li>
                        <li><span>© 2018 Popayán te Espera</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
</div>
<!-- page -->

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Registrate</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Iniciar sesión con Facebook</a>
            <a href="#0" class="social_bt google">Iniciar sesión con Google</a>
            <div class="divider"><span>o</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Recordar
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Olvido su contraseña?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
            <div class="text-center">
                No tienes una cuenta? <a href="register.html">Registrate</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Por favor confirme el correo electrónico de inicio</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>Recibirá un correo electrónico que contiene un enlace que le permite restablecer su contraseña.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="/web/js/jquery-2.2.4.min.js"></script>
<script src="/web/js/common_scripts.js"></script>
<script src="/web/js/main.js"></script>
<script src="/web/assets/validate.js"></script>
<script src="/web/js/input_qty.js"></script>

<!-- FlexSlider -->
<script defer src="/web/js/jquery.flexslider.js"></script>
<script>
    $(window).load(function () {
        'use strict';
        $('#carousel_slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 280,
            itemMargin: 25,
            asNavFor: '#slider'
        });
        $('#carousel_slider ul.slides li').on('mouseover', function () {
            $(this).trigger('click');
        });
        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel_slider",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<script defer src="/web/js/weather_home.js"></script>
@section('dataPickerShowHotel')

@show

</body>
</html>