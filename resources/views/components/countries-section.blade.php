<div class="container" style="padding: 60px 0px;">
    <div class="row">
        <div class="col-md-12">
            <div class="p-a30 bg-white m-b30 selector-d ">
                <div class="section-content">
                    <h2 class="text-uppercase">SELECCIONAR PAIS</h2>
                    <div class="dez-divider divider-2px bg-primary icon-left">
                        <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                    </div>
                </div>
                <div class="row">
                    @foreach ($pages as $page)
                        <div class="col-md-2 aracode-flags">
                            <a href="{{ route($page->route) }}" class="ara-contenedor-redondo">
                                @if ($page->country)
                                    <img style="height: 70px; width: auto; " src="{{ $page->country->image }}" />
                                @else
                                    SIN PAIS
                                @endif
                            </a>
                            <br>
                            <span><b>{{ $page->country->description }}</b></span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
