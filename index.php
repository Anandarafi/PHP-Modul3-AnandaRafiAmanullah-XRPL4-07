<html>
<head>
    <title>Login!</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>
        </div>
        <div class="artikel">
            <form action="terusan.php" method="post">
                <div class="grup">
                    <label for="email">Username</label>
                    <input type="text" placeholder="Username Anda" name="name" required>
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password Anda" name="password" required>
                </div>
                <div class="grup">
                    <input type="submit" value="Sign In">
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <h5 align="center">Apakah anda ingin <a href="#">SignUp!</a></h5>
    </div>
</body>
</html>