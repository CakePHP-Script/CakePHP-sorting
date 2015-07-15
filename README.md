# CakePHP-sorting


####View/Users/index.ctp


```html
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
 <script src="<?php echo HTTP_ROOT.'js/jquery-ui-1.8.21.custom.min.js';?>"></script>
```

N.B - `HTTP_ROOT` i have defined Config/boatstrap.php file. 


    define('HTTP_ROOT','your_site_path');
    
    

```html
<tbody id="test-list">
  <?php foreach($getUser as $user){?>
  <tr id="listItem_<?php echo $user['User']['id'];?>">
     <td><span style="cursor:move;"><img src="img/arrow.png" alt="" /></span></td>
     <td><?php echo $user['User']['username'];?></td>
  </tr>
  <?php }?>
<tbody>
```


    
####Controller
   
   
    public function index() {
        $condition=array('order' => array('User.sl_no ASC'));
        $this->set('getUser', $this->User->find('all',$condition));
    }
   
    public function sorting() {
        $this->layout = 'ajax';         
        $array = $_REQUEST['listItem'];
  		  $count = 1;
  		  foreach ($array as $idval) {            
  			  $this->User->updateAll(array('sl_no' => $count), array('User.id' => $idval)); 
  			  $count ++; 
  		  } 
        exit;
    }


####Image

![image1](https://raw.githubusercontent.com/CakePHP-Script/CakePHP-sorting/master/webroot/img/arrow.png)

