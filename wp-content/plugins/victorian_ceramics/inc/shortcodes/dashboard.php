<?php
add_shortcode('vc_dashboard', 'vc_dashboard_cb');
function vc_dashboard_cb( $attr, $content=null )
{
	$html = "";
	$html .= '<div class="dashboard_page">';
		/*$html .= '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">';
			$html .= '<div class="navbar-header">';
				$html .= '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">';
					$html .= '<span class="sr-only">Toggle navigation</span>';
					$html .= '<span class="icon-bar"></span>';
					$html .= '<span class="icon-bar"></span>';
					$html .= '<span class="icon-bar"></span>';
				$html .= '</button>';
				$html .= '<a class="navbar-brand" href="#">';
					$html .= '<img src="'.VC_URL.'img/victorian-cermaics-logo.png" alt="LOGO"">';
				$html .= '</a>';
			$html .= '</div>';

			$html .= '<div class="collapse navbar-collapse navbar-ex1-collapse">';
				$html .= '<ul class="nav navbar-nav side-nav">';
					$html .= '<li><a href="#">HOME</a></li>';
					$html .= '<li>';
						$html .= '<a href="#" data-toggle="collapse" data-target="#submenu-1"> ABOUT <i class="fa fa-fw fa-angle-down pull-right"></i></a>';
						$html .= '<ul id="submenu-1" class="collapse">';
							$html .= '<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>';
						$html .= '</ul>';
					$html .= '</li>';
					$html .= '<li>';
						$html .= '<a href="#" data-toggle="collapse" data-target="#submenu-1"></i> TILE RANGE  <i class="fa fa-fw fa-angle-down pull-right"></i></a>';
						$html .= '<ul id="submenu-2" class="collapse">';
							$html .= '<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>';
						$html .= '</ul>';
					$html .= '</li>';
					$html .= '<li><a href="#">TILE DESIGNER</a></li>';
					$html .= '<li><a href="#">GALLERY</a></li>';
					$html .= '<li><a href="#">BLOG</a></li>';
					$html .= '<li><a href="#">CONTACT</a></li>';

					$html .= '<ul class="social_link">';
						$html .= '<li>';
							$html .= '<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
						$html .= '</li>';
						$html .= '<li>';
							$html .= '<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
						$html .= '</li>';
						$html .= '<li>';
							$html .= '<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>';
						$html .= '</li>';
						$html .= '<li>';
							$html .= '<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
						$html .= '</li>';
					$html .= '</ul>';
				$html .= '</ul>';
			$html .= '</div>';
		$html .= '</nav>';*/

		$html .= '<div id="page-wrapper">';
			$html .= '<div class="container-fluid">';
				$html .= '<div class="row">';
					$html .= '<div class="col-sm-12 col-md-12 col-xs-12 dashboard_title">';
						$html .= '<h3>Create your own Combination</h3>';
					$html .= '</div>';
					$html .= '<div class="col-sm-12 col-md-12 col-xs-12 green_box">';
						$html .= '<p>Custom Preset</p>';
						$html .= '<div class="row">';
							$html .= '<div class="col-sm-3 col-md-3 col-xs-12 green_box_cont">';
								$html .= '<a href="'.site_url("vc-custom-editor").'">';
									$html .= '<img src="'.VC_URL.'img/imgs1.png" alt="">Different Sized <br> Tile';
								$html .= '</a>';
							$html .= '</div>';
							$html .= '<div class="col-sm-3 col-md-3 col-xs-12 green_box_cont">';
								$html .= '<a href="'.site_url("porch").'" >';
									$html .= '<img src="'.VC_URL.'img/imgs2.png" alt="">';
									$html .= 'Porch Tile';
								$html .= '</a>';
							$html .= '</div>';
							$html .= '<div class="col-sm-3 col-md-3 col-xs-12 green_box_cont">';
								$html .= '<a href="'.site_url("vc-design-decorative").'" target="_blank">';
									$html .= '<img src="'.VC_URL.'img/imgs3.png" alt="">';
									$html .= 'Decorative Pannels';
								$html .= '</a>';
							$html .= '</div>';
							$html .= '<div class="col-sm-3 col-md-3 col-xs-12 green_box_cont">';
								$html .= '<a href="'.site_url("fire-place").'"target="">';
									$html .= '<img src="'.VC_URL.'img/imgs4.png" alt="">';
									$html .= 'Fireplace combinations';
								$html .= '</a>';
							$html .= '</div>';
						$html .= '</div>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';

	$html .= '</div>';

	//modal
    // comment pop beacuase client nedds this popup on visual custom page
	/*$html .= '<div class="modal fade tiles_popup" id="myModal" role="dialog">';
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
	$html .= '</div>'; */
	//modal



	return $html;
}
?>