<?php include 'database.php' ?>

  <div class="container">
    <!-- stampo le domande -->
    <?php foreach ($faqs as $faq) { ?>
      <h2> <?php  echo $faq['questions'] ?></h2>
      <!-- stampo le risposte -->

      <p> <?php echo $faq['answer'] ?></p>
    <?php } ?>

  </div>
