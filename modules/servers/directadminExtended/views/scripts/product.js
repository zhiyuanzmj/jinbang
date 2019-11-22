jQuery(document).ready(function(){
    if($("#created-by-mg").size())
        $("#created-by-mg").remove()
       jQuery("input[name^=customconfigoption]:first").closest(".form").before('<div id="created-by-mg" style="text-align: left; margin-bottom: 5px; margin-top: 0;"><span>Created by <a href="http://www.modulesgarden.com" target="_blank">ModulesGarden</a>. For more information visit our <a href="{$moduleWikiUrl}" target="_blank">Wiki</a>. <small>Version {$moduleVersion}</small></span><span style="float:right;">{$moduleServer}</span></div><p>');
    if($(".mgContact").size())
        $(".mgContact").remove();
    $("form[name=packagefrm]").prev().before('<div class="mgContact"><a href="http://www.modulesgarden.com" target="_blank" title="ModulesGarden - Custom Software Development"><span style="margin-top: 0px; float: right; height: 27px; width: 160px; margin: 2px 10px 0px 0px; display: inline-block; text-align: center;background: url({$moduleLogoSrc}) no-repeat;"></span></a><a href="http://www.modulesgarden.com/customers/support" target="_blank" title="Open A Support Ticket"><small style="display: inline-block; line-height: 30px; font-size: 11px; font-weight: normal; color: #fff;">We are here to help you, just click!</small></a></div>');
});


