<h1>Add Picture</h1>
<?php
echo $this->Form->create('Picture');
echo $this->Form->input('nodes');
echo $this->Form->input('url');
echo $this->Form->end('Add picture');
?>