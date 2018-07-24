<?php
/**
 * The main template file
 *
 *This is the homepage of the music site.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Music_Site
 * @since Music_Site 0.1
 */

get_header(); ?>

<div id="Menu">
	<div class="innerMenu">
		<div class="Line1">	
	</div>
	<div class="Line2">	
	</div>
	<div class="Line3">	
	</div>
	</div>
</div>

<!--<div class="SocialM">
	<a herf=""><img src="https://a-v2.sndcdn.com/assets/images/header/cloud-e365a47.png"/></a>
</div> -->

<!-- Content on the front page -->
<div id="bg1">
	<div id="content">
	
	<!-- Site title is pulled from a Wordpress setting. -->
	<div class="title">
		<h1>
		<?php $blog_title = get_bloginfo('name'); 
			echo $blog_title; /*This is the website title. What appears in the tab. This cannot be changed here, it has to be changed in the Wordpress admin panel */
		?>
		</h1>
	</div>

<!-- Below is the code for the sidebar. You can edit the divs. -->
	<div id="SoundC">
		<?php get_sidebar( 'primary' ); ?>
	</div>

	<div style="clear:both"></div>

</div>

<div class="pgFooter">
	
	<div class="genre">
		<h3>Hip Hop, Electronic, Instrumental</h3>
	</div>
	
	<div class="storeWrap">
		<div class="storebck">
			<div class="storeDisplay">
				<img src="http://localhost:8888/testsite/wp-content/uploads/2018/06/clothes-clothing-design-449530.jpg"/>
			</div>
			
			<div class="storeDisplay">
				<img src="http://localhost:8888/testsite/wp-content/uploads/2018/06/clothes-clothing-colors-581087.jpg"/>
			</div>
			
			<div class="storeDisplay">
				<img src=" http://localhost:8888/testsite/wp-content/uploads/2018/06/apparel-casual-clothes-934070.jpg"/>
			</div>
			
			<div class="storeDisplay">
				<img src="http://localhost:8888/testsite/wp-content/uploads/2018/06/apparel-blue-jeans-casual-1082529.jpg"/>
			</div>
			
			<div class="storeDisplayV">
				<p>
					<a href="#">VIEW MORE</a>
				</p>
			</div>
		</div>
	</div>
	
</div>
</div>
<div class="MainStoreCon">
	<h3>Beat2Deaf Merch!</h3>
	<div class="storeFront">
		<!-- Add woo commerce code in here-->
		
	</div>
	
</div>

<!-- Second Page begins-->

<div class="slider">
	<div class="load">	
	</div>
	<div class="content">
		<div class="principal">
			
			<div><p class="pOne">"The love of being around music is what led to my career. I was lucky to have a group of friends with the same interest but different outlook, which enabled me to expereinece music on multiple levels." </br>-<a>Dwayne</a> </p></div>
	
	<div><p class="pTwo">"Its easy to make music when you breathe it. Music isn't everything, but rather everything is music. We draw inspiration from the most mundane of circumstances. The culmination of 20 years of hard work is displayed on Beat2Deaf.com"</br>-<a>Dwayne</a> </p></div>

<div><p class="pThree"> We ask that before you leave check out some of our work, we may surprise you.</br>-<a>Dwayne</a> </p></div>

		</div>
	</div>
</div>
		
<!-- Call Footer -->
<?php get_footer(); ?>