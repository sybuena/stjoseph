
<?php 
//must be from db
$service = array('baptism', 'blessings', 'funeral mass', 'wedding' );?>
<div class="jumbotron2">
    <div class="headliner">
        <div class="headline">
            <p>Reservation</p>
        </div>
        <div class="headline-content">
        	<div role="form">
              <div class="form-group">
                <h5>Select Service <span class="alert-red">*</span></h5>
              	<select class="form-control">
                	<option value="0">Choose from...</option>
                	<?php foreach($service as $v) :?>
                		<option value="<?php echo $v; ?>"><?php echo ucfirst($v); ?></option>
                    <?php endforeach; ?> 
                </select>
              </div>
              <hr class="headline">
              <div class="form-group">
              	<h5>Select Date <span class="alert-red">*</span></h5>
                
              <div id="calendar"></div>
              </div>	
              
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </div>
</div>