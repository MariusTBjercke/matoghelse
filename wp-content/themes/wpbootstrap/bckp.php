<header>
    <div class="container">
        <div class="header clearfix">
            <nav>
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo site_url(); ?>">
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            echo '<img src="'.$image[0].'." alt="Landslaget for mat og helse i skolen">';
                            ?>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav nav-pills pull-right navbar-nav">
                            <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>