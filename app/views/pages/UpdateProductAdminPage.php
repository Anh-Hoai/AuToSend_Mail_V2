<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Update products</h1>
    <!--            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
    <!--                For more information about DataTables, please visit the <a target="_blank"-->
    <!--                                                                           href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                <form method="post" action="" enctype="multipart/form-data">
                <?php
                    foreach ($data['getproduct'] as $rowproduct) {
                        ?>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            
                            <input value="<?=$rowproduct['product_name']?>" name="product_name" type="text" class="form-control"
                                id="productName" aria-describedby="productNameHelp">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input value="<?=$rowproduct['product_price']?>" name="product_price" type="number" class="form-control" id="price"
                                aria-describedby="priceHelp" min="0" step="any">
                        </div>
                        <?php
                        foreach ($data['category'] as $categoryRow) {
                            ?>
                            <label for="title" class="form-label">Category</label>
                            <select name="category_id" class="form-control" id="title" aria-describedby="titleHelp">
                                <option value="">Select a category</option> <!-- Option mặc định với giá trị rỗng -->
                                <option value="<?= $categoryRow['id'] ?>">
                                    <?= $row['name'] ?>
                                </option>
                                <!-- Add more options as needed -->
                            </select>

                            <?php
                        }
                        ?>

                        <div class="mb-3">
                            <label for="qty" class="form-label">Quantity</label>
                            <input value="<?=$rowproduct['product_qty']?>" name="product_qty" type="text" class="form-control" id="qty" aria-describedby="qtyHelp">
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input value="<?=$rowproduct['product_title']?>" name="product_title" type="text" class="form-control" id="title"
                                aria-describedby="titleHelp">
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">Image URL</label>
                            <input value="<?=$rowproduct['product_img']?>" name="product_img" type="file" class="form-control" id="img" aria-describedby="imgHelp">
                        </div>
                        <?php
                    }
                    ?>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Complete more products</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->