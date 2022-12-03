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

 $settings = disabledevtool_get_settings();
?>

<div>
    <i class="fa fa-info-circle"></i> <?php echo ossn_print('com:disabledevtool:tip'); ?><br>
</div>

<br/>
<div>
    <label>
        <?php echo ossn_print('com:disabledevtool:tkname'); ?>
    </label>
    <input type="text" value="<?php echo $settings->tkname; ?>" name="tkname" id="tkname" />
</div>

<div>
	<label>
		<?php echo ossn_print('com:disabledevtool:key'); ?>
	</label>
	<input type="text" value="<?php echo $settings->key; ?>" name="key" id="key" />
</div>


<br/>
<div>
    <input type="checkbox" name="disableMenu" value='true' <?php echo $settings->disableMenu=="true" ? "checked": ""; ?>> <?php echo ossn_print('com:disabledevtool:disableMenu'); ?>
</div>

<br/>
<div>
    <input type="checkbox" name="clearLog" value='true' <?php echo $settings->clearLog=="true" ? "checked": ""; ?>> <?php echo ossn_print('com:disabledevtool:clearLog'); ?>
</div>

<br/>
<div>
    <input type="checkbox" name="disabelSelect" value='true' <?php echo $settings->disabelSelect=="true" ? "checked": ""; ?>> <?php echo ossn_print('com:disabledevtool:disabelSelect'); ?>
</div>

<br/>
<div>
    <input type="checkbox" name="disableCopy" value='true' <?php echo $settings->disableCopy =="true" ? "checked": "";?>> <?php echo ossn_print('com:disabledevtool:disableCopy'); ?>
</div>

<br/>
<div>
    <input type="checkbox" name="disableCut" value='true' <?php echo $settings->disableCut=="true" ? "checked": ""; ?>> <?php echo ossn_print('com:disabledevtool:disableCut'); ?>
</div>

<br/>
<div>
    <input type="checkbox" name="disablePaste" value='true' <?php echo $settings->disablePaste=="true" ? "checked": ""; ?>> <?php echo ossn_print('com:disabledevtool:disablePaste'); ?>
</div>

<br/>
<br/>
<div>
    <input type="submit" value="<?php echo ossn_print('save');?>" class="btn btn-success"/>
</div>
