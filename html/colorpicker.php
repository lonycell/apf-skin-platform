<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
</head>
<body>
<?php
	$colors = array(
    	'ff0001', 'ffff00', '00ff00', '00ffff', '0000ff', 'ff00ff', 'ffffff', 'eaeaea', 'e0e0e0', 'd5d5d5', 'cacaca', 'bfc0bf', 'b3b5b3', 'a7a8a7', '9b9c9b',
		'ed222b', 'fff300', '00a352', '00a9ef', '33338c', 'ec0086', '838383', '787878', '6c6c6c', '616161', '565656', '494949', '3a3a3a', '2c2c2c', '191919',
		'f79275', 'faaa7c', 'fdc484', 'fff894', 'c1de96', '9dd296', '7dc997', '76cbc5', '6acdf6', '79a2d7', '7e8dc7', '827bba', '9c80bb', 'b986bc', 'f494be',
		'f36951', 'f68956', 'fbac5c', 'fff565', 'a7d26f', '77c472', '3fb674', '1eb9af', '00bcf2', '4685c8', '566fb5', '5f5aa3', '805da3', 'a361a3', 'f06aa4',
		'ed222b', 'f26428', 'f88f24', 'fff300', '88c642', '3db34c', '00a352', '00a697', '00a9ef', '006db8', '0054a1', '33338c', '642f8b', '8c2989', 'ec0086',
		'991217', '9b4515', '9e6112', 'a79d00', '5a802d', '217735', '006f3b', '007068', '00729e', '004c7b', '00376e', '221963', '471261', '62005f', '99005d',
		'750000', '773400', '784c00', '7d7700', '446520', '005e27', '00592c', '005a53', '005b7a', '003a62', '002658', '15004e', '37004d', '4e004b', '760049',
		'c4af93', '938071', '6f6258', '554a44', '3b3533', 'c3986b', 'a17853', '86623d', '714f2a', '603d1b', 'f8f2e1', '1e67a7', '2eb025', 'efc206', 'ff0001'
	)

?>
	<div class="window" style="width: 600px;">
			<div class="topLeft"></div>
			<div class="topRight"></div>
            <div class="topBar">Javeline</div>

			<div class="borderRight">
				<div class="content">
					<div class="menuBar">
						<a href="">File</a>
						<a href="">Edit</a>
						<a href="">Project</a>
						<a href="">Window</a>
					</div>

					<div class="page">

					<div class="winTab">
						<div class="winTabContent">
							<div class="drawingBoard"></div>

							<fieldset class="swatchesFieldset">
								<legend>Swatches</legend>
								<!-- swatches area -->
								<div id="swatches">
									<?php
										for ($i = 0; $i < count($colors); $i++):
									?>

									<div class="color<?php /*test Hover -> to remove*/ if ($i == 117) echo ' colorHover';?>" style="background-color: <?php echo '#'.$colors[$i];?>;"></div>
									<?php endfor; ?>
								</div>

								<div class="colorBox"></div>
								<div class="colorName">#111111</div>
								<div class="button"><div class="left"></div><div class="label">Add</div><div class="right"></div></div>
								<!-- end swatches area -->
							</fieldset>

						</div>
					   	<div class="winTabFooter"><div><div></div></div></div>
					</div>

					</div>
				</div>
			</div>

			<div class="bottomLeft"></div>
			<div class="bottomRight"></div>
            <div class="bottomBar">Javeline</div>
	</div>

</body>
</html>