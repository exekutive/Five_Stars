<?php 

/*
Version     :   0.1
Plugin Name :   Five Stars
Plugin URI  :   tba
Author      :   executive
Author URI  :   tba
Description :   Reads the five star rating from image files, 
                and <does things...>
                * IMPORTANT: * Requires the ImageMagick PHP extension.
                Compatible with Adobe image software.
                ('Rating' described in Section 8.4 of XMP specification)

To do       :   - Add link to XMP data on image properties page
                - Show rating in image exif information panel
                - Create tag from rating during sync
                - Integrate XMP rating with Piwigo rating system (6*)
*/

// +-----------------------------------------------------------------------+
// | piwigo/plugins/FiveStars/main.inc.php
// +-----------------------------------------------------------------------+
// | main module
// +-----------------------------------------------------------------------+



    defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

// +-----------------------------------------------------------------------+
// |    Define plugin globals & constants                                    
// +-----------------------------------------------------------------------+

    define('FIVESTARS_ID',      basename(dirname(__FILE__)));
    define('FIVESTARS_PATH',    PHPWG_PLUGINS_PATH . FIVESTARS_ID . '/');

// +-----------------------------------------------------------------------+
// |    Define paths to additional files needed
// +-----------------------------------------------------------------------+

    //  housekeeping code
//  $maintenanceFile = FIVESTARS_PATH.'include/maintenance.inc.php';


// +-----------------------------------------------------------------------+
// |    Add event handlers
// +-----------------------------------------------------------------------+

    //  event handler OOP template
    //add_event_handler('eventName', array('class','method'),EVENT_HANDLER_PRIORITY_NEUTRAL, $lazyLoadFile);


    //  Hook onto plugin menu creation event
    add_event_handler('get_admin_plugin_menu_links', 'fivestars_admin_menu');

// +-----------------------------------------------------------------------+
// |    Functions
// +-----------------------------------------------------------------------+


    // Add Five Stars to the plugin menu
    function fivestars_admin_menu($menu) {
     array_push(
       $menu,
       array(
         'NAME'  => 'Five Stars',
         'URL'   => get_admin_plugin_menu_link(FIVESTARS_PATH.'admin.php')
       )
     );
     return $menu;
    }    

?>