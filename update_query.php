<?php
    require_once('include/connection.php');
?>
<?php
    /* UPDATE table_name SET column_1 = value_1, column_2 = value_2
    WHERE colum_namee = value LIMIT 1;
    */

    $query = "UPDATE user SET first_name = 'Himal' WHERE id = 2 LIMIT 1";
    $result_set = mysqli_query($connection, $query);

    //mysqli_affected_rows() returns number of rows affected.
        if($result_set){
            echo mysqli_affected_rows($connection) ." record updated.<br>";
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