<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand">Dashboard Inventaris</a>
            <div class="d-flex">
                <h2 class="uname">Username</h2>
                <a class="btn btn-logout" href="">Keluar</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="card padd">
            <div class="card-body">
                <div class="couple">
                    <h1 class="card-title">Barang</h1>
                    <a class="btn btn-add" href=""><span class="material-icons">
                            add
                        </span>
                    </a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Kondisi</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Laptop</td>
                            <td>Baru</td>
                            <td>48</td>
                            <td>
                                <span class="material-icons">
                                    visibility
                                </span>
                                <span class="material-icons">
                                    edit
                                </span>
                                <span class="material-icons">
                                    delete
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Laptop</td>
                            <td>Baru</td>
                            <td>48</td>
                            <td>
                                <span class="material-icons">
                                    visibility
                                </span>
                                <span class="material-icons">
                                    edit
                                </span>
                                <span class="material-icons">
                                    delete
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>