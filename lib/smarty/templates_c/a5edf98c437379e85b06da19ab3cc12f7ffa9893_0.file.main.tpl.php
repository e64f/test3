<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 14:40:28
  from 'F:\OpenServer\domains\aaa.loc\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9ae72c6f82c5_54861413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5edf98c437379e85b06da19ab3cc12f7ffa9893' => 
    array (
      0 => 'F:\\OpenServer\\domains\\aaa.loc\\templates\\main.tpl',
      1 => 1587210007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9ae72c6f82c5_54861413 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <tr>
        <th>#</th>
        <th>Email</th>
        <th>User</th>
        <th>Task</th>
        <th>Edit</th>
        <th>Done</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['user'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['txt'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['isEdit'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['isDone'];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
