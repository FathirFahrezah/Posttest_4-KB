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
        <div class = "container_profile">
            <h1>Profile</h1>
            <div class = "profile">
                <div>
                    <label  >Nama</label><br>
                    <?php echo $_POST['nama'] ?>
                </div>
                <div>
                    <label  >Email</label><br>
                    <?php echo $_POST['email'] ?>
                </div>
                <div>
                    <label  >Alamat</label><br>
                    <?php echo $_POST['alamat'] ?>
                </div>
                <div>
                    <label  >Security</label><br>
                    <?php echo $_POST['on'] ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>