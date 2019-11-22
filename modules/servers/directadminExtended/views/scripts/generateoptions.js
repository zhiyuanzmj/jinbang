    jQuery(document).ready(function(){
        
        
        jQuery("#contentarea").on("click", "#generateopt", function(){
            
            var prom =  confirm('Please confirm that you want to create Default Configurable Options ');
            if(prom)
            {
                if({$old})
                {
                    generateOptionsWHMCS6( '{$productid}' );
                }else
                {
                    generateOptions( '{$productid}' );
                }
            }
        });
    });
    
    function generateOptions(productid) {

        $.post("", 
        {
            "da_act":"setup_configurable_options", 
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
                jQuery('#contentarea').find('form').prepend('<div class=\"successbox\"><strong><span class=\"title\">Configurable Options Created Successfuly</span></strong><br>Action Completed Successfully</div>');
            } else {
                jQuery('#contentarea').find('form').prepend('<div class=\"errorbox\"><strong><span class=\"title\">Module Command Error</span></strong></div>');
            } 
        });
    
    }
    
    function generateOptionsWHMCS6(productid)
    {
        window.location.href = 'configproducts.php?action=edit&id=' + productid + '&tab=3&da_act=setup_configurable_options&success=true';
    }
    
    $('#inputServerGroup').change(function()
    {
        $('#inputServerGroup').parents('form').first().submit();
    });