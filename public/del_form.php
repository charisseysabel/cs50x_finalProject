<?php
	/**
	 *	del_form.php
	 *	deletes an item from the database through the checkbox.
	 */
	
    require("../includes/config.php");
	
    if(isset($_GET['checkbox']) )
    {
        foreach($_GET['checkbox'] as $del_id )
        {
            $delete = query("DELETE FROM 'inventory' WHERE id = '?' AND 'product'='?' ", $_SESSION["id"], $del_id);
            if($delete === false)
            {
                apologize("sorry");
            }
        }
        redirect("inventory.php");
    }




/*  CREATE TABLE `inventory` (
 `id` int(10) NOT NULL,
 `product` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
 `unit_price` decimal(65,0) NOT NULL,
 `retail_price` decimal(65,0) NOT NULL,
 `supplier_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
 `supplier_contact` int(20) NOT NULL,
 `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
 UNIQUE KEY `product` (`product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
    */

?>
