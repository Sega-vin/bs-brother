<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bs-brother
 */

get_header();
?>

<?php if(in_category('events')): ?>
	<ul class="breadcrumbs">
		<li><a href="abouot-brothers.html">About Brothers</a></li>
		<li>Events</li>
	</ul><section class="section grid padding-right">
		<aside class="sidebar">
			<ul class="sidebar__list">
				<li class="active"><a href="anti-slavery-and-human-trafficking-statement.html">Anti-Slavery and Human Trafficking Statement</a></li>
				<li><a href="philosophy.html">Philosophy</a></li>
				<li><a href="environment.html">Environment</a>
					<ul>
						<li><a href="environment.html">Environmental Policy</a></li>
						<li><a href="ISO14001.html">ISO14001</a></li>
						<li><a href="reach.html">REACH</a></li>
						<li><a href="rohs.html"> RoHS</a></li>
						<li><a href="msds.html">MSDS</a></li>
					</ul>
				</li>
				<li><a href="press.html">Press</a>
					<ul>
						<li><a href="press-release.html">Press Release</a></li>
					</ul>
				</li>
				<li><a href="events.html">Events</a></li>
				<li><a href="career.html">Career</a>
					<ul>
						<li><a href="job-vacancies.html">job vacancies</a></li>
					</ul>
				</li>
				<li><a href="newsletter.html">Newsletter</a></li>
				<li><a href="brother-support-app.html">Brother Support App</a></li>
			</ul></aside>
		<div class="main">
			<div class="page-header">
				<h2 class="section__title">VISCOM ITALIA 2019</h2>
				<time>10.10.2019</time>
			</div>
			<div class="clearfix"><img class="border" src="assets/i/viscom.jpg" alt="">
				<p>Viscom Italia is here to best meet all your needs, actively listen to your wants, to realise your communication projects and add significant value to your business through a unique mix of creativity, innovation and cutting-edge technology. Stand: C26, Hall: 8</p>
			</div>
			<hr><a href="">Back to overview</a></div>
	</section>
<?php endif; ?>

<?php
get_footer();
