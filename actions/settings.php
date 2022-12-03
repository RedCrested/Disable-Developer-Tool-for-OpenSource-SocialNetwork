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

$component = new OssnComponents;
$settings  = array(
            'key' => input('key'), 
            'tkname' => input('tkname'),
            'disableMenu' => input('disableMenu'),
            'clearLog' => input('clearLog'),
            'disabelSelect' => input('disabelSelect'),
            'disableCopy' => input('disableCopy'),
            'disableCut' => input('disableCut'),
            'disablePaste' => input('disablePaste'),
            );
            
if($component->setSettings('DisableDevTool', $settings)) {
		ossn_trigger_message(ossn_print('ossn:admin:settings:saved'));
} else {
		ossn_trigger_message(ossn_print('ossn:admin:settings:save:error'), 'error');
}
redirect(REF);