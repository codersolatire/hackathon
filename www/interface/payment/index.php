<!DOCTYPE html>
<html>
<?php
  include "../../locus/db/mysql/db_connect.php";
  $db = new db_connect();
  $GLOBALS['team_name'] = $_GET["team_name"];
  $GLOBALS['event_name'] = $_GET["event_name"];
  $q = "select payment_status from reg_hackathon where team_name =".$GLOBALS['event_name'];
  $res = $db->execute($q);
?>
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="payment.css">
</head>
<body>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Payment</h2>
          <p>Welcome <?=$team_name?>, Payment for <?=$event_name?></p>
        </div>
        <form action = "upload.php?event_name=<?=$GLOBALS['event_name']?>&team_name=<?=$GLOBALS['team_name']?>" method="post" enctype="multipart/form-data">
          <div class="products">
            <h3 class="title">Checkout</h3>
            <div class="item">
              <p class="item-name" align="center">
                <img src="/images/paytm_img.png" id = "paytm_logo" width="160px" onclick="showpaytm(this,event);" />
                <img src="/images/google_pay_img.png"width="160px" onclick="showgooglepay(this,event);"/>
                <img src="/images/bhim_img.png"width="160px" onclick="showbhim(this,event);"/>
              </p>
            </div>
            <div id = "showqr" align="center">
              <div class="total" align="left">QR Code<span class="price">Scan and Pay</span></div>
            </div>
            <br />
            <div id="paymentdone">
              Upload the screenshot of the payment.
              <input type="file" name="fileToUpload" id = "fileToUpload" class="btn btn-block"/>
              <input type="submit" value="Upload Image" name="submit" class="btn btn-primary btn-block">
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="/locus/locusjs/wrapjs.js"></script>

<script type="text/javascript">
  function showpaytm(target,event)
  {
    ajax(target,"showpaytmqr.php",document.getElementById("showqr"));
  }

  function showgooglepay(target,event)
  {
    ajax(target,"showgooglepayqr.php",document.getElementById("showqr"));
  }

  function showbhim(target,event)
  {
    ajax(target,"showbhimqr.php",document.getElementById("showqr"));
  }
  location.href = "#showqr";
</script>
</body>
</html>