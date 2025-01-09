@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <div class="btn-header-pc">
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
            </div>
            <div class="breadcrumb-row" style="position:relative; z-index:1;">
                <div class="container-xxl">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_merchandasing') }}">Home</a></li>
                        <li>Merchandasing</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="btn-header-mobile">
            <div class="breadcrumb-row" style="margin-top: 80px;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_merchandasing') }}">Home</a></li>
                        <li>Merchandasing</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="content-area" style="padding: 10px 20px;">
            <div class="container">
                @if ( count($presentacion) > 0)
                <div class="p-a20 bg-white selector-d m-b20 box-elevado">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h3 class="text-uppercas" style="color: #00b01a;"><b>{{ $presentacion[0]->content }}</b></h3>
                            <p>{{ $presentacion[1]->content }}</p>
                            <div class="dez-divider divider-2p icon-center" style="background: #00b01a;">
                            <i class="fa fa-truck text-white" style="background: #00b01a;"></i></div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div> --}}

      
        
        <section style="padding: 40px 15px;">
            <div class="container-xxl">
                <div class="row">
                    @foreach ($merchandasing as $key => $mer )
                        <div class="col-md-3" style="padding: 15px;">
                            <div class="box-producto">
                                <div>
                                    <img style="width: 100%;" src="{{ $mer->item->items[0]->content }}" alt="img_producto">
                                    <h4 class=" pt-2">{{ $mer->item->items[1]->content }}</h4>
                                </div>
                                <div class="texto-oculto-js">
                                    <p>
                                        {{ $mer->item->items[2]->content }}
                                    </p>
                                </div>
                                <br>
                                <a href="" class="btn btn-green">
                                    <i class="fab fa-whatsapp"></i> &nbsp;Adquirir Ahora
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>



    <!-- Footer -->
    <x-peru.footer-area />
    <!-- Footer END-->
@endsection
