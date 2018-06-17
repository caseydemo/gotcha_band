<template>
<div class="container-fluid">
  <div class="p-5"></div>



  <div class="mx-auto" style="width: 200px;">
    <h1 class="medium-title" >Upcoming Gigs</h1>
  </div>
<div class="table-responsive">
    <table class="table table-hover">
    <thead>
      <tr>
        <th class="col-sm-2" >Date</th>
        <th class="col-sm-2" >City</th>
        <th class="col-sm-2" >Location</th>
        <th class="col-sm-2" >Event</th>
        <th class="col-sm-2" >Website</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>July 20-21</td>
        <td>Nicholasville, KY</td>
        <td>I Don't Care Bar and Grille</td>
        <td>Disaster Piece Theater Summer Festival</td>
        <td><a href="#" >website</a></td>
      </tr>
      <tr>
        <td>August 10</td>
        <td>Detroit, MI</td>
        <td>The Token Lounge</td>
        <td>Opening for Blackfoot</td>
        <td><a href="https://www.bandsintown.com/e/22799886?came_from=67&app_id=TuneGenie&affil_code=TuneGenie" >website</a></td>
      </tr>
      <tr>
        <td>August 18</td>
        <td>Lexington, KY</td>
        <td>Manchester Music Hall</td>
        <td>Opening for Kiss Kiss Bang</td>
        <td><a href="http://manchestermusichall.com/events/">website</a></td>
      </tr>
      <tr>
        <td>September 22</td>
        <td>Lexington, KY</td>
        <td>Rock House Brewing</td>
        <td>Disaster Piece Theater</td>
        <td><a href="http://rockhousebrewing.com/">website</a></td>
      </tr>
      <tr>
        <td>October 27</td>
        <td>Nicholasville, KY</td>
        <td>Momma's Last Chance Saloon</td>
        <td>Disaster Piece Theater</td>
        <td><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwi8rJuut7bbAhWHy4MKHfBQB3wQFggqMAA&url=https%3A%2F%2Fwww.facebook.com%2Fpages%2FMommas-Last-Chance-Saloon%2F248697335187297&usg=AOvVaw3w6hCy2yavjJZ2aeG0O_an">website</a></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="spacer"></div>

<div class="mx-auto" style="width: 200px;">
  <h1 class="medium-title">Old Gigs</h1>
</div>
  <div class="table-responsive">
      <table class="table table-hover ">
      <thead>
        <tr>
          <th>Date</th>
          <th>City</th>
          <th>Location</th>
          <th>Event</th>
          <th>Website</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jan 17, 2018</td>
          <td>Lexington, KY</td>
          <td>Manchester Music Hall</td>
          <td>Opening for Saving Abel</td>
          <td><a href="http://detroit.carpediem.cd/events/3819634-dirkschneider-at-the-token-lounge/" >website</a></td>
        </tr>
        <tr>
          <td>March 6, 2018</td>
          <td>Detroit, MI</td>
          <td>The Token Lounge</td>
          <td>Opening for Udo Dirkschneider</td>
          <td><a href="https://www.ticketfly.com/event/1602236-saving-abel-lexington/" >website</a></td>
        </tr>
        <tr>
          <td>April 3, 2018</td>
          <td>Louisville, KY</td>
          <td>Trixies Entertainment Complex</td>
          <td>Opening for Udo Dirkschneider</td>
          <td><a href="http://louisville.carpediem.cd/events/4000865-udo-dirkschneider-elm-street-at-trixies-entertainment-complex/">website</a></td>
        </tr>
        </tbody>
      </table>
  </div>

</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },

methods: {

    modalCall: function(thing){
      console.log(thing);
        this.modal_img = thing;
    }
},
data () {
    return {

        modal_img: '',
        modal_title: '',
    }
  }
}
</script>
<style scoped>
td, th{
  text-align:center;
}
.col{
  margin:auto;
  text-align: center;
}
.modal-img{
  width: 100%;
  margin:auto;
}
.modal-title{
  width: 100%;
  text-align: center;
  font-size: 30px;
  font-weight: bold;
}
.toggle-button{
  font-size: 30px;
  font-weight: bolder;
  font-family: 'Metal Mania', cursive;
  border-style: solid white;
  /*background: url(/public/dark-brushed-bg.jpg);*/
}
.toggle-button:hover{
  color:white;
  background: gray;
}
</style>
