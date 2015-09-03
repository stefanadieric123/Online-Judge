<?php
   // if (isset ($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo $username;

        $sql = "SELECT * FROM login_data WHERE username = '$username';";
        $query = mysqli_query ($conn, $sql);
        $row = mysqli_fetch_array ($query);
        $goodpass = $row['password'];

        echo $password, $goodpass;

        //TODO: encrypt password from post to check with DB one
        if ($password == $goodpass){
            echo $password, $goodpass;
            $_SESSION['login'] = 1;
            $_SESSION['user'] = $username;
            header ("Location: index.php");
            die ();
        }
    //}
?>
