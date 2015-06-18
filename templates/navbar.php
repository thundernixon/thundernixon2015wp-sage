<!-- <nav class="main-nav">

			<ul class="container">
				<a data-scroll onclick="showSection1();growTab1()" href="<?php echo esc_url( home_url( '/' ) ); ?>#section-1" class="" id="tab-1">
					<li>
						<span>Work</span>
					</li>
				</a>
				<a data-scroll onclick="showSection2();growTab2()" href="<?php bloginfo('url'); ?>/#section-2" class="" id="tab-2">
					<li>
						<span>#typefloundry</span>
					</li>
				</a>
				<a data-scroll onclick="showSection3();growTab3()" href="<?php bloginfo('url'); ?>/#section-3" class="" id="tab-3">
					<li>
						<span>Blog</span>
					</li>
				</a>
			</ul>

	</nav>
 -->
	<nav class="main-nav">

			<ul class="container">
				<a data-scroll="work"   href="<?php echo esc_url( home_url( '/' ) ); ?>#section-1" onclick="showSection1();growTab1()" class="" id="tab-1">
					<li>
						<span>Work</span>
					</li>
				</a>
				<a data-scroll="instagram"  href="<?php bloginfo('url'); ?>/#section-2" onclick="showSection2();growTab2()" class="" id="tab-2">
					<li>
						<span>#typefloundry</span>
					</li>
				</a>
				<a data-scroll="blog"  href="<?php bloginfo('url'); ?>/#section-3" onclick="showSection3();growTab3()" class="" id="tab-3">
					<li>
						<span>Blog</span>
					</li>
				</a>
			</ul>

	</nav>


	<!--You should clean up the js here, and move the onclicks to event listeners and data attributes in the actual javascript documents-->

	<!--You should consider putting the showSection and growTab functions into a single function, and you can just grab it by a data attibrute, potentially in an if/then statement -->