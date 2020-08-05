<?php include "inc/html-top.php"; ?>

  <body class="container-fluid">
      <header class="full-width">
        <h1><a href = "index.php">CSC 174</a></h1>
        <!-- if NOT logged in -->
        <a href="login.php">Login</a>
        <!-- if logged in -->
        <a href="logout.php">Sign Out</a>
      </header>
      <?php
      // connect to the database
      include('connect-db.php');

      // get results from database
      $result = mysqli_query($connection, "SELECT * FROM student_index");
      ?>
      
      <h2 id="student-list">Students</h2>

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
            <figure> <img src="<?php echo $row['img'];?>" alt="<?php echo $row["firstname"], " ", $row["lastname"];?>"> </figure>
            <p> <?php echo $row['blurb'];?> </p>
            <div>
              <a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-primary">Read More</a>

              <!-- if logged in -->
            <div class = "dropdown">
              <div id = "<?php echo$row['id']; ?>">
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
        <a href="index.php" class="btn btn-info">Return Home</a>
        <!-- if logged in, show -->
        <a href="new.php" class="nav-link btn btn-primary">Add your info to this webpage</a> 
     </div>
     <script src="js/dropdown-menu.js"></script>
  </body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>