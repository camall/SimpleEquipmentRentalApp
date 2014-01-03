
      <div class="row">
        <div class="span12">
          <h1>Equipment List</h1>
          <a href = "<?php echo URL::site('/admin_addequipment'); ?>">
            <button class="btn pull-right">Add Equipment</button>
          </a>
          <hr>
          <table class="table table-striped equipment-list-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Model Number</th>
                <th>DoP</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($equipment as $e){
                  echo "<tr onclick=\"window.location.href='".URL::site('/admin_equipmentinstance/index/'.$e->id)."'\">";
                  echo "<td>".$e->id."</td>";
                  echo "<td>".$e->name."</td>";
                  echo "<td>".$e->modelnumber."</td>";
                  echo "<td>".$e->dateofpurchase."</td>";
                  echo "<td>".$e->avaliable."</td>";
                  echo "</tr>";
                }
                ?>
            </tbody>
          </table>
        </div>
      </div>