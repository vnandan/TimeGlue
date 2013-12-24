<?php
class Blogscontroller extends AppController{

public function index()
{}

public function add()
{
    //$this->Session->write('current_thread',1);
    if($this->request->is('post'))
    {
      //  $this->request->data['Node']['thread_id']=$this->Session->read('current_thread');
            $this->Blog->create();
            if ($this->Blog->save($this->request->data)) {
                $this->Session->setFlash(__('Blog link has been added to node.'));
            }
            else{
            $this->Session->setFlash(__('Unable to add link to node.'));
            }
            return $this->redirect(array('action' => 'index'));
    }
    else
    {
    $nodes = $this->Blog->Node->find('list', array('conditions' => array('thread_id' => $this->Session->read('current_thread'))));
    $this->set('nodes', $nodes);
    }
}

}
?>