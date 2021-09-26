<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Boostraprestaurant!</title>

</head>

<body>

    <div class="admin-header">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homeadmin.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manageadmin.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="managecategory.php">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="managefood.php">Food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manageorder.php">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>
    <!-- Manage User-->
    <div class="slider-admin mybg pb-5">
        <div class="container">
            <h2>Manage Users</h2>
            <div class="mt-5">
                <button type="button" class=" btn btn-primary rounded-0">Add New User</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1.</th>
                        <td>Arsenio Leach </td>
                        <td>todowaxibo</td>
                        <td>
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success"> Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2.</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td>
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success"> Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3.</th>
                        <td>Vijay Thapa</td>
                        <td>vijaythapa</td>
                        <td>
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success"> Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4.</th>
                        <td>Administrator</td>
                        <td>admin</td>
                        <td>
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-success"> Update Admin</button>
                            <button type="button" class="btn btn-danger">Delete Admin</button>
                        </td>
                    </tr>



                </tbody>
            </table>
        </div>

    </div>

    <div id="footer-admin" class="bg-danger">
        <div class=" text-center pt-3 pb-3 text-white">
            2020 All rights reserved, Food House. Developed By-
            <a href="#" class="">
                ThanhDao
            </a>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>