<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style.css?v1">
</head>
<body>
    <div class = "container" >
        <div class = "container_tulisan">
            <div class = "h1">
                <h1>Toko Fashion</h1>
            </div>
            <div class = "p">
                <p>CEO & Founder, PaSuMer</p>
            </div>
        </div>
        <div class = "form">
            <h1>Input Data Diri</h1>
            <form action="profile.php" method="post">
                <div class = "isi">
                    <label  for="">Nama</label>
                    <input  type="text" name="nama" required>
                    <label for="">Password</label>
                    <input type="password" name="password" required>
                    <label  for="">Email</label>
                    <input  type="email" name="email" required>
                    <label  for="">Alamat</label>
                    <input  type="alamat" name="alamat" required>
                    <label  for="">Security</label>
                    <input name="on" type="checkbox">On

                    <button type="submit" name="submit"><b>Submit</b></button>

                </div>
            </form>
        </div>
    </div>
</body>
</html>