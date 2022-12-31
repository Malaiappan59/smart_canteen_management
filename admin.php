<?php
session_start();
include 'config.php';

//session_start();
if(!isset($_SESSION['userid'])){ 
header ("Location: login.php"); 
    //session_start();
exit;
}
// if(!isset($_SERVER['HTTP_REFERER'])){
//      header("location: login.php");
//      exit;
//  }


?>
 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <title>Admin</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<style type="text/css">

  ::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

   ::-webkit-scrollbar
{
    width: 4px;
    background-color: #F5F5F5;
}

  ::-webkit-scrollbar-thumb
{
    background-color: #000000;
}
</style>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" >
            <div class="sidebar-header" >
                <h3>Kcet Canteen</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#" onclick="document.getElementById('theFrame').src='add_credits.php';">Add Credits</a>
                </li>
                <li >
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Items</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#" onclick="document.getElementById('theFrame').src='add_items.php';">Add Items</a>
                        </li>
                        <li>
                            <a href="#" onclick="document.getElementById('theFrame').src='update_items.php';">Update Items</a>
                        </li>
                        <li>
                            <a href="#" onclick="document.getElementById('theFrame').src='remove_items.php';">Remove Items</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Users</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#" onclick="document.getElementById('theFrame').src='add_users.php';">Add Users</a>
                        </li>
                        <li>
                            <a href="#" onclick="document.getElementById('theFrame').src='remove_users.php';">Remove Users</a>
                        </li>
                    <!--     <li>
                            <a href="#">Page 3</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="#" onclick="document.getElementById('theFrame').src='include_food.php';">Include Food</a>
                </li>
                    <li>
                    <a href="#" onclick="document.getElementById('theFrame').src='status.php';">Order History</a>
                </li>
                <li>
                    <a href="#" onclick="document.getElementById('theFrame').src='review.php';">Review Management</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs" >
                <li>
                    <a href="#" class="article"><?php echo $_SESSION["userid"] ;?></a>
                </li>
                <li>
                    <a href="login.php" onclick="<?php session_destroy();?>" class="article">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="#" onclick="document.getElementById('theFrame').src='add_credits.php';">Recharge</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="document.getElementById('theFrame').src='add_items.php';">Item</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="document.getElementById('theFrame').src='review.php';">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="login.php" onclick="<?php session_destroy();?>">Logout</a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </nav>

            
         
     <iframe name = "main"     id="theFrame"  src="add_credits.php" style="background:ghostwhite ;height: 100vh;border: none;overflow: hidden;align-content: center;justify-content: center;align-items: center;display: flex;" width="100%"  >

       </iframe>

       
               
            

    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        document.getElementById('theFrame').contentWindow.location.reload();
    </script>
    <script type="text/javascript">
       $("*").keypress(function(e)
{
if (e.keyCode == 116) {
     e.preventDefault();
  }

}); 


    </script>


</body>

</html>

