<?php   
	require_once ('config.php');
	require ('session.php');
  // require ('css/header.php');
	$dates = date("d-m-Y");
  
	if(isset( $_SESSION['login_user'])){
		$id = $_SESSION['login_user'];
		
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 05:59:00 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | Dashboard</title>
  <link rel="stylesheet" type="text/css" href="lend.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>

  <!-- <div>
  	<h3><img src="./assets//debt.png" alt="" srcset="" class="logo"><span class="brand-name">Gbese</span> </h3>
  	<p>Do you want to lend someone money? <a href="lend.php">Click here!</a></p>
  </div>
  <div> -->
    <div style="float: left;">
      <h3 style="color: white;">Hello <?php echo $id; ?></h3>
    </div>
    <div style="float: right;">
      <h3><a href="logout.php" style="color: white;"><i class="fa fa-sign-out"></i>Log out</a></h3>
    </div>
    <div>
      <br><br>
      <h3>Do you want to lend someone money? <a href="lend.php">CLICK HERE</a></h3>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>List of transactions</h5>

                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                        
  	<table class="table table-striped table-bordered table-hover dataTables-example" >
      <thead>
          <tr>
              <th>ID</th>
              <th>Lender</th>
              <th>Borrower's Name</th>
              <th>Borrower's Email</th>
              <th>Borrower's Number</th>
              <th>Amount</th>
              <th>Date Lent</th>
              <th>Return Date</th>
              <th>Address</th>
              <th>Suretee's Name</th>
              <th>Suretee's Address</th>
              <th>Suretee's Phone</th>
              <th>Delete</th>
              <th>Reminder</th>
          </tr>
     </thead>
      <tbody>
      	<?php
              $getList = "SELECT * FROM gbesetable where lender = '$id'";
              $result = mysqli_query($conn,$getList);
              $counts = mysqli_num_rows($result);
              if($counts > 0){
                  while($row = $result->fetch_assoc()) {

                  
          ?>              
              <tr>
                 <td><?php echo $row['id']?></td>
                 <td><?php echo $row['lender']?></td>
                 <td><?php echo $row['g_name']?></td>
                 <td><?php echo $row['g_email']?></td>
                 <td><?php echo $row['g_phone']?></td>
                 <td><?php echo $row['g_amount']?></td>
                 <td><?php echo $row['g_date'];?></td>
                 <td><?php echo $row['g_returnDate']?></td>
                 <td><?php echo $row['address']?></td>
                 <td><?php echo $row['suretee_name']?></td>
                 <td><?php echo $row['suretee_address']?></td>
                 <td><?php echo $row['suretee_phone']?></td>
                 <td><center><button onclick="deleteME(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i></button></center></td>	
                 <td><?php

                 	$returnDate = strtotime($row['g_returnDate']);
                 	$today = strtotime(date("Y-m-d"));
                  // echo "$today";
                 	if ($returnDate > $today) {
                 		$remainder = $returnDate - $today;
                 		$rem = date('j',$remainder);
                    $years = floor($rem/ (365*60*60*24));
                    $months = floor(($rem - $years * 365*60*60*24) / (30*60*60*24));
                 		printf("%d years, %d months, %d days\n", $years, $months, $rem);
                    // echo "$rem";
                 	} else {
                 		echo "Due";
                 	}
                 	

                  // 	$retDate = strtotime($row['g_returnDate']);
                 	// 	$dd = strtotime(Date("dmY"));
                  // 	$today = strtotime($dates);

                 	// 	if ($retDate > $today) { 
                 	// 		$rem = $retDate - $dd;
                 	// 		$zz = date("j", $rem);
                  // 		echo  $zz . "day(s) remaining" ;
                		// } else {
                 	// 		echo "Due";
                 	// 	}
                		
                  ?></td>	
              </tr>
       	
              <script type="text/javascript">
                  function deleteME(delId) {
                      if (confirm("Do you want to delete??")) {
                          window.location.href='delete.php?del_id=' +delId+ '';
                          return true;
                      }
                  }
              </script>
              <?php
              	// function reminder(){
              	//   	if ($dates == $row['g_returnDate']) {
              	// 		$message = "It's time for the borrower to pay up";
              	// 		echo "<script type='text/javascript'> alert('$message'); </script>";
           		  //  	} else {
              	// 		echo "dkjdsdj";
              	// 	}
              	// }  
              	
              	
              ?>

               <script type="text/javascript">
              	var date = new Date().getDay() +'-'+ new Date().getMonth()+'-'+ new Date().getFullYear()
              	var dates = new Date().getDay() +'-'+ new Date().getMonth()+'-'+ new Date().getFullYear();

              	function reminder() {
              		if (date == dates) {
              			alert("It's time, pay up");
              		} else {
              			alert('sdkasjd');
              		}
              	}
              </script>
             
          <?php 
          }
          }else{
              echo "No data";
          } 

          ?>

              </tbody>
      </table>
      <p><b> 
      	<!-- <script type="text/javascript">
  			document.write(new Date().getDay() +'-'+ new Date().getMonth()+'-'+ new Date().getFullYear());
  		</script> -->
  		</b>
  	</p>
  </div>
  
</body>
</html>
<?php 
	// require ('css/footer.php'); 
} 
 //session_destroy();
?>