<?php 


$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="todo";

foreach($db as $key =>$value){
    define(strtoupper($key),$value);
}

$conn=mysqli_connect(DB_HOST ,DB_USER ,DB_PASS,DB_NAME);

if(!$conn)
{    
die("Not Connected!".mysqli_error($conn));
}



?>
<?php 

if(isset($_POST['task1'])&& isset($_POST['deadline'])){
				
                $task=$_POST['task1'];
			   //echo $task ;
				$deadline=$_POST['deadline'];
			   //echo $deadline ;
                $query="insert into tasks(tname,Deadline)";
                $query.="values('{$task}', '{$deadline}')";
                $query_comment=mysqli_query($conn,$query);
                   if(!$query_comment)
				   {
                       die("Couldn't add task!".mysqli_error($conn));
                   }
                   else
					   echo "added successfully";                
                                
                
				 }
?>   