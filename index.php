<!--
  @author   : Lacaste, Jennifer
  @createdOn: 20210209
  @lastMod  : 20210216
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
  <div class="container">
    <!--Banner-->
    <header>
      <section class="header">
        <?php 
          include('includes/inc_header.php');
        ?>
      </section>
    </header>
    <nav>
      <section class="text-nav">
        <?php 
          include('includes/inc_text_links.php');
        ?>
      </section>
    </nav>
    <section class="button-nav">
      <?php 
        include('includes/inc_button_nav.php');
      ?>
    </section>
    <?php 
      if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'site_layout':
              include('includes/inc_site_layout.php');
              break;
            case 'control_structures':
              include('includes/inc_control_structures.php');
              break;
            case 'string_functions':
              include('includes/inc_string_functions.php');
              break;
            case 'web_forms':
              include('includes/inc_web_forms.php');
              break;
            case 'longtest_assessment':
              include('includes/inc_longtest_assessment.php');
              break;
            case 'state_information':
              include('includes/inc_state_information.php');
              break;
            case 'user_templates':
              include('includes/inc_user_templates.php');
              break;
            case 'final_project':
              include('includes/inc_final_project.php');
              break;
            case 'home_page':
              include('includes/inc_home.php');
              break;
            default:
              include('includes/inc_home.php');/*Only include the design tags when they are inside their page files not outside include or here*/
              break;
        }
      }
      else{
        include('includes/inc_home.php');
      }
      if(isset($_GET['page1'])){
        switch($_GET['page1']){
          case 'site_layout':
            include('includes/inc_site_layout.php');
            break; 
          default: 
            include('includes/inc_home.php');
            break;
        }
      }
    ?>
    <footer>
      <?php 
        include('includes/inc_footer.php');
      ?>
    </footer>
  </div>
</body>
</html>