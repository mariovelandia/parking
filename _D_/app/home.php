<center>
	<div class="container home">
		<div class="row">
			<div class="col-sm-12">
				<img src="assets/img/looksave-logo-300px.png" class="logo">
			</div>
			<div class="col-sm-8 col-sm-offset-2">
				<form>
					<div class="search-div">
						<div class="form-group">
							<a href="#" id="adv-search" class="search-button"><img src="assets/img/plus-icon.png" class="plus-icon"></a>
							<input type="text" class="main-input" name="search" placeholder="Buscar...">
							<a href="?req=search" class="search-button"><img src="assets/img/look-icon-white.png" class="search-icon" id="search-icon"></a>
						</div>
					</div>
					<!-- Advanced Search Div -->
					<div id="advanced-search" style="display: none;">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="contain" class="search-label col-sm-4">Contiene:</label>
								<input type="text" class="sec-input" name="contiene" placeholder="Contiene estas palabras">
							</div>
							<div class="form-group">
								<label for="contain" class="search-label col-sm-4">Frase Exacta:</label>							
								<input type="text" class="sec-input" name="frase" placeholder="Escribir aqui">						
							</div>
							<div class="form-group">
								<label for="contain" class="search-label col-sm-4">Autor:</label>
								<input type="text" class="sec-input" name="autor" placeholder="Nombre del Autor">
							</div>
							<div class="form-group">
								<label for="contain" class="search-label col-sm-4">Editorial:</label>
								<input type="text" class="sec-input" name="editorial" placeholder="Editorial de la publicacion">
							</div>
						</div>
					</div>			
				</form>
			</div>
		</div>
		<div class="row home-bottom">
			<!-- Login Form -->
			<div class="col-sm-12 text-center" id="menu-links">
				<a href="#" class="home-link" id="login-link">Iniciar Sesión</a> | <a href="#" class="home-link" id="signup-link">Registrarse</a>
			</div>
			<div class="col-sm-12 text-center" id="menu-close" style="display:none;">
				<a href="#" class="home-link" id="login-link">Cerrar</a>
			</div>
			<div id="sign-in" style="display:none;">				
				<div class="col-md-6 col-sm-12 text-right">
					<a href="#" class="fb-login">Iniciar Sesion con Facebook <i class="fa fa-facebook"></i></a>					
				</div>
				<div class="col-md-6 col-sm-12 text-left login">
					<label class="search-label">Iniciar Sesion con Correo:</label>
					<input type="email" class="sec-input" name="correo" placeholder="Correo Electronico">
					<input type="password" class="sec-input" name="password" placeholder="Contraseña"><br />
					<a href="?req=dashboard" id="login-buttom">Iniciar Sesion</a><a href="#" class="crear-link" id="signup-link-2">Crear Cuenta</a>
				</div>
			</div>
			<!-- SignUp Form -->
			<div id="sign-out" style="display:none;">
				<div class="col-md-6 col-sm-12 text-right">
					<a href="#" class="fb-login">Registrarse con Facebook <i class="fa fa-facebook"></i></a>					
				</div>
				<div class="col-md-6 col-sm-12 text-left login">
					<label class="search-label">Registrarse con Correo:</label><br />
					<input type="email" class="sec-input" name="correo" placeholder="Correo Electronico">
					<input type="password" class="sec-input" name="password" placeholder="Contraseña"><br />
					<input type="password" class="sec-input" name="password-confirm" placeholder="Confirmar Contraseña"><br />
					<a href="?req=dashboard" id="signup-buttom">Registrarse</a><a href="#" class="crear-link" id="login-link-2">Iniciar Sesion</a>
				</div>
			</div>
		</div>
	</div>
</center>