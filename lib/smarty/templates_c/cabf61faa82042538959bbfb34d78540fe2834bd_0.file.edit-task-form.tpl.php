<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 04:00:13
  from 'F:\OpenServer\domains\aaa.loc\templates\edit-task-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9ba29d465dd3_21827640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabf61faa82042538959bbfb34d78540fe2834bd' => 
    array (
      0 => 'F:\\OpenServer\\domains\\aaa.loc\\templates\\edit-task-form.tpl',
      1 => 1587258010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9ba29d465dd3_21827640 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 col-sm-12">
    <h3>Edit Task</h3>

    <div class="task-form">
        <form action="index.php" method="post">
            <input name="mod" type="hidden" value="edit-task">
            <input name="id" type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
            <input name="task2" type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['task']->value['txt'];?>
">

            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" disabled class="form-control" placeholder="Email" <?php if (isset($_smarty_tpl->tpl_vars['task']->value['email'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['task']->value['email'];?>
"<?php }?>>
            </div>
            <div class="form-group">
                <label>User</label>
                <input name="user" type="text" disabled class="form-control" placeholder="User"<?php if (isset($_smarty_tpl->tpl_vars['task']->value['user'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['task']->value['user'];?>
"<?php }?>>
            </div>
            <div class="form-group">
                <label>Task</label>
                <input name="task" type="text" class="form-control" placeholder="Task" <?php if (isset($_smarty_tpl->tpl_vars['task']->value['txt'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['task']->value['txt'];?>
"<?php }?>>
            </div>
            <div class="form-group">
                <label>Done</label>
                <select name="isdone" class="form-control">
                    <option value="1" <?php if (($_smarty_tpl->tpl_vars['task']->value['isDone'] == 1)) {?>selected<?php }?>>Yes</option>
                    <option value="0" <?php if (($_smarty_tpl->tpl_vars['task']->value['isDone'] == 0)) {?>selected<?php }?>>No</option>
                </select>
            </div>


            <button type="submit" class="btn btn-black">Save</button>
        </form>
    </div>
</div><?php }
}
