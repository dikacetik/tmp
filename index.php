<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery.preimage.js"></script>

<style>
.prev_container {
    float: left;
    height: auto;
    overflow: auto;
}

.prev_thumb{
	margin: 10px;
	height: 100px;
	width: 100px;
}

.img-block {
    background: url("img/a.png ") no-repeat scroll 0 0 transparent;
    float: left;
    overflow: hidden;
}
input{
    background: none repeat scroll 0 0 #ffffff;
    border: 1px solid #999999;
    padding: 2px 3px;
    width: 300px;
}
input{
  
    border: 1px solid #999999;
    padding: 2px 3px;
    width: 50px;
}
div.upload input {
    cursor: pointer;
    display: block !important;
    float: left;
    height: 96px !important;
    opacity: 0 !important;
    overflow: hidden !important;
    width: 112px !important;
}
</style>
<meta charset=utf-8 />
<title>jQuery file upload</title>
</head>
<body>

				
<script>

$(document).ready(function()
{

$('.texth').hide();



	$('input.file').preimage();
	
	$('.fil').click(function(e){
		var p = $(this).attr('data-file');
		//alert('#prev_'+p);
		$('#prev_'+p).html('');
		$('#prev_'+p).hide();
		$('input#'+p).val('');
		$('input#'+p).show();
		$('#upload'+p).show();
		$('#textres'+p).hide();
	//	$().html('');
	});
});

</script>
	
<script>
$(document).ready(function() {

	$('.uploading').change(function() {
	var name1 = $(this).attr("class");
	$(this).next('span').text($(this).val());
	 });
});
</script>			
<form method="POST" action="upload_file.php" enctype="multipart/form-data">	

<div style="syle="clear:both;"">&nbsp;</div>
	<div style="    clear: both;
    display: block;
    float: left;
    margin-bottom: 40px;">
	<?php $count=4; for ($i = 1; $i <= $count; $i++) : ?>

		<div id="uploadfile<?php echo $i; ?>" class="upload img-block">
			<input type="file" title="Vælg billede" class="inputText uploading file" size="10" name="data[Files][<?php echo $i; ?>]" id="file<?php echo $i; ?>"> 	
		</div>
		<div class="fil prev_container" data-file="file<?php echo $i; ?>" id="prev_file<?php echo $i; ?>"></div>	

	<?php endfor; ?>
	
	</div>
	
	<br><input type="submit" name="submit" value="Submit">
</form>
</body>
</html>




