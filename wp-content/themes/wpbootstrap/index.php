<?php
get_header();
?>
<?php
if (get_the_title() === 'Nyheter') {
    include('nyheter.php');
} else if (get_the_title() === 'Om oss') {
    ?>
    <div class="container">
        <div class="row">
            <?php
            $content = apply_filters('the_content', $post->post_content);
            echo $content;
            include('omoss.php');
            ?>
        </div>
    </div>
    <?php
    } else {
    ?>
    <div class="container">
        <div class="row">
            <?php
            $content = apply_filters('the_content', $post->post_content);
            echo $content;
            ?>
        </div>
    </div>
    <?php
    }
    ?>
<?php
get_footer();
?>