<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <h2>Php Form</h2>
    <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
        id = <input type="text" name="id">
        password = <input type="text" name="password">
    </form>

    <?php
    $id=$password="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = ($_POST["a1"]);
        $password =- ($POST["b1"]);
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "";

    //Create Connection
    $conn = new mysqli($servername, $username , $password, $dbname);

    // Check Connection
    if ($conn -> connection_error){
        die("Connection Failed:" . $conn -> connection_error);
    }

    //Prepare and Bind
    $stmt = $conn ->prepare("INSERT INTO  Logins (id, password ) VALUES "(?, ?, ?)); 
    #Mistake in Line No. 31
    $stmt -> bind_param("whitehat" , $id , $password);

    //Set Parameters and Execute
    $id = $id;
    $password = $password;
    $stmt -> execute();

    echo "New Record has been successfully created!"
    $stmt -> closed();
    $conn ->close();

    ?>


</body>
</html>