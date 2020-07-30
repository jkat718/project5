<?php include "inc/html-top.php"; ?>

  <body>
      <?php
      // connect to the database
      include('connect-db.php');

      // get results from database
      $result = mysqli_query($connection, "SELECT * FROM student_index");
      ?>
      
      <table border >
         <thead >
         <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Image</th>
            <th>Blurb</th>
            <th>Link</th>
            <th colspan="2"><em>functions</em></th>
        </tr>
          </thead>
      <?php
      // loop through results of database query, displaying them in the table
      while($row = mysqli_fetch_array( $result )) {
      ?>
        <tr>
          <td> <?php echo $row['firstname']; ?> </td>
          <td> <?php echo $row['lastname']; ?> </td>
          <td> <img src="<?php echo $row['img'];?>" alt="photo" width="300"> </td>
          <td> <?php echo $row['blurb'];?> </td>
          <td> <a href="<?php echo $row['link']; ?>" target="_blank"> <?php echo $row['link']; ?> </a> </td>
          <td> <a href="edit.php?id=<?php echo $row['id']; ?>"> Edit </a> </td>
          <td> <a onclick="return confirm('Are you sure you want to delete: <?php echo $row["firstname"] . " " . $row["lastname"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a> </td>
        </tr>
      <?php
      // close the loop
      }
      ?>
      </table>

      <div>
       <a href="new.php" class="nav-link">Add a new record</a> 
     </div>
     
  </body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>