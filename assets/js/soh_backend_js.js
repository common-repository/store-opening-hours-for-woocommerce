jQuery(document).ready(function(){
	jQuery('ul.tabs li').click(function(){
	    var tab_id = jQuery(this).attr('data-tab');
	    jQuery('ul.tabs li').removeClass('soh-current');
	    jQuery('.soh-tab-content').removeClass('soh-current');  
	    jQuery(this).addClass('soh-current');
	    jQuery("#"+tab_id).addClass('soh-current');
	});

	var select_role = jQuery('#wg_select_user_role').select2({
        

        ajax: {
                url: SOH_data.ajaxurl,
                dataType: 'json',
                delay: true,
                data: function (params) {
                    return {
                        q: params.term,
                        action: 'wg_roles_ajax'
                    };
                },
                processResults: function( data ) {
                var options = [];
                if ( data ) {
 
                    jQuery.each( data, function( index, text ) {
                        options.push( { id: text[0], text: text[1],'price': text[2]} );
                    });
 
                }
                return {
                    results: options
                };
            },
            cache: true
        },
        minimumInputLength: 0
    });

    var addButton_monday = jQuery('.soh_day_add_monday'); //Add button selector
    var wrapper_monday = jQuery('.soh_time_wrapaer_monday'); //Input field wrapper_monday
    var fieldHTML_monday = '<tr class="soh_time_current_monday"><td class="soh_opening_timepicker_field_monday"><input type="time" class="soh_opening_timepicker_monday" name="soh_opening_time_monday[]" value=""></td><td class="soh_closing_timepicker_field_monday"><input type="time" class="soh_closing_timepicker_monday" name="soh_closing_time_monday[]" value=""></td><td><a href="javascript:void(0);" class="soh_day_close_monday button">X</a></td><td></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_monday).click(function(){
        jQuery(wrapper_monday).append(fieldHTML_monday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_monday).on('click', '.soh_day_close_monday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_monday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_monday tr').remove();
    });

    if(jQuery(".soh_period_check_monday").is(":checked")){ 
        jQuery(".soh_day_monday_period_and_options").show(500);
    }else{
        jQuery(".soh_day_monday_period_and_options").hide(500);
    }
    jQuery(".soh_period_check_monday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_monday_period_and_options").fadeIn(300);
        } else {
            jQuery(".soh_day_monday_period_and_options").fadeOut(200);
        }
    });

    jQuery('.soh_time_monday_options').on('change', function() {
        if ( this.value == 'monday_full_day'){
            jQuery(".soh_day_period_monday").hide(200);
        }else{
            jQuery(".soh_day_period_monday").show(200);
        }
    });
    if(SOH_data.soh_time_monday_options == 'monday_full_day'){
        jQuery(".soh_day_period_monday").hide();
    }else if(SOH_data.soh_time_monday_options == 'monday_time_period'){
        jQuery(".soh_day_period_monday").show();
    }



    var addButton_tuesday = jQuery('.soh_day_add_tuesday'); //Add button selector
    var wrapper_tuesday = jQuery('.soh_time_wrapaer_tuesday'); //Input field wrapper_tuesday
    var fieldHTML_tuesday = '<tr class="soh_time_current_tuesday"><td class="soh_opening_timepicker_field_tuesday"><input type="time" class="soh_opening_timepicker_tuesday" name="soh_opening_time_tuesday[]" value=""></td><td class="soh_closing_timepicker_field_tuesday"><input type="time" class="soh_closing_timepicker_tuesday" name="soh_closing_time_tuesday[]" value=""></td><td><a href="javascript:void(0);" class="soh_day_close_tuesday button">X</a></td><td></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_tuesday).click(function(){
        jQuery(wrapper_tuesday).append(fieldHTML_tuesday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_tuesday).on('click', '.soh_day_close_tuesday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_tuesday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_tuesday tr').remove();
    });

    if(jQuery(".soh_period_check_tuesday").is(":checked")){ 
        jQuery(".soh_day_tuesday_period_and_options").show(500);
    }else{
        jQuery(".soh_day_tuesday_period_and_options").hide(500);
    }
    jQuery(".soh_period_check_tuesday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_tuesday_period_and_options").fadeIn(300);
        } else {
            jQuery(".soh_day_tuesday_period_and_options").fadeOut(200);
        }
    });

    jQuery('.soh_time_tuesday_options').on('change', function() {
        if ( this.value == 'tuesday_full_day'){
            jQuery(".soh_day_period_tuesday").hide(200);
        }else{
            jQuery(".soh_day_period_tuesday").show(200);
        }
    });
    if(SOH_data.soh_time_tuesday_options == 'tuesday_full_day'){
        jQuery(".soh_day_period_tuesday").hide();
    }else if(SOH_data.soh_time_tuesday_options == 'tuesday_time_period'){
        jQuery(".soh_day_period_tuesday").show();
    }




    var addButton_wednesday = jQuery('.soh_day_add_wednesday'); //Add button selector
    var wrapper_wednesday = jQuery('.soh_time_wrapaer_wednesday'); //Input field wrapper_wednesday
    var fieldHTML_wednesday = '<tr class="soh_time_current_wednesday"><td class="soh_opening_timepicker_field_wednesday"><input type="time" class="soh_opening_timepicker_wednesday" name="soh_opening_time_wednesday[]" value=""></td><td class="soh_closing_timepicker_field_wednesday"><input type="time" class="soh_closing_timepicker_wednesday" name="soh_closing_time_wednesday[]" value=""></td><td><a href="javascript:void(0);" class="soh_day_close_wednesday button">X</a></td><td></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_wednesday).click(function(){
        jQuery(wrapper_wednesday).append(fieldHTML_wednesday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_wednesday).on('click', '.soh_day_close_wednesday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_wednesday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_wednesday tr').remove();
    });

    if(jQuery(".soh_period_check_wednesday").is(":checked")){ 
        jQuery(".soh_day_wednesday_period_and_options").show(500);
    }else{
        jQuery(".soh_day_wednesday_period_and_options").hide(500);
    }
    jQuery(".soh_period_check_wednesday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_wednesday_period_and_options").fadeIn(300);
        } else {
            jQuery(".soh_day_wednesday_period_and_options").fadeOut(200);
        }
    });

    jQuery('.soh_time_wednesday_options').on('change', function() {
        if ( this.value == 'wednesday_full_day'){
            jQuery(".soh_day_period_wednesday").hide(200);
        }else{
            jQuery(".soh_day_period_wednesday").show(200);
        }
    });
    if(SOH_data.soh_time_wednesday_options == 'wednesday_full_day'){
        jQuery(".soh_day_period_wednesday").hide();
    }else if(SOH_data.soh_time_wednesday_options == 'wednesday_time_period'){
        jQuery(".soh_day_period_wednesday").show();
    }



    var addButton_thursday = jQuery('.soh_day_add_thursday'); //Add button selector
    var wrapper_thursday = jQuery('.soh_time_wrapaer_thursday'); //Input field wrapper_thursday
    var fieldHTML_thursday = '<tr class="soh_time_current_thursday"><td class="soh_opening_timepicker_field_thursday"><input type="time" class="soh_opening_timepicker_thursday" name="soh_opening_time_thursday[]" value=""></td><td class="soh_closing_timepicker_field_thursday"><input type="time" class="soh_closing_timepicker_thursday" name="soh_closing_time_thursday[]" value=""></td><td><a href="javascript:void(0);" class="soh_day_close_thursday button">X</a></td><td></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_thursday).click(function(){
        jQuery(wrapper_thursday).append(fieldHTML_thursday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_thursday).on('click', '.soh_day_close_thursday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_thursday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_thursday tr').remove();
    });

    if(jQuery(".soh_period_check_thursday").is(":checked")){ 
        jQuery(".soh_day_thursday_period_and_options").show(500);
    }else{
        jQuery(".soh_day_thursday_period_and_options").hide(500);
    }
    jQuery(".soh_period_check_thursday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_thursday_period_and_options").fadeIn(300);
        } else {
            jQuery(".soh_day_thursday_period_and_options").fadeOut(200);
        }
    });

    jQuery('.soh_time_thursday_options').on('change', function() {
        if ( this.value == 'thursday_full_day'){
            jQuery(".soh_day_period_thursday").hide(200);
        }else{
            jQuery(".soh_day_period_thursday").show(200);
        }
    });
    if(SOH_data.soh_time_thursday_options == 'thursday_full_day'){
        jQuery(".soh_day_period_thursday").hide();
    }else if(SOH_data.soh_time_thursday_options == 'thursday_time_period'){
        jQuery(".soh_day_period_thursday").show();
    }




    var addButton_friday = jQuery('.soh_day_add_friday'); //Add button selector
    var wrapper_friday = jQuery('.soh_time_wrapaer_friday'); //Input field wrapper_friday
    var fieldHTML_friday = '<tr class="soh_time_current_friday"><td class="soh_opening_timepicker_field_friday"><input type="time" class="soh_opening_timepicker_friday" name="soh_opening_time_friday[]" value=""></td><td class="soh_closing_timepicker_field_friday"><input type="time" class="soh_closing_timepicker_friday" name="soh_closing_time_friday[]" value=""></td><td><a href="javascript:void(0);" class="soh_day_close_friday button">X</a></td><td></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_friday).click(function(){
        jQuery(wrapper_friday).append(fieldHTML_friday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_friday).on('click', '.soh_day_close_friday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_friday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_friday tr').remove();
    });

    if(jQuery(".soh_period_check_friday").is(":checked")){ 
        jQuery(".soh_day_friday_period_and_options").show(500);
    }else{
        jQuery(".soh_day_friday_period_and_options").hide(500);
    }
    jQuery(".soh_period_check_friday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_friday_period_and_options").fadeIn(300);
        } else {
            jQuery(".soh_day_friday_period_and_options").fadeOut(200);
        }
    });


    jQuery('.soh_time_friday_options').on('change', function() {
        if ( this.value == 'friday_full_day'){
            jQuery(".soh_day_period_friday").hide(200);
        }else{
            jQuery(".soh_day_period_friday").show(200);
        }
    });
    if(SOH_data.soh_time_friday_options == 'friday_full_day'){
        jQuery(".soh_day_period_friday").hide();
    }else if(SOH_data.soh_time_friday_options == 'friday_time_period'){
        jQuery(".soh_day_period_friday").show();
    }




    var addButton_saturday = jQuery('.soh_day_add_saturday'); //Add button selector
    var wrapper_saturday = jQuery('.soh_time_wrapaer_saturday'); //Input field wrapper_saturday
    var fieldHTML_saturday = '<tr class="soh_time_current_saturday"><td class="soh_opening_timepicker_field_saturday"><input type="time" class="soh_opening_timepicker_saturday" name="soh_opening_time_saturday[]" value=""></td><td class="soh_closing_timepicker_field_saturday"><input type="time" class="soh_closing_timepicker_saturday" name="soh_closing_time_saturday[]" value=""></td><td><a href="javascript:void(0);" class="soh_day_close_saturday button">X</a></td><td></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_saturday).click(function(){
        jQuery(wrapper_saturday).append(fieldHTML_saturday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_saturday).on('click', '.soh_day_close_saturday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_saturday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_saturday tr').remove();
    });

    if(jQuery(".soh_period_check_saturday").is(":checked")){ 
        jQuery(".soh_day_saturday_period_and_options").show(500);
    }else{
        jQuery(".soh_day_saturday_period_and_options").hide(500);
    }
    jQuery(".soh_period_check_saturday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_saturday_period_and_options").fadeIn(300);
        } else {
            jQuery(".soh_day_saturday_period_and_options").fadeOut(200);
        }
    });


    jQuery('.soh_time_saturday_options').on('change', function() {
        if ( this.value == 'saturday_full_day'){
            jQuery(".soh_day_period_saturday").hide(200);
        }else{
            jQuery(".soh_day_period_saturday").show(200);
        }
    });
    if(SOH_data.soh_time_saturday_options == 'saturday_full_day'){
        jQuery(".soh_day_period_saturday").hide();
    }else if(SOH_data.soh_time_saturday_options == 'saturday_time_period'){
        jQuery(".soh_day_period_saturday").show();
    }




    var addButton_sunday = jQuery('.soh_day_add_sunday'); //Add button selector
    var wrapper_sunday = jQuery('.soh_time_wrapaer_sunday'); //Input field wrapper_sunday
    var fieldHTML_sunday = '<tr class="soh_time_current_sunday"><td class="soh_opening_timepicker_field_sunday"><input type="time" class="soh_opening_timepicker_sunday" name="soh_opening_time_sunday[]" value=""></td><td class="soh_closing_timepicker_field_sunday"><input type="time" class="soh_closing_timepicker_sunday" name="soh_closing_time_sunday[]" value=""></td><td><a href="javascript:void(0);" class="soh_day_close_sunday button">X</a></td><td></td></tr>';
    
    //Once add button is clicked
    jQuery(addButton_sunday).click(function(){
        jQuery(wrapper_sunday).append(fieldHTML_sunday);
    });
    
    //Once remove button is clicked
    jQuery(wrapper_sunday).on('click', '.soh_day_close_sunday', function(e){
        e.preventDefault();
        jQuery(this).parent().parent().remove();
    });

    jQuery('body').on('click', '.soh_all_day_sunday', function(e){
        e.preventDefault();
        jQuery('.soh_time_wrapaer_sunday tr').remove();
    });

    if(jQuery(".soh_period_check_sunday").is(":checked")){ 
        jQuery(".soh_day_sunday_period_and_options").show(500);
    }else{
        jQuery(".soh_day_sunday_period_and_options").hide(500);
    }
    jQuery(".soh_period_check_sunday").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery(".soh_day_sunday_period_and_options").fadeIn(300);
        } else {
            jQuery(".soh_day_sunday_period_and_options").fadeOut(200);
        }
    });


    jQuery('.soh_time_sunday_options').on('change', function() {
        if ( this.value == 'sunday_full_day'){
            jQuery(".soh_day_period_sunday").hide(200);
        }else{
            jQuery(".soh_day_period_sunday").show(200);
        }
    });
    if(SOH_data.soh_time_sunday_options == 'sunday_full_day'){
        jQuery(".soh_day_period_sunday").hide();
    }
    if(SOH_data.soh_time_sunday_options == 'sunday_time_period'){
        jQuery(".soh_day_period_sunday").show();
    }



    if(jQuery(".soh_notification_management_mode").is(":checked")){ 
        jQuery("#soh_role_section").show(500);
    }else{
        jQuery("#soh_role_section").hide(500);
    }
    jQuery(".soh_notification_management_mode").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery("#soh_role_section").fadeIn(300);
        } else {
            jQuery("#soh_role_section").fadeOut(200);
        }
    });

});