<div class="panel panel-primary">
    <div class="panel-heading">
        <h4>Hello World</h4>
    </div>
    <div class="panel-body">
        
        <table class="table" id="datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $clients->each(function($client) {
                    print "<tr><td>$client->id</td><td>$client->name</td></tr>";
                })
            ?>
            </tbody>
        </table>

    </div>
</div>

