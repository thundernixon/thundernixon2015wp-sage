

  <?php
      if (is_front_page()) : ?>


		<nav class="main-nav">

			<ul class="container">
				<a data-tab="work"   href="#work"  class="" id="tab-1">
					<li>
						<span>Work</span>
					</li>
				</a>
				<a data-tab="instagram"  href="#play" class="" id="tab-2">
					<li>
					 <span>Play</span> 	<!--#play -->
					</li>
				</a>
				<a data-tab="blog"  href="#blog"  class="" id="tab-3">
					<li>
						<span>Blog</span>
					</li>
				</a>
			</ul>

		</nav>
<?php else: ?>
	<nav class="main-nav">

			<ul class="container">
				<a data-tab="work"   href="<?php bloginfo('url'); ?>#work"  class="" id="tab-1">
					<li>
						<span>Work</span>
					</li>
				</a>
				<a data-tab="instagram"  href="<?php bloginfo('url'); ?>/#play" class="" id="tab-2">
					<li>
						<span>Play</span>
					</li>
				</a>
				<a data-tab="blog"  href="<?php bloginfo('url'); ?>/#blog"  class="" id="tab-3">
					<li>
						<span>Blog</span>
					</li>
				</a>
			</ul>

	</nav>


<?php endif; ?>


	<!--You should clean up the js here, and move the onclicks to event listeners and data attributes in the actual javascript documents-->

	<!--You should consider putting the showSection and growTab functions into a single function, and you can just grab it by a data attibrute, potentially in an if/then statement -->
