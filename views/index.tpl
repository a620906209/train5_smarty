

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
        {foreach from = $id  key = k item = p}
            <ul class="list-group">
                <li class="list-group-item" name="id" value="id">編號：{$p['cust_id']}</li>
                <li class="list-group-item" name="name" value="name">姓名：{$p['name']}</li>
                <li class="list-group-item" name="user_id" value="user_id">身份證號：{$p['user_id']}</li>
                <li class="list-group-item" name='birth' value="birth">出生：{$p['birth']}</li>
                <li class="list-group-item" name='tel' value="tel">電話：{$p['tel']}</li>
                <li class="list-group-item" name='postalCode' value="postalCode">郵遞區號：{$p['postalCode']}</li>
                <li class="list-group-item" name='address' value="address">地址：{$p['address']}</li>
                <div class='row'>
                    <form class="col-1" action="edit.php" method="GET">
                    <input type="hidden" name='cust_id' value ='{$p['cust_id']}'>
                        <button class="btn btn-warning">修改</button>
                    </form>
                    <form class="col-1" action="./" method="POST">
                        <input type="hidden" name='cust_id' value ='{$p['cust_id']}'>
                        <button class="btn btn-danger">刪除</button>
                    </form>
                </div>
            </ul>
            <hr>
        {/foreach}
    <div>
    </body>
  
</html>



