 <?php
session_start();
if(!isset($_SESSION["user"]["type"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>

<body>

<?php include "header.php" ?>


<div id="wrapper"> 
	<div class="main-content">
		
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
				 
					
					<h4 class="box-title">Edit  </h4>
					<!-- /.box-title -->
					<div class="card-content">


<?php
 error_reporting(E_ALL);
ini_set('display_errors', 1);
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT * FROM products WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: productsview.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {


        $maincat = !empty($_POST['maincat']) ? $_POST['maincat'] : 0; 
		$name             = !empty($_POST['name']) ? $_POST['name'] : '';
		$description      = !empty($_POST['description']) ? $_POST['description'] : '';
		$descr            = !empty($_POST['descr']) ? $_POST['descr'] : '';
		$metatitle        = !empty($_POST['metatitle']) ? $_POST['metatitle'] : '';
		$metatag          = !empty($_POST['metatag']) ? $_POST['metatag'] : '';
		$metadescription  = !empty($_POST['metadescription']) ? $_POST['metadescription'] : '';
		$shortdescription = !empty($_POST['shortdescription']) ? $_POST['shortdescription'] : '';
		 
		$price   = !empty($_POST['price']) ? $_POST['price'] : '';
		 
            $parentid  = !empty($_POST['parentid']) ? $_POST['parentid'] : '';
            $tabledesc  = !empty($_POST['tabledesc']) ? $_POST['tabledesc'] : '';
            
		$type   = !empty($_POST['type']) ? $_POST['type'] : '';
		$ptype   = !empty($_POST['ptype']) ? $_POST['ptype'] : '';
		$container   = !empty($_POST['container']) ? $_POST['container'] : '';
		$moq   = !empty($_POST['moq']) ? $_POST['moq'] : '';

        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        { 
        
            
            $upload_dir = '../images/products/'; // upload directory 
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('JPG','jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $img = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['img']);
                    move_uploaded_file($tmp_dir,$upload_dir.$img);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        }
        else
        {
            // if no image selected the old image remain as it is.
            $img = $edit_row['img']; // old image from database
        }   
              
 


		$price = !empty($_POST['price']) ? $_POST['price'] : 0;
		$mrp   = !empty($_POST['mrp'])   ? $_POST['mrp']   : 0;


        // if no error occured, continue ....
        if(!isset($errMSG))
        { 

  

		    // 1. Delete existing product price
		    $deleteStmt = $DB_con->prepare("DELETE FROM productprice WHERE productid = :id");
		    $deleteStmt->bindParam(':id', $id, PDO::PARAM_INT);
		    $deleteStmt->execute();

		    // 2. Insert new product price
		    $insertStmt = $DB_con->prepare("
		        INSERT INTO productprice (productid, type, units, price, mrp) 
		        VALUES (:id, :type, :units, :price, :mrp)
		    ");
		    $type  = 1;
		    $units = 'pc';
		    $insertStmt->bindParam(':id', $id, PDO::PARAM_INT);
		    $insertStmt->bindParam(':type', $type, PDO::PARAM_INT);
		    $insertStmt->bindParam(':units', $units, PDO::PARAM_STR);
		    $insertStmt->bindParam(':price', $price);
		    $insertStmt->bindParam(':mrp', $mrp);
		    $insertStmt->execute();

 

        $stmt = $DB_con->prepare('UPDATE products SET parentid = :parentid, tabledesc = :tabledesc, type=:type,ptype=:ptype,container=:container,moq=:moq, maincat=:maincat,   name=:name,  img=:img, description=:description,  descr=:descr,  metatitle=:metatitle, metatag=:metatag, metadescription=:metadescription , shortdescription=:shortdescription,  price=:price

         WHERE id=:id');
   
         	$stmt->bindParam(':parentid',$parentid);  
         	$stmt->bindParam(':tabledesc',$tabledesc);  

         	$stmt->bindParam(':type',$type);   
         	$stmt->bindParam(':ptype',$ptype);   
         	$stmt->bindParam(':container',$container);   
         	$stmt->bindParam(':moq',$moq);   

         	$stmt->bindParam(':maincat',$maincat);   
            $stmt->bindParam(':name',$name);    
            $stmt->bindParam(':img',$img); 
            $stmt->bindParam(':description',$description);    
            $stmt->bindParam(':descr',$descr);   
            $stmt->bindParam(':metatag',$metatag);   
            $stmt->bindParam(':metatitle',$metatitle);    
            $stmt->bindParam(':metadescription',$metadescription);    
            $stmt->bindParam(':shortdescription',$shortdescription);  
            $stmt->bindParam(':price',$price);    

            $stmt->bindParam(':id',$id);

            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                 window.location.href='productsview.php';
                </script>
                <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }
        
        }
        
                        
    }
    
?>




					<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >

                               
						
							<div class="form-group">
								<label for="one" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-3">
                                    <input type="hidden" name="id"   value="<?php echo $_GET['edit_id']; ?>" >
									<input type="text" name="name" class="form-control" id="one"   value="<?php echo $name; ?>" >
								</div>


							 
								<div class="col-sm-3">
									 
								</div>


							</div>


							<div class="form-group">
								<label for="three" class="col-sm-3 control-label">Category</label>
								<div class="col-sm-3"> 

								<select name="maincat" id="three" class="form-control"> 
								    <?php
								    include "db.php";

								    $result = mysqli_query($con, "SELECT * FROM menu WHERE parent_id = 0 AND status = '1'");
								    while ($row = mysqli_fetch_array($result)) {
								        $selected = ($row['menu_id'] == $maincat) ? 'selected' : '';
								        echo '<option value="' . $row['menu_id'] . '" ' . $selected . '>' . $row['menu_name'] . '</option>';
								    }
								    ?>
								</select> 
							
								</div> 
                               
                                <div class="col-sm-3">
                                   
                                </div>

								</div>

 
							<div class="form-group">
								<label for="three" class="col-sm-3 control-label">  Display as a Product / Child </label>
								<div class="col-sm-3"> 

								<select name="parentid" id="parentid" class="form-control">
    <option value="0">Display as a Product</option>
    <?php
    include "db.php";

    // assume $parentid is coming from your form/db record
    $result = mysqli_query($con, "SELECT * FROM products WHERE parentid = 0");
    while ($row = mysqli_fetch_assoc($result)) {
        $selected = ($row['id'] == $parentid) ? 'selected' : '';
        echo '<option value="' . $row['id'] . '" ' . $selected . '>' . htmlspecialchars($row['name']) . '</option>';
    }
    ?>
</select>

									</div>
								<div class="col-sm-3">
								 
								</div>
								</div>




							<div class="form-group">
							
								<label for="four" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-3">   
									<img src="../images/products/<?php echo $img; ?>" height="70" width="150" />
									<input type="file" id="four" name="user_image"> 
									<p class="help-block">Image should be 1000 x 1000 in pixels</p>
								</div>

								<div class="col-sm-3">							 
								</div>

							</div>

						  
						 
							<div class="form-group">
								    <label for="tabledesc" class="col-sm-3 col-form-label">Table Description (Eg: Origin : India , Purity : 95% ...)</label>

								<div class="col-sm-9">
									<textarea class="form-control" name="tabledesc" id="tabledesc" > <?php echo $tabledesc; ?></textarea>
								</div>
							</div>


                            <div class="form-group">
                                <label for="seventeen" class="col-sm-3 control-label">Short Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="shortdescription" id=" " > <?php echo $shortdescription; ?> </textarea>
                                </div>
                            </div>

 

							<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
								<textarea class="form-control" name="description" id="text"   ><?php echo $description; ?></textarea>  

    							 <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#text'))
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                                </script>
								</div>
							</div>


                            <div class="form-group">
                                <label for="text2" class="col-sm-3 control-label">Long Description</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="descr" id="text2"  ><?php echo $descr; ?> </textarea>  

    <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#text2'))
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                                </script>

                                </div>
                            </div>
 

  


						<div class="form-group">
								<label for="price" class="col-sm-3 control-label">Price     </label>
								<div class="col-sm-3">
									<input type="text" name="price" class="form-control" id="price"   value="<?php echo $price; ?>">
								</div>


								<label for="sixteen" class="col-sm-3 control-label"> Types   </label>
								<div class="col-sm-3">
									 <input type="text" name="type" class="form-control" id="type"   value="<?php echo $type; ?>">
								</div>


							</div>


						<div class="form-group">
								<label for="price" class="col-sm-3 control-label"> Packaging type     </label>
								<div class="col-sm-3">
									<input type="text" name="ptype" class="form-control" id="ptype"   value="<?php echo $ptype; ?>">
								</div>


								<label for="sixteen" class="col-sm-3 control-label"> Load in 40/20FT container    </label>
								<div class="col-sm-3">
									 <input type="text" name="container" class="form-control" id="container"   value="<?php echo $container; ?>">
								</div>


							</div>


						<div class="form-group">
								<label for="price" class="col-sm-3 control-label"> MOQ     </label>
								<div class="col-sm-3">
									<input type="text" name="moq" class="form-control" id="moq"   value="<?php echo $moq; ?>">
								</div>


								<label for="sixteen" class="col-sm-3 control-label">     </label>
								<div class="col-sm-3">
								 
								</div>


							</div>

 


						<div class="form-group">
								<label for="fifteen" class="col-sm-3 control-label">Meta Title</label>
								<div class="col-sm-3">
									<input type="text" name="metatitle" class="form-control" id="fifteen"   value="<?php echo $metatitle; ?>">
								</div>


								<label for="sixteen" class="col-sm-3 control-label">Meta Tag</label>
								<div class="col-sm-3">
									<input type="text" name="metatag" class="form-control" id="sixteen"   value="<?php echo $metatag; ?>">
								</div>


							</div>


							<div class="form-group">
								<label for="seventeen" class="col-sm-3 control-label">Meta Description</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="metadescription" id="seventeen" > <?php echo $metadescription; ?></textarea>
								</div>
							</div> 
  

							<div class="form-group margin-bottom-0">
									<label for="" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">  

<input type="submit" name="btn_save_updates" value="Update" class="btn btn-dark btn-sm waves-effect waves-light">
   
<a href="productsview.php" class="btn btn-danger btn-sm waves-effect waves-light"> Close </a>


										</div>
							</div>


						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white --> 







<?php include "moreimages.php"; ?>



















  

			</div>




















	</div>
	<!-- /.main-content --> 

 

</div><!--/#wrapper -->
	
 
 
</div>
 
	
<?php include "allscripts.php"; ?>
