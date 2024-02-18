<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add products</h1>
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
                <form method="post" action="/product/add" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input name="product_name" type="text" class="form-control" id="productName"
                            aria-describedby="productNameHelp">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input name="product_price" type="number" class="form-control" id="price"
                            aria-describedby="priceHelp" min="0" step="any">
                    </div>
                    <div class="mb-3">
                        <?php
                        foreach ($data['category'] as $row) {
                            ?>
                            <label for="title" class="form-label">Category</label>
                            <select name="category_id" class="form-control" id="title" aria-describedby="titleHelp">
                                <option value="">Select a category</option> <!-- Option mặc định với giá trị rỗng -->
                                <option value="<?= $row['id'] ?>">
                                    <?= $row['name'] ?>
                                </option>
                                <!-- Add more options as needed -->
                            </select>

                            <?php
                        }
                        ?>
                    </div>



                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input name="product_qty" type="text" class="form-control" id="qty" aria-describedby="qtyHelp">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="product_title" type="text" class="form-control" id="title"
                            aria-describedby="titleHelp">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image URL</label>
                        <input name="product_img" type="file" class="form-control" id="img" aria-describedby="imgHelp">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Complete more products</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->