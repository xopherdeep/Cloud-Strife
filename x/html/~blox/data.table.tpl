<section class="widget"> 
    <table id="shop-items" class="table table-striped dataTable no-footer"  width="100%">
        <thead>
            <tr>
                {foreach $data as $key => $value}
                    <th>{$value}</th>
                {/foreach}
            </tr>
        </thead> 
        <tfoot>
            <tr>
                {foreach $data as $key => $value}
                    <th>{$value|str_replace:'_':' '|ucwords}</th>
                {/foreach}
            </tr>
        </tfoot>
    </table>
    <script type="text/javascript"> 
        $(document).ready(function() {
            $('#shop-items').dataTable( {
                // "processing": true,
                // "serverSide": true,
                // "autoload" : true,
                "sDom": "<'row table-top-control'<'col-md-6 hidden-xs per-page-selector'l><'col-md-6'f>r>t<'row table-bottom-control'<'col-md-6'i><'col-md-6'p>>",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ &nbsp; records per page"
                },
                "ajax": "/{$toBackDoor}/{$Xtra}/{$method}/.json"
            }); 
        }); 
    </script>
</section>