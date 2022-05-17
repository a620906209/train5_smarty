<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {literal}
    <script type="text/javascript">
        function chk(){
          if(document.send.name.value==''){
            alert('帳號未填');
            document.send.name.focus();
            return false;
          }
          if(document.send.user_id.value==''){
            alert('身分證未填');
            document.send.user_id.focus();
            return false;
          }
          if(document.send.birth.value==''){
            alert('生日未填');
            document.send.birth.focus();
            return false;
          }        
          if(document.send.tel.value==''){
            alert('電話未填');
            document.send.tel.focus();
            return false;
          }       
           if(document.send.postalCode.value==''){
            alert('郵遞區號未填');
            document.send.postalCode.focus();
            return false;
          }        
          if(document.send.address.value==''){
            alert('地址未填');
            document.send.address.focus();
            return false;
          }
          return true;
        }

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
        <form action="create.php" method="POST" name="send" onsubmit = "return chk();">
            <div class="mb-3">
                <label  class="form-label">姓名</label>
                <input type="" class="form-control" name="name" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">身份證號</label>
                <div>
                    <input type="checkbox" name="" id="mycheck">
                    <h9 style="color:blue;">驗證</h9>
                </div>
                <input type="input" class="form-control" name="user_id" id="user_id">
            </div>
                <div class="mb-3">
                <label class="form-label">生日</label>
                <input type="" class="form-control" name="birth" value="">
            </div>
                <div class="mb-3">
                <label class="form-label">電話</label>
                <input type="" class="form-control" name="tel" value="">
            </div>
                <div class="mb-3">
                <label class="form-label">郵遞區號</label>
                <input type="" class="form-control" name="postalCode" value="">
            </div>
                <div class="mb-3">
                <label class="form-label">地址</label>
                <input type="" class="form-control" name="address" value="">
            </div>
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </div>
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</html>