
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  <title>MediCure</title>
</head>
<body>

    
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
 
  <?php

$usernm='root';
$pass='';
$dbnm='testdb';

$con = new mysqli('localhost',$usernm,$pass,$dbnm) or die("Couldn't connect ");

$doctor_data=" ";
$area=$_POST['area'];
$search=$_POST['search'];

$sql="SELECT `ID`, `DoctorName`, `DoctorInformation`, `DoctorArea`, `DoctorImage` FROM `doctors` where DoctorArea like'%".$area."%' and DoctorInformation like '%".$search."%'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    
 
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {  
     // $data =  '<div class="find-your-appointment">Doctors found in your area</div>';
     
    $doctorid=$row["ID"];
    $doctorname=$row["DoctorName"];
    $doctorinfo=$row["DoctorInformation"];
    $doctorimg=$row["DoctorImage"];
    $doctorarea=$row["DoctorArea"];
     $doctor_data=$doctor_data.'<div class="find-your-appointment">Doctors found in your area</div><div id= "searchres" class="servicesection">
    <div class="servicesectionbg"></div>
       
        <button class="consultation">
          <div class="consultations">
            <p class="have-access-to">"'.$doctorname.'"</p>
          </div>
          <div class="consultations">
            <p class="have-access-to">'.$doctorinfo.','.$doctorarea.'</p>
          </div>
          <img
            class="icons8-magnifying-glass-64-5"
            alt=""
            src="'.$doctorimg.'"
          /></button
        >';


    }
  } else {
    $data =  '<div class="find-your-appointment">No doctors found in your area</div>';
    echo "0 results";
  }
  $data= $data.$doctor_data;
  echo $data;
  mysqli_close($con);
?>
 </div> 
      </div>
      
  </div>


  

  

</body>
</html>