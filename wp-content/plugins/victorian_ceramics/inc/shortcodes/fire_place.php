<?php
add_shortcode('vc_fire_place', 'vc_fire_place_cb');
function vc_fire_place_cb()
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

			$html .= '<ul class="nav navbar-left">';
				/*$html .= '<li>';
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
					$html .= '<a href="#">';
						$html .= '<img src="'.VC_URL.'img/copy_icon.png" alt="">';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src="'.VC_URL.'img/delete_icon.png" alt="">';
					$html .= '</a>';
				$html .= '</li>';
				$html .= '<li>';
					$html .= '<a href="#">';
						$html .= '<img src="'.VC_URL.'img/question_icon.png" alt="">';
					$html .= '</a>';
				$html .= '</li>';*/
			$html .= '</ul>';

			$html .= '<ul class="nav navbar-top-links navbar-right">';
				/*$html .= '<li>';
					$html .= '<a class="">';
						$html .= '<i class="fa fa-file-text-o" aria-hidden="true"></i>';
					$html .= '</a>';
				$html .= '</li>';*/
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
										$html .= '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<i class="more-less glyphicon glyphicon-plus"></i>
											PRINTED TILES';
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
												$html .= '<div class="draggable2">';
													$html .= '<img src="'.VC_URL.'img/tils_img01.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="draggable2">'; 
													$html .= '<img src="'.VC_URL.'img/tils_img02.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="draggable2">';
													$html .= '<img src="'.VC_URL.'img/tils_img03.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="draggable2">';
													$html .= '<img src="'.VC_URL.'img/tils_img04.jpg">';
												$html .= '</div>';
											$html .= '</li>'; 
											$html .= '<li>';
												$html .= '<div class="draggable2">';
													$html .= '<img src="'.VC_URL.'img/tils_img05.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="draggable2">';
													$html .='<img src="'.VC_URL.'img/tils_img06.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="draggable2">';
													$html .= '<img src="'.VC_URL.'img/tils_img07.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="draggable2">';
													$html .= '<img src="'.VC_URL.'img/tils_img08.jpg">';
												$html .= '</div>';
											$html .= '</li>';
											$html .= '<li>';
												$html .= '<div class="draggable2">';
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
													$html2 .= '<ul class="floraldsgn selected '.$key.'" data-parent="'.$value.'" style="'.$style.'">';
													foreach($keyimgs as $image)
													{
														$html2 .= '<li>';
															$html2 .= '<div class="draggable2 fireprinttiles">';
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

		$html .= '<div class="page-wrapper fire__place_editer">';
			$html .= '<div class="fire_box">';
				$html .= '<div id="" class="clst ">';
					$html .= '<ul>';
						$html .= '<li  class="1"></li>';
						$html .= '<li  class="2"></li>';
						$html .= '<li  class="3"></li>';
						$html .= '<li  class="4"></li>';
						$html .= '<li  class="5"></li>';
						$html .= '<li  class="6"></li>';
					$html .= '</ul>';
				$html .= '</div>';
				$html .= '<div id="" class="clsl droppable">';
					$html .= '<ul>';
						$html .= '<li  class="1"></li>';
						$html .= '<li  class="2"></li>';
						$html .= '<li  class="3"></li>';
						$html .= '<li  class="4"></li>';
						$html .= '<li  class="5"></li>';
					$html .= '</ul>';
				$html .= '</div>';
				$html .= '<div id="" class="clsc"></div>';
				$html .= '<div id="" class="clsl clsr">';
					$html .= '<ul>';
						$html .= '<li  class="6"></li>';
						$html .= '<li  class="7"></li>';
						$html .= '<li  class="8"></li>';
						$html .= '<li  class="9"></li>';
						$html .= '<li  class="10"></li>';
					$html .= '</ul>';
				$html .= '</div>';
				$html .= '<div id="" class="clst clsb">';
					$html .= '<ul>';
						$html .= '<li  class="15"></li>';
						$html .= '<li  class="16"></li>';
						$html .= '<li  class="17"></li>';
						$html .= '<li  class="18"></li>';
						$html .= '<li  class="19"></li>';
						$html .= '<li  class="20"></li>';
					$html .= '</ul>';
				$html .= '</div>';
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
						$html .= '<input type="button" onclick="save_share_editor(this);" data-type="fire_place" value="Save & Share" class="btn btn-default back_btn">';
						$html .= '</a>';
					$html .= '</div>';
					$html .= '<div class="clear"></div>';
				$html .= '</form>';
			$html .= '</div>';
		$html .= '</div>';
	$html .= '</div>';
	//modal
	$html .= '<script type="text/javascript">
	      setTimeout(function(){
          var temp;
        jQuery( ".draggable2" ).draggable({helper: "clone",start: function (e, u) {
          temp = jQuery(e.currentTarget).clone();
          
         console.log(e , u , jQuery(e.currentTarget) );
        for( i = 1 ; i < 20 ; i++){

          jQuery( "."+i ).droppable({ 
            drop: function( events, ui ) {
              console.log(this);
              jQuery( this ).html(temp); 
              jQuery("ul.floraldsgn li > div:nth-child(n+2)").remove();
              jQuery("ul.floraldsgn.selected > li > div.ui-draggable-dragging").remove();
            }
          });
        }
           }});

      },1000);
     jQuery(".vc_saveandshare").click(function(e){
	    jQuery("#vce_emailform").modal("show");
	 });

	 function save_share_editor(ref)
{
  jQuery("input[name=\'user_name\']").removeClass("invalid-error").next(".invalid-feedback").html("");
  jQuery("input[name=\'user_mail\']").removeClass("invalid-error").next(".invalid-feedback").html("");
  jQuery("input[name=\'user_phone\']").removeClass("invalid-error").next(".invalid-feedback").html("");
  jQuery("textarea[name=\'user_message\']").removeClass("invalid-error").next(".invalid-feedback").html("");

  var flag = true;
  var intreg = /^\d+$/g;
  var mlreg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  var nm = jQuery("input[name=\'user_name\']").val();
  var mail = jQuery("input[name=\'user_mail\']").val();
  var phn = jQuery("input[name=\'user_phone\']").val();
  var msg = jQuery("textarea[name=\'user_message\']").val();
  var typ = jQuery(ref).attr("data-type");

  if( nm.trim() == "" )
  {
    flag = false;
    jQuery("input[name=\'user_name\']").addClass("invalid-error").next(".invalid-feedback").html("Please enter your name.");
  }

  var flag_email =  mlreg.test(mail);
  if( !flag_email )
  {
    flag = false;
    jQuery("input[name=\'user_mail\']").addClass("invalid-error").next(".invalid-feedback").html("Email address is not valid.");
  }

  var flag_phn = intreg.test(phn);
  if(!flag_phn)
  {
    flag = false;
    jQuery("input[name=\'user_phone\']").addClass("invalid-error").next(".invalid-feedback").html("Must be integer.");
  }

  if( msg.trim() == "" )
  {
    flag = false;
    jQuery("textarea[name=\'user_message\']").addClass("invalid-error").next(".invalid-feedback").html("Please enter your message.");
  }

  if(flag)
  {
    var cntnt = jQuery(".page-wrapper").html();
    cntnt = encodeURIComponent(cntnt);
    //cntnt = btoa(cntnt);
    jQuery.ajax({
        url: ajax_login_object.ajaxurl,
        type: "POST",
        data: {"user_name": nm, "user_mail": mail, "user_phone": phn, "user_message": msg, "content": cntnt, "editor_type": typ, action : "save_share_editor"},
        success: function(data) {
            jQuery("#vce_emailform").modal("hide");
            jQuery("input[name=\'user_name\']").val("");
            jQuery("input[name=\'user_mail\']").val("");
            jQuery("input[name=\'user_phone\']").val("");
            jQuery("textarea[name=\'user_message\']").val("");
        }
    });
  }

}
	</script>';

	return $html;
}
?>