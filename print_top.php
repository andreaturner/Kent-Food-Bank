<!DOCTYPE html>
<head>
    <title>Top Ten Items</title>
</head>
<html>
   <body>
      <h1>Top Ten Items Needed</h1>
       <?php 
            include '../thunderbirds_db.php';
            $TopTen = 'SELECT * FROM items';
            $results_TopTen = mysqli_query($cnxn, $TopTen) or die ("Query Error");
            while($rowTopTen = mysqli_fetch_array($results_TopTen)) {
                $id_item = $rowTopTen['id_item'];
                $name = $rowTopTen['name'];
                echo "<p>&bull; $name</p>";
            }
       ?>
   </body>
</html>