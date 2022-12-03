<?php
/**
 * Open Source Social Network
 *
 * @package   Disable Developer Tool
 * @author    Red Crested <contact@redcrested.net>
 * @copyright (C) Red Crested
 * @license   Red Crested License  http://www.redcrested.net/license
 * @link      https://www.rescrested.net/
 * 
 */

echo ossn_view_form('DisableDevTool/admin/settings', array(
    'action' => ossn_site_url() . 'action/disabledevtool/admin/settings',
));
