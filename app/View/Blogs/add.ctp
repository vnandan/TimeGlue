<body>
<h1>Add Blog URL</h1>
<?php
echo $this->Form->create('Blog', array('action' => 'add', 'default' => false));
echo $this->Form->input('node_id');
echo $this->Form->input('url');
echo $this->Form->input('img_url');
echo $this->Form->input('name');
echo $this->Form->end('Add url');
?>

<?php
// JsHelper should be loaded in $helpers in controller
// Form ID: #ContactsContactForm
// Div to use for AJAX response: #contactStatus
$data = $this->Js->get('#BlogAddForm')->serializeForm(array('isForm' => true, 'inline' => true));
$this->Js->get('#BlogAddForm')->event(
   'submit',
   $this->Js->request(
    array('action' => 'add', 'controller' => 'blogs'),
    array(
        'update' => '#updated',
        'data' => $data,
        'async' => true,   
        'dataExpression'=>true,
        'method' => 'POST'
    )
  )
);
echo $this->Js->writeBuffer();
?>
<div id="updated"></div>
</body>