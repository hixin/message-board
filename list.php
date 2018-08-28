<!DOCTYPE html>
<html lang="en">
<meta charset=UTF-8>
<head>
    <link href="css.css" rel="stylesheet" type="text/css">
    <?php include("conn.php") ?>
</head>

<body>
<table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#7fffd4">
    <?php
    $sql = "select * from message order by id desc";
    $query = mysqli_query($conn, $sql);
    //error_log("Failed to connect to database!", 3, "D:\php_error.log");
    while ($row = mysqli_fetch_array($query)) { ?>
        <tr bgcolor="#eff3ff">
            <td><font color="red">标题：</font><?php echo $row['title']; ?>
                <font color="red">用户：</font><?php echo $row['user']; ?>
                 <?php error_log($row['id'], 3, "D:\php_error.log");?>
                <div align="right"><a href="del.php?id=<?php echo $row['id']; ?>">删除</a></div>
            </td>
        </tr>
        <tr bgColor="#ffffff">
            <td>发表内容:<?php echo $row['content']; ?></td>
        </tr>
        <tr bgColor="#ffffff">
            <td>
                <div align="right"/>
                时间:<?php echo $row['lastdate']; ?>
            </td>
        </tr>
    <?php } ?>
    <tr bgcolor="#f0fff0">
        <td>
            <div align="right"/>
            <a href="add.html">返回留言</a>
        </td>
    </tr>
</table>
</body>
</html>