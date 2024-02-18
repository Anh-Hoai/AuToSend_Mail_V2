<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Product Management</h1>
    <!--            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
    <!--                For more information about DataTables, please visit the <a target="_blank"-->
    <!--                                                                           href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action <a href="/product/add">
                                    <i class="fas fa-plus" style="color: green;"></i>
                                </a></th>



                        </tr>
                    </thead>
                    <?php
                    foreach ($data['list'] as $row) {
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $row['product_id'] ?>
                                </td>
                                <td>
                                    <?= $row['product_name'] ?>
                                </td>
                                <td>
                                    <?= $row['product_price'] ?>
                                </td>
                                <td>
                                    <?= $row['product_qty'] ?>
                                </td>
                                <td>
                                    <?= $row['product_title'] ?>
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <img class="rounded-circle" src="<?= ASSETS ?>/hinhanhpet/<?= $row['product_img'] ?>"
                                        alt="Admin" style="max-width: 5%; max-height: 5%; display: inline-block;">
                                </td>
                                <form method="post" action="">
                                    <td>
                                        <div style="margin-top: 10px;">
                                            <a href="/product/update/?id=<?= $row['product_id'] ?>">
                                                <i class="fas fa-edit" style="color: blue; margin-right: 10px;"></i>
                                            </a>

                                            <a href="/deleteproduct/?id=<?= $row['product_id'] ?>"
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                                                <i class="fas fa-trash-alt" style="color: red;"></i>
                                            </a>
                                        </div>
                                    </td>

                                </form>

                            </tr>

                        </tbody>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->