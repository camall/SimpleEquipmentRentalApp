      <div class="row">
        <div class="span12">
          <form class="form-horizontal equipment-form" method="post" action="<?php echo URL::site('/admin_editequipment/edit/'.$equipment->id); ?>">
            <legend>Edit Equipment</legend>
              <div class="control-group">
                <label class="control-label" for="inputName">Name</label>
                <div class="controls"> 
                  <input name="name" type="text" name="name" placeholder="equipment name" value="<?php echo $equipment->name ?>" required="required">
                </div>
              </div>
              <div class="control-group">    
                <label class="control-label" for="inputModel">Model Number</label>
                <div class="controls">
                  <input name="model" type="text" name="model" placeholder="model number" value="<?php echo $equipment->modelnumber ?>10" required="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="comment">Comment</label>
                <div class="controls">
                  <textarea id="comment" type="date" name="comment" placeholder="write a comment" rows="4"><?php echo $equipment->comments ?></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <label class="checkbox">
                    <input name="active" type="checkbox" checked="<?php if($equipment->avaliable == 1) echo "True"; else echo "False"?>"> Active
                  </label>
                  <button type="submit" class="btn">Save Equipment</button>
                </div>
              </div>
          </form>
        </div>
      </div>
