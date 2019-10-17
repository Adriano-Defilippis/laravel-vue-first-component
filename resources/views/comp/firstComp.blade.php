<script type="text/x-template" id="first-comp-id">

  <div>
    <h1>Area calculator and circle circumference</h1>

    <h2>Radius</h2>
    <input v-model="radius">

    <h2>Circonference</h2>
    <p>@{{ circonference }}</p>

    <h2>Area</h2>
    <p>@{{ area }}</p>
  </div>

</script>

<script type="text/javascript">



  Vue.component('first-component', {

    template: '#first-comp-id',
    data: function(){

      return {

        'radius': 0,
        'circonference': 0,
        'area': 0
      };
    },
    watch:{

      'radius': function(val){

        this.radius = val;
        this.area = Math.ceil(3.14 * (val * val));
        this.circonference = 2 * 3.14 * val;
      }

    },
   })
 </script>
