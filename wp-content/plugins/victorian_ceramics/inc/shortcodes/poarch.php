<?php
add_shortcode('vc_poarch', 'vc_poarch_cb');
function vc_poarch_cb( $attr, $content=null )
{
	$html = "";
	$html .= '<div id="wrapper" class="design_poarch_page">
		<nav class="navbar navbar-default" role="navigation">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="'.home_url().'"><img src="'.VC_URL.'img/victorian-cermaics-logo.png" alt=""></a>
			</div>

			<ul class="nav navbar-left">
				<!--<li>
					<a href="#">
						<img src="'.VC_URL.'img/back_icon.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="'.VC_URL.'img/back_icon02.png" alt="">
					</a>
				</li>-->
				<li>
					<a href="#">
						<img src="'.VC_URL.'img/rotated_icon01.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="'.VC_URL.'img/rotated_icon02.png" alt="">
					</a>
				</li>
				<li>
					<div id="colorSelector">
						<div style="background-color:#ffffff"></div>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="'.VC_URL.'img/question_icon.png" alt="">
					</a>
				</li>
			</ul>
			<div class="dropdown pattern_dropdown top_bar_color_menu poarch_dropdown01">
								  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
								  	<img src="'.VC_URL.'img/color_pic_dropdown11.png">
								   </button>
								  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								    <li role="presentation" class="dropdown-header poarch_dropdown_1" data-class="poarch_dropdown_1">
								    	<img src="'.VC_URL.'img/01.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_2" data-class="poarch_dropdown_2">
								    	<img src="'.VC_URL.'img/02.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_3" data-class="poarch_dropdown_3">
								    	<img src="'.VC_URL.'img/03.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_4" data-class="poarch_dropdown_4">
								    	<img src="'.VC_URL.'img/04.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_5" data-class="poarch_dropdown_5">
								    	<img src="'.VC_URL.'img/05.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_6" data-class="poarch_dropdown_6">
								    	<img src="'.VC_URL.'img/06.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_7" data-class="poarch_dropdown_7">
								    	<img src="'.VC_URL.'img/07.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_8" data-class="poarch_dropdown_8">
								    	<img src="'.VC_URL.'img/08.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_9 selected" data-class="poarch_dropdown_9">
								    	<img src="'.VC_URL.'img/09.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_10" data-class="poarch_dropdown_10">
								    	<img src="'.VC_URL.'img/10.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_11" data-class="poarch_dropdown_11">
								    	<img src="'.VC_URL.'img/11.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_12" data-class="poarch_dropdown_12">
								    	<img src="'.VC_URL.'img/12.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_13" data-class="poarch_dropdown_13">
								    	<img src="'.VC_URL.'img/13.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_14" data-class="poarch_dropdown_14">
								    	<img src="'.VC_URL.'img/14.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_15" data-class="poarch_dropdown_15">
								    	<img src="'.VC_URL.'img/15.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_16" data-class="poarch_dropdown_16">
								    	<img src="'.VC_URL.'img/16.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_17" data-class="poarch_dropdown_17">
								    	<img src="'.VC_URL.'img/17.png">
								    </li>
								    <li role="presentation" class="dropdown-header poarch_dropdown_18" data-class="poarch_dropdown_18">
								    	<img src="'.VC_URL.'img/18.png">
								    </li>
								    
								  </ul>
								</div>
			<ul class="nav navbar-top-links navbar-right">
				<li>
					<a class="">
						<i class="fa fa-file-text-o" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="">
						<i class="fa fa-share-alt" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="">
						<i class="fa fa-info" aria-hidden="true"></i>
					</a>
				</li>
			</ul>

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav">
					<div class="demo">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<i class="more-less glyphicon glyphicon-plus"></i>
											PRINTED TILES
										</a>
									</h4>
								</div>

								<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">';
									
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
															$html2 .= '<div class="draggable3">';
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
									
								$html .= '</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="select_design_sec">
				<div class="title_sec">
					<span>Select a Design</span>
				</div>

				<div class="design_part_sec">
					<div class="row">
						
						<div class="col-md-6">
							<div class="img-box">
								<a class="prchpupcalr" data-porch="one_porch">
									<img src="'.VC_URL.'img/Rectangle_img01.png" />
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="img-box">
								<a class="prchpupcalr" data-porch="two_porch">
									<img src="'.VC_URL.'img/Rectangle_img02.png" />
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="img-box">
								<a class="prchpupcalr" data-porch="three_porch">
									<img src="'.VC_URL.'img/Rectangle_img03.png" />
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="img-box">
								<a class="prchpupcalr" data-porch="four_porch">
									<img src="'.VC_URL.'img/Rectangle_img05.png" />
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="img-box">
								<a class="prchpupcalr" data-porch="five_porch">
									<img src="'.VC_URL.'img/Rectangle_img04.png" />
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="img-box">
								<a class="prchpupcalr" data-porch="six_porch">
									<img src="'.VC_URL.'img/Rectangle_img06.png" />
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="img-box">
								<a class="prchpupcalr" data-porch="saven_porch">
									<img src="'.VC_URL.'img/Rectangle_img07.png" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</nav>
 
		<div class="page-wrapper poarch_main_boxs">
			
			<div class="porch_main_box one_porch three_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>

				<div class="top_one_and_half  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="top_one_and_half  pixel"></div>

				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>

				<div class="one_and_half  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="one_and_half  pixel"></div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box one_porch four_tiles" data-class="">
				<div class="one_and_half  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="one_and_half  pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				
				<div class="full_taxure_left">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box one_porch five_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="top_one_and_half  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="top_one_and_half  pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="one_and_half  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="one_and_half  pixel"></div>
				<div class="full_taxure_left">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>
						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>
						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>
						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>
					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>
				<div class="full_taxure_right">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box one_porch six_tiles" data-class="">
				<div class="one_and_half  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="one_and_half  pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="half_taxure taxure_pattern_half pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern_half pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				
				<div class="full_taxure_left">
					<div class="full_taxure_left_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_left_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_left_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_left_half pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>
						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>
					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_left_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_left_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_left_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_left_half pixel"></div>
				</div>
				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>
 
			<div class="porch_main_box one_porch saven_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="top_one_and_half  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="rib_taxure1  pixel"></div>
				<div class="top_one_and_half  pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="one_and_half  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="one_and_half  pixel"></div>

				<div class="full_taxure_left">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">        
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box two_porch three_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="full_taxure_center droppable_taxure ">
					<ul>
						<li  class="1 pixel"></li>
						<li  class="2 pixel"></li>
						<li  class="3 pixel"></li>
						<li  class="4 pixel"></li>
						<li  class="5 pixel"></li>
						<li  class="6 pixel"></li>
						<li  class="7 pixel"></li>
						<li  class="8 pixel"></li>
						<li  class="9 pixel"></li>
						<li  class="10 pixel"></li>
						<li  class="11 pixel"></li>
						<li  class="12 pixel"></li>
						<li  class="13 pixel"></li>
						<li  class="14 pixel"></li>
						<li  class="15 pixel"></li>
					</ul>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box two_porch four_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="full_taxure_left">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_center droppable_taxure ">
					<ul>
						<li  class="1 pixel"></li>
						<li  class="2 pixel"></li>
						<li  class="3 pixel"></li>
						<li  class="4 pixel"></li>
						<li  class="5 pixel"></li>
						<li  class="6 pixel"></li>
						<li  class="7 pixel"></li>
						<li  class="8 pixel"></li>
						<li  class="9 pixel"></li>
						<li  class="10 pixel"></li>
						<li  class="11 pixel"></li>
						<li  class="12 pixel"></li>
					</ul>
				</div>

				<div class="full_taxure_right">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box two_porch five_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				
				<div class="full_taxure_left">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_center droppable_taxure ">
					<ul>
						<li  class="1 pixel"></li>
						<li  class="2 pixel"></li>
						<li  class="3 pixel"></li>
						<li  class="4 pixel"></li>
						<li  class="5 pixel"></li>
						<li  class="6 pixel"></li>
						<li  class="7 pixel"></li>
						<li  class="8 pixel"></li>
						<li  class="9 pixel"></li>
						<li  class="10 pixel"></li>
						<li  class="11 pixel"></li>
						<li  class="12 pixel"></li>
					</ul>
				</div>

				<div class="full_taxure_right">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_bottom">        
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box two_porch six_tiles" data-class="">
				<div class="one_and_half  pixel pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="one_and_half  pixel pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>

				<div class="full_taxure_left">
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_center droppable_taxure ">
					<ul>
						<li  class="1 pixel"></li>
						<li  class="2 pixel"></li>
						<li  class="3 pixel"></li>
						<li  class="4 pixel"></li>
						<li  class="5 pixel"></li>
						<li  class="6 pixel"></li>
						<li  class="7 pixel"></li>
						<li  class="8 pixel"></li>
						<li  class="9 pixel"></li>
						<li  class="10 pixel"></li>
						<li  class="11 pixel"></li>
						<li  class="12 pixel"></li>
						<li  class="13 pixel"></li>
						<li  class="14 pixel"></li>
						<li  class="15 pixel"></li>
					</ul>
				</div>

				<div class="full_taxure_right">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box two_porch saven_tiles" data-class="">
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure  pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="full_taxure_left">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_center droppable_taxure ">
					<ul>
						<li  class="1 pixel"></li>
						<li  class="2 pixel"></li>
						<li  class="3 pixel"></li>
						<li  class="4 pixel"></li>
						<li  class="5 pixel"></li>
						<li  class="6 pixel"></li>
						<li  class="7 pixel"></li>
						<li  class="8 pixel"></li>
						<li  class="9 pixel"></li>
						<li  class="10 pixel"></li>
						<li  class="11 pixel"></li>
						<li  class="12 pixel"></li>
						<li  class="13 pixel"></li>
						<li  class="14 pixel"></li>
						<li  class="15 pixel"></li>
					</ul>
				</div>

				<div class="full_taxure_right">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div> 
					<div class="full_size_tiles pixel"></div> 
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div> 

			<div class="porch_main_box three_porch three_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>
					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
							<div class="third_border_left">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 ui-droppable pixel"></li>
									<li class="2 ui-droppable pixel"></li>
									<li class="3 ui-droppable pixel"></li>
								</ul>
							</div>
							<div class="third_border_right">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box three_porch four_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure taxure_pattern_half pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>

				<div class="full_taxure_left">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
							<div class="third_border_left">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 pixel"></li>
									<li class="2 pixel"></li>
									<li class="3 pixel"></li>
								</ul>
							</div>

							<div class="third_border_right">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box three_porch five_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				
				<div class="full_taxure_left">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
							<div class="third_border_left">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 ui-droppable pixel"></li>
									<li class="2 ui-droppable pixel"></li>
									<li class="3 ui-droppable pixel"></li>
								</ul>
							</div>

							<div class="third_border_right">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box three_porch six_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure taxure_pattern_half pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="full_taxure_left">
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
							<div class="third_border_left">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 ui-droppable pixel"></li>
									<li class="2 ui-droppable pixel"></li>
									<li class="3 ui-droppable pixel"></li>
								</ul>
							</div>

							<div class="third_border_right">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles_half pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>
 
			<div class="porch_main_box three_porch saven_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2  pixel"></div>

				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>

				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div> 
				<div class="rib_taxure_half pixel"></div>

				<div class="full_taxure_left">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2 pixel"></div>
							</div>
							<div class="third_border_left">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 ui-droppable pixel"></li>
									<li class="2 ui-droppable pixel"></li>
									<li class="3 ui-droppable pixel"></li>
								</ul>
							</div>

							<div class="third_border_right">
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
								<div class="third_border_tile pixel"></div>
							</div>
							<div class="third_border_top">
								<div class="half_taxure_five2  pixel"></div>
								<div class="half_taxure pixel"></div>
								<div class="half_taxure_five2  pixel"></div>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
					<div class="full_size_tiles pixel"></div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box four_porch three_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li> 
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>

					<div class="rib_taxure_half pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure_half pixel"></div>

					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box four_porch four_tiles" data-class="">
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>

				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>

				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>

				<div class="full_taxure_left_half pixel">
					<div class="full_tiles_square pixel"></div>
					<div class="full_tiles_square pixel"></div>
					<div class="full_tiles_square pixel"></div>
					<div class="full_tiles_square pixel"></div>
				</div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_taxure_left_half">
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="half_taxure_five2  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five2  pixel"></div>

					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>

					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box four_porch five_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>

				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="half_taxure_five1  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five1  pixel"></div>

				<div class="full_taxure_left">
					<div class="full_taxure_left_half">
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
					</div>
					<div class="full_taxure_left_half pixel">
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
					</div>
				</div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_taxure_left_half">
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
					</div>
					<div class="full_taxure_left_half">
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="half_taxure_five1  pixel"></div>
					<div class="half_taxure_five2  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five2  pixel"></div>
					<div class="half_taxure_five1  pixel"></div>

					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>

					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box four_porch six_tiles" data-class="">
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>

				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>

				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>

				<div class="full_taxure_left">
					<div class="full_taxure_left_half">
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
					</div>
					<div class="full_taxure_left_half">
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
					</div>
					<div class="full_taxure_left_half pixel">
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
					</div>
				</div>
				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_taxure_left_half">
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
					</div>
					<div class="full_taxure_left_half">
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
					</div>

					<div class="full_taxure_left_half">
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="half_taxure_five1  pixel"></div>
					<div class="half_taxure_five1  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five1  pixel"></div>
					<div class="half_taxure_five1  pixel"></div>

					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>

					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box four_porch saven_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>

				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>

				<div class="full_taxure_left">
					<div class="full_taxure_left_half1">
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
					</div>
					<div class="full_taxure_left_half">
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
					</div>
					<div class="full_taxure_left_half pixel">
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
					</div>
				</div>

				<div class="full_taxure_center">
					<div class="blue_border_top">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>

					<div class="blue_border_left">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_center_cont">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont porch_droppable droppable">
							<ul>
								<li  class="1 pixel"></li>
								<li  class="2 pixel"></li>
								<li  class="3 pixel"></li>
								<li  class="4 pixel"></li>
								<li  class="5 pixel"></li>
								<li  class="6 pixel"></li>
							</ul>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>

					<div class="blue_border_right">
						<div class="blue_border right_border1 pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border_full pixel"></div>
						<div class="blue_border right_border1 pixel"></div>
					</div>

					<div class="blue_border_bottom">
						<div class="blue_border square_border1 pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border_full pixel"></div>
						<div class="blue_border square_border_devide pixel"></div>
						<div class="blue_border square_border1 pixel"></div>
					</div>
				</div>

				<div class="full_taxure_right">
					<div class="full_taxure_left_half">
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
						<div class="full_tiles_square pixel"></div>
					</div>
					<div class="full_taxure_left_half">
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
						<div class="half_tiles_square pixel"></div>
					</div>

					<div class="full_taxure_left_half1">
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
						<div class="half_taxure_five pixel"></div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five1  pixel"></div>
					<div class="half_taxure_five1  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="half_taxure_five1  pixel"></div>
					<div class="half_taxure_five1  pixel"></div>
					<div class="half_taxure_five  pixel"></div>
					<div class="rib_taxure_half pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure pixel"></div>
					<div class="rib_taxure_half pixel"></div>

					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box five_porch three_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>

				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>

				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>

				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>

				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>

				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>

				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>

				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>

				<div class="full_taxure_devide pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_devide pixel"></div>

				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>

				<div class="full_taxure_devide pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_devide pixel"></div>
			</div>

			<div class="porch_main_box five_porch four_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="full_taxure_devide pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_devide pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure_five pixel"></div>
				<div class="half_taxure_five pixel"></div>
				<div class="half_taxure_five pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure_five pixel"></div>
				<div class="half_taxure_five pixel"></div>
				<div class="half_taxure_five pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
			</div>

			<div class="porch_main_box five_porch five_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="full_taxure_devide pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_devide pixel"></div>
			</div>

			<div class="porch_main_box five_porch six_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure1 taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure1 taxure_pattern pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="full_taxure_devide pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_devide pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
			</div>

			<div class="porch_main_box five_porch saven_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="half_taxure taxure_pattern pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half1 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five  pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="full_taxure_devide pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_devide pixel"></div>
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="full_taxure_devide pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_devide pixel"></div>
			</div>

			<div class="porch_main_box six_porch three_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 2 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 3 taxure_pattern2 pixel"></div>
				<div class="full_taxure 4 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 5 taxure_pattern2 pixel"></div>
				<div class="full_taxure 6 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 7 taxure_pattern2 pixel"></div>
				<div class="full_taxure 8 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 9 taxure_pattern2 pixel"></div>
				<div class="full_taxure 10 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
			</div>

			<div class="porch_main_box six_porch four_tiles" data-class="">
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="full_taxure taxure_pattern2 1 pixel"></div>
				<div class="full_taxure taxure_pattern2 2 pixel"></div>
				<div class="full_taxure taxure_pattern2 3 pixel"></div>
				<div class="full_taxure taxure_pattern2 4 pixel"></div>
				<div class="full_taxure taxure_pattern2 5 pixel"></div>
				<div class="full_taxure taxure_pattern2 6 pixel"></div>
				<div class="full_taxure taxure_pattern2 7 pixel"></div>
				<div class="full_taxure taxure_pattern2 8 pixel"></div>
				<div class="full_taxure taxure_pattern2 9 pixel"></div>
				<div class="full_taxure taxure_pattern2 10 pixel"></div>
				<div class="full_taxure taxure_pattern2 11 pixel"></div>
				<div class="full_taxure taxure_pattern2 12 pixel"></div>
				<div class="full_taxure taxure_pattern2 13 pixel"></div>
				<div class="full_taxure taxure_pattern2 14 pixel"></div>
				<div class="full_taxure taxure_pattern2 15 pixel"></div>
				<div class="full_taxure taxure_pattern2 16 pixel"></div>
				<div class="full_taxure taxure_pattern2 17 pixel"></div>
				<div class="full_taxure taxure_pattern2 18 pixel"></div>
				<div class="full_taxure taxure_pattern2 19 pixel"></div>
				<div class="full_taxure taxure_pattern2 20 pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure2 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure2 pixel"></div>
				<div class="full_taxure_half pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_half pixel"></div>
			</div>

			<div class="porch_main_box six_porch five_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div> 
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 2 taxure_pattern2 pixel"></div>
				<div class="full_taxure 3 taxure_pattern2 pixel"></div>
				<div class="full_taxure 4 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 5 taxure_pattern2 pixel"></div>
				<div class="full_taxure 6 taxure_pattern2 pixel"></div>
				<div class="full_taxure 7 taxure_pattern2 pixel"></div>
				<div class="full_taxure 8 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 9 taxure_pattern2 pixel"></div>
				<div class="full_taxure 10 taxure_pattern2 pixel"></div>
				<div class="full_taxure 11 taxure_pattern2 pixel"></div>
				<div class="full_taxure 12 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 13 taxure_pattern2 pixel"></div>
				<div class="full_taxure 14 taxure_pattern2 pixel"></div>
				<div class="full_taxure 15 taxure_pattern2 pixel"></div>
				<div class="full_taxure 16 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 17 taxure_pattern2 pixel"></div>
				<div class="full_taxure 18 taxure_pattern2 pixel"></div>
				<div class="full_taxure 19 taxure_pattern2 pixel"></div>
				<div class="full_taxure 20 taxure_pattern2 pixel"></div>
				<div class="half_taxure2 taxure_pattern2 pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
			</div>

			<div class="porch_main_box six_porch six_tiles" data-class="">
				<div class="half_taxure  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="full_taxure 1 taxure_pattern2 pixel"></div>
				<div class="full_taxure 2 taxure_pattern2 pixel"></div>
				<div class="full_taxure 3 taxure_pattern2 pixel"></div>
				<div class="full_taxure 4 taxure_pattern2 pixel"></div>
				<div class="full_taxure 5 taxure_pattern2 pixel"></div>
				<div class="full_taxure 6 taxure_pattern2 pixel"></div>
				<div class="full_taxure 7 taxure_pattern2 pixel"></div>
				<div class="full_taxure 8 taxure_pattern2 pixel"></div>
				<div class="full_taxure 9 taxure_pattern2 pixel"></div>
				<div class="full_taxure 10 taxure_pattern2 pixel"></div>
				<div class="full_taxure 11 taxure_pattern2 pixel"></div>
				<div class="full_taxure 12 taxure_pattern2 pixel"></div>
				<div class="full_taxure 13 taxure_pattern2 pixel"></div>
				<div class="full_taxure 14 taxure_pattern2 pixel"></div>
				<div class="full_taxure 15 taxure_pattern2 pixel"></div>
				<div class="full_taxure 16 taxure_pattern2 pixel"></div>
				<div class="full_taxure 17 taxure_pattern2 pixel"></div>
				<div class="full_taxure 18 taxure_pattern2 pixel"></div>
				<div class="full_taxure 19 taxure_pattern2 pixel"></div>
				<div class="full_taxure 20 taxure_pattern2 pixel"></div>
				<div class="full_taxure 21 taxure_pattern2 pixel"></div>
				<div class="full_taxure 22 taxure_pattern2 pixel"></div>
				<div class="full_taxure 23 taxure_pattern2 pixel"></div>
				<div class="full_taxure 24 taxure_pattern2 pixel"></div>
				<div class="full_taxure 25 taxure_pattern2 pixel"></div>
				<div class="full_taxure 26 taxure_pattern2 pixel"></div>
				<div class="full_taxure 27 taxure_pattern2 pixel"></div>
				<div class="full_taxure 28 taxure_pattern2 pixel"></div>
				<div class="full_taxure 29 taxure_pattern2 pixel"></div>
				<div class="full_taxure 30 taxure_pattern2 pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure2 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure2 pixel"></div>
				<div class="full_taxure_half pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure_half pixel"></div>
			</div>

			<div class="porch_main_box six_porch saven_tiles" data-class="">
				<div class="half_taxure_five2  pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure_five2 pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure1 taxure_pattern2 pixel 1"></div>
				<div class="full_taxure taxure_pattern2 pixel 2"></div>
				<div class="full_taxure taxure_pattern2 pixel 3"></div>
				<div class="full_taxure taxure_pattern2 pixel 4"></div>
				<div class="full_taxure taxure_pattern2 pixel 5"></div>
				<div class="full_taxure taxure_pattern2 pixel 6"></div>
				<div class="full_taxure taxure_pattern2 pixel 7"></div>
				<div class="half_taxure2 taxure_pattern2 pixel 8"></div>
				<div class="half_taxure1 taxure_pattern2 pixel 9"></div>
				<div class="full_taxure taxure_pattern2 pixel 10"></div>
				<div class="full_taxure taxure_pattern2 pixel 11"></div>
				<div class="full_taxure taxure_pattern2 pixel 12"></div>
				<div class="full_taxure taxure_pattern2 pixel 13"></div>
				<div class="full_taxure taxure_pattern2 pixel 14"></div>
				<div class="full_taxure taxure_pattern2 pixel 15"></div>
				<div class="half_taxure2 taxure_pattern2 pixel 16"></div>
				<div class="half_taxure1 taxure_pattern2 pixel 17"></div>
				<div class="full_taxure taxure_pattern2 pixel 18"></div>
				<div class="full_taxure taxure_pattern2 pixel 19"></div>
				<div class="full_taxure taxure_pattern2 pixel 20"></div>
				<div class="full_taxure taxure_pattern2 pixel 21"></div>
				<div class="full_taxure taxure_pattern2 pixel 22"></div>
				<div class="full_taxure taxure_pattern2 pixel 23"></div>
				<div class="half_taxure2 taxure_pattern2 pixel 24"></div>
				<div class="half_taxure1 taxure_pattern2 pixel 25"></div>
				<div class="full_taxure taxure_pattern2 pixel 26"></div>
				<div class="full_taxure taxure_pattern2 pixel 27"></div>
				<div class="full_taxure taxure_pattern2 pixel 28"></div>
				<div class="full_taxure taxure_pattern2 pixel 29"></div>
				<div class="full_taxure taxure_pattern2 pixel 30"></div>
				<div class="full_taxure taxure_pattern2 pixel 31"></div>
				<div class="half_taxure2 taxure_pattern2 pixel 32"></div>
				<div class="half_taxure1 taxure_pattern2 pixel 33"></div>
				<div class="full_taxure taxure_pattern2 pixel 34"></div>
				<div class="full_taxure taxure_pattern2 pixel 35"></div>
				<div class="full_taxure taxure_pattern2 pixel 36"></div>
				<div class="full_taxure taxure_pattern2 pixel 37"></div>
				<div class="full_taxure taxure_pattern2 pixel 38"></div>
				<div class="full_taxure taxure_pattern2 pixel 39"></div>
				<div class="half_taxure2 taxure_pattern2 pixel 40"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="rib_taxure1 pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
				<div class="full_taxure pixel"></div>
			</div>

			<div class="porch_main_box saven_porch three_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>

				<div class="center_cont_overlap">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>

					<div class="full_taxure_center">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 pixel"></li>
									<li class="2 pixel"></li>
									<li class="3 pixel"></li>
								</ul>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box saven_porch four_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				
				<div class="center_cont_overlap">
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>

					<div class="full_taxure_center">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 ui-droppable pixel"></li>
									<li class="2 ui-droppable pixel"></li>
									<li class="3 ui-droppable pixel"></li>
								</ul>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="porch_main_box saven_porch five_tiles" data-class="">
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>

				<div class="center_cont_overlap">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>

					<div class="full_taxure_center">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 ui-droppable pixel"></li>
									<li class="2 ui-droppable pixel"></li>
									<li class="3 ui-droppable pixel"></li>
								</ul>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>
				</div>

				<div class="full_taxure_bottom">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
				</div>
			</div>

			<div class="porch_main_box saven_porch six_tiles" data-class="">
				<div class="half_taxure1 pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure1 pixel"></div>

				<div class="rib_taxure_half pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure_half pixel"></div>

				<div class="center_cont_overlap">
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure_half pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure_half pixel"></div>

					<div class="full_taxure_center">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_contnt droppable">
								<ul>
									<li class="1 ui-droppable pixel"></li>
									<li class="2 ui-droppable pixel"></li>
									<li class="3 ui-droppable pixel"></li>
								</ul>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>
				</div>
			</div> 

			<div class="porch_main_box saven_porch saven_tiles" data-class="poarch_dropdown_9"> 
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="half_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>
				<div class="rib_taxure pixel"></div>

				<div class="center_cont_overlap">
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>
					<div class="full_taxure pixel"></div>

					<div class="full_taxure_center">
						<div class="skyblue_border_top">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>

						<div class="skyblue_border_left">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_cont">
							<div class="third_border_contnt">
								<ul>
									<li class="1 ui-droppable pixel"></li>
									<li class="2 ui-droppable pixel"></li>
									<li class="3 ui-droppable pixel"></li>
								</ul>
							</div>
						</div>

						<div class="skyblue_border_right">
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
							<div class="skyblue_border right_border_full pixel"></div>
						</div>

						<div class="skyblue_border_bottom">
							<div class="skyblue_border top_border1 pixel"></div>
							<div class="skyblue_border top_border_full pixel"></div>
							<div class="skyblue_border top_border1 pixel"></div>
						</div>
					</div>
				</div>
			</div>
 
		</div> 
 
	</div>

	<div class="modal fade tiles_popup poarch_popup" id="poarch_popup" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Size of your Area</h4>
				</div>

				<div class="modal-body">
					<p>Please select the width you require from the menu below and then the click ‘start designing’ to personalise your porch tile design</p>
					<div class="size_sec">
						<label class="redio_btn_box">3 tiles ( 1’6”/45cm)
							<input type="radio" checked="checked" name="radio" value="three_tiles" />
							<span class="checkmark"></span>
						</label>
						<label class="redio_btn_box">4 tiles ( 2’0”/60cm)
							<input type="radio" name="radio" value="four_tiles" />
							<span class="checkmark"></span>
						</label>
						<label class="redio_btn_box">5 tiles ( 2’6”/75cm)
							<input type="radio" name="radio" value="five_tiles" />
							<span class="checkmark"></span>
						</label>
						<label class="redio_btn_box">6 tiles ( 3’0”/90cm)
							<input type="radio" name="radio" value="six_tiles">
							<span class="checkmark"></span>
						</label>
						<label class="redio_btn_box">7 tiles ( 3’6”/105cm)
							<input type="radio" name="radio" value="saven_tiles" />
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default close_btn" data-dismiss="modal">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<a class="btn btn-default back_btn showrespectivedsgn">
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
			</div> 
		</div>
	</div>';

	//modal
	/*$html .= '<div class="modal fade tiles_popup" id="vce_emailform" role="dialog">';
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
	$html .= '</div>';*/
	//modal
	$html .='<script type="text/javascript">
		
    jQuery(".poarch_dropdown01 ul li").click(function(){
      jQuery(".poarch_dropdown01 ul li").removeClass("selected");   
      jQuery(this).addClass("selected");   
      var cls = jQuery(this).attr("data-class");
      var prvcls = jQuery(".porch_main_box.saven_porch.saven_tiles").attr("data-class");
      jQuery(".porch_main_box.saven_porch.saven_tiles").removeClass(prvcls)
      jQuery(".porch_main_box.saven_porch.saven_tiles").addClass(cls).attr("data-class", cls);
     }); 
 

  jQuery(".pixel").click(function(){
    var cls = jQuery(".porch_main_box.saven_porch.saven_tiles").attr("data-class");
    //jQuery(this).attr("class", "full_taxure pixel");
    var clss = jQuery(this).attr("class");
    //var classs = clss.match("poarch_dropdown_");
    var classs = this.className.match(/poarch_dropdown_(\d+)/);
    if(classs != null)
    {
      jQuery(this).removeClass(classs[0]);
    }
    //console.log(classs);
    jQuery(this).addClass(cls);
     
  });
        var temp1;
        jQuery( ".draggable3" ).draggable({helper: "clone",start: function (e1, u1) {
          temp1 = jQuery(e1.currentTarget).clone();
        for( i = 1 ; i < 41 ; i++){

          jQuery( "."+i ).droppable({ 
            drop: function( event, u1i ) {
              console.log(this); 
              jQuery( this ).html(temp1); 
              jQuery(".panel-body.printed_tiles > ul > li > div:nth-child(n+2)").remove();
              jQuery("ul.floraldsgn.selected > li > div.ui-draggable-dragging").remove();
            }
          });
        }   
         console.log(jQuery(e1.currentTarget));
        }});
      
  jQuery(".prchpupcalr").click(function(){
    var porch = jQuery(this).attr("data-porch");
    jQuery("#poarch_popup").modal("show");
    jQuery(".showrespectivedsgn").attr("data-porch", porch);
  });

  jQuery(document).on("click",".design_part_sec  .img-box a img" , function(){ 
  jQuery(".design_part_sec .row div .img-box").removeClass("porch_selects");
  jQuery(this).closest("div.img-box").addClass("porch_selects");
});
jQuery(document).on("click",".showrespectivedsgn",function(){
  jQuery(".design_part_sec .row div .img-box").removeClass("porch_select");
  jQuery(".porch_selects").addClass("porch_select");
  jQuery(".design_part_sec .row div .img-box").removeClass("porch_selects");
});


  jQuery(".showrespectivedsgn").click(function(){
    var tiles = jQuery("input[name=\'radio\']:checked").val();
    var porch = jQuery(this).attr("data-porch");
    //alert(tiles);
    //alert(porch);
    jQuery("#poarch_popup").modal("hide");
    jQuery(".porch_main_box").hide();
    jQuery(".porch_main_box."+porch+"."+tiles).show();

  });
	</script>';
	return $html;
}
?>