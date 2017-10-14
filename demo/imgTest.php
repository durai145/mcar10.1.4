<html>
<head>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"> </script>
  
  <script>
  

$(function(){


  $(".img-swap").live('click', function() {

//	alert("Test");
    if ($(this).attr("class") == "img-swap") {
      this.src = this.src.replace("In","Out");
    } else {
      this.src = this.src.replace("Out","In");
    }
    $(this).toggleClass("on");
  });
});

  </script>
</head>
<body>


		<img src="../img/PauseIn.png" class="img-swap" />
		<img src="../img/playIn.png" class="img-swap" />

	<a>

	</a>
  <!--p class="blue">Click to toggle</p>
  <p class="blue highlight">highlight</p>
  <p class="blue">on these</p>
  <p class="blue">paragraphs</p-->
</body>
</html>

