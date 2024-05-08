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
