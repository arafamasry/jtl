<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:36:48
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\widgets\visitors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11850deac69_95649341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '732ed87b698753b21ddde66ce2a505b094887e9e' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\visitors.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/linechart_inc.tpl' => 1,
  ),
),false)) {
function content_60c11850deac69_95649341 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data">
    <?php if ($_smarty_tpl->tpl_vars['linechart']->value) {?>
        <?php ob_start();
echo __('count');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/linechart_inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linechart'=>$_smarty_tpl->tpl_vars['linechart']->value,'headline'=>'','id'=>'linechart_visitors','width'=>'100%','height'=>'320px','ylabel'=>$_prefixVariable1,'href'=>false,'ymin'=>0,'legend'=>false), 0, false);
?>
    <?php } else { ?>
        <div class="widget-container">
            <div class="alert alert-info"><?php echo __('noStatisticsThisMonth');?>
</div>
        </div>
    <?php }?>
</div>
<?php }
}
