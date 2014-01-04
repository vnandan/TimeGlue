<?php
class NodesController extends AppController{
//    public $scaffold;

public function index()
{
$nodes = $this->Node->find('all');
$this->set('nodes',$nodes);
}



}
?>