      <div class="row">
        <div class="span12">
          <form class="form-horizontal" method="post" action="<?php echo URL::site('/user_makereservation/reserve/'.$equipment->id); ?>">
            <legend>Add Reservation</legend>
              <div class="control-group">
                <label class="control-label">Name:</label>
                <div class="controls">
                  <label id="equipment-name"><?php echo $equipment->name ?></label>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Model Number:</label>
                <div class="controls">
                  <label id="model-number"><?php echo $equipment->modelnumber ?></label>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputDate">Date:</label>
                <div class="controls">
                  <input id="inputDate" type="date" name="date" required="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputTime">Time:</label>
                <div class="controls">
                  <input id="inputDate" type="text" name="time" required="required" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]"/>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Make Reservation</button>
                </div>
              </div>
          </form>
        </div>
      </div>