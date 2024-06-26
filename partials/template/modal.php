<?php /*
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body> --> */ ?>
  <div v-if="isVisible" class="ms-modal fs-1 text-white">
    <div class="container" @click="closeModal()">
      <div class="row justify-content-center align-items-center">
        <div class="col-auto">
          <div class="card">
            <div @click="showModal(index)" class="card-header">
              <img :src="discs[currentIndex].poster" alt="">
            </div>
            <div class="card-body">
              <h4>{{discs[currentIndex].title}}</h4>
              <div>{{discs[currentIndex].author}}</div>
              <p>{{discs[currentIndex].year}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- </body> -->

