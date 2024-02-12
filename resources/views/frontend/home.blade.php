
@extends('frontend.master')

@section('hero')
    <section class="site-hero" style="background-image: url(images/optimised-bg3.jpg);" id="section-home"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row intro-text align-items-center justify-content-center">
                <div class="col-md-10 text-center pt-5">

                    <h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">Ibrahima Kalil</strong>
                    </h1>
                    <strong class="d-block text-white text-uppercase letter-spacing">and this is My Resume</strong>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('home_content')
    <!-- <section class="site-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h2>Client <strong>Testimonial</strong></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">

					<div class="block-47 d-flex mb-5">
						<div class="block-47-image">
							<img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid">
						</div>
						<blockquote class="block-47-quote">
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
								Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
								the coast of the Semantics, a large language ocean.&rdquo;</p>
							<cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ
									Inc.</a></cite>
						</blockquote>
					</div>

				</div>
				<div class="col-md-6">

					<div class="block-47 d-flex mb-5">
						<div class="block-47-image">
							<img src="images/person_2.jpg" alt="Image placeholder" class="img-fluid">
						</div>
						<blockquote class="block-47-quote">
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
								Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
								the coast of the Semantics, a large language ocean.&rdquo;</p>
							<cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
						</blockquote>
					</div>

				</div>

				<div class="col-md-6">

					<div class="block-47 d-flex mb-5">
						<div class="block-47-image">
							<img src="images/person_3.jpg" alt="Image placeholder" class="img-fluid">
						</div>
						<blockquote class="block-47-quote">
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
								Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
								the coast of the Semantics, a large language ocean.&rdquo;</p>
							<cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ
									Inc.</a></cite>
						</blockquote>
					</div>

				</div>
				<div class="col-md-6">

					<div class="block-47 d-flex mb-5">
						<div class="block-47-image">
							<img src="images/person_4.jpg" alt="Image placeholder" class="img-fluid">
						</div>
						<blockquote class="block-47-quote">
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
								Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
								the coast of the Semantics, a large language ocean.&rdquo;</p>
							<cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
						</blockquote>
					</div>

				</div>

			</div>
		</div>
	</section> -->


	<section class="site-section pb-0" id="section-services">
		<div class="container">

			<div class="row mb-4">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h2>My <strong>Services</strong></h2>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-browser2"></span>
						</span>
						<h3 class="mb-4">Web Design</h3>
						<p>FFrom sleek and modern designs to intuitive user interfaces, I will craft a website that reflects your unique brand identity and captivates your audience. Whether you're launching a new business, revamping an existing site, or need ongoing maintenance and support, I've got you covered.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-presentation"></span>
						</span>
						<h3 class="mb-4">Server Management</h3>
						<p>Ensure optimal performance and security for your online platforms with my server management services. From setting up and configuring servers to ongoing maintenance and troubleshooting, I will handle all aspects of server management, including Apache and Nginx server configuration, to keep your websites and applications running smoothly.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-video2"></span>
						</span>
						<h3 class="mb-4">Video Editing</h3>
						<p>Transform your raw footage into captivating videos that tell your story with flair. I will enhance your content with professional editing techniques, seamless transitions, stunning visual effects, and crisp audio to create engaging videos that leave a lasting impression.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>



			</div>
		</div>
	</section>




	<section class="site-section" id="section-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Blog on <strong>Wired</strong></h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="#"><img src="images/lurker-online.webp" alt="Image placeholder" class="img-fluid"></a>
						<div class="blog-entry-text">
							<h3><a href="#">The Best Way to Learn Online? Be a Lurker</a></h3>
							<p class="mb-4">EThe internet has made me immune to a coherent narrative. In order to truly understand anything, I've taught myself to read networks.</p>

							<div class="meta">
								<a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
								<a href="#"><span class="icon-bubble"></span> 5 Comments</a>
							</div>
						</div>
					</div>
				</div>
<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="#"><img src="images/desktop-mobile.webp" alt="Image placeholder" class="img-fluid"></a>
						<div class="blog-entry-text">
							<h3><a href="#">How to Switch to the Desktop Versions of Your Favorite Mobile Sites</a></h3>
							<p class="mb-4">These days, desktop websites often work better on your phone than mobile versions or even dedicated apps do. Give it a try.</p>

							<div class="meta">
								<a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
								<a href="#"><span class="icon-bubble"></span> 5 Comments</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="#"><img src="images/Internet-Explorer_1.gif" alt="Image placeholder" class="img-fluid"></a>
						<div class="blog-entry-text">
							<h3><a href="#">The Sorry Legacy of Internet Explorer</a></h3>
							<p class="mb-4">Microsoft will no longer support most versions of Internet Explorer, one of the most contentious pieces of software ever.</p>

							<div class="meta">
								<a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
								<a href="#"><span class="icon-bubble"></span> 5 Comments</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
@endsection

@section('footer')
	<footer class="site-footer">
		<div class="container">

			<div class="row mb-5">
				<p class="col-12 text-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
					made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a
						href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>

			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<p>
						<a href="#" class="social-item"><span class="icon-facebook2"></span></a>
						<a href="#" class="social-item"><span class="icon-twitter"></span></a>
						<a href="#" class="social-item"><span class="icon-instagram2"></span></a>
						<a href="#" class="social-item"><span class="icon-linkedin2"></span></a>
						<a href="#" class="social-item"><span class="icon-vimeo"></span></a>
					</p>
				</div>
			</div>

		</div>
	</footer>
@endsection

