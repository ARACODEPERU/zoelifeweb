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
                    <li>Testimonios</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        
        <div class="content-area">
            <div class="container">
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