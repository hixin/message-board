<?php
header("Content-type:text/html;charset=utf-8");
include("conn.php");
if ($_POST['submit']) {
    $sql = "insert into message(id,user,title,content,lastdate) " .
        "values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('添加成功');history.go(-1)</script>";
    } else {
        echo "insert error";
    }

}
?>