@extends('layouts.maquillaje')

@section('usuario')
    <div class="contenedor-texto">
        <div class="texto">
            <h1 class="nombre"> <b>Paradise cosmetics</b> </h1>
            <h2 class="profesion">Distribuidora de cosmeticos</h2>
        </div>
    </div>
@endsection

@section('content')
    <section class="acerca-de">
        <div class="contenedor">
            <div class="foto">
                <img src="{{asset('img/Logos/paradise_cosmetics07.jpg')}}" width="115" height="115">
            </div>

            <div class="texto">
                {{-- <h3 class="titulo">Paradise cosmetics</h3> --}}
                <p>
                    💕 Tienda Virtual 💕
                    <br>
                    MAQUILLAJE & CUIDADOS DE LA PIEL
                    <br>
                    “Nadie es como tú y ese es tu poder”
                    <br>
                    💌 Mayor información al DM
                    <br>
                    📍Pelaya-Cesar
                    <br>
                    🚚Envíos Nacionales
                </p>
            </div>
        </div>
    </section>

    <section class="trabajos col-12 col-md-12">
        <div class="contenedor">
            <h3 class="titulo">Productos</h3>

            <div class="contenedor-trabajos">

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/8.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Paleta de sombras</p>
                        <p class="categoria"><b><del>$ 17.000</del></b> <br> $ 15.000 </p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/9.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tonico de rosas y manzana</p>
                        <p class="categoria"> <b><del>$ 27.000</del></b> <br> $ 25.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/10.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Jabon liquido facial</p>
                        <p class="categoria"><b><del>$ 37.000</del></b> <br> $ 35.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/11.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Mascarila de rosas</p>
                        <p class="categoria"> <b><del>$ 22.000</del></b> <br> $ 20.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/12.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Mascarilla de Aloe vera</p>
                        <p class="categoria"> <b><del>$ 17.000</del></b> <br> $ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/13.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Kit de cejas</p>
                        <p class="categoria"> <b><del>$ 17.000</del></b> <br> $ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/14.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Trio de rubores</p>
                        <p class="categoria"> <b><del>$ 12.000</del></b> <br> $ 10.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/15.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Mini bricha para polvo</p>
                        <p class="categoria"> <b><del>$ 12.000</del></b> <br> $ 10.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/16.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Labiales</p>
                        <p class="categoria"> <b><del>$ 5.000</del></b> <br> $ 3.000 und / Paquete $ 20.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/17.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Serum reparador</p>
                        <p class="categoria"> <b><del>$ 17.000</del></b> <br> $ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/18.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Mascarilla carbonatada</p>
                        <p class="categoria"> <b><del>$ 22.000</del></b> <br> $ 20.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/19.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Exfoliante corporal en gel</p>
                        <p class="categoria"> <b><del>$ 17.000</del></b> <br> $ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/20.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Paleta de sombras con espejo</p>
                        <p class="categoria"> <b><del>$ 27.000</del></b> <br> $ 25.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/21.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Serum perlas bioaqua</p>
                        <p class="categoria"> <b><del>$ 22.000</del></b> <br> $ 20.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/22.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Kit de brochas X9</p>
                        <p class="categoria"> <b><del>$ 32.000</del></b> <br> $ 30.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/23.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tapete limpia brocha</p>
                        <p class="categoria"> <b><del>$ 12.000</del></b> <br> $ 10.000</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@section('footer')
    <div class="contenedor">
        {{-- <a class="twitter" href=""><i class="fa fa-twitter"></i></a> --}}
        <a class="facebook" href="https://www.facebook.com/ParadiseCosmeticsPelayaCesar"><i class="fa fa-facebook"></i></a>
        <a class="facebook" href="https://api.whatsapp.com/send?phone=573167054001&app=facebook&entry_point=page_cta&fbclid=IwAR0WRhmPZwf2DSht4HhNAhOszysBwEpvB94Cbpl15IaBLI25epJ9FE34Hgo"><i class="fa fa-whatsapp"></i></a>
        {{-- <a class="youtube" href=""><i class="fa fa-youtube-play"></i></a>
        <a class="github" href=""><i class="fa fa-github"></i></a> --}}
        <a class="instagram" href="https://www.instagram.com/paradise_cosmetics07/"><i class="fa fa-instagram"></i></a>
    </div>
@endsection
