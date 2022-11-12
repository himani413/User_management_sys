<?php
   session_start();
?>

<?php require_once('include/connection.php');?>
<?php require_once('include/functions.php');?>

<?php
    if(!isset($_SESSION['user_id'])){
        header('Location: index.php');
    }

    $user_list = '';

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        
        <div class="appname">User Management System</div>
        <div class="welcome">Welcome <?php echo $_SESSION['first_name']; ?>! <a href="logout.php">Log Out</a></div>
    </header>

    <?php
    //getting the list of users
    $query = "SELECT * FROM user WHERE is_deleted = 0 ORDER BY first_name";

    $users = mysqli_query($connection,$query);

    verify_query($users);
    ?>

    <main>
        <h1 class="aa">Users <span><a href="add-user.php">+ Add New</a></span></h1>

        <table class="masterlist">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Last Login</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>

            <?php   

            while($user = mysqli_fetch_assoc($users)){
                echo "<tr>
                           
                            <td>" .$user['first_name'] . "</td>
                            <td>" .$user['last_name'] . "</td>
                            <td>" .$user['last_login'] . "</td>
                            <td> <a href=\"modify-user.php?user_id={$user['id']}\">Edit</a></td>
                            <td> <a href=\"delete-user.php?user_id={$user['id']}\" 
                            onclick=\"return confirm('Are You sure?');\">Delete</a></td>
                      </tr>";
            }
       
            
            ?>


        </table>


    </main>
    
</body>
</html>