<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {literal}
    <script type="text/javascript">
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
        </script>
        {/literal}
</head>
    <body>
        <ul class="nav bg-secondary">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" style="color:white;" href="/hank/myproject/">Train5</a>
            </li>
        </ul>
    <div class="container">
        {foreach from = $datas item = p }
            <form action='edit.php' method='POST'>
            <div class="mb-3">
                <label  class="form-label">姓名</label>
                <input type="" class="form-control" name="name" value="{$p['name']}">
            </div>
            <div class="mb-3">
                
                <label class="form-label">身分證號</label>
                <div>
                    <input type="checkbox" name="" id="mycheck">
                    <h9 style="color:blue;">驗證</h9>
                </div>
                <input type="" class="form-control" name="user_id" value="{$p['user_id']}" id="user_id">
            </div>
                <div class="mb-3">
                <label class="form-label">生日</label>
                <input type="" class="form-control" name="birth" value="{$p['birth']}">
            </div>
                <div class="mb-3">
                <label class="form-label">電話</label>
                <input type="" class="form-control" name="tel" value="{$p['tel']}">
            </div>
                <div class="mb-3">
                <label class="form-label">郵遞區號</label>
                <input type="" class="form-control" name="postalCode" value="{$p['postalCode']}">
            </div>
                <div class="mb-3">
                <label class="form-label">地址</label>
                <input type="" class="form-control" name="address" value="{$p['address']}">
            </div>
            <input type="hidden" name = "cust_id" value= "{$p['cust_id']}" >
            <button type="submit" class="btn btn-primary">送出</button>
            </form>
        {/foreach}
    </div>
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</html>