<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>

    <h2>Form Validation Method</h2>
    <form method = "POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>> 
    First Name: <input type="text" name="name"><br> 
    Last Name: <input type="text" name="name"><br> 
    E-mail: <input type="text" name="email"><br> 
    <input type="submit"> 
    </form> 

    <?php 
    $fname = $lname = $email = " ";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $fname = ($_POST["name"]);
        $lname = ($_POST["last"]);
        $email = ($_POST["email"]);

        $servername = "localhost";
        $username = "root";
        $password = "" ;
        $dbname = "test";

        //Create Connection
        $conn = new mysqli( $servername,  $username , $password , $dbname);

        //Check Connection
        if ($conn -> connect_error){
            die("Connection Failed: " . $conn-> connect_error);
        }

        //Prepare & Bind
        $stmt = $conn->prepare("INSERT INTO mytable (fname, lname, email ) VALUES  (? , ? , ?)" );
        $stmt -> bind_param("Database Created" ,$fname, $lname , $email);
        
        //Set Parameters and Execute 
        $firstname = $name;
        $lastname = $last; 
        $email = $email;
        $stmt -> execute();

        echo "New Records have been created Successfully";
        $stmt -> close(); 
        $conn -> close();   
    }
    ?>  
</body>
</html>