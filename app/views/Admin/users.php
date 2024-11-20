<body>
<li class="nav-item menu-items mt-5">
    <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
        <span class="menu-title">Dashboard</span>
    </a>
</li>
<li class="nav-item menu-items">

    <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="">Typography</a></li>
        </ul>
    </div>
</li>
<li class="nav-item menu-items">
    <a class="nav-link" href="">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
        <span class="menu-title">Orders</span>
    </a>
</li>
<li class="nav-item menu-items">
    <a class="nav-link" href="../">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
        <span class="menu-title">Users</span>
    </a>
</li>
<li class="nav-item menu-items">
    <a class="nav-link" href="../cars">
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <!--                                                <div class="form-check form-check-muted m-0">-->
                                            <!--                                                    <label class="form-check-label">-->
                                            <!--                                                        <input type="checkbox" class="form-check-input">-->
                                            <!--                                                    </label>-->
                                            <!--                                                </div>-->
                                        </th>

                                        <th> User </th>
                                        <!--                                            <th> User ID </th>-->
                                        <th> Email </th>
                                        <th> Phone </th>
                                        <th> Start Date </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($users as $key => $user): ?>
                                        <tr>
                                            <td>
                                                <!--                                                        <div class="form-check form-check-muted m-0">-->
                                                <!--                                                            <label class="form-check-label">-->
                                                <!--                                                                <input type="checkbox" class="form-check-input">-->
                                                <!--                                                            </label>-->
                                                <!--                                                        </div>-->
                                            </td>
                                            <td>
                                                <img src="<?php echo $profile_picture; ?>" alt="image" />
                                                <span class="pl-2"> <?php echo $user['username']?></span>
                                            </td>
<!--                                            <td>--><?php //echo $user['username']?><!--</td>-->
                                            <td><?php echo $user['user_id']?> </td>
                                            <td><?php echo $user['email']?> </td>
                                            <td><?php echo $user['phone']?> </td>
                                            <td> <?php echo $user['created_at']?>  </td>
                                            <td>
                                                <button class="badge badge-outline-success" >Delete</button>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
</body>
