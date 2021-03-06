<?php $modalFormName_TacUser = 'add'; ?>
<!-- Modal Add User -->
<div id="addUser" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Add New User</h4>
		</div>
		<div class="modal-body">
		<form id="addUserForm">
		<div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#general_info" data-toggle="tab" aria-expanded="true">General</a></li>
        <li class=""><a href="#groups" data-toggle="tab" aria-expanded="true">Groups</a></li>
        <li class=""><a href="#message" data-toggle="tab" aria-expanded="false">Message</a></li>
        <li class=""><a href="#aclService" data-toggle="tab" aria-expanded="false">ACL/Service</a></li>
        <li class=""><a href="#access" data-toggle="tab" aria-expanded="false">Access Rules</a></li>
        <li class=""><a href="#extraOptions" data-toggle="tab" aria-expanded="false">Extra Options</a></li>
        <li class=""><a href="#otp" data-toggle="tab" aria-expanded="false">OTP Auth</a></li>
        <li class=""><a href="#sms" data-toggle="tab" aria-expanded="false">SMS Auth</a></li>
  			<li class="pull-right"><a href="#manual" data-toggle="tab" aria-expanded="false" class="text-muted"><i class="fa fa-gear"></i></a></li>
      </ul>
      <div class="tab-content">
				<div class="tab-pane active" id="general_info">
					<?php include __DIR__ . '/tabGeneralInfo.php';?>
				</div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="groups">
					<?php include __DIR__ . '/tabGroups.php';?>
				</div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="message">
					<?php include __DIR__ . '/tabMessage.php';?>
				</div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="aclService">
					<?php include __DIR__ . '/tabAclService.php';?>
				</div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="access">
					<?php include __DIR__ . '/tabAccess.php';?>
				</div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="extraOptions">
					<?php include __DIR__ . '/tabExtraOptions.php';?>
				</div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="otp">
					<div class="text-center"><p style="padding-top:40px;padding-bottom:20px;">You can use that function in edit mode. Firstly add user.</p></div>
				</div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="sms">
					<div class="text-center"><p style="padding-top:40px;padding-bottom:20px;">You can use that function in edit mode. Firstly add user.</p></div>
				</div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="manual">
					<?php include __DIR__ . '/tabManualSettings.php';?>
				</div>
				<!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
		</div>
		</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-flat pull-left" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-flat btn-success ladda-button" data-style="expand-right" onclick="tgui_tacUser.add(this)"><span class="ladda-label">Add User</span></button>
		</div>
	</div>
	</div>
</div>
      <!-- Modal Add User -->
