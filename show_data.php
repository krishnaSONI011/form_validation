<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <header class="header">
        <div class="nav justify-content-center ">
            <div class="conrainer">
                <h1 id="all-detail ">All detail</h1>
            </div>
        </div>

    </header>
    <div class="container" id="main-page">
        <?php 
        include"db_connect.php";
       
        $query = "SELECT basic_info.id,basic_info.firstname,basic_info.lastname,basic_info.email,basic_info.phpne,basic_info.image,designation.post ,qualification.school_name_10,qualification.board_10,qualification.percentage_10,qualification.school_name_12,qualification.board_12,qualification.percentage_12,qualification.school_name_g,qualification.degree,qualification.percentage_g FROM basic_info LEFT JOIN designation ON basic_info.id=designation.id LEFT JOIN qualification ON basic_info.id=qualification.id";
$result = mysqli_query($conn, $query);
$n=0;
while($row = mysqli_fetch_assoc($result)){
      
    $n=$n+1;

    echo "

        <tr> 
            <th scope='row'> $n</th>
            <td><img src='$row[image]' alt='' style='width:100px; height:100px'></td>
            <td>$row[name]</td>
            <td> $row[email] </td>
            <td> $row[mobile_no] </td>
            <td> $row[post]</td>
            <td> $row[school_name_10] </td>
            <td> $row[board_10] </td>
            <td> $row[percentage_10]</td>
            <td> $row[school_name_12] </td>
            <td> $row[board_12]</td>
            <td> $row[percentage_12]</td>
            <td> $row[school_name_g] </td>
            <td> $row[degree]</td>
            <td> $row[percentage_g]</td>
            <td> <a href='Edit.php?  id=$row[id]' class='btn btn-success'>Edid</a></td>
           <td> <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete</a>
            </td>

        </tr>
        
        </tr>";
        
        ?>

        <?php
    
}
?>
      <?php  if($num>0){

            while($row =mysqli_fetch_array($result)){
         ?>

        <div class="row">
            <div class="col-md-4">
                <strong>1</strong>
            </div>
            <div class="col-md-4">
                <p>Name: <?php echo $row['name']; ?></p>
            </div>
            <div class="col-md-4 d-flex justify-content-around">
                <button type="button" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-danger ">Delete</button>
            </div>
        </div>
        <!--row-->
        <hr>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo $row['image'];?>" class="img-fluid rounded-top" alt="">
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table table-primary">
                        <tr>
                            <th>Email:
                            <th>
                            <td><?php echo $row['email'];?></td>
                            </th>
                        </tr>
                        <tr>
                            <th>Phone:
                            <th>
                            <td><?php echo $row['mobile'];?></td>
                        </tr>
                        <tr>
                            <th>Designation:
                            <th>
                            <td><?php echo $row['designation'];?></td>
                        </tr>

                        <tr class="text-center">
                            <th>Qualification</th>
                        </tr>
                        <tr>
                            <th>
                                class:
                            </th>
                            <td> 10</td>

                        </tr>
                        <tr>
                            <th>Board</th>
                            <td><?php echo $row['board10'];?></td>
                        </tr>

                        <tr>
                            <th>
                                Percentage

                            </th>
                            <td><?php echo $row['cgpa10'];?></td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
        <?php }
} ?>
    </div><!-- main-page-->
    </div><!-- container-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>