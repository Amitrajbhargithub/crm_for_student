
<!---------Add Header-------->
<?= $this->include('partner/layout/header') ?>
<link rel="stylesheet" href="<?php echo base_url('admin/assets/css/questionnair.css');?>">

<!------------End Header----->
           <!-- my page -->

           <div class="content-wrapper">
                <div class="col-md-12">
                    <h3>Change Password</h3>

                    <?php if (session('success')): ?>
                        <div class="alert alert-success">
                            <?= session('success') ?>
                        </div>
                    <?php endif; ?>
        

                    <div class="card-body">
                        <?php if (session('errors')): ?>
                            <div class="alert alert-danger">
                                <?= implode('<br>', session('errors')) ?>
                            </div>
                            
                        <?php endif; ?>

                        <div class="col-md-12  col-sm-12 col-12 mb-4">
                        <?php if (isset($validation) && $validation->hasError('old_pwd')) : ?>
                        <p><?= $validation->getError('old_pwd') ?></p>
                        <?php elseif (isset($error)) : ?>
                            <p><?= $error ?></p>
                        <?php endif; ?>

                        <form role="form" id="savePassword" action="<?= base_url('partner/updatepassword');?>" method="post">
                            <input type="hidden" value="1" name="save" />
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input class="form-control" type="password" name="old_pwd" id="old_pwd" value="">
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                               
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input class="form-control" type="password" name="new_pwd" id="new_pwd">
                                           
                                        </div>                                       
                                         <div class="form-group">
                                            <label>repeat new password</label>
                                            <input class="form-control" type="password" name="r_pwd" id="r_pwd">
                                           
                                        </div>
                                
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                             <div align="center">
                             	<button type="button" onClick="sendThisForm()" class="btn btn-outline btn-primary btn-lg btn-block">Save password</button>
                             </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!---------Add Header-------->
    <?php // $this->include('partner/layout/footer') ?>
    <!------------End Header----->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
	function sendThisForm()
	{
		old = $('#old_pwd').val();
		n_pw = $('#new_pwd').val();
		r_pw = $('#r_pwd').val();

		if (old == '')
		{
			alert('Please enter your old password');
			return;
		}

		if (n_pw == '')
		{
			alert('Enter a new password');
			return;
		}

		if (r_pwd == '')
		{
			alert('Repeat new password');
			return;
		}

		if (r_pwd == n_pw)
		{
			alert('The r_pwd and new passwords must not be the same');
			return;
		}

		if (n_pw != r_pw)
		{
			alert('The passwords you provided did not match');
			return;
		}

		$('#savePassword').submit();
	}
</script>

    </script>
</body>
</html>










