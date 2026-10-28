

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRMS | Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            font-family: Arial, sans-serif;
            background: #eef3f9;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 36px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .logo {
            width: 65px;
            height: 65px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #164e8a;
            color: white;
            font-size: 23px;
            font-weight: bold;
        }

        h1 {
            margin: 0;
            text-align: center;
            color: #164e8a;
            font-size: 25px;
        }

        .subtitle {
            margin: 10px 0 28px;
            text-align: center;
            color: #68778a;
            font-size: 14px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #263548;
            font-size: 14px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccd5e0;
            border-radius: 8px;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #93c5fd;
            border-color: #164e8a;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #164e8a;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #103b69;
        }

        .signup {
            text-align: center;
            margin-top: 20px;
            color: #68778a;
            font-size: 14px;
        }

        .signup a {
            color: #164e8a;
            font-weight: bold;
            text-decoration: none;
        }

        .signup a:hover {
            text-decoration: underline;
        }

        .footer {
            margin-top: 24px;
            text-align: center;
            color: #788596;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <main class="login-card">
        <div class="logo">S</div>

        <h1>SIRMS</h1>

        <p class="subtitle">
            Student Information and Records Management System
        </p>

        
<form action="{{ route('login.submit') }}" method="POST">
    @csrf

            <label for="email">Email Address</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email address"
                autocomplete="username"
                required
            >

            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                autocomplete="current-password"
                required
            >

            <button type="submit">Log In</button>
   
</form>

<p class="signup">
    Account access is managed by your school administrator.
</p>

<p class="footer">
    Authorized users only
</p>
</main>
</body>
</html>
