

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Users Management</h1>
<!--            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
<!--                For more information about DataTables, please visit the <a target="_blank"-->
<!--                                                                           href="https://datatables.net">official DataTables documentation</a>.</p>-->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <?php
                                    foreach ($data['list'] as $row) {
                                        ?>
                            <tbody>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['usersname'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['date'] ?></td>
                                <td><?= $row['address'] ?></td>
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


