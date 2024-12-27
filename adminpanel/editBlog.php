<?php 
include('query.php');
include('header.php');

if (isset($_GET['bid'])) {
    $id = $_GET['bid'];
    $query = $pdo->prepare("SELECT * FROM blogs WHERE id = :bid");
    $query->bindParam(':bid', $id);
    $query->execute();
    $blog = $query->fetch(PDO::FETCH_ASSOC);
    
    if (!$blog) {
        die("Blog not found.");
    }
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center">
            <h3>Edit Blog</h3>
            <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="utitle" value="<?php echo isset($blog['title']) ? htmlspecialchars($blog['title']) : ''; ?>" class="form-control" placeholder="Enter blog title" required>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea name="udescription" class="form-control" placeholder="Enter blog description" required><?php echo isset($blog['description']) ? htmlspecialchars($blog['description']) : ''; ?></textarea>
    </div>
    <div class="form-group">
        <label for="">Sub Description</label>
        <input type="text" name="usub_description" value="<?php echo isset($blog['sub_description']) ? htmlspecialchars($blog['sub_description']) : ''; ?>" class="form-control" placeholder="Enter short sub description" required>
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="uimage" class="form-control">
        <img src="img/<?php echo isset($blog['image_path']) ? htmlspecialchars($blog['image_path']) : ''; ?>" height="100px" alt="Current Image">
    </div>
    <button type="submit" name="updateBlog" class="btn btn-primary">Update Blog</button>
</form>

        </div>
    </div>
</div>

 
<?php
include('footer.php');  // Footer file include karte hain
?>
