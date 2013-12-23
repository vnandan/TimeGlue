<?php
class Thread extends AppModel
{ 
public $name = 'Thread';
public $hasMany = array('Node');
public $belongsTo = array('User');
public $validate = array(
                    'title' => array(
                    'not_empty' => array(
                                'rule' => 'notEmpty',
                                'required' => true,
                                'message' => 'Title cannot be empty.'
                                ),
                    'check_length' => array(
                                'rule' => array('between',2,100),
                                'message' => 'Title length not proper.'
                                        )
                            ),
                    'private' => array(
                             'length'  => array(
                                'rule' => array('between',1,1),
                                'message' => 'Invalid private option value'
                                             )
                                    )
                    
                        );
}
?>

//title desc. private