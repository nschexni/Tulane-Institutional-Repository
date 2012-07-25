
<!--//link to the CSS files for this menu type -->
<link rel="stylesheet" media="screen" href="<?=base_url()?>assets/css/superfish.css" /> 
<link rel="stylesheet" media="screen" href="<?=base_url()?>assets/css/superfish-navbar.css" /> 
 
<!--// link to the JavaScript files (hoverIntent is optional) -->
<script type="text/javascript"  src="<?=base_url()?>assets/js/custom/jquery_hoverIntent.js"></script> 
<script type="text/javascript"  src="<?=base_url()?>assets/js/custom/jquery_superfish.js"></script> 
 
<!--// initialise Superfish -->
<script> 
 
    $(document).ready(function(){ 
        $("ul.sf-menu").superfish({ 
            pathClass:  'current',
            delay:       1000,                            // one second delay on mouseout 
            animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
            speed:       'fast',                          // faster animation speed 
            autoArrows:  true,                            // disable generation of arrow mark-up 
            dropShadows: false                            // disable drop shadows 
        }); 
    }); 
 
</script>

    <div id="top_stripe_bar">&nbsp;</div>
    <ul class="sf-menu sf-navbar">
            <li>
                <a href="<?= base_url();?>">about</a>
            </li>
            
            <li>
                <a href="http://digitallibrary.tulane.edu">digital library</a>
                    <ul class="nav_digital_library">
                        <li><a href="http://digitallibrary.tulane.edu/about">about</a></li>
                        <li><a href="http://digitallibrary.tulane.edu/">refine by</a></li>
                        <li><a href="http://digitallibrary.tulane.edu/collections">full list</a></li>
                    </ul>    
            </li>

            <li>
                    <a href="http://staff.library.tulane.edu/tdl_ttd/">theses &amp; dissertations</a>
                    <ul class="nav_theses">
                        <li><a href="http://staff.library.tulane.edu/tdl_ttd/">search</a></li>
                        <li><a href="http://staff.library.tulane.edu/tdl_ttd/forms/td_submit">submit</a></li>
                    </ul>                        
            </li>	

            <li>
                    <a href="http://staff.library.tulane.edu/journals">publishing</a>
                    <ul class="nav_publishing">
                        <li><a href="http://staff.library.tulane.edu/journals">how</a></li>
                        <li><a href="http://staff.library.tulane.edu/tdl_ttd/journals">list</a></li>
                    </ul>                        
            </li>            
            <li>
                    <a href="http://xerxes.library.tulane.edu/tdl/research/cols">researcher services</a>
                    <ul class="nav_researcher">
                        <li><a href="http://xerxes.library.tulane.edu/tdl/research/cols">link 1</a></li>
                        <li><a href="http://xerxes.library.tulane.edu/tdl/research/cols">link 2</a></li>
                    </ul>                        
            </li>
            
    </ul>
