<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <div id="app">
    <!-- Header -->
    <header class="page-header">
      <?php
      include __DIR__ . '/partials/template/header.php'; 
      ?>
    </header>
    <!-- Main -->
    <main class="page-main">
      <div class="container">
        <div class="row">
          <div v-for="(disk, index) in discs" class="col-4 text-center">
            <div class="card card-discs">
              <div @click="showModal(index)" class="card-header">
                <img :src="disk.poster" alt="">
              </div>
              <div class="card-body">
                <h4>{{disk.title}}</h4>
                <div>{{disk.author}}</div>
                <p>{{disk.year}}</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <?php
        require_once __DIR__ . '/partials/template/modal.php';
        ?>
      </div>
    </main>
    <!-- Footer -->
    <footer>
      <?php
      require_once __DIR__ . '/partials/template/footer.php';
      ?>
    </footer>
  </div>

  <script src="./js/app.js"></script>
</body>
</html>