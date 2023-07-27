@extends('layouts.navbar')

@section('content')
<style>
    .carousel {
        height: 60vh;
        /* Ajusta la altura deseada en porcentaje */
        overflow: hidden;
        /* Para recortar las imágenes más grandes */
    }

    .carousel-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<div class="container">
    <div class="alert alert-success" role="alert">
        incio <i class="bi bi-heart"></i>
    </div>
</div>
<div class="container"> <!-- Agregamos un contenedor para centrar el carrusel -->
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://png.pngtree.com/background/20230622/original/pngtree-landing-page-template-for-web-showcasing-3d-computer-design-with-open-picture-image_3950513.jpg" class="d-block w-100 carousel-image" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://png.pngtree.com/background/20230417/original/pngtree-website-blu-ray-technology-picture-image_2447430.jpg" class="d-block w-100 carousel-image" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/foto-gratis/fondo-tecnologia-futurista-3d-ondas-datos-que-fluyen_1048-17735.jpg" class="d-block w-100 carousel-image" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container my-4">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://png.pngtree.com/background/20230622/original/pngtree-landing-page-template-for-web-showcasing-3d-computer-design-with-open-picture-image_3950513.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://png.pngtree.com/background/20230417/original/pngtree-website-blu-ray-technology-picture-image_2447430.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/foto-gratis/fondo-tecnologia-futurista-3d-ondas-datos-que-fluyen_1048-17735.jpg" class="card-img-top img-fluid" style="height: 35%;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
            <img src="https://img.freepik.com/foto-gratis/fondo-tecnologia-futurista-3d-ondas-datos-que-fluyen_1048-17735.jpg" class="card-img-top img-fluid" style="height: 35%;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection