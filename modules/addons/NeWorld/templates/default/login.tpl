<script type="text/javascript">
$(document).ready(function() {
    $('#frmLogin').submit(function(e) {
        e.preventDefault();
        $('#frmLogin button[type="submit"]').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Login');
        $.post('', 'action=link&' + $(this).serialize(), function(data) {
            if (data.status == 'success') {
                swal("Success", "{$LANG.ValidateLogin}", "success");
                jQuery.post('', '',
			        function(data) { $('.page-content').html($(data).find('.page-content').html()) }
			    );
                //$('.account-email').html(data.email);
            } else {
                $('#alertLoginFailed').html(data.message).hide().removeClass('hidden').fadeIn();
            }
            $('#frmLogin button[type="submit"]').removeProp('disabled').html('Login');
        },'json');
    });
});
</script>

<div class="block block-rounded block-bordered">
    <div class="block-content" class="page-content">
	    
            <div class="modal-neworld-login">
                <a class="navbar-brand" href="https://modulesocean.com" target="_blank">ModulesOcean</a>
	            
	            <div class="alert alert-danger hidden" id="alertLoginFailed"></div>

                <form class="form-horizontal" id="frmLogin">
                    <div class="form-group">
                        <label for="inputLoginEmail" class="col-sm-3 control-label">{$LANG.clientareaemail}</label>

                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="inputLoginEmail" placeholder="{$LANG.enteremail}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputLoginPassword" class="col-sm-3 control-label">{$LANG.clientareapassword}</label>

                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="inputLoginPassword" placeholder="{$LANG.clientareapassword}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <button type="submit" class="btn btn-default btn-block">{$LANG.login}</button>
                        </div>
                    </div>
                </form>
                
            </div>
            
	</div>
</div>