

<!DOCTYPE html>

<html>

    <head>

        <title> Update DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <form action="php_insert_data_in_mysql_database.php" method="post">

            <input type="text" name="name" required placeholder="Name"><br><br>

            <input type="text" name="id" required placeholder="id"><br><br>

            <input type="number" name="semester" required placeholder="semester" min="3" max="100"><br><br>
            
            <input type="text" name="cgpa" required placeholder="cgpa"><br><br>
            
            <input type="submit" name="update" value="Update Data From Database">

        </form>
        <?php


if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "sms";
    
    

    $name = $_POST['name'];
    $id = $_POST['id'];
    $sem = $_POST['semester'];
    $cgpa = $_POST['cgpa'];
    
    

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    $query = "UPDATE students SET name = $name, id = $id, semester = $sem WHERE cgpa = $cgpa";
        
        
    }

    
    mysqli_free_result($result);
    mysqli_close($connect);


?>

    </body>

</html>