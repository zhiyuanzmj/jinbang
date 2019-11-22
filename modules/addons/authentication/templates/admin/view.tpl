<div class="block block-rounded block-bordered">
	<div class="block-header bg-gray-lighter">
		<h3 class="block-title">查看 - 用户认证资料</h3>
	</div>
    <div class="block-content">
	    <div class="row list">
	        <div class="col-xs-12">
	            {if $client->validation eq 'yes'}
	                <div class="alert alert-success" role="alert">
	                    <strong>提示信息</strong> 当前账户已审核
	                </div>
	            {elseif $client->validation eq 'no'}
	                <div class="alert alert-danger" role="alert">
	                    <strong>提示信息</strong> 当前账户已驳回资料、让客户重新修改
	                </div>
	            {else}
	                <div class="alert alert-info" role="alert">
	                    <strong>提示信息</strong> 当前账户等待审核，请点击底部按钮操作
	                </div>
	            {/if}
	        </div>
	        <div class="col-xs-12">
	            <div class="form-horizontal">
	                <div class="form-group">
	                    <label class="col-sm-3 control-label">认证类型</label>
	                    <div class="col-sm-6">
	                        <input class="form-control" value="{if $client->type eq 'Personal' or $client->type eq 'Personal2'}个人{else}企业{/if}" readonly />
	                    </div>
	                </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">认证时间</label>
                        <div class="col-sm-6">
                            <input class="form-control" value="{$client->date}" readonly />
                        </div>
                    </div>
	                {if $client->type eq 'Personal' or $client->type eq 'Personal2'}
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">姓名</label>
	                        <div class="col-sm-6">
	                            <input class="form-control" value="{$client->cert_name}" readonly />
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">身份证号</label>
	                        <div class="col-sm-6">
	                            <input class="form-control" value="{$client->cert_no}" readonly />
	                        </div>
	                    </div>
	                    {if $client->type eq 'Personal'}
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">芝麻认证识别号</label>
	                        <div class="col-sm-6">
	                            <input class="form-control" value="{$client->biz_no}" readonly />
	                        </div>
	                    </div>
	                    {/if}
	                    {if $client->type eq 'Personal2'}
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">身份证正面</label>
	                        <div class="col-sm-6">
	                            <div class="img">
	                                <img src="{$systemurl}modules/addons/authentication/upload/{$client->information->personal_info_1}" />
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">身份证反面</label>
	                        <div class="col-sm-6">
	                            <div class="img">
	                                <img src="{$systemurl}modules/addons/authentication/upload/{$client->information->personal_info_2}" />
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">身份证手持</label>
	                        <div class="col-sm-6">
	                            <div class="img">
	                                <img src="{$systemurl}modules/addons/authentication/upload/{$client->information->personal_info_3}" />
	                            </div>
	                        </div>
	                    </div>
	                    {/if}
	                {else}
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">公司名称</label>
	                        <div class="col-sm-6">
	                            <input class="form-control" value="{$client->cert_name}" readonly />
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">营业执照号码</label>
	                        <div class="col-sm-6">
	                            <input class="form-control" value="{$client->cert_no}" readonly />
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">营业执照扫描件</label>
	                        <div class="col-sm-6">
	                            <div class="img">
	                                <img src="{$systemurl}modules/addons/authentication/upload/{$client->information->company_info_1}" />
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">法人姓名</label>
	                        <div class="col-sm-6">
	                            <input class="form-control" value="{$client->information->company_info_2}" readonly />
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">法人证件号</label>
	                        <div class="col-sm-6">
	                            <input class="form-control" value="{$client->information->company_info_3}" readonly />
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">法人证件正面</label>
	                        <div class="col-sm-6">
	                            <div class="img">
	                                <img src="{$systemurl}modules/addons/authentication/upload/{$client->information->company_info_4}" />
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-sm-3 control-label">法人证件反面</label>
	                        <div class="col-sm-6">
	                            <div class="img">
	                                <img src="{$systemurl}modules/addons/authentication/upload/{$client->information->company_info_5}" />
	                            </div>
	                        </div>
	                    </div>
	                {/if}
	            </div>
	        </div>
	    </div>
    </div>
    <div class="block-footer">
	    <a class="btn btn-success" style="margin-right: 15px;" href="{$module}&action=manager&status=yes&id={$client->uid}">通过审核</a>
	    <a class="btn btn-danger" href="{$module}&action=manager&status=no&id={$client->uid}">驳回资料</a>
    </div>
</div>