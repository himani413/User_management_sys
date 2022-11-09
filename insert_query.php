<?php
    require_once('include/connection.php');
?>

<?php
    /*
        insert into table_name(
            column1, column2, etc
        ) values (
            value1, value2, etc
        );
    */ 
    $first_name = 'Himani';
    $last_name = 'Perera';
    $email = 'pereradinithi@gmail.com';
    $password = 'abs123';
    $is_deleted = 0;

    $hashed_password = sha1($password);
    //echo "hashed password: {$hashed_password}";

    $query = "INSERT INTO user (first_name,last_name,email,passw,is_deleted) VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}',{$is_deleted})";
    //echo $query;

    $result = mysqli_query($connection, $query);

    if($result){
        echo "New record added.";
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
    <title>Insert Query</title>
 </head>
 <body>
    
 </body>
 </html>

 <?php
    mysqli_close($connection);
 ?>