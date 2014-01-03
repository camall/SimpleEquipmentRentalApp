
          <div class="row">
              <div class="span12">
                  <h1>Name: <?php echo $equipment->name ?> <small>Model Number: <?php echo $equipment->modelnumber ?></small></h1>
                  <div class="btn-group pull-right">
                      <button class="btn" onclick=<?php echo "\"window.location.href='".URL::site('/admin_editequipment/index/'.$equipment->id)."'\">"?>Edit</button>
                      <button class="btn dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo URL::site('/admin_equipmentinstance/disable/'.$equipment->id); ?>">Disable Renting</a></li>
                        <li><a href="<?php echo URL::site('/admin_equipmentinstance/remove/'.$equipment->id); ?>">Remove Equipment</a></li>
                      </ul>
                  </div>
                  <hr>
                  <h3>Equipment Details</h3>
                  <p><strong>Status: </strong><?php echo $equipment->avaliable ?></p>
                  <p><strong>Date of Purchase: </strong><?php echo $equipment->dateofpurchase ?></p>
                  <p><strong>Comments:</strong></p>
                  <p><?php echo $equipment->comments ?></p>
              </div>
          </div>
          <div id="current-rentals" class="row">
              <div class="span12">
                  <h3>Current Rentals</h3>
                  <table class="table table-striped">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Date & Time</th>
                            <th>Name</th>
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
                              echo "</tr>";
                            }
                          ?>
                      </tbody>
                  </table>
              </div>
          </div>
          <div id="past-rentals" class="row">
              <div class="span12">
                  <h3>Past Rentals</h3>
                  <table class="table table-striped">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Date & Time</th>
                            <th>Name</th>
                            <th>User Group</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php 
                            foreach ($pastReservations as $pr){
                              echo "<tr>";
                              echo "<td>".$pr->id."</td>";
                              echo "<td>".$pr->date."</td>";
                              echo "</tr>";
                            }
                          ?>
                      </tbody>
                  </table>
              </div>
          </div>
