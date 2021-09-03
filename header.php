<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="bootstrap menu">
    <title>Bootstrap menu</title>
    <!-- bootstrap cdn -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <!-- <link href="/assets/css/bootstrap.min.css"> -->

    <!-- custom css -->
    <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->


    <?php wp_head();?>
</head>
<body>
    
    <section id="header" class="bg-primary">
        <div class="container">
            <header>
                
                <nav class="navbar navbar-expand-md bg-primary navbar-dark p-1">
                    <a class="navbar-brand" href="#">shamim</a>


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <?php
                            wp_nav_menu( array(
                                'theme_location'	=> 'header',
                                'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
                                'container'			=> 'div',
                                'container_class'	=> 'collapse navbar-collapse',
                                'container_id'		=> 'navbarSupportedContent',
                                'menu_class'		=> 'navbar-nav ms-auto',
                                'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                                'walker'			=> new WP_Bootstrap_Navwalker()
                            ) );
                            ?>
                      <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active " href="#">Home</a></li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               service
                              </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">backend site</a></li>
                                <li><a class="dropdown-item" href="#">fontend site</a></li>
                                <li><a class="dropdown-item" href="#">bug fix</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="buttton" data-bs-toggle="dropdown" aria-expanded="true" >design</a>
                            <ul class="dropdown-menu" aril-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">template design</a></li>
                                <li><a class="dropdown-item" href="#">template design</a></li>
                                <li><a class="dropdown-item" href="#">template design</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">contact</a></li>
                    </ul>
                    </div> -->
                </nav>
            </header>
        </div>
    </section>



