    jQuery(document).ready(function(){
        
        hideOptions($('#dapackage'));
        
        jQuery("#contentarea").on("change", "#dapackage", function(){
            hideOptions($(this));
        });
    });
    
    function hideOptions(btn) {
        var mainelement = btn.parent().parent().parent();
        
        if(btn.val() == "{$option}")
        {
            mainelement.find("tr").show();
        }
        else
        {
            mainelement.find("tr").hide();
            $("#dapackage").closest('tr').show();
            $("#dapackage").closest('tr').next().show();
            $("#dapackage").closest('tr').prev().show();
            $("#dapackage").closest('tr').prev().show();
        }
    }