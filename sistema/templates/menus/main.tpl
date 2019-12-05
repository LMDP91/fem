<!--BEGIN SIDEBAR -->
<div class="page-sidebar navbar-collapse collapse">
	<ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
		<li class="sidebar-toggler-wrapper hide">
			<div class="sidebar-toggler">
				<span></span>
			</div>
		</li>   
    <li class="nav-item start {if $page == 'homepage'}active{/if}">
        <a href="{$WEB_ROOT}" class="nav-link nav-toggle"> 
        <i class="fa fa-home"></i> 
        <span class="title">Inicio</span>
        {if $page == "homepage"}
		 <span class="selected"></span>
        <span class="arrow open"></span>
        {/if}
        </a>
    </li>
	<li class="heading">	
       <h3 class="uppercase">Menu de opciones</h3>
    </li>
    {if in_array("1",$privilegios) or $Usr.role_id eq 1} 
    <!-- <li class="nav-item {if $page=='config' || $page=='usuario' || $page=='rol' || $page=='config_role' || $page=='perm_accion'|| $page=='empresa' || $page=='colonia'}active open{/if}">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-settings"></i> 
        <span class="title">Configuraciones</span>
       {if $page =='rol' ||$page=='config_role'|| $page=='perm_accion'|| $page=='usuario' || $page=='empresa' || $page=='colonia'}
		 <span class="selected"></span>
         <span class="arrow open"></span>
         {else}
		   <span class="arrow"></span>
        {/if}
        </a> 
		-->
		<!--
        <ul class="sub-menu">
        	{if in_array('4',$privilegios) or $Usr.role_id eq 1} 
	        	<li class="nav-item {if $page=='empresa'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/empresa">
						<i class="icon-settings"></i>
						<span class="title">Datos empresa</span>
					</a>
				</li>
			{/if}
			{*}{if in_array('5',$privilegios) or $Usr.role_id eq 1} 
	        	<li class="nav-item {if $page=='perm_accion'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/perm_accion">
						<i class="icon-settings"></i>
						<span class="title">Permisos del sistema</span>
					</a>
				</li>
			{/if}{*}
			{if in_array('6',$privilegios) or $Usr.role_id eq 1} 
	        	<li class="nav-item {if $page=='rol' || $page=='config_role'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/rol">
						<i class="icon-settings"></i>
						<span class="title">Roles</span>
					</a>
				</li>
			{/if}
			
			{if in_array('7',$privilegios) or $Usr.role_id eq 1} 
				<li class="nav-item {if $page=='usuario'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/usuario">
						<i class="icon-settings"></i>
						<span class="title">Usuarios</span>
					</a>
				</li>
			{/if}
			{if in_array('16',$privilegios) or $usr.role_id eq 1}
				<li class="nav-item {if $page=='colonia'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/colonia">
						<i class="icon-settings"></i>
						<span class="title">Colonias</span>
					</a>
				</li>
			{/if}
        </ul>
	</li>  
	{/if}

	{if in_array(2,$privilegios) or $Usr.role_id eq 1} 
    <li class="nav-item {if $page =='imagenes' || $page =='sucursal' ||$page=='producto'||$page=='imagen'||$page=='puesto' ||  $page=='nota' || $page=='producto_cat'|| $page=='cliente' || $page=='cat_electronico'}active open{/if}">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-briefcase"></i> 
        <span class="title">Pagina Web</span>
		{if $page=='sucursal' || $page=='producto' || $page=='puesto' || $page=='imagen' || $page=='imagenes' || $page=='producto_cat' ||  $page=='cliente'|| $page=='cat_electronico'||  $page=='nota'}
		 <span class="selected"></span>
         <span class="arrow open"></span>
        {else}
		   <span class="arrow"></span>
		{/if}
		
        </a>
        <ul class="sub-menu">
			{if in_array('8',$privilegios) or $Usr.role_id eq 1} 
	        	<li class="nav-item {if $page=='cat_electronico'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/cat_electronico">
						<i class="icon-settings"></i>
						<span class="title">Catalogo electronico</span>
					</a>
				</li>
			{/if}
			{if in_array('9',$privilegios) or $Usr.role_id eq 1} 
			<li class="nav-item {if $page=='cliente'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/cliente">
					<i class="icon-user"></i>
					<span class="title">Clientes</span>
				</a>
			</li>
			{/if}
			{if in_array('14',$privilegios) or $typeUser==1} 
			<li class="nav-item {if $page=='imagenes'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/imagenes">
					<i class="icon-briefcase"></i>
					<span class="title">Imagenes</span>
				</a>
			</li>
			{/if}
			{if in_array('10',$privilegios) or $Usr.role_id eq 1} 
	        	<li class="nav-item {if $page=='nota'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/nota">
						<i class="icon-settings"></i>
						<span class="title">Nota del mes</span>
					</a>
				</li>
			{/if}
           {if in_array('11',$privilegios) or $Usr.role_id eq 1} 
			<li class="nav-item {if $page=='producto' || $page=='producto_cat'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/producto">
					<i class="icon-briefcase"></i>
					<span class="title">Categoria de productos</span>
				</a>
			</li>
			{/if}
			{if in_array('12',$privilegios) or $Usr.role_id eq 1} 
			<li class="nav-item {if $page=='sucursal'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/sucursal">
					<i class="icon-briefcase"></i>
					<span class="title">Sucursales</span>
				</a>
			</li>
			{/if}
			
			{if in_array('puesto',$privilegios) or $typeUser==1} 
			<!--<li class="nav-item {if $page=='puesto'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/puesto">
					<i class="icon-briefcase"></i>s
					<span class="title">Personal </span>
				</a>
			</li>-->
			<!--{/if}
			{if in_array('imagen',$privilegios) or $usr.role_id eq 1}
			<li class="nav-item {if $page=='imagen'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/imagen">
					<i class="icon-briefcase"></i>
					<span class="title">Imagenes</span>
				</a>
			</li>
			{/if}
			
			
        </ul>
	</li> 
	{/if}
	<!-- SECCION PEDIDOS
	{if in_array(3,$privilegios) or $Usr.role_id eq 1} 
	 <li class="nav-item {if $page =='pedido' || $page =='detalle-pedido'}active open{/if}">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-list"></i> 
        <span class="title">Pedidos</span>
		{if $page=='pedido' || $page =='detalle-pedido'}
		 <span class="selected"></span>
         <span class="arrow open"></span>
        {else}
		   <span class="arrow"></span>
		{/if}
        </a>
        <ul class="sub-menu">
       		{if in_array('13',$privilegios) or $Usr.role_id eq 1}
        	<li class="nav-item {if $page=='pedido' || $page =='detalle-pedido'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/pedido">
					<i class="icon-list"></i>
					<span class="title">Lista de pedidos</span>
				</a>
			</li>
			{/if}
		</ul>
      </li>
	{/if}
	
	{if in_array(3,$privilegios) or $Usr.role_id eq 1} 
	 <li class="nav-item {if $page =='analisis-cliente' || $page =='birthday' 
		|| $page=='age-ubication' 
		|| $page=='sex-ubication' 
		|| $page=='order-ubication'
		|| $page=='geolocation'
		|| $page=='pep-basic'
		|| $page=='customer-basic'
	 	|| $page eq 'rankin-pedido'
	    ||  $page eq 'sales-articulo'}active open{/if}">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-list"></i> 
        <span class="title">SIV</span>
		{if $page=='analisis-cliente' || $page =='birthday' || $page=='order-ubication'|| $page =='geolocation' || $page =='pep-basic' || $page eq 'rankin-pedido' ||  $page eq 'sales-articulo'}
		 <span class="selected"></span>
         <span class="arrow open"></span>
        {else}
		   <span class="arrow"></span>
		{/if}
        </a>
        <ul class="sub-menu">
			<li class="nav-item {if $page=='analisis-cliente' 
			|| $page=='birthday' 
			|| $page=='age-ubication' 
			|| $page=='sex-ubication'
			|| $page=='customer-basic'} active open {/if}">
				<a href="javascript:;" onClick="verSubMenu(1)">
				Analisis de Clientes
				<span class="arrow"></span>
				</a>
				<ul class="sub-menu" {if  $page=='birthday' || $page =='age-ubication' || $page =='sex-ubication' ||  $page =='customer-basic'}   {else} style='display:none' {/if} id="mnuPrincipal_1"  >
					<li  class="nav-item {if $page =='birthday'}active open{/if}"><a href="{$WEB_ROOT}/birthday">Cumpleaños</a></li>
					<li  class="nav-item {if $page =='age-ubication'}active open{/if}"><a href="{$WEB_ROOT}/age-ubication">Edad por Colonias</a></li>
					<li class="nav-item {if $page =='sex-ubication'}active open{/if}"><a href="{$WEB_ROOT}/sex-ubication">Genero por Colonias</a></li>
					<!--<li><a href="#">GeoInformacion</a></li>-->
					<!--<li class="nav-item {if $page =='customer-basic'}active open{/if}"><a href="{$WEB_ROOT}/customer-basic">Personalizado</a></li>
				</ul>
			</li>
       		<li class="nav-item {if $page=='order-ubication' || $page=='geolocation' || $page=='pep-basic' || $page=='rankin-pedido'}active open{/if}">
				<a href="javascript:;" onClick="verSubMenu(2)">
				Analisis de Pedidos
				<span class="arrow"></span>
				</a>
				<ul class="sub-menu" {if  $page=='order-ubication' || $page =='geolocation' || $page =='pep-basic' || $page eq 'rankin-pedido' ||  $page eq 'sales-articulo' ||  $page eq 'ranking-product'}style='display:block'{else}style='display:none'{/if} id="mnuPrincipal_2">
					<li class="nav-item {if $page =='order-ubication'}active open{/if}" ><a href="{$WEB_ROOT}/order-ubication">Pedidos por Colonias</a></li>
					<!--<li><a href="{$WEB_ROOT}/pep-time">Hora por Colonias</a></li>-->
					<li class="nav-item {if $page =='geolocation'}active open{/if}" ><a href="{$WEB_ROOT}/geolocation">GeoInformacion</a></li>
					<!--<li class="nav-item {if $page =='pep-basic'}active open{/if}"><a href="{$WEB_ROOT}/pep-basic">Personalizado</a></li>
					<li class="nav-item {if $page =='rankin-pedido'}active open{/if}" ><a href="{$WEB_ROOT}/rankin-pedido">Ranking de pedidos</a></li>
					<li class="nav-item {if $page =='rankin-pedido'}active open{/if}" ><a href="{$WEB_ROOT}/ranking-product">Ranking de Categorias</a></li>
					<li class="nav-item {if $page =='sales-articulo'}active open{/if}" ><a href="{$WEB_ROOT}/sales-articulo">Ventas por articulo</a></li>
				</ul>
			</li>
		</ul>
-->

      </li>
	{/if}
    {if in_array(4000,$privilegios) or $Usr.role_id eq 1}
	 <li class="nav-item {if $page =='poll' || $page =='question'}active open{/if}">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-list"></i> 
        <span class="title">SmartTest</span>
		{if $page=='pedido' || $page =='detalle-pedido'}
		 <span class="selected"></span>
         <span class="arrow open"></span>
        {else}
		   <span class="arrow"></span>
		{/if}
        </a>
        <ul class="sub-menu">
       		{if in_array('4001',$privilegios) or $Usr.role_id eq 1}
        	<li class="nav-item {if $page=='poll' || $page=='poll-analytics'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/poll">
					<i class="icon-list"></i>
					<span class="title">Encuesta</span>
				</a>
			</li>
			{/if}
		</ul>
      </li>
    {/if}

</ul>
</div>
<!-- END SIDEBAR MENU