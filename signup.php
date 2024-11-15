<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">

    <style>
        /* Base Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        table {
            width: 100%;
        }

        .header-text {
            font-size: 1.8em;
            margin: 10px 0;
            color: #333;
            text-align: center;
        }

        .sub-text {
            font-size: 1em;
            color: #777;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .input-text {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .login-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary-soft {
            background-color: #e0e0e0;
            color: #333;
        }

        .hover-link1 {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .hover-link1:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-text {
                font-size: 1.5em;
            }

            .sub-text {
                font-size: 0.9em;
            }

            .input-text {
                font-size: 0.9em;
                padding: 8px;
            }

            .login-btn {
                padding: 8px 15px;
                font-size: 0.9em;
            }

            table {
                width: 100%;
            }

            td {
                display: block;
                width: 100%;
            }

            td input {
                margin-bottom: 10px;
            }
        }
    </style>

    <title>Sign Up</title>
</head>
<body>
    <center>
        <div class="container">
            <table border="0">
                <tr>
                    <td colspan="2">
                        <p class="header-text">Let's Get Started</p>
                        <p class="sub-text">Add Your Personal Details to Continue</p>
                    </td>
                </tr>
                <form action="" method="POST">
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="name" class="form-label">Name:</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td">
                            <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                        </td>
                        <td class="label-td">
                            <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="address" class="form-label">Address:</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <input type="text" name="address" class="input-text" placeholder="Address" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="nic" class="form-label">NIC:</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <input type="text" name="nic" class="input-text" placeholder="NIC Number" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="dob" class="form-label">Date of Birth:</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <input type="date" name="dob" class="input-text" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="reset" value="Reset" class="login-btn btn-primary-soft btn">
                        </td>
                        <td>
                            <input type="submit" value="Next" class="login-btn btn-primary btn">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br>
                            <label for="" class="sub-text">Already have an account? </label>
                            <a href="login.php" class="hover-link1 non-style-link">Login</a>
                            <br><br><br>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </center>
</body>
</html>
