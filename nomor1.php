<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ajax PHP CRUD System">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="font-family:roboto,sans-serif;">
    <div class="container float-left col-md-4">
        <div class="container bg-light py-3" id='regBox'>
            <h2 class='text-center'>Submit Data</h2><br>
            <div id='msgReg'></div>
            <form action="" id='regForm' method="post">
                <div class="form-group">
                    <input type="text" id="first" name="first" placeholder="Masukkan Nama Lengkapmu"
                        class='form-control' required>
                </div>
                <div class="form-group">
                    <input type="text" id="last" name="last" placeholder="Masukkan Nama Belakangmu" class='form-control'
                        required>
                </div>
                <div class="form-group">
                    <input type="text" id="work" name="work" placeholder="Masukkan Pekerjaanmu" class='form-control'
                        required>
                </div>
                <div class="form-group">
                    <input type="text" id="city" name="city" placeholder="Masukkan Nama Kotamu" class='form-control'
                        required>
                </div>
                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="Email" class='form-control' required>
                </div>
                <input type="submit" id="btnPost" value="Submit" class='btn btn-info'>
            </form>
            <br>
        </div>
    </div>
    <div class="container col-sm-7 float-right">
        <div class="container">
            <h4 class='text-center'>Data di Databasemu</h4><br>
            <br>
            <div id="msg" class='mx-auto'></div>
        </div>
        <div id="table" class='text-center mx-auto'></div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>