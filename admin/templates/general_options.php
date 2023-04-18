<h1>خيارات عامة</h1>
<?php settings_errors(); ?>
<form action="options.php" method="post">
    <?php 
        settings_fields('snapep-settings-group');
        do_settings_sections('snapep_options');
        submit_button();
    ?>
</form>