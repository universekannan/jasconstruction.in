<?php
session_start();
$page = "pending_transfer";
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "admin") && ($_SESSION['user_type'] != "Store") && ($_SESSION['user_type'] != "Supervisor")) header("location: index.php");
$user_id=$_SESSION['user_id'];
$msg = "";
$msg_color = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SDA Builder</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
              <?php include"menu.php"?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
<br  />
                </div>
                <!-- /.col-lg-12 -->
				  
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h4>Approval</center></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                <th>Date</th>
                                <th>Equipment Name</th>
                              <th>Project Name</th>
                               <th>Quantity</th>
                               <th>User Name</th>
                                  </tr>
                                </thead>
                                <tbody>
	<?php
	$user_id=$_SESSION['user_id'];
        $sql = "select  a.*,b.assign_project_id,c.equipment_name,d.full_name,e.project_name from supervisor a, assign_project b,equipment c,users d,project e where a.project_id=b.assign_project_id and b.assign_project_user_id=$user_id and a.equ_id=c.id and a.user_id=d.id and a.project_id=e.id and a.status='Approved' and a.project_id='1'";
	                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['equipment_name']; ?></td>
                                <td><?php echo $row['project_name']; ?></td>
                                <td><?php echo $row['qty']; ?></td>
                                <td><?php echo $row['full_name']; ?></td>
                            </tr>
                        <?php

                        }
                        ?>
                        </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
