<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
/>
<link rel="stylesheet" href="/css/sidebar.css" />
  <title>Document</title>
</head>
<body>
<div class="sidebar">
  <div class="top">
    <div class="logo">
      <img src="images/image.png" alt="mdologo" />
    </div>
    <i class="bi bi-border-width" id="btn"></i>
  </div>
  <div class="user">
    <img src="images/user.png" alt="me" class="user-img" />
    <div>
      <p class="bold">Mert D.</p>
      <p>Admin</p>
    </div>
  </div>
  <ul>
    <li>
      <a href="dashboard.php">
        <i class="bi bi-columns-gap"></i>
        <span class="nav-item">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    <li>
      <a href="musteriler.php">
        <i class="bi bi-people"></i>
        <span class="nav-item">Müşteriler</span>
      </a>
      <span class="tooltip">Müşteriler</span>
    </li>
    <li>
      <a href="firsatlar.php">
        <i class="bi bi-briefcase"></i>
        <span class="nav-item">Fırsatlar</span>
      </a>
      <span class="tooltip">Fırsatlar</span>
    </li>
    <li>
      <a href="ziyaretRaporlari.php">
        <i class="bi bi-calendar-check"></i>
        <span class="nav-item">Ziyaret Raporları</span>
      </a>
      <span class="tooltip">Ziyaret Raporları</span>
    </li>
    <li>
      <a href="partnerPortali.php">
        <i class="bi bi-diamond-half"></i>
        <span class="nav-item">Partner Portalı</span>
      </a>
      <span class="tooltip">Partner Portalı</span>
    </li>
    <li>
      <a href="bulten.php">
        <i class="bi bi-receipt"></i>
        <span class="nav-item">Bülten</span>
      </a>
      <span class="tooltip">Bülten</span>
    </li>
    <li>
      <a href="">
        <i class="bi bi-box-arrow-left"></i>
        <span class="nav-item">Çıkış Yap</span>
      </a>
      <span class="tooltip" data-text="logout">Çıkış Yap</span>
    </li>
  </ul>
</div>


</body>
<script src="/js/sidebar.js"></script>
</html>


