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

				$query=" Select * from tasks";              
                
                $query.=" order by deadline  ";
                $select_comment_query=mysqli_query($conn,$query);
                if(!$select_comment_query){
                    die("Query failed!".mysqli_error($conn));
                }

$dataArray = array();


				
while($row=mysqli_fetch_assoc($select_comment_query))
{
 
  $dataArray[] = $row;

}echo json_encode($dataArray); 

  ?>   