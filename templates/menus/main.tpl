
<header id="header" style="background:white; ">


				<div  class="container" >
				<div class="four columns logo">
				<br>
				<a href="index"><img src="{$WEB_ROOT}/images/logosiv11.png" width="" id="img-logo" alt="logo"></a></div>
				<div class="twelve columns top-inf alignright">
							<hr class="vertical-space">
							<div>
								<!--<img src="{$WEB_ROOT}/images/face.png" class="ls-bg" alt="" width="2%">
								<font color="white">Socializa con Nosotros</font>
								<br>-->
								<img src="{$WEB_ROOT}/images/llamada-entrante.png" class="ls-bg" alt="" width="2%">
								&nbsp;&nbsp;<font color="black">01 (961) 65 69 104</font>
								<br>
								<img src="{$WEB_ROOT}/images/camion-de-entrega-de-la-logistica-en-el-movimiento.png" class="ls-bg" alt="" width="2%">
								&nbsp;
								<font color="black"><a href="{$WEB_ROOT}/producto">Servicio a Domicilio</a></font>
								      
								<br>
								<font color="black" size='5'>{$countCar} </font><b><font color="black">Articulo(s)</font></b>
							</div>


							
							{if $usr.isLogged ne 1}
								<button class="button small" style="background:rgba(43, 13, 58, 0.65)" onclick=" location.href='{$WEB_ROOT}/login-customer' ">Iniciar Sesión</button>
								<button class="button small" style="background:rgba(43, 13, 58, 0.65)" onclick=" location.href='{$WEB_ROOT}/account-create' ">Crear Cuenta</button> 
							{else}
								<button class="button small" style="background:#2c3333" onclick=" location.href='{$WEB_ROOT}/account' ">Mi Cuenta</button> 
								<button class="button small" style="background:#2c3333" onclick=" location.href='{$WEB_ROOT}/logout' ">Cerrar Sesión</button> 
								<b><font color="white">Hola ! {$usr.nombre}</font>
							{/if}
				  </div>
			  </div>

<nav id="nav-wrap" class="nav-wrap2 darknavi mn4">
<div class="container">
			<ul id="nav" class="sixteen columns">
			<li class="current"><a data-description="Start here" class="drp-aro" href="{$WEB_ROOT}/index">Inicio</a>
			  </li>	
			  <li><a data-description="We have done" class="drp-aro" href="{$WEB_ROOT}/smarttest">Encuestas</a>
			  </li>
			</ul>
		</div>
</nav>
</header>