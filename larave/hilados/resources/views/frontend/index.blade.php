@extends('layouts.app')

@section('title','Home Page')
@section('content')
  <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $key => $sliderItem)
        <div class="carousel-item {{$key == 0 ? 'active':'' }} ">
            @if ($sliderItem->image)
            <img class="w-100" src="{{asset("$sliderItem->image")}}"   alt="Image">
            @endif
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="txt text-uppercase mb-3 animated slideInDown t">{!! $sliderItem->title !!}</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn t">{!! $sliderItem->description !!}</h1>
                    <a href="quote.html" class="btn btn-outline-light bg-headerr py-md-3 px-md-5 me-3 animated slideInLeft t">Free Quote</a>
                    <a href="" class="btn btn-outline-light bg-headerr py-md-3 px-md-5 animated slideInRight t">Contact Us</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

 {{-- body --}}
<div class="pt-5">

    <div class="container my-5">
        <div class="container-fluid py-5 " >
            <div class="container py-4">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="position-relative pb-4 ">
                            <h5 class="fw-bold txt text-uppercase">SOBRE NOSOTROS</h5>
                            <h2 class="mb-0 txt1">Somos Una Empresa Nueva Con Ganas De Ayudar y Crecer de la Mano de Nuestros Clientes </h2>
                        </div>
                        <p class="mb-4 postcard__preview-txt t">
                            En nuestra tienda encontrarás una gran selección de hilados; ovillos,madejas,conos. En Hilados Peru,
                            seleccionamos los mejores Productos nacionales e internacionales.
                            Así podemos ofrecerte la más cuidada calidad de fibras naturales y sinteticas en una extensa variedad de colores y de grosores.
                        </p>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 " style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                                <h5 class="mb-3 txt "><i class="fa fa-check txt1 me-3"></i >Productos de Calidad</h5>
                                <h5 class="mb-3 txt "><i class="fa fa-check txt1 me-3"></i>Cordial Atencion</h5>
                            </div>
                            <div class="col-sm-6 ">
                                <h5 class="mb-3 txt "><i class="fa fa-check txt1 me-3"></i>Atencion todos los dias</h5>
                                <h5 class="mb-3 txt "><i class="fa fa-check txt1 me-3"></i>Precio Bajos</h5>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary bg-headerr shadow py-3 px-5 mt-3 " >Conocer Mas</a>
                    </div>


                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded-lg wow zoomIn" src="https://www.lalanalu.com/img/leoblog/b/1/75/750_542/b-post-bcnknits.jpg" style="object-fit: cover; visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 pt-5 ">

        <div class=" text-start position-relative pb-3 mb-4 " style="max-width: 600px;">
            <h5 class="fw-bold txt text-uppercase t">Con que tipos de Hilados Contamos
            </h5>
            <h1 class="mb-0 txt1 t">Contamos Con 5 Tipos De Hilados</h1>
        </div>
        <article class="articles-container p-1">
            <div class="d-flex flex-center">

                <div class="postcard">
                    <a class="postcard__img_link" href="{{url('/collections')}}">
                        <img class="postcard__img" src="http://acrilanas.com//wp-content/uploads/2016/06/MG_7556.jpg" alt="Image de l'article" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title txt t">Alpacril</h1>
                        <div class="postcard__preview-txt t">
                            El “Alpacril” es una mezcla intima de fibra acrílica “Drytex” con fibra de Alpaca de la más alta calidad.
                             Lo cual le da un excelente acabado que al tacto se siente suave con bastante volumen.
                             Este producto es utilizado para chompas, artesanía y chullos. <hr>
                            <a class="ml-1 txt" href="{{url('/collections')}}">Ver Productos</a></div>
                    </div>
                </div>
            </div>
        </article>
        <article class="articles-container p-1">
            <div class="d-flex flex-center">

                <div class="postcard">
                    <a class="postcard__img_link" href="{{url('/collections')}}">
                        <img class="postcard__img" src="http://www.sanfranciscotextiles.com/wp-content/uploads/2021/05/5.jpg" alt="Image de l'article" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title txt t">Lana de Oveja</h1>
                        <div class="postcard__preview-txt t">
                            Hilado de lana en cono esta elaborado en base 100% de lana de oveja.
                             La característica principal del producto radica en su suavidad,
                            colores desde una gama natural hasta colores teñidos según el requerimiento del cliente. <hr>
                            <a class="ml-1 txt" href="{{url('/collections')}}">Ver Productos</a></div>
                    </div>
                </div>
            </div>
        </article>
        <article class="articles-container p-1">
            <div class="d-flex flex-center">

                <div class="postcard">
                    <a class="postcard__img_link" href="{{url('/collections')}}">
                        <img class="postcard__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW2TIFxAst3MKRQ5N8td9iaYXwMrKFvN4TWYnv97ujo2v9u82uPoe7s4xth9FbYouGkok&usqp=CAU" alt="Image de l'article" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title txt t">Lana de Algodon</h1>
                        <div class="postcard__preview-txt t">
                            El hilo de algodón es un producto natural. Es decir, en su forma pura no se mezcla con hilos sintéticos,
                            sino que consta de 100% algodón. El hilo de algodón es muy duradero y es fácil de trabajar <hr>
                            <a class="ml-1 txt" href="{{url('/collections')}}">Ver Productos</a></div>
                    </div>
                </div>
            </div>
        </article>
        <article class="articles-container p-1">
            <div class="d-flex flex-center">

                <div class="postcard">
                    <a class="postcard__img_link" href="{{url('/collections')}}">
                        <img class="postcard__img" src="https://1.bp.blogspot.com/-YPESRAnQ4Uo/UsSM-RZTTAI/AAAAAAAADgw/0TlDV4GtH1o/s1600/bambi+todos.jpg" alt="Image de l'article" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title txt t">El dralon</h1>
                        <div class="postcard__preview-txt t">
                            El dralón es una fibra acrílica de hilado en seco y húmedo. Muy parecida al hilo de algodón, perfecto para cualquier tipo de piel. Este material se utiliza en muchos elementos diferentes <hr>
                            <a class="ml-1 txt" href="{{url('/collections')}}">Ver Productos</a></div>
                    </div>
                </div>
            </div>
        </article>
        <article class="articles-container p-1">
            <div class="d-flex flex-center">

                <div class="postcard">
                    <a class="postcard__img_link" href="{{url('/collections')}}">
                        <img class="postcard__img" src="https://sc04.alicdn.com/kf/Ha774c713bcfb47fb848bd499e81300a9l.jpg" alt="Image de l'article" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title txt t">Propileno</h1>
                        <div class="postcard__preview-txt t">
                            El dralón es una fibra acrílica de hilado en seco y húmedo. Muy parecida al hilo de algodón,
                             perfecto para cualquier tipo de piel. Este material se utiliza en muchos elementos diferentes <hr>
                            <a class="ml-1 txt" href="{{url('/collections')}}">Ver Productos</a></div>
                    </div>
                </div>
            </div>
        </article>
        <div class=" py-5 mt-5">
            <div class="container py-4">
                <div class=" text-start position-relative pb-3 mb-5 " style="max-width: 600px;">
                    <h5 class="fw-bold txt text-uppercase t ">POR QUÉ ELEGIRNOS
                    </h5>
                    <h1 class="mb-0 txt1 t">Que Nos Diferencia De Los Demas Marcas</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 ">
                                <div class="bg-headerr rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa fa-cubes text-white"></i>
                                </div>
                                <h4 class="t txt1">Capacitaciones</h4>
                                <p class="mb-0 t ">En nuestra tienda-taller, ofrecemos la disponibilidad de ayudarles con los usos que le damos a la lana</p>
                            </div>
                            <div class="col-12 ">
                                <div class="bg-headerr rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                                </div>
                                <h4 class="t txt1">Garantia</h4>
                                <p class="mb-0 t">Le Ofrecemos la garantia de contar con productos de una gama unica en el mercado.Asi mismo contamos con una gran variedad de colores</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded " src="https://www.lalanalu.com/themes/at_nova/assets/img/modules/appagebuilder/images/lalanalu-tienda-taller.jpg" style="object-fit: cover; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 ">
                                <div class="bg-headerr rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa fa-users-cog text-white"></i>
                                </div>
                                <h4 class="txt1">Equipo Capacitado</h4>
                                <p class="mb-0 t">Nuestro Equipo de venta le garantizara una calida atencion personalizada</p>
                            </div>
                            <div class="col-12 ">
                                <div class="bg-headerr rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <h4 class="txt1">suporte todos los dias</h4>
                                <p class="mb-0 t">Nuestro Equipo esta dispuesto a escucharle y ofrecerle el cambio del producto si este tuviera fallas o si llevo un color equivocado
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

          <!-- Vendor Start -->
    <div class="container-fluid py-5 align-items-center justify-content-center text-center" >
        <div class="container pt-4 m-4">
            <div class=" text-center position-relative mb-5 mx-auto " style="max-width: 600px;">
                <h5 class="fw-bold txt text-uppercase t ">En Coperacion Con:
                </h5>

            </div>
            <div class="bg-white mx-auto ">
                <div class=" flex-center  " >
                    <img src="https://scontent.faqp2-3.fna.fbcdn.net/v/t39.30808-6/320776717_1907824062892724_902623712252375933_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeESyLdrdOKs4XwnDYzLBHHKas5RJHxyv3dqzlEkfHK_dxvTNnangzclgCEKRZ0yqZWv4m5S7QPBz0VXiVZGkcK1&_nc_ohc=jiIoBY4DK1AAX-OmOGE&_nc_ht=scontent.faqp2-3.fna&oh=00_AfDA_WOQIhJ8HRWJsR8MGtf7tcH2sjRfPvf-3g3YygUluQ&oe=63A573AD" alt="">
                    <img src="https://scontent.faqp2-3.fna.fbcdn.net/v/t39.30808-6/320765049_835376727694055_8903999179267464228_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeF0ynRF0ew1gFURS3q80ooqHTO9JkSSmrodM70mRJKaus94CEoSmAUdu7-VnW3XMxyLFkyoBIQhrW6quukX4g5O&_nc_ohc=EYnyw8i4DB8AX_Y_UvE&_nc_ht=scontent.faqp2-3.fna&oh=00_AfD8LC8ZQfshMRvz-Fp2r9oytOP94WjdhQHCNEZdpCDLtw&oe=63A60DB6" alt="">
                    <img src="https://scontent.faqp2-3.fna.fbcdn.net/v/t39.30808-6/320756081_5144144689020816_7140017356826715415_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFdz0r-iVX-pnoevExnlVvvf39FOm0do8Z_f0U6bR2jxv1PP2BzIQeQcjcCuupO3FU21RNOpTtbQGTzKM2dWCVX&_nc_ohc=rhjwaeuVXvsAX_QVZdH&_nc_ht=scontent.faqp2-3.fna&oh=00_AfC3BpijaP6n-tWvcq0Xe9S6ObWY_y3p4yBfcQaoPzXepw&oe=63A645FC" alt="">
                    <img  src="https://scontent.faqp2-3.fna.fbcdn.net/v/t39.30808-6/320776717_1907824062892724_902623712252375933_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeESyLdrdOKs4XwnDYzLBHHKas5RJHxyv3dqzlEkfHK_dxvTNnangzclgCEKRZ0yqZWv4m5S7QPBz0VXiVZGkcK1&_nc_ohc=jiIoBY4DK1AAX-OmOGE&_nc_ht=scontent.faqp2-3.fna&oh=00_AfDA_WOQIhJ8HRWJsR8MGtf7tcH2sjRfPvf-3g3YygUluQ&oe=63A573AD" alt="">

                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    </div>
    </div>

</div>
{{-- body --}}
@endsection

