<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 01:17:08
  from 'F:\OpenServer\domains\aaa.loc\templates\add-task-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b7c647f8042_89220368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e024806741bf5f9cf07520abaf0c5951b66fc87' => 
    array (
      0 => 'F:\\OpenServer\\domains\\aaa.loc\\templates\\add-task-form.tpl',
      1 => 1587248223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9b7c647f8042_89220368 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 col-sm-12">
    <h3>Add Task</h3>
    <?php if ($_smarty_tpl->tpl_vars['errorsText']->value != '') {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['errorsText']->value;?>

        </div>
    <?php }?>
    <div class="task-form">
        <form action="index.php" method="post">
            <input name="mod" type="hidden" value="add-task">

            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['email'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
"<?php }?>>
            </div>
            <div class="form-group">
                <label>User</label>
                <input name="user" type="text" class="form-control" placeholder="User"<?php if (isset($_smarty_tpl->tpl_vars['data']->value['user'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user'];?>
"<?php }?>>
            </div>
            <div class="form-group">
                <label>Task</label>
                <input name="task" type="text" class="form-control" placeholder="Task" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['task'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['task'];?>
"<?php }?>>
            </div>
            <button type="submit" class="btn btn-black">Send</button>
        </form>
    </div>
</div><?php }
}
