<!--
  @author   : Lacaste, Jennifer
  @createdOn: 20210209
  @lastMod  : 20210209
  @topic    : ChineseZodiac PHP
  @sub&Prof : websys2.MialynBungay
  @fileDesc : Main Index -->
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Index</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
  <main>
    <section class="header">
      <?php 
        include('inc_header.php');
      ?>
    </section>
    
    <nav>
      <section class="text-nav">
        <?php 
          include('inc_text_links.php');
        ?>
      </section>
    
      <section class="button-nav">
        <?php 
          include('inc_button_nav.php');
        ?>
      </section>
    </nav>

    <section class="dynamic-content">
      <?php 
        include('inc_home.php');
      ?>
    </section>

    <section class="footer">
      <footer>
        <?php 
          include('inc_footer.php');
        ?>
      </footer>
    </section>
  </main>
</body>
</html>