<div class="modal fade" id="change-privilages-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                <h4 class="modal-title">{$lang.resotre_backup}</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="file" value="{$file|htmlspecialchars}" />
                <form class="form-horizontal">
                    <div class="row">
                    {foreach from=$settings item="setting"}
                        <div class="col-sm-3">
                            <div class="checkbox"><label><input type="checkbox" name="options[{$setting[2]}]" value="{$setting[0]}" checked="checked"/> {$setting[1]}</label></div>
                        </div>
                    {foreachelse}
                        <div class="alert alert-info">{$lang.no_setting_info}</div>
                        
                    {/foreach}
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                <button type="button" class="btn btn-primary" data-act="restoreUsrLevel" data-raw="1">{$lang.restore}</button>
            </div>
        </div>
    </div>
</div>
            