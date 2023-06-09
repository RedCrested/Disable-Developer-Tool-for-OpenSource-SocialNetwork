<?php 
/**
 * Open Source Social Network
 *
 * @package   Disable Developer Tool
 * @author    Red Crested <contact@redcrested.net>
 * @copyright (C) Red Crested
 * @license   Red Crested License  http://www.redcrested.net/license
 * @link      https://www.redcrested.net/
 * 
 */

 $DisableDevTool_options = disabledevtool_get_settings();

?> 
//<script>
$(document).ready(function() {
    let config = {
        md5: '<?php echo md5($DisableDevTool_options->key); ?>', 
        url: '<?php echo ossn_site_url()."unallowed"; ?>', // Jump page when closing the page fails, the default value is localhost
        tkName: '<?php echo $DisableDevTool_options->tkname; ?>', // bypass url parameter name when disabled, default is ddtk
        
        disableMenu: <?php echo $DisableDevTool_options->disableMenu; ?>, // Whether to disable the right-click menu Default is true
        clearLog: <?php echo $DisableDevTool_options->clearLog; ?>, // Whether to clear the log every time
        disableSelect: <?php echo $DisableDevTool_options->disabelSelect; ?>, // Whether to disable selection text Default is false
        disableCopy: <?php echo $DisableDevTool_options->disableCopy; ?>, // Whether to disable copying, default is false
        disableCut: <?php echo $DisableDevTool_options->disableCut; ?>, // Whether to disable cutting, default is false
        disablePaste: <?php echo $DisableDevTool_options->disablePaste; ?>, // Whether to disable paste, default is false
    }   
    DisableDevtool(config);
});