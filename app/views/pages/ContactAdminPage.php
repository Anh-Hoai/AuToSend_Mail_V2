<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Contact Management</h1>
    <!--            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
    <!--                For more information about DataTables, please visit the <a target="_blank"-->
    <!--                                                                           href="https://datatables.net">official DataTables documentation</a>.</p>-->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Contact</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Content</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($data['listcontact'] as $row) {
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $row['contact_id'] ?>
                                </td>
                                <td>
                                    <?= $row['contact_name'] ?>
                                </td>
                                <td>
                                    <?= $row['contact_email'] ?>
                                </td>
                                <td>
                                    <?= $row['contact_phone'] ?>
                                </td>
                                <td>
                                    <?= $row['contact_date'] ?>
                                </td>
                                <td>
                                    <?= $row['contact_content'] ?>
                                </td>
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