

<?php
if (isset($_POST['submit'])){
$link = mysqli_connect("localhost", "root", "", "final");  

$name = $_POST['name'];
$email = $_POST['email'];  
$password = $_POST['password'];  
  
  
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";  
    
    if(mysqli_query($link, $sql)) {
        echo "Records inserted successfully";
    }
    else
    mysqli_error($link);
         
    
    echo "<meta http-equiv='refresh' content='0'>";

    mysqli_close($link);
}

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>

    <style>

* {
        padding: 0;
        margin: 0;
    }
    
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 500px;
        height: 600px;
        border-radius: 20%;
        opacity: 0.7;
    }
    
    body {
        background-image: url(back.jpg);
        /* background-color: #cccccc; */
        background-repeat: no-repeat;
        background-position: center;
        /* background-size: cover; */
        align-items: center;
        background-color: #000;
        display: flex;
        /* justify-content: center; */
        height: 100vh;
        background-size: cover;
    }
    
    .form1 {
        background-color: #15172b;
        border-radius: 20px;
        box-sizing: border-box;
        height: 500px;
        padding: 20px;
        width: 220px;
        /* float: left; */
        width: 30%;
        margin: 30px;
        /* width: 50%; */
        display: inline-block;
        min-width: 200px;
        opacity: 0.9;
    }
    
    .form2 {
        background-color: #15172b;
        border-radius: 20px;
        box-sizing: border-box;
        height: 500px;
        padding: 20px;
        width: 220px;
        /* float: right; */
        width: 30%;
        /* margin-left: 700px; */
        margin: 30px;
        /* width: 50%; */
        display: inline-block;
        /* min-width: 200px; */
        opacity: 0.9;
    }
    
    .title {
        color: #eee;
        font-family: sans-serif;
        font-size: 60px;
        font-weight: 600;
        margin-top: 30px;
    }
    
    .subtitle {
        color: #eee;
        font-family: sans-serif;
        font-size: 30px;
        font-weight: 600;
        margin: 20px;
    }
    
    input {
        background-color: #303245;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        font-size: 20px;
        height: 100%;
        outline: 0;
        padding: 4px 20px 0;
        width: 100%;
    }
    
    .placeholder {
        color: #65657b;
        font-family: sans-serif;
        left: 20px;
        line-height: 14px;
        pointer-events: none;
        position: absolute;
        transform-origin: 0 50%;
        transition: transform 200ms, color 200ms;
        top: 20px;
    }
    
    .input:focus~.placeholder,
    .input:not(:placeholder-shown)~.placeholder {
        transform: translateY(-30px) translateX(10px) scale(0.75);
    }
    
    .input:not(:placeholder-shown)~.placeholder {
        color: #808097;
    }
    
    .input:focus~.placeholder {
        color: #dc2f55;
    }
    
    .submit {
        background-color: #08d;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        cursor: pointer;
        font-size: 18px;
        height: 50px;
        margin-top: 38px;
        outline: 0;
        text-align: center;
        width: 100%;
    }
    
    .submit:active {
        background-color: #06b;
    }
    
    .input:focus~.placeholder,
    .input:not(:placeholder-shown)~.placeholder {
        transform: translateY(-30px) translateX(10px) scale(0.75);
    }
    
    .input:not(:placeholder-shown)~.placeholder {
        color: #808097;
    }
    
    .input:focus~.placeholder {
        color: #dc2f55;
    }
    
    .submit {
        background-color: #08d;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        cursor: pointer;
        font-size: 18px;
        height: 50px;
        margin-top: 38px;
         outline: 0;
        text-align: center;}


</style>

</head>

<body>
    <div class="form1">
        <form action="#" name="form1" method="POST" onsubmit="return validation()">
            <h2 class="title">Welcome</h2>
            <h4 class="subtitle">Sign Up to continue</h4>
            <label for="name"></label>
            <input type="text" id="name" name="name" placeholder="Write your name..."> <br><br>
            <label for="email" class="placeholder"></label>
            <input type="email" id="email" name="email" placeholder="Write your email..."><br><br>

            <label for="password" class="placeholder"></label>
            <input type="password" id="password" name="password" placeholder="Write your password..."><br><br>

            <label for="repassword" class="placeholder"></label>
            <input type="password" id="repassword" name="repassword" placeholder="Confirm your password..."><br><br>

            <button type="submit" class="submit" name="submit" id="submit">Sign in</button> <br>
            <p id="result2"></p>


        </form>
    </div>
    <div class="img">
        <img src="center.jpg" alt="">
    </div>

    <div class="form2" name="form2" >
        <form action="" method="POST">
            <h2 class="title">Welcome</h2>
            <h4 class="subtitle">Log In to contninue</h4>
            <label for="email" class="placeholder"></label>
            <input type="email" id="email1" name="email1" placeholder="Write your email..." required><br><br>

            <label for="password" class="placeholder"></label>
            <input type="password" id="password1" name="password1" placeholder="Confirm your password..." required><br><br>

            <button type="submit" class="submit" name="submit1" id="submit1">Log in</button>
            <p id="result3"  style="color:red"> 
            <?php
  if (isset($_POST['submit1'])){

    $link = mysqli_connect("localhost", "root", "", "final");  
    $email1 = $_POST['email1'];  
    $password1 = $_POST['password1'];  
      
        //to prevent from mysqli injection  
        $email1 = stripcslashes($email1);  
        $password1 = stripcslashes($password1);  
        $email1 = mysqli_real_escape_string($link, $email1);  
        $password1 = mysqli_real_escape_string($link, $password1);  
      
        $sql = "SELECT * from users where email = '$email1' and password = '$password1'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script>window.location = "admin.php"</script>'; 
        }  
        else{  
            echo "Login failed. Invalid username or password.";  
        }  

     }      
 ?>

            </p>
        </form>
    </div>



    <script>
        function validation() {
    let name = document.form1.name.value;
    let password = document.form1.password.value;
    let email = document.form1.email.value;
    let repassword = document.form1.repassword.value;

    if (name.length == "") {
        document.getElementById('result2').innerHTML = "Write your name, please!";
        document.getElementById('result2').style.color = "red";
        return false;
    } else if (email.length == "") {
        document.getElementById('result2').innerHTML = "Write your email, please!";
        document.getElementById('result2').style.color = "red";
        return false;
    } else if (password.length == "") {
        document.getElementById('result2').innerHTML = "Write your password, please!";
        document.getElementById('result2').style.color = "red";
        return false;
    } else if (repassword.length == "") {
        document.getElementById('result2').innerHTML = "Please, confirm your password!";
        document.getElementById('result2').style.color = "red";
        return false;

    } else if (password.length < 5) {
        document.getElementById('result2').innerHTML = "Short password!";
        document.getElementById('result2').style.color = "red";
        return false;
    } else if (password !== repassword) {
        document.getElementById('result2').innerHTML = "Password should match!";
        document.getElementById('result2').style.color = "red";
        return false;

    } else {
        document.getElementById('result2').innerHTML = "Successfully logged!";
        document.getElementById('result2').style.color = "green";
        return true;

    }
}
    </script>






</body>
</html>