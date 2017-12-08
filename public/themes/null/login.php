<?php echo theme_view('_header'); ?>
<style>body { background: #ffffff; } </style>

<div class="container"> <!-- Start of Main Container -->

    <?php
        echo isset($content) ? $content : Template::content();
    ?>
</div>
<?php echo theme_view('_footer', array('show' => true)); ?>