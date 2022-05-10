<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
</head>
<body>
    <?php
        $account = $_REQUEST['account'];
        $password = $_REQUEST['password'];
        // $a = $_REQUEST['a'];
        // $b = $_REQUEST['b'];
        // $op =(int)$_REQUEST['op'];
        // if($op==1){
        //     $total = $a + $b;
        //     echo $a.'與'.$b.'相加結果為:'.$total.'<br>';
        // }
        // elseif($op==2){
        //     $total = $a - $b;
        //     echo $a.'與'.$b.'相減結果為:'.$total.'<br>';
        // }
        // elseif($op==3){
        //     echo $a.'與'.$b.'相乘結果為:'.$a * $b.'<br>';
        // }
        // else{
        //     echo $a.'與'.$b.'相除結果為:'.$a / $b.'<br>';
        // }
        if($account=='123' && $password=='123'){
            echo '<p style="color:green;">登入成功</p>';
        }
        else{
            echo '<p style="color:red;">帳號或密碼錯誤</p>';
        }
    ?>
    <a href="https://db.vexp.idv.tw/~h568/db/index.html">
        <input type="button" value="返回" >
    </a>
</body>
</html> 
