<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>

    <style>
        /* Base styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .container {
            width: 90%;
            max-width: 400px;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header-text {
            font-size: 1.5rem;
            color: #333;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .sub-text {
            font-size: 1rem;
            color: #555;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: bold;
            color: #333;
            display: block;
            margin: 0.5rem 0;
        }

        .input-text {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn-primary {
            width: 100%;
            padding: 0.8rem;
            background-color: #5a67d8;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #4c51bf;
        }

        .sub-text, .form-label, .hover-link1 {
            font-size: 0.9rem;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 1.5rem;
            }

            .header-text {
                font-size: 1.3rem;
            }

            .sub-text {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1rem;
            }

            .header-text {
                font-size: 1.1rem;
            }

            .sub-text {
                font-size: 0.8rem;
            }

            .btn-primary {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $_SESSION["user"] = "";
    $_SESSION["usertype"] = "";
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');
    $_SESSION["date"] = $date;
    include("connection.php");

    $error = '<label for="promter" class="form-label"></label>';

    if ($_POST) {
        $email = $_POST['useremail'];
        $password = $_POST['userpassword'];
        $result = $database->query("select * from webuser where email='$email'");
        if ($result->num_rows == 1) {
            $utype = $result->fetch_assoc()['usertype'];
            if ($utype == 'p') {
                $checker = $database->query("select * from patient where pemail='$email' and ppassword='$password'");
                if ($checker->num_rows == 1) {
                    $_SESSION['user'] = $email;
                    $_SESSION['usertype'] = 'p';
                    header('location: patient/index.php');
                } else {
                    $error = '<label for="promter" class="form-label" style="color:red;text-align:center;">Wrong credentials: Invalid email or password</label>';
                }
            } elseif ($utype == 'a') {
                $checker = $database->query("select * from admin where aemail='$email' and apassword='$password'");
                if ($checker->num_rows == 1) {
                    $_SESSION['user'] = $email;
                    $_SESSION['usertype'] = 'a';
                    header('location: admin/index.php');
                } else {
                    $error = '<label for="promter" class="form-label" style="color:red;text-align:center;">Wrong credentials: Invalid email or password</label>';
                }
            } elseif ($utype == 'd') {
                $checker = $database->query("select * from doctor where docemail='$email' and docpassword='$password'");
                if ($checker->num_rows == 1) {
                    $_SESSION['user'] = $email;
                    $_SESSION['usertype'] = 'd';
                    header('location: doctor/index.php');
                } else {
                    $error = '<label for="promter" class="form-label" style="color:red;text-align:center;">Wrong credentials: Invalid email or password</label>';
                }
            }
        } else {
            $error = '<label for="promter" class="form-label" style="color:red;text-align:center;">We couldn’t find any account with this email.</label>';
        }
    }
    ?>

    <div class="container">
        <p class="header-text">Welcome Back!</p>
        <p class="sub-text">Login with your details to continue</p>
        <form action="" method="POST">
            <label for="useremail" class="form-label">Email:</label>
            <input type="email" name="useremail" class="input-text" placeholder="Email Address" required>
            <label for="userpassword" class="form-label">Password:</label>
            <input type="password" name="userpassword" class="input-text" placeholder="Password" required>
            <br>
            <?php echo $error ?>
            <input type="submit" value="Login" class="btn-primary">
        </form>
        <p class="sub-text" style="text-align: center; margin-top: 1rem;">Don't have an account? <a href="signup.php" class="hover-link1">Sign Up</a></p>
    </div>
</body>
</html>
