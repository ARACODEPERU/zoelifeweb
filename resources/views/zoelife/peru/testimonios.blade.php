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
			<!-- Left & right section start -->
			<div class="container">
				<!-- Gallery -->
				<div class="site-filters clearfix center m-b40">
					<ul class="filters" data-toggle="buttons">
						<li data-filter="" class="btn active">
							<input type="radio">
							<a href="#" class="site-button-secondry"><span>Todos</span></a> 
						</li>
						<li data-filter="coffee" class="btn">
							<input type="radio" >
							<a href="#" class="site-button-secondry"><span>Coffee 3 en 1</span></a> 
						</li>
						<li data-filter="alkalino" class="btn">
							<input type="radio">
							<a href="#" class="site-button-secondry"><span>Alkalino</span></a> 
						</li>
						<li data-filter="power" class="btn">
							<input type="radio">
							<a href="#" class="site-button-secondry "><span>Power</span></a> 
						</li>
					</ul>
				</div>

				<ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
					<li class="card-container col-md-4 coffee" style="padding: 15px;">
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
					</li>
					<li class="card-container col-md-4 alkalino" style="padding: 15px;">
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
					</li>
					<li class="card-container col-md-4 coffee" style="padding: 15px;">
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
					</li>
					<li class="card-container col-md-4 power" style="padding: 15px;">
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
					</li>
					<li class="card-container col-md-4 power" style="padding: 15px;">
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
					</li>
					<li class="card-container col-md-4 alkalino" style="padding: 15px;">
						<div class="aracode-box-with">
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
					</li>
				</ul>
				<!-- Gallery END -->
				<!-- Pagination start -->
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
			<!-- Left & right section  END -->
		</div>
        
    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection