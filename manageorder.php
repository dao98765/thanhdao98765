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
            <h2>Manage Order</h2>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Food</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty.</th>
                        <th scope="col">Tatol</th>
                        <th scope="col">OrderDate</th>
                        <th scope="col">Status</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1.</th>
                        <td>Mixed Pizza </td>
                        <td>10.00</td>
                        <td>2</td>
                        <td>20.00</td>
                        <td>2020-11-30
                            04:07:17
                        </td>
                        <td>
                            <a  class="text-success" href="">Delivered</a>
                        </td>
                        <td>Jana Bush</td>
                        <td>+1(562) 101-2028</td>
                        <td>tydujy@mailinator.com</td>
                        <td>Minima iure ducimus</td>
                        <td>
                        
                        <button type="button" class="btn btn-success"> Update Admin</button>  
                        
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1.</th>
                        <td>Mixed Pizza </td>
                        <td>4.00</td>
                        <td>4</td>
                        <td>16.00</td>
                        <td>2020-11-30
                            03:52:43
                        </td>
                        <td>
                            <a  class="text-success"href="">Delivered</a>
                        </td>
                        <td>Kelly Dillard</td>
                        <td>+1(908) 914-3106</td>
                        <td>fexekihor@mailinator.com</td>
                        <td>Incidunt ipsum add</td>
                        <td>
                        
                        <button type="button" class="btn btn-success"> Update Admin</button>  
                        
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3.</th>
                        <td>Sadeko Momo </td>
                        <td>6.00</td>
                        <td>3</td>
                        <td>18.00</td>
                        <td>2020-11-30
                            03:49:48
                        </td>
                        <td>
                            <a class=" text-danger " href="">Cancelled</a>
                        </td>
                        <td>Bradley Farrell</td>
                        <td>+1(567) 504-4657</td>
                        <td>zuhafiq@mailinator.com</td>
                        <td>Duis aliqua Qui lor</td>
                        <td>
                        
                        <button type="button" class="btn btn-success"> Update Admin</button>  
                        
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