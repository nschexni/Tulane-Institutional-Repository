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


