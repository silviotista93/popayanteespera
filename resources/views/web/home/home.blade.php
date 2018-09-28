@extends('web.layout')

@section('contenido')
    <main>
        <section class="slider">
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="/web/img/flex_slides/popayan-1.jpg" alt="">
                        <div class="meta">
                            <h3>Popayán, Una ciudad con historia</h3>
                            <div class="info">
                                <p>De dia y de noche Popayán refleja su historia con sus calles y arquitectura</p>
                            </div>
                            <a href="#0" class="btn_1">Conoce más</a>
                        </div>
                    </li>
                    <li>
                        <img src="/web/img/flex_slides/semanaSanta.jpg" alt="">
                        <div class="meta">
                            <h3>Semana Santa en Popayán</h3>
                            <div class="info">
                                <p>Es una celebración religiosa del culto Católico que conmemora la pasión, muerte y
                                    resurrección de Jesucristo
                            </div>
                            <a href="#0" class="btn_1">Conoce más</a>
                        </div>
                    </li>
                    <li>
                        <img src="/web/img/flex_slides/gastronomico-1.jpg" alt="">
                        <div class="meta">
                            <h3>Festival Gastronomico de Popayán</h3>
                            <div class="info">
                                <p>Con una variada programación y la exquisitez que implica la gastronomía caucana </p>
                            </div>
                            <a href="#0" class="btn_1">Conoce más</a>
                        </div>
                    </li>
                    <li>
                        <img src="/web/img/flex_slides/slide_4.jpg" alt="">
                        <div class="meta">
                            <h3>Nassau, Unique beaches and horizons</h3>
                            <div class="info">
                                <p><strong>220</strong> Hotels - <strong>150</strong> Restaurant</p>
                            </div>
                            <a href="#0" class="btn_1">Conoce más</a>>
                        </div>
                    </li>
                    <li>
                        <img src="/web/img/flex_slides/slide_5.jpg" alt="">
                        <div class="meta">
                            <h3>Rome, The Eternal City</h3>
                            <div class="info">
                                <p><strong>220</strong> Hotels - <strong>150</strong> Restaurant</p>
                            </div>
                            <a href="#0" class="btn_1">Conoce más</a>
                        </div>
                    </li>
                </ul>
                <div id="icon_drag_mobile"></div>
            </div>
            <div id="carousel_slider_wp">
                <div id="carousel_slider" class="flexslider" style="margin-left: 108px;">
                    <ul class="slides">
                        <li>
                            <img src="/web/img/flex_slides/popayan-1_thum.jpg" alt="">
                            <div class="caption">
                                <h3>Historia <span>Popayán</span></h3>
                                <small>Descubre mucho más</small>
                            </div>
                        </li>
                        <li>
                            <img src="/web/img/flex_slides/semanaSanta-1_thum.jpg" alt="">
                            <div class="caption">
                                <h3>Semana Santa <span>Popayán</span></h3>
                                <small>Descubre mucho más</small>
                            </div>
                        </li>
                        <li>
                            <img src="/web/img/flex_slides/gastronomico-1_thum.jpg" alt="">
                            <div class="caption">
                                <h3>Festival Gastronomico <span>Popayán</span></h3>
                                <small>Descubre mucho más</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="container-fluid margin_80_0">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Tours más visitados</h2>
                <p>Hay mucha historia y lugares por conocer en Popayán</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href=""><img src="/web/img/tours/puente-humilladero.jpg"
                                                            class="img-fluid" alt="" width="800" height="533">
                                <div class="read_more"><span>Conoce más</span></div>
                            </a>
                            <small>Historia</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="">Puente del Humilladero</a></h3>
                            <p>El Puente del Humilladero, que con sus dos arcos cruza el río Molino, es una construcción
                                de mampostería levantada en 1873 por Fray Serafín Barbetti. </p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li>
                                <div class="score"><span>Valoración<em>350 Vistas</em></span><strong>8.9</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href=""><img src="/web/img/tours/iglesia-sanFrancisco.jpg"
                                                            class="img-fluid" alt="" width="800" height="533">
                                <div class="read_more"><span>Conoce más</span></div>
                            </a>
                            <small>Iglesia</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="">Iglesia de San Francisco</a></h3>
                            <p>Es uno de los templos más importantes de Colombia por su estilo barroco tardío
                                neogranadino. En su campanario posee una de las campanas más grandes de América
                                denominada Campana de San Antonio, fundida en oro y bronce</p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li>
                                <div class="score"><span>Valoración<em>350 Vistas</em></span><strong>8.9</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href=""><img src="/web/img/tours/museo-valencia.jpg" class="img-fluid"
                                                            alt=""
                                                            width="800" height="533">
                                <div class="read_more"><span>Conoce más</span></div>
                            </a>
                            <small>Museo</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Casa Museo Guillero Leon Valencia</a></h3>
                            <p>El Museo Nacional Guillermo León Valencia lleva el nombre de este ex presidente de
                                Colombia, que ejerció ese cargo entre 1962 y 1966. En esta casona que le perteneció se
                                exhiben algunos de sus objetos personales y familiares, al igual que muebles,
                                condecoraciones, fotografías y piezas de arte. La casa cuenta con jardines, una sala
                                interactiva, una sala de lectura y un oratorio. </p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li>
                                <div class="score"><span>Valoración<em>350 Vistas</em></span><strong>8.9</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="/web/img/tours/morro.jpg" class="img-fluid" alt=""
                                                            width="800" height="533">
                                <div class="read_more"><span>Conoce más</span></div>
                            </a>
                            <small>Historia</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Morro de Tulcán</a></h3>
                            <p>Es el principal sitio arqueológico de Popayán. Este consiste en una pequeña loma no
                                natural en forma de pirámide truncada en el cual se encontraron elementos de la época
                                precolombina, aproximadamente entre los años 500 – 1600 a. C., período que se conoce
                                como "de las Sociedades Cacicales Tardías".</p>
                        </div>
                        <ul>
                            <li><i class="icon_clock_alt"></i> 1h 30min</li>
                            <li>
                                <div class="score"><span>Valoración<em>350 Vistas</em></span><strong>8.9</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->

                <!-- /item -->
            </div>
            <!-- /carousel -->
            <div class="container">
                <p class="btn_home_align"><a href="" class="btn_1 rounded">Ver todos los Tours</a></p>
            </div>
            <!-- /container -->
            <hr class="large">
        </div>
        <!-- /container -->

        <div class="container-fluid margin_30_95 pl-lg-5 pr-lg-5">
            <section class="add_bottom_45">
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>Hoteles y alojamientos populares</h2>
                    <p>Lugares Coloniales y Modernos para que puedas descansar</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="{{route('showHotel')}}" class="grid_item">
                            <figure>
                                <div class="score"><strong>8.9</strong></div>
                                <img src="/web/img/hoteles/hotel-1.jpg" class="img-fluid" alt="" style="height: 200px;">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                                class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Mariott Hotel</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="{{route('showHotel')}}" class="grid_item">
                            <figure>
                                <div class="score"><strong>7.9</strong></div>
                                <img src="/web/img/hoteles/hotel-2.png" class="img-fluid" alt="" style="height: 200px;">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                                class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Concorde Hotel </h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="{{route('showHotel')}}" class="grid_item">
                            <figure>
                                <div class="score"><strong>7.0</strong></div>
                                <img src="/web/img/hoteles/hotel-3.png" class="img-fluid" alt="" style="height: 200px;">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                                class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Louvre Hotel</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="{{route('showHotel')}}" class="grid_item">
                            <figure>
                                <div class="score"><strong>8.9</strong></div>
                                <img src="/web/img/hoteles/hotel-4.png" class="img-fluid" alt="" style="height: 200px;">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                                class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Park Yatt Hotel</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /row -->
                <a href="hotels-grid-isotope.html"><strong>Ver todos (157) <i
                                class="arrow_carrot-right"></i></strong></a>
            </section>
            <!-- /section -->

            <section>
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>Restaurantes Populares</h2>
                    <p>Comida tipica de nuestra ciudad y mucha diversidad Colombiana</p>
                </div>
                <div class="row">
                    @foreach($restauPopulares as $restauPopular)
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="{{route('showRestaurante',$restauPopular->id)}}" class="grid_item">
                            <figure>
                                <div class="score"><strong>8.5</strong></div>
                                <img src="{{$restauPopular->imagen}}" height="10" class="img-fluid" alt="" style="height: 170px;">
                                <div class="info">
                                    <h3>{{$restauPopular->nombre}}</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- /row -->
                <a href="{{route('allRestaurantes')}}"><strong>Ver todos ({{$cantidadRestau}}) <i
                                class="arrow_carrot-right"></i></strong></a>
            </section>
            <!-- /section -->
        </div>
        <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h3>Noticias y Eventos</h3>
                    <p>Dia a dia y eventos de la ciudad de Popayán.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="/web/img/news_home_1.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Mark Twain</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Pri oportere scribentur eu</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                                ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="/web/img/news_home_2.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Jhon Doe</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Duo eius postea suscipit ad</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                                ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="/web/img/news_home_3.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Luca Robinson</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Elitr mandamus cu has</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                                ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="/web/img/news_home_4.jpg" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Paula Rodrigez</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Id est adhuc ignota delenit</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                                ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                </div>
                <!-- /row -->
                <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">Ver más</a></p>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->

        <div class="call_section">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>
                        <div class="box_1">
                            <h3>Disfruta de un GRAN viaje con nosotros</h3>
                            <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri.
                                Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                            <a href="#0" class="btn_1 rounded">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/call_section-->
    </main>

@stop

