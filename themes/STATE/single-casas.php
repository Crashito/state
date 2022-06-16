<?php
/**
 * Single template. 
 * Pagina de un post de blog.
 * 
 * @package STATE
 **/


?>
<?php get_header();?>

        <!-- start banner section -->
        <section class="pb-0 overflow-visible position-relative bg-light-gray padding-eleven-lr lg-padding-four-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 order-2 z-index-1 padding-10-rem-left padding-60px-bottom lg-padding-3-rem-left md-padding-15px-left">
                        <div class="d-flex flex-column justify-content-center h-100">
                            <div class="alt-font text-fast-blue text-uppercase font-weight-500 margin-30px-bottom xs-margin-10px-bottom">


                            <?php 
                            $tags = get_the_tags();    
                            if($tags):foreach($tags as $tag):
                            ?>

                                    <a class="text-fast-blue" href="<?php echo get_tag_link($tag->term_id); ?>">
                                        <?php echo $tag->name?>
                                    </a><span class="margin-10px-lr">&#8226;</span> 


                            <?php endforeach; endif;?>

                            
                            </div>

                            <h3 class="alt-font font-weight-500 letter-spacing-minus-1px text-extra-dark-gray margin-15px-bottom"> <?php the_field('colonia');?> </h3>
                            <p class="text-extra-large  margin-0px-top margin-15px-bottom"><?php the_field('calle');?> </p>

                            <p class="text-extra-large "> Desde: <span class="title-extra-small">	$<?php echo number_format( get_field('precio'),2,'.',',') ;?> MXN </span></p>


                        </div>
                    </div>
                    <div class="col-12 col-lg-6 px-0 order-1 align-self-end md-margin-60px-bottom d-flex justify-content-center">
                        <img class="overlap-image border-radius-8px md-no-margin-bottom" src="https://via.placeholder.com/600x600" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner section -->
        
        <!-- start section -->
        <section class="padding-70px-top sm-padding-50px-top position-relative padding-60px-bottom">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-xl-5 col-lg-6 last-paragraph-no-margin padding-3-half-rem-left md-padding-15px-left">
                        <?php the_field('descripcion'); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

    <section class="mt-0 pt-0">

         <!-- start container -->
        <div class="container-fluid padding-fourteen-lr">
                <div class="row">
                            <div class="col-7">
                                    <!-- start container -->
                                        <div class="row">
                                            <div class="col-12 tab-style-05">
                                                <div class="tab-box justify-content-start">
                                                    <!-- start tab navigation -->
                                                    <ul class="nav nav-tabs margin-5-rem-bottom md-margin-5-rem-bottom xs-margin-15px-lr font-weight-500 text-uppercase">
                                                        <li class="nav-item alt-font"><a class="nav-link active" href="#tab-nine1" data-bs-toggle="tab">General</a></li>
                                                        <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine2" data-bs-toggle="tab">Descripcion</a></li>
                                                        <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine3" data-bs-toggle="tab">Ubicacion</a></li>
                                                        <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine4" data-bs-toggle="tab">Imagenes</a></li>
                                                    </ul>
                                                    <!-- end tab navigation -->
                                                </div>
                                                <div class="tab-content">
                                                    <!-- start tab content -->
                                                    <div class="tab-pane med-text fade in active show" id="tab-nine1">

                                                        <div class="row row-cols-3">

                                                            <div class="col mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Estatus: </span>  
                                                                <span class="fw-bolder"><?php the_field('estatus');?></span>
                                                            </div>
                                                            
                                                            <div class="col mb-2"> 
                                                                <span><i class="fas fa-square"></i> Tipo de Terreno: </span>  
                                                                <span class="fw-bolder"><?php the_field('tipo_terreno');?></span>
                                                            </div>
                                                            
                                                            <div class="col-6 mb-2">
                                                                <span><i class="fas fa-vector-square"></i> Perimetro: </span>
                                                                <span class="fw-bolder">
                                                                    <?php the_field('tamano_del_terreno_irregular_altura'); ?>m x
                                                                    <?php the_field('tamano_del_terreno_irregular_izquierda'); ?>m x
                                                                    <?php the_field('tamano_del_terreno_irregular_derecha'); ?>m x
                                                                    <?php the_field('tamano_del_terreno_irregular_inferior'); ?>m
                                                                </span>
                                                            </div>

                                                            <div class="col-6 mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Area de construcción: </span>  
                                                                <span class="fw-bolder"><?php the_field('area_de_construccion');?>m² </span>
                                                            </div>

                                                            <div class="col  mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Plantas: </span>  
                                                                <span class="fw-bolder"><?php the_field('plantas');?></span>
                                                            </div>
                                                           
                                                            <div class="col  mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Recamaras: </span>  
                                                                <span class="fw-bolder"><?php the_field('recamaras');?></span>
                                                            </div>

                                                            <div class="col  mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Baños: </span>  
                                                                <span class="fw-bolder"><?php the_field('banos');?></span>
                                                            </div>

                                                            <div class="col  mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Medios Baños: </span>  
                                                                <span class="fw-bolder"><?php the_field('medio_bano');?></span>
                                                            </div>

                                                            <div class="col   mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Garage: </span>  
                                                                <span class="fw-bolder"><?php the_field('cochera');?></span>
                                                            </div>
                                                            
                                                            <div class="col   mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Cuarto de lavado: </span>  
                                                                <span class="fw-bolder"><?php the_field('cuarto_de_lavado');?></span>
                                                            </div>

                                                            <div class="col   mb-2"> 
                                                                <span><i class="fas fa-certificate"></i> Sala de TV: </span>  
                                                                <span class="fw-bolder"><?php the_field('sala_de_tv');?></span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end tab content -->
                                                    <!-- start tab content -->
                                                    <div class="tab-pane fade in" id="tab-nine2">
                                                        <div class="panel-group accordion-event accordion-style-04" id="accordion2" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                                            <div class="row">
                                                                    <div class="col-12 px-5">
                                                                        <?php the_content(); ?>
                                                                    </div>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                    <!-- end tab content -->
                                                    <!-- start tab content -->
                                                    <div class="tab-pane fade in" id="tab-nine3">
                                                        <div class="panel-group accordion-event accordion-style-04" id="accordion3" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                                            <?php echo get_field('ubicacion');?>
                                                        </div>
                                                    </div>
                                                    <!-- end tab content -->
                                                    <!-- start tab content -->
                                                    <div class="tab-pane fade in" id="tab-nine4">
                                                        
                                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active">
                                                                    <img src="https://via.placeholder.com/500" class="d-block w-100" alt="...">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                    <img src="https://via.placeholder.com/500" class="d-block w-100" alt="...">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                    <img src="https://via.placeholder.com/500" class="d-block w-100" alt="...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <!-- end tab content -->
                                                </div>
                                            </div>       
                                        </div>
                                     <!-- end container -->
                            </div>
                            <div class="col-5">
                                <div class="bg-white box-shadow-large padding-60px-all rounded-3">
                                    <h6>Contáctanos</h6>
                    
                                    <form action="">

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="nombre" class="form-control form-control-sm" id="nombre" aria-describedby="nombre">
                                        </div>
    
                                        <div class="col-6">
                                            <label for="telefono" class="form-label">Telefono</label>
                                            <input type="telefono" class="form-control form-control-sm" id="telefono" aria-describedby="telefono">
                                        </div>

                                        <div class="col-12">
                                            <label for="correo" class="form-label">Correo Electronico</label>
                                            <input type="correo" class="form-control form-control-sm" id="correo" aria-describedby="correo">
                                        </div>

                                        <div class="col-12">
                                            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                                            <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                                        <div class="col-12 d-grid gap-2">
                                            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                                        </div>

                                        <div>
                                            Al hacer clic en “Contactar ahora” aceptas nuestros Términos y Condiciones, Políticas de Privacidad y recibir comunicaciones de marketing.
                                           <br/> *  Campos obligatorios
                                        </div>


                                    </div>
                                        
                                            
                                        

                                    </form>

                                </div>
                            </div>

                </div>
    
        </div>
         <!-- end container -->

    </section>





<?php get_footer();?>