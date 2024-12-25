<?php
include('query.php');
include('header.php');
?>

<h1 class="text align-centre">Manage Meta Tags</h1>
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items justify-content-center mx-0">
        <div class="col-md-6">
            <h3>Meta view</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Page</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Keywords</th>
                        <th>Actions</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                 
                        $query = $pdo->query("SELECT * FROM meta_tags");
                        $meta_tags_list = $query->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach ($meta_tags_list as $meta_tag){
                    ?>
                        <tr>
                            <td><?php echo $meta_tag['page']; ?></td>
                            <td><?php echo $meta_tag['title']; ?></td>
                            <td><?php echo htmlspecialchars($meta_tag['description']); ?></td>
                            <td><?php echo htmlspecialchars($meta_tag['keywords']); ?></td>
                            <td>
                                <a class="btn btn-primary" href="editmetatags.php?id=<?php echo $meta_tag['id']; ?>">Edit</a>
                            </td>
                        </tr>
                    <?php 
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
