<!--
    register_form.php
    render register form
-->

<div class="log_div">
    <form action="register.php" method="post">
	    <fieldset>
		    <div class="form-group">
			    <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
		    </div>
		    <div class="form-group">
			    <input class="form-control" name="password" placeholder="Password" type="password"/>
		    </div>
		    <div class="form-group">
			    <input class="form-control" name="confirmation" placeholder="Confirm password" type="password"/>
		    </div>
		    <div class="form-group">
			    <button type="submit" class="btn btn-default">Register</button>
		    </div>
	    </fieldset>
    </form>
 <p><a href="login.php">Already have an account? Sign in</a></p>
    
    </div>
