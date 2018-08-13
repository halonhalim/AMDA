<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>:: AMDA BANGLADESH ::</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>fonts/opensans_light.css" />
        <link href='<?php echo base_url() . 'assets/site/'; ?>css/fnt/stylesheet.css' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/flexislider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/client.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/jquery.fancybox.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/site/'; ?>css/styles.css" />

        <link href="<?php echo base_url() . 'assets/site/'; ?>http://fonts.googleapis.com/css?family=Monda:400,700" rel="stylesheet" type="text/css">



        <link href='<?php echo base_url() . 'assets/site/'; ?>https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,800' rel='stylesheet' type='text/css'>
        -->

        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries 
        WARNING: Respond.js doesn't work if you view the page via file:// 
        [if lt IE 9]>
        <script src="<?php echo base_url() . 'assets/site/'; ?>https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="<?php echo base_url() . 'assets/site/'; ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



        <link href='<?php echo base_url() . 'assets/site/'; ?>https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic' rel='stylesheet' type='text/css'>




        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="<?php echo base_url() . 'assets/site/'; ?>s7.addthis.com/js/300/addthis_widget.js#pubid=ra-573056bc7630a500"></script>

    </head>

    <body>


        <div id="main-warpper">
            <!----------Start Header---------->
            <header class="header">
                <!----------Start Top Header--------->
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="logo">
                                    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() . 'assets/filemanager/' . $contact->logo; ?>"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 header-right">
                                <div class="back_title">
                                    <a href="http://dss-bd.org/" style="color:#00AC4F; text-transform: capitalize; margin-top:3px;">
                                        <h5 class="back_link"> Go to Down Syndrome &nbsp; <i style="font-size: 19px"
                                                                                             class="fa fa-arrow-circle-right" aria-hidden="true"></i></h5> </a>
                                </div>
                                <div class="social-icon">
                                    <ul>
                                        <li><a target="_blank" href="<?php echo $contact->facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank" href="<?php echo $contact->twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a target="_blank" href="<?php echo $contact->googleplus; ?>"><i class="fa fa-google" ></i></a></li>
                                        <li><a target="_blank" href="<?php echo $contact->youtube; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------End Top Header--------->


                <!----------Start Header Navigation--------->
                <div class="navigation">
                    <div class="menu-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="menu_inner"><!-- Begin : menu_inner -->
                                    <div id='cssmenu'>
                                        <ul>
                                            <li class="active"><a href='<?php echo base_url() ?>'>home</a></li>
                                            <li class="has-sub"><a href="#"> About us  </a>
                                                <ul>
                                                    <?php foreach ($this->aboutus_model->index() as $row) { ?>
                                                        <li><a href="<?php echo base_url() . 'page/aboutus/' . $row->id ?>"><?php echo $row->title; ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#">Core Programs</a>
                                                <ul>
                                                    <?php foreach ($this->coreprograms_model->index() as $row) { ?>
                                                        <li><a href="<?php echo base_url() . 'page/coreprograms/' . $row->id ?>"><?php echo $row->title; ?></a></li>
                                                        <?php } ?>
                                                </ul>
                                            </li>
                                            <li><a target="_blank" href="http://dss-bd.org/"> Down Syndrome </a></li>
                                            <li class="has-sub"><a href="#">Membership</a>
                                                <ul>
                                                   <?php foreach ($this->membership_model->index() as $row) { ?>
                                                        <li><a href="<?php echo base_url() . 'page/membership/' . $row->id ?>"><?php echo $row->title; ?></a></li>
                                                        <?php } ?>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#"> Gallery </a>
                                                <ul>
                                                    <li><a href="<?php echo base_url(); ?>page/photo">Photo</a></li>
                                                    <li><a href="<?php echo base_url(); ?>page/video">Videos</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="contact.php">Publication</a>
                                                <ul>
                                                    <li><a href="<?php echo base_url(); ?>page/year_ways">Year ways</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'page/contact'; ?>"> Contact us</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End : menu_inner -->
                            </div>
                        </div>
                    </div>

                    <!----------End Header Navigation--------->
            </header>
            <!----------End Header---------->

