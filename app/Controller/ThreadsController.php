<?php
class ThreadsController extends AppController{

public $helpers = array('Html', 'Form', 'Session');

public function index() {
        $this->set('threads', $this->Thread->find('all'));
    }

public function view($id = null)
{
     if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
    else
    {
  //  $this->Thread->recursive=2;
    $thread = $this->Thread->findById($id);
        if (!$thread) {
            throw new NotFoundException(__('Invalid post'));
        }
    $this->set('thread',$thread);
    }
}
public function add() {
        if ($this->request->is('post')) {
            $this->Session->write('user_id',1);
            $this->request->data['Thread']['user_id']=$this->Session->read('user_id');
            $this->Thread->create();
            //print "LOOK HERE".$this->Session->read('user_id');
            if ($this->Thread->save($this->request->data)) {
                $this->Session->setFlash(__('Your Thread has been created.'));
                //print_r($this->request->data['Thread']);
                //return $this->redirect(array('action' => 'index'));
            }
            else{
            $this->Session->setFlash(__('Unable to add your post.'));
            }
        }
    }
public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Thread->delete($id)) {
        $this->Session->setFlash(
            __('The post with id: %s has been deleted.', h($id))
        );
        return $this->redirect(array('action' => 'index'));
    }
}
}
?>