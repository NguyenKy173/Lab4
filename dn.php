<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <style>
        .body{
            width: 330px;
            height: 400px;
            border: 1px solid black;
            background-color: #eeeeee;
        }
        h2{
            margin-left: 10px;
        }
        label{
            margin-left: 10px;
        }
        input{
            
            margin-left: 10px;
            margin-bottom: 10px;
            width: 300px;
            height: 25px;
            background-color: ;
        
        }
        button{
            margin-left: 120px;
            margin-top: 10px;
            height: 25px;
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="body">
    <h2>Đăng nhập</h2>
    <form action="dangnhap.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required placeholder="Nhập email"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required placeholder="Nhập passworrd"><br>

        <button>Resister</button>
        <p>Click here to<a href="register.php"> Resister </a></p>
    </form>
    </div>
    

</body>
</html>
