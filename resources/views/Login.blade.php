<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Klinik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }
        .login-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h1 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login Admin</h1>
        <input type="text" id="masukan id" placeholder="Masukan Id" />
        <input type="password" id="password" placeholder="Password" />
        <button onclick="login()">Login</button>
        <p id="error-message" class="error-message"></p>
    </div>

    <script>
        // Simulasi database user
        const users = {
            admin: "admin123",
            dokter: "dokter123",
            perawat: "perawat123"
        };

        function login() {
            const id = document.getElementById("id").value;
            const password = document.getElementById("password").value;
            const errorMessage = document.getElementById("error-message");

            if (users[id] && users[id] === password) {
                alert(`Selamat datang, ${id}!`);
                errorMessage.textContent = "";
                // Redirect atau buka halaman baru di sini
            } else {
                errorMessage.textContent = "id atau password salah!";
            }
        }
    </script>
</body>
</html>
