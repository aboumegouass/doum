<h1>اتصل بنا</h1>
<?php settings_errors();  ?>
<form method="post" class="GH-contact-form" action="options.php">
    <?php settings_fields("GH-contact-forms");
    do_settings_sections("GH_contact_form"); ?>
    <?php submit_button(); ?>
</form>