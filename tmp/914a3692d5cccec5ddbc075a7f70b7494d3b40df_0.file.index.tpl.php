<?php
/* Smarty version 4.1.0, created on 2022-05-16 10:25:42
  from 'C:\xampp\htdocs\Hank\myproject\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62820a86820820_50502558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914a3692d5cccec5ddbc075a7f70b7494d3b40df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hank\\myproject\\views\\index.tpl',
      1 => 1652689541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62820a86820820_50502558 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Train5</title>
    </head>
    <body>
        <ul class="nav bg-secondary">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" style="color:white;"  href="/hank/myproject/">Train5</a>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            </li>
        </ul>
        <br/>
    <div class="container">
    <a href="create.php" class="btn btn-primary">新增</a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['id']->value, 'p', false, 'k');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
            <ul class="list-group">
                <li class="list-group-item" name="id" value="id">編號：<?php echo $_smarty_tpl->tpl_vars['p']->value['cust_id'];?>
</li>
                <li class="list-group-item" name="name" value="name">姓名：<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</li>
                <li class="list-group-item" name="user_id" value="user_id">身份證號：<?php echo $_smarty_tpl->tpl_vars['p']->value['user_id'];?>
</li>
                <li class="list-group-item" name='birth' value="birth">出生：<?php echo $_smarty_tpl->tpl_vars['p']->value['birth'];?>
</li>
                <li class="list-group-item" name='tel' value="tel">電話：<?php echo $_smarty_tpl->tpl_vars['p']->value['tel'];?>
</li>
                <li class="list-group-item" name='postalCode' value="postalCode">郵遞區號：<?php echo $_smarty_tpl->tpl_vars['p']->value['postalCode'];?>
</li>
                <li class="list-group-item" name='address' value="address">地址：<?php echo $_smarty_tpl->tpl_vars['p']->value['address'];?>
</li>
                <div class='row'>
                    <form class="col-1" action="edit.php" method="GET">
                    <input type="hidden" name='cust_id' value ='<?php echo $_smarty_tpl->tpl_vars['p']->value['cust_id'];?>
'>
                        <button class="btn btn-warning">修改</button>
                    </form>
                    <form class="col-1" action="./" method="POST">
                        <input type="hidden" name='cust_id' value ='<?php echo $_smarty_tpl->tpl_vars['p']->value['cust_id'];?>
'>
                        <button class="btn btn-danger">刪除</button>
                    </form>
                </div>
            </ul>
            <hr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div>
    </body>
  
</html>



<?php }
}
