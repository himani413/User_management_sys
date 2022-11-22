<?php
    require_once('include/connection.php');
?>
<?php

    $query = "SELECT id, first_name, last_name, email FROM user";

    $result_set = mysqli_query($connection, $query);

    if($result_set){
        //checking how many records returned from the query
        echo mysqli_num_rows($result_set) . " records found. <hr>";
        //echo "Query successful.";

        echo "<table border=1>
                
                    <tr>
                        <th><b>First Name</b></th>
                        <th><b>First Name</b></th>
                        <th><b>Last Name</b></th>
                        <th><b>Email</b></th>
                    
                    </tr>";

           while($records = mysqli_fetch_assoc($result_set)) {
        
                echo "<tr>
                            <td>" .$records['id'] . "</td>
                            <td>" .$records['first_name'] . "</td>
                            <td>" .$records['last_name'] . "</td>
                            <td>" .$records['email'] . "</td>
                      </tr>";
           }
           echo "</table>" ;
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
    <title>Select Query</title>
    <style>
       
       table{border-collapse: collapse; }
       td,th{padding: 15px;}
        
    </style>
 </head>
 <body>
    
 </body>
 </html>

 <?php
    mysqli_close($connection);
 ?>