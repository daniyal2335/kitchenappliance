<?php
include('dbcon.php');

//add category
if(isset($_POST['addCategory'])){
    $cName=$_POST['cName'];
    $sales=$_POST['sale'];
    $price=$_POST['pPrice'];
    $cImageName=$_FILES['cImage']['name'];
    $cImageTmpName=$_FILES['cImage']['tmp_name'];
    $extension=pathinfo($cImageName,PATHINFO_EXTENSION);
    $destination="img/".$cImageName;
    if($extension == "jpg"|| $extension == "png"|| $extension == "jpeg" || $extension == "webp"  ){
        if(move_uploaded_file($cImageTmpName,$destination)){
            $query=$pdo->prepare("insert into category(name,sale,price,image)values(:cName, :cSale, :cPrice, :cImage)");
            $query->bindParam('cName',$cName);
            $query->bindParam('cSale',$sales);
            $query->bindParam('cPrice',$price);
            $query->bindParam('cImage',$cImageName);
            $query->execute();
            echo "<script>alert('Category added successfully');
        location.assign('index.php');
        </script>";
        }
    }

}
//add brands
if(isset($_POST['addBrands'])){
    $cName=$_POST['bName'];
    $cDes=$_POST['bDes'];
    $sDes=$_POST['bsDes'];
    $cImageName=$_FILES['bImage']['name'];
    $cImageTmpName=$_FILES['bImage']['tmp_name'];
    $extension=pathinfo($cImageName,PATHINFO_EXTENSION);
    $destination="img/".$cImageName;
    if($extension == "jpg"|| $extension == "png"|| $extension == "jpeg"|| $extension == "avif"){
        if(move_uploaded_file($cImageTmpName,$destination)){
            $query=$pdo->prepare("insert into brands(name,des,subdes,image)values(:cName, :cDes,:sDes, :cImage)");
            $query->bindParam('cName',$cName);
            $query->bindParam('cDes',$cDes);
            $query->bindParam('sDes',$sDes);
            $query->bindParam('cImage',$cImageName);
            $query->execute();
            echo "<script>alert('Brands added successfully');
        location.assign('index.php');
        </script>";
        }
    }


}
// Add Arrive Brands
if (isset($_POST['addArriveBrands'])) {
    $abName = $_POST['abName'];
    $abDes = $_POST['abDes'];
    $abImageName = $_FILES['abImage']['name'];
    $abImageTmpName = $_FILES['abImage']['tmp_name'];
    $extension = pathinfo($abImageName, PATHINFO_EXTENSION);
    $destination = "img/" . $abImageName;

    if ($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "avif") {
        if (move_uploaded_file($abImageTmpName, $destination)) {
            $query = $pdo->prepare("INSERT INTO `arrived brands` (name, des, image) VALUES (:abName, :abDes, :abImage)");
            $query->bindParam(':abName', $abName);
            $query->bindParam(':abDes', $abDes);
            $query->bindParam(':abImage', $abImageName); 

            if ($query->execute()) {
                echo "<script>alert('Arrive Brands added successfully');
                location.assign('index.php');
                </script>";
            } else {
                echo "<script>alert('Error adding Arrive Brands.');</script>";
            }
        } 
    } 
}

//update category
if(isset($_POST['updateCategory'])){
    $id=$_GET['cid'];
    $cName=$_POST['cName'];
    $sales=$_POST['sale'];
    $price=$_POST['pPrice'];
    $query=$pdo->prepare("update category set name=:uName,sale=:uSale,price=:uPrice where id=:cid");
    if(isset($_FILES['cImage'])){
        $cImageName=$_FILES['cImage']['name'];
        $cImageTmpName=$_FILES['cImage']['tmp_name'];
        $extension=pathinfo($cImageName,PATHINFO_EXTENSION);
        $destination="img/".$cImageName;
        if($extension == "jpg"|| $extension == "png" || $extension == "jpeg" || $extension == "webp"){
            if(move_uploaded_file($cImageTmpName,$destination)){
                $query=$pdo->prepare("update category set name=:uName,sale=:uSale,price=:uPrice,image=:uImage where id=:cid");
                $query->bindParam('uImage',$cImageName);  
              

    }
}
            $query->bindParam('uSale',$sales);  
            $query->bindParam('uPrice',$price); 
            $query->bindParam('cid',$id);
            $query->bindParam('uName',$cName);
            $query->execute();
            echo "<script>alert('Category update successfully');
        location.assign('viewCategory.php');
        </script>";
        }
    }
    
//update Arrive Brands
if(isset($_POST['editArriveBrands'])){
    $id=$_GET['abid'];
    $cName=$_POST['abName'];
    $cDes=$_POST['abDes'];
    $query=$pdo->prepare("update `arrived brands` set name=:uName,des=:udes where id=:cid");
    if(isset($_FILES['abImage'])){
        $cImageName=$_FILES['abImage']['name'];
        $cImageTmpName=$_FILES['abImage']['tmp_name'];
        $extension=pathinfo($cImageName,PATHINFO_EXTENSION);
        $destination="img/".$cImageName;
        if($extension == "jpg"|| $extension == "png"|| $extension == "jpeg"){
            if(move_uploaded_file($cImageTmpName,$destination)){
                $query=$pdo->prepare("update `arrived brands` set name=:uName,des=:udes,image=:uImage where id=:cid");
                $query->bindParam('uImage',$cImageName);  
    }
}
   
            $query->bindParam('cid',$id);
            $query->bindParam('uName',$cName);
            $query->bindParam('udes',$cDes);
            $query->execute();
            echo "<script>alert('Arrived update successfully');
        location.assign('viewArriveBrand.php');
        </script>";
        }
    }
    //delete catgeory
if(isset($_GET['cdid'])){
    $did=$_GET['cdid'];
    $query=$pdo->prepare("Delete from category where id=:did");
    $query->bindParam('did',$did);
    $query->execute();
    echo "<script>alert('delete category successfully');
    location.assign('viewCategory.php');
    </script>";

}
    //delete arrive brand
    if(isset($_GET['abdid'])){
        $did=$_GET['abdid'];
        $query=$pdo->prepare("Delete from `arrived brands` where id=:did");
        $query->bindParam('did',$did);
        $query->execute();
        echo "<script>alert('Delete arrive brand  successfully');
        location.assign('viewArriveBrand.php');
        </script>";
    
    }
//update category
if(isset($_POST['updateBrands'])){
    $id=$_GET['bid'];
    $cName=$_POST['bName'];
    $cDes=$_POST['bDes'];
    $bsDes=$_POST['bsDes'];
    $query=$pdo->prepare("update brands set name=:uName,des=:uDes,subdes=:sbdes where id=:cid");
    if(isset($_FILES['bImage'])){
        $cImageName=$_FILES['bImage']['name'];
        $cImageTmpName=$_FILES['bImage']['tmp_name'];
        $extension=pathinfo($cImageName,PATHINFO_EXTENSION);
        $destination="img/".$cImageName;
        if($extension == "jpg"|| $extension == "png"|| $extension == "jpeg"){
            if(move_uploaded_file($cImageTmpName,$destination)){
                $query=$pdo->prepare("update brands set name=:uName,des=:uDes,subdes=:sbdes,image=:uImage where id=:cid");
                $query->bindParam('uImage',$cImageName);  
    }
}
   
            $query->bindParam('cid',$id);
            $query->bindParam('uName',$cName);
            $query->bindParam('uDes',$cDes);
            $query->bindParam('sbdes',$bsDes);

            $query->execute();
            echo "<script>alert('Brands update successfully');
        location.assign('viewBrand.php');
        </script>";
        }
    }
    //delete brands
if(isset($_GET['bdid'])){
    $did=$_GET['bdid'];
    $query=$pdo->prepare("delete from brands where id=:did");
    $query->bindParam('did',$did);
    $query->execute();
    echo "<script>alert('delete brands successfully');
    location.assign('viewBrand.php');
    </script>";

}
//addproduct
if(isset($_POST['addProduct'])){
    $pName=$_POST['pName'];
    $pDes=$_POST['pDes'];
    $price=$_POST['pPrice'];
    $qty=$_POST['pQty'];
    $cid=$_POST['cId'];
    $sales=$_POST['sale'];
    $pImageName=$_FILES['pImage']['name'];
    $pImageTmpName=$_FILES['pImage']['tmp_name'];
    $extension=pathinfo($pImageName,PATHINFO_EXTENSION);
    $destination="img/".$pImageName;
    if($extension == "jpg"|| $extension == "png"|| $extension == "jpeg" || $extension == "webp"){
        if(move_uploaded_file($pImageTmpName,$destination)){
            $query=$pdo->prepare("insert into products(name,des,prize,quantity,image,c_id,sale_percentage)values(:pName, :pDes, :pPrz, :pQty, :pImage, :cid, :psale)");
            $query->bindParam('pName',$pName);
            $query->bindParam('pDes',$pDes);
            $query->bindParam('pPrz',$price);
            $query->bindParam('pQty',$qty);
            $query->bindParam('pImage',$pImageName);
            $query->bindParam('cid',$cid);
            $query->bindParam('psale',$sales);
            $query->execute();
            echo "<script>alert('Product added successfully');
        location.assign('index.php');
        </script>";
        }
    }

}
//update product
if(isset($_POST['updateProduct'])){
    $id=$_GET['pid'];
    $Name=$_POST['pName'];
    $Des=$_POST['pDes'];
    $Price=$_POST['pPrice'];
    $Qty=$_POST['pQty'];
    $cId=$_POST['cId'];
    $sales=$_POST['sale'];
    $query=$pdo->prepare("update products set name=:uName,des=:uDes,prize=:uPrice,quantity=:uQty,c_id=:cId,sale_percentage=:sale where id=:pid");
    if(isset($_FILES['pImage'])){
        $pImageName=$_FILES['pImage']['name'];
        $pImageTmpName=$_FILES['pImage']['tmp_name'];
        $extension=pathinfo($pImageName,PATHINFO_EXTENSION);
        $destination="img/".$pImageName;
        if($extension == "jpg"|| $extension == "png"|| $extension == "jpeg" || $extension == "webp"){
            if(move_uploaded_file($pImageTmpName,$destination)){
                $query=$pdo->prepare("update products set name=:uName,des=:uDes,prize=:uPrice,quantity=:uQty,c_id,sale_percentage=:sale=:cId,
                image=:uImage where id=:pid");
                $query->bindParam('uImage',$pImageName);  
    }
}
   
            $query->bindParam('pid',$id);
            $query->bindParam('uName',$Name);
            $query->bindParam('uDes',$Des);
            $query->bindParam('uPrice',$Price);
            $query->bindParam('uQty',$Qty);
            $query->bindParam('cId',$cId);
            $query->bindParam('sale',$sales);
            $query->execute();
            echo "<script>alert(' update product successfully');
        location.assign('viewProduct.php');
        </script>";
        }
    }
     //delete catgeory
if(isset($_GET['pdid'])){
    $pdid=$_GET['pdid'];
    $query=$pdo->prepare("delete from products where id=:pdid");
    $query->bindParam('pdid',$pdid);
    $query->execute();
    echo "<script>alert('delete product successfully');
    location.assign('viewProduct.php');
    </script>";

}
//added to wishlist
if (isset($_SESSION['user_id'])) {
    if (isset($_POST['product_id'])) {
      $user_id = $_SESSION['user_id'];
      $product_id = $_POST['product_id'];
  
      // Check if the product is already in the wishlist
      $stmt = $pdo->prepare("SELECT * FROM wishlist WHERE user_id = ? AND product_id = ?");
      $stmt->execute([$user_id, $product_id]);
  
      if ($stmt->rowCount() == 0) {
        // Insert product into the wishlist
        $stmt = $pdo->prepare("INSERT INTO wishlist (user_id, product_id) VALUES (?, ?)");
        $stmt->execute([$user_id, $product_id]);
        echo "Item added to your wishlist!";
      } else {
        echo "Item is already in your wishlist.";
      }
    } else {
      echo "Product ID is required.";
    }
//   } else {
//     echo "Please log in to add items to your wishlist.";
  }


//contact form

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and validate form data with isset checks
    $name = isset($_POST['ContName']) ? $_POST['ContName'] : '';
    $email = isset($_POST['ContEmail']) ? $_POST['ContEmail'] : '';
    $subscribe = isset($_POST['ContSubscribe']);

    $errors = [];

    // Basic validation
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email is required.';
    }

    // If no errors, proceed with storing the data
    if (empty($errors)) {
        try {
            // Prepare SQL statement
            $query = $pdo->prepare("INSERT INTO contacts (name, email, subscribe) VALUES (:name, :email, :subscribe)");
            $query->bindParam(':name', $name);
            $query->bindParam(':email', $email);
            $query->bindParam(':subscribe', $subscribe);
            $query->execute();

            $success_message = "Thank you for subscribing!";

        } catch (PDOException $e) {
            $errors[] = "Error: " . $e->getMessage();
        }
    }
}

?>






