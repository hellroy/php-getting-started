<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
  <head>
  	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" 
      type="image/png" 
      href="http://layneharris.com/favicon.png">
      
    <title>LAYN.ES FB Feed app</title>
    
      <link rel="stylesheet" href="../css/foundation.css" />
      <script src="../js/vendor/custom.modernizr.js"></script>
  </head>
  <body>
    
    <script src='http://connect.facebook.net/en_US/all.js'></script>
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
      <script src="../js/post.js"></script>
    
          <?PHP
    
 #   include "../opengraph/OpenGraphNode.php";

# Fetch and parse a URL
#
#$page = $_GET["url"];
#$node = new OpenGraphNode($page);
#$titles = $node->title(TRUE);  # return an array
#$test = $node->description();

# Retrieve the title
#
#print $node->title . "\n";    # like this
#print $node->title() . "\n";  # or with parentheses

# And obviously the above works for other Open Graph Protocol
# properties like "image", "description", etc. For properties
# that contain a hyphen, you'll need to use underscore instead:
#
#print $node->street_address . "\n";

# OpenGraphNode uses PHP5's Iterator feature, so you can
# loop through it like an array.
#
#foreach ($node as $key => $value) {
#	print "$key => $value<br>";
#}

?>

    	<div class="row">
		<div class="large-14 columns">
			<h2>Welcome to Layne's Social Post Tracking application</h2>
			<p>This is version 1.0.0</p>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="large-14 columns">

			<!-- Grid Example -->
			
<form>      
    <fieldset>
    <legend>Enter URL</legend>
        <div class="small-12 columns">
         <label>URL</label>
             <input type="text" onchange='updateBitly();' onfocus='updateBitly();' name="url" id="url" placeholder="">
        </div>
    </fieldset>
</form>
    
  
    
<form>
      
    <fieldset>
    <legend>Facebook content</legend>

    <div id='fb-root'></div>
      
    <div class="large-12 columns">
        
        <div class="small-12 columns">
         <label>Title</label>
             <input type="text" name="title" id="title" placeholder="">
        </div>
        
        <div class="small-12 columns">
         <label>Caption</label>
         <input type="text" name="caption" id="caption" value="shared by layn.es">
    </div>  

        
       <div class="small-12 columns">
         <label>Description</label>
             <textarea name="desc" id="desc" placeholder=""><?PHP print_r($titles); ?></textarea>
        </div>
        
    <div class="small-12 columns">
         <label>URL</label>
      <input type="text" name="burl" id="burl" placeholder="Enter your URL...">
    </div>
    
    <div class="small-12 columns">
    	<p><a href="#" onclick='postToFeed(); return false;' class="medium button expand">Post to Facebook</a></p>
    <p id='msg'></p>


        </div>  

      </div>
    </div>

    </fieldset>
</form>
      
      <form>
      
    <fieldset>
    <legend>Twitter content</legend>

    <div id='fb-root'></div>
      
      <div class="large-12 columns">
        
       <div class="small-12 columns">
         <label>Tweet content</label>
             <textarea rows="4" cols="50" name="turl" id="turl" placeholder=""></textarea>
        </div>

        
        <div class="small-12 columns">
    		<p><a href="#" onclick='postToTwitter();' class="medium button expand">Tweet</a></p>
    	<p id='msg'></p>
    </div>
    


      </div>
    </div>
      
     </fieldset>
</form>
    
    
    


  
  <script src="../js/foundation.min.js"></script>
  <!--
  
  <script src="../js/foundation/foundation.js"></script>
  
  <script src="../js/foundation/foundation.interchange.js"></script>
  
  <script src="../js/foundation/foundation.dropdown.js"></script>
  
  <script src="../js/foundation/foundation.placeholder.js"></script>
  
  <script src="../js/foundation/foundation.forms.js"></script>
  
  <script src="../js/foundation/foundation.alerts.js"></script>
  
  <script src="../js/foundation/foundation.magellan.js"></script>
  
  <script src="../js/foundation/foundation.reveal.js"></script>
  
  <script src="../js/foundation/foundation.tooltips.js"></script>
  
  <script src="../js/foundation/foundation.clearing.js"></script>
  
  <script src="../js/foundation/foundation.cookie.js"></script>
  
  <script src="../js/foundation/foundation.joyride.js"></script>
  
  <script src="../js/foundation/foundation.orbit.js"></script>
  
  <script src="../js/foundation/foundation.section.js"></script>
  
  <script src="../js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>

    
  </body>
</html>