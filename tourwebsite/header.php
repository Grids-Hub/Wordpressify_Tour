
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour</title>
    <?php wp_head();?>
</head>
<body>
    <!-- Header -->
    <header class="ms-xxl-5 ms-lg-3" >
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>./Assets/Images/logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="bi bi-three-dots-vertical"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                <?php
                if(has_nav_menu('primary-menu')){
                    wp_nav_menu(array(
                        "theme_location" => 'primary-menu',
                        'container' => "" ,
                        'items_wrap' => '<ul class="navbar-nav ms-auto  Navbar">%3$s</ul>'  
                    ));
                }
                 ?>                 
                </div>
            </div>
        </nav>
    </header> 