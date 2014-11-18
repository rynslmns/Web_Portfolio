<?php

include 'inc/config.php';
$Title = 'Ryan Salmons';
$HeaderClass = "class='alt'>";
$NavClass = "home";
$ContactClass = 'class="button special">';
$InitFile = "js/init.js";
include ROOT_DIRECTORY . '/inc/header.php';

?>

<!-- Banner -->
  <section id="banner">

    <!--
      ".inner" is set up as an inline-block so it automatically expands
      in both directions to fit whatever's inside it. This means it won't
      automatically wrap lines, so be sure to use line breaks where
      appropriate (<br />).
    -->
    <div class="inner">

      <header>
        <h2>RYAN SALMONS</h2>
      </header>
      <p>SOFTWARE ENGINEER</p>
      <p>WEB DEVELOPER</p>
      <footer>
        <ul class="buttons vertical">
          <li><a href="#main" class="arrows scrolly">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle-thin fa-stack-2x"></i>
                <i class="fa fa-angle-double-down fa-stack-1x fa-inverse"></i>
            </span></a></li>
        </ul>
      </footer>

    </div>

  </section>

<!-- Main -->
  <article id="main">

    <header class="special container">
      <span class="icon"><img src="<?php echo BASE_DIRECTORY . 'images/r-icon2.png';?>"></span>
      <h2>Hi, I'm Ryan!</h2>
      <p>I'm a software engineer and web developer who graduated from the University of Texas in Austin.<br>
        I am very passionate about technology and building things that make people's lives easier.
      </p>
      <p></p>
      <p>I am an innovative thinker that thrives on being challenged. Take some time to look at my resume, and if you're interested, <a id="mail-link" href="<?php echo BASE_DIRECTORY . 'contact/';?>">let's get in touch</a>.
      </p>
    </header>


    <!-- Three -->
      <section class="wrapper style3 container special">

        <header class="major">
          <h2>I am currently <strong>CTO at Buddytruk</strong></h2>
        </header>

        <div class="major">
          <a href="https://www.buddytruk.com" target="_blank"><img class="image feature" src="<?php echo BASE_DIRECTORY . 'images/buddytruk.png';?>" alt="" /></a>
        </div>

        <footer class="major">
          <p>Buddytruk is your friend with a truck.<br> Whenever you need help moving your items, our app connects you<br> with a local, background checked driver to help move your items<br> wherever they need to go. Just as important, your Buddytruk driver<br> will also be that extra set of hands every moving experience requires.</p>
        </footer>


      </section>

  </article>

<?php

include ROOT_DIRECTORY . '/inc/footer.php';

?>
