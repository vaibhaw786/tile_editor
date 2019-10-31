<?php

$designer_tiles = designer_tiles();

if( isset($_POST) )
{
	extract($_POST);
	
	//saving values of plain tiles
	if( isset($_POST['plain_tiles']) )
	{
		if(!empty($plain_tiles_width))
		{
			update_option( "plain_tiles_width", serialize($plain_tiles_width) );
		}
		if(!empty($plain_tiles_height))
		{
			update_option( "plain_tiles_height", serialize($plain_tiles_height) );
		}
	}
	//saving values of plain tiles

	//saving values of designer tiles
	if( isset($_POST['designer_tiles_images_submit']) )
	{
		$designer_tile_images = array();
		foreach($designer_tiles as $key => $des_tls)
		{
			if(count($des_tls) > 1)
			{
				foreach ($des_tls as $dt)
				{
					$index = $dt;
					$index = get_designer_tiles_key($index);
					$arr = array();
					if(isset($_POST[$index]))
					{
						$arr = $_POST[$index];
					}
					$designer_tile_images[$index] = $arr;
				}
			}
			else
			{
				$index = $key;
				$index = get_designer_tiles_key($index);
				$arr = array();
				if(isset($_POST[$index]))
				{
					$arr = $_POST[$index];
				}
				$designer_tile_images[$index] = $arr;
			}
			
		}
		update_option( "designer_tile_images", serialize($designer_tile_images) );
	}
	//saving values of designer tiles
}

//getting values of plain tiles
$plain_tiles_width = get_option( "plain_tiles_width" );
if(!empty($plain_tiles_width))
{
	$plain_tiles_width = unserialize($plain_tiles_width);
}
$plain_tiles_height = get_option( "plain_tiles_height" );
if(!empty($plain_tiles_height))
{
	$plain_tiles_height = unserialize($plain_tiles_height);
}
//getting values of plain tiles

//getting values of designer tiles

$designer_tile_images = get_option( "designer_tile_images" );
if(!empty($designer_tile_images))
{
	$designer_tile_images = unserialize($designer_tile_images);
}
//getting values of designer tiles
?>

<div class="tilemainwpr">
	<div class="tilinrwpr">
		
		<div class="tilacrdrow frst active plaintiles" data-index="1">
			<h3>Plain Tiles</h3>
			<div class="tilacrcntn">
				
				<div class="tilsnglrow">
					<form method="post">
						<div class="tilinrsnglrow">
							<div class="tlsnglrowfullwidth">Enter Dimensions in pixels</div>
							<div class="tlsnglclm">
								<input type="text" placeholder="Tile width" class="maintiledtrwdth" value="" />
								<div class="invalid-feedback"></div>
							</div>
							<div class="tlsnglclm">
								<input type="text" placeholder="Tile height" class="maintiledtrhght" value="" />
								<div class="invalid-feedback"></div>
							</div>
							<div class="tlsnglclm">
								<input type="button" onclick="validatetiles(this);" value="Add Tile" class="button button-primary" />
							</div>
						</div>
						
						<div class="tilinrsnglrow">

							<?php
							if(!empty($plain_tiles_width))
							{

								$html = '';
								foreach($plain_tiles_width as $key=> $width)
								{
									$height = $plain_tiles_height[$key];
									$html .= '<div class="sngltlwpr"><span onclick="removetile(this)">X</span><div class="sngltl" style="width:'.$width.'px; height:'.$height.'px"><input type="hidden" value="'.$width.'" name="plain_tiles_width[]" /><input type="hidden" value="'.$height.'" name="plain_tiles_height[]" /></div></div>';
								}
								echo $html;
							}
							?>
							
						</div>

						<div class="tilinrsnglrow">
							<input type="hidden" name="plain_tiles" />
							<input type="submit" name="Save" value="Save" class="button button-primary" />
						</div>
					</form>

				</div>

			</div>
		</div>

		<div class="tilacrdrow collapsed" data-index="2">
			<h3>Designer Tiles</h3>
			<div class="tilacrcntn">
				<form method="post">
					<div class="tabwpr">
						<ul class="tabul">
							<?php
							$li = '';
							$i = 1;
							foreach($designer_tiles as $key => $des_tls)
							{
								$cls = '';
								if($i == 1)
								{
									$cls = 'active';
								}
								$li .= '<li class="tabulli '.$cls.'"><a onclick="showsimilartab(this);" data-index="'.$key.'">'.$key.'</a>';
								$li .= '</li>';
								$i++;
							}
							echo $li;
							?>
						</ul>
						<div class="tabcntr">
							<?php
							$html = '';
							$i = 1;
							foreach($designer_tiles as $key => $des_tls)
							{
								$cls = '';
								if($i == 1)
								{
									$cls = 'active';
								}
								$html .= '<div class="tabinrsngl '.$cls.'" data-index="'.$key.'">';
									$inner_html = '';
									$li = '';
									//inner
									if(count($des_tls) > 1)
									{
										$j = 1;
										$li .= '<ul class="tabulsub">';
										foreach($des_tls as $dt)
										{
											$cls = '';
											if($j == 1)
											{
												$cls = 'active';
											}
											$li .= '<li class="tabullisub '.$cls.'"><a onclick="showinrsimilartab(this);" data-index="'.$dt.'">'.$dt.'</a></li>';
											$inner_html .= '<div class="tabinrsnglsub '.$cls.'" data-index="'.$dt.'">';
												$inner_html .= '<div class="tilsnglrow">';
													$inner_html .= '<div class="tilinrsnglrow">';
														$inner_html .= '<div class="tlsnglrowfullwidth">';
															$inner_html .= 'Upload Picture of your tile';
														$inner_html .= '</div>';
														$inner_html .= '<div class="tlsnglclm">';
														$dtname = get_designer_tiles_key($dt);
															$inner_html .= '<input type="button" value="Upload Tile" class="button button-primary" name="upload_tile" data-name="'.$dtname.'" onclick="upload_image(this);" />';
														$inner_html .= '</div>';
													$inner_html .= '</div>';

													$inner_html .= '<div class="tilinrsnglrow">';
													$floral_tile_images = $designer_tile_images[$dtname];
														if(!empty($floral_tile_images))
														{
															foreach($floral_tile_images as $image)
															{
																$inner_html .= '<div class="sngltlwpr"><span onclick="removetile(this)">X</span><div class="sngltl"><input type="hidden" value="'.$image.'" name="'.$dtname.'[]" /><img src="'.$image.'" /></div></div>';
															}
															//echo $inner_html;
														}
													$inner_html .= '</div>';
												$inner_html .= '</div>';
											$inner_html .= '</div>';
											$j++;
										}
										$li .= '</ul>';
										$html .= $li.$inner_html;
									}
									else
									{
										$html .= '<div class="tilsnglrow">';
											$html .= '<div class="tilinrsnglrow">';
												$html .= '<div class="tlsnglrowfullwidth">';
													$html .= 'Upload Picture of your tile';
												$html .= '</div>';
												$dtname = get_designer_tiles_key($key);
												$html .= '<div class="tlsnglclm">';
													$html .= '<input type="button" value="Upload Tile" class="button button-primary" name="upload_tile" data-name="'.$dtname.'" onclick="upload_image(this);" />';
												$html .= '</div>';
											$html .= '</div>';

											$html .= '<div class="tilinrsnglrow">';
												$floral_tile_images = $designer_tile_images[$dtname];
												if(!empty($floral_tile_images))
												{
													foreach($floral_tile_images as $image)
													{
														$html .= '<div class="sngltlwpr"><span onclick="removetile(this)">X</span><div class="sngltl"><input type="hidden" value="'.$image.'" name="'.$dtname.'[]" /><img src="'.$image.'" /></div></div>';
													}
													//echo $html;
												}
											$html .= '</div>';
										$html .= '</div>';
									}
									//inner

								$html .= '</div>';
								$i++;
							}
							echo $html;
							?>

						</div>
						
					</div>

					<div class="tilsnglrow">

						<div class="tilinrsnglrow">
							<input type="hidden" name="designer_tiles_images_submit" />
							<input type="submit" name="Save" value="Save" class="button button-primary" />
						</div>

					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>