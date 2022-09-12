<?php
$fonts 			= get_fonts();
$layout = isset($_COOKIE['layout']) ? (int) $_COOKIE['layout']: 1;
?>
<div class="tool">
	<ul>
		<li>
			Select template
			<select class="layout">
				<option value="1" <?php if($layout == 1) echo 'selected';?> > Default</option>
				<option value="2" <?php if($layout == 2) echo 'selected';?>> 2 Column</option>
				<option value="3" <?php if($layout == 3) echo 'selected';?>> 1 Column</option>
			</select>
		</li>
		<li>
		<li>
			Set Font Content Label
			<select class="content-label">
				<?php
				foreach($fonts as $key=>$font){?>
				<option value="<?php echo $key;?>" <?php if($label_font == $key) echo 'selected';?> ><?php echo $key;?></option>
				<?php } ?>

			</select>
		</li>
		<li>
			Set Font Content
			<select class="content-font">
				<?php
				foreach($fonts as $key=>$font){?>
				<option value="<?php echo $key;?>" <?php if($content_font == $key) echo 'selected';?> ><?php echo $key;?></option>
				<?php } ?>

			</select>

			TCPDF
		</li>
		<li>
			<form action="generate_pdf.php" method="post">
				<input type="submit" name="submit_val" value="Download PDF">
			</form>
			<form action="tcpdf.php" method="post">
				<input type="submit" name="submit_val" value="TCPDF ">
			</form>
		</li>
	</ul>
</div>
