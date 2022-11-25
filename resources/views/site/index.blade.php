@extends('layouts.site')

@section('contenido')

    <section id="home">

        <div class="container-fluid position-relative bg-home vh-100 px-4 px-lg-5">
            
            <!-- header -->
            <div class="d-flex justify-content-between align-items-center bg- py-4 py-lg-5">
                <div>
                    <a href="{{ route('site.home') }}"><img src="{{ asset('img/svg/logo.svg') }}" alt="Logo" class="img-fluid"></a>
                </div>
                <div class="d-none d-lg-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#quien-soy" class="nav-link link-light">¿Quién soy?</a>
                        </li>
                        <li class="nav-item">
                            <a href="#el-test" class="nav-link link-light">El Tets</a>
                        </li>
                        <li class="nav-item">
                            <a href="#cpa" class="nav-link link-light">¿Cómo puedo ayudarte?</a>
                        </li>
                        <li class="nav-item">
                            <a href="#articulos" class="nav-link link-light">Artículos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contacto" class="nav-link link-light">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-lg-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="https://www.instagram.com/vocaciondeorientar" target="_blank" class="nav-link link-light pe-2"><i class="bi bi-instagram fs-5 text-light"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.linkedin.com/in/marcostabossi" target="_blank" class="nav-link link-light ps-2"><i class="bi bi-linkedin fs-5 text-light"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none">
                    <a href="javascript:void(0)"><i class="bi bi-list fs-2 text-light" data-bs-toggle="modal" data-bs-target="#menuModal"></i></a>
                </div>
            </div>
            <div class="position-absolute position-absolute top-50 start-50 translate-middle w-75">
                <div class="text-center">
                    <h1 class="display-3 text-light">PENSEMOS EN TU FUTURO</h1>
                    <h2 class="h5 fw-light text-light lh-base">"Lo más importante en la vida es que lo más importante sea lo más importante"<br><span class="small">- Stephen Covey -</span></h2>
                    <a href="#quien-soy" class="btn btn-primary btn-sm btn-pill fw-light mt-5" role="button">COMENCEMOS</a>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 mb-lg-5">
                <i class="bi bi-arrow-down text-light fs-3"></i>
            </div>
        </div>

    </section>

    <section id="quien-soy">
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-around align-items-center g-4">
                    <div class="col-lg-5">
                        <div class="position-relative">
                            <img src="{{ asset('img/marcos-tabossi.jpg') }}" class="img-fluid rounded-5 shadow" alt="Marcos Tabossi">
                            <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block">
                                <img src="{{ asset('img/svg/info.svg') }}" alt="Información">
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle d-lg-none">
                                <img src="{{ asset('img/svg/info.svg') }}" class="w-75 mx-auto d-block" alt="Signo">
                            </div>                              
                        </div>
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <h3 class="h1 fw-light mb-4 mt-4 mt-lg-0">Marcos Tabossi</h3>
                        <p class="fw-light">Psicólogo, docente y escritor. Me especializo desde hace doce años en el área de Orientación Vocacional en el ámbito público -Universidad Nacional de Luján- y privado acompañando a jóvenes y adultos a elegir una carrera o diagramar un proyecto de vida.</p>
                        <p class="fw-light">He llevado a cabo distintos dispositivos para abordar esta problemática juvenil: procesos individuales, grupales y dictando talleres presenciales y virtuales con los últimos años del colegio secundario.</p>
                        <a href="https://www.linkedin.com/in/marcostabossi" target="_blank" class="btn btn-primary btn-sm btn-pill fw-light mt-4" role="button">MÁS SOBRE MI</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="el-test">
        <div class="container-fluid bg-secondary py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-around align-items-center g-4">
                    <div class="col-lg-5 text-center text-lg-start order-2 order-lg-1">
                        <h3 class="h1 fw-light mb-4 mt-4 mt-lg-0">¿Dónde esta el test de orientación vocacional?</h3>
                        <p class="fw-light">Si estás pensando cómo seguir con tu vida, qué estudiar o a qué dedicarte, es importante que lo hagas con el acompañamiento, el asesoramiento y la mirada de un especialista en el área.</p>
                        <p class="fw-light">La basta cantidad de test y técnicas que pueden encontrarse fácilmente en internet son un arma de doble filo y pueden confundir aún más si se realizan en forma aleatoria (sin saber cuáles están probados y cuáles no), en forma aislada (sin el asesoramiento del profesional que pueda contextualizar el test como parte del todo que es el proceso vocacional) y como un fin en sí mismo (tomando el resultado del test como resultado final).</p>
                    </div>                    
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="position-relative">
                            <img src="{{ asset('img/test-orientacion.jpg') }}" class="img-fluid rounded-5 shadow" alt="Test Orientación Vocacional">
                            <div class="position-absolute top-50 start-0 translate-middle d-none d-lg-block">
                                <img src="{{ asset('img/svg/signo-interrogacion.svg') }}" alt="Signo">
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle d-lg-none">
                                <img src="{{ asset('img/svg/signo-interrogacion.svg') }}" class="w-75 mx-auto d-block" alt="Signo">
                            </div>                             
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="cpa">
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h3 class="h1 fw-light text-center mb-0">¿Cómo puedo ayudarte?</h3>
                <div class="row justify-content-around align-items-center g-5 mt-3 mt-lg-5">
                    <div class="col-lg-3">
                        <div class="position-relative">
                            <img src="{{ asset('img/consulta-individual.jpg') }}" class="img-fluid rounded-5 shadow-sm" alt="Consulta Individual">
                            <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block">
                                <img src="{{ asset('img/svg/persona.svg') }}" alt="Persona">
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle d-lg-none">
                                <img src="{{ asset('img/svg/persona.svg') }}" alt="Persona">
                            </div>                                
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h4 class="h3 fw-light mb-0">Consulta individual</h3>
                        <p class="fw-light my-3">Permite tener en consideración un trabajo personalizado. El proceso consta de una serie de encuentros que se pautan con cada consultante en forma singular...</p>
                        <a href="#offcanvasConsultaIndividual" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasConsultaIndividual" class="text-decoration-none fw-bold">Más información <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="col-lg-3">
                        <div class="position-relative">
                            <img src="{{ asset('img/proceso-grupal.jpg') }}" class="img-fluid rounded-5 shadow-sm" alt="Proceso Grupal">
                            <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block">
                                <img src="{{ asset('img/svg/personas.svg') }}" alt="Personas">
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle d-lg-none">
                                <img src="{{ asset('img/svg/personas.svg') }}" alt="Persona">
                            </div>      
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h4 class="h3 fw-light mb-0">Proceso grupal</h3>
                        <p class="fw-light my-3">Ser parte de un grupo atravesado por las mismas preguntas enriquece el trabajo en conjunto y reduce las ansiedades y la sensación de ser el único que "le está pasando esto". Un espacio donde compartir experiencia, dudas e inquietudes potencia la capacidad de elegir de cada uno.</p>
                        <a href="#offcanvasProcesoGrupal" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasProcesoGrupal" class="text-decoration-none fw-bold">Más información <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="col-lg-3">
                        <div class="position-relative">
                            <img src="{{ asset('img/talleres.jpg') }}" class="img-fluid rounded-5 shadow-sm" alt="Talleres">
                            <div class="position-absolute top-50 start-100 translate-middle d-none d-lg-block">
                                <img src="{{ asset('img/svg/comentario.svg') }}" alt="Personas">
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle d-lg-none">
                                <img src="{{ asset('img/svg/comentario.svg') }}" alt="Persona">
                            </div>      
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h4 class="h3 fw-light mb-0">Talleres</h3>
                        <p class="fw-light my-3">Diseño talleres de acuerdo a las necesidades de la institución. Espacio de apertura al dilema vocacional. Echaremos luz a todos los factores que se ponen en juego al momento de tomar una decisión. Los visibles y los inconscientes. Un espacio propicio para comenzar a transitar el camino vocacional.</p>
                        <a href="#offcanvasTalleres" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasTalleres" class="text-decoration-none fw-bold">Más información <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="articulos">
        <div class="container-fluid bg-secondary py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h3 class="h1 fw-light text-center mb-lg-5">Artículos</h3>
                @livewire('site.articulos')
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container-fluid bg-grad py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center text-light">
                            <h4 class="h1 fw-light">¿Todavía tenes dudas?</h4>
                            <p class="fw-light my-4">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
                            <a href="https://wa.me/+542324477461" target="_blank" class="btn btn-light btn-sm btn-pill fw-light mt-4" role="button"><i class="bi bi-whatsapp me-1"></i> HABLEMOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid bg-dark">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center g-3">
                    <div class="col-lg-8">
                        <p class="text-light fw-light text-center text-lg-start mb-0"><span class="fw-bold">Vocación de Orientar</span> © Todos los derechos reservados</p>
                    </div>
                    <div class="col-lg-4">
                        <ul class="nav justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://wa.me/+542324477461" target="_blank" class="nav-link link-light"><i class="bi bi-whatsapp"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.instagram.com/vocaciondeorientar" target="_blank" class="nav-link link-light"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.linkedin.com/in/marcostabossi" target="_blank" class="nav-link link-light"><i class="bi bi-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('site.includes.modal-menu')

    @include('site.includes.canvas-consulta-individual')

    @include('site.includes.canvas-proceso-grupal')

    @include('site.includes.canvas-talleres')

    @include('site.includes.boton-wp')


@endsection