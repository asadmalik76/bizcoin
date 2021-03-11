
  <footer>
    <div class="foverlay">

  <div class="container">
  <div class="row">
    <div class="col-md-3">
        <h2>PaisayKamao</h2>
        <div class="margin">

        </div>
        <!-- <img src="img/logo-w.png" style="height:80px;margin-top:-25px;" alt="Softileo"> -->
  <p>
  </p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </div>
    <div class="col-md-3">
<h2>
Important Links
</h2>
<div class="margin">

</div>
<ul>
  <li> <a href="#">Home</a> </li>
  <li> <a href="#">About Us</a> </li>
  <li> <a href="#">Contact Us</a> </li>
  <li> <a href="#">lucky Deaw</a> </li>

</ul>


    </div>
    <div class="col-md-3">

      <h2>
      Useful Links
      </h2>
      <div class="margin">

      </div>
      <ul>
        <li> <a href="#">How To Earn Money</a> </li>
        <li> <a href="#">How to Withdraw</a> </li>
        <li> <a href="#">Leaderboard</a> </li>
        <li> <a href="#">Membership Packages</a> </li>

      </ul>


    </div>
    <div class="col-md-3">
      <h2>
      Reach Us
      </h2>
      <div class="margin">

      </div>
      <ul>
        <li><i class="fa fa-phone"></i>  +92 309 0215441</li>
        <li> <i class="fa fa-envelope"> </i> info@PaisayKamao.pk </li>
        <ul class="sicons">
          <li> <a href="#"> <i class="fab fa-facebook"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
          <li> <a href="#"> <i class="fab fa-linkedin"></i> </a> </li>
        </ul>
      </ul>
    </div>
    <div class="clearfix">

    </div>
  </div>
  <div class="margin">

  </div>
  <div class="row">
    <p >All Rights Reserved &copy; 2020 PaisayKamao.pk | Developed By: <a href="https://www.softileo.com" class="Developed" target="_blank">Softileo</a> </p>
  </div>
  </div>
</div>

  </footer>


  </body>








  <script src="./js/jquery.min.js"></script>
  <script src="./js/jquery-ui.js"></script>
  <script src="./js/wow.js"></script>
  <script src="./js/wow.min.js"></script>
  <script type="text/javascript" src="./js/bootstrap.min.js"></script>
  <script type="./text/javascript" src="./js/all.js"></script>
  <script src="./js/modernizr.custom.js"></script>
  <script src="./js/sweetalert.min.js"></script>

  <script type="text/javascript">
  new WOW().init();

  </script>
  </div>
  </body>
  </html>
  <script type="text/javascript">
  $(document).ready(function(){

    $('.counter').each(function () {
       var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
       $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
       }, {
          duration: 3000,
          step: function (func) {
             $(this).text(parseFloat(func).toFixed(size));
          }
       });
    });

  });

  </script>



  <script type="text/javascript">


  $(document).ready(function() {

    $(window).scroll(function() {

        var height = $('.main').height();
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height - 80) {
          $('.solid').fadeIn();
          $('#nav').fadeOut();
        } else {
          $('#nav').fadeIn();
          $('.solid').fadeOut();
        }

    });
  });
  $('.scrollTo').click(function(){
    $('html, body').animate({
      scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
  });
  </script>
