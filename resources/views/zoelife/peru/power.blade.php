@extends('layouts.peru')

@section('content')

    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">
        
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(themes/zoelife/peru/images/header-page/contactanosPeru.jpg);">
            <!--
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
            -->
        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li><a href="{{ route('web_peru_inicio') }}">Productos</a></li>
                    <li>Power</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        
        

        <div class="container" style="padding: 60px 0px;">
            <div class="row">
                <div class="col-md-6">
                    <img src="themes/zoelife/peru/images/product/harina.png" alt="">
                </div>
                <div class="col-md-6">
                    <!-- Dividers with icon -->
                    <div class="p-a30 bg-white m-b30">
                        <div class="section-content">
                            <h2 class="text-uppercase">HARINA DE MORINGA ZOE LIFE</h2>
                            <div class="dez-divider divider-2px bg-primary icon-left"><i class="fa fa-thumbs-o-up bg-primary text-white"></i></div>
                        
                            <div class="m-b10">
                                <h5 class="text-uppercase">
                                    PROPIEDADES:
                                </h5>
                                <p>
                                    Posee más de 90 nutrientes y 46 antioxidantes, es rica en Vitamina C, vitamina A, quercetina y mucho más.
                                </p>
                                <p>
                                    La Vitamina A en forma de betacaroteno, potente antioxidante que protege especialmente la piel, las mucosas y órganos como la vejiga.
                                </p>
                                <p>
                                    Posee Vitaminas del grupo B (B1, B2, B3, B5, B6) y vitamina K.
                                </p>
                                <p>
                                    Contiene Vitamina E, gran antioxidante es importante para proteger las membranas celulares.
                                </p>
                                <p>
                                    Aporta minerales como el potasio, hierro, calcio, fósforo, selenio, magnesio, triptófano y zinc.
                                </p>
                                <p>
                                    Por su riqueza en este mineral (hierro) está indicada en casos de anemia.
                                </p>
                                <p>
                                    Por poseer aminoácidos esenciales, es una excelente fuente de proteínas para los vegetarianos y veganos.
                                </p>
                            </div>
                            <div class="m-b10">
                                <h5 class="text-uppercase">
                                    <span class="text-primary">BENEFICIOS</span>
                                </h5>
                                <div class="row">
                                    <div class="col-md-6"><i class="fa fa-check"></i> Mejora el sistema respiratorio.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Previene la diabetes.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Proteger el corazón.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Regular la presión arterial.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Regula el peso de forma nartural.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Prevenir y combatir la anemia.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Aumenta las defensas del organismo.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Efecto antiinflamatorio y analgésico.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Protege e hidratar la piel.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Mejorar la salud del sistema digestivo.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Previene el cáncer.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Mejora la salud visual.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Disminuye los efectos de la menopausia.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dividers with icon END -->
                </div>
            </div>
        </div>

        
        <!-- Why Choose Us -->
        <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-dark choose-us" style="background-image:url(themes/zoelife/peru/images/background/garden/bg2.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="h2">Recomendaciones <span class="text-primary"> de Uso Sugerido</span></h2>
                    <div class="dez-separator text-primary style-icon border-white"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"/></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li> Agregar ½ cucharadita en cada comida.</li>
                            <li> Preparaciones cerudas: zumos, batidos, esparciéndola sobre ensaladas, en aderezosa de verduras, etc.</li>
                            <li> Deleite su paladar.</li>
                        </ul>
                        <h3><span class="text-primary">Descargo De Responsabilidad:</span></h3>
                        <p>
                            Este producto no sustituye una dieta equilibrada.Consulte a su médico si es que está embarazada, 
                            dando de lactar, tomando algún medicamento o tiene alguna condición médica.Para más información del 
                            producto puede comunicarse a grupogreenplanet@gmail.com
                        </p>
                    </div>
                    <div class="col-md-6">
                        <iframe width="1257" height="707" src="https://www.youtube.com/embed/wvYWJ8NlKcU" title="Delicioso COFFEE 3 en 1 ZOE LIFE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us End -->

        
        <div class="content-area">
            <div class="container">

				
                <!-- Dividers with icon -->
                <div class="p-a20 bg-white m-b20">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h5 class="text-uppercase">Testimonios de la Harina de Moringa</h5>
                            <p>Lorem Ipsum is simply dummy text of the een the industry's standard dummy text ever since the 1500s, when an unknown printer took a Gallery of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
                            <div class="dez-divider divider-2px bg-primary icon-center"><i class="fa fa-truck bg-primary text-white"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Dividers with icon END -->

				<!-- blog grid -->
				<div id="masonry" class="dez-blog-grid-3 row">

					<div class="post card-container col-md-4">
						<div class="blog-post blog-grid date-style-2">
							<div class="dez-post-media dez-img-effect zoom-slow"> 
                                <iframe width="893" height="360" src="https://www.youtube.com/embed/0YSfKdntZa8" title="Testimonio: !! Sufria de Mucha Gastritis !!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
                            </div>
							<div class="dez-post-info">
								<div class="dez-post-title ">
									<h3 class="post-title"><a href="">Título del testimonio</a></h3>
								</div>
                                <div class="dez-post-tags">
									<div class="post-tags">
                                    </div>
								</div>
							</div>
						</div>
					</div>

                    <div class="post card-container col-md-4">
						<div class="blog-post blog-grid date-style-2">
							<div class="dez-post-media dez-img-effect zoom-slow"> 
                                <iframe width="893" height="360" src="https://www.youtube.com/embed/0YSfKdntZa8" title="Testimonio: !! Sufria de Mucha Gastritis !!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
                            </div>
							<div class="dez-post-info">
								<div class="dez-post-title ">
									<h3 class="post-title"><a href="">Título del testimonio</a></h3>
								</div>
                                <div class="dez-post-tags">
									<div class="post-tags">
                                    </div>
								</div>
							</div>
						</div>
					</div>

                    <div class="post card-container col-md-4">
						<div class="blog-post blog-grid date-style-2">
							<div class="dez-post-media dez-img-effect zoom-slow"> 
                                <iframe width="893" height="360" src="https://www.youtube.com/embed/0YSfKdntZa8" title="Testimonio: !! Sufria de Mucha Gastritis !!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
                            </div>
							<div class="dez-post-info">
								<div class="dez-post-title ">
									<h3 class="post-title"><a href="">Título del testimonio</a></h3>
								</div>
                                <div class="dez-post-tags">
									<div class="post-tags">
                                    </div>
								</div>
							</div>
						</div>
					</div>
                    
					<div class="post card-container col-md-4">
						<div class="blog-post blog-grid date-style-2">
							<div class="dez-post-media dez-img-effect zoom-slow"> 
                                <iframe width="893" height="360" src="https://www.youtube.com/embed/0YSfKdntZa8" title="Testimonio: !! Sufria de Mucha Gastritis !!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
                            </div>
							<div class="dez-post-info">
								<div class="dez-post-title ">
									<h3 class="post-title"><a href="">Título del testimonio</a></h3>
								</div>
                                <div class="dez-post-tags">
									<div class="post-tags">
                                    </div>
								</div>
							</div>
						</div>
					</div>

                    <div class="post card-container col-md-4">
						<div class="blog-post blog-grid date-style-2">
							<div class="dez-post-media dez-img-effect zoom-slow"> 
                                <iframe width="893" height="360" src="https://www.youtube.com/embed/0YSfKdntZa8" title="Testimonio: !! Sufria de Mucha Gastritis !!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
                            </div>
							<div class="dez-post-info">
								<div class="dez-post-title ">
									<h3 class="post-title"><a href="">Título del testimonio</a></h3>
								</div>
                                <div class="dez-post-tags">
									<div class="post-tags">
                                    </div>
								</div>
							</div>
						</div>
					</div>

                    <div class="post card-container col-md-4">
						<div class="blog-post blog-grid date-style-2">
							<div class="dez-post-media dez-img-effect zoom-slow"> 
                                <iframe width="893" height="360" src="https://www.youtube.com/embed/0YSfKdntZa8" title="Testimonio: !! Sufria de Mucha Gastritis !!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
                            </div>
							<div class="dez-post-info">
								<div class="dez-post-title ">
									<h3 class="post-title"><a href="">Título del testimonio</a></h3>
								</div>
                                <div class="dez-post-tags">
									<div class="post-tags">
                                    </div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- blog grid END -->

				<!-- Pagination -->
				<div class="pagination-bx">
					<ul class="pagination">
						<li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a></li>
						<li class="active"><a href="javascript:void(0);">1</a></li>
						<li><a href="javascript:void(0);">2</a></li>
						<li><a href="javascript:void(0);">3</a></li>
						<li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
				<!-- Pagination END -->

            </div>
        </div>

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection