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

function disable_dev_tool()
{
   if (disabledevtool_get_settings() != false) {
      ossn_new_external_js('disable-devtool.js', '//cdn.jsdelivr.net/npm/disable-devtool@0.3.4', false);
      ossn_load_external_js('disable-devtool.js');

      ossn_extend_view('js/ossn.site.public', 'js/DisableDevTool');
   }

   if (com_is_active('PrivateNetwork')){
      ossn_add_hook('private:network', 'allowed:pages', 'com_disabledevtool_extend_allowed_pages');
   }

   ossn_register_page('unallowed','disabledevtool_unallowed_page');

   if (ossn_isAdminLoggedin()) {
      ossn_register_com_panel('DisableDevTool', 'settings');
      ossn_register_action('disabledevtool/admin/settings', __DISABLEDEVTOOL__ . 'actions/settings.php');

      ossn_register_menu_item(
         'topbar_admin',
         array(
            'name' => 'disabledevtool',
            'text' => ossn_print('disabledevtool'),
            'href' => ossn_site_url('administrator/component/DisableDevTool'),
            'style' => 'text-transform: capitalize;',
            'parent' => 'admin:redcrested:components',
         )
      );
   }
}
function com_disabledevtool_extend_allowed_pages($hook, $type, $allowed_pages, $params) {
    $allowed_pages[0][] = 'unallowed';
    
    return $allowed_pages;
}

function disabledevtool_unallowed_page(){
   http_response_code(403);
   include __DISABLEDEVTOOL__."plugins/default/pages/DisableDevTool/unallowed.php";
   exit();
}


function disabledevtool_get_settings()
{
   $component = new OssnComponents();
   $settings = $component->getComSettings('DisableDevTool');

   
   if ($settings) {
      $settings->disableMenu = empty($settings->disableMenu) ? "false" : $settings->disableMenu;
      $settings->clearLog = empty($settings->clearLog) ? "false" : $settings->clearLog;
      $settings->disabelSelect = empty($settings->disabelSelect) ? "false" : $settings->disabelSelect;
      $settings->disableCopy = empty($settings->disableCopy) ? "false" : $settings->disableCopy;
      $settings->disableCut = empty($settings->disableCut) ? "false" : $settings->disableCut;
      $settings->disablePaste = empty($settings->disablePaste) ? "false" : $settings->disablePaste;
   } else {
      $settings = new stdClass();
      $settings->key = 'test';
      $settings->tkname = 'ossn';
      $settings->disableMenu = 'true';
      $settings->clearLog = 'false';
      $settings->disabelSelect = 'false';
      $settings->disableCopy = 'false';
      $settings->disableCut = 'false';
      $settings->disablePaste = 'false';
   }
   //var_dump($settings);
   return $settings;
}


//initialize the component
ossn_register_callback('ossn', 'init', 'disable_dev_tool', 500);