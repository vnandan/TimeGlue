<?php
class NodesController extends AppController{
//    public $scaffold;

public function index()
{
$nodes = $this->Node->find('all');
$this->set('nodes',$nodes);
}

public function add()
{
    $this->Session->write('current_thread',1);
    if($this->request->is('post'))
    {
        $this->request->data['Node']['thread_id']=$this->Session->read('current_thread');
            $this->Node->create();
            if ($this->Node->save($this->request->data)) {
                $this->Session->setFlash(__('Your Node has been created.'));
            }
            else{
            $this->Session->setFlash(__('Unable to add your Node.'));
            }
    }
    else
    {
    $this->Session->setFlash(__('Unable to add your node to timeline.'));
    }
}

public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid Node'));
    }

    $node = $this->Node->findById($id);
    if (!$node) {
        throw new NotFoundException(__('Invalid Node'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Node->id = $id;
        if ($this->Node->save($this->request->data)) {
            $this->Session->setFlash(__('The Node has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your node. Try again later.'));
    }

    if (!$this->request->data) {
        $this->request->data = $node;
    }
}





}
?>