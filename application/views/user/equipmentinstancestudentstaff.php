          <div class="row">
              <div class="span12">
                  <h1>Name: <?php echo $equipment->name ?> <small>Model Number: <?php echo $equipment->modelnumber ?></small></h1>
                  <div class="btn-group pull-right">
                      <button class="btn" onclick=<?php echo "\"window.location.href='".URL::site('/user_equipmentinstancestudentstaff/reserve/'.$equipment->id)."'\">"?>Reserve</button>
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