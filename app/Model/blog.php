<?php
class Blog extends AppModel{
    var $name = 'Blog';
    var $belongsTo = 'Node';
    public $validate = array(
                            'node_id' => array(
                                'not_empty' => array(
                                                     'rule' => 'notEmpty',
                                                     'message' => 'Node Id cannot be empty',
                                                     'required' => true
                                                     ),
                                'is_number' => array(
                                                    'rule' => 'numeric',
                                                    'message' => 'Invalid node ID'
                                                    )
                                ),
                            'url' => array(
                            'not_empty' => array(
                                                 'rule'=>'notEmpty',
                                                 'message' => 'URL can not be empty.'
                                                 ),
                            'is_url' => array(
                                                'rule' => 'url',
                                                'message' => 'Invalid URL' 
                                            )
                                        )
                            );
    
}

/* id (no input)
 * node_id int 12 exist 
 * url validate 
 **/