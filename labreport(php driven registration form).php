
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registration form</title>
</head>
<body>
    <form method="POST" action="">
        <h2>Registration form</h2>
        <div id="container">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" placeholder="Name" required><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <button type="submit">Submit</button>
    </div> 
    </form>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name =$_POST['name'];
        $email =$_POST['email'];
        $password = $_POST["password"];    
     }
     if (empty($name) || empty($email) || empty($password)) {
        echo "Please fill in all the required fields.";
    } else {
     $conn=new mysqli("localhost","root","","bca");
     if($conn->connect_error){
        die("Connection Failed:". $conn->connect_error);
     }
     else{
        $stmt= $conn->prepare("insert into users(name, email, password) values(?,?,?)");
        $stmt->bind_param("sss", $name, $email, $password);
        $stmt->execute();   
        echo"Registration successfull.";
        $stmt->close();
        $conn->close();
     }
    }
    ?>
</body>
</html>