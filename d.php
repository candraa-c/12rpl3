<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Login dan Registrasi</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .auth-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #2d2d2d;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #00b300;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #009900;
        }

        p {
            margin-top: 15px;
            color: #777;
        }

        a {
            color: #00b300;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .toggle-link {
            margin-top: 10px;
            cursor: pointer;
            color: #00b300;
        }
    </style>
</head>
<body>
    <div class="auth-container" id="auth-container">
        <h2 id="form-title">Login</h2>
        <form id="auth-form" action="#" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group" id="email-group" style="display: none;">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Masuk</button>
        </form>
        <p class="toggle-link" id="toggle-text">Belum punya akun? Daftar di sini</p>
    </div>

    <script>
        const authForm = document.getElementById('auth-form');
        const formTitle = document.getElementById('form-title');
        const emailGroup = document.getElementById('email-group');
        const toggleText = document.getElementById('toggle-text');

        toggleText.addEventListener('click', () => {
            if (formTitle.innerText === 'Login') {
                formTitle.innerText = 'Registrasi';
                authForm.querySelector('button').innerText = 'Daftar';
                emailGroup.style.display = 'block';
                toggleText.innerText = 'Sudah punya akun? Masuk di sini';
            } else {
                formTitle.innerText = 'Login';
                authForm.querySelector('button').innerText = 'Masuk';
                emailGroup.style.display = 'none';
                toggleText.innerText = 'Belum punya akun? Daftar di sini';
            }
        });
    </script>
</body>
</html>