<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Landslaget for mat og helse i skolen</title>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <div class="header clearfix">
            <nav>
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="navbar-toggle">
                            <ul class="nav-pills nav-nocollapse">
                            <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
                            </ul>
                        </div>
                        <a href="<?php echo site_url(); ?>">
                            <div class="logo"></div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <div class="pull-right">
                            <div class="social">
                                <div class="facebook icon"></div>
                                <div class="twitter icon"></div>
                                <div class="linkedin icon"></div>
                            </div>
                        </div>
                        <ul class="nav nav-pills pull-right navbar-nav">
                            <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<div class="jumbotron">
    <div class="container">
        <h1><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h1>
    </div>
</div>