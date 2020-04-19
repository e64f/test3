<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 07:06:48
  from 'F:\OpenServer\domains\aaa.loc\templates\auth-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9bce584a3188_83211747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dc341f5c4f7cd01c5a4c66e4dd65917b69d87af' => 
    array (
      0 => 'F:\\OpenServer\\domains\\aaa.loc\\templates\\auth-form.tpl',
      1 => 1587269149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9bce584a3188_83211747 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-md-6 col-sm-12">
        <?php if ($_smarty_tpl->tpl_vars['mess']->value != '') {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['mess']->value;?>

            </div>
        <?php }?>
        <div class="login-form">
            <form action="index.php" method="get">
                <input name="mod" type="hidden" value="auth">
                <div class="form-group">
                    <label>Login</label>
                    <input name="login" type="text" class="form-control" placeholder="Login">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="passw" type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-black">Login</button>
            </form>
        </div>
    </div>
<?php }
}
