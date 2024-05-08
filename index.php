<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
</head>
<body>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <div id="app">
    <div class="container">
      <div class="row flex-wrap">
        <div class="col-4">
          <div v-for="disk in discs" class="card">
            <div class="card-header">
              
            </div>
            <div class="card-body">
              <h3>{{disk.title}}</h3>
              <h6>{{disk.author}}</h6>
              <p>{{disk.year}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./js/app.js"></script>
</body>
</html>