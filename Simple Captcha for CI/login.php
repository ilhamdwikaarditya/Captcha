<div id="sec_captcha">
	<h3 class="form-title">Tulis Captcha </h3>
		<div class="portlet-body">
			<canvas id="textCanvas"></canvas>
		</div>
	<div class="form-group">
		<div class="input-icon">
			<i class="fa fa-lock"></i>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="CAPTCHA" name="captcha" id="captcha"/>
		</div>
	</div>
		<input type="hidden" name="randcaptcha" id="randcaptcha" value="<?php echo $cpt; ?>"/>
</div>

<script>
jQuery(document).ready(function() {     

inp = $("#randcaptcha").val();
		if(inp != ''){
			myFunction();
		}

		function myFunction() {
			
			var c = document.getElementById("textCanvas");
			var ctx = c.getContext("2d");
			ctx.canvas.width  = 150;
			ctx.canvas.height = 50;
			ctx.font = "30px Verdana";
			// Create gradient
			var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
			gradient.addColorStop("0", "green");
			gradient.addColorStop("0.5", "green");
			gradient.addColorStop("1.0", "green");
			// Fill with gradient
			ctx.fillStyle = gradient;
			ctx.fillText(inp, 30, 30);
		}
		
});
</script>