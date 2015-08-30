<!-- <nav class="main-nav">

			<ul class="container">
				<a data-scroll onclick="showSection1();growTab1()" href="<?php echo esc_url( home_url( '/' ) ); ?>#work" class="" id="tab-1">
					<li>
						<span>Work</span>
					</li>
				</a>
				<a data-scroll onclick="showSection2();growTab2()" href="<?php bloginfo('url'); ?>/#typefloundry" class="" id="tab-2">
					<li>
						<span>#typefloundry</span>
					</li>
				</a>
				<a data-scroll onclick="showSection3();growTab3()" href="<?php bloginfo('url'); ?>/#blog" class="" id="tab-3">
					<li>
						<span>Blog</span>
					</li>
				</a>
			</ul>

	</nav>
 -->


  <?php
      if (is_front_page()) : ?>


		<nav class="main-nav">

			<ul class="container">
				<a data-tab="work"   href="#work"  class="" id="tab-1">
					<li>
						<span>Work</span>
					</li>
				</a>
				<a data-tab="instagram"  href="#typefloundry" class="" id="tab-2">
					<li>
					 <span>Play</span> 	<!--#typefloundry -->
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


<!--=====the following is pre-jQuery tabbing code from http://toddmotto.com/simple-html5-data-attribute-jquery-tabs-markup-free-and-relative-to-their-container-for-ultimate-reuse/

		<nav class="main-nav">

			<ul class="container">
				<a data-tab="work"   href="<?php bloginfo('url'); ?>#work" onclick="showSection1();growTab1()" class="" id="tab-1">
					<li>
						<span>Work</span>
					</li>
				</a>
				<a data-tab="instagram"  href="<?php bloginfo('url'); ?>/#typefloundry" onclick="showSection2();growTab2()" class="" id="tab-2">
					<li>
						<span>#typefloundry</span>
					</li>
				</a>
				<a data-tab="blog"  href="<?php bloginfo('url'); ?>/#blog" onclick="showSection3();growTab3()" class="" id="tab-3">
					<li>
						<span>Blog</span>
					</li>
				</a>
			</ul>

	</nav> -->



<!--  	<nav class="main-nav">

			<ul class="container">
				<a    href="<?php bloginfo('url'); ?>#work" onclick="showSection1();growTab1()" class="" id="tab-1">
					<li>
						<span>Work</span>
					</li>
				</a>
				<a   href="<?php bloginfo('url'); ?>/#typefloundry" onclick="showSection2();growTab2()" class="" id="tab-2">
					<li>
						<span>#typefloundry</span>
					</li>
				</a>
				<a   href="<?php bloginfo('url'); ?>/#blog" onclick="showSection3();growTab3()" class="" id="tab-3">
					<li>
						<span>Blog</span>
					</li>
				</a>
			</ul>

	</nav> -->

	<!--<?php bloginfo('url'); ?>- <?php echo esc_url( home_url( '/' ) ); ?>--->


	<!--You should clean up the js here, and move the onclicks to event listeners and data attributes in the actual javascript documents-->

	<!--You should consider putting the showSection and growTab functions into a single function, and you can just grab it by a data attibrute, potentially in an if/then statement -->
