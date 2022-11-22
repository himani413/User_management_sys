<?php
    require_once('include/connection.php');
?>
<?php
    // DELETE FROM table_name WHERE colum_namee = value LIMIT 1;
    
    $query = "DELETE FROM user WHERE id = 3 LIMIT 1";
    $result_set = mysqli_query($connection, $query);

    //mysqli_affected_rows() returns number of rows affected.
        if($result_set){
            echo mysqli_affected_rows($connection) ." record deleted.<br>";
        }else{
            echo "Database query failed.";
        }

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Query</title>
 </head>
 <body>
    
 </body>
 </html>

 <?php
    mysqli_close($connection);
 ?>