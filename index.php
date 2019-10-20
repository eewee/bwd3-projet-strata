<?php
// Afficher les erreurs :
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

require_once "config.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>BWD3 - Projet Strata</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">
		<!-- Header -->
		<header id="header">
			<div class="inner">
				<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
				<h1>
                    <strong>Projet Strata</strong>, template HTML<br>sur lequel on va utiliser du PHP.
                </h1>
			</div>
		</header>

		<!-- Main -->
		<div id="main">

			<!-- One -->
			<section id="one">
				<header class="major">
					<h2>BWD 3 : Initiation au PHP</h2>
				</header>
				<p>
                    Le but de ce TP est d'utiliser un thème responsive existant depuis le site "HTML5 UP",<br><strong>puis ajouter du PHP</strong> sur cette page.
                    Etape du TP :
                    <ul>
                    <li>Créer un nouveau projet sur <a href="https://github.com/eewee/bwd3-projet-strata" target="_blank">GitHub.com</a> (=repository), dans le but de versionner son code.</li>
                        <li>Utiliser le logiciel <a href="https://www.sourcetreeapp.com/" target="_blank">SourceTree</a> pour envoyer votre code sur GitHub.com.</li>
                        <li>Utiliser <a href="https://www.mamp.info/en/" target="_blank">MAMP</a>/<a href="http://www.wampserver.com/" target="_blank">WAMP</a> pour disposer d'un serveur local sur sa machine (pour faire du PHP).</li>
                        <li>Installer le thème sur votre PC/Mac (en local).</li>
                        <li>Savoir ce repérer sur une page HTML (template).</li>
                        <li>Ajouter des variables en PHP.</li>
                    </ul>
                </p>
				<ul class="actions">
					<li><a href="https://github.com/eewee/bwd3-projet-strata" target="_blank" class="button">En savoir +</a></li>
				</ul>
			</section>

			<!-- Two -->
			<section id="two">
				<h2>Réalisations</h2>
				<div class="row">
					<article class="col-6 col-12-xsmall work-item">
						<a href="images/fulls/01.jpg" class="image fit thumb"><img src="images/thumbs/01.jpg" alt="" /></a>
						<h3>Magna sed consequat tempus</h3>
						<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
					</article>
					<article class="col-6 col-12-xsmall work-item">
						<a href="images/fulls/02.jpg" class="image fit thumb"><img src="images/thumbs/02.jpg" alt="" /></a>
						<h3>Ultricies lacinia interdum</h3>
						<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
					</article>
					<article class="col-6 col-12-xsmall work-item">
						<a href="images/fulls/03.jpg" class="image fit thumb"><img src="images/thumbs/03.jpg" alt="" /></a>
						<h3>Tortor metus commodo</h3>
						<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
					</article>
					<article class="col-6 col-12-xsmall work-item">
						<a href="images/fulls/04.jpg" class="image fit thumb"><img src="images/thumbs/04.jpg" alt="" /></a>
						<h3>Quam neque phasellus</h3>
						<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
					</article>
					<article class="col-6 col-12-xsmall work-item">
						<a href="images/fulls/05.jpg" class="image fit thumb"><img src="images/thumbs/05.jpg" alt="" /></a>
						<h3>Nunc enim commodo aliquet</h3>
						<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
					</article>
					<article class="col-6 col-12-xsmall work-item">
						<a href="images/fulls/06.jpg" class="image fit thumb"><img src="images/thumbs/06.jpg" alt="" /></a>
						<h3>Risus ornare lacinia</h3>
						<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
					</article>
				</div>
				<ul class="actions">
					<li><a href="#" class="button">En savoir +</a></li>
				</ul>
			</section>

			<!-- Three -->
			<section id="three">
				<h2>Get In Touch</h2>
				<p>Accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque lorem ipsum dolor.</p>
				<div class="row">
					<div class="col-8 col-12-small">
						<form method="post" action="#">
							<div class="row gtr-uniform gtr-50">
								<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Nom" /></div>
								<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
								<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
							</div>
						</form>
						<ul class="actions">
							<li><input type="submit" value="Valider" /></li>
						</ul>
					</div>
					<div class="col-4 col-12-small">
						<ul class="labeled-icons">
							<li>
								<h3 class="icon solid fa-home"><span class="label">Address</span></h3>
								<?php
                                // Afficher : Adresse, cp, ville et pays.
                                echo $adresse."<br>
                                ".$cp." ".$ville."<br>
								".$pays;
                                ?>
							</li>
							<li>
								<h3 class="icon solid fa-mobile-alt"><span class="label">Phone</span></h3>
								<?php echo $tel; ?>
							</li>
							<li>
								<h3 class="icon solid fa-envelope"><span class="label">Email</span></h3>

								<!-- <a href="mailto:<?php //echo $email; ?>"><?php //echo $email; ?></a><br>-->

                                <?php
                                // Afficher un lien avec une adresse email
                                echo "<a href='mailto:".$email."'>".$email."</a>";
                                ?>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Four -->
			<!--
				<section id="four">
					<h2>Elements</h2>

					<section>
						<h4>Text</h4>
						<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
						This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
						This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
						<hr />
						<header>
							<h4>Heading with a Subtitle</h4>
							<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
						</header>
						<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
						<header>
							<h5>Heading with a Subtitle</h5>
							<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
						</header>
						<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
						<hr />
						<h2>Heading Level 2</h2>
						<h3>Heading Level 3</h3>
						<h4>Heading Level 4</h4>
						<h5>Heading Level 5</h5>
						<h6>Heading Level 6</h6>
						<hr />
						<h5>Blockquote</h5>
						<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
						<h5>Preformatted</h5>
						<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
					</section>

					<section>
						<h4>Lists</h4>
						<div class="row">
							<div class="col-6 col-12-xsmall">
								<h5>Unordered</h5>
								<ul>
									<li>Dolor pulvinar etiam magna etiam.</li>
									<li>Sagittis adipiscing lorem eleifend.</li>
									<li>Felis enim feugiat dolore viverra.</li>
								</ul>
								<h5>Alternate</h5>
								<ul class="alt">
									<li>Dolor pulvinar etiam magna etiam.</li>
									<li>Sagittis adipiscing lorem eleifend.</li>
									<li>Felis enim feugiat dolore viverra.</li>
								</ul>
							</div>
							<div class="col-6 col-12-xsmall">
								<h5>Ordered</h5>
								<ol>
									<li>Dolor pulvinar etiam magna etiam.</li>
									<li>Etiam vel felis at lorem sed viverra.</li>
									<li>Felis enim feugiat dolore viverra.</li>
									<li>Dolor pulvinar etiam magna etiam.</li>
									<li>Etiam vel felis at lorem sed viverra.</li>
									<li>Felis enim feugiat dolore viverra.</li>
								</ol>
								<h5>Icons</h5>
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
								</ul>
							</div>
						</div>
						<h5>Actions</h5>
						<ul class="actions">
							<li><a href="#" class="button primary">Default</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions small">
							<li><a href="#" class="button primary small">Small</a></li>
							<li><a href="#" class="button small">Small</a></li>
						</ul>
						<div class="row">
							<div class="col-6 col-12-small">
								<ul class="actions stacked">
									<li><a href="#" class="button primary">Default</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
							</div>
							<div class="col-6 col-12-small">
								<ul class="actions stacked">
									<li><a href="#" class="button primary small">Small</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
							</div>
							<div class="col-6 col-12-small">
								<ul class="actions stacked">
									<li><a href="#" class="button primary fit">Default</a></li>
									<li><a href="#" class="button fit">Default</a></li>
								</ul>
							</div>
							<div class="col-6 col-12-small">
								<ul class="actions stacked">
									<li><a href="#" class="button primary small fit">Small</a></li>
									<li><a href="#" class="button small fit">Small</a></li>
								</ul>
							</div>
						</div>
					</section>

					<section>
						<h4>Table</h4>
						<h5>Default</h5>
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>

						<h5>Alternate</h5>
						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</section>

					<section>
						<h4>Buttons</h4>
						<ul class="actions">
							<li><a href="#" class="button primary">Primary</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button large">Large</a></li>
							<li><a href="#" class="button">Default</a></li>
							<li><a href="#" class="button small">Small</a></li>
						</ul>
						<ul class="actions fit">
							<li><a href="#" class="button primary fit">Fit</a></li>
							<li><a href="#" class="button fit">Fit</a></li>
						</ul>
						<ul class="actions fit small">
							<li><a href="#" class="button primary fit small">Fit + Small</a></li>
							<li><a href="#" class="button fit small">Fit + Small</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
							<li><a href="#" class="button icon solid fa-download">Icon</a></li>
						</ul>
						<ul class="actions">
							<li><span class="button primary disabled">Primary</span></li>
							<li><span class="button disabled">Default</span></li>
						</ul>
					</section>

					<section>
						<h4>Form</h4>
						<form method="post" action="#">
							<div class="row gtr-uniform gtr-50">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
								</div>
								<div class="col-12">
									<select name="demo-category" id="demo-category">
										<option value="">- Category -</option>
										<option value="1">Manufacturing</option>
										<option value="1">Shipping</option>
										<option value="1">Administration</option>
										<option value="1">Human Resources</option>
									</select>
								</div>
								<div class="col-4 col-12-small">
									<input type="radio" id="demo-priority-low" name="demo-priority" checked>
									<label for="demo-priority-low">Low Priority</label>
								</div>
								<div class="col-4 col-12-small">
									<input type="radio" id="demo-priority-normal" name="demo-priority">
									<label for="demo-priority-normal">Normal Priority</label>
								</div>
								<div class="col-4 col-12-small">
									<input type="radio" id="demo-priority-high" name="demo-priority">
									<label for="demo-priority-high">High Priority</label>
								</div>
								<div class="col-6 col-12-small">
									<input type="checkbox" id="demo-copy" name="demo-copy">
									<label for="demo-copy">Email me a copy of this message</label>
								</div>
								<div class="col-6 col-12-small">
									<input type="checkbox" id="demo-human" name="demo-human" checked>
									<label for="demo-human">I am a human and not a robot</label>
								</div>
								<div class="col-12">
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>

					<section>
						<h4>Image</h4>
						<h5>Fit</h5>
						<div class="box alt">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12"><span class="image fit"><img src="images/fulls/05.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/04.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/05.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/06.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
							</div>
						</div>
						<h5>Left &amp; Right</h5>
						<p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						<p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
					</section>

				</section>
			-->

		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="icons">
					<li><a href="<?php echo $twitter; ?>" class="icon brands fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
					<li><a href="<?php echo $github; ?>" class="icon brands fa-github" target="_blank"><span class="label">Github</span></a></li>
					<li><a href="<?php echo $dribbble; ?>" class="icon brands fa-dribbble" target="_blank"><span class="label">Dribbble</span></a></li>
					<li><a href="mailto:<?php echo $email; ?>" class="icon solid fa-envelope" target="_blank"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.poptrox.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
</body>
</html>