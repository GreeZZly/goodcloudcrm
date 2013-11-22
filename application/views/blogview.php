
	<h1><?echo $heading;?></h1>

	<h3>
		My todo list!
	</h3>
	<ul>
	<? foreach ($todo_list as $key):?>
		<li><? echo $key;?></li>	
	<? endforeach;?>
		
	</ul>

