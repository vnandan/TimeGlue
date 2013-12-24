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
    $this->Thread->recursive=2;
    $thread = $this->Thread->findById($id);
        if (!$thread) {
            throw new NotFoundException(__('Invalid post'));
        }
    $this->set('thread',$thread);
    }
}
public function add() {
        if ($this->request->is('post')) {
            $this->Thread->create();
            if ($this->Thread->save($this->request->data)) {
                $this->Session->setFlash(__('Your Thread has been created.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
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