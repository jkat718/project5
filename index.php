<?php include "inc/html-top.php"; ?>

<body>
  <header>CSC 174 (FALL 2020)</header>

  <div class="viewport2">
    <div class="grid2">
      <div class="slider">
        <img src="images/cover.jpg" alt="cover">
        <img src="images/ar.jpg" alt="ar website">
        <img src="images/jh.jpg" alt="jh website">
        <img src="images/jm.jpg" alt="jm website">
      </div>

      <form>
        <fieldset>
          <legend>Login:</legend>
          <label for="netid">NetID:</label><br>
          <input type="text" id="netid" name="netid" value=""><br>
          <label for="pword">Password:</label><br>
          <input type="text" id="pword" name="pword" value=""><br>
          <input type="submit" value="Sign in">
        </fieldset>
      </form>
    </div>


    <div class="align">
      <article>
        <h2>About CSC 174</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, minima quidem! Quidem officia ipsam nisi repudiandae aut quia, non dolores. Quia nobis, eaque inventore illum enim, nisi quasi laboriosam eius!</p>
      </article>

      <div class="align"><a href="list.php">Head to the Student Index ></a></div>
    </div>
  </div>

  <footer>
    CSC 174: Advanced Front-End Web Design and Development
  </footer>
  <?php include "inc/scripts.php"; ?>
  <script src="sss/sss.js"></script>
  <script>
    $('.slider').sss();
  </script>
</body>

</html>