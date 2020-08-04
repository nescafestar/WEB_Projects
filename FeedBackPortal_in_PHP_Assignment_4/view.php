<?php 
include_once "./serverLogic.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Course Feedbacks</title>
    <link rel="stylesheet" href="feedbackStyle.css">
  </head>
  <body class="">

    <div class="header">
      <h2>Feedback Summary</h2>
    </div>
    <div class="content">
      <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
          <h3>
            <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
             ?>
          </h3>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['username'])): ?>
        <p>Welcome <strong><?php echo ucfirst($_SESSION["username"]); ?></strong></p>
        <p><a href="index.php?logout='1'" style="color:red; font-weight:bolder;">Click here to Log out</a></p>

        <table style="width:100%;">
          <thead>
            <tr>
              <td>Mr./ Ms.</td>
              <td>Question 1</td>
              <td>Question 2</td>
              <td>Question 3</td>
              <td>Student Remarks</td>
            </tr>
          </thead>
          <tbody>
            <?php 
            // if($data_pool==null) print("DATA-POOL empty");

            if(is_array($data_pool)){
            foreach ($data_pool as $var): ?>
              <tr>
                <td><?= $var["username"] ?></td>
                <td class="<?= set_background_color_class($var['Res1']) ?>"><?= $var["Res1"] ?></td>
                <td class="<?= set_background_color_class($var['Res2']) ?>"><?= $var["Res2"] ?></td>
                <td class="<?= set_background_color_class($var['Res3']) ?>"><?= $var["Res3"] ?></td>
                <td><?= $var["Remarks"] ?></td>
              </tr>
            <?php endforeach; }?>
          </tbody>
        </table>
        <?php endif; ?>
    </div>
  </body>
</html>