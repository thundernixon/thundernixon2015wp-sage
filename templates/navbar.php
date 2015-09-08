

  <?php
      if (is_front_page()) : ?>


		<nav class="main-nav">

			<ul class="container">
				<a data-tab="work"   href="#projects"  class="" id="tab-1">
					<li>
						<span>Projects</span>
					</li>
				</a>
				<a data-tab="instagram"  href="#lettering" class="" id="tab-2">
					<li>
					 <span>Lettering</span> 	<!--#play -->
					</li>
				</a>
				<a data-tab="blog"  href="#weblog"  class="" id="tab-3">
					<li>
						<span>Weblog</span>
					</li>
				</a>
			</ul>

		</nav>
<?php else: ?>
	<nav class="main-nav">

			<ul class="container">
				<a data-tab="work"   href="<?php bloginfo('url'); ?>#projects"  class="" id="tab-1">
					<li>
						<span>Projects</span>
					</li>
				</a>
				<a data-tab="instagram"  href="<?php bloginfo('url'); ?>/#lettering" class="" id="tab-2">
					<li>
						<span>Lettering</span>
					</li>
				</a>
				<a data-tab="blog"  href="<?php bloginfo('url'); ?>/#weblog"  class="" id="tab-3">
					<li>
						<span>Weblog</span>
					</li>
				</a>
			</ul>
<!---test comment---->

	</nav>

  <!--You should clean up the js here, and move the onclicks to event listeners and data attributes in the actual javascript documents-->

	<!--You should consider putting the showSection and growTab functions into a single function, and you can just grab it by a data attibrute, potentially in an if/then statement -->


<?php endif; ?>
