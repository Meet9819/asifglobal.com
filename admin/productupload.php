 


     <?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

        include "db.php";

        if(isset($_POST['submit']))
        {
           
            $file=$_FILES['image']['tmp_name'];
            $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name= addslashes($_FILES['image']['name']);

            move_uploaded_file($_FILES["image"]["tmp_name"],"../images/products/" . $_FILES["image"]["name"]);

             $img=$_FILES["image"]["name"];


            $file2=$_FILES['imgdesc']['tmp_name'];
            $imgdesc= addslashes(file_get_contents($_FILES['imgdesc']['tmp_name']));
            $imgdesc_name= addslashes($_FILES['imgdesc']['name']);

            move_uploaded_file($_FILES["imgdesc"]["tmp_name"],"../images/products/" . $_FILES["imgdesc"]["name"]);

             $img2=$_FILES["imgdesc"]["name"];


            $id=$_POST['id'];  

            
            $maincat          = !empty($_POST['maincat']) ? $_POST['maincat'] : 0;
              
           
            $name             = !empty($_POST['name']) ? $_POST['name'] : '';
            
            $price            = !empty($_POST['price']) ? $_POST['price'] : 0;
           
            $shortdescription = !empty($_POST['shortdescription']) ? $_POST['shortdescription'] : '';
            $description      = !empty($_POST['description']) ? $_POST['description'] : '';
            $descr            = !empty($_POST['descr']) ? $_POST['descr'] : '';
            
            $metatag          = !empty($_POST['metatag']) ? $_POST['metatag'] : '';
            $metatitle        = !empty($_POST['metatitle']) ? $_POST['metatitle'] : '';
            $metadescription  = !empty($_POST['metadescription']) ? $_POST['metadescription'] : '';
            $status           = !empty($_POST['status']) ? $_POST['status'] : 0;
             

            
        $type   = !empty($_POST['type']) ? $_POST['type'] : '';
        $ptype   = !empty($_POST['ptype']) ? $_POST['ptype'] : '';
        $container   = !empty($_POST['container']) ? $_POST['container'] : '';
        $moq   = !empty($_POST['moq']) ? $_POST['moq'] : '';
 
            $insert = "INSERT INTO products ( type,ptype,container,moq,  maincat, img,  name,  price,  shortdescription, description, descr,  metatag, metatitle, metadescription, status) VALUES (  '$type', '$ptype', '$container', '$moq',       '$maincat', '$img',  '$name',  '$price',   '$shortdescription', '$description', '$descr',  '$metatag', '$metatitle', '$metadescription', '$status' )";
 

               $query =  mysqli_query($con,$insert) or die(mysqli_error($con));

                
        ?>
                <script>
                alert('Successfully Inserted...Your data has been Submitted');
              window.location.href='productsview.php';
                </script>
                <?php

                   
    }
?>



