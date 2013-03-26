<div class="row-fluid">
<div class="span12">
<?php

$btn_add = array('icon'=>'icon-plus-2',
		  		'label'=>$this->solid_lang->get_lang('add','button'),
		  		'link'=>$this->solid_dispatcher->get_url('core_application','core_application','input'));
		  
echo Modules::run('button/link_button',$btn_add);

$btn_delete = array('icon'=>'icon-remove',
		  		'label'=>$this->solid_lang->get_lang('delete_checked','button'),
		  		'link'=>$this->solid_dispatcher->get_url('core_application','core_application','delete'));
		  
echo Modules::run('button/link_button',$btn_delete);

?>
</div>
</div><br/>

<div class="row-fluid">
	<?php echo Modules::run('messenger') ;?>
<table class="table table-bordered table-striped">
<thead>
	<tr>
	<th>No</th>
	<th><input type="checkbox"/></th>
	<th>Application Code</th>
	<th>Application Name</th>
	<th>Application Description</th>
	<th>Action</th>
</tr>
</thead>
<tbody>
	<?php foreach($data as $val) :?>
	<tr>
		<td>s</td>
		<td><input type="checkbox"/></td>
		<td><?php echo $val['app_code'] ?></td>
		<td><?php echo $val['app_name'] ?></td>
		<td><?php echo $val['app_desc'] ?></td>
		 <td>
		 <?php
		  $btn_edit = array('icon'=>'icon-pencil',
		  				'label'=>'edit',
		  				'link'=>$this->solid_dispatcher->get_url('core_application','core_application','input','&id='.$val['app_code']));
		  echo Modules::run('button/link_button',$btn_edit); 
		  ?>
		 </td>
	</tr>
<?php endforeach; ?>
	</tbody>

</table>
</div>
