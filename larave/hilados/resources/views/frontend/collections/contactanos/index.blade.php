
@extends('layouts.app')
@section('title','contactanos')
@section('content')
@include('layouts.inc.frontend.banner3')

 <!-- Contact Start -->
 <div class="container-fluid py-5 wow fadeInUp" >
    <div class="container pb-3">

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" >
                    <div class="bg-headerr d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2 txt t">Por Llamada</h5>
                        <h4 class=" mb-0 txt1 t">996030311</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" >
                    <div class="bg-headerr d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2 txt t">Por Correo</h5>
                        <h4 class=" mb-0 txt1 t">admin@hilostexperu.com</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center " >
                    <div class="bg-headerr d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2 txt t">o Visitanos</h5>
                        <h4 class=" mb-0 txt1 t">Jr, Artesanal Mz. A, Juliaca</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" >
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Tu Nombre" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Tu Correo" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-12 ">
                            <button class="btn btn-light w-100 py-3 shadow-lg bg-headerr txt1 " type="submit">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" >
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30757.545746009568!2d-70.1375820765666!3d-15.500925210976808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9167f5484b369675%3A0xfdbeb0b4e54aafe0!2sDEVAPERU!5e0!3m2!1ses-419!2spe!4v1670891628781!5m2!1ses-419!2spe"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
