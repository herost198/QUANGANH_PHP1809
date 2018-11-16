<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
    #tnt_pagination{
        text-align: center;
        height: 22px;
        line-height: 22px;
        padding: 3px;
        font-size: 15px;
        font-weight: normal;
    }
    #tnt_pagination a:link,#tnt_pagination a:visited{
        padding: 7px;
        padding-top: 2px;
        padding-bottom: 2px;
        border: 1px solid #ebebeb;
        margin-left: 10px;
        text-decoration: none;
        color: #0072bc;
        width: 22pxl
    }
    #tnt_pagination a:hover{
        background: #ddeeff;
        color: #0072bc;
    }
    .content{
        margin: 10px auto;
        width: 800px;
        text-align: center;
        border: 1px solid #dfd;
    }
    .result{
        text-align: center;
        font-size: 20px;
    }
    
    </style>
</head>
<body>
    <div class="content">
        <div id="tnt_pagination">
            <span class='disabled_tnt_pagination'>Prev</span>
            <a href="pagination.php?page=1">1</a>
            <a href="pagination.php?page=2">2</a>
            <a href="pagination.php?page=3">3</a>
            <a href="pagination.php?page=4">4</a>
            <a href="pagination.php?page=5">5</a>
            <a href="pagination.php?page=6">6</a>
            <a href="pagination.php?page=7">7</a>
            <a href="">Next</a>
            <?php
             $page1=(isset($_GET["page"])==true)?$_GET['page']: 0;
            ?>
        </div>
        <p class='result'>ban dang o trang thu <? echo $page1 ?></p>
    </div>
    
</body>
</html>