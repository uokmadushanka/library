<?php
    include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Registration</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
     <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">
        <div class="card my-5 p-5">
            <div class="card-body">
                <div class="card-header">
                    <h1 class="text-center " style="background-color:blue; color:white; border-radius:15px;">Book Registration<img src="img/bookreg.png" alt="bookreg" width="90px" height="auto" style="background-color: #00000000;"></h1>
                </div>
                
                <button class="btn btn-dark my-5">
                    <a href="addbook.php" style="background-color: #00000000; font-weight: 500; text-decoration: none; color: white;">
                        <img src="img/addbook.png" alt="addbook"  width="30px" style="background-color: #00000000;"> 
                        Add New Book
                    </a>
                </button>

                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Book ID</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Book Category</th>
                        <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $sql = "SELECT * from book ";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                while($row =mysqli_fetch_assoc($result)){
                                    $book_id=$row['book_id'];
                                    $book_name=$row['book_name'];
                                    $category_id=$row['category_id'];
                                    echo '<tr>
                                    <th scope="row">'.$book_id.'</th>
                                    <td>'.$book_name.'</td>
                                    <td>'.$category_id.'</td>
                                    
                                    <td>
                                        <button class="btn btn-secondary"><a href="update.php?updateid='.$book_id.'" class="text-dark btn_text" style="background-color: #00000000; font-weight: 500; text-decoration: none;">Update</a></button>
                                        <button class="btn btn-success"><a href="delete.php?deleteid='.$book_id.'" class="text-dark btn_text" style="background-color: #00000000; font-weight: 500; text-decoration: none;">Delete</a></button>
                                    </td>
                                    </tr>';
                                }
                            }
                        ?>
                                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
      
</body>
</html>