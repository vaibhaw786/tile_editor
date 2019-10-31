<?php
error_reporting(0);
add_shortcode('vc_design_decorative', 'vc_design_decorative_cb');
function vc_design_decorative_cb()
{
	$html = '';
	$html .= '<div id="wrapper">';
		$html .= '<nav class="navbar navbar-default" role="navigation">';
			$html .= '<div class="navbar-header">';
				$html .= '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
					$html .= '<span class="sr-only">Toggle navigation</span>';
					$html .= '<span class="icon-bar"></span>';
					$html .= '<span class="icon-bar"></span>';
					$html .= '<span class="icon-bar"></span>';
				$html .= '</button>';
				$html .= '<a class="navbar-brand" href="'.home_url().'"><img src="'.VC_URL.'img/victorian-cermaics-logo.png" alt=""></a>';
			$html .= '</div>';
			/*$html .= '<ul class="nav navbar-left">';
				$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src="'.VC_URL.'img/back_icon.png" alt="">';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src="'.VC_URL.'img/back_icon02.png" alt="">';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src="'.VC_URL.'img/rotated_icon01.png" alt="">';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src="'.VC_URL.'img/rotated_icon02.png" alt="">';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<div id="colorSelector" class="color_pik">';
						$html .= '<div style="background-color: #ffffff"></div>';
					$html .= '</div>'; 
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src="'.VC_URL.'img/question_icon.png" alt="">';
					$html .= '</a>';
				$html .= '</li>';
			$html .= '</ul>';*/

			$html .= '<ul class="nav navbar-top-links navbar-right">';
				// $html .= '<li>';
				// 	$html .= '<a class="">';
				// 		$html .= '<i class="fa fa-file-text-o" aria-hidden="true"></i>';
				// 	$html .= '</a>';
				// $html .= '</li>';
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

			$html .= '<div class="navbar-default sidebar" role="navigation">';
				$html .= '<div class="sidebar-nav">';
					$html .= '<div class="demo">';
						$html .= '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
							$html .= '<div class="panel panel-default">';
								$html .= '<div class="panel-heading" role="tab" id="headingTwo">';
									$html .= '<h4 class="panel-title">';
										$html .= '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">';
											$html .= '<i class="more-less glyphicon glyphicon-plus"></i>';
											$html .= 'PRINTED TILES';
										$html .= '</a>';
									$html .= '</h4>';
								$html .= '</div>';
								$html .= '<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">';
									
									/*$html .= '<div class="form-group pringted _select">';
										$html .= '<select class="form-control" id="sel1">';
											$html .= '<option>Floral Tiles</option>';
											$html .= '<option>Floral Tiles2</option>';
											$html .= '<option>Floral Tiles3</option>';
											$html .= '<option>Floral Tiles4</option>';
										$html .= '</select>';
									$html .= '</div>';
									$html .= '<div class="panel-body printed_tiles">';
										$html .= '<ul>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img01.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img02.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img03.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img04.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img05.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img06.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img07.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img08.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="decorative_draggable draggable">';
													$html .= '<img src="'.VC_URL.'img/tils_img09.jpg">';
												$html .= '</div>';
											$html .= '</li>';
										$html .= '</ul>';
									$html .= '</div>';*/

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
															$html2 .= '<div class="decorative_draggable printtiles">';
																$html2 .= '<img src='.$image.'" />';
															$html2 .= '</div>';
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
						$html .= '</div>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
		$html .= '</nav>';

		$html .= '<div class="page-wrapper decorative_wrapper">';
			$html .= '<div class="decorative_card">';
				$html .= '<div id="decorative_droppable" class="decorative_droppable"></div>';
			$html .= '</div>';
		$html .= '</div>';

	$html .= '</div>';

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
						$html .= '<input type="button" onclick="save_share_editor(this);" data-type="design_decorative" value="Save & Share" class="btn btn-default back_btn">';
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