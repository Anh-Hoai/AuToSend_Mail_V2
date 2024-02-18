<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category Management</h1>
    <!--            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
    <!--                For more information about DataTables, please visit the <a target="_blank"-->
    <!--                                                                           href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Category</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date created</th>
                            <th>Recent edit date</th>

                            <th>Action <a href="/category/add">
                                    <i class="fas fa-plus" style="color: green;"></i>
                                </a></th>



                        </tr>
                    </thead>
                    <?php
                    foreach ($data['category'] as $row) {
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $row['id'] ?>
                                </td>
                                <td>
                                    <?= $row['name'] ?>
                                </td>
                                <td>
                                    <?= $row['created_at'] ?>
                                </td>
                                <td>
                                    <?= $row['updated_at'] ?>
                                </td>
                             
                                <form method="post" action="">
                                    <td>
                                        <div style="margin-top: 10px;">
                                            <a href="/category/edit/?category_id=<?= $row['id'] ?>">
                                                <i class="fas fa-edit" style="color: blue; margin-right: 10px;"></i>
                                            </a>

                                            <a href="/categorydelete/?category_id=<?= $row['id'] ?>"
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