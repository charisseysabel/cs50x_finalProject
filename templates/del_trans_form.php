<!--
    trans_main.php
    main content for the transactions tab (HTML)
-->
<div class="mid">   
    <h1>Delete confirmation</h1>
    
    <div class="content">
		<div id="trans_tbl">
			<table class="table table-striped">
				<thead>
					<tr>
					    <th>Transaction</th>
						<th>Category</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
				    
				<?php foreach($transToDel as $data): ?>
		            <tr>
		                <td><span id="trans_name"> <?= $data["trans_name"]?> </span> <br>
		                    <span id="trans_date"> <?= $data["trans_time"]?> </span>
		                </td>
		                
		                <td> <?= $data["trans_sub_cat"] ?> <br>
		                    <span id="trans_cat"><?= $data["trans_category"] ?></span>
		                </td>
		                <td>$ <?= $data["trans_amount"] ?> </td>
		            </tr>		        
		        <?php endforeach ?>
			</table>
		</div>
        <form action="del_trans.php" method="post">
            <input type="hidden" name="trans_to_del" value="<?= $data['trans_name']?>" />
            <input type="submit" name="delete" value="Delete!"/>
            <button><a href="javascript:history.go(-1);">Cancel</a></button>
        </form>        
    </div>
</div>
