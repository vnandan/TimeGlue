<?php
class Node extends AppModel
{ 
public $name = 'Node';
public $belongsTo = 'Thread';
public $hasMany = array('Video','Blog','Picture');
public $validate = array(
                'title' => array(
                        'not_empty'=> array(
                                    'rule' => 'notEmpty',
                                    'required' =>true,
                                    'message' => 'Title cannot be empty'
                                        ),
                        'length_check' => array(
                                        'rule' => array('between',1,75),
                                        'message' => 'Inappropriate title length'
                                        )
                            ),
                'reference_date' => array(
                        'is_date' => array(
                                        'rule' => 'date',
                                        'required' => 'true',
                                        'message' => 'Invalid date'
                                        )
                            )
                );
}
?>