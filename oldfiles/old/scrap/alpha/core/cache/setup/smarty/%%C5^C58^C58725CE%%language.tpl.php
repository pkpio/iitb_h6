<?php /* Smarty version 2.6.19, created on 2010-09-22 20:55:36
         compiled from language.tpl */ ?>
<form id="install" action="?" method="post">

<div class="right">
    <img src="<?php echo $this->_tpl_vars['_lang']['img_box']; ?>
" alt="<?php echo $this->_tpl_vars['_lang']['app_motto']; ?>
" />
</div>
<img src="<?php echo $this->_tpl_vars['_lang']['img_splash']; ?>
" alt="<?php echo $this->_tpl_vars['_lang']['modx_install']; ?>
" />

<?php if ($this->_tpl_vars['restarted']): ?>
    <br class="clear" />
    <br class="clear" />
    <p class="note"><?php echo $this->_tpl_vars['_lang']['restarted_msg']; ?>
</p>
<?php endif; ?>

<div class="setup_navbar">
    <p class="title"><?php echo $this->_tpl_vars['_lang']['choose_language']; ?>
:
        <select name="language">
            <?php echo $this->_tpl_vars['languages']; ?>

    	</select>
    </p>

    <input type="submit" name="proceed" value="<?php echo $this->_tpl_vars['_lang']['select']; ?>
" />
</div>
</form>