<?php
include('query.php');  // Database connection ya queries ka file
include('header.php');  // Header file include karte hain (agar koi common header ho)


?>

<!-- HTML Form for adding the blog -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center">
            <h3>This is Add Blog Page</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="bName" id="" class="form-control" placeholder="" required>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="bDes" id="" class="form-control" placeholder="" required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Sub Description</label>
                    <textarea name="bsDes" id="" class="form-control" placeholder="" required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="bImage" id="" class="form-control" required>
                </div>

                <button type="submit" name="addBlog" class="btn btn-danger">Add Blog</button>
            </form>
        </div>
    </div>
</div>

<?php
include('footer.php');  // Footer file include karte hain
?>
