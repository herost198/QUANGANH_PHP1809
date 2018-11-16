<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
       $number1='';
       $number2='';
       $caculate='';$result='';$check='';

        if(isset($_POST['number1'])==true && isset($_POST['number1'])==true  && isset($_POST['caculate']) ==true ){
            $number1= $_POST['number1'];
            $number2= $_POST['number2'];
            $caculate= $_POST['caculate']; 
            if(is_numeric($number1) && is_numeric($number2)){
                switch ($caculate){
                    case '+':
                        $result=$number1+$number2;break;
                    case '-':
                        $result=$number1-$number2;break;
                    case '*':
                        $result=$number1*$number2;break;
                    case '/':
                        $result=$number1/$number2;break;
                        default:
                        
                }
                $check=true;
            }else{
                $result='phep tinh nhap vao khong dung';
                $check=false;
            }
        }
    ?>
    <div class="content">
        <h1>mo phong may tinh dien tu</h1>
        <form action="#" method="post" name='main-forn'>
            <div class="row">
                <span>so a:</span>
                <input type="text" name='number1' value='<?php echo $number1?>'>
            </div>
            <div class="row">
                    <span>Phep toan</span>
                    <input type="text" name='caculate' value='<?php echo $caculate?>'>
                </div>
            <div class="row">
                <span>so b:</span>
                <input type="text" name='number2' value='<?php echo $number2?>'>
            </div>
            <div class="row">
                <input type="submit" name='result' value="Result">
            </div>
            <div class="row">
                <p > <?php
                        if($check=='true'){
                            echo $number1.'' . $caculate . ' ' . $number2 .'='. $result;
                        }
                        else echo $result;
                    ?>
                </p>
            </div>
        </form>
    </div>
</body>
</html>