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

			if(isset($_POST['id'])){
                
                $id=$_POST['id'];
			   //echo $task ;
				
			   //echo $deadline ;
                $query="delete from tasks where id=";
                $query.="id="+$id;
				
				echo $id;
                $query_comment=mysqli_query($conn,$query);
                   if(!$query_comment)
				   {
                       die("Couldn't delete task!".mysqli_error($conn));
                   }
                   else
					   echo "deleted successfully";                
                                
                
				 }
?>   