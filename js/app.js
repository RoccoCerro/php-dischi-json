const { createApp } = Vue

  createApp({
    data() {
      return {
        discs: [],
        isVisible: false,
        currentIndex: null,
      }
    },
    methods: {
      fetchData() {
        // recuperiamo i dati da server.php
        axios.get('server.php').then((res)=>{
          this.discs = res.data.results;
          console.log(this.discs);
        })
      },
      showModal(currentIndex){
        this.isVisible = true;
        this.currentIndex = currentIndex;
      }
    },
    created(){
      this.fetchData()
    }
  }).mount('#app')