function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

jQuery(document).ready(function() {
    var usernamea = getCookie("usernamea");
    //alert(usernamea);
    if (usernamea != "popusetp") {
        setTimeout(function() {
            jQuery('.soh_alert_notification_content').fadeIn();
            jQuery('body').addClass('soh-alert-show-popup');
            jQuery('.soh_alert_notification_popup_widget').fadeOut(500);
        }, 1000);
    }

    jQuery("body").on('click', '.soh_modal_close_icon', function(e){

        e.preventDefault();

        jQuery('.soh_alert_notification_content').fadeOut(500);
        jQuery('body').removeClass('soh-alert-show-popup');
        jQuery('.soh_alert_notification_popup_widget').fadeIn();

        setCookie("usernamea", "popusetp", 7);
    });

    jQuery('.soh_alert_notification_popup_widget').on('click', function(){
        jQuery('.soh_alert_notification_content').fadeIn();
        jQuery('body').addClass('soh-alert-show-popup');
        jQuery('.soh_alert_notification_popup_widget').fadeOut(500);
    });

    var modal = document.getElementById("soh_alert_hide_click_body");
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            jQuery('.soh_alert_notification_popup_widget').fadeIn(500);
            jQuery('body').removeClass("soh-alert-show-popup");
        }
    }
});



