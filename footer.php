<footer class="section b-azul pb-0" id="contato">
	<div class="container section pt-0">
		<div class="row justify-content-center">
			<div class="col-md-10 mb-3">
				<p class="breadc trn">/ Contato</p>
			</div>
			<div class="col-md-5">
				<h2 class="cinza d-block mb-4 trn">Entre em contato com a Ehtua Capital.</h2>
				<address class="address cinza mb-4">
					Av. Alm. Barroso, nº81<br>
					Centro, Rio de Janeiro - RJ<br>
					CEP: 20040-060
				</address>
				<ul class="before-form">
					<li class="d-block mb-4">
						<a href="tel:+552122223333" class="d-flex align-items-center verde address">
						<?php ___(svg('tel')) ?> +55 21 2222-3333</a>
					</li>
					<li class="d-block">
						<a href="mailto:contato@ehtuacapital.com" class="d-flex align-items-center verde address">
						<?php ___(svg('mail')) ?> contato@ehtuacapital.com</a>
					</li>
				</ul>
			</div>
			<div class="col-md-5">
				<a href="#form-ehtua" class="d-none" id="go-to_form" title="Form Ehtua">Formulário Contato</a>
				<form class="form-ehtua mb-0" id="form-ehtua" rel="contact">
					<div class="form-group">
						<input type="text" required class="form-control trn" placeholder="Nome" name="nome" id="nome">
						<p class="alert-message trn">Não use caracteres especiais em nome</p>
					</div>
					<div class="form-group">
						<input type="text" required class="form-control trn" placeholder="Telefone" name="telefone" id="telefone">
						<p class="alert-message trn">Número de telefone inválido</p>
					</div>
					<div class="form-group">
						<input type="email" required class="form-control trn" placeholder="E-mail" name="email" id="email">
						<p class="alert-message trn">E-mail inválido</p>
					</div>
					<div class="form-group">
						<textarea class="form-control trn" required placeholder="Mensagem" name="mensagem" id="mensagem"></textarea>
					</div>
					<div class="form-group">
						<div class="g-recaptcha" id="g-recaptcha" data-sitekey="6Le3_YIUAAAAAKBxH_3vyExwhlz0lMk1OssW81Yb"></div>
						<p class="alert-message trn">Resolva o reCAPTCHA</p>
					</div>
					<div class="form-group">
						<button type="submit" id="submit-btn" class="mb-2 trn">Enviar <?php ___(svg('long-arrow')) ?></button>
						<p class="alert-message trn">Obrigado pelo seu contato</p>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="credits b-azul-marinho">
		<div class="container">
			<div class="row">
				<div class="col-12 credit-content">
					<p class="verde">EHTUA Capital © <?php ___(date('Y')) ?> - Todos os direitos reservados</p>
					<p class="verde">Desenvolvido por: <a href="http://agenciacampana.com.br" title="Agência Campana - Marketing Digital" class="ml-1" target="_blank"><img src="<?php ___(get_image('campana.png')) ?>" alt="Agência Campana - Marketing Digital"></a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php sources() ?>
</body>
</html>