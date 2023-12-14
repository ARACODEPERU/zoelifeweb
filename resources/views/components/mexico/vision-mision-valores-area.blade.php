<div>
    <!-- Visión - Misión - Valores / STAR -->
    <div class="section-full bg-white p-t70 p-b40">
        <div class="container">
            <div class="  text-center ">
                <h2 class="h2">GRUPO <span class="text-primary">GREEN PLANET SRL</span></h2>
                <div class="dez-separator text-primary style-icon">
                    <img alt="" src="themes/zoelife/peru/images/leaf-green.png" />
                </div>
                <p style="width: 100%;">
                    {{ $nosotros[0]->items[0]->item->content }}
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b30 p-a30 left">
                        <div class="icon-bx-sm radius bg-primary">
                            <a href="#" class="icon-cell"><i class="fa fa-leaf"></i></a>
                        </div>
                        <div class="icon-content p-l40">
                            <h4 class="dez-tilte">Visión</h4>
                            <p>
                                {{ $nosotros[0]->items[1]->item->items[0]->content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b30 p-a30 left">
                        <div class="icon-bx-sm radius bg-primary">
                            <a href="#" class="icon-cell"><i class="fa fa-leaf"></i></a>
                        </div>
                        <div class="icon-content p-l40">
                            <h4 class="dez-tilte ">Misión</h4>
                            <p>
                                {{ $nosotros[0]->items[1]->item->items[1]->content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-bx-wraper bx-style-2 m-l40 m-b30 p-a30 left">
                        <div class="icon-bx-sm radius bg-primary">
                            <a href="#" class="icon-cell"><i class="fa fa-leaf"></i></a>
                        </div>
                        <div class="icon-content p-l40">
                            <h4 class="dez-tilte ">Valores</h4>
                            <p>
                                {{ $nosotros[0]->items[1]->item->items[2]->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visión - Misión - Valores / END -->
</div>
