<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styling.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container2">
            <div class="backhome">
                <nav class="navbar navbar-expand-lg navbar-dark bg-black">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                  <div class="isi-contact">
                      <h1>Pilih</h1>
                      <div class="container">
                          <div class="nengah">
                              <div class="row">
                                  <div class="col">
                                      <div class="contact" onclick="location.href='barang.php'">
                                        <h2>Barang</h2>
                                    </div>
                                  </div>
                                  <div class="col">
                                      <div class="contact" onclick="location.href='user1.php'">
                                        <h2>User</h2>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>

    </body>
</html>