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

define('__DISABLEDEVTOOL__', ossn_route()->com . 'DisableDevTool/'); 

 function disable_dev_tool(){
   if (disabledevtool_get_settings()!=false){
      ossn_new_external_js('disable-devtool.js', '//cdn.jsdelivr.net/npm/disable-devtool@0.3.1', false);
      ossn_load_external_js('disable-devtool.js');
   
      ossn_extend_view('js/ossn.site.public', 'js/DisableDevTool'); //adicionado public. confirmar funcionamento
   }

   if(ossn_isAdminLoggedin()) {
        ossn_register_com_panel('DisableDevTool', 'settings');
        ossn_register_action('disabledevtool/admin/settings', __DISABLEDEVTOOL__ . 'actions/settings.php');
    }
 }


function disabledevtool_get_settings(){
   $component = new OssnComponents();
   $settings  = $component->getComSettings('DisableDevTool');

   if($settings){
      $settings->key = !isset($settings->key) ? 'test' : $settings->key;
      $settings->tkname = !isset($settings->tkname) ? 'ossn' : $settings->tkname;
      $settings->disableMenu = !isset($settings->disableMenu) ? 'true' : (empty($settings->disableMenu) ? "false": $settings->disableMenu);
      $settings->clearLog = !isset($settings->clearLog) ? 'false' : (empty($settings->clearLog) ? "false" : $settings->clearLog);
      $settings->disabelSelect = !isset($settings->disabelSelect) ? 'false' : (empty($settings->disabelSelect) ? "false" : $settings->disabelSelect);
      $settings->disableCopy = !isset($settings->disableCopy) ? 'false' : (empty($settings->disableCopy) ? "false" : $settings->disableCopy);
      $settings->disableCut = !isset($settings->disableCut) ? 'false' : (empty($settings->disableCut) ? "false" : $settings->disableCut);
      $settings->disablePaste = !isset($settings->disablePaste) ? 'false' : (empty($settings->disablePaste) ? "false" : $settings->disablePaste);
      return $settings;
   } else {
      return false;
   }
}


//initialize the component
ossn_register_callback('ossn', 'init', 'disable_dev_tool');
