@extends('web.layout')

@section('contenido')
    <main>

        <section class="hero_in restaurants" style="background: url(/web/img/restaurante/fondo-allRestaurantes.jpg) center center no-repeat !important;-webkit-background-size: cover !important;-moz-background-size: cover !important; -o-background-size: cover !important; background-size: cover !important;">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Restaurantes</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="filters_listing sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li>
                        <div class="switch-field">
                            <input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*" class="selected">
                            <label for="all">Todos</label>
                            <input type="radio" id="popular" name="listing_filter" value="popular" data-filter=".popular">
                            <label for="popular">Popular</label>
                            <input type="radio" id="latest" name="listing_filter" value="latest" data-filter=".latest">
                            <label for="latest">Últimos</label>
                        </div>
                    </li>
                    <li>
                        <div class="layout_view">
                            <a href="#0" class="active"><i class="icon-th"></i></a>
                            <a href=""><i class="icon-th-list"></i></a>
                        </div>
                    </li>
                    <li>
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Ocultar mapa" data-text-original="Ver mapa">Ver mapa</a>
                    </li>
                </ul>
            </div>
            <!-- /container -->
        </div>
        <!-- /filters -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60_35">
            <div class="col-lg-12">
                <div class="row no-gutters custom-search-input-2 inner">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Qué estás buscando...">
                            <i class="icon_search"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Donde">
                            <i class="icon_pin_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <select class="wide">
                            <option>Categorias</option>
                            @foreach($tipoRestaurantes as $tipoRestaurante)
                                <option>{{$tipoRestaurante->categoria}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <input type="submit" class="btn_search" value="Buscar">
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /custom-search-input-2 -->

            <div class="isotope-wrapper">
                <div class="row">
                    @foreach($restaurantes as $restaurante)
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="{{route('showRestaurante',$restaurante->id)}}"><img src="{{$restaurante->imagen}}" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Conoce mas</span></div></a>
                                <small>{{$restaurante->tipoRestaurante->categoria}}</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a href="restaurant-detail.html">{{$restaurante->nombre}}</a></h3>
                                <p>{{$restaurante->breve_descripcion}}</p>
                                {{--<span class="price">From <strong>$54</strong> /per person</span>--}}
                            </div>
                            <ul>
                                <li><i class="ti-eye"></i> 164 vistas</li>
                                <li><div class="score"><span>Calificación<em>350 Opiniones</em></span><strong>8.9</strong></div></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                    <!-- /box_grid -->
                </div>
                <!-- /row -->
            </div>
            <!-- /isotope-wrapper -->

        </div>
        <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-help2"></i>
                            <h4>¿Necesitas ayuda?</h4>
                            <p></p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-wallet"></i>
                            <h4>Pagos</h4>
                            <p></p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-note2"></i>
                            <h4>Politicas</h4>
                            <p></p>
                        </a>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->

    </main>

@stop