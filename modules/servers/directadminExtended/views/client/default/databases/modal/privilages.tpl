<div class="modal fade" id="change-privilages-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                <h4 class="modal-title">{$lang.manage_user_privileges}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <input class="dbname" type="hidden" name="dbname" value="{$dbname}" />
                    <input class="dbuser" type="hidden" name="dbuser" value="{$dbuser}" />

                    <div class="form-group">
                        <label class="col-sm-2 control-label">{$lang.add_userdb_label_user}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{$dbuser}" disabled/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">{$lang.add_userdb_label_database}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{$dbname}" disabled/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            {foreach from=$privs item="on" key="priv"}
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <input type="hidden" name="privilages[{$priv}]" value="N" >
                                        <label><input type="checkbox" name="privilages[{$priv}]" value="Y" {if $on eq 'Y'}checked=""{/if} >{$priv|strtoupper}</label>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                    <button type="button" class="btn btn-primary" data-act="setuserprivilages_confirm" data-raw="1" {if $rtable}data-rtable="current-databases-table"{/if}>{$lang.save}</button>
                </div>
            </form>
        </div>
    </div>
</div>
            