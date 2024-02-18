
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>update my profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{margin-top:20px;
            color: #9b9ca1;
        }
        .bg-secondary-soft {
            background-color: rgba(208, 212, 217, 0.1) !important;
        }
        .rounded {
            border-radius: 5px !important;
        }
        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }
        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }
        .file-upload .square {
            height: 250px;
            width: 250px;
            margin: auto;
            vertical-align: middle;
            border: 1px solid #e5dfe4;
            background-color: #fff;
            border-radius: 5px;
        }
        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(208, 212, 217, 0.5) !important;
        }
        .btn-success-soft {
            color: #28a745;
            background-color: rgba(40, 167, 69, 0.1);
        }
        .btn-danger-soft {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 1rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.6;
            color: #29292e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e5dfe4;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 5px;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="my-5 text-lg-center">
                <h3>Update Profile Admin</h3>
                <hr>
            </div>

            <form class="file-upload" method="post" action="/updateprofileadmin" enctype="multipart/form-data">
                <a class="btn btn-close" href="/profileadmin"></a>
                <div class="row mb-5 gx-5">


                    <div class="col-xxl-8 mb-5 mb-xxl-0">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="mb-4 mt-0">Contact detail</h4>
                                <input type="hidden" name="id_users" value="<?php echo $_SESSION['id_users']?>" >
                                <?php
                                    foreach ($data['users'] as $row) {
                                        ?>
                                <div class="col-md-12">
                                    <label class="form-label">Full Name *</label>
                                    <input name="username" type="text" class="form-control" placeholder aria-label="First name" value="<?= $row['usersname'] ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Date</label>
                                    <input name="date" type="date" class="form-control" placeholder aria-label="Date user" value="<?= $row['date'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email *</label>
                                    <input name="email" type="email" class="form-control" id="inputEmail4" value="<?= $row['email'] ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Address *</label>
                                    <input name="address" type="text" class="form-control" placeholder aria-label="Address" value="<?= $row['address'] ?>">
                                </div>
                                <?php
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="mb-4 mt-0 text-center">Upload your profile photo</h4>
                                <div class="text-center">
   
                                    <input type="file" name="avatar" id="customFile" accept="image/*"hidden>
                                    <!-- <input type="file" id="customFile" name="file" hidden> -->
                                    <label class="btn btn-success-soft btn-block" for="customFile">Upload</label>
                                    <button type="button" class="btn btn-danger-soft">Remove</button>

                                    <p class="text-muted mt-3 mb-0"><span class="me-1">Note:</span>Minimum size 300px x 300px</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap-3 d-md-flex justify-content-md-end text-center">
                    <a href="/forgot" class="btn btn-danger btn-lg">Forgot password</a>
                    <button type="submit" class="btn btn-primary">Update profile</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>