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
    {if in_array(1,$privilegios) or $Usr.role_id eq 1}
    <li class="nav-item {if $page=='config' || $page=='usuario' || $page=='rol' || $page=='config_role' || $page=='perm_accion'|| $page=='empresa'}active open{/if}">
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
        <ul class="sub-menu">
        	{if in_array(4,$privilegios) or $Usr.role_id eq 1}
	        	<li class="nav-item {if $page=='empresa'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/empresa">
						<i class="icon-settings"></i>
						<span class="title">Datos empresa</span>
					</a>
				</li>
			{/if}
			{if in_array(6,$privilegios) or $Usr.role_id eq 1}
	        	<li class="nav-item {if $page=='rol' || $page=='config_role'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/rol">
						<i class="icon-settings"></i>
						<span class="title">Roles</span>
					</a>
				</li>
			{/if}
			
			{if in_array(7,$privilegios) or $Usr.role_id eq 1}
				<li class="nav-item {if $page=='usuario'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/usuario">
						<i class="icon-settings"></i>
						<span class="title">Usuarios</span>
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
			{*if in_array('8',$privilegios) or $Usr.role_id eq 1}
	        	<li class="nav-item {if $page=='cat_electronico'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/cat_electronico">
						<i class="icon-settings"></i>
						<span class="title">Catalogo electronico</span>
					</a>
				</li>
			{/*}
			{*if in_array('9',$privilegios) or $Usr.role_id eq 1}
				<li class="nav-item {if $page=='cliente'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/cliente">
						<i class="icon-user"></i>
						<span class="title">Clientes</span>
					</a>
				</li>
			{/if*}
			{if in_array('14',$privilegios) or $usr.role_id eq 1}
				<li class="nav-item {if $page=='imagenes'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/imagenes">
						<i class="icon-briefcase"></i>
						<span class="title">Imagenes</span>
					</a>
				</li>
			{/if}
			{*if in_array('10',$privilegios) or $Usr.role_id eq 1}
	        	<li class="nav-item {if $page=='nota'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/nota">
						<i class="icon-settings"></i>
						<span class="title">Nota del mes</span>
					</a>
				</li>
			{/if*}
           {*if in_array('11',$privilegios) or $Usr.role_id eq 1}
				<li class="nav-item {if $page=='producto' || $page=='producto_cat'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/producto">
						<i class="icon-briefcase"></i>
						<span class="title">Categoria de productos</span>
					</a>
				</li>
			{/if*}
			{*if in_array('12',$privilegios) or $Usr.role_id eq 1}
				<li class="nav-item {if $page=='sucursal'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/sucursal">
						<i class="icon-briefcase"></i>
						<span class="title">Sucursales</span>
					</a>
				</li>
			{/if*}
			
			{*if in_array('puesto',$privilegios) or $typeUser==1}
				<li class="nav-item {if $page=='puesto'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/puesto">
						<i class="icon-briefcase"></i>s
						<span class="title">Personal </span>
					</a>
				</li>
			{/if*}
			{*if in_array('imagen',$privilegios) or $usr.role_id eq 1}
				<li class="nav-item {if $page=='imagen'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/imagen">
						<i class="icon-briefcase"></i>
						<span class="title">Imagenes</span>
					</a>
				</li>
			{/if*}
        </ul>
	</li> 
	{/if}
    {if in_array(15,$privilegios) || $Usr.role_id eq 1}
	 <li class="nav-item {if $page =='poll' || $page =='question' || $page =='colonia'}active open{/if}">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-list"></i>
        <span class="title">Catalogos</span>
		{if $page=='poll' || $page =='question'}
		 <span class="selected"></span>
         <span class="arrow open"></span>
        {else}
		   <span class="arrow"></span>
		{/if}
        </a>
        <ul class="sub-menu">
       		{if in_array(17,$privilegios) or $Usr.role_id eq 1}
        	<li class="nav-item {if $page=='poll' || $page=='question' || $page=='poll-analytics'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/poll">
					<i class="icon-list"></i>
					<span class="title">Encuestas</span>
				</a>
			</li>
			{/if}
			{if in_array(16,$privilegios) or $usr.role_id eq 1}
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
	<li class="nav-item {if $page =='report' || $page =='geolocation' || $page =='do-poll' || $page =='done-polls'}active open{/if}">
		<a href="javascript:;" class="nav-link nav-toggle">
			<i class="icon-list"></i>
			<span class="title">Encuestas Aplicadas</span>
			{if $page=='report'}
				<span class="selected"></span>
				<span class="arrow open"></span>
			{else}
				<span class="arrow"></span>
			{/if}
		</a>
		<ul class="sub-menu">
			{if in_array('4001',$privilegios) or $Usr.role_id eq 1}
				<li class="nav-item {if $page=='do-poll'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/do-poll">
						<i class="icon-list"></i>
						<span class="title">Nueva encuesta</span>
					</a>
				</li>
			{/if}
			{if in_array('4001',$privilegios) or $Usr.role_id eq 1}
				<li class="nav-item {if $page=='done-polls'}active open{/if}">
					<a class="nav-link " href="{$WEB_ROOT}/done-polls">
						<i class="icon-list"></i>
						<span class="title">Encuestas realizadas</span>
					</a>
				</li>
			{/if}
			<!-- class="nav-item {if $page=='poll' || $page=='poll-analytics'}active open{/if}">
				<a class="nav-link " href="{$WEB_ROOT}/poll">
					<i class="icon-list"></i>
					<span class="title">Estadistica</span>
				</a>
			</li-->
			<li class="nav-item {if $page =='geolocation'}active open{/if}" >
				<a class="nav-link " href="{$WEB_ROOT}/geolocation">
					<i class="icon-map"></i>
					<span class="title">Geolocalizacion</span>
				</a>
			</li>
			<li class="nav-item {if $page=='statistics'}active open{/if}" >
				<a class="nav-link " href="{$WEB_ROOT}/statistics">					
					<i class="icon-bar-chart"></i>
					<span class="title">Estadistiaca</span>
				</a>
			</li>
		</ul>
	</li>
</ul>
</div>
<!-- END SIDEBAR MENU