<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Login dan Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .auth-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }

        p {
            text-align: center;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .toggle-link {
            text-align: center;
            margin-top: 10px;
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
        <p class="toggle-link">
            <span id="toggle-text">Belum punya akun? Daftar di sini</span>
        </p>
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