<?php /* Smarty version 2.6.19, created on 2010-09-22 20:56:01
         compiled from options.tpl */ ?>
<form id="options" action="?action=options" method="post">
<h2><?php echo $this->_tpl_vars['_lang']['options_title']; ?>
</h2>

<hr />

<table class="options">
<tbody>
<tr>
    <th style="width: 43%;">
        <img src="assets/images/im_new_inst.gif" width="32" height="32" alt="" />
        
        <label>
            <input type="radio" name="installmode" id="installmode0" value="0" <?php if ($this->_tpl_vars['installmode'] == 0): ?> checked="checked"<?php endif; ?> />
            <?php echo $this->_tpl_vars['_lang']['options_new_installation']; ?>

        </label>
    </th>
    <td>
        <?php echo $this->_tpl_vars['_lang']['options_install_new_copy']; ?>
 <?php echo $this->_tpl_vars['app_name']; ?>
 - 
        <strong><?php echo $this->_tpl_vars['_lang']['options_install_new_note']; ?>
</strong>
    </td>
</tr>
<tr>
    <th>
        <img src="assets/images/im_inst_upgrade.gif" width="32" height="32" alt=""/>
        
        <label>
            <input type="radio" name="installmode" id="installmode1" value="1"<?php if ($this->_tpl_vars['installmode'] < 1): ?> disabled="disabled"<?php endif; ?><?php if ($this->_tpl_vars['installmode'] == 1): ?> checked="checked"<?php endif; ?> />
            <?php echo $this->_tpl_vars['_lang']['options_upgrade_existing']; ?>

        </label>
    </th>
    <td><?php echo $this->_tpl_vars['_lang']['options_upgrade_existing_note']; ?>
</td>
</tr>
<?php if ($this->_tpl_vars['installmode'] > 0): ?>
<tr>
    <th>&nbsp;</th>
    <td style="background: #fffdbb; padding:0 1em; border:2px solid #CBD499">
        <h3><?php echo $this->_tpl_vars['_lang']['options_important_upgrade']; ?>
</h3>
        <p><?php echo $this->_tpl_vars['_lang']['options_important_upgrade_note']; ?>
</p>
    </td>
</tr>
<?php endif; ?>
<tr>
    <th>
        <img src="assets/images/im_inst_upgrade.gif" width="32" height="32" alt="" />
        <label>
            <input type="radio" name="installmode" id="installmode3" value="3"<?php if ($this->_tpl_vars['installmode'] < 1): ?> disabled="disabled"<?php endif; ?><?php if ($this->_tpl_vars['installmode'] == 3): ?> checked="checked"<?php endif; ?> />
            <?php echo $this->_tpl_vars['_lang']['options_upgrade_advanced']; ?>

        </label>
    </th>
    <td><?php echo $this->_tpl_vars['_lang']['options_upgrade_advanced_note']; ?>
</td>
</tr>
</tbody>
</table>

<hr />

<h3><?php echo $this->_tpl_vars['_lang']['advanced_options']; ?>
</h3>

<?php if ($this->_tpl_vars['installmode'] == 0): ?>
<table class="options">
<tbody>
<tr>
    <th style="padding-top: 1em;">
        <label>
            <input type="text" name="new_folder_permissions" id="new_folder_permissions" value="<?php echo $this->_tpl_vars['new_folder_permissions']; ?>
" size="5" maxlength="4" />
            <?php echo $this->_tpl_vars['_lang']['options_new_folder_permissions']; ?>

        </label>
    </th>
    <td style="padding-top: 1em;"><?php echo $this->_tpl_vars['_lang']['options_new_folder_permissions_note']; ?>
</td>
</tr>
<tr>
    <th style="padding-top: 2em;">
        <label>
            <input type="text" name="new_file_permissions" id="new_file_permissions" value="<?php echo $this->_tpl_vars['new_file_permissions']; ?>
" size="5" maxlength="4" />
            <?php echo $this->_tpl_vars['_lang']['options_new_file_permissions']; ?>

        </label>
    </th>
    <td style="padding-top: 2em;"><?php echo $this->_tpl_vars['_lang']['options_new_file_permissions_note']; ?>
</td>
</tr>
</tbody>
</table>
<?php endif; ?>
<?php if (@MODX_SETUP_KEY == '@traditional' && $this->_tpl_vars['unpacked'] == 1 && $this->_tpl_vars['files_exist'] == 1): ?>
<input type="hidden" name="unpacked" id="unpacked" value="1" />
<?php else: ?>
<table class="options">
<tbody>
<tr>
    <th style="padding-top: 2em;">
        <label>
            <input type="checkbox" name="unpacked" id="unpacked" value="1"<?php if ($this->_tpl_vars['unpacked'] == 0): ?> disabled="disabled"<?php endif; ?><?php if ($this->_tpl_vars['unpacked'] == 1): ?> checked="checked"<?php endif; ?> />
            <?php echo $this->_tpl_vars['_lang']['options_core_unpacked']; ?>

        </label>
    </th>
    <td style="padding-top: 2em;"><?php echo $this->_tpl_vars['_lang']['options_core_unpacked_note']; ?>
</td>
</tr>
<tr>
    <th>
        <label>
            <input type="checkbox" name="inplace" id="inplace" value="1"<?php if ($this->_tpl_vars['files_exist'] == 0): ?> disabled="disabled"<?php endif; ?><?php if ($this->_tpl_vars['files_exist'] == 1): ?> checked="checked"<?php endif; ?> />
            <?php echo $this->_tpl_vars['_lang']['options_core_inplace']; ?>

        </label>
    </th>
    <td><?php echo $this->_tpl_vars['_lang']['options_core_inplace_note']; ?>
</td>
</tr>
<?php endif; ?>
</tbody>
</table>
<br />


<div class="setup_navbar">
    <input type="submit" name="proceed" value="<?php echo $this->_tpl_vars['_lang']['next']; ?>
" />
    <input type="button" onclick="MODx.go('welcome');" value="<?php echo $this->_tpl_vars['_lang']['back']; ?>
" />
</div>
</form>