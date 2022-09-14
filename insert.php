<?php
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','');
    define('DB','project');

    $cmnt = $_POST['txtarea'];
    $id = $_POST['phoneid'];
    
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

    if($con->connect_error){
        echo 'error';
    }

    
        $stmt = $con->prepare("insert into comments (pid, comments) values (?,?)");

        $stmt->bind_param("ss",$id,$cmnt);
    
        $stmt->execute();
    
        
  

    // $pid = $_POST['phoneid'];
    // $cmnt = $_POST['txtarea'];
	
	
    // $sql = "insert into analysis (pid, comments) values ('$pid','$cmnt')";

    // if(mysqli_query($con, $sql)){
	// 	echo 'success';
	// }

?>