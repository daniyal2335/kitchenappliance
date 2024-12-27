<?php
include('query.php');
include('header.php');
?>
<style>
/* Added styling for description and layout */
.description {
    font-size: 14px;
    line-height: 1.5;
    color: #333;
}
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
        <div class="col-md-6">
            <h3>Product View</h3>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Sale</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $pdo->query("
                        SELECT products.*, category.name AS cName, category.id AS catId
                        FROM products 
                        INNER JOIN category ON products.c_id = category.id
                    ");
                    $allProducts = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($allProducts as $pdt) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo htmlspecialchars($pdt['name']); ?></td>
                            <td><div class="description"><?php echo htmlspecialchars($pdt['des']); ?></div></td>
                            <td><img height="50px" src="img/<?php echo htmlspecialchars($pdt['image']); ?>" alt="Product Image"></td>
                            <td><?php echo htmlspecialchars($pdt['prize']); ?></td>
                            <td><?php echo htmlspecialchars($pdt['quantity']); ?></td>
                            <td><?php echo htmlspecialchars($pdt['cName']); ?></td>
                            <td><?php echo htmlspecialchars($pdt['sale_percentage']); ?>%</td>
                            <td><a href="editProduct.php?pid=<?php echo $pdt['id']; ?>" class="btn btn-info">Edit</a></td>
                            <td><a href="?pdid=<?php echo $pdt['id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Main Content End -->

<?php
include('footer.php');
?>
