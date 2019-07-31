<?php
include("php/dbconnect.php");
include("php/checklogin.php");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beoogo NEERE</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>
<?php
include("php/acueil.php");
?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Statistiques</h1>
                        <h2 style="text-align:center;"><strong> Bienvenue sur notre plateforme</strong> </h2>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
				
				  
				
                <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="activite.php">
                                <i class="fa fa-users fa-2x" >  <i></i></i>
                               
                                <h5>Utilisateurs</h5>
                            <h2>
                                <?php 
                            
                                $GetAllIncomeOverall    = "SELECT count(username)  FROM user" ;
                                $GetAIncomeOverall      = $conn->query($GetAllIncomeOverall);
                                $IncomeColOverall       = mysqli_fetch_assoc($GetAIncomeOverall);
                                $IncomeOverall          = $IncomeColOverall['count(username)'];

                                echo $IncomeOverall; ?>
                            </h2>
                            </a>
                        </div>
                    </div>


				
				
                   
					
                  
                  

                </div>
                <!-- /. ROW  -->

             
                
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
       Beoogo NEERE| Copyright ESI/IS2019
    </div>
   
   <script src="js/jquery-1.10.2.js"></script>	
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>
    


</body>
</html>
