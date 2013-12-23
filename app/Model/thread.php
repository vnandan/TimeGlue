<?php
class Thread extends AppModel
{ 
public $name = 'Thread';
public $hasMany = array('Node');
public $belongsTo = array('User');
}
?>