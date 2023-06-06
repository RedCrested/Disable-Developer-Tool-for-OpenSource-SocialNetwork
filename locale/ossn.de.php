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
$de = array(
    'admin:redcrested:components' => 'RedCrested Components',
    'disabledevtool' => 'Disable Developer Tool',

    'com:disabledevtool:tip' => 'To enable Developer Tool functions temporarilly, add in the end of URL of your site "?[YOUR_KEY]=[YOUR_SECRET]". 
    <br/>For example, if you key is "ossn" and your secret is "test", then you need add ?ossn=test at the end of URL',
    'com:disabledevtool:tkname' => 'Key',
    'com:disabledevtool:key' => 'Secret',
    'com:disabledevtool:disablemenu' => 'Disable the right-click menu',
    'com:disabledevtool:clearlog' => 'Whether to clear the log every time',
    'com:disabledevtool:disabelselect' => 'Whether to disable selection text',
    'com:disabledevtool:disablecopy' => 'Whether to disable copying',
    'com:disabledevtool:disablecut' => 'Whether to disable cutting',
    'com:disabledevtool:disablepaste' => 'Whether to disable paste',
);
ossn_register_languages('de', $de);