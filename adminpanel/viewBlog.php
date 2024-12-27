<?php
include('query.php');
include('header.php');
?>
<style>
    html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

.container-fluid {
    flex: 1; /* Ensures the container takes up available height */
}

footer {
    background-color: #f8f9fa;
    text-align: center;
    padding: 10px;
    position: relative;
    bottom: 0;
    width: 100%;
}

</style>
<!-- Main Content Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-12">
            <h3 class="mb-4">View Blogs</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Sub Description</th>
                            <th>Image</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = $pdo->query("SELECT * FROM blogs");
                        $allBlogs = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($allBlogs as $blog) {
                        ?>
                            <tr>
                                <td><?php echo htmlspecialchars($blog['title']); ?></td>
                                <td><?php echo htmlspecialchars($blog['description']); ?></td>
                                <td><?php echo htmlspecialchars($blog['sub_description']); ?></td>
                                <td><img height="50px" src="img/<?php echo htmlspecialchars($blog['image_path']); ?>" alt="Blog Image"></td>
                                <td class="text-center">
                                    <a href="editBlog.php?bid=<?php echo $blog['id']; ?>" class="btn btn-info">Edit</a>
                                </td>
                                <td class="text-center">
                                    <a href="?bdid=<?php echo $blog['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->

<?php
include('footer.php');
?>
