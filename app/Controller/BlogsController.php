<?php
class Blogscontroller extends AppController{
public $helpers = array('Js' => array('Jquery'));
public $components = array('RequestHandler');

public function index()
{
}

public function add()
{

    $this->Session->write('current_thread',1);
    if($this->request->is('ajax'))
    {
            $this->Blog->create();
            if ($this->Blog->save($this->request->data)) {
                //$this->Session->setFlash(__('Blog link has been added to node.'));
                $this->render('add_success','ajax');
            }
            else{
            //$this->Session->setFlash(__('Unable to add link to node.'));
            $this->render('add_failure','ajax');

            }
    }
    else
    {
    $nodes= $this->Blog->Node->find('list', array('conditions' => array('thread_id' => $this->Session->read('current_thread'))));
    $this->set('nodes', $nodes);
    }
}

}
?>