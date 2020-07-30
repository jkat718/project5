<?php include "inc/html-top.php"; ?>

  <body class="container-fluid">
      <header class="full-width">
        <h1><a href = "index.php">CSC 174</a></h1>
      </header>
      <?php
      // connect to the database
      include('connect-db.php');

      // get results from database
      $result = mysqli_query($connection, "SELECT * FROM student_index");
      ?>
      
      <ul>
      <?php
      // loop through results of database query, displaying them in the table
      while($row = mysqli_fetch_array( $result )) {
      ?>
        <li>
          <div class="grid-container">
            <h3 class="full-width"> <?php echo $row['firstname']; ?>
              <?php echo $row['lastname']; ?> 
            </h3>
            <figure> <img src="<?php echo $row['img'];?>" alt="photo" width="300"> </figure>
            <p> <?php echo $row['blurb'];?> </p>
            <div>
              <a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-primary">Example of previous work</a>

            <div class = "dropdown">
              <button class = "dropbtn" onclick ="myFunction(<?php echo$row['id']; ?>)"><span>&#8942;</span></button>
              <div class = "dropdown-content" id = "<?php echo$row['id']; ?>">
                <a href="edit.php?id=<?php echo $row['id']; ?>"> Edit </a>
                <a onclick="return confirm('Are you sure you want to delete: <?php echo $row["firstname"] . " " . $row["lastname"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a>
            </div>
            </div>
            </div>
          </div>
        </li>
      <?php
      // close the loop
      }
      ?>
      </ul>

      <div>
       <a href="new.php" class="nav-link">Add your info to this webpage</a> 
     </div>
     <script src="js/dropdown-menu.js"></script>
  </body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>