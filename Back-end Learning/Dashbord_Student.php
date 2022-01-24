<?php 
require_once 'arrayStudent.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashbord Students</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <?php
              require_once 'SideBar.php'
            ?>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php
                    include_once 'NavBar.php'
                ?>
                
                <!-- Page content-->
                <div class="bg-light navbar-light ">
                  <nav class="navbar navbar-expand-lg pt-3">
                    <div class="container-fluid">
                        <h1 class="fs-2 ps-3">Students List</h1>
                        <form class="d-flex pe-3">
                          <i class="bi bi-arrows-expand fs-5 me-3"></i>
                          <button class="btn btn-outline-success ps-5 pe-5 bg-info text-light border-0" type="submit">ADD NEW STUDENT</button>
                        </form>
                    </div>
                </nav>

                <div class="container-fluid table-responsive">

                <table class="table  table-borderless">
                  <thead >
                    <tr class="text-secondary">
                      <th scope="col"></th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Enroll Number</th>
                      <th scope="col">Date of admission</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tabStudent as $student) : ?>
                    <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                      <th scope="row"><img src="<?php echo $student['image'] ?>" alt="img_table"></th>
                      <td><?php echo $student['username'] ?></td>
                      <td><?php echo $student['email'] ?></td>
                      <td><?php echo $student['phone'] ?></td>
                      <td><?php echo $student['number'] ?></td>
                      <td><?php echo $student['date'] ?></td>
                      <td class="d-flex fs-4 text-info border-0 text-end">
                      <?php echo $student['icone1'] ?>
                      <?php echo $student['icone2'] ?>
                    </tr>

                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>


            </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
