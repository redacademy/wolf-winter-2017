<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id='colophon' class='site-footer' role='contentinfo'>
				<div class='newsletter-info-wrapper'>
						<a href='#'>Sign Up for the Warrior Wolf Newsletter</a>
						<form class='form-wrapper'>
							<div class='inner-form-wrapper'>
								<input class='newsletter-form' type='email'>
								<button type='submit' class='newsletter-submit-button'>Submit</button>
							</div>
						</form>
					<div class='button-wrapper'>
					<button class='faq-button'><a href='<?php echo get_page_link(28); ?>'>faq</a></button>
					</div>
					</div>

					<div class='social-media-icons-wrapper'>
					<a href='#'><img class='instagram-icon'></a>
					<a href='#'><img class='facebook-icon'></a>
					<a href='#'><img class='vimeo-icon'></a>
				</div>
				</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
<div id='openModal' class='modalDialog'>
    <div>
		<a href='#close' title='Close' class='close'>X</a>
			<div class='modal-text-content'>
				<h3>Contact Bruce Wilson</h3>
				<div class="contact-info-wrapper">
					<p>e:	b.wilson@gmail.com</p>
					<p>p:	(604) 275-6649</p>
					<p>ig:	@warriorwolfguide</p>
					<p>fb:	Warrior Wolf Guide</p>
				</div>
			</div>
			<form action="mailto:b.wilson@gmail.com">
				<p>Your Email</p>
				<input type='email'>
				<p>Subject</p>
				<input type='subject'>
				<p>Message</p>
				<textarea value='Message'></textarea>
			</form>
			<button class='submit-button'><a href='#openModal2'>Submit</a></button>
			<button class='faq-button'><a href='<?php echo get_page_link(28); ?>'>faq</a></button>
	</div>
</div>
<div id="openModal2" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
			<div class='confirmation-modal-wrapper'>
				<svg width="57px" height="56px" viewBox="76 0 57 56" version="1.1">
					<g id="check-mark" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(76.000000, 0.000000)">
						<g id="Capa_1" fill-rule="nonzero" fill="#FFFFFF">
							<g id="Group">
								<path d="M28.4072353,0.000183006536 C12.7434118,0.000183006536 0,12.5198431 0,27.9086797 C0,43.2975163 12.7434118,55.8171765 28.4072353,55.8171765 C44.0708725,55.8171765 56.814098,43.2975163 56.814098,27.9086797 C56.814098,12.5198431 44.0708725,0.000183006536 28.4072353,0.000183006536 Z M28.4072353,51.2420131 C15.3112059,51.2420131 4.65686275,40.7749542 4.65686275,27.9086797 C4.65686275,15.0425882 15.3112059,4.57534641 28.4072353,4.57534641 C41.5030784,4.57534641 52.1572353,15.0425882 52.1572353,27.9086797 C52.1572353,40.7749542 41.5030784,51.2420131 28.4072353,51.2420131 Z" id="Shape"></path>
								<path d="M40.695951,17.1971242 L23.8295392,33.767817 L16.1181471,26.1917124 C15.2087549,25.2984575 13.7345784,25.2984575 12.8251863,26.1917124 C11.9159804,27.0851503 11.9159804,28.5334641 12.8251863,29.426902 L22.1830588,38.6206013 C22.6377549,39.0671373 23.2336471,39.2905882 23.8295392,39.2905882 C24.4254314,39.2905882 25.0213235,39.0671373 25.4760196,38.6206013 L43.9889118,20.4324967 C44.8981176,19.5390588 44.8981176,18.0907451 43.9889118,17.1973072 C43.0795196,16.3038693 41.6051569,16.3038693 40.695951,17.1971242 Z" id="Shape"></path>
							</g>
						</g>
					</g>
				</svg>
			<p>Thanks warrior,</p>
			<p>your message was delivered.</p>
		</div>
	</div>
</div>
<div id='openModal3' class='modalDialog'>
    <div>
		<a href='#close' title='Close' class='close'>X</a>
		<div class='modal-text-content'>
			<h3>Registration Request</h3>
			<div class='registration-steps-wrapper'>
				<div class='step-one-wrapper'>
					<p class='step'>Step 1</p>
					<p>Provide me with your group size and contact info.</p>
				</div>
				<div class='step-two-wrapper'>
					<p class='step'>Step 2</p>
					<p>I’ll get back to you within 2 business days with further instructions regarding course availability, payment and next steps.</p>
				</div>
			</div>
			</div>
			<form>
				<p>Group Size</p>
				<input type='number'>
				<p>Your Name</p>
				<input type='text'>
				<p>Your Email</p>
				<input type='email'>
			</form>
			<button type='submit' class='submit-button'><a href='#openModal4'>Submit</a></button>
	</div>
</div>
<div id="openModal4" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
			<div class='confirmation-modal-wrapper'>
				<svg width="57px" height="56px" viewBox="76 0 57 56" version="1.1">
					<g id="check-mark" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(76.000000, 0.000000)">
						<g id="Capa_1" fill-rule="nonzero" fill="#FFFFFF">
							<g id="Group">
								<path d="M28.4072353,0.000183006536 C12.7434118,0.000183006536 0,12.5198431 0,27.9086797 C0,43.2975163 12.7434118,55.8171765 28.4072353,55.8171765 C44.0708725,55.8171765 56.814098,43.2975163 56.814098,27.9086797 C56.814098,12.5198431 44.0708725,0.000183006536 28.4072353,0.000183006536 Z M28.4072353,51.2420131 C15.3112059,51.2420131 4.65686275,40.7749542 4.65686275,27.9086797 C4.65686275,15.0425882 15.3112059,4.57534641 28.4072353,4.57534641 C41.5030784,4.57534641 52.1572353,15.0425882 52.1572353,27.9086797 C52.1572353,40.7749542 41.5030784,51.2420131 28.4072353,51.2420131 Z" id="Shape"></path>
								<path d="M40.695951,17.1971242 L23.8295392,33.767817 L16.1181471,26.1917124 C15.2087549,25.2984575 13.7345784,25.2984575 12.8251863,26.1917124 C11.9159804,27.0851503 11.9159804,28.5334641 12.8251863,29.426902 L22.1830588,38.6206013 C22.6377549,39.0671373 23.2336471,39.2905882 23.8295392,39.2905882 C24.4254314,39.2905882 25.0213235,39.0671373 25.4760196,38.6206013 L43.9889118,20.4324967 C44.8981176,19.5390588 44.8981176,18.0907451 43.9889118,17.1973072 C43.0795196,16.3038693 41.6051569,16.3038693 40.695951,17.1971242 Z" id="Shape"></path>
							</g>
						</g>
					</g>
				</svg>
			<p>Thanks warrior,</p>
			<p>your message was delivered.</p>
			<div class="confirmation-email-text">
			<p>An email confirmation was sent to you. I will get back to you with further instructions within 2 business days.</p>
			</div>
		</div>
	</div>
</div>
	</body>
</html>
