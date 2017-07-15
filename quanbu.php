<!DOCTYPE html>
<html>
    <head>
        <title>good</title>

        <meta charset="utf-8">
    </head>
    <body>





<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "YSYSWAN++";
$mima = $_['mima'];
$ming = $_['id'];

$conn = new mysqli ($servername,$username,$password);

//检测
if ($conn->connect_error){
    die("fild". $conn->connect_error);
}
echo "success";

mysqli_query($conn , "set names urf-8");

$sql = 'SELECT id, name, sex, zuanye, shouji, 
               qqhao, jineng, fangxiang 
               FROM baomingbiao';

mysqli_select_db( $conn, 'myab');
$retval = mysqli_query( $conn, $sql);
if(! $retval)
{
    die('something wrong' . mysqli_error($conn));
}
echo '<h2>报名表信息</h2>';
echo '<table border="1"><tr><td>ID</td><td>名字</td>
    <td>性别</td><td>专业</td><td>手机号</td><td>QQ号</td>
    <td>技能</td><td>方向</td>';
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['id']}</td>".
         "<td>{$row['name']}</td> ".
         "<td>{$row['sex']}</td> ".
         "<td>{$row['zuanye']}</td> ".
         "<td>{$row['shouji']}</td> ".
         "<td>{$row['qqhao']}</td> ".
         "<td>{$row['jineng']}</td> ".
         "<td>{$row['fangxiang']}</td> ".
         "</tr>";

}
echo '</table>';
mysqli_close($conn);




?>

</body>
</html>
