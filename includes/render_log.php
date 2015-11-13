<?php
	/**
	 *	render-log.php
	 *	renders the html markup of the login and logout pages
	 *
	 */ 


	/**
     *	RENDER
     *	Renders template for the dashboard, passing in values.
     */
    function render($template, $values = [])
    {
        // if template exists, render it
        if (file_exists("../templates/$template"))
        {
            // extract variables into local scope
            extract($values);

            // render header
            require("../templates/header-log.php");

            // render template
            require("../templates/$template");

            // render footer
            require("../templates/footer.php");
        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }



?>