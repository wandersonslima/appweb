<html>
	<?php include "header.php" ?>
<body class="login-background" background="imagens/login.jpg" class="main">
		<div class="login-off">
		</div>
			<br><br><br>
						<div class="container min-height" style="margin-top: 20px;">
								<div class="row">
									<div class="login" id="card">
										<div class="front signin_form"> 
										<p><h3 bgcolor="#FFFFFF">Faça Login</h3></p>
										  <form class="login-form"  method="POST" action="actionLogin.php">
											  <div class="form-group">
												  <div class="input-group">
													  <input type="email" class="form-control" name="email" placeholder="Digite seu E-mail">
													  <span class="input-group-addon">
														  <i class="glyphicon glyphicon-user"></i>
													  </span>
												  </div>
											  </div>
											  <div class="form-group">
												  <div class="input-group">
													  <input type="password" class="form-control" name="senha" placeholder="Digite sua Senha">
													  <span class="input-group-addon">
														  <i class="glyphicon glyphicon-lock"></i>
													  </span>
												  </div>
											  </div>
											  											  
											  <div class="form-group sign-btn">
												  <input type="submit" class="btn btn-default" value="Entrar">
												  <p><br><a href="cadastro.php" class="forgot">Ainda não tem uma conta?</a></p>
											  </div>
										  </form>
										</div>
									</div>
								</div>
						</div>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>
					
					</body>
</html>	