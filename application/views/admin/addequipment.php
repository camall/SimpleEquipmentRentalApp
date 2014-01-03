      <div class="row">
        <div class="span12">
          <form class="form-horizontal equipment-form" method="post" action="<?php echo URL::site('/admin_addequipment/add/'); ?>">
            <legend>Add Equipment</legend>
              <div class="control-group">
                <label class="control-label" for="inputName">Name</label>
                <div class="controls"> 
                  <input id="inputName" type="text" name="name" placeholder="equipment name" required="required">
                </div>
              </div>
              <div class="control-group">    
                <label class="control-label" for="inputModel">Model Number</label>
                <div class="controls">
                  <input id="inputModel" type="text" name="model" placeholder="model number" required="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="comment">Comment</label>
                <div class="controls">
                  <textarea id="comment" type="date" name="comment" placeholder="write a comment" rows="4">Comment</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputDate">Date of Purchase</label>
                <div class="controls">
                  <input id="inputDate" type="date" name="date" required="required">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <label class="checkbox">
                    <input name = "active" type="checkbox" checked> Active
                  </label>
                  <button type="submit" class="btn">Add Equipment</button>
                </div>
              </div>
          </form>
        </div>
      </div>