<?php  get_header(); ?>
<?php $homepage = get_field("homepage");
$about = get_field('about_us');
$feature = get_field("feature_destination");
$guide = get_field("guide");
$testimonial = get_field("testinomial");
$story = get_field("stories");
?>
    <!-- HomePAge -->
    <div class="container">

        <div class="row">
            <div class="col-auto mb-xl-5  pb-xl-5 mb-sm-0 pb-sm-0 mb-0 pb-0 align-self-center ">
                <img src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element2home.png" alt="">
            </div>
            <div class="col">
                <div class="row homepage">
                    <div class="col-xxl-6 col-lg-6 col-md-12">
                        <div class="explore">

                            <p class="h1 pe-5 me-5"><?php echo $homepage['title']; ?>
                            </p>

                        </div>
                        <div class="holiday ">
                            <h3><?php echo $homepage['small_title']; ?></h3>
                            <span></span>
                            <hr>
                        </div>
                        <div class="selector ">
                           <?php echo do_shortcode('[contact-form-7 id="375" title="Contact form 1"]'); ?>

                            <div class="d-flex justify-content-start justify-content-xl-start justify-content-lg-start alink">

                                <?php if($homepage['link']):?>
                                <a class="mx-2 my-4 btn btn-lg btn-warning text-center " href="<?php echo $homepage['link']; ?>">
                                    <?php echo $homepage['link_text']; ?>
                                </a>

                                <?php endif; ?>
                            </div>

                            <div class="d-flex justify-content-end">
                                <img src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element1home.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-12 image ">
                        <img src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element3home.png" alt="">
                        <img class="img-responsive img " src="<?php echo $homepage['image'];?>" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Second Page -->
    <div class="container my-5 py-5" id="about">
        <div class="row second pt-5">
            <div
                class="col-xxl-6 col-lg-6 col-md-12 order-xxl-first order-xl-first order-lg-first order-md-last  order-sm-last order-last  secondimage">
                <img class="img-responsive text-md-center" src="<?php echo $about['image'];?> " alt="" srcset="">
            </div>
            <div
                class="col-xxl-6 col-lg-6 col-md-12 secondtext text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center align-self-center">
                <p class="h2 mx-xl-5 pe-xl-5 p-0"><?php echo $about['about_title']; ?></p>
                <p class=" mx-xl-5 pe-xl-5 p-0"><?php echo $about['about_para']; ?>

                </p>
                <div class="d-flex justify-content-end mx-5 px-5">
                    <img class="mx-5 px-5" src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element1home.png" alt="" srcset="">

                </div>
                <div class="d-flex justify-content-center justify-content-xl-start justify-content-lg-start">
                    
                        

                        <?php if($about['about_link']):?>
                
                            <a class=" mx-xl-5 mx-0 btn btn-lg btn-warning text-center " href="<?php echo $about['about_link']; ?>"> 
                    
                                <?php echo $about['about_link_text']; ?>
                
                            </a>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>  
    <!-- Feature Destination -->
    <?php
        // check if the repeater field has rows of data
        if( have_rows('feature_destination') ):?>

            <div class="container my-5 py-5 " id="destination">
                <div class="row mx-5 features">
                    <div class="col-xxl col-lg-6 col-md-12  d-flex justify-content-md-center justify-content-lg-start justify-content-xxl-start featureshead">
                        <p class="h1"><?php echo $feature['title']; ?></p>
                        </p>
                        
                    </div>
                    <div class="col-xxl col-lg-6 col-md-12 d-flex justify-content-end featureview">
                        <?php if($feature['link']):?>
                            <a href="<?php echo $feature['link']; ?>" class="text-warning"><img class="mx-5 px-5  pb-5" src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element1home.png" alt="" srcset="">
                                <?php echo $feature['link_text']; ?><i class="bi bi-chevron-right"></i>
                                
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row featureimg">
                    <div class="col-auto align-self-center ">
                        <img class="mt-5 pt-5" src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element3home.png" alt="">
                    </div>
                    <?php query_posts(array('post_type' => 'destinations')); ?>
                    <?php
                     while (have_posts()) : the_post(); ?>        
                        <div class="col-xxl col-lg-auto mt-5  d-flex justify-content-center">
                            <div class=" card border-0 featureimage" style="width: 14.3rem;  height:  18.75rem;">
                                <a href="<?php  the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                                <div class="card-img-overlay  p-0 d-flex align-items-end">
                                    <div class=" des bg-white pe-5 featureplace ps-1  rounded-top">
                                        <h5 class="m-0 pt-2 text-dark"><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h5>
                                        <p class="m-0"><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>                                          
                </div>
            </div>  
        <?php endif; ?>

    <!-- Guide -->
    <div class="container my-5 py-5" id="partner">
        <div class="row guide pt-5">
            <div class="col-xxl-6 col-lg-6 col-md-12 guidetext text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center align-self-center">
                <div class="d-flex justify-content-start mx-5 py-5 px-5">
                    <img src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element1home.png" alt="" srcset="">
                </div>
                <p class="h2 mx-xl-5 pe-xl-5 p-0"><?php echo $guide['title']; ?> </p>
                <p class=" mx-xl-5 pe-xl-5 p-0"><?php echo $guide['para']; ?>
                </p>

                <div class="d-flex justify-content-center justify-content-xl-start justify-content-lg-start">
                <?php if($guide['link']):?>
                    <a class=" mx-xl-5 mx-0 btn btn-lg btn-warning text-center " href="<?php echo $guide['link']; ?>">
                    <?php echo $guide['link_text']; ?>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-end mx-5 px-5">
                    <img src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element3home.png" alt="" srcset="">
                </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-md-12 guideimage">
                <img class="img-responsive text-md-center " src="<?php echo $guide['image']?>" alt="" srcset="">
            </div>
        </div>
    </div>  
    <!-- Testinomial -->
    <div class="container testimonials my-5 py-5">
        <div class="row mx-5 testimonial ">
            <div class="col  d-flex justify-content-md-center justify-content-lg-start justify-content-xxl-start  testimonialhead">
                <p class="h1"><?php echo $testimonial['main_title']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-auto  pe-4 align-self-center">
                <img src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/testiimagelement1.svg" alt="" srcset="">
            </div>
            <div class="col row test mt-5">
                <div class="col-xxl-6 col-lg-6 col-md-12 testtext text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center align-self-center">
                    <div class="text-warning">
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                     <div class="testpara pe-xxl-5 me-xxl-5" >
                        <p ><?php echo $testimonial['para']; ?></p>
                     </div>

                     <div class="testname">
                        <h1 class="h1"><?php echo $testimonial['name']; ?></h1>
                        <p><?php echo $testimonial['designation']; ?></p>
                    </div>
                </div>
                <div class="col d-flex testimage justify-content-center align-self-center">
                    <div class="card border-0" style="width: 20rem;">
                        <div class="card-img">
                            <img src="<?php echo $testimonial['image']; ?>" class="card-img" alt="...">
                        </div>
                        <div class="card-img-overlay p-0">
                            <div class="row h-100">
                                <div class="col-auto cardleft">
                                    <div class="cardplus">
                                        <img src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/testiimagelement.svg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col cardright">
                                    <div class="row">
                                        <div class="col  cardcircle">
                                            <img src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/testiimagelement2.svg" alt=""
                                                srcset="">
                                        </div>

                                        <div class=" cardarrow">
                                            <div class="arrow ">
                                                <button
                                                    class="border rounded-circle ms-4 py-2 px-2 text-secondary"
                                                    type="button" data-bs-target="#carouselExampleControls"
                                                    data-bs-slide="prev"><i
                                                        class="bi bi-chevron-left"></i></button>
                                                <button
                                                    class="border rounded-circle p-2 text-dark border-dark"
                                                    type="button" data-bs-target="#carouselExampleControls"
                                                    data-bs-slide="next"><i
                                                        class="bi bi-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <!-- Stories -->
        <div class="container trending my-5 py-5">
            <div class="row mx-5  ">
                <div class="col-xxl col-lg-6 col-md-12  d-flex justify-content-md-center justify-content-lg-start justify-content-xxl-start  trendhead">
                    <p class="h1"><?php echo $story['main_title']; ?><img class="mx-5 px-5  pb-5" src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element3home.png" alt="" srcset=""></p>
                </div>
                <div class="col-xxl col-lg-6 col-md-12 d-flex justify-content-end trendview">
                    <?php if($story['view_link']):?>
                            <a href="<?php echo $story['view_link']; ?>" class="text-warning">
                            <?php echo $story['view']; ?>
                            <i class="bi bi-chevron-right"></i></a>
                        <?php endif; ?>                                   
                </div>
            </div>

            <div class="row ">
                <div class="col-auto align-self-center mt-5 p-0">
                    <img class="mt-5 pt-5 me-5 " src="<?php bloginfo('template_directory'); ?>./Assets/Build/Images/element1home.png" alt="">
                </div>
               <?php $args = array ('category_name' => 'Blog');

                      $front_page_query = new WP_Query( $args );?>
                <?php
                     while  ( $front_page_query->have_posts() ) : $front_page_query->the_post();; ?>
                        <div class="col-xxl col-lg-auto mt-5 pt-3 pe-2 p-0 d-flex justify-content-center">
                            <div class="card border-0 rounded-3" style="width: 15.6rem;  height:  27.75rem;">
                                <div class="card-body">
                                    <?php the_post_thumbnail(); ?>
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <a href="<?php  the_permalink(); ?>" class="btn btn-primary">
                                        <?php echo $story['link_text']; ?>
                                    </a> 
                                </div>
                            </div>
                        </div>
                <?php endwhile;?>
            </div>
            
        </div>  
        <div class="container-fluid">
            <div class = " d-flex justify-content-end">
                <button id = "back-to-top">
                    <i class="bi bi-chevron-double-up"></i>
                </button>
            </div>
        </div>
<?php  get_footer(); ?>
