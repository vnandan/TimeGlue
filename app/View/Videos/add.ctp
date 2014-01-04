<h1>Add Video</h1>
<?php
echo $this->Form->create('Video');
echo $this->Form->input('node_id');
echo $this->Form->input('url');
echo $this->Form->end('Add Video');
?>