<?php
class Node extends AppModel
{ 
public $name = 'Node';
public $belongsTo = 'Thread';
public $hasMany = array('Video','Blog','Picture');
}
?>