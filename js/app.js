const { createApp } = Vue

  createApp({
    data() {
      return {
        discs: []
      }
    },
    methods: {
      fetchData() {
        // recuperiamo i dati da server.php
        axios.get('server.php').then((res)=>{
          this.discs = res.data.results;
          console.log(this.discs);
        })
      }
    },
    created(){
      this.fetchData()
    }
  }).mount('#app')