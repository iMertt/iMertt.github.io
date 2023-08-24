<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <style>
    .main-content {
  position: relative;
  background-color: #eee;
  min-height: 100vh;
  top: 0;
  left: 80px;
  transition: all 0.5s ease;
  width: calc(100% - 80px);
  padding: 1rem;
}

    .container {
      background-color: #fff;
      border-radius: 20px;
      padding: 20px;
      margin-top: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    #pink {
      display: none;
    }
  </style>
  <body>
    <?php include_once('assets/sidebar.php'); ?>
    <div class="main-content">
    <div class="container">
      <h1 style="text-align: center">Fırsatlar</h1>
      <br />
      <div class="row">
        <div class="col-sm-6" style="border-radius: 20px">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Proje Adı</label
            >
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="name@example.com"
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >ziyaret yapılan müşteri</label
            >
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="name@example.com"
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Teklif Numarası/id</label
            >
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="name@example.com"
            />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
              >Teklif tutarı</label
            >
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="name@example.com"
            />
          </div>
          <button type="button" class="btn btn-primary">Buraya</button>
          <button type="button" class="btn btn-secondary">İstediğimiz</button>
          <button type="button" class="btn btn-success">Seçenekler</button>
          <button type="button" class="btn btn-danger" onclick="showPink()">
            Teklif Yarat
          </button>
        </div>
        <!-- Bu etiketi ekleyin -->
        <div class="col-sm-6" style="border-radius: 20px" id="pink">
          <div class="text-center mb-4">
            <h3>Yeni Teklif Ekle</h3>
            <p class="text-muted">
              Fiyat eklemek icin gerekli alanlari doldurun
            </p>
          </div>

          <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px">
              <div class="row">
              <div class="col">
  <label class="form-label">urun adi:</label>
  <select class="form-control" name="urun_adi" required>
    <option value="" disabled selected>Ürün Seçiniz</option>
    <option value="ürün1">ürün1</option>
    <option value="ürün2">ürün2</option>
    <option value="ürün3">ürün3</option>
  </select>
</div>
                <div class="col">
                  <label class="form-label">adet :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="fiyat"
                    placeholder="urun miktari  gir"
                    required
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                  />
                </div>

                <div class="col">
                  <label class="form-label">fiyat :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="adet"
                    placeholder="0.00TL"
                    readonly
                    disabled
                    required
                  />
                </div>
              </div>
              <br />
              <div class="form-floating">
                <textarea
                  class="form-control"
                  placeholder="Yorumunuzu girin"
                  name="yorum"
                  style="height: 238px; max-height: 400px"
                ></textarea>
                <label for="floatingTextarea2">Yorumunuzu girin</label>
              </div>
              <br />
              <div>
                <button type="submit" class="btn btn-success" name="submit">
                  Kaydet
                </button>
                <a href="#" class="btn btn-danger" onclick="hidePink()"
                  >Iptal Et</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    <script>
      function showPink() {
        document.getElementById("pink").style.display = "block";
      }

      function hidePink() {
        document.getElementById("pink").style.display = "none";
      }
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
