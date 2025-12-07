
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            padding: 40px 50px;
            border-radius: 20px;
            text-align: center;
            width: 90%;
            max-width: 450px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        .card h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 18px;
            opacity: 0.85;
            margin-bottom: 25px;
        }

        .btn {
            background: white;
            color: #2575fc;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            transition: 0.3s;
            display: inline-block;
        }

        .btn:hover {
            background: #e5e5e5;
            transform: scale(1.05);
        }

        .btn:focus-visible {
            outline: 3px solid rgba(37,117,252,0.6);
            outline-offset: 3px;
            box-shadow: 0 0 0 4px rgba(37,117,252,0.12);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

</head>
<body>

    <div class="card">
        <h1>Welcome to the Home Page</h1>
        <p>You have successfully logged in.</p>

        <form method="post" action="logout.php" style="display:inline;">
            <button type="submit" class="btn" aria-label="Logout and end your session">Logout</button>
        </form>
    </div>

</body>
</html>
