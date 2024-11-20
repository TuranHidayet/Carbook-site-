<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="/assets/Admin/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/Admin/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="/assets/Admin/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/assets/Admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/Admin/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/Admin/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/Admin/css/style.css">
    <link rel="shortcut icon" href="/assets/Admin/images/favicon.png" />


</head>
<body>
<?php

$username = $_SESSION['username'] ?? 'Guest';
?>
<div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="/admin"><img src="/assets/Admin/images/logo1.jpg" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="/admin"><img src="/assets/Admin/images/logo1.jpg" style="width: 150px; height: 150px; border-radius: 50% alt="logo" /></a>

        </div>

        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="/assets/Admin/images/faces/Turan_sekil.jpeg" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">

                            <h5 class="mb-0 font-weight-normal"><?php echo $username; ?></h5>
                            <span>Admin</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item menu-items mt-5">
                <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">

                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Orders</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
                    <span class="menu-title">Cars</span>
                </a>
            </li>

        </ul>
    </nav>

    <div class="container-fluid page-body-wrapper">

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">

                    </div>
                </div>


                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">

                            <div class="card-body">
                                <h4 class="card-title">Users</h4>
                                <form class="p-4" action="/admin/cars/create" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="brand" class="form-control" placeholder="Brand" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="model" class="form-control" placeholder="Model" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="year" class="form-control" placeholder="Year" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="color" class="form-control" placeholder="Color" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" step="0.01" name="daily_price" class="form-control" placeholder="Daily Price" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" step="0.01" name="monthly_price" class="form-control" placeholder="Monthly Price" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Add Car</button>
                                </form>
                                <div class="table-responsive mt-5">

                                    <?php if (!empty($cars)): ?>
                                    <table class="table">
                                        <thead>
                                        <tr>

                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Daily Price</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($cars as $car): ?>
                                            <tr>
                                                <td><?php echo $car['brand']; ?></td>
                                                <td><?php echo ($car['model']); ?></td>
                                                <td><?php echo ($car['year']); ?></td>
                                                <td><?php echo ($car['daily_price']); ?></td>
                                                <td><img src="<?php echo \Core\Helper::getImageUrl($car['image']) ?>" alt="Car Image" width="100"></td>
                                                <td>
                                                    <a href="" class="btn btn-info">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="/admin/cars/delete?id=<?= $car['id'] ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?php else: ?>
                                    <p>Heç bir maşın tapılmadı.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Car_lab © turanhidayatov.com 2024</span>
                </div>
            </footer>
        </div>
    </div>
</div>
<script src="/assets/Admin/vendors/js/vendor.bundle.base.js"></script>
<script src="/assets/Admin/vendors/chart.js/Chart.min.js"></script>
<script src="/assets/Admin/vendors/progressbar.js/progressbar.min.js"></script>
<script src="/assets/Admin/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="/assets/Admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/assets/Admin/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="/assets/Admin/js/off-canvas.js"></script>
<script src="/assets/Admin/js/hoverable-collapse.js"></script>
<script src="/assets/Admin/js/misc.js"></script>
<script src="/assets/Admin/js/settings.js"></script>
<script src="/assets/Admin/js/todolist.js"></script>
<script src="/assets/Admin/js/dashboard.js"></script>

<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
</body>
