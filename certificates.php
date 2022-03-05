<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Manage Application Form | Leaving Certificate</title>
  
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
  
    <div class="wrapper-pro">
      <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
       
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Application Form</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->

            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Certificate Details</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div id="exampl">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                <!--     <center> <img src="img/bg-img/point.png"></center> -->
                                        <h5 align="center">Certificate of Leaving</h5>
                                         <h5 align="center">GOVERMENT POLYTECHNIC AWASARI</h5>
                                         <h5 align="center">Awasari(khurd) , Tal- Ambegaon, Dist -pune:- 412405</h4>
                                         <h5 align="center">PHONE No.-02133-225801</h5>
                                            <h5 align="center">E-mail-gpawasari@gmail.com  Website:-wwww.gpawasari.ac.in</h5>
                                             <h5 align="center"></h5>
                                        <h4 align="center">LEAVING CERTIFICATE</h4>
                                         <p align="left">No  changes is any entry in this Certificate shall be made expect by the authority issueing it and any infringement of this requirement is liable to invlove to invoice the impostion penely. such as that of rustication.</p>
                                       
<?php
$vid=$_GET['viewid'];
$sql="SELECT tblapplication.*,tbluser.FirstName,tbluser.LastName,tbluser.MobileNumber,tbluser.Address from  tblapplication join  tbluser on tblapplication.UserID=tbluser.ID where tblapplication.ID=:vid and  tblapplication.Status='Verified'";
$query = $dbh -> prepare($sql);
$query-> bindParam(':vid', $vid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $row)
{   
$certgendate=$row->UpdationDate;            ?>
<table border="1" class="table table-bordered">


<tr align="center">
<td colspan="4" >
<strong> Application Number:</strong>   <?php  echo $row->ApplicationID;?></td></tr>

<th scope>Enroll No.</th>
    <td><?php  echo $row->MobileNumber;?></td>  
  </tr>
    <th scope>Name of Student</th>
    <td><?php  echo $row->FullName;?></td>  
  </tr>
   <tr>
    <th scope>Mother Name</th>
    <td><?php  echo $row->NameofFather;?></td>
  </tr>
   <th scope> Race and Cast</th>
    <td><?php  echo $row->Email;?></td>
  </tr>
  <th scope>Nationality</th>
    <td><?php  echo $row->Gender;?></td>
   </tr>
   <th scope>Place of Birth</th>
    <td><?php  echo $row->PlaceofBirth;?></td>
</tr>
<th scope>Date of Birth</th>
    <td><?php  echo $row->DateofBirth;?></td>
</tr>

    <th scope>Date of Admission</th>
    <td><?php  echo $row->PermanentAdd;?></td>
  </tr>
  <th scope>Progress</th>
    <td><?php  echo $row->Remark;?></td>
</tr>
 <th scope>Conduct</th>
    <td><?php  echo $row->Remark;?></td>
</tr>
<th scope>Date of Leaving institute</th>
    <td><?php  echo $row->Dateofapply;?></td>
    <tr>
   <th scope>class in which studying</th>
    <td><?php  echo $row->mobnumber;?>IT(Infomation Technology)</td>
  </tr>
  <th scope>Reason for Leaving institute</th>
    <td><?php  echo $row->PostalAdd;?></td>
   <tr>
   <th scope>Remarks</th>
    <td><?php  echo $row->Add;?>_ _ _ _ _</td>
   <tr>
   
   <?php }?>
</table>
          <p align="left"><b>Certified that above infromation is in accordence with institutional Register.. Date/Time :</b> <?php echo htmlentities($certgendate);?></p>
           <p align="left"><b>Date :</b>
           <p align="left"><b>Place :</b>  
        <h5>    <p align="right"><b>principal</b> </h5>
          <h5>   <p align="right"><b>Goverment Polytechnic Awasari(kh)</b> <h5>

          <p> <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i></p>                          
      </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
  
   
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
  <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>

</body>

</html><?php }  ?>
