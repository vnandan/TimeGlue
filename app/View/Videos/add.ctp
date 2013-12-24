<h1>Add Video</h1>
<?php
echo $this->Form->create('Video');
echo $this->Form->input('nodes');
echo $this->Form->input('url');
echo $this->Form->end('Add Video');
?>