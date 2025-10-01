<?php
session_start();
if(!isset($_SESSION["user"]["type"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script language="JavaScript" type="text/javascript">
            $(document).ready(function() {
                $("a.btn").click(function(e) {
                    if (!confirm('Are you sure?')) {
                        e.preventDefault();
                        return false;
                    }
                    return true;
                });
            });
        </script>
<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit Menu</h4>
					<!-- /.box-title -->
					<div class="card-content">

<?php
include "db.php";

// EDIT 
if(isset($_GET['edit']))
{
$result = mysqli_query($con,"SELECT * FROM menu WHERE menu_id=".$_GET['edit']);
$getROW = $result->fetch_array();
}

if(isset($_POST['update'])) {
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $menu_name   = mysqli_real_escape_string($con, $_POST['menu_name']);
    $parent_id   = mysqli_real_escape_string($con, $_POST['parent_id']);
    $menu_id     = (int)$_GET['edit']; // force integer for safety

    $sql = "UPDATE menu 
            SET description='$description', 
                menu_name='$menu_name', 
                parent_id='$parent_id' 
            WHERE menu_id=$menu_id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>
            alert('Successfully Updated..');
            window.location.href='menuadd.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}


?>

  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">


  	    						<div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Image </label>
                                <div class="col-sm-6"> 
                                      <a target="_blank" href="../images/<?php echo $getROW['img']; ?>"> <?php echo $getROW['img']; ?> </a>
 									 <input type="file" name="user_image" accept="*" />

                                <p class="help-block">Image should be in pixels</p>
                                </div>

                                </div>


							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Menu Name</label>
								<div class="col-sm-6">
									<input type="text" name="menu_name" class="form-control" id="" placeholder="Enter Menu Name" value="<?php if(isset($_GET['edit'])) echo $getROW['menu_name'];  ?>"  required="">
								</div>
							</div>

						
	<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Sub Category  </label>
								<div class="col-sm-6">
									


									 <select id="twelve" name="parent_id" class="form-control">
								
 <option value="0">Main Menu</option>
								  <option value="<?php if(isset($_GET['edit'])) echo $getROW['parent_id'];  ?>"><?php if(isset($_GET['edit'])) echo $getROW['parent_id'];  ?></option>
								   <?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM menu where parent_id = 0");
while($row = mysqli_fetch_array($result))
{
echo '<option value="' .$row['menu_id'].'">' .$row['menu_id'].' ' .$row['menu_name'].'</option>';
} 
?>

							</select>


						
								</div>

								</div>
						

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Description  </label>
								<div class="col-sm-6">
									<textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Description " required=""> <?php if(isset($_GET['edit'])) echo $getROW['description'];  ?> </textarea>
								</div>
							</div>


						

							<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
										 <input class="btn btn-primary btn-sm waves-effect waves-light" type="submit" name="update" value="Update" />
   							
								</div>
							</div>


						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>



	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	     
<?php include "allscripts.php"; ?>
