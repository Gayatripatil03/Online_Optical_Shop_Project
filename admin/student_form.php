<?php
require_once"dbconfig.php";
//print_r($_SESSION);
$p="SELECT * FROM ((`student_info` INNER JOIN Subject on student_info.SubjectID=subject.SubjectID)
INNER JOIN life_info on student_info.LifeID=life_info.LifeID) WHERE student_info.Student_info_ID='".$_REQUEST['id']."'";

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Bare - LIFE UNIVERSITY Template</title>
<style>
.underline--dotted {
  border-bottom: 2px Black dashed;
  width:20px;
}
</style>
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php //include"../nav.php";?>

  <!-- Page Content -->
  <div class="container">
  </br></br></br>
    <div class="row">
    <div class="col-lg-3"><img src="../img/logo.jpg" style="height:150px">
	</div>
	<div class="col-lg-6"><h2 style="text-align:center">Scholarship Examination Form</h2></br>
       
	</div><?php
	  
	  $result=select($p);
	  while($r=mysqli_fetch_array($result))
	  {
		  extract($r);
	  ?>
	
	<div class="col-lg-3"><img src="../img/<?=$Image?>" class="w3-border w3-padding"  style="height:150px;width:125px">
	<a title="Print Screen" class="fa fa-print" alt="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;font-size:30px;color:red">
          print</a>
	</div>
	
	
	</div>
    <div class="row">
     
	  
	   <div class="col-lg-1 "></div><div class="col-lg-11">
		<div class="form-row">
    <div class="form-group col-lg-6 ">
      <label style="font-weight:bold;" for="i4">Major Selection-</br>
	  ការជ្រើសរើសដ៏ធំ-

	  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  
      
	  
	  
  <span class="underline underline--dotted"><?=$SubjectName?></span>

	 
	  
    </div>
	
   <div class="form-group col-lg-6 ">
       <label style="font-weight:bold;" for="4">Life University-
	  </br>
	  
សាកលវិទ្យាល័យជីវិត-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
	  
	  <span class="underline underline--dotted"><?=$LName?></span>

	  
	  
	  </div>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="inputEmail4">
Name English-
	  </br>
	  

ឈ្មោះជាភាសាអង់គ្លេស-
	  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <span class="underline underline--dotted"><?=$StudentName?></span>
    </div>
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="inputEmail4">
Name Khmer
	  </br>
	  

ឈ្មោះជាភាសាខ្មែរ-
	  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <span class="underline underline--dotted"><?=$NameKhmer?></span>
    </div>
  
   
    <div class="form-group col-md-4">
      <label style="font-weight:bold;" for="input8">Sex- </br>
រួមភេទ-</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Sex?></span>
   
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="inputEmai0710">Date Of Birth-</br>
ថ្ងៃខែ​ឆ្នាំ​កំណើត-</label>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Dob?></span>  </div>
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="input9">Place Of Birth-</br>
ទី​កន្លែង​កំណើត-</label>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Pob?></span>  
 
      </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="inputEmai001">Nationality-</br>
សញ្ជាតិ-</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Nationality?></span>  
 
	  </div>
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="input901">ID Card Number-
	  </br>
លេខកាតលេខសម្គាល់-</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Id_Card?></span>  
 
      </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="inputEmai0010">Contact Number-</br>
លេខ​ទំនាក់​ទំនង-</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Mobile?></span>
    </div>
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="input90122">Email-</br>
អ៊ីមែល-</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Email?></span>  
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="inputEmai00101">Parent/Gaurdian Name-</br>
ឈ្មោះមាតាឬបិតា / ហ្គោរដិន-</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$ParentName?></span> </div>
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="input901220">Relationship-</br>
ទំនាក់ទំនង-</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Relationship?></span> 
   
     </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="inputEmai001011">Parent Contact Number-</br>
លេខទំនាក់ទំនងឪពុកម្តាយ-</label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$ParentMobile?></span> 
	 </div>
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="input9012202">Address-</br>អាសយដ្ឋាន-</label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Address?></span> 
	    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="inputEmai001011">High School</br>
វិទ្យាល័យ-</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$HighSchool?></span> 
	</div>
    <div class="form-group col-md-6">
      <label style="font-weight:bold;" for="input9012202">Province</br>ខេត្ត-</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span class="underline underline--dotted"><?=$Province?></span> 
	   </div>
  </div>
  
  
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input"  Checked name="last" type="checkbox" id="gridCheck">
      <label style="font-weight:bold;" class="form-check-label" for="gridCheck">
       Hereby, I Sincerely Claim To The Best Of My Knowledge That The Information Provided Above Is True Complete. I shall Be Liable in The Presence Of The Law For Any False Information.</br>
	   ដោយហេតុនេះហើយខ្ញុំសូមអះអាងយ៉ាងស្មោះត្រង់ចំពោះចំណេះដឹងរបស់ខ្ញុំដែលព័ត៌មានដែលបានផ្តល់ឱ្យខាងលើនេះគឺជាការពិត។ ខ្ញុំនឹងក្លាយជាអ្នកទទួលខុសត្រូវក្នុងវត្តមាននៃច្បាប់សម្រាប់ព័ត៌មានមិនពិត។
      </label>
    </div>
  </div>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php
	  }
	?>
	
	



		
      </div>
    </div>
    </div>
  


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script>
 
  </script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
