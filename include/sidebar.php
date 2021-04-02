<?php 
if(User::loggedIn()){

	if($userStatus == 1){
	?> 
	<div class='sidebar'>
		<div class='sidebar-area'> 
			<div class='row' style='margin-bottom: 20px;'> 
				<div class='col-md-6'> 
					<div class='user-profile'> 
						<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' /> 
					</div>
				</div> 
				<div class='col-md-6'> 
					<div class='user-names'> 
						<?php echo "$userRole";  ?>
					</div>
					
				</div> 
			</div> 
			<ul class='sidebar-menu'>
				<li><a href='index.php'><img class='sidebar-menu-icon' src='images/ic_account_balance_wallet_white_24dp.png'  /> Dashboard</a></li>
				<li><a href='add-patient.php'><img class='sidebar-menu-icon' src='images/ic_assignment_ind_white_24dp.png'  /> Add Patients</a></li>
				<li><a href='add-doctors.php'><img class='sidebar-menu-icon' src='images/ic_group_add_white.png'  /> Add Doctors</a></li>
			</ul> 
		</div> 
	</div>
	<?php 
	} 
	

}