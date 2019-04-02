<?php
// +-----------------------------------------------------------------------+
// | piwigo/plugins/FiveStars/admin.php
// +-----------------------------------------------------------------------+
// | Five Stars plugin: admin menu
// +-----------------------------------------------------------------------+

    defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

    // Fetch the template.
    global $template;


    // Add our template to the global template
    $template->set_filenames(
        array('plugin_admin_content' => FIVESTARS_PATH.'admin.tpl')
        );
     
    // Assign the template contents to ADMIN_CONTENT
    $template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

?>