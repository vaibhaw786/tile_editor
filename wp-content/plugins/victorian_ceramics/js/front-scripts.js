jQuery(function(){
  jQuery('[data-toggle="tooltip"]').tooltip();
  jQuery(".side-nav .collapse").on("hide.bs.collapse", function() {                   
      jQuery(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
  });
  jQuery('.side-nav .collapse').on("show.bs.collapse", function() {                        
      jQuery(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
  });

  jQuery(".prchpupcalr").click(function(){
    var porch = jQuery(this).attr("data-porch");
    jQuery("#poarch_popup").modal("show");
    jQuery(".showrespectivedsgn").attr("data-porch", porch);
  });

  jQuery(".showrespectivedsgn").click(function(){
    var tiles = jQuery("input[name='radio']:checked").val();
    var porch = jQuery(this).attr("data-porch");
    //alert(tiles);
    //alert(porch);
    jQuery("#poarch_popup").modal("hide");
    jQuery(".porch_main_box").hide();
    jQuery(".porch_main_box."+porch+"."+tiles).show();

  });

  //deleting all tiles
  jQuery(".deletealltiles").click(function(){
    if (jQuery('#droppable .dropped ').hasClass("vc_selected") ) {
      var cnfrm = confirm("Are you sure? this tile will be removed.");
      if(cnfrm)
      {
        jQuery("#droppable .vc_selected").remove();
        //jQuery("#droppable").html("");
      }
    }
  });
  //deleting all tiles

  //selecting element on click and deselecting on outside click
  jQuery(document).on("click", '.ui-draggable', function(event) { 
    var flag = false;
    if(jQuery(this).hasClass("vc_selected"))
    {
      flag = true;
    }
    jQuery(".ui-draggable").removeClass("vc_selected");
    if(!flag)
    {
      jQuery(this).addClass("vc_selected");
    }
    event.stopPropagation();
  });
  //selecting element on click and deselecting on outside click

jQuery(document).on('click','.panel-body.plain_list > ul > li > div.ui-draggable' , function(){
  jQuery(this).removeClass('vc_selected');
});

jQuery(document).on('click','.design_part_sec  .img-box a img' , function(){ 
  jQuery('.design_part_sec .row div .img-box').removeClass('porch_selects');
  jQuery(this).closest('div.img-box').addClass('porch_selects');
});
jQuery(document).on('click','.showrespectivedsgn',function(){
  jQuery('.design_part_sec .row div .img-box').removeClass('porch_select');
  jQuery('.porch_selects').addClass('porch_select');
  jQuery('.design_part_sec .row div .img-box').removeClass('porch_selects');
});
  //rotating element
  jQuery(".rotateitem").click(function() {
    var d = jQuery(this).attr("data-item");
    if(d == "atc")
    {
      if(jQuery("#droppable .vc_selected").hasClass("rotate-270"))
      {
        jQuery("#droppable .vc_selected").removeClass("rotate-270");
        jQuery("#droppable .vc_selected").addClass("rotate-180");
      }
      else
      {
        if(jQuery("#droppable .vc_selected").hasClass("rotate-180"))
        {
          jQuery("#droppable .vc_selected").removeClass("rotate-180");
          jQuery("#droppable .vc_selected").addClass("rotate-90");
        }
        else
        {
          if(jQuery("#droppable .vc_selected").hasClass("rotate-90"))
          {
            jQuery("#droppable .vc_selected").removeClass("rotate-90");
          }
          else
          {
            jQuery("#droppable .vc_selected").addClass("rotate-270");
          }
        }
      }
    }
    else
    {
      if(jQuery("#droppable .vc_selected").hasClass("rotate-90"))
      {
        jQuery("#droppable .vc_selected").removeClass("rotate-90");
        jQuery("#droppable .vc_selected").addClass("rotate-180");
      }
      else
      {
        if(jQuery("#droppable .vc_selected").hasClass("rotate-180"))
        {
          jQuery("#droppable .vc_selected").removeClass("rotate-180");
          jQuery("#droppable .vc_selected").addClass("rotate-270");
        }
        else
        {
          if(jQuery("#droppable .vc_selected").hasClass("rotate-270"))
          {
            jQuery("#droppable .vc_selected").removeClass("rotate-270");
          }
          else
          {
            jQuery("#droppable .vc_selected").addClass("rotate-90");
          }
        }
      }
    }
    
  });
  //rotating element

// rotating element by click on element


/*  jQuery(document).on('dblclick','#droppable .dropped.ui-draggable',function() {
    var top_off = jQuery(this).offset().top - jQuery("#droppable").offset().top;
    var tt = Math.abs(top_off);
    tt = Math.round(tt);
    if (tt < 50) {
      jQuery(this).css('top','50px');
    }
      if(jQuery(this).hasClass("rotate-270"))
      {
        jQuery(this).removeClass("rotate-270");

      }
      else
      {
        if(jQuery(this).hasClass("rotate-180"))
        {
          jQuery(this).removeClass("rotate-180");
          jQuery(this).addClass("rotate-270");
        }
        else
        {
          if(jQuery(this).hasClass("rotate-90"))
          {
            jQuery(this).removeClass("rotate-90");
            jQuery(this).addClass("rotate-180");
          }
          else
          {
            jQuery(this).addClass("rotate-90");            
          }
        }
      }
    
  });*/

// rotating element by click on element


// ============== tiles rotation script 24-1-2019 ==================


jQuery(document).on('dblclick','#droppable .dropped',function() {

var divwidth = 0 ; var divheight = 0 ; var divleft = 0; var divtop = 0;var half_width = 0; 
var half_height = 0;var parent_width = 0;var parent_height = 0;

parent_width = jQuery(this).closest('div#droppable').width();

parent_height = jQuery(this).closest('div#droppable').height();

divwidth = jQuery(this).width();

divheight = jQuery(this).height();

divleft = jQuery(this).position().left;



divtop = jQuery(this).position().top;

half_width = divwidth  / 2;

half_height = divheight / 2;

var calc_left = parseInt(divleft) + parseInt(half_width) -  parseInt(half_height) ;

var calc_top = parseInt(divtop) - parseInt(half_width) + parseInt(half_height);
 if(calc_top < 0){
  calc_top = 0;
 }

if(parent_width <= (parseInt(divleft) + parseInt(divwidth)) ){
  calc_left = parent_width - divheight ;
  calc_left = calc_left - parseInt(half_width);
}

if(parent_height <= (parseInt(divtop) + parseInt(divheight)) ){
  calc_top = parent_height - divwidth ;
}

jQuery(this).css('width',divheight);
jQuery(this).css('height',divwidth);
jQuery(this).find('div').css('width',divheight);
jQuery(this).find('div').css('height',divwidth);
jQuery(this).css('left',calc_left);
jQuery(this).css('top',calc_top);



   /* if(jQuery(this).hasClass("rotate-270"))
      {
        jQuery(this).removeClass("rotate-270");

      }
      else
      {
        if(jQuery(this).hasClass("rotate-180"))
        {
          jQuery(this).removeClass("rotate-180");
          jQuery(this).addClass("rotate-270");
        }
        else
        {
          if(jQuery(this).hasClass("rotate-90"))
          {
            jQuery(this).removeClass("rotate-90");
            jQuery(this).addClass("rotate-180");
          }
          else
          {
            jQuery(this).addClass("rotate-90");            
          }
        }
      }*/




});


  //save & share
  jQuery(".vc_saveandshare").click(function(e){
    jQuery("#vce_emailform").modal("show");
  });
  //save & share

})

function validate_dashboard()
{
	jQuery(".cstmedt_width").removeClass("invalid-error").next(".invalid-feedback").html("");
	jQuery(".cstmedt_height").removeClass("invalid-error").next(".invalid-feedback").html("");

	var flag = true;
	var intreg = /^\d+$/g;
	var cstmedt_width = jQuery(".cstmedt_width").val();
	var cstmedt_height = jQuery(".cstmedt_height").val();
  
  var flag_width = intreg.test(cstmedt_width);
  intreg = /^\d+$/g;
  var flag_height = intreg.test(cstmedt_height);
  
	if(!flag_width)
	{
		flag = false;
		jQuery(".cstmedt_width").addClass("invalid-error").next(".invalid-feedback").html("This field is required.");
	}
	if(!flag_height)
	{
		flag = false;
		jQuery(".cstmedt_height").addClass("invalid-error").next(".invalid-feedback").html("This field is required.");
	}
	return flag;
}

function save_share_editor(ref)
{
  jQuery("input[name='user_name']").removeClass("invalid-error").next(".invalid-feedback").html("");
  jQuery("input[name='user_mail']").removeClass("invalid-error").next(".invalid-feedback").html("");
  jQuery("input[name='user_phone']").removeClass("invalid-error").next(".invalid-feedback").html("");
  jQuery("textarea[name='user_message']").removeClass("invalid-error").next(".invalid-feedback").html("");

  var flag = true;
  var intreg = /^\d+$/g;
  var mlreg = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  var nm = jQuery("input[name='user_name']").val();
  var mail = jQuery("input[name='user_mail']").val();
  var phn = jQuery("input[name='user_phone']").val();
  var msg = jQuery("textarea[name='user_message']").val();
  var typ = jQuery(ref).attr("data-type");

  if( nm.trim() == "" )
  {
    flag = false;
    jQuery("input[name='user_name']").addClass("invalid-error").next(".invalid-feedback").html("Please enter your name.");
  }

  var flag_email =  mlreg.test(mail);
  if( !flag_email )
  {
    flag = false;
    jQuery("input[name='user_mail']").addClass("invalid-error").next(".invalid-feedback").html("Email address is not valid.");
  }

  var flag_phn = intreg.test(phn);
  if(!flag_phn)
  {
    flag = false;
    jQuery("input[name='user_phone']").addClass("invalid-error").next(".invalid-feedback").html("Must be integer.");
  }

  if( msg.trim() == "" )
  {
    flag = false;
    jQuery("textarea[name='user_message']").addClass("invalid-error").next(".invalid-feedback").html("Please enter your message.");
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
            jQuery("input[name='user_name']").val("");
            jQuery("input[name='user_mail']").val("");
            jQuery("input[name='user_phone']").val("");
            jQuery("textarea[name='user_message']").val("");
        }
    });
  }

}

function showmyfloral(ref)
{
  var slctd = jQuery(ref).val();
  jQuery(".childsubfloral").hide();
  jQuery(".floraldsgn").hide();
  var sub = jQuery(".childsubfloral."+slctd).length;
  if(sub)
  {
    jQuery(".childsubfloral."+slctd).show();
    var vl = jQuery(".childsubfloral."+slctd).val();
    jQuery(".floraldsgn."+vl).show();
  }
  else
  {
    
    jQuery(".floraldsgn."+slctd).show();
  }
  /*jQuery.ajax({
      url: ajax_login_object.ajaxurl,
      type: "POST",
      data: {"selected": slctd, action : "showdesigntiles"},
      success: function(data) {
          jQuery(".printed_tiles").children(".floraldsgn").html(data);
      }
  });*/
}

function showmyinnerfloral(ref)
{
  var slctd = jQuery(ref).val();
  jQuery(".floraldsgn").hide();
  jQuery(".floraldsgn."+slctd).show();
  /*jQuery.ajax({
      url: ajax_login_object.ajaxurl,
      type: "POST",
      data: {"selected": slctd, action : "showinnerdesigntiles"},
      success: function(data) {
          jQuery("#sel1small").next("div").html(data);
      }
  });*/
}