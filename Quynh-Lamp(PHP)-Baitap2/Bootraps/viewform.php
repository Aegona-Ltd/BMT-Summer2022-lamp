<?php
if(isset($_POST))
{
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <style>
       table, th{
        border: 1px solid black;
       }
    </style>
    <table style="width:100%">
    <tr>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>So Dien Thoai</th>
        <th>Y kien cua ban</th>
    </tr>
    <tr>
        <td> <?php echo "".$_POST['username'] ?>;</td>
        <td><?php echo "".$_POST['name'] ?></td>
        <td><?php echo "".$_POST['pass'] ?></td>
        <td><?php echo "".$_POST['sdt'] ?></td>
        <td><?php echo "".$_POST['texta'] ?></td>
    </tr>
        
    </table>
    
</body>
</html>



