
    
    <?php include 'inc/header.php' ; ?>
    <!-- kimásoltuk a header-be az elejét és így lehet visszahívni komponensként -->
    <!--  require is jó az include helyett Ez is jó, de ha rossz az elérés akkor az egész
    oldal lehal, viszont az include esetén az oldal működő része betölt csak a komponens
    nem fog betöltődni -->



    <?php 
      // $name = '';
      // $email = ''; lehet így vagy shortcut, ha mind üres string
      $name = $email = $body = '';
      $nameErr = $emailErr = $bodyErr = '';

      // Form submit
      if (isset($_POST['submit'])) {

        // Validate name
        if (empty($_POST['name'])) {
          $nameErr = 'Name is required';
        } else {
          $name = filter_input(INPUT_POST, 'name',
          FILTER_SANITIZE_SPECIAL_CHARS);
        }

        // Validate email
        if (empty($_POST['email'])) {
          $emailErr = 'Email is required';
        } else {
          $email = filter_input(INPUT_POST, 'email',
          FILTER_SANITIZE_SPECIAL_CHARS);
        }

        // Validate body
        if (empty($_POST['body'])) {
          $bodyErr = 'Feedback is required';
        } else {
          $body = filter_input(INPUT_POST, 'body',
          FILTER_SANITIZE_SPECIAL_CHARS);
        }
      // echo $nameErr;
      // echo $name;

      if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
        // add to database
        $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
        if (mysqli_query($conn, $sql)) {
          // success
          header('Location: feedback.php');
        } else {
          // error
          echo 'Error: ' . mysqli_error($conn);
        }
      }
    }
  ?>

    <img src="img/logo.png" class="w-25 mb-3" alt="">
    
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>

    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>

        <!-- is-invalid miatt lesz az input piros és kapja a felkiáltójelet ami akkor jelenik
        meg ha a nameErr-nek van értéke -->
        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">

        <!-- ez a szöveg jelenik meg error esetén majd -->
        <div class="invalid-feedback">
          <?php echo $nameErr ?>
        </div>

      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">

        <!-- ez a szöveg jelenik meg error esetén majd -->
        <div class="invalid-feedback">
          <?php echo $emailErr ?>
        </div>

      </div>

      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>

        <!-- ez a szöveg jelenik meg error esetén majd -->
        <div class="invalid-feedback">
          <?php echo $bodyErr ?>
        </div>

      </div>


      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

    <!-- kimásoltuk a footer-be az elejét és így lehet visszahívni komponensként -->
    <?php include 'inc/footer.php' ; ?>