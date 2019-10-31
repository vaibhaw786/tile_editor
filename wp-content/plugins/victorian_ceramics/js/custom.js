
jQuery(document).ready(function(){

   // decorative design draggable js 

    jQuery(".decorative_draggable").draggable({
      zIndex:3000,
      appendTo: "#decorative_droppable",
      helper: "clone",
      // containment: "#decorative_droppable",
      start: function (e, u) {
      },
      stop: function (e, u) {
        //console.log(u.position);
      },
    });

   jQuery("#decorative_droppable").droppable({
      accept: ".decorative_draggable",
      drop:function(e,u){
        var a=u.helper.clone();
        var crp_t = u.position.top;
        var crp_l = u.position.left;
        console.log(crp_t);
        console.log(crp_l);
        var new_t = (Math.round(crp_t / 70) * 70);
        var new_l = (Math.round(crp_l / 70) * 70);
        //u.position.top = 
        a.css({
          top: new_t + "px",
          left: new_l + "px"
        });
        jQuery(this).append(a);
        jQuery(a).attr("class","dropped").draggable({
          appendTo: "#decorative_droppable",
          containment: "#decorative_droppable", 
          stop: function (e, u) {
            console.log(u.position);
            var crp_t = u.position.top;
            var crp_l = u.position.left;
            var new_t = (Math.round(crp_t / 1) * 1);
            var new_l = (Math.round(crp_l / 1) * 1);
            //u.position.top = 
            a.css({
              top: new_t + "px",
              left: new_l + "px"
            }); 
            jQuery('#decorative_droppable > div.dropped.ui-draggable.ui-draggable-handle').css('z-index','9999');
            jQuery(this).css('z-index','99999');
          },
        });
      }
    });   

    // decorative design draggable js end 
     
    // custom editer draggable js 

    var settings = "";
    jQuery(".draggable").draggable({
      zIndex:3000,
      appendTo: "#droppable",
      helper: "clone",
      // containment: "#droppable",
      start: function (e, u) {
        //console.log(e);
        var clrcls = jQuery(".panel-body.plain_list").attr("data-class");
        jQuery(u.helper).addClass(clrcls);

        //console.log(u);
      },
      stop: function (e, u) {
        //console.log(u.position);
         jQuery(u.helper).addClass('test123');
      },
    });

   jQuery("#droppable").droppable({
      accept: ".draggable",
      drop:function(e,u){
        var a=u.helper.clone();
        var crp_t = u.position.top;
        var crp_l = u.position.left;
        var new_t = (Math.round(crp_t / 10) * 10);
        var new_l = (Math.round(crp_l / 10) * 10);
        //u.position.top = 
        var cur_div_w = jQuery(a).width();
        var cur_div_h = jQuery(a).height();
        var total_w = jQuery('#droppable').width();
        var total_h = jQuery('#droppable').height();

        var left_dist = parseInt(total_w) - parseInt(cur_div_w);
        var top_dist = parseInt(total_h) - parseInt(cur_div_h);

        if (new_l > left_dist) { 
          new_l = left_dist;
        }
        console.log(top_dist +'==='+new_t );
        if (new_t > top_dist) {
          new_t = top_dist;
        }

        

        if (new_l <= 1) {
          a.addClass('leftoff');
          new_l = 0;
        }else{
          a.removeClass('leftoff');
        }

        if (new_t <= 1) {
          new_t = 0;
        }

        a.css({
          top: new_t + "px",
          left: new_l + "px"
        });
        // console.log(new_l);
        jQuery(this).append(a);
        jQuery( '.dropped' ).addClass('horizontals');  
        var clrcls = jQuery(".panel-body.plain_list").attr("data-class");
        jQuery(a).attr("class","dropped "+clrcls).draggable({
          appendTo: "#droppable",
          containment: "#droppable", 
          stop: function (e, u) {
            console.log(u.position);
            var crp_t = u.position.top;
            var crp_l = u.position.left;
            var new_t = (Math.round(crp_t / 10) * 10);
            var new_l = (Math.round(crp_l / 10) * 10);
            //u.position.top = 
            var topoff = jQuery(a).offset().top - jQuery("#droppable").offset().top;
            topoff = Math.round(topoff);
            
            // console.log(topoff);
            if (parseInt(topoff) < parseInt(0)) {
              a.css({
                top: "50px",
                left: new_l + "px"
              }); 
              // a.addClass('topoff');
            }else if(parseInt(topoff) == parseInt(0)){
              if (jQuery(this).hasClass("rotate-90") || jQuery(this).hasClass("rotate-270") ) {
                a.removeClass('topoff');
                a.css({
                  top: "50px",
                  left: new_l + "px"
                }); 
              }
              
            }else{
              a.css({
                top: new_t + "px",
                left: new_l + "px"
              }); 
              a.removeClass('topoff');
            }

            jQuery('#droppable > div.dropped.ui-draggable.ui-draggable-handle').css('z-index','9999');
            jQuery(this).css('z-index','99999');
          },
        });
      }
    });   

    // custom editer draggable js end     
    // jQuery(document).ready(function(){
      jQuery(document).on('click', ".third_border_contnt .draggable3", function(){
        jQuery(this).remove();
      });
      setTimeout(function(){
        var temp1;
        jQuery( ".draggable3" ).draggable({helper: "clone",start: function (e1, u1) {
          temp1 = jQuery(e1.currentTarget).clone();
          console.log('fire');
        for( i = 1 ; i < 41 ; i++){

          jQuery( "."+i ).droppable({ 
            drop: function( event, u1i ) {
              console.log(this); 
              jQuery( this ).html(temp1); 
              jQuery('.panel-body.printed_tiles > ul > li > div:nth-child(n+2)').remove();
              jQuery('ul.floraldsgn.selected > li > div.ui-draggable-dragging').remove();
            }
          });
        }   
         console.log(jQuery(e1.currentTarget));
        }});
      },3000);
    // });

    
    // jQuery(document).ready(function(){
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
              jQuery('ul.floraldsgn li > div:nth-child(n+2)').remove();
              jQuery('ul.floraldsgn.selected > li > div.ui-draggable-dragging').remove();
            }
          });
        }
           }});

      },1000);
    // });
  

   // panel plus 
   function toggleIcon(e) {
    jQuery(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
    }
    jQuery(".panel-group").on("hidden.bs.collapse", toggleIcon);
    jQuery(".panel-group").on("shown.bs.collapse", toggleIcon);

    

    // colorpicker
    
    jQuery("#colorSelector").ColorPicker({
    color: "#0000ff",
    onShow: function (colpkr) {
      jQuery(colpkr).fadeIn(500); 
      return false;
    }, 
    onChange: function (hsb, hex, rgb) {
      jQuery("#colorSelector div").css("backgroundColor", "#" + hex);
      jQuery(".draggable div").css("backgroundColor", "#" + hex);
    }
    });

    // colorpicker end


// var color = "#f00"; 

// jQuery("#colorpicker").spectrum({ //spectrum config
//     color: "#f00",
//     showPalette: true,
//     showInput: true,
//     showAlpha: true,
//     chooseText: "Pick",
//     cancelText: "X",
//     togglePaletteOnly: true,
//     showPaletteOnly: true,
//     togglePaletteMoreText: "More Colors...",
//     togglePaletteLessText: "Less Colors...",
//     palette: [
//             //color palettes for Spectrum
//     ],
//     change: function(colorSelected) {
//         color = colorSelected.toHexString();
//     }
// });

// jQuery(".pixel").click(function(){

//     jQuery(this).css("background-color" , color);

// });


jQuery(function(){
    jQuery(".pattern_dropdown ul li").click(function(){
        jQuery(".pattern_dropdown ul li").removeClass("selected");   
        jQuery(this).addClass("selected");   
        var cls = jQuery(this).attr("data-class");
        var prvcls = jQuery(".panel-body.plain_list").attr("data-class");
        jQuery(".plain_list").removeClass(prvcls)
        jQuery(".plain_list").addClass(cls).attr("data-class", cls);
        //jQuery(".ui-droppable").removeClass(prvcls)
        //jQuery(".ui-droppable").addClass(cls).attr("data-class", cls);
    }); 



    /*jQuery("li.dropdown-header.pattern_dropdown_10").click(function(){
        jQuery(".plain_list").addClass('brown');   
        //jQuery(this).addClass('selected');    
    }); */
});


jQuery(document).ready(function(){
    /*jQuery('.pattern_dropdown li').eq(0).addClass('pattern_dropdown_1');
    jQuery('.pattern_dropdown li').eq(1).addClass('pattern_dropdown_2');
    jQuery('.pattern_dropdown li').eq(2).addClass('pattern_dropdown_3');
    jQuery('.pattern_dropdown li').eq(3).addClass('pattern_dropdown_4');
    jQuery('.pattern_dropdown li').eq(4).addClass('pattern_dropdown_5');
    jQuery('.pattern_dropdown li').eq(5).addClass('pattern_dropdown_6');
    jQuery('.pattern_dropdown li').eq(6).addClass('pattern_dropdown_7');
    jQuery('.pattern_dropdown li').eq(7).addClass('pattern_dropdown_8');
    jQuery('.pattern_dropdown li').eq(8).addClass('pattern_dropdown_9');
    jQuery('.pattern_dropdown li').eq(9).addClass('pattern_dropdown_10');
    jQuery('.pattern_dropdown li').eq(10).addClass('pattern_dropdown_11');
    jQuery('.pattern_dropdown li').eq(11).addClass('pattern_dropdown_12');
    jQuery('.pattern_dropdown li').eq(12).addClass('pattern_dropdown_13');
    jQuery('.pattern_dropdown li').eq(13).addClass('pattern_dropdown_14');
    jQuery('.pattern_dropdown li').eq(14).addClass('pattern_dropdown_15');
    jQuery('.pattern_dropdown li').eq(15).addClass('pattern_dropdown_16');
    jQuery('.pattern_dropdown li').eq(16).addClass('pattern_dropdown_17');
    jQuery('.pattern_dropdown li').eq(17).addClass('pattern_dropdown_18');*/




    /*jQuery('.plain_list li').eq(0).addClass('plain_tiles_1');
    jQuery('.plain_list li').eq(1).addClass('plain_tiles_2');
    jQuery('.plain_list li').eq(2).addClass('plain_tiles_3');
    jQuery('.plain_list li').eq(3).addClass('plain_tiles_4');
    jQuery('.plain_list li').eq(4).addClass('plain_tiles_5');
    jQuery('.plain_list li').eq(5).addClass('plain_tiles_6');*/

});

// $(document).ready(function(){
//     $("a").tooltip();
// });


// jQuery(document).ready(function(){
//     jQuery('[data-toggle="tooltip"]').tooltip();   
// });



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
    //jQuery(this).attr('class', 'full_taxure pixel');
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
 
jQuery(document).on('click','#droppable > div.dropped.ui-draggable.ui-draggable-handle', function(){
  jQuery('#droppable > div.dropped.ui-draggable.ui-draggable-handle').css('z-index','9999');
  jQuery(this).css('z-index','99999');
});
jQuery(document).on('click','#decorative_droppable > div.dropped.ui-draggable.ui-draggable-handle', function(){
  jQuery('#decorative_droppable > div.dropped.ui-draggable.ui-draggable-handle').css('z-index','9999');
  jQuery(this).css('z-index','99999');
});
}); 