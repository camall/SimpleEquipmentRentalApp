      <div class="row">
        <div class="span12">
          <h1>All Past Rentals</h1>
          <hr>
          <table class="table table-striped">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Date & Time</th>
                  <th>Equipment Name</th>
                  <th>User Name</th>
                  <th>User Group</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                  foreach ($pastReservations as $pr){
                    echo "<tr>";
                    echo "<td>".$pr->id."</td>";
                    echo "<td>".$pr->date."</td>";
                    echo "<td>".$pr->name."</td>";
                    echo "<td>".$pr->username."</td>";
                    echo "</tr>";
                  }
                ?>
            </tbody>
          </table>
        </div>
      </div>