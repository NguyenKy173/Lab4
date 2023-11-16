<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            width: 330px;
            height: 400px;
            border: 1px solid black;
            background-color: #eeeeee;
        }
        h1{
            margin-left: 10px;
        }
        label{
            margin-left: 10px;
            margin-bottom: 5px;
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
    <section class="form">
        <h1>Resister form</h1>
        <form action="dangki.php" method="post">
            
            <label for="">Username:</label><br>
            <input type="text" name="username" class="user"  placeholder="Enter Username"><br>

            <label for="">Email:</label><br>
            <input type="mail" name="mail" class="user"  placeholder="Enter Email"><br>

            <label for="">Password:</label><br>
            <input type="password" name="pass" class="user"  placeholder="Enter Password"><br>

            <label for="">Confirm Password:</label><br>
            <input type="password" name="repass" class="user"  placeholder="Confirm Password"><br>

            <button>Resister</button>
            
            
        </form>
    </section>
</body>
</html>