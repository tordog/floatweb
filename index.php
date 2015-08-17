<!--DOCTYPE html-->


<div id="background">

	<?php include "headerbar.php"; ?>

	<!--plugin for facebook like box -->

	<!--<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>-->
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>


	<div id="middlecontent">
		<div id="homelogo">
			<img src="./images/floatlogowordsv2.png" alt="FloatYale">
		</div>

		<div id="rightsidebar">
				<a href="./join_us.php">
					<div id="joinus">
						Join the team
					</div>
				</a>
				<a href="./mailchimp_signup.php">
					<div id="subscribe">
						Subscribe
					</div>
				</a>

				<div class="fb-like" data-href="https://www.facebook.com/floatyale" data-width="100" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>

				<!--<div class="fb-like-box" data-href="https://www.facebook.com/floatyale" data-colorscheme="light" 
				data-show-faces="true" data-header="true" data-stream="false" data-show-border="true" width="140px"></div>-->


		</div> 

		<div id ="homecontent">
			<h1>Learning to code is frustrating. </h1>

			<h3>That's why Float offers free web development courses and support for all Yale students.
			Through our workshops and programs, we want to encourage more students to give Computer Science a chance. </h3>

			<h3> Learn more: </h3>
			<a href="./classes.php"><div class="bar1"> Classes & Workshops > </div> </a>
			<a href="./mentorship.php"><div class = "bar2"> Mentorship program > </div></a>

			<br><br><br>
			<h2>It's never too late to start.<br><br> To learn more or join our <br>team, please email:
				<div style="color:#B50749;">team@floatyale.com. </div>
			</h2>
		</div>


		

	</div>
</div>


