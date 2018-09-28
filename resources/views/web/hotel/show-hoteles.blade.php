@extends('web.layout')
@section('contenido')
    <main>
        <section class="hero_in hotels_detail"style="background: url(/web/img/hoteles/hote-imagen-1.jpg) center center no-repeat !important;-webkit-background-size: cover !important;-moz-background-size: cover !important; -o-background-size: cover !important; background-size: cover !important;">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Nombre del Hotel</h1>
                </div>
                <span class="magnific-gallery">
					<a href="img/gallery/hotel_list_1.jpg" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">Ver fotos</a>
					<a href="img/gallery/hotel_list_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
					<a href="img/gallery/hotel_list_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
				</span>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li><a href="#description" class="active">Descripcion</a></li>
                        <li><a href="#reviews">Opiniones</a></li>
                        <li><a href="#sidebar">Booking</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section id="description">
                            <h2>Descripcion</h2>
                            <p>Per consequat adolescens ex, cu nibh commune <strong>temporibus vim</strong>, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                            <p>Cum et probo menandri. Officiis consulatu pro et, ne sea sale invidunt, sed ut sint <strong>blandit</strong> efficiendi. Atomorum explicari eu qui, est enim quaerendum te. Quo harum viris id. Per ne quando dolore evertitur, pro ad cibo commune.</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="bullets">
                                        <li>Dolorem mediocritatem</li>
                                        <li>Mea appareat</li>
                                        <li>Prima causae</li>
                                        <li>Singulis indoctum</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="bullets">
                                        <li>Timeam inimicus</li>
                                        <li>Oportere democritum</li>
                                        <li>Cetero inermis</li>
                                        <li>Pertinacia eum</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->
                            <hr>
                            <h3>Instagram fotos feed</h3>
                            <div id="instagram-feed-hotel" class="clearfix"></div>
                            <hr>
                            <div class="room_type first">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="img/gallery/hotel_list_1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Habitación individual</h4>
                                        <p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                        <ul class="hotel_facilities">
                                            <li><img src="img/hotel_facilites_icon_2.svg" alt="">Cama individual/li>
                                            <li><img src="img/hotel_facilites_icon_4.svg" alt="">Wifi</li>
                                            <li><img src="img/hotel_facilites_icon_5.svg" alt="">Ducha</li>
                                            <li><img src="img/hotel_facilites_icon_7.svg" alt="">Aire Acondicionado</li>
                                            <li><img src="img/hotel_facilites_icon_8.svg" alt="">Secador de pelo</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /rom_type -->
                            <div class="room_type gray">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="img/gallery/hotel_list_2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Habitación Doble</h4>
                                        <p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                        <ul class="hotel_facilities">
                                            <li><img src="img/hotel_facilites_icon_3.svg" alt="">Cama matrimonial</li>
                                            <li><img src="img/hotel_facilites_icon_4.svg" alt="">Wifi</li>
                                            <li><img src="img/hotel_facilites_icon_6.svg" alt="">Bañera</li>
                                            <li><img src="img/hotel_facilites_icon_7.svg" alt="">Aire Acondicionado</li>
                                            <li><img src="img/hotel_facilites_icon_8.svg" alt="">Secador de pelo</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /rom_type -->
                            <div class="room_type last">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="img/gallery/hotel_list_3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Suite</h4>
                                        <p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                        <ul class="hotel_facilities">
                                            <li><img src="img/hotel_facilites_icon_3.svg" alt="">Cama Grande</li>
                                            <li><img src="img/hotel_facilites_icon_4.svg" alt="">Bañera</li>
                                            <li><img src="img/hotel_facilites_icon_7.svg" alt="">Aire Acondicionado</li>
                                            <li><img src="img/hotel_facilites_icon_9.svg" alt="">Piscina</li>
                                            <li><img src="img/hotel_facilites_icon_3.svg" alt="">Lavanderia</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /rom_type -->
                            <hr>
                            <h3>Localización</h3>
                            <div id="map" class="map map_single add_bottom_30"></div>
                            <!-- End Map -->
                        </section>
                        <!-- /section -->

                        <section id="reviews">
                            <h2>Opiniones</h2>
                            <div class="reviews-container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div id="review_summary">
                                            <strong>8.5</strong>
                                            <em>Magnifico</em>
                                            <small>Basado en 4 evaluaciones</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <hr>

                            <div class="reviews-container">

                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Admin – April 03, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Ahsan – April 01, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Sara – March 31, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                            </div>
                            <!-- /review-container -->
                        </section>
                        <!-- /section -->
                        <hr>

                        <div class="add-review">
                            <h5>Dejar un comentario</h5>
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombres y Apellidos *</label>
                                        <input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email *</label>
                                        <input type="email" name="email_review" id="email_review" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Clasificación </label>
                                        <div class="custom-select-form">
                                            <select name="rating_review" id="rating_review" class="wide">
                                                <option value="1">1 (normal)</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected>5 (medio)</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10 (alto)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Tu reseña</label>
                                        <textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 add_top_20">
                                        <input type="submit" value="Enviar" class="btn_1" id="submit-review">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price">
                                <span>45$ <small>persona</small></span>
                                <div class="score"><span>Califación<em>350 Opiniones</em></span><strong>7.0</strong></div>
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="text" name="dates" placeholder="Cuando..">
                                <i class="icon_calendar"></i>
                            </div>

                            <div class="panel-dropdown">
                                <a href="#">Personas <span class="qtyTotal">1</span></a>
                                <div class="panel-dropdown-content right">
                                    <div class="qtyButtons">
                                        <label>Adultos</label>
                                        <input type="text" name="qtyInput" value="1">
                                    </div>
                                    <div class="qtyButtons">
                                        <label>Niños</label>
                                        <input type="text" name="qtyInput" value="0">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <div class="custom-select-form">
                                    <select class="wide">
                                        <option>Tipo de Habitación</option>
                                        <option>Habitación Individual</option>
                                        <option>Habitación Doble</option>
                                        <option>Suite</option>
                                    </select>
                                </div>
                            </div>
                            <a href="cart-1.html" class=" add_top_30 btn_1 full-width purchase">Alquilar</a>
                            <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Agregar a Favoritos</a>
                        </div>
                        <ul class="share-buttons">
                            <li><a class="fb-share" href="#0" style="font-size: 8px"><i class="social_facebook"></i> Compartir</a></li>
                            <li><a class="twitter-share" href="#0"  style="font-size: 8px"><i class="social_twitter" ></i> Tweet</a></li>
                            <li><a class="gplus-share" href="#0"  style="font-size: 8px"><i class="social_googleplus"></i> Compartir</a></li>
                        </ul>
                    </aside>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
@stop

@section('dataPickerShowHotel')
<script>
    $(function() {
        $('input[name="dates"]').daterangepicker({
            autoUpdateInput: false,
            opens: 'left',
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
        });
        $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
</script>
@stop