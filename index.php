<?php include("header.php"); ?>

<p id="subtitle">
    Iron Man est un film américano-canadien réalisé par Jon Favreau, sorti en 2008.<br><br>
    Il raconte les origines et les débuts du personnage éponyme issu du comics publié.
</p>
<div class="slider">
    <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
            <img src="1.jpg" alt="">
        </div>
        <div class="slide">
            <img src="2.jpg" alt="">
        </div>
        <div class="slide">
            <img src="3.jpg" alt="">
        </div>
        <div class="slide">
            <img src="4.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
    </div>
    <!--manual navigation start-->
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
    <!--manual navigation end-->
</div>
<!-- slider JS -->
<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
</script>
<!-- end slider JS -->

<?php include("footer.php"); ?>