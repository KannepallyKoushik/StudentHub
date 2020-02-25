





		  <?php 
		  $hh=mysqli_query($connect,"select * from ideas") or die(mysqli_error($connect));
		  while($hr=mysqli_fetch_array($hh))
		  {
		  ?>
  <div class="modal fade" id="myModal<?php echo $hr['ID']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Recent Feedback&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;folat:right"><?php echo "Average rating:".$hr['rank']; ?></span></h4>
        </div>
        <div class="modal-body">
          <?php 
		  $m=mysqli_query($conn,"select * from givefeedback where hid='".$hr['ID']."'") or die(mysqli_error($conn));
		  while($p=mysqli_fetch_array($m))
		  { 
		  ?>
		 
		 
          <h3><i class="fa fa-user-circle" style="font-size:40px" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <?php echo ucfirst($p['name']);?>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px"><?php echo "Rating:".$p['rating']; ?></span></h3>
		  <h4><?php echo ucfirst($p['hospitalname']); ?>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px"><?php echo "Doctor:".ucfirst($p['doctorname']); ?></span></h4></p>
		  <span style="font-size:12px"><?php echo $p['message']; ?></span>
		  <hr>
		  <?php } ?>
        </div>
       <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>     
      </div>
      
    </div>
  </div>
   <?php } ?>
</div>
