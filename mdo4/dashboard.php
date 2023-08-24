<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
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

.dashboard {
  margin-top: 30px;
  display: none;
}

.dashboard-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.button-container {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.button-container .button {
  flex: 10 0 auto;
  margin: 0 50px;
}

.dashboard-tiles {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-bottom: 20px;
}

.dashboard-tile {
  flex-basis: calc(33.33% - 20px);
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 20px;
  transition: box-shadow 0.3s ease-in-out;
}

.dashboard-tile:hover {
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.dashboard-tile-title {
  font-size: 18px;
  margin-bottom: 10px;
}

.dashboard-tile-value {
  font-size: 36px;
  font-weight: bold;
}

.ranking-table {
  margin-top: 30px;
}

.ranking-table th,
.ranking-table td {
  text-align: center;
}

.dashboard-chart {
  height: 400px;
  
}

@media screen and (max-width: 1023px) {
  .main-content {
    left: 0;
    width: 100%;
  }
  
  .dashboard-tile {
    flex-basis: calc(50% - 20px);
  }
}

@media screen and (max-width: 767px) {
  .button-container .button {
    font-size: 14px; /* Buton metin boyutunu küçült */
    padding: 8px 12px; /* Buton iç boşluğunu küçült */
  }
}

    </style>
    <title>Dashboard</title>
  </head>

  <body>
    <?php require_once('assets/sidebar.php'); ?>
 

    <div class="main-content">
      
        <div class="container">
          <section class="section">
          <h1 class="title"></h1>

          <!-- Butonları içeren div -->
          <div class="button-container">
            <button
              class="button is-primary"
              onclick="toggleDashboard('weeklyVisits')"
            >
              Haftalık Müşteri Ziyaretleri
            </button>
            <button
              class="button is-primary"
              onclick="toggleDashboard('wonProjects')"
            >
              Kazanılan Projeler
            </button>
            <button
              class="button is-primary"
              onclick="toggleDashboard('employeeRanking')"
            >
            takip edilen proje adeti
            </button>
          </div>

          <div class="dashboard" id="weeklyVisits">
            <h2 class="dashboard-title">Haftalık Müşteri Ziyaretleri</h2>
            <div class="dashboard-tiles">
              <div class="dashboard-tile">
                <p class="dashboard-tile-title">Bu Hafta</p>
                <p class="dashboard-tile-value">235</p>
              </div>
              <div class="dashboard-tile">
                <p class="dashboard-tile-title">Dün</p>
                <p class="dashboard-tile-value">43</p>
              </div>
              <div class="dashboard-tile">
                <p class="dashboard-tile-title">Toplam</p>
                <p class="dashboard-tile-value">2.345</p>
              </div>
            </div>
            <div class="dashboard-chart" id="weeklyVisitsChart">
              <canvas id="weeklyVisitsCanvas"></canvas>
            </div>
          </div>

          <div class="dashboard" id="wonProjects">
            <div class="dashboard-tiles">
              <div class="dashboard-tile">
                <p class="dashboard-tile-title" style="text-align: center">
                  Genel Bakış
                </p>
                <div class="dashboard-chart">
                  <canvas id="projectOverviewChart"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="dashboard" id="employeeRanking">
            <h2 class="dashboard-title">takip edilen proje adeti</h2>
            <table
              class="table is-bordered is-striped is-narrow is-hoverable ranking-table"
            >
              <thead>
                <tr>
                  <th>Sıra</th>
                  <th>Personel Adı</th>
                  <th>Puan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>John Doe</td>
                  <td>120</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jane Smith</td>
                  <td>80</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Mike Johnson</td>
                  <td>160</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Emily Brown</td>
                  <td>200</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>David Lee</td>
                  <td>90</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      function createLineChart() {
        var ctx = document
          .getElementById("weeklyVisitsCanvas")
          .getContext("2d");
        var data = {
          labels: [
            "Pazartesi",
            "Salı",
            "Çarşamba",
            "Perşembe",
            "Cuma",
            "Cumartesi",
            "Pazar",
          ],
          datasets: [
            {
              label: "Haftalık Ziyaretler",
              data: [120, 150, 180, 200, 220, 190, 160],
              borderColor: "rgba(75, 192, 192, 1)",
              backgroundColor: "rgba(75, 192, 192, 0.2)",
              borderWidth: 2,
            },
          ],
        };

        var config = {
          type: "line",
          data: data,
          options: {
            scales: {
              y: {
                beginAtZero: true,
              },
            },
          },
        };

        var chart = new Chart(ctx, config);
      }

      // İlk başta gizle
      var dashboards = document.getElementsByClassName("dashboard");
      for (var i = 0; i < dashboards.length; i++) {
        dashboards[i].style.display = "none";
      }

      // Haftalık ziyaretler grafiğini göster
      createLineChart();
      document.getElementById("weeklyVisits").style.display = "block";
    </script>

    <script>
      function createDoughnutChart() {
        var ctx = document
          .getElementById("projectOverviewChart")
          .getContext("2d");
        var data = {
          labels: ["Bu Ay", "Bugün", "Toplam"],
          datasets: [
            {
              data: [70, 15, 45],
              backgroundColor: [
                "rgba(54, 162, 235, 0.7)",
                "rgba(255, 99, 132, 0.7)",
                "rgba(75, 192, 192, 0.7)",
              ],
            },
          ],
        };

        var config = {
          type: "doughnut",
          data: data,
          options: {
            responsive: true,
            maintainAspectRatio: false,
          },
        };

        var chart = new Chart(ctx, config);
      }

      // Grafiği oluştur
      createDoughnutChart();
    </script>

    <script>
      function toggleDashboard(dashboardId) {
        var dashboards = document.getElementsByClassName("dashboard");
        for (var i = 0; i < dashboards.length; i++) {
          dashboards[i].style.display = "none";
        }

        var selectedDashboard = document.getElementById(dashboardId);
        if (selectedDashboard) {
          selectedDashboard.style.display = "block";
        }
      }
    </script>
    <script>
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");

      btn.onclick = function () {
        sidebar.classList.toggle("active");
      };
    </script>
  </body>
</html>
