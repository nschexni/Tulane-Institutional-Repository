<!--scripts and css for Carousel-->
<link href="<?=base_url();?>assets/css/carousel_simple.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=base_url();?>assets/js/custom/jquery_sizzle.js"></script>
<!--File that declares carousel items information  NS:2012/07/18-->
<script type="text/javascript" src="<?=base_url();?>assets/js/custom/carousel_data.js"></script>

<div id="content_wrapper">

<!--    <h1 class="homepage_title">TULANE UNIVERSITY'S INSTITUTIONAL REPOSITORY</h1>  -->
<div class="shell container-content-main">
    <div class="container_24 clear">
        <div id="coverStoriesContainer">
            <div class="evo-wrapper">
                <div class="evo-coverStories">
                    <!-- fuseNav -->
                    <div class="fuseNav clearfix"> 	
                        <a style="width: 189px;" href="<?= $carousel['item_one_link']; ?>" class="first active"> 	
                    		<span class="text">
                                   <?= $carousel['item_one_title']; ?>
                                </span> 
                                <span class="fuse"> 
                                    <span class="activeFuse"></span> 
                                </span> 
                    	</a> 
                    
                    	<a style="width: 189px;" href="<?= $carousel['item_two_link']; ?>"> 
                        	<span class="text"> 
                                    <?= $carousel['item_two_title']; ?>
                                </span> 
                            <span class="fuse"> 
                                <span class="activeFuse"></span> 
                            </span> 
                        </a> 
                        
                        <a style="width: 189px;" href="<?= $carousel['item_three_link']; ?>">                                                                           <span class="text"> 
                                <?= $carousel['item_three_title']; ?>
                           </span> 
                           <span class="fuse"> 
                                <span class="activeFuse"></span> 
                           </span> 
                        </a> 
                        
                        <a style="width: 189px;" href="<?= $carousel['item_four_link']; ?>"> 
                            <span class="text">
                                <?= $carousel['item_four_title']; ?>
                            </span> 
                            <span class="fuse"> 
                            	<span class="activeFuse"></span> 
                            </span> 
                        </a> 
                        
                        <a style="width: 192px;" href="<?= $carousel['item_five_link']; ?>"> 
                            <span class="text">
                                <?= $carousel['item_five_title']; ?>
                            </span> 
                            <span class="fuse"> 
                            	<span class="activeFuse"></span> 
                            </span> 
                        </a> 
                    </div>
                    <!-- END: fuseNav -->
                    
                    <div class="carousel">
                        
                        
                        <div class="storyUnit wide index-0 active"> 
                            <!-- big image -->
                            <div class="cvr-main"> 
                            	<a href="<?= $carousel['item_one_link']; ?>">
                                	<img src="<?= base_url().$carousel['item_one_img']; ?>" />
                                </a> 
                            </div>
                            <!-- END: cvr-main --> 
                            
                            <!-- sub items in the right -->
                            <div class="cvr-highlights">
                                <div class="cvr-headline lcs-headline">
                                    <a href="<?= $carousel['item_three_link']; ?>">
                                    	Guidelines For Submission
                                    </a>
                                </div>
                                <div class="cvr-teaser lcs-teaser">A Little Help for Your BIG Project</div>
                                <div class="cvr-highlightsSubTitle">Get Where Your Going</div>
                                <ul class="evo-coverStories-subitems">
                                    <li class="alpha"> 
                                    	<a href="http://tulane.edu/sse/academics/graduate/upload/guidelines_theses_dissertations.pdf">Tulane's Style Guide</a> 
                                    </li>
                                    <li> 
                                    	<a href="http://staff.library.tulane.edu/tdl_ttd/assets/bootstrap/doc/Tulane_PDF_Creation_Guide.pdf">PDF Creation Guide</a> 
                                    </li>
                                    <li> 
                                    	<a href="http://tulane.edu/ogps/">Copyright Information</a> 
                                    </li>
                                    <li> 
                                    	<a href="http://tulane.edu/ogps/">Deadlines!!!</a> 
                                    </li>
                                </ul>
                                <!-- END: evo-coverStories-subitems --> 
                            </div>
                            <!-- END: cvr-highlights --> 
                        </div>
                        <!-- END: storyUnit -->
                        
                        
                        
                        
                        
                        <div class="storyUnit wide index-1"> 
                            <!-- big image -->
                            <div class="cvr-main"> 
                            	<a href="<?= $carousel['item_two_link']; ?>">
                                	<img src="<?= base_url().$carousel['item_two_img']; ?>" />
                                </a> 
                            </div>
                            <!-- END: cvr-main --> 
                            <!-- sub items in the right --> 
                        </div>
                        <!-- END: storyUnit -->
                        
                        <div class="storyUnit wide index-2"> 
                            <!-- big image -->
                            <div class="cvr-main"> 
                            	<a href="<?= $carousel['item_three_link']; ?>">
                                	<img src="<?= base_url().$carousel['item_three_img']; ?>" />
                                </a> 
                            </div>
                            <!-- END: cvr-main --> 
                            <!-- sub items in the right -->
                            <div class="cvr-highlights">
                                <div class="cvr-headline lcs-headline">
                                    <a href="<?= $carousel['item_three_link']; ?>">
                                    	Heading
                                    </a>
                                </div>
                                <div class="cvr-teaser lcs-teaser">Teaser</div>
                                <div class="cvr-highlightsSubTitle">SubHeading</div>
                                <ul class="evo-coverStories-subitems">
                                    <li class="alpha"> 
                                    	<a href="#">link 1</a> 
                                    </li>
                                    <li> 
                                    	<a href="#">link 2</a> 
                                    </li>
                                    <li> 
                                    	<a href="#">link 3</a> 
                                    </li>
                                </ul>
                                <!-- END: evo-coverStories-subitems --> 
                            </div>
                            <!-- END: cvr-highlights --> 
                        </div>
                        <!-- END: storyUnit -->
                        
                        <div class="storyUnit wide index-3"> 
                            <!-- big image -->
                            <div class="cvr-main"> 
                            	<a href="<?= $carousel['item_four_link']; ?>">
                                   <img src="<?= base_url().$carousel['item_four_img']; ?>" />
                                </a> 
                            </div>
                            <!-- END: cvr-main --> 
                            <!-- sub items in the right -->
                            <div class="cvr-highlights">
                                <div class="cvr-headline lcs-headline">
                                	<a href="<?= $carousel['item_four_link']; ?>">
                                            Heading
                                        </a>
                                </div>
                                <div class="cvr-teaser lcs-teaser">Teaser</div>
                                <div class="cvr-highlightsSubTitle">SubHeading</div>
                                	<ul class="evo-coverStories-subitems">
                                    	<li class="alpha"> 
                                            <a href="#">link 1</a> 
                                        </li>
                                    	<li> 
                                            <a href="#">link 2</a> 
                                        </li>
                                    	<li> 
                                            <a href="#">link 3</a> 
                                        </li>
                                    	<li> 
                                            <a href="#">link 4</a>
                                        </li>
                                	</ul>
                                <!-- END: evo-coverStories-subitems --> 
                            </div>
                            <!-- END: cvr-highlights --> 
                        </div>
                        <!-- END: storyUnit -->
                        
                        <div class="storyUnit wide index-4"> 
                            <!-- big image -->
                            <div class="cvr-main"> 
                            	<a href="<?= $carousel['item_five_link']; ?>">
                                    <img src="<?= base_url().$carousel['item_five_img']; ?>" />
                                </a> 
                            </div>
                            <!-- END: cvr-main --> 
                            <!-- sub items in the right -->
                            <div class="cvr-highlights">
                                <div class="cvr-headline lcs-headline">
                                	<a href="<?= $carousel['item_five_link']; ?>">Heading</a>
                            	</div>
                                <div class="cvr-teaser lcs-teaser">Teaser</div>
                                <div class="cvr-highlightsSubTitle">SubHeading</div>
                                    <ul class="evo-coverStories-subitems">
                                    	<li class="alpha"> 
                                            <a href="#">link 1</a> 
                                        </li>
                                    	<li> 
                                            <a href="#">link 2</a> 
                                        </li>
                                    	<li> 
                                            <a href="#">link 3</a> 
                                        </li>
                                    </ul>
                                <!-- END: evo-coverStories-subitems --> 
                            	</div>
                            <!-- END: cvr-highlights --> 
                        	</div>
                        	<!-- END: storyUnit --> 
                    	</div>
                    <!-- END: carousel --> 
                </div>
                <!-- END: evo-coverStories --> 
            </div>
            <!-- END: evo-wrapper --> 
        </div>
        <div class="grid_24 sectionBodyDivider">
                <? 
                    //echo '<pre>';
                    //print_r($carousel);
                ?>
        </div>
             
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</div><!-- end: content wrapper -->