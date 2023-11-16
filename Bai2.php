<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $error = ""; // Biến để lưu thông điệp lỗi

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Username
        $username = $_POST['username'];

        //Validate empty or less than 3 character 
        if (empty($username) || strlen($username) < 3) {
            $error = "Error: Name requires a minimum of 3 characters";
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>
            <label for="username">Name*</label><br>
            <input type="text" name="username">
        </p>

        <p>
            <button>Submit</button>
        </p>

    </form>
    
    <?php
    // Hiển thị thông điệp lỗi nếu có
    if (!empty($error)) {
        echo "<p>$error</p>";
    }
    ?>
</body>

</html>
