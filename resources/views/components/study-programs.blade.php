<div>
    <div class="content-area">
        <!-- Left & right section start -->
        <div class="">
            <!-- Nuestro Equipo -->
            <div class="p-a30 bg-white m-b30 selector-d">
                <div class="section-head">
                    <h2 class="text-uppercase">{{ $programs->items[0]->item->content }}</h2>
                    <div class="dez-divider divider-2px  icon-left" style="background: #00b01a;">
                        <i class="fa fa-thumbs-o-up text-white" style="background: #00b01a;"></i>
                    </div>
                </div>
                <div class="section-content text-center ">
                    <div class="row">
                        @foreach ($programs->items as $k => $program)
                            @if ($k > 0)
                                <div class="col-md-4" style="padding: 15px;">
                                    <div class="dez-box m-b30">
                                        <div class="dez-media">
                                            <a href="javascript:void(0);">
                                                <img width="358" height="460"
                                                    src="{{ $program->item->items[0]->content }}" alt="">
                                            </a>
                                        </div>
                                        <div class="p-a10">
                                            <h4 class="dez-title m-b0"><a
                                                    href="">{{ $program->item->items[1]->content }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Nuestro Equipo END -->
        </div>
        <!-- Left & right section  END -->
    </div>
</div>
