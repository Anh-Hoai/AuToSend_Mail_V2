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
                    foreach ($data['getcategory'] as $rowcategory) {
                        ?>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            
                            <input value="<?=$rowcategory['name']?>" name="category_name" type="text" class="form-control"
                                id="productName" aria-describedby="productNameHelp">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Title</label>
                            <input value="<?=$rowcategory['title']?>" name="category_tilte" type="text" class="form-control" id="price"
                                aria-describedby="priceHelp" min="0" step="any">
                        </div>
             

            
                        <?php
                    }
                    ?>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Complete more category</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->