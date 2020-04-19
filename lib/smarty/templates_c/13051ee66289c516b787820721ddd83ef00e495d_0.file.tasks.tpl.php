<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 06:01:56
  from 'F:\OpenServer\domains\aaa.loc\templates\tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9bbf2403ba99_35104201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13051ee66289c516b787820721ddd83ef00e495d' => 
    array (
      0 => 'F:\\OpenServer\\domains\\aaa.loc\\templates\\tasks.tpl',
      1 => 1587265312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9bbf2403ba99_35104201 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['mess']->value) && $_smarty_tpl->tpl_vars['mess']->value == 'save')) {?>
    <div class="alert alert-success" role="alert">
        Your form is saved!
    </div>
<?php }?>

<a href="index.php?mod=fadd-task" class="btn btn-primary">Add Task</a><br><br>

<h4>All Tasks: <?php echo $_smarty_tpl->tpl_vars['nav']->value['total'];?>
</h4>

<table class="table">
    <tr>
        <th>#</th>
        <th>Email
            <a href="index.php?by=email&order=desc"><i class="fa fa-arrow-up <?php if (($_smarty_tpl->tpl_vars['nav']->value['order'] == '&by=email&order=desc')) {?>red<?php }?>"></i></a>
            <a href="index.php?by=email&order=asc"><i class="fas fa-arrow-down <?php if (($_smarty_tpl->tpl_vars['nav']->value['order'] == '&by=email&order=asc')) {?>red<?php }?>"></i></a>
        </th>
        <th>User
            <a href="index.php?by=user&order=desc"><i class="fa fa-arrow-up <?php if (($_smarty_tpl->tpl_vars['nav']->value['order'] == '&by=user&order=desc')) {?>red<?php }?>"></i></a>
            <a href="index.php?by=user&order=asc"><i class="fas fa-arrow-down <?php if (($_smarty_tpl->tpl_vars['nav']->value['order'] == '&by=user&order=asc')) {?>red<?php }?>"></i></a>
        </th>
        <th>Task</th>
        <th>Edit</th>
        <th>Done
            <a href="index.php?by=isdone&order=desc"><i class="fa fa-arrow-up <?php if (($_smarty_tpl->tpl_vars['nav']->value['order'] == '&by=isdone&order=desc')) {?>red<?php }?>"></i></a>
            <a href="index.php?by=isdone&order=asc"><i class="fas fa-arrow-down <?php if (($_smarty_tpl->tpl_vars['nav']->value['order'] == '&by=isdone&order=asc')) {?>red<?php }?>"></i></a>
        </th>
        <?php if ($_smarty_tpl->tpl_vars['auth']->value == 1) {?><th></th><?php }?>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['task']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['task']->value['user'], ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['task']->value['txt'], ENT_QUOTES, 'UTF-8', true);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['isEdit'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['isDone'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['auth']->value == 1) {?><td><a href="index.php?mod=fedit-task&id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">Edit</a></td><?php }?>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php if ($_smarty_tpl->tpl_vars['nav']->value['maxPages'] > 1) {?>
    <nav aria-label="...">
        <ul class="pagination">

            <?php if ($_smarty_tpl->tpl_vars['nav']->value['currentPage'] == 1) {?>
            <li class="page-item disabled">
                <span class="page-link" >Previous</span>
            </li>
            <?php } else { ?>
            <li class="page-item">
                <a class="page-link" href="index.php?page=<?php echo ($_smarty_tpl->tpl_vars['nav']->value['currentPage']-1);
echo $_smarty_tpl->tpl_vars['nav']->value['order'];?>
">Previous</a>
            </li>
            <?php }?>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nav']->value['maxPages']+1 - (1) : 1-($_smarty_tpl->tpl_vars['nav']->value['maxPages'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['nav']->value['currentPage'] == $_smarty_tpl->tpl_vars['i']->value) {?>
                    <li class="page-item active">
                        <a class="page-link" href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
echo $_smarty_tpl->tpl_vars['nav']->value['order'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } else { ?>
                    <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
echo $_smarty_tpl->tpl_vars['nav']->value['order'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                <?php }?>

            <?php }
}
?>

            <?php if ($_smarty_tpl->tpl_vars['nav']->value['currentPage'] < $_smarty_tpl->tpl_vars['nav']->value['maxPages']) {?>
            <li class="page-item">
                <a class="page-link" href="index.php?page=<?php echo ($_smarty_tpl->tpl_vars['nav']->value['currentPage']+1);
echo $_smarty_tpl->tpl_vars['nav']->value['order'];?>
">Next</a>
            </li>
            <?php } else { ?>
                <li class="page-item disabled">
                    <span class="page-link">Next</span>
                </li>
            <?php }?>
        </ul>
    </nav>

<?php }
}
}
