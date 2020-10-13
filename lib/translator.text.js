(function($){$.fn.translate=function(options){var that=this;var settings={css:"trn",lang:"en"};settings=$.extend(settings,options||{});if(settings.css.lastIndexOf(".",0)!==0)settings.css="."+settings.css;var t=settings.t;this.lang=function(l){if(l){settings.lang=l;this.translate(settings);}return settings.lang;};this.get=function(index){var res=index;try{res=t[index][settings.lang];}catch(err){return index;}if(res)return res;else
return index;};this.g=this.get;this.find(settings.css).each(function(i){var $this=$(this);var trn_key=$this.attr("data-trn-key");if(!trn_key){trn_key=$this.html();$this.attr("data-trn-key",trn_key);}$this.html(that.get(trn_key));});return this;};})(jQuery);


jQuery(function($){

	var dict = {
		'Quem Somos': {
			'en': 'About us',
			'pt': 'Quem Somos'
		},
		'/ QUEM SOMOS': {
			'en': '/ ABOUT US',
			'pt': '/ QUEM SOMOS'
		},
		'Portfólio': {
			'en': 'Portfolio',
			'pt': 'Portfólio'
		},
		'Contato': {
			'en': 'Contact',
			'pt': 'Contato'
		},
		'Somos uma empresa de capital de risco com foco em empresas inovadoras e pessoas com idéias e projetos de alto potencial de crescimento.': {
			'en': 'We are a venture company focused on innovative companies and people with ideas and projects of high growth potential.',
			'pt': 'Somos uma empresa de capital de risco com foco em empresas inovadoras e pessoas com idéias e projetos de alto potencial de crescimento.'
		},
		'Somos um Venture Capital focado em pessoas e empresas inovadoras que possuam ideias e projetos com alto potencial de crescimento. A Ehtua veio para preencher uma lacuna existente no processo de transição entre o seed money e o Series A, atuando como um pre-series A. Seguimos a filosofia do smart money agregando, além do capital financeiro, conhecimento em gestão administrativa, comercial e financeira, planejamento estratégico e suporte jurídico.': {
			'pt': 'Somos um Venture Capital focado em pessoas e empresas inovadoras que possuam ideias e projetos com alto potencial de crescimento. A Ehtua veio para preencher uma lacuna existente no processo de transição entre o seed money e o Series A, atuando como um pre-series A. Seguimos a filosofia do smart money agregando, além do capital financeiro, conhecimento em gestão administrativa, comercial e financeira, planejamento estratégico e suporte jurídico.',
			'en': 'We are a Venture Capital focused on people and innovative companies that have ideas and projects with high potential for growth. Ehtua came to fill a gap in the transition process between seed money and Series A, acting as a pre-series A. We follow the philosophy of smart money by adding, in addition to financial capital, knowledge in administrative, commercial and financial management , strategic planning and legal support.'
		},
		'/ Portfólio': {
			'en': '/ Portfolio',
			'pt': '/ Portfólio'
		},
		'Investimentos no Brasil': {
			'en': 'Investments in Brazil',
			'pt': 'Investimentos no Brasil'
		},
		'Investimentos no Exterior': {
			'en': 'Investments Abroad',
			'pt': 'Investimentos no Exterior'
		},
		'Valor Econômico': {
			'en': 'Economic value',
			'pt': 'Valor Econômico'
		},
		'Entre em contato com a Ehtua Capital.': {
			'en': 'Contact Ehtua Capital.',
			'pt': 'Entre em contato com a Ehtua Capital.'
		},
		'/ Contato': {
			'en': '/ Contact',
			'pt': '/ Contato'
		},
		'Enviar': {
			'en': 'Send',
			'pt': 'Enviar'
		},
		'Não use caracteres especiais em nome': {
			'en': 'Do not user special characters',
			'pt': 'Não use caracteres especiais em nome'
		},
		'Número de telefone inválido': {
			'en': 'Invalid phone number',
			'pt': 'Número de telefone inválido'
		},
		'E-mail inválido': {
			'pt': 'E-mail inválido',
			'en': 'Invalid E-mail'
		},
		'Resolva o reCAPTCHA': {
			'en': 'Solve the reCAPTCHA',
			'pt': 'Resolva o reCAPTCHA'
		},
		'Obrigado pelo seu contato': {
			'en': 'Thank you by your contact',
			'pt': 'Obrigado pelo seu contato'
		},
		'Nossa equipe é formada por um grupo de executivos oriundos do Mercado Financeiro e de TI com larga experiência e diversos cases de sucesso. Temos como objetivo combinar capital financeiro e intelectual para dar suporte no crescimento de novas ideias, pessoas, empresas e mercados. Além disso, nossa experiência e rede de contatos no mercado nos coloca em uma posição privilegiada para viabilizar os próximos ciclos de investimento. Um grande diferencial, já que&nbsp;empresas emergentes requerem, além de capital, apoio, conhecimento e&nbsp;networking.': {
			'pt': 'Nossa equipe é formada por um grupo de executivos oriundos do Mercado Financeiro e de TI com larga experiência e diversos cases de sucesso. Temos como objetivo combinar capital financeiro e intelectual para dar suporte no crescimento de novas ideias, pessoas, empresas e mercados. Além disso, nossa experiência e rede de contatos no mercado nos coloca em uma posição privilegiada para viabilizar os próximos ciclos de investimento. Um grande diferencial, já que&nbsp;empresas emergentes requerem, além de capital, apoio, conhecimento e&nbsp;networking.',
			'en': 'Our team is made up of a group of executives from the Financial and IT Market with extensive experience and several successful cases. We aim to combine financial and intellectual capital to support the growth of new ideas, people, companies and markets. In addition, our experience and network of contacts in the market puts us in a privileged position to enable the next investment cycles. A great differential, since emerging companies require, in addition to capital, support, knowledge and networking.'
		}
	}

	var translator = $('body').translate({lang: "pt", t: dict});

	$('.translate-text').on('click', function(e){
		
		$elem = $(this)
		language = $elem.attr('rel');

		translator.lang(language);

		$('.translate-text').removeClass('selected')
		$elem.addClass('selected')

		e.preventDefault()
	});

})