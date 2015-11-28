<!--
    inv_main.php
    main content for the inventory tab (HTML)
-->

<div class="mid">
    <h1>Inventory</h1>
        <div class="content">
            <!-- TABLE -->
              <div id="dataTbl">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                            </tr>
                        <thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                            </tr>
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td>Tiger NIxon</td>
                                <td>Systems architect</td>
                            </tr>
                        </tbody>
                    </table>
              </div> <!-- collapse dataTbl-->
        </div> <!--collapse content -->
</div><!-- collapse mid -->

<script>
    $(document).ready(function() {
        $('example').DataTable();
    });
</script>













