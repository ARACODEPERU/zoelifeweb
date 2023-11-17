@extends('layouts.peru')

@section('content')

    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">
        
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(themes/zoelife/peru/images/header-page/nosotrosPeru.png);">
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
                    <li>Nosotros</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        
        <!-- Visión - Misión - Valores / STAR -->
        <x-peru.vision-mision-valores-area></x-peru.vision-mision-valores-area>
        <!-- Visión - Misión - Valores / END -->
        
        
        <!-- Why Choose Us -->
        <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-dark choose-us" style="background-image:url(themes/zoelife/peru/images/background/garden/bg2.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="h2">Recomendaciones <span class="text-primary"> de  Preparación</span></h2>
                    <div class="dez-separator text-primary style-icon border-white"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"/></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li> Vierta el contenido de un sobre en una taza .</li>
                            <li>Agregue agua caliente o fria y mezcle.</li>
                            <li>Deleite su paladar.</li>
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

        
        
    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection