

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>userdata</title>
    <?php include'script.php';?>
    
</head>
<body>
<?php include 'header.php';?>
    <div class="main-div">
       <h2>Users Data</h2>
        <div class="center-div">
          <!--  <div class="table-wrapper">  -->
                <table class="fl-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            
                            <th>User-name</th>
                            <th>Email</th>
                            <th>Contact-Number</th>
                            <th>Password</th>
                            <th>Confirm-Pass</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php
                                include 'connection.php';

                                $selectquery = "select *from users";
                                $result = $con->query($selectquery);
                                $nums = mysqli_num_rows($result);

                                while($res = mysqli_fetch_array($result)){
                                   ?>

                                    <tr>
                                    <td><?php echo $res['id']; ?></td>
                                    
                                    <td><?php echo $res['user_name']; ?></td>
                                    <td><?php echo $res['email']; ?></td>
                                    <td><?php echo $res['contact_num']; ?></td>
                                    <td><?php echo $res['password']; ?></td>
                                    <td><?php echo $res['cpassword']; ?></td>
                                    <td><a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE!"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE!"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                                <?php
                                }
                                ?>

                      
                    </tbody>
                </table>
              <!--  </div>  -->
        </div>
        
    </div>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    <?php include'footer.php';?>
</body>
</html>