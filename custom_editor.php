<?php
add_shortcode('vc_custom_editor', 'vc_custom_editor_cb');
function vc_custom_editor_cb( $attr, $content=null )
{ error_reporting(0);
	$html = "";
	$html .= '<div id="wrapper">';
		
		$html .= '<nav class="navbar navbar-default" role="navigation">';
			
			$html .= '<div class="navbar-header">';
				$html .= '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
					$html .= '<span class="sr-only">Toggle navigation</span>';
					$html .= '<span class="icon-bar"></span>';
					$html .= '<span class="icon-bar"></span>';
					$html .= '<span class="icon-bar"></span>';
				$html .= '</button>';

				$html .= '<a class="navbar-brand" href="'.home_url().'">';
					$html .= '<img src='.VC_URL.'img/victorian-cermaics-logo.png" alt="" />';
				$html .= '</a>';
			$html .= '</div>';

			$html .= '<ul class="nav navbar-left">';
				/*$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src='.VC_URL.'img/back_icon.png" alt="" />';
					$html .= '</a>';
				$html .= '</li>';*/
				/*$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src='.VC_URL.'img/back_icon02.png" alt="" />';
					$html .= '</a>';
				$html .= '</li>';*/
				$html .= '<li>';
					$html .= '<a data-item="atc" class="rotateitem pointer">';
						$html .= '<img src='.VC_URL.'img/rotated_icon01.png" alt="" />';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a data-item="c" class="rotateitem pointer">';
						$html .= '<img src='.VC_URL.'img/rotated_icon02.png" alt="" />';
					$html .= '</a>';
				$html .= '</li>';
				/*$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src='.VC_URL.'img/copy_icon.png" alt="" />';
					$html .= '</a>';
				$html .= '</li>';*/
				$html .= '<li>';
					$html .= '<a class="deletealltiles pointer">';
						$html .= '<img src='.VC_URL.'img/delete_icon.png" alt="" />';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src='.VC_URL.'img/question_icon.png" alt="" />';
					$html .= '</a>';
				$html .= '</li>'; 
			$html .= '</ul>'; 

			$html .='<div class="dropdown pattern_dropdown top_bar_color_menu">
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
				  	<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/color_pic_dropdown11.png">
				   </button>
				  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation" class="dropdown-header pattern_dropdown_1" data-toggle="tooltip" title="Brown" data-class="pattern_dropdown_1">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/01.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_2" data-toggle="tooltip" title="Burgundy" data-class="pattern_dropdown_2">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/02.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_3" data-toggle="tooltip" title="Craquelle on Biscuit" data-class="pattern_dropdown_3">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/03.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_4" data-toggle="tooltip" title="Emerald" data-class="pattern_dropdown_4">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/04.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_5" data-toggle="tooltip" title="Deep Blue" data-class="pattern_dropdown_5">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/05.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_6" data-toggle="tooltip" title="Dark Olive" data-class="pattern_dropdown_6">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/06.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_7" data-toggle="tooltip" title="Dark Blue" data-class="pattern_dropdown_7">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/07.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_8" data-toggle="tooltip" title="Craquelle on Engobe Aged" data-class="pattern_dropdown_8">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/08.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_9 selected" data-toggle="tooltip" title="Pale Yellow" data-class="pattern_dropdown_9">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/09.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_10" data-toggle="tooltip" title="Sunflower" data-class="pattern_dropdown_10">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/10.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_11" data-toggle="tooltip" title="Light Teapot Brown" data-class="pattern_dropdown_11">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/11.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_12" data-toggle="tooltip" title="Tin White" data-class="pattern_dropdown_12">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/12.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_13" data-toggle="tooltip" title="Turquoise" data-class="pattern_dropdown_13">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/13.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_14" data-toggle="tooltip" title="Victorian Blue" data-class="pattern_dropdown_14">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/14.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_15" data-toggle="tooltip" title="Marine Blue" data-class="pattern_dropdown_15">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/15.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_16" data-toggle="tooltip" title="Olive" data-class="pattern_dropdown_16">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/16.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_17" data-toggle="tooltip" title="Engobe Craquelle" data-class="pattern_dropdown_17">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/17.png">
					</li>
					<li role="presentation" class="dropdown-header pattern_dropdown_18" data-toggle="tooltip" title="Victorian Leaf Green" data-class="pattern_dropdown_18">
						<img src="'.home_url().'/wp-content/plugins/victorian_ceramics/img/18.png">
					</li>
				</ul>
				</div>';
			$html .= '<ul class="nav navbar-top-links navbar-right">';
				$html .= '<li>';
					$html .= '<a class="vc_saveandshare">';
						$html .= '<i class="fa fa-share-alt" aria-hidden="true"></i>';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a class="vc_enquiry vc_saveandshare">';
						$html .= '<i class="fa fa-info" aria-hidden="true"></i>';
					$html .= '</a>';
				$html .= '</li>';
			$html .= '</ul>';
			
		$html .= '</nav>'; 
		// chk condation width for model popup
		if(!isset($_POST['width']))
		{
		?>
<script type="text/javascript">
		 jQuery(window).load(function(){
		 	jQuery('#myModal').modal('show');
	      }); 
        </script>
<?php
        }
		$html .= '<div class="page-wrapper"><div class="page-auto-div">';
		
		  $html .= '<div class="navbar-default sidebar" role="navigation">';
				$html .= '<div class="sidebar-nav">';
					$html .= '<div class="demo">';
						$html .= '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
							
							$html .= '<div class="panel panel-default">';
								
								$html .= '<div class="panel-heading" role="tab" id="headingOne">';
									$html .= '<h4 class="panel-title">';
										$html .= '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
											$html .= '<i class="more-less glyphicon glyphicon-minus"></i>';
											$html .= ' PLAIN TILES';
										$html .= '</a>';
									$html .= '</h4>';
								$html .= '</div>'; 

								$html .= '<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">';
									$html .= '<div class="panel-body plain_list" data-class="pattern_dropdown_9">';
										$html .= '<ul>
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 6 (152mm x 152mm)">
													<div class="grid_color1">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 4 (152mm x 101mm)">
													<div class="grid_color2">
													</div>
												</div>
											</li>
											
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 6 (152mm x 152mm) Skirting Tile">
													<div class="grid_color10">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 3 (152mm x 76mm)">
													<div class="grid_color3">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 3 (152mm x 76mm) Dado Tile">
													<div class="grid_color11">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="4 x 4 (101mm x 101mm)">
													<div class="grid_color7">
													</div>
												</div>
											</li>
											
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 2 (152mm x 50mm)">
													<div class="grid_color4">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="4 x 2 (101mm x 50mm)">
													<div class="grid_color8">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="3 x 3 (76mm x 76mm)">
													<div class="grid_color9">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 2 (152mm x 50mm) Dado Tile">
													<div class="grid_color12">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 1 (152mm x 25mm)">
													<div class="grid_color5">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="1 x 1 (25mm x 25mm)">
													<div class="grid_color6">
													</div>
												</div>
											</li>
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 1.5 (152mm x 37.5mm)">
													<div class="grid_color13">
													</div>
												</div>
											</li>
											
											<li>
												<div class="draggable" data-toggle="tooltip" title="6 x 0.5 (152mm x 0.5mm)">
													<div class="grid_color14">
													</div>
												</div>
											</li>

										</ul>';
										//generating plain tiles
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
										$html .= '<ul>';
											/*foreach($plain_tiles_width as $key=> $width)
											{
												$height = $plain_tiles_height[$key];
												$html .= '<li>';
													$html .= '<div class="draggable">';
														$html .= '<div class="grid_color1" style="width: '.$width.'px; height: '.$height.'px;"></div>';
													$html .= '</div>';
												$html .= '</li>';
											}*/

										$html .= '</ul>';
										//generating plain tiles

									$html .= '</div>';
								$html .= '</div>';
							$html .= '</div>';
							
							
							
							

							$html .= '<div class="panel panel-default">';
								$html .= '<div class="panel-heading" role="tab" id="headingTwo">';
									$html .= '<h4 class="panel-title">';
										$html .= '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">';
											$html .= '<i class="more-less glyphicon glyphicon-plus"></i>';
											$html .= ' PRINTED TILES';
										$html .= '</a>'; 
									$html .= '</h4>';
								$html .= '</div>';
								$html .= '<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">';
									$html .= '<div class="form-group pringted _select">';
										$designer_tiles = designer_tiles(); 
										$html1 = '';
										$cstmarr = array();
										$html .= '<select class="form-control" id="sel1" name="showmyfloral" onchange="showmyfloral(this);">';
											$i = 1;
											foreach($designer_tiles as $key => $dt)
											{
												$x = get_designer_tiles_key($key);
												$html .= '<option value="'.$x.'">'.$key.'</option>';
												if(count($dt) > 1)
												{
													if($i == 1)
													{
														$style = "display: block;";
													}
													else
													{
														$style = "display: none;";	
													}
													
													$html1 .= '<select style="'.$style.'" class="form-control childsubfloral '.$x.'" name="showmyinnerfloral" onchange="showmyinnerfloral(this);" data-parent="'.$key.'">';
													foreach($dt as $ddt)
													{
														$y = get_designer_tiles_key($ddt);
														$cstmarr[] = $ddt;
														$html1 .= '<option value="'.$y.'">'.$ddt.'</option>';
													}
													$html1 .= '</select>';
												}
												$cstmarr[] = $key;
												$i++;
											}
										$html .= '</select>';
										$html .= $html1;
									$html .= '</div>';
									$html .= '<div class="panel-body printed_tiles">';
										$html2 = '';
										$j = 1;
										foreach($cstmarr as $value)
										{
											if($j == 1)
											{
												$style = "display: block;";
											}
											else
											{
												$style = "display: none;";	
											}
											$key = get_designer_tiles_key($value);
											$designer_tile_images = get_option( "designer_tile_images" );
											if(!empty($designer_tile_images))
											{
												$designer_tile_images = unserialize($designer_tile_images);
											}
											
											if(isset($designer_tile_images[$key]))
											{
												$keyimgs = $designer_tile_images[$key];
												if(!empty($keyimgs))
												{
													$html2 .= '<ul class="floraldsgn  selected '.$key.'" data-parent="'.$value.'" style="'.$style.'">';
													
													foreach($keyimgs as $image)
													{
														$html2 .= '<li>';
														if ($key == 'embossed') {
														
															$html2 .= '<div class="draggable printtiles " data-classs="embossed_class">';
															$html2 .= '<img src='.$image.'" />';
															$html2 .= '</div>';
														}else{
															$html2 .= '<div class="draggable printtiles" data-classs="square_class">';
															$html2 .= '<img src='.$image.'" />';
															$html2 .= '</div>';
														}
														$html2 .= '</li>';
													}
													$html2 .= '</ul>';
												}
											}
											$j++;
										}
										$html .= $html2;
									$html .= '</div>';
								$html .= '</div>';
							$html .= '</div>';

							$html .= '<div id="colorSelector">';
								$html .= '<div style="background-color:#ffffff"></div>';
							$html .= '</div>';
						$html .= '</div>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			
			$width = "850";
			$height = "450";
			if(isset($_POST['width']))
			{
				$width = $_POST['width'];
			}
			if(isset($_POST['height']))
			{
				$height = $_POST['height'];
			}
			$html .= '<div style="width: '.$width.'px; height: '.$height.'px;" id="droppable"></div>';
		$html .= '</div></div>';
	$html .= '</div>';


     //this model before choose tile page but after change client need put here
	//modal
	$html .= '<div class="modal fade tiles_popup" id="myModal" role="dialog">';
		$html .= '<div class="modal-dialog">';
			$html .= '<div class="modal-content">';
				$html .= '<div class="modal-header">';
					$html .= '<h4 class="modal-title">Size of your area</h4>';
				$html .= '</div>';
				$html .= '<form action="'.site_url("vc-custom-editor").'" method="post" onsubmit="return validate_dashboard();">';
					$html .= '<div class="modal-body">';
						$html .= '<div class="form-group col-md-6 length">';
							$html .= '<input type="number" name="width" class="form-control cstmedt_width" placeholder="width" max="2000" />';
							$html .= '<div class="invalid-feedback"></div>';
						$html .= '</div>';
						$html .= '<div class="form-group col-md-6 width">';
							$html .= '<input type="number" name="height" class="form-control cstmedt_height" placeholder="height"  max="1000"/>';
							$html .= '<div class="invalid-feedback"></div>';
						$html .= '</div>';

						$html .= '<p style="color:#000;">Eg 2000\' x 1000\'</p>';
						// $html .= '<p>Eg 10\'x9\' or 12\'x3\' </p>';
					$html .= '</div>';
					$html .= '<div class="modal-footer">';
						$html .= '<button type="button" class="btn btn-default close_btn" data-dismiss="modal">';
							$html .= '<i class="fa fa-times" aria-hidden="true"></i>';
						$html .= '</button>';
						$html .= '<input type="submit" value="" class="btn btn-default back_btn">';
							//$html .= '<i class="fa fa-arrow-right" aria-hidden="true"></i>';
						$html .= '</a>';
					$html .= '</div>';
				$html .= '</form>';
			$html .= '</div>';
		$html .= '</div>';
	$html .= '</div>';
	//modal






	//modal
	$html .= '<div class="modal fade tiles_popup" id="vce_emailform" role="dialog">';
		$html .= '<div class="modal-dialog">';
			$html .= '<div class="modal-content">';
				$html .= '<div class="modal-header">';
					$html .= '<h4 class="modal-title">Fill below details to get this design, mailed to you.</h4>';
				$html .= '</div>';
				$html .= '<form>';
					$html .= '<div class="modal-body">';
						$html .= '<div class="form-group col-md-12 length"><small id="emailHelp" class="form-text text-muted">All fields are compulsary.</small></div>';
						$html .= '<div class="form-group col-md-6 length">';
							$html .= '<input type="text" name="user_name" class="form-control " placeholder="Your Name" />';
							$html .= '<div class="invalid-feedback"></div>';
						$html .= '</div>';
						$html .= '<div class="form-group col-md-6 length">';
							$html .= '<input type="email" name="user_mail" class="form-control" placeholder="Your Email address" />';
							$html .= '<div class="invalid-feedback"></div>';
						$html .= '</div>';

						$html .= '<div class="form-group col-md-6 length">';
							$html .= '<input type="text" name="user_phone" class="form-control " placeholder="Your Phone number" />';
							$html .= '<div class="invalid-feedback"></div>';
						$html .= '</div>';
						$html .= '<div class="form-group col-md-6 length">';
							$html .= '<textarea name="user_message" class="form-control " placeholder="Your message"></textarea>';
							$html .= '<div class="invalid-feedback"></div>';
						$html .= '</div>';
					
					$html .= '</div>';
					$html .= '<div class="modal-footer">';
						$html .= '<input type="button" onclick="save_share_editor(this);" data-type="custom_editor" value="Save & Share" class="btn btn-default back_btn">';
						$html .= '</a>';
					$html .= '</div>';
					$html .= '<div class="clear"></div>';
				$html .= '</form>';
			$html .= '</div>';
		$html .= '</div>';
	$html .= '</div>';
	//modal

	return $html;
}
?>