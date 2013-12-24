<?php
class PicturesController extends AppController{

public function index()
{}

public function add()
{
    if($this->request->is('post'))
    {
            $this->Picture->create();
            if ($this->Picure->save($this->request->data)) {
                $this->Session->setFlash(__('Picture has been added to node.'));
            }
            else{
            $this->Session->setFlash(__('Unable to picture to node.'));
            }
            return $this->redirect(array('action' => 'index'));
    }
    else
    {
    $nodes = $this->Picture->Node->find('list', array('conditions' => array('thread_id' => $this->Session->read('current_thread'))));
    $this->set('nodes', $nodes);
    }
}

}
?>