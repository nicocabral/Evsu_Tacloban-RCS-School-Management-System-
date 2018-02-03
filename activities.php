<?php /*?><p style="font-size: 16px;"><strong>Activities &nbsp;</strong>|&nbsp; <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Add Activities</button></p><?php include('add_activities.php');?><?php */?>
   
     
       <div class="panel panel-primary">
       <div class="panel-heading">List of School Activities</div>
      	<div class="panel-body">
    	<div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                           ATTENTION!
                                        </div>
                                        <div class="panel-body">
                                            <?php 
                                                include('includes/dbconn.php');
                                                $result = mysql_query("SELECT * FROM tbl_activities WHERE status='new'") or die(mysql_error());
                                                while($row = mysql_fetch_array($result)){
                                            ?>
                                            <form role="form" action="act_update_process.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Heading</label>
                                                        <input style="width:100%;" name="heading" value="<?php echo $row['heading'];?>" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Description/Contents</label>
                                                        <textarea style="width:100%;" name="desc" class="form-control" rows="5"><?php echo $row['description'];?></textarea>
                                                        <hr><br/>
                                                        <input type="submit" class="btn btn-success pull-right" value="Update">
                                                    </div>
                                                </div>
                                            </form>
                                            <?php } ?>
                                        </div>
                                        <div class="panel-footer">
                                            <em><center>Nothing Follows...</center></em>
                                        </div>
                                     </div>
                                </div>

                                            </form>
                                      
        
        
      
	</div></div>

      
        </div>
