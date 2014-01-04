<?php
class NodesController extends AppController{
//    public $scaffold;

public function index()
{
$nodes = $this->Node->find('all');
$this->set('nodes',$nodes);
}

public function add() {
        if ($this->request->is('post')) {
        	print_r($this->request->data);
        	$this->request->data['Node']['thread_id']=1;
            $this->Node->create();
            //print "LOOK HERE".$this->Session->read('user_id');
            if ($this->Node->save($this->request->data)) {
                $this->Session->setFlash(__('Your Node has been created.'));
            }
            else{
            $this->Session->setFlash(__('Unable to add your node.'));
            }
        }
    }

}
?>