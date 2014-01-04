<body>
<h1>Add Blog URL</h1>
<?php
echo $this->Form->create('Blog');
echo $this->Form->input('node_id');
echo $this->Form->input('url');
echo $this->Form->input('img_url');
echo $this->Form->input('name');
echo $this->Form->end('Add url');
$this->Js->writeBuffer();
?>
</body>