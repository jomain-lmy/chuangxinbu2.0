<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "YSYSWAN++";
//$mingzhi = $_POST['fname'];
$mingzhi = '学习 Python';
$xingbie = $_POST['sex'];
$zuanye = $_POST['zuanye'];
$shoujihao = $_POST['shouji'];
$qqhao = $_POST['qqhao'];
$jineng = $_POST['jineng'];
$xingqu = $_POST['xingqu'];

//创建
$conn = new mysqli ($servername,$username,$password);

//检测
if ($conn->connect_error){
    die("fild". $conn->connect_error);
}
echo "success";


mysqli_query($conn , "set names urf-8");

$sql = "INSERT INTO baomingbiao".
        "(name,sex,zuanye,shouji,qqhao,jineng,fangxiang)".
        "VALUES ".
        "('$mingzhi','$xingbie','$zuanye','$shoujihao','$qqhao','$jineng','$xingqu')";
mysqli_select_db($conn,'myab');
$retval = mysqli_query( $conn,$sql);
if(! $retval)
{
    die('fild:'. mysqli_error($conn));
}
echo "success";
$conn->close();

?>
