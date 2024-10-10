<?php
error_reporting(0);

 include("fdr/modules/pdo_db_connect.php");

session_start();
if(!empty($_GET['token'])){
    $_SESSION['project'] = $_GET['token']/5678765434567;
    $_SESSION['project_id'] = $_GET['token']/5678765434567;
    
}

$_SESSION['contractor'] = 1;

function read_client_name(){
	global $pdo;
	session_start();

	$project = $_SESSION['project'];

	$select = $pdo -> prepare("SELECT * FROM ongoing_projects WHERE id = :pid ");
	$select -> bindParam(':pid',$project);
	$select -> execute();
	$row = $select -> fetch(PDO::FETCH_ASSOC);
	$client_id = $row['client_id'];

	$get_client_name = $pdo -> prepare("SELECT * FROM clients WHERE id = :id ");
	$get_client_name -> bindParam(':id',$client_id);
	$get_client_name -> execute();

	$get_client_name_row = $get_client_name -> fetch(PDO::FETCH_ASSOC);

	$full_name = $get_client_name_row['firstname']." ".$get_client_name_row['lastname']." ".$get_client_name_row['surname'];

	return $full_name;

}

function read_plot_number(){
	global $pdo;

	session_start();
	$project = $_SESSION['project'];
	//$project = 6;
	$plot = $pdo -> prepare("SELECT * FROM site_property_status  WHERE project_id = :pid ");
	$plot -> bindParam(':pid',$project);
	$plot -> execute();

	$plot_row = $plot -> fetch(PDO::FETCH_ASSOC);

	$plot_no = $plot_row['plot_no_db'];

	return $plot_no;
}

function get_dev_type(){
	global $pdo;

	session_start();
	$project = $_SESSION['project'];
	//$project = 6;
	$select = $pdo -> prepare("SELECT * FROM project_computation WHERE project_id = :pid ");
	$select -> bindParam(':pid',$project);
	$select -> execute();
	$row = $select -> fetch(PDO::FETCH_ASSOC);

	$dev_type = $row['floors']." Storey ".$row['dev_type'];

	return $dev_type;

}

function create_table_dayworks(){
	global $pdo;
	$stmt = "CREATE TABLE IF NOT EXISTS dayworks(
				id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
				project_id INT NOT NULL,
				labour VARCHAR(100) NOT NULL,
				material VARCHAR(100) NOT NULL,
				plant VARCHAR(100) NOT NULL

			)";
	try {
		$stmt -> execute();
		echo "table created";
	} catch (Exception $e) {
		echo $e -> getMessage();
	}
}//create_table_dayworks();



function labour_dayworks(){
	global $pdo;
	session_start();

	$select = $pdo -> prepare("SELECT * FROM dayworks WHERE project_id = :pid ");
	$select -> bindParam(':pid',$_SESSION['project']);
	$select -> execute();
	$row_s = $select -> fetch(PDO::FETCH_ASSOC);

	if($select -> rowCount() == 0){
		$value = 0;
		$create = $pdo -> prepare("INSERT INTO dayworks (project_id,labour,material,plant) VALUES (:pid,:l,:m,:p) ");
		$create -> bindParam(':pid',$_SESSION['project']);
		$create -> bindParam(':l',$value);
		$create -> bindParam(':m',$value);
		$create -> bindParam(':p',$value);

		$create -> execute();


	}

	if(isset($_POST['labour']) AND isset($_POST['submit'])){
		$var = $_POST['labour'];
		$update = $pdo -> prepare("UPDATE dayworks SET `labour` = :l WHERE project_id = :pid ");
		$update -> bindParam(':l',$var);
		$update -> bindParam(':pid',$_SESSION['project']);
		$update -> execute();
		?>
			<script type="text/javascript">
				window.location = "bill-of-quantities.php";
			</script>
		<?php
	}
	

	?>
		<form action="" method="post" style="display: inline;">
			<b>LABOUR:</b> The prime cost to which <input type="number" name="labour" class="formcontrol" style="border:none;background: transparent;text-align:center;font-weight:bold;width:<?php echo strlen($row_s['labour'])*17; ?>px;font-size:17px;min-width:70px;" value="<?php echo $row_s['labour']; ?>" onclick="display_btn();" title="click to edit" id="myInput" onkeyup="showLength()">
			<button class="btn btn-success btn-sm" id="sub_labour" style="display:none;" type="submit" name="submit">Update</button> per centum 
				shall be added.
		</form>

		<script type="text/javascript">
			function display_btn(){
				document.getElementById("sub_labour").style.display = "inline";
			}
		</script>
	<?php
}

function material_dayworks(){
		global $pdo;
	session_start();

	$select = $pdo -> prepare("SELECT * FROM dayworks WHERE project_id = :pid ");
	$select -> bindParam(':pid',$_SESSION['project']);
	$select -> execute();
	$row_s = $select -> fetch(PDO::FETCH_ASSOC);

	if($select -> rowCount() == 0){
		$value = 0;
		$create = $pdo -> prepare("INSERT INTO dayworks (project_id,labour,material,plant) VALUES (:pid,:l,:m,:p) ");
		$create -> bindParam(':pid',$_SESSION['project']);
		$create -> bindParam(':l',$value);
		$create -> bindParam(':m',$value);
		$create -> bindParam(':p',$value);

		$create -> execute();


	}

	if(isset($_POST['material']) AND isset($_POST['submit'])){
		$var = $_POST['material'];
		$update = $pdo -> prepare("UPDATE dayworks SET `material` = :l WHERE project_id = :pid ");
		$update -> bindParam(':l',$var);
		$update -> bindParam(':pid',$_SESSION['project']);
		$update -> execute();
		?>
			<script type="text/javascript">
				window.location = "bill-of-quantities.php";
			</script>
		<?php
	}
	

	?>
		<form action="" method="post" style="display: inline;">
			<b>MATERIAL:</b> The prime cost to which 
			<input type="number" name="material" class="formcontrol" style="border:none;background: transparent;text-align:center;font-weight:bold;width:<?php echo strlen($row_s['material'])*17; ?>px;font-size:17px;min-width:70px;" value="<?php echo $row_s['material']; ?>" onclick="display_btn_m();" title="click to edit"  onkeyup="showLength()">
			<button class="btn btn-success btn-sm" id="sub_material" style="display:none;" type="submit" name="submit">Update</button> per centum 
				shall be added (delivered to site).
		</form>

		<script type="text/javascript">
			function display_btn_m(){
				document.getElementById("sub_material").style.display = "inline";
			}
		</script>
	<?php
}


function plant_dayworks(){
		global $pdo;
	session_start();

	$select = $pdo -> prepare("SELECT * FROM dayworks WHERE project_id = :pid ");
	$select -> bindParam(':pid',$_SESSION['project']);
	$select -> execute();
	$row_s = $select -> fetch(PDO::FETCH_ASSOC);

	if($select -> rowCount() == 0){
		$value = 0;
		$create = $pdo -> prepare("INSERT INTO dayworks (project_id,labour,material,plant) VALUES (:pid,:l,:m,:p) ");
		$create -> bindParam(':pid',$_SESSION['project']);
		$create -> bindParam(':l',$value);
		$create -> bindParam(':m',$value);
		$create -> bindParam(':p',$value);

		$create -> execute();


	}

	if(isset($_POST['plant']) AND isset($_POST['submit'])){
		$var = $_POST['plant'];
		$update = $pdo -> prepare("UPDATE dayworks SET `plant` = :l WHERE project_id = :pid ");
		$update -> bindParam(':l',$var);
		$update -> bindParam(':pid',$_SESSION['project']);
		$update -> execute();
		?>
			<script type="text/javascript">
				window.location = "bill-of-quantities.php";
			</script>
		<?php
	}
	

	?>
		<form action="" method="post" style="display: inline;">
			<b>PLANT:</b> The net hire charge to which 
			<input type="number" name="plant" class="formcontrol" style="border:none;background: transparent;text-align:center;font-weight:bold;width:<?php echo strlen($row_s['plant'])*17; ?>px;min-width:70px;font-size:17px;" value="<?php echo $row_s['plant']; ?>" onclick="display_btn_l();" title="click to edit"  onkeyup="showLength()">
			<button class="btn btn-success btn-sm" id="sub_plant" style="display:none;" type="submit" name="submit">Update</button> per centum 
				shall be added.
		</form>

		<script type="text/javascript">
			function display_btn_l(){
				document.getElementById("sub_plant").style.display = "inline";
			}
		</script>
	<?php
}

function add_a_heading(){
	global $pdo;
	session_start();
	$project = $_SESSION['project'];

	if (isset($_POST['heading_add']) AND isset($_POST['work_group_select']) AND isset($_POST['save_heading'])) {
		$heading = $pdo -> quote("<u><h2 style='text-transform:uppercase;'><b>".$_POST['heading_add']."</b></h2></u>");
		$work_group = $_POST['work_group_select'];

		$insert = $pdo -> prepare("INSERT INTO bill_of_quantities_content (project_id,content,quantity,rate,amount,item_type,unit,work_group) VALUES (:pid,:content,:quantity,:rate,:amount,:item_type,:unit,:wg) ");

		$value = "";
		$insert -> bindParam(':pid',$project);
		$insert -> bindParam(':content',$heading);
		$insert -> bindParam(':quantity',$value);
		$insert -> bindParam(':rate',$value);
		$insert -> bindParam(':amount',$value);
		$insert -> bindParam(':unit',$value);
		$insert -> bindParam(':wg',$work_group);

		$type = "heading";
		$insert -> bindParam(':item_type',$type);

		try {
			$insert -> execute();
			session_start();
			$_SESSION['work_group'] = $work_group;
			
		} catch (Exception $e) {
			echo $e -> getMessage();
		}
	}
}add_a_heading();

function add_a_subheading(){
	global $pdo;
	session_start();
	$project = $_SESSION['project_id'];
	if (isset($_POST['sub_heading_add']) AND isset($_POST['work_group_select']) AND isset($_POST['save_sub_heading'])) {
		//echo "okay";
		$sub_heading = $pdo -> quote("<h4 style=/'text-transform:uppercase;/'><b>".$_POST['sub_heading_add']."</b></h4>");

		$work_group = $_POST['work_group_select'];

		$insert = $pdo -> prepare("INSERT INTO bill_of_quantities_content (project_id,content,quantity,rate,amount,item_type,unit,work_group) VALUES (:pid,:content,:quantity,:rate,:amount,:item_type,:unit,:wg) ");

		$value = "";
		$insert -> bindParam(':pid',$project);
		$insert -> bindParam(':content',$sub_heading);
		$insert -> bindParam(':quantity',$value);
		$insert -> bindParam(':rate',$value);
		$insert -> bindParam(':amount',$value);
		$insert -> bindParam(':unit',$value);
		$insert -> bindParam(':wg',$work_group);

		$type = "sub heading";
		$insert -> bindParam(':item_type',$type);

		try {
			$insert -> execute();
			session_start();
			$_SESSION['work_group'] = $work_group;
			
		} catch (Exception $e) {
			echo $e -> getMessage();
		}
	}
}add_a_subheading();

function add_bq_item(){
	global $pdo;
	session_start();

	if(isset($_POST['description']) AND isset($_POST['rate']) AND isset($_POST['uom']) AND isset($_POST['quantity']) AND isset($_POST['cost']) AND isset($_POST['percentage_of']) AND isset($_POST['percentage_amount']) AND isset($_POST['work_group_select']) AND isset($_POST['submit_item'])){
		
		$description = $_POST['description'];
		$rate = $_POST['rate'];
		$uom = $_POST['uom'];
		$quantity = $_POST['quantity'];
		$cost = $_POST['cost'];
		$type = "description";
		$percentage_of = $_POST['percentage_of'];
		$percentage_amount = $_POST['percentage_amount'];

		$work_group  = $_POST['work_group_select'];


		$insert = $pdo -> prepare("INSERT INTO bill_of_quantities_content (project_id,content,quantity,rate,amount,item_type,unit,percentage_of,percentage_amount,work_group) VALUES (:project_id,:content,:quantity,:rate,:amount,:item_type,:unit,:po,:pa,:wg) ");

		$insert -> bindParam(':project_id',$_SESSION['project']);
		$insert -> bindParam(':content',$description);
		$insert -> bindParam(':quantity',$quantity);
		$insert -> bindParam(':rate',$rate);
		$insert -> bindParam(':wg',$work_group);

		if($percentage_of == "custom amount"){
			$decided_cost = $_POST['percentage_amount'];
		}
		else{
			$decided_cost = $cost;
		}

		$insert -> bindParam(':amount',$decided_cost);
		$insert -> bindParam(':item_type',$type);
		$insert -> bindParam(':unit',$uom);
		$insert -> bindParam(':po',$percentage_of);
		$insert -> bindParam(':pa',$percentage_amount);

		try {
			$insert -> execute();
			session_start();
			$_SESSION['work_group'] = $work_group;
		} catch (Exception $e) {
			echo $e -> getMessage();
		}

	}
}add_bq_item();

function read_bq_contents(){
	global $pdo ;
	session_start();

	$project = $_SESSION['project'];
	
	$work_tender = $_GET['token']/2773875;

	$select_works = $pdo -> prepare("SELECT * FROM bill_of_quantities_works WHERE id = :id ");
	$select_works -> bindParam(':id',$work_tender);
	$perm = 1;
	//$select_works -> bindParam(':perm',$perm);
	$select_works -> execute();
	$counter = 1;
	while($row_works = $select_works -> fetch(PDO::FETCH_ASSOC)){
		$work_id = $row_works['id'];
		$work_title = $row_works['work_title'];

		?>

			<tr class="bg-default" style="background:rgba(0,0,0,0.05);<?php if($_SESSION['work_group'] == $work_id){echo 'background:skyblue;color:white;';} ?> font-weight:bold; text-transform: uppercase;">
				<td style="padding-top:30px;padding-bottom:30px;"><a title="Select This Work Group" href="bill-of-quantities.php?ref=<?php echo $work_id * 6738883877488; ?>" style="<?php if($_SESSION['work_group'] == $work_id){echo 'color:white;';} ?>">Work<span style="opacity: 0;">_</span><?php echo $counter++; ?></a></td>
				<td style="padding-top:30px;padding-bottom:30px; width:50%;">
					<h3 title="<?php echo remove_quotes($row_works['work_description']); ?>" style="margin-top:0px;font-weight: bold;"><?php echo remove_quotes($work_title); ?></h3>
				</td>
				<td style="text-transform:capitalize;padding-top:30px;">Rate</td>
				<td style="text-transform:capitalize;padding-top:30px;">Quantity</td>
				<td style="text-transform:capitalize;padding-top:30px;">UoM</td>
				<td style="text-transform:capitalize;padding-top:30px;">Unit<span style='opacity:0;'>_</span>Cost<br>(Ksh)</td>
				<td style="text-transform:capitalize;padding-top:30px;">Row<span style='opacity:0;'>_</span>Total<br>(Ksh)</td>
			</tr>
		<?php

		$select = $pdo -> prepare("SELECT * FROM bill_of_quantities_content WHERE work_group = :wg ORDER BY id ASC ");
		//$select -> bindParam(':pid',$project);
		$select -> bindParam(':wg', $work_id);
		$select -> execute();

	while ($row = $select -> fetch(PDO::FETCH_ASSOC)) {
		$rep_id = $row["id"];
		?>
			<tr style="<?php if($_SESSION['work_group'] == $row_works['id']){echo "border-left:dashed 5px skyblue;";} ?>" >
				<td style="padding-top:20px;text-align:right;border-top:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-bottom:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-right:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;">
				</td>
				<td style="word-break: break-word; border-bottom:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-top:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-right:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;"><?php if($row['item_type'] == "description"){ echo $row['content']; }else{
					echo remove_quotes($row['content']);
				}; ?></td>
				<td style="font-weight:bold;border-bottom:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-top:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-left:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-right:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;">
					<?php if($row['item_type'] == 'description'){echo $row['rate'];} ?>
				</td>

				<td style="font-weight:bold;border-bottom:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-top:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-left:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-right:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;">
					<?php if($row['item_type'] == 'description'){echo $row['quantity'];} ?>
				</td>

				<td style="font-weight:bold;border-bottom:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-top:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-left:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-right:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;">
					<?php if($row['item_type'] == 'description'){echo $row['unit'];} ?>
				</td>
				
				

				<td style="font-weight:bold;border-bottom:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-top:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-left:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-right:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;">
				<?php if($row['item_type'] == 'description'){/*
					if ($row['percentage_of'] == 'total') {
						echo '<span style="font-weight:normal;font-size:80%;">calculated as '.$row['quantity'].'%'.' of The Total Costs</span>';
					}elseif($row['percentage_of'] == 'custom amount'){
						echo '<span style="font-weight:normal;font-size:80%;">calculated as '.$row['quantity'].'%'.' of Custom Costs ('.$row['amount'].' ksh) </span>';
					}else{
					    
					    echo 'Ksh. '.round($row['amount'],2);
					    
					}*/
					       
				}?>
				    
				    <form action="" method="post">
    				    <div class="form-group">
    				        <div class="input-group">
    				            <input type="hidden" name="content_id" value="<?php echo $rep_id; ?>">
    				            <input type="hidden" name="work_id" value="<?php echo $row_works['id']; ?>">
    				            
    				            <input type="number" value="<?php echo read_content_price($rep_id); ?>" class="form-control" name="item_price" style="width:100px;" title="Enter Cost Per Unit">
    				            <div class="input-group-btn">
    				                <button type="submit" class="btn btn-primary" name="update_item_cost"><b class="fa fa-check-circle"></b></button>
    				            </div>
    				        </div>
    				    </div>
				    </form>
				     
					    
				</td>


				<td style="text-align:right;font-weight:bold;border-bottom:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-top:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;border-left:<?php if($row['item_type'] != 'description'){echo 'none';} ?>;">
				    <?php echo $row['quantity'] * read_content_price($rep_id); //if($row['item_type'] == 'description'){echo 'Ksh. '.round(read_row_total_amount($row['id']),2);}?>
				    </td>
			</tr>



					
		<?php
	}
	
	
	?>
	   
	    
	    <tr style="">
	        <td style="padding-top:20px;text-align:right;">
	            <b class="fa fa-wrench"></b>
	        </td>
	        <td style="padding-top:20px;font-weight:bold;border-right:none;color:black;" class="text-primary">
	           Material Total Cost
	        </td>
	        <td style="padding-top:20px;border-left:none;border-right:none;text-align:center;" class="text-primary"> ------ </td>
	        <td style="padding-top:20px;border-left:none;border-right:none;text-align:center;" class="text-primary"> --------- </td>
	        <td style="padding-top:20px;border-left:none;border-right:none;text-align:center;" class="text-primary"> --------- </td>
	        <td style="padding-top:20px;border-left:none;border-right:none;text-align:center;" class="text-primary"> --------- </td> 
	        <td style="padding-top:20px;border-left:none;border-right:none;font-weight:bold;text-align:right;color:black;" class="text-primary textright">
	            Ksh.<span style="opacity:0;">_</span><?php echo read_per_work_totals($row_works['id']); ?>
	        </td>
	    </tr>
	    
	    <tr style="background:linear-gradient(to bottom, white, lightblue);padding-top:40px;padding-bottom40px;height:70px;">
	        <td style="padding-top:20px;text-align:right;">
	            <b class="fa fa-users"></b>
	        </td>
	        <td style="padding-top:20px;font-weight:bold;border-right:none;color:black;" class="text-primary">
	            
	            
	           <form action="" method="post">
	               
	               Labour Cost For This Work is Estimated to Be: 
	               <input type="hidden" value="<?php echo $row_works['id']; ?>" name="work_perc_id">
    	            <input name="work_perc_value" style="width:70px;display:inline;" onclick="show_submit<?php echo $row_works['id']; ?>()" oninput="multiplyNumbers<?php echo $row_works['id']; ?>()" id="number1<?php echo $row_works['id']; ?>" step="any" type="number" max="100" value="<?php echo read_labour_percentage($row_works['id']); ?>" class="form-control" >
    	            <span class="inputgroup-addon" id="submit<?php echo $row_works['id']; ?>" style="display:none;">
    	                <button class="btn btn-primary btn-sm" type="submit" name="submit_perc" >
    	                    <b class="fa fa-check"></b>
    	                </button>
    	            </span>
    	            Percent &nbsp; (%) &nbsp; of Material Cost 
	            </form>
	            
	            <input style="" oninput="multiplyNumbers<?php echo $row_works['id']; ?>()" id="number2<?php echo $row_works['id']; ?>" step="any" type="hidden" value="<?php echo read_per_work_totals($row_works['id']); ?>" class="form-control" > 
	           
	             <script>
	             
	             function show_submit<?php echo $row_works['id']; ?>(){
	                 document.getElementById("submit<?php echo $row_works['id']; ?>").style.display="inline";
	                 document.getElementById("result<?php echo $row_works['id']; ?>").style.color="red";
	                 document.getElementById("number1<?php echo $row_works['id']; ?>").style.color="red";
	                 
	             }
	             
	              document.addEventListener("DOMContentLoaded", function() {
                    multiplyNumbers<?php echo $row_works['id']; ?>();
                });
        
                    function multiplyNumbers<?php echo $row_works['id']; ?>() {
                        // Get the values of the two input fields
                        var num1<?php echo $row_works['id']; ?> = parseFloat(document.getElementById("number1<?php echo $row_works['id']; ?>").value);
                        var num2<?php echo $row_works['id']; ?> = parseFloat(document.getElementById("number2<?php echo $row_works['id']; ?>").value);
            
                        // Check if the input values are valid numbers
                        if (!isNaN(num1<?php echo $row_works['id']; ?>) && !isNaN(num2<?php echo $row_works['id']; ?>) && num1<?php echo $row_works['id']; ?> <= 100) {
                            // Multiply the numbers
                            var result<?php echo $row_works['id']; ?> = (num1<?php echo $row_works['id']; ?> / 100) * num2<?php echo $row_works['id']; ?>;
                            
                            result<?php echo $row_works['id']; ?> = result<?php echo $row_works['id']; ?>.toFixed(0);
                            // Display the result
                            document.getElementById("result<?php echo $row_works['id']; ?>").textContent = result<?php echo $row_works['id']; ?>;
                        } else {
                            // If the input values are not valid numbers, display an error or handle it as needed
                            if(num1<?php echo $row_works['id']; ?> > 100){
                                document.getElementById("result<?php echo $row_works['id']; ?>").textContent = "Percentage can't exceed 100%";
                            }else{
                               document.getElementById("result<?php echo $row_works['id']; ?>").textContent = "Invalid input"; 
                            }
                            
                        }
                    }
                    
                    
                    
                   
                </script>
	                                                
	        </td>
	        <td style="padding-top:20px;border:none;"></td>
	        <td style="padding-top:20px;border:none;"></td>
	        <td style="padding-top:20px;border:none;"></td>
	        <td style="padding-top:20px;border:none;"></td> 
	        <td style="padding-top:20px;border:none;font-weight:bold;text-align:right;color:black;">
	            Ksh.<span style="opacity:0;">_</span><span style="opacity0;color:black;" id="result<?php echo $row_works['id']; ?>">0</span><?php //echo 0.3 * read_per_work_totals($row_works['id']); ?> 
	        </td>
	    </tr>
	    
	    <tr style="background:linear-gradient(to bottom, lightblue, skyblue);padding-top:40px;padding-bottom40px;height:70px;">
	        <td style="padding-top:20px;text-align:right;">
	            <b class="fa fa-arrow-right"></b>
	        </td>
	        <td style="padding-top:20px;font-weight:bold;border-right:none;color:black;" class="text-primary">
	            <u><b style="text-transform:uppercase;color:black;"><?php echo remove_quotes($work_title); ?></b></u> Material and Labour Cost 
	        </td>
	        <td style="padding-top:20px;border:none;"></td>
	        <td style="padding-top:20px;border:none;"></td>
	        <td style="padding-top:20px;border:none;"></td>
	        <td style="padding-top:20px;border:none;"></td> 
	        <td style="padding-top:20px;border:none;font-weight:bold;text-align:right;color:black;">
	            Ksh.<span style="opacity:0;">_</span><?php echo (read_labour_percentage($row_works['id'])/100 * read_per_work_totals($row_works['id'])) + read_per_work_totals($row_works['id']); ?> 
	        </td>
	    </tr>
	    
	    
	    
	    
	    
	  
	<?php
	
	
}
}


function read_total_amount(){
	global $pdo;
	session_start();

	$select = $pdo -> prepare("SELECT * FROM bill_of_quantities_content WHERE project_id = :pid AND quantity != :q AND amount != :am ");

	$q = "";
	$select -> bindParam(':pid',$_SESSION['project']);
	$select -> bindParam(':q',$q);
	$select -> bindParam(':am',$q);

	$select -> execute();

	$total = 0;
	$multiplier = 0;
	while ($row = $select -> fetch(PDO::FETCH_ASSOC)) {
		if($row['unit'] == "Percentage (%)"){

			$multiplier = $row['quantity']/100;
			$target_amount = $row['percentage_amount'];

		}
		else{
			$multiplier = $row['quantity'];
			$target_amount = $row['amount'];

		}

		$row_total = $multiplier * $target_amount;
		$total += $row_total;
	}

	return $total;
}

function read_row_total_amount($var){
	global $pdo;
	session_start();

	$select = $pdo -> prepare("SELECT * FROM bill_of_quantities_content WHERE id = :pid AND quantity != :q AND amount != :am AND item_type = :it  ");

	$q = "";
	$it = "description";

	$select -> bindParam(':pid',$var);

	$select -> bindParam(':q',$q);
	$select -> bindParam(':am',$q);
	$select -> bindParam(':it',$it);


	$select -> execute();

	$total = 0;
	$multiplier = 0;
	while ($row = $select -> fetch(PDO::FETCH_ASSOC)) {
		if($row['unit'] == "Percentage (%)"){

			$multiplier = $row['quantity']/100;
			$target_amount = $row['percentage_amount'];

		}
		else{
			$multiplier = $row['quantity'];
			$target_amount = $row['amount'];

		}

		$row_total = $multiplier * $target_amount;
		$total += $row_total;
	}

	return $total;
}


function edit_clause(){
	global $pdo;

	if(!empty($_GET['token']) AND !empty($_GET['action'])){
		if($_GET['action'] == "5675456654567"){
			//delete row

			$id = $_GET['token'] / 4674548;

			$delete = $pdo -> prepare("DELETE FROM bill_of_quantities_content WHERE id=:id ");
			$delete -> bindParam(':id',$id);
			$delete -> execute();
			?>
				<script type="text/javascript">
					window.location = "bill-of-quantities.php";
				</script>
			<?php
		}
		elseif($_GET['action'] == "79467316"){
			$type = $_GET['type'];
			if($type == "description"){
				?>
					
				<?php
			}
		}
	}
}edit_clause();


function update_heading(){
	global $pdo;
	if (isset($_POST['heading_update']) AND isset($_POST['update_heading_id']) AND isset($_POST['work_group_select']) AND isset($_POST['update_heading'])) {
		$update_heading_id = $_POST['update_heading_id'];
		$new_heading = $pdo -> quote("<u><h2 style='text-transform:uppercase;'><b>".$_POST['heading_update']."</b></h2></u>");

		$work_group = $_POST['work_group_select'];


		$update = $pdo -> prepare("UPDATE bill_of_quantities_content SET `content`=:c, `work_group`=:wg WHERE id=:id ");
		$update -> bindParam(':c',$new_heading);
		$update -> bindParam(':id',$update_heading_id);
		$update -> bindParam(':wg',$work_group);
		$update -> execute();
		session_start();
		$_SESSION['work_group'] = $work_group;


	}
}update_heading();


function update_subheading(){
	global $pdo;
	if (isset($_POST['sub_heading_edit']) AND isset($_POST['subheading_id']) AND isset($_POST['work_group_select']) AND isset($_POST['update_sub_heading'])) {
		$update_heading_id = $_POST['subheading_id'];
		$new_heading = $pdo -> quote("<h4 style='text-transform:uppercase;'><b>".$_POST['sub_heading_edit']."</b></h4>");

		$work_group = $_POST['work_group_select'];

		$update = $pdo -> prepare("UPDATE bill_of_quantities_content SET `content`=:c , `work_group`=:wg WHERE id=:id ");
		$update -> bindParam(':c',$new_heading);
		$update -> bindParam(':id',$update_heading_id);
		$update -> bindParam(':wg',$work_group);
		$update -> execute();
		session_start();
		$_SESSION['work_group'] = $work_group;

	}
}update_subheading();


function edit_description(){
	global $pdo;
	if (isset($_POST['description_edit']) AND isset($_POST['rate_edit']) AND isset($_POST['uom_edit']) AND isset($_POST['quantity_edit']) AND isset($_POST['cost_edit']) AND isset($_POST['edit_content_id']) AND isset($_POST['percentage_of']) AND isset($_POST['percentage_amount']) AND isset($_POST['work_group_select']) AND isset($_POST['submit_item_edit']) ) {

		$description_edit = $_POST['description_edit'];
		$rate_edit = $_POST['rate_edit'];
		$uom_edit = $_POST['uom_edit'];
		$quantity_edit = $_POST['quantity_edit'];
		$cost_edit = $_POST['cost_edit'];
		$id = $_POST['edit_content_id'];
		$percentage_of = $_POST['percentage_of'];
		$percentage_amount = $_POST['percentage_amount'];

		$selected_work_group = $_POST['work_group_select'];



		$update = $pdo -> prepare("UPDATE bill_of_quantities_content SET `content`=:content , `quantity`=:quantity , `rate`=:rate , `amount`=:amount , `unit`=:unit , `percentage_of`=:po , `percentage_amount`=:pa , `work_group` = :wg WHERE id = :id ");

		if($percentage_of == "custom amount"){
			$decided_cost = $_POST['percentage_amount'];
			$cost_edit = $_POST['percentage_amount'];
		}


		$update -> bindParam(':content',$description_edit);
		$update -> bindParam(':quantity',$quantity_edit);
		$update -> bindParam(':rate',$rate_edit);
		$update -> bindParam(':amount',$cost_edit);

		$update -> bindParam(':wg',$selected_work_group);

		$update -> bindParam(':unit',$uom_edit);
		$update -> bindParam(':id',$id);
		$update -> bindParam(':po',$percentage_of);
		$update -> bindParam(':pa',$percentage_amount);
		
		try {
			$update -> execute();
			session_start();

			$_SESSION['work_group'] = $selected_work_group;
		} catch (Exception $e) {
			echo $e -> getMessage();
		}
		
	}
}edit_description();

function update_for_total_cost_perc(){

	global $pdo;

	$update = $pdo -> prepare("UPDATE bill_of_quantities_content SET `amount`=:a , `percentage_amount`=:pa WHERE `percentage_of`=:po  ");

	$update -> bindParam(':a',read_total_amount());
	$update -> bindParam(':pa',read_total_amount());

	$po = "total";

	$update -> bindParam(':po',$po);

	$update -> execute();


}update_for_total_cost_perc();


function copy_works_individual(){
	global $pdo;

	session_start();
	$project = $_SESSION['project_id'];


	$select = $pdo -> prepare("SELECT * FROM project_milestones_steps ORDER BY id ASC");
	$select -> execute();

	$counter = 1;

	while ($row = $select -> fetch(PDO::FETCH_ASSOC)) {
		$get_title = $row['milestone_title'];
		$get_desc = $row['milestone_desc'];

		$check_by_title = $pdo -> prepare("SELECT * FROM bill_of_quantities_works WHERE work_title = :wt AND project_id = :pid ");


		$check_by_title -> bindParam(':wt', $get_title);
		$check_by_title -> bindParam(':pid', $project);
		$check_by_title -> execute();


		if ($check_by_title -> rowCount() == 0) {

			$insert = $pdo -> prepare('INSERT INTO bill_of_quantities_works (work_title,work_description,work_type,project_id,order_no) VALUES (:work_title,:work_description,:work_type,:project_id,:order_no) ');

			$work_type = "inbuilt";

			$order = 1;
			$insert -> bindParam(':work_title',$get_title);
			$insert -> bindParam(':work_description',$get_desc);
			$insert -> bindParam(':work_type',$work_type);
			$insert -> bindParam(':project_id',$project);
			$insert -> bindParam(':order_no',$order);


			try {
				$insert -> execute();
			} catch (Exception $e) {
				echo $e -> getMessage();
			}


		}
	}
}copy_works_individual();

function add_work(){
	global $pdo;
	session_start();

	$project = $_SESSION['project'];

	if (isset($_POST['work_title']) AND isset($_POST['work_desc']) AND isset($_POST['save_work_group']) ) {

		$work_title  = $pdo -> quote($_POST['work_title']);
		$work_desc  = $pdo -> quote($_POST['work_desc']);

		$check = $pdo -> prepare("SELECT * FROM bill_of_quantities_works WHERE work_title = :wt AND project_id = :pid ");
		$check -> bindParam(':wt',$work_title);
		$check -> bindParam(':pid',$project);
		$check -> execute();

		$row_check = $check -> fetch(PDO::FETCH_ASSOC);

		if ($check -> rowCount() == 0) {
			$insert = $pdo -> prepare('INSERT INTO bill_of_quantities_works (work_title,work_description,work_type,project_id,order_no,permissions) VALUES (:work_title,:work_description,:work_type,:project_id,:order_no,:permissions) ');

			$insert -> bindParam(':work_title', $work_title);
			$insert -> bindParam(':work_description', $work_desc);
			$workType = "custom";
			$insert -> bindParam(':work_type', $workType);
			$insert -> bindParam(':project_id', $project);

			$order_no = 1;
			$insert -> bindParam(':order_no', $order_no);
			$insert -> bindParam(':permissions', $order_no);

			try {
				$insert -> execute();
				?>
					<div class="alert alert-success fade in">
						<button class="close" data-dismiss="alert">&times;</button>
						<b class="fa fa-warning"></b> Work Group Added Successfully !
					</div>
				<?php
			} catch (Exception $e) {
				$e -> getMessage();
			}

		}else{
			if($row_check['permissions'] == 0){
				$perm = 1;
				$update = $pdo -> prepare("UPDATE bill_of_quantities_works SET `permissions` = :p , `work_description`= :des WHERE work_title = :wt AND project_id = :pid  ");
				$update -> bindParam(':p',$perm);
				$update -> bindParam(':wt',$work_title);
				$update -> bindParam(':pid',$project);
				$update -> bindParam(':des',$work_desc);

				try {
					$update -> execute();
					?>
                        <div class="alert alert-success fade in">
                        	<button class="close" data-dismiss="alert">&times;</button>
                        	<b class="fa fa-check"></b> Added Successfully
                        </div>
					<?php
				} catch (Exception $e) {
					$e -> getMessage();
				}
			}else{
				?>
					<div class="alert alert-danger fade in">
						<button class="close" data-dismiss="alert">&times;</button>
						<b class="fa fa-warning"></b> The Work Title / Group already exists
					</div>
				<?php
			}
		}

	}
}

function read_works(){
	global $pdo;
	session_start();
	$project = $_SESSION['project'];

	$select = $pdo -> prepare("SELECT * FROM bill_of_quantities_works WHERE project_id = :pid AND permissions = :ps ORDER BY id ASC");

	$perm = 1;

	$select -> bindParam(':pid',$project);
	$select -> bindParam(':ps',$perm);

	$select -> execute();

	$counter = 1;

	if($select -> rowCount() == 0){
		?>
			<h4 style="opacity:0.5;"> <b class="fa fa-info-circle"></b> No Work Groups Created At The Moment.</h4>
		<?php
	}

	while ($row = $select -> fetch(PDO::FETCH_ASSOC)) {
		?>
			<tr id="row<?php echo $row['id']; ?>">
				<td>
					<?php echo $counter++; ?>
				</td>

				<td>
					<a class="scroll" style="text-decoration:none;" href="#row<?php echo $row['id']; ?>" data-toggle="collapse" data-target="#desc<?php echo $row['id']; ?>"><h4 style="margin-top:0px;padding-top:0px;"><?php echo remove_quotes($row['work_title']); ?></h4></a>
					<p class="collapse navbar-collapsed" id="desc<?php echo $row['id']; ?>">
						<?php echo remove_quotes($row['work_description']); ?>
					</p>
				</td>
				
				<td>

					<!--<a title="Delete Work Group and its content" data-toggle="modal" data-target="#wgdel<?php echo $row['id']; ?>" class="close" style="opacity:0.9;color:black;"><b class="fa fa-trash-o text-danger"></b> &nbsp;&nbsp;&nbsp;&nbsp;</a>-->

					<div class="modal fade" id="wgdel<?php echo $row['id']; ?>">
						<div class="modal-dialog">
							<form action="" method="post">
								<div class="modal-content">
									<div class="modal-body">
										<input type="hidden" value="<?php echo $row['id']; ?>" name="milestone_id" >
										<h4 style="" class="text-primary">
											<b class="fa fa-warning text-danger"></b>  Are you Sure you want to Delete this work Group and its content ?. <br>This Action is not reversible
										</h4>
						
									</div>
									<div class="modal-footer">
										<button data-dismiss="modal" class="btn btn-default">Discard</button>
										<button class="btn btn-danger" name="remove_work"><b class="fa fa-trash-o"></b> Delete Info</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
					<!--<form action="" method="post">
						<input type="hidden" value="<?php //echo $row['id']; ?>" name="milestone_id" >
						<button class="close" type="submit" name="remove_work">&times;</button>
					</form>-->
				</td>
			</tr>
		<?php
	}

}

function hide_work_group(){

	global $pdo;
	session_start();

	if (isset($_POST['milestone_id']) AND isset($_POST['remove_work'])) {
		$id = $_POST['milestone_id'];
		$p = 0;

		$update = $pdo -> prepare('UPDATE bill_of_quantities_works SET `permissions` = :p WHERE id = :id ');
		$update -> bindParam(':p',$p);
		$update -> bindParam(':id',$id);

		$update -> execute();

	}
}hide_work_group();


function select_work_groups(){
	global $pdo;

	session_start();

	$project = $_SESSION['project'];

	$select = $pdo -> prepare("SELECT * FROM bill_of_quantities_works WHERE project_id = :pid ");
	$select -> bindParam(':pid',$project);
	$select -> execute();

	while ($row = $select -> fetch(PDO::FETCH_ASSOC)) {
		?>
			<option class="text-primary" style="font-weight:bold;text-transform:capitalize;" value="<?php echo $row['id']; ?>" <?php if($_SESSION['work_group'] == $row['id']){echo "selected";} ?> ><?php echo remove_quotes($row['work_title']); ?></option>
		<?php
	}
}


function set_work_session(){
	global $pdo;
	if (!empty($_GET['ref'])) {
		session_start();
		$_SESSION['work_group'] = $_GET['ref']/6738883877488;
	}
}set_work_session();

function update_work_title_name(){
	global $pdo;
	if (isset($_POST['work_title_id']) AND isset($_POST['new_work_title']) AND isset($_POST['new_wt_sub'])) {
		// code...
		$work_title_id = $_POST['work_title_id'];
		$new_work_title = $pdo -> quote($_POST['new_work_title']);

		$update = $pdo -> prepare("UPDATE bill_of_quantities_works SET `work_title`=:wt WHERE id = :id ");
		$update -> bindParam(':wt',$new_work_title);
		$update -> bindParam(':id',$work_title_id);

		$update -> execute();
	}
}update_work_title_name();



function submit_bq(){
    global $pdo;
    session_start();
    
    if(isset($_POST['bq_id']) AND isset($_POST['submit_bq'])){
        $update = $pdo -> prepare("UPDATE selected_drawings SET `bill_of_quantity` = :bq WHERE project_id_samp = :pid ");
        $bq = "uploaded";
        $update -> bindParam(':bq',$bq);
        $update -> bindParam(':pid',$_SESSION['project_id']);
        try{
            $update -> execute();
            ?>
                <script>
                    alert("BQ Uploaded Successfully !");
                    window.location = "../../../approval-project-info.php";
                </script>
            <?php
        }catch(Exception $e){
            echo $e -> getMessage();
        }
        
        
    }
}submit_bq();

function read_per_work_totals($var){
    global $pdo;
    
    session_start();
    $select_sc = $pdo -> prepare("SELECT * FROM bill_of_quantities_subcontractor WHERE subcontractor_id = :sid AND work_group = :wgrp ");
    $select_sc -> bindParam(':sid',$_SESSION['contractor']);
    $select_sc -> bindParam(':wgrp',$var);
    $select_sc -> execute();
    



	$total = 0;
	$multiplier = 0;
	//$row = $select -> fetch(PDO::FETCH_ASSOC)
	
	while ( $row_sc = $select_sc -> fetch(PDO::FETCH_ASSOC) ) {
	    
	        
    $select = $pdo -> prepare("SELECT * FROM bill_of_quantities_content  WHERE id = :id ");

	$q = "";
	$select -> bindParam(':id',$row_sc['item']);

	$select -> execute();
	$row = $select -> fetch(PDO::FETCH_ASSOC);
	
		if($row['unit'] == "Percentage (%)"){

			$multiplier = $row_sc['item_cost']/100;
			$target_amount = $row['percentage_amount'];

		}
		else{
			$multiplier = $row['quantity'];
			$target_amount = $row_sc['item_cost'];

		}

		$row_total = $multiplier * $target_amount;
		$total += $row_total;
		
	}

	return $total;
    
}



function update_contractor_bq(){
    global $pdo;
    if(isset($_POST['content_id']) AND isset($_POST['work_id']) AND isset($_POST['item_price']) AND isset($_POST['update_item_cost'])){
        $content_id = $_POST['content_id'];
        $work_id = $_POST['work_id'];
        $item_price = $_POST['item_price'];
        
        session_start();
        $contractor = $_SESSION['contractor'];
        
        
        
        $check_if_exists = $pdo -> prepare("SELECT * FROM bill_of_quantities_subcontractor WHERE  subcontractor_id = :sbcid AND work_group = :wg AND item = :item ");
        //$check_if_exists -> bindParam(':pid',$_SESSION['project_id']);
        $check_if_exists -> bindParam(':sbcid',$contractor);
        $check_if_exists -> bindParam(':wg',$work_id);
        $check_if_exists -> bindParam(':item',$content_id);
        
       
        try{
            
            $check_if_exists -> execute();
            
        }catch(Exception $e){
            
            echo $e -> getMessage();
            
        }
        
        if($check_if_exists -> rowCount() == 0){
            $insert = $pdo -> prepare('INSERT INTO bill_of_quantities_subcontractor (project_id,subcontractor_id,work_group,item,item_cost) 
            VALUES (:project_id,:subcontractor_id,:work_group,:item,:item_cost) ');
            $insert -> bindParam(':project_id',$_SESSION['project_id']);
             $insert -> bindParam(':subcontractor_id',$_SESSION['contractor']);
              $insert -> bindParam(':work_group',$work_id);
               $insert -> bindParam(':item',$content_id);
                $insert -> bindParam(':item_cost',$item_price);
                try{
                $insert -> execute();
                }catch(Exception $e){
                    echo $e -> getMessage();
                }
            
        }else{
            
            $update = $pdo -> prepare("UPDATE bill_of_quantities_subcontractor SET `item_cost`= :item_cost WHERE  subcontractor_id = :sbcid AND work_group = :wg AND item = :item ");
            $update -> bindParam(':item_cost',$item_price);
            //$update -> bindParam(':pid',$_SESSION['project_id']);
            $update -> bindParam(':sbcid',$contractor);
            $update -> bindParam(':wg',$work_id);
            $update -> bindParam(':item',$content_id);
            
            
            
            try{
                $update -> execute();
            }catch(Exception $e){
                echo $e -> getMessage();
            }
        }
    }
}update_contractor_bq();

function read_content_price($var){
    global $pdo;
    
    session_start();
    
    $select = $pdo -> prepare('SELECT * FROM bill_of_quantities_subcontractor WHERE item = :id AND subcontractor_id = :subcid ');
    $select -> bindParam(':id',$var);
    $select -> bindParam(':subcid',$_SESSION['contractor']);
    $select -> execute();
    
    $row = $select -> fetch(PDO::FETCH_ASSOC);
    
    $amount = $row['item_cost'];
    
    return $amount;
}



function update_labour_percentage(){
    global $pdo;
    
    if(isset($_POST['work_perc_id']) && isset($_POST['work_perc_value']) && isset($_POST['submit_perc']) ){
        
        $work_perc_id = $_POST['work_perc_id'];
        $work_perc_value = $_POST['work_perc_value'];
        
        $update = $pdo -> prepare("UPDATE bill_of_quantities_works SET `labour_cost`=:lc WHERE id = :id ");
        $update -> bindParam(':lc',$work_perc_value);
        $update -> bindParam(':id',$work_perc_id);
        
        try{
            $update -> execute();
            
        }catch(Exception $e){
            echo $e -> getMessage();
        }

    }
}update_labour_percentage();


function read_labour_percentage($var){
    global $pdo;
    $select = $pdo -> prepare("SELECT * FROM bill_of_quantities_works WHERE id = :id ");
    $select -> bindParam(':id',$var);
    $select -> execute();
    
    $row = $select -> fetch(PDO::FETCH_ASSOC);
    
    $perc = $row['labour_cost'];
    
    return $perc;
    
}

function read_tender_bq(){
    global $pdo;
    
    $work_id = $_GET['token']/2773875;
    
    $select = $pdo -> prepare("SELECT * FROM bill_of_quantities_works WHERE id = :id ");
    $select -> bindParam(':id',$work_id);
    $select -> execute();
    
    $row = $select -> fetch(PDO::FETCH_ASSOC);
    
    ?>
        <h2 class="text-primary" style="padding-bottom:1em;text-transform:capitalize;">
           <a href="tender.php"> <b class="fa fa-angle-left"></b> &nbsp;&nbsp;</a> <?php echo remove_quotes($row['work_title']); ?> Quotation Template
        </h2>
        
        <p >
            <?php
                echo remove_quotes($row['work_description']);
            ?>
        </p>
        <br>
    <?php
    
}


?>








