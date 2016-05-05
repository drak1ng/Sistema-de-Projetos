		
		<div id="login-fundo"></div>
		
		<div class="login-caixa">
			<form id="login-formulario">
				<div id="group-login" class="form-group">
					<label for="login">Seu endereço de e-mail</label>
					<input type="text" class="form-control" id="login" placeholder="Digite seu e-mail">
				</div>
				<div id="group-senha" class="form-group">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
				</div>
				<input type="submit" id="login-botao" class="btn btn-primary btn-lg btn-block" value="Acessar" />
			</form>
		</div>
		
		<script src="/js/particles.min.js"></script>
		
		<script>

			$(document).ready(function(){
				
				particlesJS.load('login-fundo', '/js/particlesjs-config.json');
				
				$('#login-formulario').submit(function(){
					var login = $('#login').val();
					var senha = $('#senha').val();
					
					$('#login-botao').button('loading');
					
					$("#group-login").removeClass("has-error").removeClass("has-feedback");
					$("#group-senha").removeClass("has-error").removeClass("has-feedback");
					
					if(login=="" || senha==""){
						
						if(login==""){ $("#group-login").addClass("has-error").addClass("has-feedback"); }
						if(senha==""){ $("#group-senha").addClass("has-error").addClass("has-feedback"); }
						
						$.MessageBox("<center><span style='color:#c30;'><b>AVISO</b></span><br>Os campos E-mail e Senha devem ser preenchidos!</center>");
						
						$('#login-botao').button('reset');
						
					}else{
						
						$.get("/ajax/validar_login.php", { login:login, senha:senha }, function(data){
							
							if(data=="SUCESSO"){
								
								location.href = location.href;
								
							}else{
								
								$("#group-login").addClass("has-error").addClass("has-feedback");
								$("#group-senha").addClass("has-error").addClass("has-feedback");
								
								$.MessageBox("<center><span style='color:#c30;'><b>AVISO</b></span><br>"+data+"</center>");
								
								$('#login-botao').button('reset');
								
							}
							
						});
						
					}
					
					return false;
				});
				
			});
			
		</script>