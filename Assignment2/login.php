<?php
session_start();

//echo "Logged in as:" .$_SESSION['email'];

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $user = $_POST['email'];
//     $pass = $_POST['password'];

//     $conn = mysqli_connect("localhost:3306", "root", "", "healthsupport");

//     if ($conn->connect_error) {
//         die("Failed to connect:" . $conn->connect_error);
//     } else {
//         $stmt = $conn->prepare("SELECT * FROM user WHERE email=?");
//         $stmt->bind_param("s", $user);
//         $stmt->execute();
//         $stmt_result = $stmt->get_result();
//         if ($stmt_result->num_rows > 0) {
//             $data = $stmt_result->fetch_assoc();
//             if ($data['pass'] == $pass) {
//                 $_SESSION['email'] = $data['email']; // Store user's email in session
//                 $_SESSION['name'] = $data['name']; // Store user's name in session
//                 header("Location: ../Home/home.php"); // Redirect to the dashboard page
//                 exit();
//             } else {
//                 $error = "Incorrect Username or password!";
//         header("Location: login.php?error=" . urlencode($error));
//         exit();
//             }
//         } else {
//             $error = "Incorrect Username or password!";
//         header("Location: login.php?error=" . urlencode($error));
//         exit();
//         }
//     }
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Hardcoded login credentials
    $database_user = "piudassaikat@gmail.com";
    $database_password = "123456";

    $user = $_POST['email'];
    $pass = $_POST['password'];

    // Correct comparison
    if ($database_user === $user && $database_password === $pass) {

        // Set session
        $_SESSION['email'] = $database_user;

        // Redirect to homepage
        header("Location: ../Assignment2/home.php");
        exit();

    } else {

        // Error message
        $error = "Incorrect email or password!";
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Support - Login</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #00b4db, #0083b0);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 420px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            padding: 40px 35px;
            border-radius: 20px;
            text-align: center;
            color: #fff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        .container h1 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .input-field {
            margin: 15px 0;
        }

        input {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            outline: none;
            font-size: 15px;
            margin-top: 5px;
        }

        .input-field input {
            background: rgba(255, 255, 255, 0.8);
        }

        .link {
            display: block;
            margin: 10px 0;
            font-size: 14px;
            color: #fff;
            opacity: 0.9;
            transition: 0.3s;
            text-decoration: none;
        }

        .link:hover {
            opacity: 1;
        }

        .buton {
            width: 100%;
            padding: 14px;
            background: #fff;
            border: none;
            border-radius: 12px;
            font-size: 17px;
            font-weight: 600;
            color: #0083b0;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }

        .buton:hover {
            background: #efefef;
            transform: scale(1.05);
        }

        .error-message {
            color: #ffdddd;
            background: rgba(255, 0, 0, 0.3);
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <?php if (!empty($_GET['error'])): ?>
            <p class="error-message"><?php echo $_GET['error']; ?></p>
        <?php endif; ?>

        <form action="login.php" method="POST">

            <div class="input-field">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-field">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <a href="/" class="link">Forgot Your Password?</a>
            <a href="/" class="link">Create New Account</a>

            <button type="submit" class="buton">Sign In</button>

        </form>
    </div>
</body>
</html>
