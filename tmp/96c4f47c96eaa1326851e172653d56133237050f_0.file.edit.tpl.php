<?php
/* Smarty version 4.1.0, created on 2022-05-16 10:31:50
  from 'C:\xampp\htdocs\Hank\myproject\views\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62820bf6a16200_40854094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96c4f47c96eaa1326851e172653d56133237050f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hank\\myproject\\views\\edit.tpl',
      1 => 1652689897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62820bf6a16200_40854094 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function(){
            var checkboxValue = false
            $('#mycheck').change(function () {
                checkboxValue = $(this).is(':checked')
                if (checkboxValue) {
                    let inputValue = $('#user_id').val()
                    console.log(inputValue)
                    if (inputValue.length === 10) {
                        if (!/^[A-Z](1|2)\d{8}$/i.test(inputValue)) {
                            alert('格式錯誤')
                        } else {
                            alert('格式正確')
                        }
                    }
                }
            })
            $('#user_id').keyup(function () {
                if (checkboxValue) {
                    let inputValue = $(this).val()
                    console.log(inputValue)
                    if (inputValue.length > 10) {
                        alert('長度過長')
                        $(this).val('')
                    }
                    if (inputValue.length === 10) {
                        if (!/^[A-Z](1|2)\d{8}$/i.test(inputValue)) {
                            alert('格式錯誤')
                        } else {
                            alert('格式正確')
                        }
                    }
                }
            })
        });
        <?php echo '</script'; ?>
>
        
</head>
    <body>
        <ul class="nav bg-secondary">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" style="color:white;" href="/hank/myproject/">Train5</a>
            </li>
        </ul>
    <div class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
            <form action='edit.php' method='POST'>
            <div class="mb-3">
                <label  class="form-label">姓名</label>
                <input type="" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
">
            </div>
            <div class="mb-3">
                
                <label class="form-label">身分證號</label>
                <div>
                    <input type="checkbox" name="" id="mycheck">
                    <h9 style="color:blue;">驗證</h9>
                </div>
                <input type="" class="form-control" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['user_id'];?>
" id="user_id">
            </div>
                <div class="mb-3">
                <label class="form-label">生日</label>
                <input type="" class="form-control" name="birth" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['birth'];?>
">
            </div>
                <div class="mb-3">
                <label class="form-label">電話</label>
                <input type="" class="form-control" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['tel'];?>
">
            </div>
                <div class="mb-3">
                <label class="form-label">郵遞區號</label>
                <input type="" class="form-control" name="postalCode" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['postalCode'];?>
">
            </div>
                <div class="mb-3">
                <label class="form-label">地址</label>
                <input type="" class="form-control" name="address" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['address'];?>
">
            </div>
            <input type="hidden" name = "cust_id" value= "<?php echo $_smarty_tpl->tpl_vars['p']->value['cust_id'];?>
" >
            <button type="submit" class="btn btn-primary">送出</button>
            </form>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</html><?php }
}
