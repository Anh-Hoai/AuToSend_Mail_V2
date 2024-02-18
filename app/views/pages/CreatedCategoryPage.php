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
                <form method="post" action="/category/add" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="Category Name" class="form-label">Category Name</label>
                        <input name="category_name" type="text" class="form-control" id="productName"
                            >
                    </div>
             
                    <div class="mb-3">
                        <label for="category tilte" class="form-label">Tilte</label>
                        <input name="category_tilte" type="text" class="form-control" id="qty" aria-describedby="qtyHelp">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Complete more category</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->