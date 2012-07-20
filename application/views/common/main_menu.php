<script type="text/javascript">
  
            
    $(document).ready(function() {
            var megaConfig = {      
                interval: 200,  
                sensitivity: 3,  
                over: addMega, 
                timeout: 500,  
                out: removeMega  
            } 
		function addMega(){ 
				$($(this).find("#dropList ul#menu li")).addClass("hovering"); 
				$(this).addClass("hovering"); 
					} 
		function removeMega(){ 
				$($(this).find("#dropList ul#menu li")).removeClass("hovering"); 
				$(this).removeClass("hovering"); 						   
			
                $("#dropList ul#menu li.level1-li").hoverIntent(megaConfig);
                }
    });
</script>

<div id="top_stripe_bar">&nbsp;</div>

<div id="dropList">

<ul id="menu">
   <li class="level1-li"><a class="level1-a" href="<?= base_url();?>">About</a></li>
   <li class="level1-li"><a class="level1-a" href="http://digitallibrary.tulane.edu/">Collections</a></li>   
   <li class="level1-li"><a class="level1-a" href="http://staff.library.tulane.edu/tdl_etd/">Theses &amp; Dissertations</a></li>
   <li class="level1-li"><a class="level1-a" href="http://staff.library.tulane.edu/journals/">Journals</a></li>   
</ul>
</div> 
