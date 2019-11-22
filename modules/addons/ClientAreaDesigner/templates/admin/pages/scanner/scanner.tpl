{**********************************************************************
* ClientAreaDesigner product developed. (2016-08-18)
* *
*
*  CREATED BY MODULESGARDEN       ->       http://modulesgarden.com
*  CONTACT                        ->       contact@modulesgarden.com
*
*
* This software is furnished under a license and may be used and copied
* only  in  accordance  with  the  terms  of such  license and with the
* inclusion of the above copyright notice.  This software  or any other
* copies thereof may not be provided or otherwise made available to any
* other person.  No title to and  ownership of the  software is  hereby
* transferred.
*
*
**********************************************************************}
{**
* @author Pawel Kopec <pawelk@modulesgarden.com>
*}
<div class="box light">
    <div class="row">
        <div class="col-lg-12" id="mg-scanner-content" >
            <legend>{$MGLANG->T('Scanner')}</legend>
            <p class="page-description">
                {$MGLANG->T('Scanner can be run to find any custom sidebar and navbar positions as well as custom homepage widgets. It uses chosen client account to log in and explores your client area using known locations.')}
                <a href="#" data-toggle="modal" data-target="#mg-modal-scaner-delete"> {$MGLANG->T('Delete sidebars from scaner.')}  </a>
            </p>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading"> <h4 class="panel-title"> {$MGLANG->T('Panels Scanner')}</h4></div>

                        <div class="panel-body">

                            <form method="get" id="mg-scanner-form" action="addonmodules.php" target="blank">
                                <input type="hidden" name="module" value="ClientAreaDesigner"/> 
                                <input type="hidden" name="mg-page" value="scanner"/> 
                                <input type="hidden" name="mg-action" value="scannerFire"/> 
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="mg-scaner-client">{$MGLANG->T('Run As Client')}</label>
                                    <div class="col-sm-9">
                                        <select id="mg-scaner-client" class="form-control" name="scanner[clientId]" required="">
                                            {if $client.id}<option value="{$client.id}">{$client.fullName}</option>{/if}
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">{$MGLANG->T('Status')}</label>
                                    <div class="col-sm-9">
                                        <span style="color:red; {if $scanner.on}display:none;{/if}" id="mg-scanner-off">{$MGLANG->T('Disabled')}</span>
                                        <span style="color:green; {if !$scanner.on}display:none;{/if}" id="mg-scanner-on" >{$MGLANG->T('Running')} <span class="loader-arrows"></span></span>
                                       <span style="color:green; display:none;" id="mg-scanner-result" ></span>
                                    </div>
                                </div>
                                <div class="form-group text-center" style="padding-top:150px; padding-bottom:50px;">
                                    <button type="submit" class="btn btn-success btn-lg btn-inverse" id="mg-scanner-fire" {if $scanner.on}style="display:none;"{/if}>{$MGLANG->T('Run The Scanner')}</button>
                                    <button type="button" {if !$scanner.on}style="display:none;"{/if} class="btn btn-danger btn-lg btn-inverse" id="mg-scanner-disable" >{$MGLANG->T('Disable The Scanner')}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade bs-example-modal-lg" id="mg-modal-scaner-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">{$MGLANG->absoluteT('Delete')} <strong data-modal-var="name"></strong></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="class" id="mg-modal-panel-delete-class"  value="">
                    <input type="hidden" name="id" id="mg-modal-panel-delete-id"  value="">
                    <div class="modal-alerts">
                        <div style="display:none;" data-prototype="error">
                            <div class="note note-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong></strong>
                                <a style="display:none;" class="errorID" href=""></a>
                            </div>
                        </div>
                        <div style="display:none;" data-prototype="success">
                            <div class="note note-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 30px; text-align: center;">
                        <div>{$MGLANG->T('Are you sure you want to delete sidebars from scaaner?')} </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="mg-delete-fire">{$MGLANG->absoluteT('Delete')}</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$MGLANG->absoluteT('Close')}</button>
                </div>
            </div>
        </div>
    </div>
                
        </div>
    </div>
</div>
{literal}
    <script type="text/javascript">
        jQuery(document).ready(function () {

            $("#mg-scaner-client").select2({
                ajax: {
                    url: JSONParser.url + "&mg-action=searchCustomer",
                    dataType: 'json',
                    delay: 250,
                    multiple: true,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, page) {
                        return {
                            results: data.items
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                templateResult: function (repo) {
                    return repo.name || repo.text;
                },
                templateSelection: function (repo) {
                    if (repo.loading)
                        return repo.text;
                    var markup = "";
                    if (repo.text)
                        return repo.text;
                    if (repo.name)
                        return  repo.name;
                    if (repo.description) {
                        markup += '<div>' + repo.description + '</div>';
                    }
                    return markup;
                }
            });

            //Show scanner status
            $("#mg-scanner-form").on("submit", function (e) {
                $("#mg-scanner-off").hide();
                $("#mg-scanner-on").show();
                $("#mg-scanner-disable").show();
                $("#mg-scanner-fire").hide();
                $("#mg-scanner-result").hide();
            });

            setInterval(function(){
                if($( "#mg-scanner-on" ).css("display")=="none")
                    return;
                JSONParser.request(
                        'scannerStatus'
                        , {}
                        , function (data) {
       
                            if(data.result){
                                $("#mg-scanner-result").text(data.result).show();
                                $("#mg-scanner-on").hide();
                                $("#mg-scanner-disable").hide();
                                $("#mg-scanner-fire").show();
                            }
                            else if(data.scanner!=true){
                                $("#mg-scanner-off").show();
                                $("#mg-scanner-on").hide();
                                $("#mg-scanner-disable").hide();
                                $("#mg-scanner-fire").show();
                            }
                    },false);
            }, 3000);
            
            //Disable scanner
            $("#mg-scanner-disable").on("click", function (e) {
                e.preventDefault();

                JSONParser.request(
                    'scannerOff'
                    , {}
                    , function (data) {
                        $("#mg-scanner-off").show();
                        $("#mg-scanner-on").hide();
                        $("#mg-scanner-disable").hide();
                        $("#mg-scanner-fire").show();
                });
            });
            
            //delete
            $("#mg-delete-fire").on("click",function(e){
               e.preventDefault();
               JSONParser.request(
                    'delete'
                    , {}
                    , function (data) {
                        $("#mg-modal-scaner-delete").modal('hide');
                });
                
            });
        });
    </script>
{/literal}