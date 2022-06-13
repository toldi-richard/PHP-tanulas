<?php include 'inc/header.php' ; ?>


    <!-- átmeneti hard kódolt adatok, ha üres akkor az if felirat megjelenik -->
    <?php 
    // $feedback = [
    //   [
    //     'id' => '1',
    //     'name' => 'Beth Williams',
    //     'email' => 'beth@gmail.com',
    //     'body' => 'Traversy madia is ok'
    //   ],
    //   [
    //     'id' => '2',
    //     'name' => 'Jhon Smith',
    //     'email' => 'jsmith@gmail.com',
    //     'body' => 'Traversy madia is suck'
    //   ],
    //   [
    //     'id' => '3',
    //     'name' => 'Will Galvenzy',
    //     'email' => 'wgalvenzy@gmail.com',
    //     'body' => 'Traversy madia is working well'
    //   ]
    // ]

    $sql = 'SELECT * FROM feedback';
    $result = mysqli_query($conn, $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
   
    <h2>Past Feedback</h2>


    <!-- if ág így is használható, ha üres a tömb akkor megjelenik a felirat, mint a v-if, v-show vuejs-ben -->
    <?php if (empty($feedback)):?>

      <p class="lead mt3">There is no feedback</p>

    <?php endif; ?>

    <?php foreach ($feedback as $item): ?>

    <div class="card my-3 w-75">
     <div class="card-body text-center">

      <?php echo $item['body'] ?>

      <div class="text-secondary mt-2">

        By <?php echo $item['name'] ?> on
        <?php echo $item['date'] ?>

      </div>
     </div>
   </div>

   <?php endforeach; ?>
   
<?php include 'inc/footer.php' ; ?>
