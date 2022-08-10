<?php
$insert =false;
if(isset($_POST['firstname'])){
        $server = "localhost";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($server,  $username, $password);

        if(!$conn){
            die("connection to this database failed due to " .  mysqli_connect_error());
        }
        // echo "Succes Connecting to the db";

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $service = $_POST['service'];
        $email = $_POST['email'];
        $aboutservice = $_POST['aboutservice'];
        $sql = "INSERT INTO `recieving data`. `user data` ( `firstname`, `lastname`, `phone`, `service`, `email`, `aboutservice`, `date`) VALUES ('$firstname', '$lastname', '$phone', '$service', '$email', '$aboutservice', current_timestamp());";
        // echo $sql;

        if($conn->query($sql) == TRUE){
            // echo "<center>Successfully inserted</center>";
            $insert = true;
        }

        else{
            echo "There is an error while lging you in";
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code with Hassan - Project In PHP</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: lobster;
        }
        .container input, textarea{
            font-size: 16px;
            /* display: block; */
            width: 80%;
            margin: 11px;
            padding: 10px;
            border: 2px solid #000;
            border-radius: 10px;
            outline: none;
        }   

        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .btn{
            display:flex;
            padding: 10px;
            width: 100%;
            justify-content:center;
            margin-top: 5px;
            background-color: aqua;
            border: 1px solid aqua;
            border-radius: 10px;
            cursor: pointer;
        }

        .btn:hover{ 
            transition: all .2s linear;
            color: cornflowerblue;
            background-color: black;
            border: 1px solid black;
            width: 150%;
        }

        @media(max-width:768px){
            .btn:hover{
                width:100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
        <input type="text" placeholder="First Name" required id="firstname" name="firstname">
        <input type="text" placeholder="Last Name"required id="lastname" name="lastname">
        <input type="phone" placeholder="Your Phone Number"required id="phone" name="phone">
        <input type="text" placeholder="Type Your Service" id="service" name="service">
        <input type="email" placeholder="Enter your email"required id="email" name="email">
        <textarea name="aboutservice" id="textarea" cols="30" rows="10" placeholder="Define how can i help you" name="aboutservice"></textarea>
        <?php
        if($insert == true){
            echo "<p>Thanks For submiting love by Hassan Abbas" .  set_time_limit(5);
        }
        elseif($insert = false){
            echo"ERROR: Try again later";
        }
        ?>
        <button class="btn">Submit</button>
    </form>
    </div>
    <script></script>
</body>
</html>