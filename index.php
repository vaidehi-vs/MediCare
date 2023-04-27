<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Murecho:wght@100;300;400;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700;900&display=swap"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="index1">
      <nav class="navbar">
        <div class="menusection"></div>
        <div class="logosection">
          <div class="logosectionbg"></div>
          <div class="medicure">MediCure</div>
        </div>
        <div class="menubtnsection">
          <div class="buttonsection"></div>
          <button class="home">Home</button
          ><button class="about-us">About Us</button
          ><button class="services">Services</button
          ><button class="getstartedbuttonsection">
            <div class="getstartedbtn"></div>
            <b class="get-started"> Get Started</b>
          </button>
        </div>
      </nav>
      <div class="bannersection">
        <div class="bannersectionbackground"></div>
        <div class="formareasection">
          <div class="formareabg"></div>
          <form class="form" action="#index.php" method="post">
            <div class="inputareabg"></div>
            <input id = "doctor_type"
              class="inputfinddoctor" name="search"
              type="text"
              placeholder="find doctor"
            /><input id="doctor_area"
              class="inputfindarea" name="area"
              type="text"
              placeholder="find area"
            /><button id = "search_btn" class="search" autofocus>
              <img class="search-child" alt="" src="public/ellipse-1.svg" />
              <div class="ok">ok</div>
            </button>
          </form>
          <div class="formareadesc">
            <div class="wellness-for-your">
              Wellness for your Family Wellness for your life.
            </div>
            <div class="have-access-to-container">
              <p class="have-access-to">
                Have Access To A Health Professional Any Time, Any Where...
              </p>
            </div>
            <div class="book-and-appointment">Book and Appointment</div>
          </div>
        </div>
        <img class="imagearea-icon" alt="" src="public/imagearea@2x.png" />
      </div>
      <div id= "searchres" class="servicesection">
        
        <div class="servicesectionbg"></div>
        <div class="find-your-appointment">Find your appointment here</div>
        <button class="consultation">
          <div class="consultations">
            <p class="have-access-to">Consultations</p>
          </div>
          <img
            class="icons8-magnifying-glass-64-5"
            alt=""
            src="public/icons8magnifyingglass64-5@2x.png"
          /></button
        ><button class="getappointment">
          <div class="get-appointment">Get Appointment</div>
          <img
            class="external-appointment-dentist-icon"
            alt=""
            src="public/externalappointmentdentistflatflatandinurabdillah-1@2x.png"
          /></button
        ><button class="searchdoctor">
          <div class="search-doctor">Search Doctor</div>
          <img
            class="icons8-magnifying-glass-64-1"
            alt=""
            src="public/icons8magnifyingglass64-1@2x.png"
          />
        </button>
        
      </div>
      <div class="description">
        <div class="descriptionsection"></div>
        <div class="textarea">
          <div class="textcontextarea"></div>
          <div class="txtboxtitle">
            Best Quality Service with our experienced doctors
          </div>
          <b class="textdescription"
            >With our top doctors, we are able to provide best medical
            servicesabove avaerage. We have highly experienced doctors, so don’t
            worry.</b
          >
          <div class="points">
            <b class="point3">Doctor’s are available 24X7</b
            ><b class="point2"
              ><p class="have-access-to">Consult with our top specialists.</p>
              <p class="have-access-to">&nbsp;</p>
              <p class="p"></p></b
            ><b class="point1"
              ><p class="have-access-to">
                Search your specialist $ online consultation anywhere
              </p>
              <p class="have-access-to"></p>
              <p class="p"></p
            ></b>
          </div>
        </div>
        <img class="imagearea-icon1" alt="" src="public/imagearea1@2x.png" />
      </div>
      

      <div class="email-wwwhackvedain">email: www.hackveda.in</div>
    </div>
  </body>
  <script>
  $(document).ready(
    function(){
      $("#search_btn").click(function(){
        var doctor_type=$("#doctor_type").val();
        var doctor_area=$("#doctor_area").val();

        $.post("connection.php", {search:doctor_type, area:doctor_area}, function(response){
            $("#searchres").html(response);
        });

  });
});
  </script>
</html>
