
@extends('layouts.app')
@section('title','nosotros')
@section('content')
@include('layouts.inc.frontend.banner2')

<div class="pt-0">

    <div class="container my-5">
        <div class="container-fluid py-5 " >
            <div class="container py-4">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="position-relative pb-4 ">

                            <h2 class="mb-0 txt1"> 🅰🅻🅿🅰🅼🅸🆇
                            </h2>
                        </div>
                        <p class="mb-4 postcard__preview-txt t">
                            Alpamix Se Concentra En Desarrollo De Hilatura Utilizacion Materia De La
                            Zona,Generando Nuevas Mezclas Sinteticas En Hilaturas
                        </p>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 " style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                                <p class="fw-bold txt1 text-uppercase">Le Bridamos</p>
                                <p class="mb-3 t "><i class="fa fa-check txt me-3"></i >Productos de Calidad</p>
                                <p class="mb-3 t "><i class="fa fa-check txt me-3"></i>Cordial Atencion</p>
                                <p class="mb-3 t "><i class="fa fa-check txt me-3"></i>Variedad De Colores</p>
                                <p class="mb-3 t "><i class="fa fa-check txt me-3"></i>Envios</p>
                                <p class="mb-3 t "><i class="fa fa-check txt me-3"></i>Venta Por Mayor y Menor</p>
                            </div>

                        </div>


                    </div>


                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded-lg wow zoomIn" src="http://www.acrilanas.com/wp-content/uploads/2016/06/alpacril-2-768x519.jpg" style="object-fit: cover; visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Service Start -->
      <div class="container-fluid pb-5 " >
        <div class="container py-3">
            <div class=" text-center position-relative py-4 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold txt text-uppercase">Nuestros Pilares</h5>
                <h1 class="mb-0 txt1">Nos Identificamos Con Cada Una De Ellas.</h1>
            </div>
            <div class="row g-5 py-4 pb-5">
                <div class="col-lg-4 col-md-6  ">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3 txt t">Mision</h4>
                        <p class="m-0 t">Elaboracion de hilados de fibra de alpaca y de lana de oveja para
                            introducirlas como materia prima de la linea De tejido fino.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 " >
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3 txt t">Vision</h4>
                        <p class="m-0 t">Generar nueva linea de hilatura en nuestra region a partir de la materia prima de la zona.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 " >
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3 txt t">Valores</h4>
                        <p class="m-0 t"> Los hilos van mas allá de la materialidad simple y fría, es algo mucho más elaborado, realizarlos no es una tarea simple pero en Hilados Peru, lo hacemos con un gran compromiso y respeto.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

</div>

@endsection
