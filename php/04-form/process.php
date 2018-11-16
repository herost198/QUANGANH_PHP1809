 <?php
    $userName= $_POST["login"];
    $Password= $_POST["password"];
    // echo $userName;
    // echo $Password;
    $result= ($userName=="admin" && $Password=="12345")?"dang nhap thang cong":"dang nhap False";
    echo "<br/>". $result;
    ?>
    