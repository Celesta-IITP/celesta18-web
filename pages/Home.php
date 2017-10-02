<style type="text/css">
.layer.one {
	background: #fff url("../images/bg_img1.png") no-repeat center fixed;
	background-size: cover;
}
</style>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/particleground.css" />
  <!-- remember, jQuery is completely optional -->
  <!-- <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script> -->
  
<div id="particles">
  <div id="intro">
    <h2>IIT Patna</h2>
    <h3>Presents</h1>
    <h1>Celesta 2K16</h1>
  </div>
</div>
<script type='text/javascript' src='./js/jquery.particleground.min.js'></script>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function () {
		particleground(document.getElementById('particles'), {
			dotColor: '#5cbdaa',
			lineColor: '#5cbdaa'
		});
		var intro = document.getElementById('intro');
		intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
	}, false);
</script>