<?php
 	$muzik = $_GET['muzik'];
?>

<div style="position:relative;width:267px;height:25px;overflow:hidden;">
	<div style="position:absolute;top:-276px;left:-5px">
			<iframe src="https:<?php echo $muzik ?>" style="width: 300px; height: 300px;" autoplay="true"> </iframe> 
	</div>
</div>

	<button id="copy-button" class="my_clip_button" title="Click me to copy to clipboard." data-clipboard-target="fe_text" data-clipboard-text="koko" style="width: 100px; height: 50px; margin-top: 300px;">Copy To Clipboard...</button>
	<br />
	<a href="http://www.webarranco.fr/blind_test">Retourner à l'application Blind test</a>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="zeroclipboard-master/dist/ZeroClipboard.js"></script>
	<script type="text/javascript">

		$('button').attr('data-clipboard-text', document.location.href);

		var client = new ZeroClipboard( document.getElementById("copy-button") );

		client.on( "ready", function( readyEvent ) {
		  // alert( "ZeroClipboard SWF is ready!" );
		} );
	</script>