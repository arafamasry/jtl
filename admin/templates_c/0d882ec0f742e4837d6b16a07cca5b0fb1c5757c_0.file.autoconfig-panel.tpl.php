<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:10:48
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\autoconfig-panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c12048c9aa69_52339242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d882ec0f742e4837d6b16a07cca5b0fb1c5757c' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\autoconfig-panel.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./autoconfig-props.tpl' => 1,
  ),
),false)) {
function content_60c12048c9aa69_52339242 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-tabs">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'tabname');
$_smarty_tpl->tpl_vars['tab']->index = -1;
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tabname']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
$_smarty_tpl->tpl_vars['tab']->index++;
$__foreach_tab_0_saved = $_smarty_tpl->tpl_vars['tab'];
?>
        <?php $_smarty_tpl->_assignInScope('tabId', ('conftab').($_smarty_tpl->tpl_vars['tab']->index));?>

        <li class="nav-item">
            <a href="#<?php echo $_smarty_tpl->tpl_vars['tabId']->value;?>
" data-toggle="tab" class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->index === 0) {?>active<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>

            </a>
        </li>
    <?php
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<div class="tab-content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'tabname');
$_smarty_tpl->tpl_vars['tab']->index = -1;
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tabname']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
$_smarty_tpl->tpl_vars['tab']->index++;
$__foreach_tab_1_saved = $_smarty_tpl->tpl_vars['tab'];
?>
        <?php $_smarty_tpl->_assignInScope('tabId', ('conftab').($_smarty_tpl->tpl_vars['tab']->index));?>

        <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['tab']->index === 0) {?>show active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['tabId']->value;?>
">
            <div class="row">
                <?php $_smarty_tpl->_assignInScope('rowWidthAccu', 0);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./autoconfig-props.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['tab']->value), 0, true);
?>
            </div>
        </div>
    <?php
$_smarty_tpl->tpl_vars['tab'] = $__foreach_tab_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
