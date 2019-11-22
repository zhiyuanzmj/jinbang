
    </div>
</section>


{if $templatefile == 'homepage' || $filename == 'solutions' || $filename == 'solutions1' || $filename == 'about' || $filename == 'solutions2' || $filename == 'pages' || $filename == 'solutions3' || $filename == 'solutions4' || $filename == 'cart' || $filename == 'promotion' || $filename == 'vps' || $filename == 'webhosting' || $filename == 'dediserver' || $filename == 'tos' || $filename == 'aup' || $templatefile == 'announcements' || $templatefile == 'viewannouncement' || $filename == 'contact' || $filename == 'knowledgebase' || $templatefile == 'knowledgebase' || $templatefile == 'knowledgebasearticle' || $templatefile == 'knowledgebasecat' || $templatefile == 'downloads' || $templatefile == 'downloaddenied' || $filename == 'yzm'|| $templatefile == 'downloadscat' || $filename == 'downloads'}

{include file="$template/whmcstop/syfooter.tpl" title=$displayTitle desc=$tagline}

{elseif $templatefile == 'login' || $templatefile == 'logout' || $templatefile == 'clientregister' || $templatefile == 'pwreset' || $templatefile == 'pwresetvalidation'}

{include file="$template/whmcstop/loginfooter.tpl" title=$displayTitle desc=$tagline}

{else}

{include file="$template/whmcstop/hyzxfooter.tpl" title=$displayTitle desc=$tagline}

{/if}


<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

{$footeroutput}

</body>
</html>
