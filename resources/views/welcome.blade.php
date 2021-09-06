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
                    📍Pelaya-Cesar
                    🚚Envíos Nacionales
                </p>
            </div>
        </div>
    </section>

    <section class="trabajos">
        <div class="contenedor">
            <h3 class="titulo">Productos</h3>

            <div class="contenedor-trabajos">

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/0.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Sombras líquidas</p>
                        <p class="categoria">Precio o descripcion</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/1.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Limpiador facial</p>
                        <p class="categoria">Precio o descripcion</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/2.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Trío de rubores</p>
                        <p class="categoria">Precio o descripcion</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/3.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Voluminizador de labios</p>
                        <p class="categoria">Precio o descripcion</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/4.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Hermosas sombras líquidas x6</p>
                        <p class="categoria">Precio o descripcion</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/5.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Primer de rosas</p>
                        <p class="categoria">Precio o descripcion</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/6.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Contorno y rubor en barra</p>
                        <p class="categoria">Precio o descripcion</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/7.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Polvo de hadas</p>
                        <p class="categoria">Precio o descripcion</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/8.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/9.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Tonico de rosas y manzana</p>
                        <p class="categoria">$ 25.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/10.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Jabon liquido facial</p>
                        <p class="categoria">$ 35.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/11.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 20.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/12.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/13.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/14.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 10.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/15.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 10.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/16.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 3.000 ud / Paquete $ 20.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/17.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/18.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 20.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/19.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 15.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/20.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 25.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/21.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 20.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/22.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 30.000</p>
                    </div>
                </div>

                <div class="trabajo">
                    <div class="thumb">
                        <img src="{{asset('img/Productos/23.jpg')}}" alt="Lorem Ipsum">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Nombre</p>
                        <p class="categoria">$ 10.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    <div class="contenedor">
        {{-- <a class="twitter" href=""><i class="fa fa-twitter"></i></a>
        <a class="facebook" href=""><i class="fa fa-facebook"></i></a>
        <a class="youtube" href=""><i class="fa fa-youtube-play"></i></a>
        <a class="github" href=""><i class="fa fa-github"></i></a> --}}
        <a class="instagram" href="https://www.instagram.com/paradise_cosmetics07/"><i class="fa fa-instagram"></i></a>
    </div>
@endsection
