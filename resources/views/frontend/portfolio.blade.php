@extends('frontend.master')

@section('content')
<section class="site-section" id="section-portfolio">
		<div class="container">
			<div class="row">
				<div class="section-heading text-center col-md-12">
					<h2>Featured <strong>Portfolio</strong></h2>
				</div>
			</div>
			<div class="filters">
				<ul>
					<li class="active" data-filter="*">All</li>
					<li data-filter=".web_design">web design</li>
					<!-- <li data-filter=".web_design">web-design</li> -->
					<!-- <li data-filter=".mockup">Mockup</li> -->
					<li data-filter=".video_editing">video editing</li>
					<li data-filter=".laravel_projet">laravel project</li>
					<li data-filter=".nodejs_projet">nodeJS project</li>
				</ul>
			</div>

			<div class="filters-content">
				<div class="row grid">
					<div class="single-portfolio col-sm-4 all web_design nodejs_projet">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/movie-filter.jpg" alt="">
							</div>
							<a href="images/p1.jpg" class="img-pop-up">
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="p-inner">
							<h4>Your Favorite Movies</h4>
							<div class="cat">web design - nodeJS project</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all web_design laravel_projet">
						<div width="500" height="500" class="relative">
							<div  class="thumb">
								<div class="overlay overlay-bg"></div>
								<img  class="image img-fluid" src="images/todo-list.jpg" alt="">
							</div>
							<a href="images/p2.jpg" class="img-pop-up">
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="p-inner">
							<h4>ToDo List</h4>
							<div class="cat">web design - laravel projet</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all web_design">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img width="500" height="500" class="image img-fluid" src="images/stamp-auction.jpg" alt="">
							</div>
							<a href="images/p3.jpg" class="img-pop-up">
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt="">
									</div>
								</div>
							</a>

						</div>
						<div class="p-inner">
							<h4>Stamp Auction</h4>
							<div class="cat">web design</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all video_editing">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img  width="500" height="500" class="image img-fluid" src="images/wedding.jpg" alt="">
							</div>
							<a href="images/wedding.jpg" class="img-pop-up">
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="p-inner">
							<h4>Wedding - Latif</h4>
							<div class="cat">video editing</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all video_editing">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/miracle.jpg" alt="">
							</div>
							<a href="images/p5.jpg" class="img-pop-up">
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="p-inner">
							<h4>Miracle - Dany Alectine</h4>
							<div class="cat">video editing</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all web_design laravel_projet">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/designer-portfolio.jpg" alt="">
							</div>
							<a href="images/p6.jpg" class="img-pop-up">
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="p-inner">
							<h4>A Designer's Portfolio</h4>
							<div class="cat">web design - laravel projet</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all web_design">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/class-results.png" alt="">
							</div>
							<a href="images/p6.jpg" class="img-pop-up">
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="p-inner">
							<h4>Class Results Display</h4>
							<div class="cat">web design</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection