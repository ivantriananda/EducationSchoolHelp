<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Reg Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <?php include 'session.php';?>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-20" href="regAdministrator.php">Registration Administrator</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registschool.php">Registration School</a>
                                    <a class="nav-link" href="regAdministrator.php">Registration Administrator</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu Request Submit
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="reqsubmit.php">Request Submit</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Profile
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Profile Data
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="Regvolunteer.php">Registration Volunteer</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <div class="container-fluid px-4">
                    <!-- BODY-->
                    <content>
                        <form action="regAdministratorp.php?ids=<?php echo $_GET['id'];?>" method="post">
                            <!-- Username-->
                            <div class="form-group row">
                                <label for="Username" class="col-4 col-form-label">Username</label> 
                                <div class="col-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                        </div> 
                                        <input id="Username" name="Username" placeholder="Username" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Password-->
                            <div class="form-group row">
                                <label for="Password" class="col-4 col-form-label">Password</label> 
                                <div class="col-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                            </div>
                                        </div> 
                                        <input id="Password" name="Password" placeholder="Passwords" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Fullname-->
                            <div class="form-group row">
                                <label for="Fullname" class="col-4 col-form-label">Fullname</label> 
                                <div class="col-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-indent"></i>
                                            </div>
                                        </div> 
                                        <input id="text" name="Fullname" placeholder="Fullname" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Email-->
                            <div class="form-group row">
                                <label for="Email" class="col-4 col-form-label">Email</label> 
                                <div class="col-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div> 
                                        <input id="Email" name="Email" placeholder="Email" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Phone-->
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="Phone">Phone</label> 
                                <div class="col-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-phone-square"></i>
                                            </div>
                                        </div> 
                                        <input id="Phone" name="Phone" placeholder="Phone" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- StaffID-->
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="ID">Staff ID</label> 
                                <div class="col-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </div> 
                                        </div>
                                        <input id="iD" name="ID" placeholder="StaffID" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Position-->
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="text">Position</label> 
                                <div class="col-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div> 
                                        <input id="text" name="text" placeholder="Position" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </content>
                </div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>