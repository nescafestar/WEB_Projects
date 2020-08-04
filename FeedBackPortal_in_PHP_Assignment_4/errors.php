<?php if (count($errors) > 0): ?>
  <div class="error">
    <?php foreach ($errors as $error): ?>
      <h2 style="color: #000; " >ERROR:<?php echo $error; ?></h2>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
