jQuery(document).ready(function() {
    jQuery(".tilacrdrow h3").click(function(e) {
        var crnt = jQuery(this);
        var i_id = jQuery(this).parent(".tilacrdrow").attr("data-index");
        jQuery(".tilacrdrow").each(function(index) {
            var c_id = jQuery(this).attr("data-index");
            if (c_id != i_id) {
                jQuery(this).removeClass("active").addClass("collapsed").children(".tilacrcntn").slideUp();
            } else {
                if (crnt.next(".tilacrcntn").css("display") == "none") {
                    crnt.parent(".tilacrdrow").addClass("active").removeClass("collapsed");
                    crnt.next(".tilacrcntn").slideDown();
                } else {
                    crnt.parent(".tilacrdrow").removeClass("active").addClass("collapsed");
                    crnt.next(".tilacrcntn").slideUp();
                }
            }
        });

    });
});

function validatetiles(ref) {
    jQuery(".maintiledtrwdth").removeClass("invalid-error").next(".invalid-feedback").html("");
    jQuery(".maintiledtrhght").removeClass("invalid-error").next(".invalid-feedback").html("");

    var flag = true;
    var intreg = /^\d+$/g;
    var maintiledtrwdth = jQuery(".maintiledtrwdth").val();
    var maintiledtrhght = jQuery(".maintiledtrhght").val();

    var flag_width = intreg.test(maintiledtrwdth);
    intreg = /^\d+$/g;
    var flag_height = intreg.test(maintiledtrhght);

    if (!flag_width) {
        flag = false;
        jQuery(".maintiledtrwdth").addClass("invalid-error").next(".invalid-feedback").html("Must be integer.");
    }
    if (!flag_height) {
        flag = false;
        jQuery(".maintiledtrhght").addClass("invalid-error").next(".invalid-feedback").html("Must be integer.");
    }
    if (flag) {
        jQuery(".maintiledtrwdth").val("");
        jQuery(".maintiledtrhght").val("");
        var htm = '<div class="sngltlwpr"><span onclick="removetile(this)">X</span><div class="sngltl" style="width:' + maintiledtrwdth + 'px; height:' + maintiledtrhght + 'px"><input type="hidden" value="' + maintiledtrwdth + '" name="plain_tiles_width[]" /><input type="hidden" value="' + maintiledtrhght + '" name="plain_tiles_height[]" /></div></div>';
        jQuery(ref).parent(".tlsnglclm").parent(".tilinrsnglrow").next(".tilinrsnglrow").append(htm);
    }
    //return flag;
}

function removetile(ref) {
    var cnfrm = confirm("Delete this tile?");
    if (cnfrm) {
        jQuery(ref).parent(".sngltlwpr").remove();
    }
}

function upload_image(ref) {
    //var formfield = jQuery(ref).parent('.qtyperowfld').children('input[type="text"]').attr('name');
    var formfiled = jQuery(ref).attr("data-name");
    // tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true&amp;width=630');
    /*window.send_to_editor = function(html) {
        imgurl = jQuery(html).attr('src');
        var htm = '<div class="sngltlwpr"><span onclick="removetile(this)">X</span><div class="sngltl"><input type="hidden" value="' + imgurl + '" name="' + formfiled + '[]" /><img src="' + imgurl + '" /></div></div>';
        jQuery(ref).parent(".tlsnglclm").parent(".tilinrsnglrow").next(".tilinrsnglrow").append(htm);
        tb_remove();
    }*/

    pk_media_gallery(formfiled, ref);
    return false;
}

function showsimilartab(ref) {
    jQuery(".tabulli").removeClass("active");
    var i_id = jQuery(ref).attr("data-index");
    jQuery(".tabinrsngl").each(function(index) {
        var c_id = jQuery(this).attr("data-index");
        if (c_id != i_id) {
            jQuery(this).removeClass("active").hide();
        } else {
            jQuery(ref).parent("li").addClass("active");
            jQuery(this).addClass("active").show();
        }
    });
}

function showinrsimilartab(ref) {
    jQuery(".tabullisub").removeClass("active");
    var i_id = jQuery(ref).attr("data-index");
    jQuery(".tabinrsnglsub").each(function(index) {
        var c_id = jQuery(this).attr("data-index");
        if (c_id != i_id) {
            jQuery(this).removeClass("active").hide();
        } else {
            jQuery(ref).parent("li").addClass("active");
            jQuery(this).addClass("active").show();
        }
    });
}



function pk_media_gallery(formfiled, ref) {
    var mediaFrame;
    // create the media frame
    mediaFrame = wp.media.frames.mediaFrame = wp.media({
        title: 'Upload Images',
        button: {
            text: 'Upload Tile'
        },

        // only images
        library: {
            type: 'image'
        },

        multiple: true
    });

    // after a file has been selected
    mediaFrame.on('select', function() {
        var selection = mediaFrame.state().get('selection');

        selection.map(function(attachment) {

            attachment = attachment.toJSON();

            if (attachment.id) {
                var url = attachment.sizes.thumbnail ? attachment.sizes.thumbnail.url : attachment.url;

                var htm = '<div class="sngltlwpr"><span onclick="removetile(this)">X</span><div class="sngltl"><input type="hidden" value="' + url + '" name="' + formfiled + '[]" /><img src="' + url + '" /></div></div>';
                jQuery(ref).parent(".tlsnglclm").parent(".tilinrsnglrow").next(".tilinrsnglrow").append(htm);

            }
        });
    });

    // open the modal frame
    mediaFrame.open();
}