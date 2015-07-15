<script src="<?php echo HTTP_ROOT.'js/jquery-1.7.2.min.js';?>"></script>
<script>    
$(document).ready(function()
	{
		$("#test-list").sortable({
		  handle : '.handle_left',
		  update : function () {

                var order = $('#test-list').sortable('serialize');
			$.post("users/sorting", order, function(theResponse){

			}); 	
        
		  }
		});
	});
 </script>
 <script src="<?php echo HTTP_ROOT.'jquery-ui-1.8.21.custom.min.js';?>"></script>
<!-- Content (Right Column) -->

<div id="content" class="span10"> <?php echo $this->Session->flash(); ?>
  <!--Sorting -->
  <table class="table table-striped table-bordered bootstrap-datatable datatable">
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <!--<th>Meta Title</th>-->
        <th style="text-align: center;">Created Date</th>
        <th style="text-align: center;">Is-Active</th>
        <th style="text-align: center;">High-Light</th>
        <th style="text-align: center;">Actions</th>
      </tr>
    </thead>
    <tbody id="test-list">
      <?php

                                foreach ($GetCoolAttraction as $GetCoolAttraction) {
                                   
                                    ?>
      <tr id="listItem_<?php echo $GetCoolAttraction['Cool_attraction']['id'];?>" style="border:1px solid #0099FF;">
        <td><span style="cursor:move;">s</span></td>
        <td class="center"><?php echo $GetCoolAttraction['Cool_attraction']['title']?></td>
        <!--<td class="center"><?php echo $getFun['Fun']['metatitle']?></td>--->
        <td class="center" style="text-align: center;"><?php echo $this->Test->dateDisplay($GetCoolAttraction['Cool_attraction']['created'])?> </td>
        <td class="center" style="text-align: center;"><?php if($GetCoolAttraction['Cool_attraction']['is_active']){ ?>
          <a href="<?php echo HTTP_ROOT;?>CoolAttractions/active/<?php echo $GetCoolAttraction['Cool_attraction']['id'];?>"  style="text-decoration: none" ><span class="label label-success">Active</span> </a>
          <?php } else { ?>
          <a href="<?php echo HTTP_ROOT;?>CoolAttractions/inactive/<?php echo $GetCoolAttraction['Cool_attraction']['id'];?>" style="text-decoration: none" ><span class="label label-important">In-Active</span> </a>
          <?php } ?>
        </td>
        <td class="center" style="text-align: center;"><?php if($GetCoolAttraction['Cool_attraction']['is_highlight']){ ?>
          <a href="<?php echo HTTP_ROOT;?>CoolAttractions/unhighlight/<?php echo $GetCoolAttraction['Cool_attraction']['id'];?>"  style="text-decoration: none" ><span class="label label-success">On</span></a>
          <?php } else { ?>
          <a href="<?php  echo HTTP_ROOT;?>CoolAttractions/highlight/<?php  echo $GetCoolAttraction['Cool_attraction']['id'];?>" style="text-decoration: none" ><span class="label label-important">Off</span> </a>
          <?php }  ?>
        </td>
        <td class="center" style="text-align: center;"><a class="btn btn-info" href="<?php echo HTTP_ROOT;?>CoolAttractions/addnewcoolatt/<?php echo $GetCoolAttraction['Cool_attraction']['id'];?>"> <i class="icon-edit icon-white"></i> Edit </a>
          <?php  if($GetCoolAttraction['Cool_attraction']['is_gallery']){?>
          <a class="btn btn-info" href="<?php echo HTTP_ROOT;?>CoolAttractions/gallery/<?php echo  $GetCoolAttraction['Cool_attraction']['id'];?>"> Gallery </a>
          <?php  }?>
          <?php  if($GetCoolAttraction['Cool_attraction']['is_banner']==1){?>
          <a class="btn btn-info" href="<?php echo HTTP_ROOT;?>CoolAttractions/banner/<?php echo  $GetCoolAttraction['Cool_attraction']['id'];?>"> Banner </a>
          <?php  }?>
          <a class="btn btn-info" href="<?php echo HTTP_ROOT;?>PageWidgets/index/<?php echo  $GetCoolAttraction['Cool_attraction']['id'].'/'.$GetCoolAttraction['Cool_attraction']['uniqueid'];?>"> Widget </a> <a class="btn btn-info" href="<?php echo HTTP_ROOT;?>ads/index/<?php echo  $GetCoolAttraction['Cool_attraction']['id'].'/'.$GetCoolAttraction['Cool_attraction']['uniqueid'];?>"> Post Ad </a> </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!-- /content -->
