<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 07:11:30
  from 'F:\OpenServer\domains\aaa.loc\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9bcf725d4800_25533625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eaca49b54a42f6e43b86ecac35d998a7dbe4663' => 
    array (
      0 => 'F:\\OpenServer\\domains\\aaa.loc\\templates\\index.tpl',
      1 => 1587269480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9bcf725d4800_25533625 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TASKS</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a0c43f9093.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
              <div class="navbar-brand">TASKS</div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li<?php if ($_smarty_tpl->tpl_vars['mod']->value == '') {?> class="active"<?php }?>><a href="/">Home</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if ($_smarty_tpl->tpl_vars['session']->value['auth'] == 1) {?>
                    <li><a href="/index.php?mod=exit">Exit</a></li>
                <?php } else { ?>
                    <li><a  href="/index.php?mod=auth">Auth</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>


<div class="container">
    <div class="main">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</div>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
