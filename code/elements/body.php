<body>
  <main>
    <section class="mainForm">
      <?php
        if ($file == 'stage.php') {
          require 'forms/update_form.php';
        } else {
          require 'forms/insert_form.php';
        }
      ?>
      <a href="#"><i class="fas fa-arrow-circle-up"></i></a>
    </section>

    <section class="siteList">
      <?php require 'site_list.php'; ?>
    </section>

  </main>
</body>
