

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>contact table</title>
    <?php include'script.php';?>
    
</head>
<body>
    <div class="main-div">
       <h2>Contact Us Data</h2>
        <div class="center-div">
          <!--  <div class="table-wrapper">  -->
                <table class="fl-table">
                    <thead>
                        <tr>
                            <th>ID</th>  
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php
                                include 'connection.php';

                                $selectquery = "select *from contact";
                                $result = $con->query($selectquery);
                                $nums = mysqli_num_rows($result);

                                while($res = mysqli_fetch_array($result)){
                                   ?>

                                    <tr>
                                    <td><?php echo $res['id']; ?></td>
                                    
                                    <td><?php echo $res['name']; ?></td>
                                    <td><?php echo $res['email']; ?></td>
                                    <td><?php echo $res['subject']; ?></td>
                                    <td><?php echo $res['message']; ?></td>
                                    <td><a href="deletec.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE!"><i class="fas fa-trash-alt"></i></a></td>
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