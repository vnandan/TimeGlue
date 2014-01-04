<pre>
<?php
//print_r($thread);
?>
</pre>

<!DOCTYPE html> 
<html> 
    <head> 
        <title>MelonHTML5 - Timeline</title> 
        <meta charset="utf-8" /> 
        <link rel="stylesheet" type="text/css" href="/timeglue/css/timeline_demo.css" /> 
        <link rel="stylesheet" type="text/css" href="/timeglue/css/timeline.css" /> 
        <link rel="stylesheet" type="text/css" href="/timeglue/css/timeline_light.css" /> 
        <script type="text/javascript" src="/timeglue/js/jquery.js"></script>
		<script>
		timeline_data = [
              <?php foreach ($thread['Node'] as $node) {
               foreach ($node['Blog'] as $blog) {
                ?>
                {
                    type:     'blog_post',
                    date:     <?php echo '\''.$blog['created'].'\''?>,
                    title:    <?php echo '\''.$node['title'].'\''?>,
                    width:    400,
                    content:  <?php echo '\''.$blog['name'].'\''?>,
                    image:    <?php echo '\''.$blog['img_url'].'\''?>,
                    readmore: <?php echo '\''.$blog['url'].'\''?>
                },
                <?php }} ?>
                {
                    type:     'blog_post',
                    date:     '2010-08-03',
                    title:    'Blog Post',
                    width:    400,
                    content:  '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                    image:    '/timeglue/img/evra.jpg',
                    readmore: 'http://www.scriptgates.com'
                }
            ];
		</script>

   </head>
    <body>
    	<button id="showForm">Add blog</button>
    	<div id="blogFormHere"></div>
  <?php
    	$this->Js->get('#showForm')->event(
   'click',
   $this->Js->request(
    array('action' => 'add', 'controller' => 'blogs'),
    array(
        'update' => '#blogFormHere',
        'async' => true,   
        'dataExpression'=>true,
        'method' => 'POST'
    )
  )
);
?>
        <div id="main"> 
            <div id="timeline"></div> 
            <script type="text/javascript"> 
                (function() { 
                    var timeout_id = null; 
 
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 
                    ga.src = '/timeglue/js/scriptgates.js'
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); 
                    ga.onload = function() { 
                        clearTimeout(timeout_id); 
 
                        ga.parentNode.removeChild(ga); 
                        createTimeline(); 
                    }; 
 
                    var iefix = function() { 
                        clearTimeout(timeout_id); 
                        if (typeof Timeline != 'undefined') { 
                            createTimeline(); 
                        } else { 
                            timeout_id = setTimeout(iefix, 2000); 
                        } 
                    } 
 
                    timeout_id = setTimeout(iefix, 2000); 
                })(); 
            </script> 
        </div> 
<!-- SEO DEEP LINKING-->
       
       <?php echo $this->Html->script('demo'); 
       echo $this->Js->writeBuffer();
       ?>
</body>
</html>
