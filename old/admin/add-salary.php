<?php
session_start();
include "timeout.php";
include "config.php";
if (($_SESSION['user_type'] != "admin")&&($_SESSION['user_type'] != "Staff")) header("location: index.php");
$msg = "";
$msg_color = "";
$user_id=$_SESSION['user_id'];
$id=$_GET['id'];	
$date=date("Y-m-d");
$project_id = "";
$hours = "";
$amount = "";
$payed = "";
$balance = "";
$states = "Salary";

if (isset($_POST['submit'])) {

    $project_id = trim($_POST['project_id']);
    $hours = trim($_POST['hours']);
    $amount = trim($_POST['amount']);
    $payed = trim($_POST['payed']);
    $balance = trim($_POST['balance']);
    $date = trim($_POST['date']);


        $stmt = $conn->prepare("INSERT INTO salary (project_id,hours,amount,payed,balance,date,user_id,staff_id,states) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssss", $project_id,$hours,$amount,$payed,$balance,$date,$user_id,$staff_id=$id,$states);
        $stmt->execute() or die($stmt->error);
        $id=$stmt->insert_id;

        header("location: users.php");
}
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

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row"><br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h4><b>Add Amount</h4></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                   <form method="post" action="" name="submit" enctype="multipart/form-data">
											<div class="form-group">
                                                <label>Date</label>
                                                <input value="<?php echo $date; ?>" class="form-control" name="date" type="date" id="date">
                                            </div>
											
											 <div class="form-group">
                                            <label for="project_id required"
                                                   class="control-label required">Project Name</label>
                                            <select name="project_id" class="form-control" required="required" >
                                                <option value="">Select Project Name</option>
                                                <?php
                                                $sql2 = "select * from project";
                                                $result2 = mysqli_query($conn, $sql2);
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                    ?>
                                                    <option value="<?php echo $row2['id']; ?>" ><?php echo $row2['project_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
											
                                            <div class="form-group">
                                                <label>Hours</label>
                                                <input value="<?php echo $hours; ?>" class="form-control" name="hours" type="text" id="hours">
                                            </div>
										<?php
                            $sql = "select * from users where id=$id";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                            <div class="form-group">
                                                <label>Salary</label>			
                                                <input value="<?php echo $row['salary']; ?>" class="form-control" name="amount" type="text" id="amount">
                                            </div>
											<?php }?>
											<div class="form-group">
                                                <label>Give Amount</label>
                                                <input required="required" onkeypress="return runScript2(event)" onkeyup="calculate_amount()" value="<?php echo $payed; ?>" class="form-control" name="payed" type="text" id="payed">
                                            </div>
											<div class="form-group">
                                                <label>Balance</label>
                                                <input onkeyup="calculate_balance();" value="<?php echo $balance; ?>" class="form-control" name="balance" type="text" id="balance">
                                            </div>

                                </div>
                                <div class="col-md-12 text-center">
                                    <input required="required" class="btn btn-info"
                                           type="submit"
                                           name="submit" value="Save"/>
                                    <a href="project.php" class="btn btn-info">Back</a>
                                </div>
                                        
                                    </form>

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
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

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	<script>
      function runScript(e) {
    if (e.keyCode == 13) {
        $("input[name='payed']").focus();
    }
    }

    function runScript2(e) {
    if (e.keyCode == 13) {
        var payed = ~~parseInt($('#payed').val());
        var amount= ~~parseInt($('#amount').val());
		var old_balance= ~~parseInt($('#old_balance').val());
        var balance=old_balance+amount-payed;
        if(amount>0){
            add_row();
        }
    }
    }



     function  calculate_amount() {
        var payed = ~~parseInt($('#payed').val());
        var amount= ~~parseInt($('#amount').val());
		var old_balance= ~~parseInt($('#old_balance').val());
        var balance=old_balance+amount-payed;
        $('#balance').val(balance);
    }

    function  calculate_balance() {
        var balance = ~~parseInt($('#balance').val());
        var balance=0;
        var amount = $('input[name="amount[]"]');
		var old_balance = $('input[name="old_balance[]"]');
        for(var j=0;j<i;j++){
            balance=balance+parseInt(amount.eq(j)+ old_balance.eq(j).val());
        }
        balance=old_balance+amount-payed;
        $('#balance').val(balance);
    }


</script>
</body>

</html>
