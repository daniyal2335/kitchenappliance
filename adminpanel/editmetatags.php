<?php
include('query.php');
include('header.php');

$meta_tag_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$query = "SELECT * FROM meta_tags WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->execute([':id' => $meta_tag_id]);
$meta_tag = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$meta_tag) {
    echo "Meta tag not found.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];

    $update_query = "UPDATE meta_tags SET title = :title, description = :description, keywords = :keywords WHERE id = :id";
    $update_stmt = $pdo->prepare($update_query);
    $update_stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':keywords' => $keywords,
        ':id' => $meta_tag_id
    ]);

    echo "<script>alert('updated metatags successfully');
    location.assign('metalist.php');
    </script>";
}
?>

<h1>Edit Meta Tags for <?php echo htmlspecialchars($meta_tag['page']); ?></h1>

 <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3> Edit Meta Tags</h3>
                        <form action="" method="post">
                            <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" required id="" class="form-control" placeholder="" aria-describedby="helpId"><?php echo htmlspecialchars($meta_tag['description']);  ?></textarea>
                         
                            </div>
                             <div class="form-group">
                             <label for="title">Title:</label>
                             <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($meta_tag['title']); ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div> 
                            <div class="form-group">
                            <label for="keywords">Keywords:</label>
                            <input type="text" id="keywords" name="keywords" value="<?php echo htmlspecialchars($meta_tag['keywords']); ?>" required id="" class="form-control" placeholder="" aria-describedby="helpId">
                         
                            </div>
                            
                             <button type="submit" class="btn btn-primary">Update Meta Tags</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php
include('footer.php');
?>