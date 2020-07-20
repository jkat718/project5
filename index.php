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

      <form method="post">
        <fieldset>
          <legend><h2>Login:</h2></legend>
          <label for="netid">NetID:</label><br>
          <input type="text" id="netid" name="netid" value=""><br>
          <label for="pword">Password:</label><br>
          <input type="text" id="pword" name="pword" value=""><br>
          <input type="submit" value="Sign in" class="signInBtn">
        </fieldset>
      </form>
    </div>


    <div class="align">
      <article>
        <h2>About CSC 174</h2>
        <p>“Front-end” is an industry term that refers to the focus on HTML, CSS and JavaScript, which differentiates this course from the formal programming courses.
          Topics include Information Architecture, visual design, use of client libraries (mostly JS), and asset management strategies.</p>
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
    $('.slider').sss({
      speed:5000
    });
  </script>
</body>

</html>
