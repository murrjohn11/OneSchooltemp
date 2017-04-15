<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.4
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>One School - View Grades</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-compact'				- Compact Sidebar Navigation (Only icons)

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Footer options
1. '.footer-fixed'						- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <?php include("header.php")  ?>    
    </header>

    <div class="app-body">
        <?php include("sidebar.php")  ?>
        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Grade Reports</li>
                <!-- <li class="breadcrumb-item"><a href="#">Admin</a>
                </li> -->
                <li class="breadcrumb-item active">View</li>

                <!-- Breadcrumb Menu-->
                <!-- <li class="breadcrumb-menu hidden-md-down">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                        <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                        <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
                    </div>
                </li> -->
            </ol>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                 <i class="icon-doc"></i> Grade 5
                            </div>
                            <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>First Grading</th>
                                                <th>Second Grading</th>
                                                <th>Third Grading</th>
                                                <th>Fourth Grading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php
                                            $idnum = $_GET["id"];
                                            $mysqli = new mysqli("localhost","root","","oneschool");
                                            $table = mysqli_query($mysqli,"SELECT * FROM graderecord WHERE idnum='$idnum' AND gradelevel='Grade 5'");
                                            while($row=mysqli_fetch_array($table)){
                                                echo
                                                    "<tr>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                    </tr>";
                                                }
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                    <!-- <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav> -->
                                </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                 <i class="icon-doc"></i> Grade 6
                            </div>
                            <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>First Grading</th>
                                                <th>Second Grading</th>
                                                <th>Third Grading</th>
                                                <th>Fourth Grading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $idnum = $_GET["id"];
                                            $mysqli = new mysqli("localhost","root","","oneschool");
                                            $table = mysqli_query($mysqli,"SELECT * FROM graderecord WHERE idnum='$idnum' AND gradelevel='Grade 6'");
                                            while($row=mysqli_fetch_array($table)){
                                                echo
                                                    "<tr>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                    </tr>";
                                                }
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                    <!-- <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav> -->
                                </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                 <i class="icon-doc"></i> Grade 7
                            </div>
                            <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>First Grading</th>
                                                <th>Second Grading</th>
                                                <th>Third Grading</th>
                                                <th>Fourth Grading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $idnum = $_GET["id"];
                                            $mysqli = new mysqli("localhost","root","","oneschool");
                                            $table = mysqli_query($mysqli,"SELECT * FROM graderecord WHERE idnum='$idnum' AND gradelevel='Grade 7'");
                                            while($row=mysqli_fetch_array($table)){
                                                echo
                                                    "<tr>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                    </tr>";
                                                }
                                        ?>
                                        
                                        </tbody>
                                    </table>
                                    <!-- <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav> -->
                                </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                 <i class="icon-doc"></i> Grade 8
                            </div>
                            <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>First Grading</th>
                                                <th>Second Grading</th>
                                                <th>Third Grading</th>
                                                <th>Fourth Grading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                                            $idnum = $_GET["id"];
                                            $mysqli = new mysqli("localhost","root","","oneschool");
                                            $table = mysqli_query($mysqli,"SELECT * FROM graderecord WHERE idnum='$idnum' AND gradelevel='Grade 8'");
                                            while($row=mysqli_fetch_array($table)){
                                                echo
                                                    "<tr>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                    </tr>";
                                                }
                                        ?>
                                        
                                        </tbody>
                                    </table>
                                    <!-- <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav> -->
                                </div>
                        </div>
                        
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="viewgrades.php">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="viewgrades.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="viewgrades1.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="viewgrades2.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="viewgrades2.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                    </div>
                </div>
            </div>
            <!-- /.conainer-fluid -->
        </main>

 


    </div>

    <footer class="app-footer">
        <!-- <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.
        <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span> -->
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
     
    <script src="bower_components/pace/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>


     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>





    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>

</body>

</html>