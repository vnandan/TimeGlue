<h1>Create Thread</h1>
<?php
echo $this->Form->create('Thread');
echo $this->Form->input('title');
echo $this->Form->input('description');
echo $this->Form->input('private');
echo $this->Form->end('Update Thread');
?>