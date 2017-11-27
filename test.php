<?php
	    session_start();
    	if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) 
     	{

            $servername = "localhost";
            $username = "root";
            $password = "YSYSWAN++";
            $mingzhi = $_POST['fname'];
            //$mingzhi = '学习 Python';
            $xingbie = $_POST['sex'];
            $zuanye = $_POST['zuanye'];
            $shoujihao = $_POST['shouji'];
            $qqhao = $_POST['qqhao'];
            $jineng = $_POST['jineng'];
            $xingqu = $_POST['xingqu'];
            
           
	if($mingzhi != "")
	{ 
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
            echo "报名成功";
		 
		//重定向浏览器 
		header("Location: http://123.206.189.54/ahusci/success.html"); 
		//确保重定向后，后续代码不会被执行 
		exit;
		



 
            $conn->close();
            }


 //    		header('Content-type: text/html; charset=UTF8'); 
//			echo '<font color="#0000CC">输入正确</font>';
         
	else {
	echo "请完成表格";
        }
}        
     	else{
            header('Content-type: text/html; charset=UTF8'); 
			echo '<font color="#CC0000"><b>验证码输入错误,请返回</b></font>';
     	    }
         exit();





echo "fuckyou";
?>
