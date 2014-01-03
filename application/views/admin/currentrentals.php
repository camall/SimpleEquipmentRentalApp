  <div class="row">
    <div class="span12">
      <h1>All Current Rentals</h1>
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
              foreach ($futureReservations as $fr){
                echo "<tr>";
                echo "<td>".$fr->id."</td>";
                echo "<td>".$fr->date."</td>";
                echo "<td>".$fr->name."</td>";
                echo "<td>".$fr->username."</td>";
                echo "</tr>";
              }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
