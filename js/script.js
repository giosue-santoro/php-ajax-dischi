// Access-Control-Allow-Origin: app/server.php;
var app = new Vue({
    el: '#app',

    data:{
      dischi: [],
    },

    mounted() {

      let self = this;
  
      axios.get("http://localhost/php-ajax-dischi/app/server.php")
      .then((re) => {
        self.dischi = re.data;
      });

    },

    methods:{

    }

});
Vue.config.devtools = true;