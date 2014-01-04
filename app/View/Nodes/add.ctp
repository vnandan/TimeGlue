<h1>Create Node</h1>
<?php
echo $this->Form->create('Node');
echo $this->Form->input('title');
echo $this->Form->input('reference_date');
echo $this->Form->end('Save Post');
?>