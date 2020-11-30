

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Multiple selected value</title>
  </head>
  <body>

  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <b class="text-danger">Note:</b> Before work please add some value in your database. Otherwise, You can't see and data in table. <br>
                    <b>Note:</b> Database Name is (users) & Table name is (user_table)
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="final.php" method="post">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">
                                    <input type="submit" name="multipleBtn" value="Select All" class="btn btn-success float-right">
                                </th>
                            </tr>
                        </thead>

                            <?php 
                            
                                $Connection = mysqli_connect( 'localhost', 'root', '', 'users' );
                                $Query = " SELECT * FROM user_table ";

                                $FinalConnection = mysqli_query( $Connection, $Query );
                                $CountDB = mysqli_num_rows( $FinalConnection );

                                if ( $CountDB > 0 ) {
                                    while ( $row = mysqli_fetch_assoc( $FinalConnection ) ) {
                            ?>


                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td class="float-right"><input type="checkbox" name="CheckedArray[]" value="<?php echo $row['id']; ?>"></td>
                                </tr>
                            </tbody>

                            <?php
                                    }

                                } else {
                                    echo "Sorry Database is empty!";
                                }
                                
                            
                            ?>

                    </table>    
                </form>
            </div>
        </div>
    </div>



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>