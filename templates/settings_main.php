<!--
    settings_main.php
    user interface for the settings tab (HTML)    
-->
<div class="mid">
    <h1>Settings</h1>
    
    <div class="content">        
        <p></p>
        <div class="mod_pw">
            <h4>Change your password</h4>
            <form action="settings.php" method="post">
	            <fieldset>
		            <div class="form-group">
			            <input class="form-control" name="password" placeholder="Current password" type="password"/>
		            </div>
		            <div class="form-group">
			            <input class="form-control" name="new_pw" placeholder="New password" type="password"/>
		            </div>
		            <div class="form-group">
			            <input class="form-control" name="confirmation" placeholder="Confirm new password" type="password"/>
		            </div>
		            <div class="form-group">
			            <button type="submit" class="btn btn-default">Change</button>
		            </div>
	            </fieldset>
            </form>
        </div>
        
        <div class="del_acc">
            <h4>Delete account</h4>
            <p>Warning: This cannot be undone!</p>
            <form action="del_all.php" method="post">
	            <fieldset>
		            <div class="form-group">
			            <input class="form-control" name="username" placeholder="Username" type="text"/>
		            </div>
		            <div class="form-group">
			            <input class="form-control" name="password" placeholder="Password" type="password"/>
		            </div>
		            <div class="form-group">
			            <button type="submit" class="btn btn-default">Delete account</button>
		            </div>
	            </fieldset>
            </form>
        </div>
    </div>
</div>
