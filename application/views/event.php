
<!-- EBEC (geral) -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop') ?>"/>
<script>
	$(document).ready(function(){

		//Check to see if the window is top if not then display button
		$(window).scroll(function(){
			console.log((window.innerHeight - $(this).scrollTop())/window.innerHeight);
			if ((window.innerHeight - $(this).scrollTop())/window.innerHeight < -2) {
				$('.scrollToTop').fadeIn();
			} else {
				$('.scrollToTop').fadeOut();
			}
		});

		//Click event to scroll to top
		$('.scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});

	});
</script>





<section class="bg-light-gray">
	<div class="container">
		<div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">EBEC</h2>
                <br/>
            </div>
        </div>
		<div class="row">        	        
            <div class="col-md-8">                
                <p class="text-muted text-justify">
                	A EBEC <b>- European BEST Engineering Competition -</b> é uma competição de engenharia europeia, organizada todos os anos 
                	em 88 universidades de topo em 32 países europeus. O projecto pretende atingir os seguintes objectivos:
              	</p>
              	<ul class="fa-ul">
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; Promover a engenharia através de aplicações práticas;
					</li>
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; Proporcionar desenvolvimento pessoal e intelectual aos 
						estudantes, desafiando a criatividade, imaginação e o conhecimento;
					</li>
					<li class="text-muted">
						<i class="fa fa-arrow-right"></i>&nbsp; Incentivar o contacto entre estudantes, universidade e empresas.
					</li>
				</ul> 
            	<p class="text-muted text-justify">
            		O projecto EBEC decorre anualmente em 3 fases distintas: uma fase local em cada uma das 88 universidades 
            		organizadoras, uma fase nacional ou regional, de que é exemplo a EBEC Portugal e a final europeia.
            	</p>
            </div>
            <div class="col-md-4">
        		<img class="img-responsive img-center" src="<?php echo base_url('assets/img/ebec-aveiro/ebec_pyramid_2015_pt.png')?>">
            </div>
    	</div>
    </div>
</section>

<!-- EBEC Aveiro -->
<section class="bg-ebec-orange">
	<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading">EBEC Aveiro</h2>
                <br/>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-5">
        		<img class="img-responsive" src="<?php echo base_url('assets/img/event/ebec_aveiro_2015.png')?>">
        	</div>        
            <div class="col-md-7">                
                <p class="text-muted text-justify text-white">
                	A EBEC Aveiro é a fase local do projeto europeu EBEC desenvolvido 
                	pelo BEST. Este ano, o BEST Aveiro realiza a 8ª edição da competição e vem desafiar-te a aceitar o desafio 
                	novamente, oferecendo duas categorias distintas de prova (Case Study e Team Design). Tal como na edição 
                	anterior, a competição terá uma duração de 24h.
                </p>
            	<p class="text-muted text-justify text-white">
					Este é um dos eventos de maior destaque do BEST Aveiro, direcionado aos alunos da UA e após várias edições, 
					tem vindo a crescer consideravelmente, pretendendo ser um marco no ano académico.
            	</p>
            	<p class="text-muted text-justify text-white">
            		A competição pretende pôr à prova os conhecimentos teóricos dos alunos, a sua criatividade na resolução 
            		de problemas e a sua capacidade para trabalhar em equipa, para além de ser uma oportunidade para os 
            		alunos contactarem com as empresas parceiras num âmbito mais profissional.
            	</p>
            	<p class="text-muted text-justify text-white">
            		Assim, se estás à procura de um desafio que te permita promover, ao mesmo tempo, os teus dotes técnicos e 
            		capacidades intelectuais,  esta é a tua competição! Vão ser 24 horas de trabalho em equipa, envolvidas num 
            		espirito dinâmico e acolhedor que serão, com certeza, "do BEST"!
            	</p>
            	<p class="text-muted text-justify text-white">
            		<a href="<?php echo base_url('index.php/frontpage/apply')?>" style="color: inherit;">
            			<b>Não percas esta competição. Inscreve-te!</b>
            		</a>
            	</p>
            </div>
        </div>
    </div>
</section>

<!-- Modalidades -->
<section class="">
	<div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Modalidades</h2>
            	<div class="col-md-6">
    				<div class="orange-box">
    					<h3 class="text-white text-justify">
    						Case Study
    					</h3>
    					<p class="text-muted text-justify text-white">
		                	Consiste na resolução de um problema teórico sobre problemas técnicos e/ou de gestão, 
		                	baseados em fatos reais e fornecido por uma empresa. Para resolver a prova, deverás usar 
		                	toda a informação que te é facultada.
		                </p>
		                <p class="text-muted text-justify text-white">
		                	Além de desenvolveres o trabalho/discussão de ideias em equipa e as tuas capacidades 
		                	intelectuais, esta será também uma ótima oportunidade para entrares em contacto com as 
		                	empresas parceiras da competição.
		                </p>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="orange-box">
    					<h3 class="text-white text-justify">
    						Team Design
    					</h3>
    					<p class="text-muted text-justify text-white">
		                	Consiste na construção de um protótipo, com materiais limitados, para a resolução 
		                	de um problema técnico proposto. Terás então de encontrar uma solução técnica, em 
		                	conjunto com os membros da tua equipa, dentro das 24h de competição.
		                </p>
		                <p class="text-muted text-justify text-white">
		                	Esta é portanto uma prova que exige toda a tua criatividade, toda a tua capacidade 
		                	técnica e intelectual para, em equipa, chegares a uma solução bem-sucedida e que convença
		                	os júris que a tua solução é a melhor.
		                </p>		                
    				</div>
    			</div>
            <br/>
        </div>
    </div>
    <br/>
    <div class="row">
    	 <div class="col-lg-12 text-center">
    	 	<a class="text-muted" href="<?php echo base_url('index.php/frontpage/regulation')?>">Consulta o regulamento para mais informações</a>
    	 </div>
    </div>
</section>

<!-- Testemunhos -->
<section class="bg-gray">
	<div class="row">
    	<div class="col-lg-12 text-center">
            <h2 class="section-heading">Testemunhos</h2>
            <h3 class="section-subheading text-muted">Professores e Participantes</h3>
        </div>
	    <div class='col-md-offset-1 col-md-10' style="margin-top: -50px;">
	      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	        <!-- Bottom Carousel Indicators -->
	        <ol class="carousel-indicators">
	          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
	          <li data-target="#quote-carousel" data-slide-to="1"></li>
	          <li data-target="#quote-carousel" data-slide-to="2"></li>
	          <li data-target="#quote-carousel" data-slide-to="3"></li>
	          <li data-target="#quote-carousel" data-slide-to="4"></li>
	        </ol>
	        
	        <!-- Carousel Slides / Quotes -->
	        <div class="carousel-inner">
	        
	          <!-- Quote 1 -->
	          <div class="item active">
	            <blockquote>
	              <div class="row">
	                <div class="col-sm-3 text-center">
	                  <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/1.jpg')?>">
	                </div>
	                <div class="col-sm-8">
	                  <p class="text-justify">Na Universidade de Aveiro, as atividades do BEST Aveiro, nomeadamente 
	                  	no contexto das competições EBEC, têm sido claros exemplos de sucesso. Por um lado, mobilizam 
	                  	um número considerável de pessoas, entre participantes, colaboradores diversos e assistência. 
	                  	Por outro lado, apresentam-se como excelentes iniciativas no âmbito de ciências, tecnologia e 
	                  	engenharia. Os desafios propostos promovem um evidente crescimento dos envolvidos, em questões 
	                  	tão diversas quanto a aplicação prática de conhecimentos científicos ou a imaginação e criatividade 
	                  	exigidos.<br/>
						Os participantes beneficiam ainda das exigências de um trabalho de equipa com objetivos bem 
						definidos e um prazo muito apertado, assim como de um contacto direto com representantes de 
						empresas e instituições de relevo.<br/>
						Este é, aliás, um dos marcadores essenciais do mérito desta organização, sempre apoiada por diversas 
						entidades que constatam o dinamismo e a qualidade do BEST Aveiro.
					  </p>
	                  <small>
	                  	Professor João Oliveira<br/>
	                  	Departamento de Engenharia Mecânica<br/>
	                  	Universidade de Aveiro
	                  </small>
	                </div>
	              </div>
	            </blockquote>
	          </div>

	          <!-- Quote 2 -->
	          <div class="item">
	            <blockquote>
	              <div class="row">
	                <div class="col-sm-3 text-center">
	                  <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/2.jpg')?>" style="width: 100px;height:100px;">
	                </div>
	               <div class="col-sm-8">
	                  <p class="text-justify">
	                  	Tendo já participado em edições anteriores, a decisão de participar na edição da EBEC 2014 deveu-se 
	                  	sobretudo ao espírito de competição saudável, sem nunca esquecer o objetivo final de alcançar o 
	                  	EBEC Internacional. Após a vitória na fase local, onde a competição foi muito disputada até ao fim, 
	                  	fomos para o EBEC Lisboa com um peso de responsabilidade muito grande por representar a UA. Nunca 
	                  	desistimos e realizando um excelente trabalho de equipa, e fazendo uso de todo o conhecimento 
	                  	transmitido tanto pelos workshops, como pelas empresas presentes no evento, conseguimos triunfar! 
	                  	Chegando à fase Internacional, foi um sonho tornado realidade: representar a UA numa competição 
	                  	europeia! Foi uma experiência inesquecível, tanto no âmbito competitivo como em experiência 
	                  	profissional e pessoal. Contactamos com empresas internacionais de renome e, sobretudo, 
	                  	aprendemos com elas e com todos os participantes de diferentes nacionalidades!<br/>
	                  	Resumindo, participar no EBEC é uma experiência muito gratificante e enriquecedora que 
	                  	melhora-nos como pessoas e como profissionais!<br/>
	                  	É um evento excelente onde é possível redescobrir-nos e aumentar os nossos limites!
					  </p>
	                  <small>
	                  	Tiago Paixão<br/>
	                  	Participante da EBEC Final 2014
	                  </small>
	                </div>
	              </div>
	            </blockquote>
	          </div>

	       	  <!-- Quote 3 -->
	          <div class="item">
	            <blockquote>
	              <div class="row">
	                <div class="col-sm-3 text-center">
	                  <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/3.jpg')?>" style="width: 100px;height:100px;">
	                </div>
	               <div class="col-sm-8">
	                  <p class="text-justify">Tomei contacto com o BEST Aveiro em 2010, quando recebi o convite 
	                  	para ser parte do júri de avaliação e seriação nas provas que decorreram na Universidade de Aveiro. 
	                  	Desde o primeiro momento, fiquei extremamente impressionado com o elevado nível de organização e 
	                  	profissionalismo da equipa, e com a sua capacidade para liderar e motivar todos os participantes 
	                  	com o objectivo de se superarem nas provas que lhes foram propostas.<br/>
						Como engenheiro mecânico de formação, líder de uma equipa de investigação de alto nível, e com base 
						nos 12 anos de experiência pedagógica que tenho em Universidades portuguesas e no estrangeiro, 
						estou perfeitamente à vontade para dizer que esta foi certamente uma das experiências mais 
						gratificantes que pude presenciar no que toca à colocar em prática conhecimentos de engenharia na 
						resolução de casos de estudo complexos.
					  </p>
	                  <small>
	                  	Professor Robertt Valente<br/>
	                  	Departamento de Engenharia Mecânica<br/>
	                  	Universidade de Aveiro
	                  </small>
	                </div>
	              </div>
	            </blockquote>
	          </div>

	          <!-- Quote 4 -->
	          <div class="item">
	            <blockquote>
	              <div class="row">
	                <div class="col-sm-3 text-center">
	                  <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/4.jpg')?>" style="width: 100px;height:100px;">
	                </div>
	               <div class="col-sm-8">
	                  <p class="text-justify">
	                  	O meu nome é Pedro Magalhães e sou estudante de Engenharia Eletrónica e Telecomunicações. Participei 
	                  	na EBEC no meu primeiro ano de Universidade e desde aí fiquei apaixonado pelo evento. Se há algo que 
	                  	me motiva são desafios de Engenharia e a EBEC tem-me surpreendido ano após ano.<br/>
						Na ultima edição tive a oportunidade de estar nas 3 fases do evento e foi uma experiência fantástica 
						a todos os níveis, começando pelos problemas reais que nos foram propostos e acabando no espírito 
						de equipa e entreajuda que se criou no evento, não esquecendo a qualidade da organização a que já 
						estamos habituados dos eventos BEST.<br/>
						Iniciativas como esta dão oportunidade aos estudantes de se tornarem mais completos e multifacetados 
						e isso é indispensável para um futuro profissional promissor.
					  </p>
	                  <small>
	                  	Pedro Magalhães<br/>
	                  	Participante da EBEC Final 2015
	                  </small>
	                </div>
	              </div>
	            </blockquote>
	          </div>

	          <!-- Quote 5 -->
	          <div class="item">
	            <blockquote>
	              <div class="row">
	                <div class="col-sm-3 text-center">
	                  <img class="img-circle" src="<?php echo base_url('assets/img/ebec-aveiro/testimonials/5.jpg')?>" style="width: 100px;height:100px;">
	                </div>
	               <div class="col-sm-8">
	                  <p class="text-justify">
	                  	Participar como júri da prova “Team Design” do EBEC Portugal 2015 foi um verdadeiro prazer. Como 
	                  	docente do curso de Engenharia Física da Universidade de Aveiro fico sempre muito satisfeito 
	                  	quando vejo jovens a trabalhar em equipa para solucionarem problemas de engenharia. E que 
	                  	problemas… A prova permitiu-lhes colocar em prática os conhecimentos previamente adquiridos 
	                  	durante a sua formação académica, num ambiente proporcionador de um verdadeiro espírito de equipa 
	                  	focado na resolução de problemas, tal como irão encontrar na sua futura carreira profissional. As 
	                  	soluções apresentadas, estudadas e concretizadas “non-stop” em contra relógio e com recursos 
	                  	limitados, demonstraram as capacidades de raciocínio, técnica e de invenção dos concorrentes, 
	                  	tanto individualmente como em equipa. Parabéns EBEC Aveiro e venha o próximo, pois eventos como 
	                  	este são essenciais para o fortalecimento do futuro tecido empresarial inovador do país.
					  </p>
	                  <small>
	                  	Professor Luís Rino<br/>
	                  	Departamento de Física<br/>
	                  	Universidade de Aveiro
	                  </small>
	                </div>
	              </div>
	            </blockquote>
	          </div>
        
	        <!-- Carousel Buttons Next/Prev -->
	        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
	        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      	</div>                          
    </div>
</section>

<!-- EBEC Portugal -->
<section class="bg-ebec-green">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12 text-center text-white">
	            <h2 class="section-heading">EBEC Portugal</h2>
	            <br/>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-4">
	    		<img class="img-responsive" src="<?php echo base_url('assets/img/event/ebec_pt.png')?>" style="padding-bottom:30px">
	    	</div>        
	        <div class="col-md-8">                
	            <p class="text-muted text-justify text-white">
	            	<b>A EBEC Portugal é a final nacional da competição de Engenharia do BEST.</b>
	            </p>
	        	<p class="text-muted text-justify text-white">
					A EBEC Portugal é uma final Nacional organizada por 
					5 Grupos Locais do BEST de norte a sul do país.
	        	</p>
	        	<p class="text-muted text-justify text-white">
	        		Na fase Nacional irão competir os vencedores das diferentes competições locais, de 5 Universidades 
	        		Portuguesas.
	        	</p>
	        	<p class="text-muted text-justify text-white">
	        		Este ano a fase nacional irá decorrer em Coimbra, durante os dias 15, 16 e 17 de Abril.
	        	</p>
	        	<a class="text-white img-center" href="http://www.ebecportugal.pt/"><b>Sabe mais ...</b></a>
	        </div>
	    </div>
    </div>
</section>

<!-- EBEC Final -->
<section class="bg-ebec-blue">
	<div class="container">
		<div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading">EBEC Final</h2>
                <br/>
            </div>
        </div>
        <div class="row">        	        
            <div class="col-md-8">                
                <p class="text-muted text-justify text-white">
                	Na final Europeia, as equipas vencedoras de todas as fases nacionais/regionais, entre elas a EBEC Portugal, 
                	competem entre si pelo título de Campeões Europeus de Engenharia.
              	</p>
            	<p class="text-muted text-justify text-white">
            		Este ano a fase final irá realizar-se em Belgrado, Sérvia, e decorrerá durante o mês de agosto. Contará 
            		com a presença de todas as equipas vencedoras das fases nacionais.
            	</p>
            	<a class="text-white" href="http://ebec.best.eu.org/"><b>Sabe mais ...</b></a>
            </div>
            <div class="col-md-4"> 
        		<img class="img-responsive img-center" src="<?php echo base_url('assets/img/event/ebec_final.png')?>" style="padding-top:30px">
        	</div>
        </div>
</section>
<a href="" class="scrollToTop"></a>
<!-- Quote carousel -->
<script type="text/javascript">
	// When the DOM is ready, run this function
	$(document).ready(function() {
	  //Set the carousel options
	  $('#quote-carousel').carousel({
	    pause: true,
	    interval: 30000, // 30 seconds
	  });
});</script>