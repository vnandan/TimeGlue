<h1>Add Blog URL</h1>
<?php
echo $this->Form->create('Blog');
echo $this->Form->input('node_id');
echo $this->Form->input('url');
echo $this->Form->end('Add url');
?>