<?php  

$conn=mysqli_connect('localhost','root','','student_info') or die('connection failed');
$sql="SELECT * FROM student LIMIT 25";
$result=mysqli_query($conn,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel='stylesheet' href="style/style.css">
    <title>Document</title>
</head>
<body>
    <h1>All contacts</h1>
    <div>
        <button><i class="fa-solid fa-magnifying-glass"></i></button>
        <input type="text" name="search">
    </div>
    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>city</th>
            </tr>
        </thead>
        <tbody>
        <?php
      if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result))
          {

       

     ?>
          <tr>
                <th><?php echo $row['id'] ?></th>
                <th><?php echo $row['name'] ?></th>
                <th><?php echo $row['age'] ?></th>
                <th><?php echo $row['city'] ?></th>
            </tr>
         
    
        </tbody>
        <?php
    }
      }
      ?>

    </table>
    
</body>
</html>