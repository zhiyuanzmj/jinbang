    jQuery(document).ready(function(){
        
        
        jQuery("#contentarea").on("click", "#generatecf", function(){
            
            var prom =  confirm('Please confirm that you want to create Default Custom Fields ');
            if(prom)
            {
                if({$old})
                {
                    generateCustomFieldsWHMCS6( '{$productid}' );
                }else
                {
                    generateCustomFields( '{$productid}' );
                }
            }
        });
    });
    
    function generateCustomFields(productid) {

        $.post("", 
        {
            "da_act":"setup_custom_fields", 
            "productid": productid, 
            id : productid,
            mode : "simple",
            module : "directadminExtended",
            action : "module-settings",
            ajax : true,
        }, function(result){
            
            var data = $.parseJSON(result);
            jQuery('.successbox,.errorbox,.infobox').remove();
            if(data.success == 1)
            {
                jQuery('#contentarea').find('form').prepend('<div class=\"successbox\"><strong><span class=\"title\">Custom Fields Created Successfuly</span></strong><br>Action Completed Successfully</div>');
            } else {
                jQuery('#contentarea').find('form').prepend('<div class=\"errorbox\"><strong><span class=\"title\">Module Command Error</span></strong></div>');
            } 
        });
    
    }
    
    
    function generateCustomFieldsWHMCS6(productid)
    {
        window.location.href = 'configproducts.php?action=edit&id=' + productid + '&tab=3&da_act=setup_custom_fields&success=true';
    }