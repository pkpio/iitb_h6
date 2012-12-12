<?php /* Smarty version 2.6.19, created on 2010-09-22 20:55:58
         compiled from welcome.tpl */ ?>
<script type="text/javascript" src="assets/js/sections/welcome.js"></script>
<form id="welcome" action="?action=welcome" method="post">
<div>
    <h2><?php echo $this->_tpl_vars['_lang']['welcome']; ?>
</h2>
    <?php echo $this->_tpl_vars['_lang']['welcome_message']; ?>

    <br />
</div>

<?php if (@MODX_SETUP_KEY != '@traditional'): ?>
<p><?php echo $this->_tpl_vars['_lang']['config_key_change']; ?>
</p>

<div id="cck-div">
    <h3><?php echo $this->_tpl_vars['_lang']['config_key']; ?>
</h3>
    <p><small><?php echo $this->_tpl_vars['_lang']['config_key_override']; ?>
</small></p>
    <div class="labelHolder">
        <label for="config_key"><?php echo $this->_tpl_vars['_lang']['config_key']; ?>
</label>
        <input type="text" name="config_key" id="config_key" value="<?php echo $this->_tpl_vars['config_key']; ?>
" style="width:250px" />
        <br />
        <?php if ($this->_tpl_vars['writableError']): ?>
        <span class="field_error"><?php echo $this->_tpl_vars['_lang']['config_not_writable_err']; ?>
</span>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
<div class="setup_navbar">
    <input type="submit" name="proceed" value="<?php echo $this->_tpl_vars['_lang']['next']; ?>
" />
</div>
</form>