
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ziyaret Raporları</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    #commentsList {
  max-height: 300px; /* veya istediğiniz bir yükseklik */
  overflow-y: auto;
  word-wrap: break-word; /* Uzun kelimelerin taşmasını önler */
}
  </style>
</head>
<body>
<?php require_once('assets/sidebar.php'); ?>
  <div class="container">
    <h2>Ziyaret Raporları</h2>
    <form>
  <div class="form-group">
    <label for="customerName">Müşteri Adı:</label>
    <input type="text" class="form-control" id="customerName" oninput="autocompleteCustomer()" required>
  </div>
  <div class="form-group">
    <label for="visitedPerson">Görüşülen Kişi:</label>
    <input type="text" class="form-control" id="visitedPerson">
  </div>
  <div class="form-group">
    <label for="comments">Yorum:</label>
    <textarea class="form-control" id="comments" rows="4"></textarea>
  </div>
  <button type="button" class="btn btn-primary" onclick="validateAndSubmitReport()">Raporu Gönder</button>
</form>
    <hr>
    <h4>Rapor Sonucu</h4> <br>
    <ul id="commentsList">
      <!-- Yorumlar dinamik olarak buraya eklenecek -->
    </ul>
  </div>
  
  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
  function validateAndSubmitReport() {
    var customerName = $("#customerName").val();
    var visitedPerson = $("#visitedPerson").val();
    var comments = $("#comments").val();
    var currentDate = new Date().toLocaleString();
    
    
    if (customerName.trim() === "") {
      swal ( "Oops" ,  "Lütfen Adınızı ve Soyadınızı girin!" ,  "error" )
;
      return; 
    }
    if (visitedPerson.trim() === "") {
      swal("Oops" ,"Lütfen görüştüğünüz kişiyi belirtin!" ,  "error");
      return; 
    }
    if (comments.trim() === "") {
      swal("Oops" ,"Yorum yapmayı unutmayın!" ,  "error");
      return; 
    }
    // Oluşturulan raporu yorumlar listesine ekleyin
    var report = "<li><strong>Müşteri:</strong> " + customerName + "<br><strong>Görüşülen Kişi:</strong> " + visitedPerson + "<br><strong>Yorum:</strong> " + comments + "<br><strong>Oluşturma Tarihi:</strong> " + currentDate + "</li>";
    $("#commentsList").append(report);
    
    $("#customerName").val("");
    $("#visitedPerson").val("");
    $("#comments").val("");
  }
</script>
</body>
</html>
