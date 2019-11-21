<?php
spl_autoload_register(function ($class) {
    include "class/$class.php";
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD Application</title>
</head>

<body>
    <!--Navar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
        <a class="navbar-brand" href="#">WPDoctor Press</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">All Employe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="addEmploye.php">Add Employe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-disabled="true">Contract</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--Employe Details-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h4 class="text-center">All Employe</h4>
                    <table class="table mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Digination</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = new Employe();
                            $rows = $select->select();
                            // print_r($rows);
                            foreach ($rows as $row) {
                                // echo $row;
                                ?>
                                <tr>

                                    <th><?= $row['id']; ?></th>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['city']; ?></td>
                                    <td><?= $row['digination']; ?></td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="">Delete</a>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>