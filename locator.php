<?php    
$title="SEVA Maruti Suzuki Service Center in Nashik, Nagpur | Nanded, Wardha, Dhule, Nandurbar";	
?>
<?php 
 $pgDesc="Visit SEVA Automotive's Maruti Suzuki Service Center in Nashik, Nagpur, Dhule, Nanded, Wardha, Nandurbar for the best Maruti Suzuki Car Services and Repairs";
 $pgKeywords="Maruti Suzuki, Car Price list, Maruti Suzuki Insurance, Maruti Service Center, Maruti Suzuki Finance, services, service center, car service, maruti suzuki service center, maruti service center, servicenow, mechanic near me, car service near me, car mechanic near me, car repair, car garage near me, car service center near me, maruti service center near me, maruti service, car service center, maruti suzuki service, Accident repair, wardha, nanded, dhule, nandurbar";
 include 'header.php'; 
?>

<section class="page-title  v3 clearfix parallax  parallax5" style="background-position: 50% -136px;background-image: url(assets/images/icon/services-banner.png);">
  <div class="overlay"></div>
  <div class="container">
    <div class="wrap-page-title">
      <div class="breakcrums text-center v2">
        <ul>
          <li><a href="index.php" class="hover-text">Home &nbsp;&nbsp; : : </a></li>
          <li><a href="our-presence-workshop.php" class="hover-text">Locator &nbsp;&nbsp; </a></li>
        </ul>
      </div>
      <div class="page-title-heading text-center v2">
        <h1><a href="#" class="hover-text">Locator </a></h1>
      </div>
    </div>
  </div>
</section>
<main>
  <section class="feature-car mt-5 mb-5">

  <div class="container our-workshops mb-5">
    <div class="row">
      <div class="col-md-12">
          <div id="map" class="mb-5"></div>
          <div class="mb-5"></div>
      </div>
    
    </div>
  </div>  
    </section>
   
</main>
<script src="assets/js/jquery1.12.0-min.js"></script>
<script type="text/javascript">

   function initMap() {

      const ambad            = { lat: 19.944473, lng: 73.7428839};
      const vilholi          = { lat: 19.911251, lng: 73.71834, };
      const masrul           = { lat: 20.045889, lng: 73.81204 };
      const satpur           = { lat: 19.998689898719487, lng: 73.74672265607617 };
      const yeola            = { lat: 20.050237939140658, lng: 74.48080803439238 };
      const hingna_road      = { lat: 21.120468619073954, lng: 79.1047039361768  };
      const manewada         = { lat: 21.121263664108536, lng: 79.10567262963397 };
      const amravati_road    = { lat: 21.15280825553144,  lng: 79.02117533557893 };
      const gopuri_chauck    = { lat: 20.756168494954437, lng: 78.61948411044045 };
      const hinghan_ghat     = { lat: 20.570191778350566, lng: 78.87770986773059 };
      const nanded           = { lat:19.15833866694842,  lng: 77.32111800419591 };
      const dhule            = { lat:20.855596049366127, lng:74.76485897968627 };
      const nandurbar        = { lat:21.387764101035593, lng:74.25008083068897};
      // The map, centered at ambad
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 7,
        center: yeola,
      });
       /*****************************/ 
       const nandurbar_marker = new google.maps.Marker({
        position: nandurbar,
        map: map,
        title: "Click to zoom",
      });
      
      const nandurbar_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/nandurbar.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:blue;'>Showroom</span> | <span style='color:red;'>Workshop</span><br/><strong>Nandurbar</strong><br/>43, Korit Rd, <br/>Darmaraj Nagar,<br/>Nandurbar, <br/>Maharashtra 425412</p></div>";
      const nandurbar_infowindow = new google.maps.InfoWindow({
      content: nandurbar_contentString,
      });
      
      nandurbar_marker.addListener("mouseover", () => {
        /*map.setZoom(9);
        map.setCenter(ambad_marker.getPosition());*/
        nandurbar_infowindow.open(map, nandurbar_marker);
      });

      nandurbar_marker.addListener("mouseout", () => {
        nandurbar_infowindow.close(map, nandurbar_marker);
      });

      /*****************************/

      // The marker, positioned at ambad
       const dhule_marker = new google.maps.Marker({
        position: dhule,
        map: map,
        title: "Click to zoom",
      });
      
      const dhule_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/dhule.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:blue;'>Showroom</span> | <span style='color:red;'>Workshop</span><br/><strong>Dhule</strong><br/>Gat No. 90/B <br/>National Highway 3,<br/> Dhule Moghan Rd, <br/>opp. Sushil Petrol Pump, <br/>MIDC Avdhan, <br/>Dhule, <br/>Maharashtra 424006</p></div>";
      const dhule_infowindow = new google.maps.InfoWindow({
      content: dhule_contentString,
      });
      
      dhule_marker.addListener("mouseover", () => {
        /*map.setZoom(9);
        map.setCenter(ambad_marker.getPosition());*/
        dhule_infowindow.open(map, dhule_marker);
      });

      dhule_marker.addListener("mouseout", () => {
        dhule_infowindow.close(map, dhule_marker);
      });

      /*****************************/
       const nanded_marker = new google.maps.Marker({
        position: nanded,
        map: map,
        title: "Click to zoom",
      });
      
      const nanded_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/nanded.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:blue;'>Showroom</span> | <span style='color:red;'>Workshop</span><br/><strong>Nanded</strong><br/>Nanded-Hyderabad Road,<br/>Bafna Square Nanded, <br/>Maharashtra 431604</p></div>";
      const nanded_infowindow = new google.maps.InfoWindow({
      content: nanded_contentString,
      });
      
      nanded_marker.addListener("mouseover", () => {
        /*map.setZoom(9);
        map.setCenter(ambad_marker.getPosition());*/
        nanded_infowindow.open(map, nanded_marker);
      });

      nanded_marker.addListener("mouseout", () => {
        nanded_infowindow.close(map, nanded_marker);
      });

      /*-----------------Ambad marker---------------*/
      const ambad_marker = new google.maps.Marker({
        position: ambad,
        map: map,
        title: "Click to zoom",
      });
      
      const ambad_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/workshop/ambad-workshop.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:blue;'>Showroom</span> | <span style='color:red;'>Workshop</span><br/><strong>Ambad</strong><br/> X-46, MIDC Ambad, <br/> Nashik,<br/> Maharashtra 422010</p></div>";
      const ambad_infowindow = new google.maps.InfoWindow({
      content: ambad_contentString,
      });
      
      ambad_marker.addListener("mouseover", () => {
        /*map.setZoom(9);
        map.setCenter(ambad_marker.getPosition());*/
        ambad_infowindow.open(map, ambad_marker);
      });

      ambad_marker.addListener("mouseout", () => {
        ambad_infowindow.close(map, ambad_marker);
      });
      /*-----------------vilohi_marker---------------*/

      const vilohi_marker = new google.maps.Marker({
        position: vilholi,
        map: map,
        title: "Click to zoom",
      });

      const vilohi_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/workshop/vilholi-workshop.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:red;'>Workshop</span><br/><strong>Vilholi</strong><br/> 82/2, Ambebahula, <br/>Road, Pathardi Shivar, <br/>Vilholi,Maharashtra 422010</p></div>";
      const vilohi_infowindow = new google.maps.InfoWindow({
      content: vilohi_contentString,
      });
      
      vilohi_marker.addListener("mouseover", () => {
        /*map.setZoom(9);
        map.setCenter(vilohi_marker.getPosition());*/
        vilohi_infowindow.open(map, vilohi_marker);
      });

      vilohi_marker.addListener("mouseout", () => {
        vilohi_infowindow.close(map, vilohi_marker);
      });

      /*------------------Mhasrul-------------------*/

      const masrul_marker = new google.maps.Marker({
        position: masrul,
        map: map,
        title: "Click to zoom",
      });

       const masrul_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/workshop/mhasrul-workshop.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:red;'>Workshop</span><br/><strong>Mhasrul</strong><br/>Plot No. 241, 2, Dindori Rd, <br/>opp. NMC School, <br/>Vaiduwadi, Mhasrul Gaon <br/> Nashik, Maharashtra 422004</p></div>";
      const masrul_infowindow = new google.maps.InfoWindow({
      content: masrul_contentString,
      });
      
      masrul_marker.addListener("mouseover", () => {
      /*  map.setZoom(9);
        map.setCenter(masrul_marker.getPosition());*/
        masrul_infowindow.open(map, masrul_marker);
      });
      
       masrul_marker.addListener("mouseout", () => {
        masrul_infowindow.close(map, masrul_marker);
      });

       /*---------------------------------------------------*/
      
      const satpur_marker = new google.maps.Marker({
        position: satpur,
        map: map,
        title: "Click to zoom",
      });

       const satpur_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/workshop/satpur-workshop.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:red;'>Workshop</span><br/><strong>Satpur</strong><br/>B69/70, Satpur MIDC Main Rd,<br/> NICE Area, MIDC,<br/> Satpur Colony <br/>Nashik, Maharashtra 422007</p></div>";
      const satpur_infowindow = new google.maps.InfoWindow({
      content: satpur_contentString,
      });
      
      satpur_marker.addListener("mouseover", () => {
        satpur_infowindow.open(map, satpur_marker);
      });

  
      satpur_marker.addListener("mouseout", () => {
        satpur_infowindow.close(map, satpur_marker);
      });

       /*---------------------------------------------------*/


      const yeola_marker = new google.maps.Marker({
        position: yeola,
        map: map,
        title: "Click to zoom",
      }); 

      const yeola_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/workshop/yeola-workshop.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:red;'>Workshop</span><br/><strong>Yeola</strong><br/> Shop No. B5 to B7, <br/> & B8 Arihant Commercial <br/> Complex  Infront of <br/>Sahara Hotel, <br/> Near APMC Market, <br/> Yeola Manmad Road, <br/>Maharashtra 423401</p></div>";
      const yeola_infowindow = new google.maps.InfoWindow({
      content: yeola_contentString,
      });
      
      yeola_marker.addListener("mouseover", () => {
        yeola_infowindow.open(map, yeola_marker);
      });

       yeola_marker.addListener("mouseout", () => {
        yeola_infowindow.close(map, yeola_marker);
      });


       /*---------------------------------------------------*/


      const hingna_road_marker = new google.maps.Marker({
        position: hingna_road,
        map: map,
        title: "Click to zoom",
      }); 

      const hingna_road_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/workshop/manewada-workshop.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:red;'>Workshop</span><br/><strong>Manewada </strong><br/>Seva Height, <br/>Plot No.5/12/13A/13B, <br/>Near South Point School <br/>Manewada Road,<br/>Nagpur, <br/>Maharashtra 440027</p></div>";
      const hingna_road_infowindow = new google.maps.InfoWindow({
      content: hingna_road_contentString,
      });
      
      hingna_road_marker.addListener("mouseover", () => {
        hingna_road_infowindow.open(map, hingna_road_marker);
      });

       hingna_road_marker.addListener("mouseout", () => {
        hingna_road_infowindow.close(map, hingna_road_marker);
      });

      /*---------------------------------------------------*/


      const manewada_marker = new google.maps.Marker({
        position: manewada,
        map: map,

        title: "Click to zoom",
      });

       const manewada_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/workshop/manewada-workshop.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:red;'>Workshop</span><br/><strong>Manewada </strong><br/>Seva Height, <br/>Plot No.5/12/13A/13B, <br/>Near South Point School <br/>Manewada Road,<br/>Nagpur, <br/>Maharashtra 440027</p></div>";
      const manewada_infowindow = new google.maps.InfoWindow({
      content: manewada_contentString,
      });
      
      manewada_marker.addListener("mouseover", () => {
        manewada_infowindow.open(map, manewada_marker);
      });

       manewada_marker.addListener("mouseout", () => {
        manewada_infowindow.close(map, manewada_marker);
      });



       /*---------------------------------------------------*/
 
      const amravati_road_marker = new google.maps.Marker({
        position: amravati_road,
        map: map,
        title: "Click to zoom",
      });

      const amravati_road_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/nagpur.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:blue;'>Showroom</span> | <span style='color:red;'>workshop </span><br/><strong>Nagpur  </strong><br/> Plot No. 34/3 <br/>Amravati Road Kachimet, <br>Amravati Rd, <br/>Wadi Nagpur, <br/>Maharashtra 440023</p></div>";
      const amravati_road_infowindow = new google.maps.InfoWindow({
      content: amravati_road_contentString,
      });
      
      amravati_road_marker.addListener("mouseover", () => {
        amravati_road_infowindow.open(map, amravati_road_marker);
      });

        manewada_marker.addListener("mouseout", () => {
        manewada_infowindow.close(map, manewada_marker);
      });



      /*---------------------GAURIPURA CHAUK---------------------*/
      const gopuri_chauck_marker = new google.maps.Marker({
        position: gopuri_chauck,
        map: map,
        title: "Click to zoom",
      });
      
      const gopuri_chauck_contentString ='<div id="bodyContent"">' +
      "<img  src='assets/images/workshop/wardha-workshop.jpg' height='100 width='100'>"+
      "<p><br/><strong>SEVA Automotive Pvt.Ltd</strong><br/> <span style='color:blue;'>Showroom</span> | <span style='color:red;'>Workshop</span><br/><strong>Gopuri Chowk</strong><br/>Gopuri Chowk Nagpur Road,<br/> Nalwadi Wardha,<br/> Maharashtra 442001</p></div>";
      const gopuri_chauck_infowindow = new google.maps.InfoWindow({
      content: gopuri_chauck_contentString,
      });
      
      gopuri_chauck_marker.addListener("mouseover", () => {
        map.setZoom(9);
        map.setCenter(gopuri_chauck_marker.getPosition());
        gopuri_chauck_infowindow.open(map, gopuri_chauck_marker);
      });

      
        gopuri_chauck_marker.addListener("mouseout", () => {
        gopuri_chauck_infowindow.close(map, gopuri_chauck_marker);
      });



     

}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm2WEkNxEQTvrl2wWwXu6YCklHFmoBLx0&callback=initMap&libraries=&v=weekly"
      async></script>
<style type="text/css">
  #map {
  height: 400px;
  width: 100%;
  }
</style>     
<?php  
require_once('footer.php');
?>
