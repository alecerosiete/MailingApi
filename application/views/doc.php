<!doctype html>
<html lang="en" >
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="index,follow">
    	<meta name="googlebot" content="index,follow">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Catatrepa Mailing API. Integra con tus propias aplicaciones y aprovecha todas las funcionalidades que te ofrecemos." />
												
		<meta property="og:locale" content="es">
		<meta property="og:type" content="object">
		<meta property="og:title" content="Utiliza nuestra HTTP API e integra con tus propias aplicaciones">
		<meta property="og:description" content="Ahorra tiempo y esfuerzo con nuestra documentación API.">
					
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="Utiliza nuestra HTTP API e integra con tus propias aplicaciones">
		<meta name="twitter:description" content="Ahorra tiempo y esfuerzo con nuestra documentación API.">
		<title>Documentación HTTP API | Catatrepa Email API</title>
		<link rel="stylesheet" href="/public/build/npm.bootstrap.fa44152f.css">
		<link rel="stylesheet" href="/public/build/2.92578619.css">
		<link rel="stylesheet" href="/public/build/branding.d0219b4b.css">
		<link rel="icon" href="/public/build/images/favicon.e528e109.png">
			
	</head>
	<body>
		<div class="es-banner es-banner-top"></div>
		<div class="wrapper apipage">
				<!-- Main Navbar -->


<!-- Mobile Sidebar -->
	<div class="content">
		<section class="hero">
			<div class="container">
				<div class="textBlock">
					<h1>
						<b>Documentación Catatrepa Email API</b>
					</h1>
				
				</div>
				
			</div>
		</section>
		<section class="contenedor-api">
      		
			<div class="container-fluid">
				<div class="apiDocBlock">
					<div class="row">
						<div class="sidebar col-lg-3">
							<ul class="mainMenu">
								<li class="topTextMenu">Catatrepa Emailing API</li>
								<li><strong><a href="#introBlock">Introducción</a></strong></li>
								<li><strong><a href="#Campa_C3_B1as">Campañas</a></strong>
									<ul>
									<li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-01_29Obtenercolecci_C3_B3ndecampa_C3_B1as">01) Obtener colección de campañas</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-02_29Obtenereldetalledeunacampa_C3_B1a">02) Obtener el detalle de una campaña</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-03_29Crearunacampa_C3_B1a">03) Crear una campaña</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-04_29Editarunacampa_C3_B1a">04) Editar una campaña</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-05_29Previsualizarunacampa_C3_B1aporemail">05) Previsualizar una campaña por email</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-06_29Previsualizarunacampa_C3_B1aporhtml">06) Previsualizar una campaña por html</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-07_29Chequearelestadodelacampa_C3_B1a">07) Chequear el estado de la campaña</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-08_29Enviarcampa_C3_B1a">08) Enviar campaña</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-09_29Pausarcampa_C3_B1a">09) Pausar campaña</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-10_29Detenercampa_C3_B1a">10) Detener campaña</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-11_29Reanudarcampa_C3_B1a">11) Reanudar campaña</a></li><li><a class="endpoint_menu" href="#jump-Campa_C3_B1as-12_29Eliminarcampa_C3_B1a">12) Eliminar campaña</a></li></ul></li><li><strong><a href="#Campospersonalizados">Campos personalizados</a></strong><ul><li><a class="endpoint_menu" href="#jump-Campospersonalizados-01_29Obtenercolecci_C3_B3ndecampospersonalizados">01) Obtener colección de campos personalizados</a></li><li><a class="endpoint_menu" href="#jump-Campospersonalizados-02_29Obtenerdetalledeuncampopersonalizado">02) Obtener detalle de un campo personalizado</a></li><li><a class="endpoint_menu" href="#jump-Campospersonalizados-03_29Obtenervalidacionesdecampospersonalizados">03) Obtener validaciones de campos personalizados</a></li><li><a class="endpoint_menu" href="#jump-Campospersonalizados-04_29Obtenertiposdecampospersonalizados">04) Obtener tipos de campos personalizados</a></li><li><a class="endpoint_menu" href="#jump-Campospersonalizados-05_29Crearcampopersonalizado">05) Crear campo personalizado</a></li><li><a class="endpoint_menu" href="#jump-Campospersonalizados-06_29Editaruncampopersonalizado">06) Editar un campo personalizado</a></li><li><a class="endpoint_menu" href="#jump-Campospersonalizados-07_29Eliminarcampopersonalizado">07) Eliminar campo personalizado</a></li></ul></li><li><strong><a href="#Contactos">Contactos</a></strong><ul><li><a class="endpoint_menu" href="#jump-Contactos-01_29Obtenercolecci_C3_B3ndecontactos">01) Obtener colección de contactos</a></li><li><a class="endpoint_menu" href="#jump-Contactos-02_29Obtenereldetalledeuncontacto">02) Obtener el detalle de un contacto</a></li><li><a class="endpoint_menu" href="#jump-Contactos-03_29Crearcontacto">03) Crear contacto</a></li><li><a class="endpoint_menu" href="#jump-Contactos-04_29Editaruncontacto">04) Editar un contacto</a></li><li><a class="endpoint_menu" href="#jump-Contactos-05_29Suscribircontactosaunalista">05) Suscribir contactos a una lista</a></li><li><a class="endpoint_menu" href="#jump-Contactos-06_29Desuscribircontactosdeunalista">06) Desuscribir contactos de una lista</a></li><li><a class="endpoint_menu" href="#jump-Contactos-07_29Eliminarcontactos">07) Eliminar contactos</a></li></ul></li><li><strong><a href="#Cuenta">Cuenta</a></strong><ul><li><a class="endpoint_menu" href="#jump-Cuenta-01_29Obtenerconfiguraci_C3_B3ngeneraldelacuenta">01) Obtener configuración general de la cuenta</a></li><li><a class="endpoint_menu" href="#jump-Cuenta-02_29Editarconfiguraci_C3_B3ngeneraldelacuenta">02) Editar configuración general de la cuenta</a></li><li><a class="endpoint_menu" href="#jump-Cuenta-03_29Obtenerestad_C3_ADsticasdelacuenta">03) Obtener estadísticas de la cuenta</a></li><li><a class="endpoint_menu" href="#jump-Cuenta-04_29Obtenerzonashorarias">04) Obtener zonas horarias</a></li><li><a class="endpoint_menu" href="#jump-Cuenta-05_29Obtenerpa_C3_ADses">05) Obtener países</a></li></ul></li><li><strong><a href="#Exclusiones">Exclusiones</a></strong><ul><li><a class="endpoint_menu" href="#jump-Exclusiones-01_29Obtenercolecci_C3_B3ndeexclusiones">01) Obtener colección de exclusiones</a></li><li><a class="endpoint_menu" href="#jump-Exclusiones-02_29Agregarexclusiones">02) Agregar exclusiones</a></li><li><a class="endpoint_menu" href="#jump-Exclusiones-03_29Eliminarexclusiones">03) Eliminar exclusiones</a></li></ul></li><li><strong><a href="#Listasdecontactos">Listas de contactos</a></strong><ul><li><a class="endpoint_menu" href="#jump-Listasdecontactos-01_29Obtenercolecci_C3_B3ndelistasdecontactos">01) Obtener colección de listas de contactos</a></li><li><a class="endpoint_menu" href="#jump-Listasdecontactos-02_29Obtenereldetalledeunalista">02) Obtener el detalle de una lista</a></li><li><a class="endpoint_menu" href="#jump-Listasdecontactos-03_29Crearlistasdecontactos">03) Crear listas de contactos</a></li><li><a class="endpoint_menu" href="#jump-Listasdecontactos-04_29Editarlistasdecontactos">04) Editar listas de contactos</a></li><li><a class="endpoint_menu" href="#jump-Listasdecontactos-05_29Eliminarlistasdecontactos">05) Eliminar listas de contactos</a></li></ul></li><li><strong><a href="#Reportesdecampa_C3_B1as">Reportes de campañas</a></strong><ul><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-01_29Reportegeneral">01) Reporte general</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-02_29Detalledeaperturas">02) Detalle de aperturas</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-03_29Detalledeclicks">03) Detalle de clicks</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-04_29Detalledecompartidos">04) Detalle de compartidos</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-05_29Detallederebotes">05) Detalle de rebotes</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-06_29Detallededesuscripciones">06) Detalle de desuscripciones</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-07_29Detalledequejas">07) Detalle de quejas</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-08_29Detalledeexcluidos">08) Detalle de excluidos</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-09_29Descargarenviados">09) Descargar enviados</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecampa_C3_B1as-10_29Descargarduplicados">10) Descargar duplicados</a></li></ul></li><li><strong><a href="#Reportesdecontactos">Reportes de contactos</a></strong><ul><li><a class="endpoint_menu" href="#jump-Reportesdecontactos-01_29Detalledeaperturas">01) Detalle de aperturas</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecontactos-02_29Detalledeclicks">02) Detalle de clicks</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecontactos-03_29Detalledecompartidos">03) Detalle de compartidos</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecontactos-04_29Detallederebotes">04) Detalle de rebotes</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecontactos-05_29Detallededesuscripciones">05) Detalle de desuscripciones</a></li><li><a class="endpoint_menu" href="#jump-Reportesdecontactos-06_29Detalledequejas">06) Detalle de quejas</a></li></ul></li><li><strong><a href="#Segmentos">Segmentos</a></strong><ul><li><a class="endpoint_menu" href="#jump-Segmentos-01_29Obtenercolecci_C3_B3ndesegmentos">01) Obtener colección de segmentos</a></li></ul></li></ul></div><div class="contentBlock col-lg-9"><div class="navbar navbar-default"><div class="navbar-header"><button id="btnMenu" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">Secciones</button></div></div><div id="introBlock"><h3>Catatrepa Emailing API</h3><p></p><p>Nuestra nueva API te permitirá integrar Catatrepa Emailing  con todas tus aplicaciones mediante simples llamadas a URLs, ofreciéndote innumerables funcionalidades, agrupadas por módulos para facilitar su utilización e implementación.</p><p>Podrás enviar tus campañas de email marketing; crear, modificar y eliminar contactos, listas de contactos y campañas; consultar estadísticas y reportes, y muchas más funcionalidades para que puedas integrarlo con tus aplicaciones.</p><p>Todas las URLs tienen la misma estructura: https<span>://</span>api.catatrepa.com/modulo/accion</p><p><strong>modulo:</strong> Simboliza a un grupo de servicios. Por ejemplo: campaign, customfields, contacts, etc.</p><p><strong>accion:</strong> Acción particular a realizar. Esta acción depende del módulo. Por ejemplo: create, edit, delete, etc.</p><h4>Postman</h4><p>Si utilizas Postman ponemos a disposición la colección de métodos para que importes en tu entorno.</p><p>
										<div class="postman-run-button"
data-postman-action="collection/fork"
data-postman-var-1="629379-cf404ec4-8d38-4ed4-8444-0869755e90b8"
data-postman-collection-url="entityId=629379-cf404ec4-8d38-4ed4-8444-0869755e90b8&entityType=collection&workspaceId=4c958d4a-3f95-4987-97a9-dfebab8e6a3f"></div>
<script type="text/javascript">
  (function (p,o,s,t,m,a,n) {
    !p[s] && (p[s] = function () { (p[t] || (p[t] = [])).push(arguments); });
    !o.getElementById(s+t) && o.getElementsByTagName("head")[0].appendChild((
      (n = o.createElement("script")),
      (n.id = s+t), (n.async = 1), (n.src = m), n
    ));
  }(window, document, "_pm", "PostmanRunObject", "https://run.pstmn.io/button.js"));
</script>
										<!--div class="postman-run-button es-btn es-btn-primary" data-postman-action="collection/import" data-postman-var-1="66a0ab7b6eda1f696061"></div-->
			</p>
			<h5>Seteo de variables</h5>
			<p>Nuestra colección de métodos necesita de la parametrización de las siguientes variables de Postman para su correcto funcionamiento:</p>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							<strong>Nombre</strong>
						</th>
						<th>
							<strong>Valor</strong>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>url</td>
						<td>https​<span>://</span>api.catatrepa.com</td>
					</tr>
					<tr>
						<td>API-KEY (deberás generar en tu cuenta mediante el menu configuracion > api key)</td>
						<td>I6Ik9UZzFNakUyTVRVME9USXpNVGM0TUE9PSIsIntyuHVlIjoiMm9y…</td>
					</tr>
					<tr>
						<td>AUTH (Proveido por CATATREPA)</td>
						<td>30f69c04804cdee30fc782f21e46d622969a045a</td>
					</tr>
				</tbody>
			</table>
			<h4>Autenticación</h4>
			<p>Para utilizar la nueva API deberás contar con una Api key. Para esto deberás ingresar a tu cuenta en mailing.catatrepa.com, ir a Configuración &gt; Clave Api y generar una nueva clave.<br>
			<p>Tambien le será proveido una clave AUTH que tendrá que incluir en los encabezados de la llamada a la api.</p>
			<p>Al utilizar los servicios deberá estar presente el los encabezados API-KEY y AUTH en el header como en el siguiente ejemplo:</p>
			
			<p>
				<code>curl --location --request GET 'https://api.catatrepa.com/administrator/profile' --header 'API-KEY: eyJpdiI6Ik9UZzFNakUyTVRVME9USXpNVGM0TUE9PSIsInZhbHVlIjoiMm9yaGZPYzZqNjVwL1haakw5SlovakNKcEZCeWpGaBcDEfGhIjklMNopqMD0iLCJtYWMiOiJhODVmNDgxZWUxYWoPu2Jktm1MjU0ZDhmNmUzMjA3NDliOGQwYWJkZWFlMjFkNDA4NmNiODRhMjYxIn0= --header AUTH: 30f69c04804cdee30fc782f21e46d622969a045B'</code>
			</p>
			
			<h4>Respuesta</h4>
			<p>Todas las respuestas tendrán dos secciones: <strong>status</strong> y <strong>code</strong>.</p>
			<p>Adicionalmente, según el tipo de servicio, se agregarán otras secciones que se detallarán en cada uno de ellos.</p>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripción</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<strong>status</strong>
						</td>
						<td>Aquí saldrá valor “ok” cuando el proceso se ejecute correctamente y “error” cuando exista algún error.</td>
					</tr>
					<tr>
						<td>
							<strong>code</strong>
						</td>
						<td>Aquí saldrá mensaje de éxito cuando el proceso se ejecute correctamente o un detalle cuando existan errores.</td>
					</tr>
				</tbody>
			</table>
			<h4>Errores</h4>
			<p>Existen dos tipos de errores: de validación de datos de entrada (COD 422) y los particulares de cada servicio (COD 400). A continuación se detallan los errores de validación (COD 422) que son <strong>comunes a todos los servicios</strong>:</p>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Código</th>
						<th>Descripción</th>
					</tr>
				</thead>
				<tbody><tr><td><strong>is_not_accepted</strong></td><td>Valor no aceptado.</td></tr><tr><td><strong>invalid_url</strong></td><td>URL inválida.</td></tr><tr><td><strong>invalid_date</strong></td><td>Fecha incorrecta.</td></tr><tr><td><strong>invalid_alpha_format</strong></td><td>El valor sólo debe contener letras.</td></tr><tr><td><strong>invalid_alpha_dash_format</strong></td><td>El valor sólo debe contener letras, números, guiones y guiones bajos.</td></tr><tr><td><strong>invalid_alpha_num_format</strong></td><td>El valor sólo debe contener letras y números.</td></tr><tr><td><strong>invalid_array_format</strong></td><td>El Valor debe ser un array.</td></tr><tr><td><strong>attached</strong></td><td>Este campo ya se adjuntó.</td></tr><tr><td><strong>before_date</strong></td><td>El valor debe ser una fecha anterior.</td></tr><tr><td><strong>before_or_equal_date</strong></td><td>El valor debe ser una fecha anterior o igual.</td></tr><tr><td><strong>invalid_between_elements</strong></td><td>Cantidad de elementos inválido.</td></tr><tr><td><strong>invalid_between_size_file</strong></td><td>Tamaño de archivo inválido.</td></tr><tr><td><strong>invalid_between_number</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_between_characters</strong></td><td>Cantidad de caracteres inválido.</td></tr><tr><td><strong>invalid_boolean</strong></td><td>El valor debe ser true o false.</td></tr><tr><td><strong>invalid_value_confirmed</strong></td><td>Valor confirmado inválido.</td></tr><tr><td><strong>invalid_date_format</strong></td><td>Formato de fecha inválido.</td></tr><tr><td><strong>invalid_date_equal</strong></td><td>Fecha incorrecta.</td></tr><tr><td><strong>invalid_value_different</strong></td><td>El valor debe ser diferente.</td></tr><tr><td><strong>invalid_value_digits</strong></td><td>Cantidad de digitos inválido.</td></tr><tr><td><strong>invalid_value_digits_between</strong></td><td>Cantidad de digitos inválido.</td></tr><tr><td><strong>invalid_image_dimensions</strong></td><td>Dimensiones de imagen inválidas.</td></tr><tr><td><strong>value_duplicate</strong></td><td>Valor duplicado.</td></tr><tr><td><strong>invalid_email_format</strong></td><td>El formato del email es incorrecto.</td></tr><tr><td><strong>invalid_velue_ends_with</strong></td><td>El valor ingresado es incorrecto.</td></tr><tr><td><strong>not_exists</strong></td><td>El campo es inválido.</td></tr><tr><td><strong>is_not_file</strong></td><td>El campo debe ser un archivo.</td></tr><tr><td><strong>not_empty</strong></td><td>El campo es obligatorio.</td></tr><tr><td><strong>invalid_gt_elements</strong></td><td>Cantidad de elementos inválido.</td></tr><tr><td><strong>invalid_gt_size_file</strong></td><td>Tamaño de archivo inválido.</td></tr><tr><td><strong>invalid_gt_numeric</strong></td><td>Valor incorrecto.</td></tr><tr><td><strong>invalid_gt_characters</strong></td><td>Cantidad de caracteres inválido.</td></tr><tr><td><strong>invalid_gte_elements</strong></td><td>Cantidad de elementos inválido.</td></tr><tr><td><strong>invalid_gte_size_file</strong></td><td>Tamaño del archivo inválido.</td></tr><tr><td><strong>invalid_gte_numeric</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_gte_characters</strong></td><td>Cantidad de caracteres inválido.</td></tr><tr><td><strong>invalid_image</strong></td><td>El campo debe ser una imagen.</td></tr><tr><td><strong>invalid_value_in</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_value_in_array</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_value_integer</strong></td><td>El campo debe ser un número entero.</td></tr><tr><td><strong>invalid_value_ip</strong></td><td>El campo debe ser una dirección IP válida.</td></tr><tr><td><strong>invalid_ipv4_format</strong></td><td>El campo debe ser una dirección IPv4 válida.</td></tr><tr><td><strong>invalid_ipv6_format</strong></td><td>El campo debe ser una dirección IPv6 válida.</td></tr><tr><td><strong>invalid_json_format</strong></td><td>El campo El campo debe ser una cadena JSON válida.</td></tr><tr><td><strong>invalid_lt_elements</strong></td><td>Cantidad de elementos inválido.</td></tr><tr><td><strong>invalid_lt_size_file</strong></td><td>Tamaño del archivo inválido.</td></tr><tr><td><strong>invalid_lt_numeric</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_lt_characters</strong></td><td>Cantidad de caracteres inválida.</td></tr><tr><td><strong>invalid_lte_elements</strong></td><td>Cantidad de elementos inválido.</td></tr><tr><td><strong>invalid_lte_size_file</strong></td><td>Tamaño del archivo inválido.</td></tr><tr><td><strong>invalid_lte_numeric</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_lte_characters</strong></td><td>Cantidad de caracteres inválido.</td></tr><tr><td><strong>invalid_max_elements</strong></td><td>Cantidad de elementos inválido.</td></tr><tr><td><strong>invalid_max_size_file</strong></td><td>Tamaño del archivo inválido.</td></tr><tr><td><strong>invalid_max_numeric</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_max_characters</strong></td><td>Cantidad de caracteres inválido.</td></tr><tr><td><strong>invalid_mimes</strong></td><td>Formato de archivo inválido.</td></tr><tr><td><strong>invalid_mimetypes</strong></td><td>Formato de archivo inválido.</td></tr><tr><td><strong>invalid_min_elements</strong></td><td>Cantidad de elementos inválido.</td></tr><tr><td><strong>invalid_min_size_file</strong></td><td>Tamaño de archivo inválido.</td></tr><tr><td><strong>invalid_min_numeric</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_min_characters</strong></td><td>Cantidad de caracteres inválido.</td></tr><tr><td><strong>multiple_of</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_format</strong></td><td>Formato de campo inválido.</td></tr><tr><td><strong>only_numeric</strong></td><td>El campo debe ser numérico.</td></tr><tr><td><strong>invalid_password</strong></td><td>Contraseña es incorrecta.</td></tr><tr><td><strong>is_not_present</strong></td><td>El campo debe estar presente.</td></tr><tr><td><strong>prohibited</strong></td><td>El campo está prohibido.</td></tr><tr><td><strong>prohibited_if</strong></td><td>El campo está prohibido.</td></tr><tr><td><strong>prohibited_unless</strong></td><td>El campo está prohibido.</td></tr><tr><td><strong>relatable</strong></td><td>El campo no se puede asociar con este recurso.</td></tr><tr><td><strong>required</strong></td><td>El campo es obligatorio.</td></tr><tr><td><strong>is_not_same_that</strong></td><td>El campo deben coincidir.</td></tr><tr><td><strong>invalid_count_elements</strong></td><td>Cantidad de elementos inválido.</td></tr><tr><td><strong>invalid_size_file</strong></td><td>Tamaño de archivo inválido.</td></tr><tr><td><strong>invalid_size_number</strong></td><td>Valor inválido.</td></tr><tr><td><strong>invalid_count_characters</strong></td><td>Cantidad de caracteres inválido.</td></tr><tr><td><strong>invalid_value</strong></td><td>Valor inválido.</td></tr><tr><td><strong>only_characters</strong></td><td>El campo debe ser una cadena de caracteres.</td></tr><tr><td><strong>invalid_timezone</strong></td><td>El campo debe ser una zona válida.</td></tr><tr><td><strong>is_used</strong></td><td>El campo ya ha sido registrado.</td></tr><tr><td><strong>error_upload_file</strong></td><td>Error al subir el archivo.</td></tr><tr><td><strong>invalid_url_format</strong></td><td>El formato tipo url del campo es inválido.</td></tr><tr><td><strong>invalid_uuid_format</strong></td><td>El campo debe ser un UUID válido.</td></tr></tbody></table></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Campa_C3_B1as">Campañas
<span class="badge">12</span></h3></div><div class="panel-body"><p></p><p>Este módulo te permitirá realizar toda la gestión asociada a campañas desde la creación hasta el envío.</p><div class="request-item"><div class="panel-group" id="accordion-Campa_C3_B1as"><div class="panel panel-success" id="jump-Campa_C3_B1as-01_29Obtenercolecci_C3_B3ndecampa_C3_B1as"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-01_29Obtenercolecci_C3_B3ndecampa_C3_B1as" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Obtener colección de campañas</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/getAll</h4></a></div><div id="collapse-Campa_C3_B1as-01_29Obtenercolecci_C3_B3ndecampa_C3_B1as" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve una lista todas las campañas. Pueden filtrarse por nombre o por estado.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la campaña</td></tr><tr><td align="left">name</td><td align="center">Título de la campaña</td></tr><tr><td align="left">created</td><td align="center">Fecha de creación de la campaña</td></tr><tr><td align="left">type_send</td><td align="center">Tipo de envío<br>Send Now -&gt; Enviar ahora<br>One time scheduled -&gt; Programada<br>Not scheduled -&gt; Sin programar</td></tr><tr><td align="left">status</td><td align="center">Estado de la campaña<br>Draft -&gt; Borrador<br>Paused -&gt; Pausada<br>Stopped -&gt; Detenida<br>PendingforApproval -&gt; Pendiente de aprobación<br>Sending -&gt; Enviando o Programada<br>Completed -&gt; Enviada</td></tr><tr><td align="left">schedule_send_date</td><td align="center">Fecha de programación de la campaña<br>Sólo para campañas con Tipo de envío = Programada</td></tr><tr><td align="left">start_date</td><td align="center">Fecha de inicio de envío</td></tr><tr><td align="left">finish_date</td><td align="center">Fecha fin del envío</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>filter</td><td>Promo</td><td><p>Filtro por nombre o parte del nombre de la campaña.</p></td></tr><tr><td>status</td><td>Draft</td><td><p>Filtro por estado de la campaña. Posible valores: Draft (Borrador) / Completed (Enviada) / Sending (Enviandose o Programada) / Paused (Pausada) / PendingForApproval (Pendiente de aprobación) /Stopped (Detenida).</p></td></tr><tr><td>createDateFrom</td><td>2021-05-01</td><td><p>Filtro por fecha de creación desde. Formato: YYYY-MM-DD.</p></td></tr><tr><td>createDateTo</td><td>2021-05-28</td><td><p>Filtro por fecha de creación hasta. Formato: YYYY-MM-DD.</p></td></tr><tr><td>sendDateFrom</td><td>2021-05-01</td><td><p>Filtro por fecha de envío desde. Formato: YYYY-MM-DD.</p></td></tr><tr><td>sendDateTo</td><td>2021-05-28</td><td><p>Filtro por fecha de envío hasta. Formato: YYYY-MM-DD.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>name</td><td><p>Criterio para ordenar las campañas. Valores posibles: name/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_01_29Obtenercolecci_C3_B3ndecampa_C3_B1as_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_01_29Obtenercolecci_C3_B3ndecampa_C3_B1as_1_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_01_29Obtenercolecci_C3_B3ndecampa_C3_B1as_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/getAll</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>name</td><td><p>Criterio para ordenar las campañas. Valores posibles: name/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"id": 1,
"name": "Campaña indumentaria",
"created": "2021-09-03 14:12:29",
"type_send": "Send Now",
"status": "Completed",
"schedule_send_date": null,
"start_date": "2021-09-03 14:55:22",
"finish_date": "2021-09-03 14:55:32"
},
{
"id": 3,
"name": "Día de la madre",
"created": "2021-09-03 14:56:20",
"type_send": "Send Now",
"status": "Draft",
"schedule_send_date": null,
"start_date": null,
"finish_date": null
},
{
"id": 2,
"name": "Promoción 2x1",
"created": "2021-09-03 14:51:19",
"type_send": "One time scheduled",
"status": "Sending",
"schedule_send_date": "2021-09-30 14:55:43",
"start_date": null,
"finish_date": null
}
],
"first_page_url": "http://api.catatrepa.com/campaign/getAll?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http://api.catatrepa.com/campaign/getAll?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "http://api.catatrepa.com/campaign/getAll?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "http://api.catatrepa.com/campaign/getAll",
"per_page": "10",
"prev_page_url": null,
"to": 3,
"total": 3
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_01_29Obtenercolecci_C3_B3ndecampa_C3_B1as_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/getAll</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>filter</td><td>Promo</td><td><p>Filtro por nombre o parte del nombre de la campaña.</p></td></tr><tr><td>status</td><td>Draft</td><td><p>Filtro por estado de la campaña. Posible valores: Draft/Completed/Sending/Paused/PendingForApproval/Stopped</p></td></tr><tr><td>createDateFrom</td><td>2021-05-18</td><td><p>Filtro por fecha de creación desde.</p></td></tr><tr><td>createDateTo</td><td>2021-05-28</td><td><p>Filtro por fecha de creación hasta.</p></td></tr><tr><td>sendDateFrom</td><td>2021-05-28</td><td><p>Filtro por fecha de envío desde.</p></td></tr><tr><td>sendDateTo</td><td>2021-05-28</td><td><p>Filtro por fecha de envío hasta.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>name</td><td><p>Criterio para ordenar las campañas. Valores posibles: name/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>ascen</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"order": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-info" id="jump-Campa_C3_B1as-02_29Obtenereldetalledeunacampa_C3_B1a"><div class="panel-heading">
<a class="text-info" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-02_29Obtenereldetalledeunacampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>02) Obtener el detalle de una campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/campaign/:campaing_id</h4></a></div><div id="collapse-Campa_C3_B1as-02_29Obtenereldetalledeunacampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de una campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripcion</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la campaña</td></tr><tr><td align="left">name</td><td align="center">Título de la campaña</td></tr><tr><td align="left">created</td><td align="center">Fecha de creación de la campaña</td></tr><tr><td align="left">subject</td><td align="center">Asunto</td></tr><tr><td align="left">previewText</td><td align="center">Texto de vista previa</td></tr><tr><td align="left">fromAlias</td><td align="center">Nombre del remitente</td></tr><tr><td align="left">fromEmail</td><td align="center">Desde</td></tr><tr><td align="left">replyEmail</td><td align="center">Responder a</td></tr><tr><td align="left">maillists</td><td align="center">Lista/s de contacto/s (ID y Nombre)</td></tr><tr><td align="left">segments</td><td align="center">Segmento (ID y nombre)</td></tr><tr><td align="left">recipients_count</td><td align="center">Total de destinatarios de la campaña</td></tr><tr><td align="left">type_send</td><td align="center">Tipo de envío. Valores posibles:<br>Send Now -&gt; Enviar ahora<br>One time scheduled -&gt; Programada<br>Not scheduled -&gt; Sin programar</td></tr><tr><td align="left">schedule_send_date</td><td align="center">Fecha de programación de la campaña<br>Sólo para campañas con Tipo de envío = Programada</td></tr><tr><td align="left">start_date</td><td align="center">Fecha de inicio de envío</td></tr><tr><td align="left">finish_date</td><td align="center">Fecha fin del envío</td></tr><tr><td align="left">trackLinkClicks</td><td align="center">Seguir enlaces</td></tr><tr><td align="left">trackReads</td><td align="center">Contar aperturas</td></tr><tr><td align="left">trackAnalitics</td><td align="center">Vincular con Google Analytics</td></tr><tr><td align="left">sendReport</td><td align="center">Enviar informe</td></tr><tr><td align="left">publicArchive</td><td align="center">Agregar al archivo público</td></tr><tr><td align="left">workspace</td><td align="center">Cómo fue realizado el contenido. Valores posibles:<br>designer -&gt; Editor visual<br>expertCoder -&gt; Modo programador<br>externalUrl -&gt; Modo Url<br></td></tr><tr><td align="left">content</td><td align="center">Contenido de la campaña en HTML</td></tr><tr><td align="left">status</td><td align="center">Estado de la campaña. Valores posibles:<br>Draft -&gt; Borrador<br>Paused -&gt; Pausada<br>Stopped -&gt; Detenida<br>PendingforApproval -&gt; Pendiente de aprobación<br>Sending -&gt; Enviando o Programada<br>Completed -&gt; Enviada</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripcion</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>campaing_id</td><td>12</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h5 class="label label-primary">Body</h5><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_02_29Obtenereldetalledeunacampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_02_29Obtenereldetalledeunacampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)</option></select><br><section id="req_res_Campa_C3_B1as_02_29Obtenereldetalledeunacampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/:campaing_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>campaing_id</td><td>1</td><td></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"id": 1,
"name": "Campaña indumentaria",
"created": "2021-09-03 14:12:29",
"subject": "Aprovecha las ofertas de este mes!",
"previewText": "",
"fromAlias": "Indumentaria SA",
"fromEmail": "administrador@ejemplo.com",
"replyEmail": "administrador@ejemplo.com",
"maillists": [
{
"id": 1,
"name": "ListaPrueba1"
}
],
"segments": [],
"recipients_count": 2,
"type_send": "Send Now",
"schedule_send_date": null,
"start_date": "2021-09-03 14:55:22",
"finish_date": "2021-09-03 14:55:32",
"trackLinkClicks": 1,
"trackReads": 1,
"trackAnalitics": 1,
"sendReport": 1,
"publicArchive": 0,
"content": "&lt;!DOCTYPE html \"-//w3c//dtd xhtml 1.0 transitional //en\" \"http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd\"&gt;&lt;html xmlns=\"http://www.w3.org/1999/xhtml\"&gt;&lt;head&gt;&lt;!--[if gte mso 9]&gt;\n &lt;xml&gt;\n &lt;o:OfficeDocumentSettings&gt;\n &lt;o:AllowPNG/&gt;\n &lt;o:PixelsPerInch&gt;96&lt;/o:PixelsPerInch&gt;\n &lt;/o:OfficeDocumentSettings&gt;\n &lt;/xml&gt;\n&lt;![endif]--&gt;\n&lt;meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"&gt;\n&lt;meta name=\"viewport\" content=\"width=device-width\"&gt;\n&lt;meta http-equiv=\"X-UA-Compatible\" content=\"IE=9; IE=8; IE=7; IE=EDGE\"&gt;\n&lt;!--[if !mso]&gt;&lt;!- - --&gt;&lt;link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Lato:400,700|Merriweather:400,700|Montserrat:400,700|Raleway:400,700|Roboto:400,700|Source+Sans+Pro:300,400,700\" rel=\"stylesheet\"&gt;\n&lt;!--&lt;![endif]--&gt;&lt;/head&gt;&lt;body style=\"width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF;\"&gt;&lt;style id=\"media-query\"&gt;#outlook a {\n padding: 0;\n}\n\n/* .ExternalClass (Outlook.com) */\n.ExternalClass {\n width: 100%;\n}\n\n.ExternalClass,\n.ExternalClass p,\n.ExternalClass span,\n.ExternalClass font,\n.ExternalClass td,\n.ExternalClass div {\n line-height: 100%;\n}\n\n#backgroundTable {\n margin: 0;\n padding: 0;\n width: 100% !important;\n line-height: 100% !important;\n}\n\n/* Buttons */\n.button a {\n display: inline-block;\n text-decoration: none;\n -webkit-text-size-adjust: none;\n text-align: center;\n}\n\n.button a div {\n text-align: center !important;\n}\n\n/* Outlook First */\nbody.outlook p {\n display: inline !important;\n}\n\n/* Media Queries */\n@media only screen and (max-width: 600px) {\n table[class=\"body\"] img {\n height: auto !important;\n width: 100% !important;\n }\n\n table[class=\"body\"] img.fullwidth {\n max-width: 100% !important;\n }\n\n table[class=\"body\"] center {\n min-width: 0 !important;\n }\n\n table[class=\"body\"] .container {\n width: 95% !important;\n }\n\n table[class=\"body\"] .row {\n width: 100% !important;\n display: block !important;\n }\n\n table[class=\"body\"] .wrapper {\n display: block !important;\n padding-right: 0 !important;\n }\n\n table[class=\"body\"] .columns, table[class=\"body\"] .column {\n table-layout: fixed !important;\n float: none !important;\n width: 100% !important;\n padding-right: 0px !important;\n padding-left: 0px !important;\n display: block !important;\n }\n\n table[class=\"body\"] .wrapper.first .columns, table[class=\"body\"] .wrapper.first .column {\n display: table !important;\n }\n\n table[class=\"body\"] table.columns td, table[class=\"body\"] table.column td, .col {\n width: 100% !important;\n }\n\n table[class=\"body\"] table.columns td.expander {\n width: 1px !important;\n }\n\n table[class=\"body\"] .right-text-pad, table[class=\"body\"] .text-pad-right {\n padding-left: 10px !important;\n }\n\n table[class=\"body\"] .left-text-pad, table[class=\"body\"] .text-pad-left {\n padding-right: 10px !important;\n }\n\n table[class=\"body\"] .hide-for-small, table[class=\"body\"] .show-for-desktop {\n display: none !important;\n }\n\n table[class=\"body\"] .show-for-small, table[class=\"body\"] .hide-for-desktop {\n display: inherit !important;\n }\n\n .mixed-two-up .col {\n width: 100% !important;\n }\n}\n\n@media screen and (max-width: 600px) {\n div[class=\"col\"] {\n width: 100% !important;\n }\n}\n\n@media screen and (min-width: 280px) and (max-width: 600px) {\n\n .under600 {\n width: 100% !important;\n }\n\n}\n\n@media screen and (min-width: 601px) {\n table[class=\"container\"] {\n width: 600px !important;\n }\n}&lt;/style&gt;&lt;!--[if gte mso 12]&gt;\n&lt;style type=\"text/css\"&gt;\n/* Your Outlook-specific CSS goes here. */\n.hideMSO2007{\n display: none !important;\n}\n&lt;/style&gt;\n&lt;![endif]--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\"&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF\" align=\"center\" valign=\"top\" class=\"center\"&gt;&lt;!-- tabla (5)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;!--[if gte mso 9]&gt;\n &lt;table id=\"outlookholder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;&lt;tr&gt;&lt;td&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n &lt;td&gt;\n&lt;![endif]--&gt;&lt;!-- tabla (4)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 600px;margin: 0 auto;text-align: inherit\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\" class=\"container\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 600px;color: #000000;background-color: transparent\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"transparent\" class=\"block-grid\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0; background-color: undefined\"&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;table width=\"100%\" align=\"center\" bgcolor=\"transparent\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;td valign=\"top\" width=\"600\"&gt;\n&lt;![endif]--&gt;&lt;div style=\"display: inline-block; vertical-align: top; text-align: center; width: 600px\" class=\"col\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;font-size: 12px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: undefined;border-right: undefined;border-bottom: undefined;border-left: undefined\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top:20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;p style='text-align:center'&gt;Si no puedes visualizar este mail haz &lt;a href='%HTMLVersion%' target='blank'&gt;click aquí&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;![endif]--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;!--[if mso]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;&lt;!-- fin tabla (4)--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;!-- fin tabla (5)--&gt;&lt;/table&gt;&lt;!-- tabla (5)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;!--[if gte mso 9]&gt;\n &lt;table id=\"outlookholder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;&lt;tr&gt;&lt;td&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n &lt;td&gt;\n&lt;![endif]--&gt;&lt;!-- tabla (4)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 600px;margin: 0 auto;text-align: inherit\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\" class=\"container\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 600px;color: #000000;background-color: transparent\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"transparent\" class=\"block-grid\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0; background-color: undefined\"&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;table width=\"100%\" align=\"center\" bgcolor=\"transparent\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;td valign=\"top\" width=\"600\"&gt;\n&lt;![endif]--&gt;&lt;div style=\"display: inline-block; vertical-align: top; text-align: center; width: 600px\" class=\"col\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: #EAEFF2;font-size: 12px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: undefined;border-right: undefined;border-bottom: undefined;border-left: undefined\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top:20px;padding-right: 20px;padding-bottom: 0;padding-left: 20px\" align=\"left\"&gt;&lt;table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"&gt;&lt;tr&gt;&lt;td style=\"padding-right: 0; padding-left: 0; padding-top:7.5px; padding-bottom:7.5px;\"&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top: 0;padding-right: 20px;padding-bottom: 0;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;h1 style=\"font-family:Arial, Helvetica, sans-serif;font-size:36px;color:#333333;line-height:1em;margin: 0 0 0.5em 0; font-weight: normal; letter-spacing: nullpx;\"&gt;Dise&amp;ntilde;o de prueba&lt;/h1&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top: 0;padding-right: 20px;padding-bottom: 0;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;p style=\"font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333333;line-height:1.5em;margin: 0 0 0.75em 0; font-weight: normal; letter-spacing: nullpx;\"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor eleifend sagittis. Maecenas at ex eget libero lacinia gravida. Sed volutpat sed nibh sit amet tristique. Vestibulum tellus sapien, porta mollis rhoncus ac, gravida quis nisl. Fusce euismod lorem at risus lobortis aliquam. Nullam erat lorem, consequat a nibh et, euismod aliquam elit. Nam lacus tellus, dapibus ut maximus nec, accumsan at nulla.&lt;/p&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top: 0;padding-right: 20px;padding-bottom: 20px;padding-left: 20px\" align=\"center\"&gt;&lt;table data-table-button=\"data-table-button\" align=\"center\" valign=\"middle\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td width=\"auto\" align=\"center\" valign=\"middle\" style=\"background-color:#dfdfdf; border-top-left-radius:4px; border-bottom-left-radius:4px;border-top-right-radius:4px; border-bottom-right-radius:4px; background-clip: padding-box;font-size:18px; font-family: Courier New, courier, monospace; text-align:center; color:#333333; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border: 1px solid #dfdfdf;\"&gt;&lt;table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td valign=\"middle\" style=\"text-align:null\"&gt;&lt;a data-a-end-button=\"data-a-end-button\" href=\"undefined\" target=\"_blank\" style=\"text-decoration:none; color:#333333; font-family:Courier New, courier, monospace; font-size:18px;font-style:normal;font-weight: normal;letter-spacing: nullpx;\"&gt;Botón&lt;/a&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;![endif]--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;!--[if mso]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;&lt;!-- fin tabla (4)--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;!-- fin tabla (5)--&gt;&lt;/table&gt;&lt;!-- tabla (5)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;!--[if gte mso 9]&gt;\n &lt;table id=\"outlookholder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;&lt;tr&gt;&lt;td&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n &lt;td&gt;\n&lt;![endif]--&gt;&lt;!-- tabla (4)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 600px;margin: 0 auto;text-align: inherit\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\" class=\"container\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 600px;color: #000000;background-color: transparent\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"transparent\" class=\"block-grid\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0; background-color: undefined\"&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;table width=\"100%\" align=\"center\" bgcolor=\"transparent\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;td valign=\"top\" width=\"600\"&gt;\n&lt;![endif]--&gt;&lt;div style=\"display: inline-block; vertical-align: top; text-align: center; width: 600px\" class=\"col\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;font-size: 12px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: undefined;border-right: undefined;border-bottom: undefined;border-left: undefined\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top:20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;p style='text-align:center'&gt;¿Te gustó este mail? &lt;a href='%ForwardTo%' target='blank'&gt;Reenvíalo a un amigo&lt;/a&gt;.&lt;/p&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;![endif]--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;!--[if mso]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;&lt;!-- fin tabla (4)--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;!-- fin tabla (5)--&gt;&lt;/table&gt;&lt;!-- tabla (5)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #E6E7E9\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;!--[if gte mso 9]&gt;\n &lt;table id=\"outlookholder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;&lt;tr&gt;&lt;td&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n &lt;td&gt;\n&lt;![endif]--&gt;&lt;!-- tabla (4)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 600px;margin: 0 auto;text-align: inherit\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\" class=\"container\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 600px;color: #000000;background-color: transparent\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"transparent\" class=\"block-grid\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0; background-color: undefined\"&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;table width=\"100%\" align=\"center\" bgcolor=\"transparent\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;td valign=\"top\" width=\"600\"&gt;\n&lt;![endif]--&gt;&lt;div style=\"display: inline-block; vertical-align: top; text-align: center; width: 600px\" class=\"col\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: #E6E7E9;font-size: 12px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: undefined;border-right: undefined;border-bottom: undefined;border-left: undefined\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top:20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;p style=\"text-align: center;font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333333;line-height:1.5em;margin: 0 0 0.75em 0; font-weight: normal; letter-spacing: nullpx;\"&gt;Recibes este mail porque est&amp;aacute;s suscripto a nuestra lista de correos.&lt;br /&gt;&lt;u&gt;&lt;a href=\"%UnSubscribe%\" style=\"text-decoration: none; color: #333333!important\" target=\"_blank\" style=\"text-decoration: none; color: #333333!important\" target=\"_blank\" style=\"text-decoration: none; color: #333333!important\" target=\"_blank\" style=\"text-decoration: none; color: #333333!important\" target=\"_blank\"&gt;Para desuscribirte haz click aqu&amp;iacute;.&lt;/a&gt;&lt;/u&gt;&lt;/p&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;![endif]--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;!--[if mso]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;&lt;!-- fin tabla (4)--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;!-- fin tabla (5)--&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/body&gt;&lt;/html&gt;",
"status": "Completed"
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_02_29Obtenereldetalledeunacampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/:campaing_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>campaing_id</td><td>12</td><td></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-03_29Crearunacampa_C3_B1a"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-03_29Crearunacampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>03) Crear una campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/create</h4></a></div><div id="collapse-Campa_C3_B1as-03_29Crearunacampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite crear una nueva campaña. Sólo es requerido el Título.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>id</td><td>ID de la campaña creada</td></tr><tr><td>name</td><td>Título de la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_mailListsIdsOrSegmentId</td><td>Sólo es posible ingresar uno de los campos: Lista/s o Segmentos.</td></tr><tr><td>errorMsg_contentOrContentUrl</td><td>Sólo es posible ingresar uno de los campos: Contenido HTML o Url.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Promociones día del padre</td><td><p>Título de la campaña. Requerido.</p></td></tr><tr><td>subject</td><td>Hola %Member:CustomField1% %Member:CustomField2%</td><td><p>Asunto de la campaña. Puedes incluir campos personalizados utilizando el “Código del campo personalizado” obtenido en el servicio “Obtener detalle de un campo personalizado”.</p></td></tr><tr><td>previewText</td><td>Texto para la vista previa</td><td><p>Texto de vista previa.</p></td></tr><tr><td>fromAlias</td><td>Empresa S.A.</td><td><p>Nombre del remitente.</p></td></tr><tr><td>fromEmail</td><td>administrador@ejemplo.com</td><td><p>Dirección de email desde la cuál saldrá la campaña. Requerido solo si se completa el campo “fromAlias”.</p></td></tr><tr><td>replyEmail</td><td>administrador@ejemplo.com</td><td><p>Dirección email para “Responder a”.</p></td></tr><tr><td>mailListsIds[]</td><td>1</td><td><p>Array de Ids de listas de contactos.</p></td></tr><tr><td>segmentId</td><td>19</td><td><p>Id del segmento.</p></td></tr><tr><td>content</td><td><p>%Member:CustomField1% %Member:CustomField2% ¡Mirá las promociones que tenemos para vos!</p></td><td><p>Contenido del email en Html. Puedes incluir campos personalizados utilizando el “Código del campo personalizado” obtenido en el servicio “Obtener detalle de un campo personalizado”.</p></td></tr><tr><td>contentUrl</td><td>http://google.com.ar</td><td><p>Generar contenido html de la campaña desde una url.</p></td></tr><tr><td>trackLinkClicks</td><td>1</td><td><p>Seguir enlaces. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackReads</td><td>0</td><td><p>Contar aperturas. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackAnalitics</td><td>0</td><td><p>Vincular con Google Analytics. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>sendReport</td><td>0</td><td><p>Enviar reporte. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>publicArchive</td><td>1</td><td><p>Agregar al archivo público. Valores posibles: 0/1. Por defecto 0.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_03_29Crearunacampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_03_29Crearunacampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_03_29Crearunacampa_C3_B1a_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_03_29Crearunacampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Campaña ejemplo</td><td><p>Título de la campaña. Requerido.</p></td></tr><tr><td>subject</td><td>Promociones día del padre</td><td><p>Asunto de la campaña.</p></td></tr><tr><td>previewText</td><td>Texto para la vista previa</td><td><p>Texto de vista previa.</p></td></tr><tr><td>fromAlias</td><td>Empresa S.A.</td><td><p>Nombre del remitente.</p></td></tr><tr><td>fromEmail</td><td>administrador@ejemplo.com</td><td><p>Dirección email desde la cuá saldrá la campaña. Requerido solo si se completa el campo “fromAlias”.</p></td></tr><tr><td>replyEmail</td><td>administrador@ejemplo.com</td><td><p>Dirección email para “Responder a”.</p></td></tr><tr><td>mailListsIds[]</td><td>1</td><td><p>Array de Ids de listas de contactos.</p></td></tr><tr><td>content</td><td><h1>Hello World</h1></td><td><p>Contenido del email en Html.</p></td></tr><tr><td>trackLinkClicks</td><td>1</td><td><p>Seguir enlaces. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackReads</td><td>0</td><td><p>Contar aperturas. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackAnalitics</td><td>0</td><td><p>Vincular con Google Analytics. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>sendReport</td><td>0</td><td><p>Enviar reporte. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>publicArchive</td><td>1</td><td><p>Agregar al archivo público. Valores posibles: 0/1. Por defecto 0.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_campaignCreated",
"mailListsNotFound": [],
"segmentNotFound": [],
"data": {
"id": 4,
"name": "Campaña ejemplo"
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_03_29Crearunacampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Campaña ejemplo</td><td><p>Título de la campaña. Requerido.</p></td></tr><tr><td>subject</td><td>Promociones día del padre</td><td><p>Asunto de la campaña.</p></td></tr><tr><td>previewText</td><td>Texto para la vista previa</td><td><p>Texto de vista previa.</p></td></tr><tr><td>fromAlias</td><td>Indumentaria S.A.</td><td><p>Nombre del remitente.</p></td></tr><tr><td>fromEmail</td><td>administrador@ejemplo.com</td><td><p>Dirección email desde la cuá saldrá la campaña. Requerido solo si se completa el campo “fromAlias”.</p></td></tr><tr><td>replyEmail</td><td>administrador@ejemplo.com</td><td><p>Dirección email para “Responder a”.</p></td></tr><tr><td>mailListsIds[]</td><td>1</td><td><p>Array de Ids de listas de contactos.</p></td></tr><tr><td>segmentId</td><td>1</td><td><p>Id del segmento.</p></td></tr><tr><td>content</td><td><h1>Hello World</h1></td><td><p>Contenido del email en Html.</p></td></tr><tr><td>trackLinkClicks</td><td>1</td><td><p>Seguir enlaces. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackReads</td><td>0</td><td><p>Contar aperturas. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackAnalitics</td><td>0</td><td><p>Vincular con Google Analytics. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>sendReport</td><td>0</td><td><p>Enviar reporte. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>publicArchive</td><td>1</td><td><p>Agregar al archivo público. Valores posibles: 0/1. Por defecto 0.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_mailListsIdsOrSegmentId"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_03_29Crearunacampa_C3_B1a_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Campaña ejemplo</td><td><p>Título de la campaña. Requerido.</p></td></tr><tr><td>subject</td><td>Promociones día del padre</td><td><p>Asunto de la campaña.</p></td></tr><tr><td>previewText</td><td>Texto para la vista previa</td><td><p>Texto de vista previa.</p></td></tr><tr><td>fromAlias</td><td>Indumentaria S.A.</td><td><p>Nombre del remitente.</p></td></tr><tr><td>fromEmail</td><td>administrador@ejemplo.com</td><td><p>Dirección email desde la cuá saldrá la campaña. Requerido solo si se completa el campo “fromAlias”.</p></td></tr><tr><td>replyEmail</td><td>administrador@ejemplo.com</td><td><p>Dirección email para “Responder a”.</p></td></tr><tr><td>mailListsIds[]</td><td>1</td><td><p>Array de Ids de listas de contactos.</p></td></tr><tr><td>content</td><td><h1>Hello World</h1></td><td><p>Contenido del email en Html.</p></td></tr><tr><td>trackLinkClicks</td><td>2</td><td><p>Seguir enlaces. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackReads</td><td>0</td><td><p>Contar aperturas. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackAnalitics</td><td>0</td><td><p>Vincular con Google Analytics. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>sendReport</td><td>0</td><td><p>Enviar reporte. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>publicArchive</td><td>1</td><td><p>Agregar al archivo público. Valores posibles: 0/1. Por defecto 0.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"trackLinkClicks": [
"invalid_boolean"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-04_29Editarunacampa_C3_B1a"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-04_29Editarunacampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>04) Editar una campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/edit</h4></a></div><div id="collapse-Campa_C3_B1as-04_29Editarunacampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite editar todos los campos de una campaña existente, teniendo en cuenta las siguiente consideraciones:</p><ul><li>Solo pueden modificarse campañas en Borrador o Detenidas.</li><li>Si se desea blanquear los datos deben enviarse los parámetros con el valor en blanco.</li><li>Al modificar un campaña Detenida la misma quedará en Borrador automáticamente.</li><li>En caso de que alguna de las listas indicadas no exista, la misma se mostrará en la respuesta dentro de <strong>mailListsNotFound</strong> y no se asignará a la campaña.</li><li>En caso de que el segmento indicado no exista, el mismo se mostrará en la respuesta dentro de <strong>segmentNotFound</strong> y no se asignará a la campaña.</li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr><tr><td>errorMsg_mailListsIdsOrSegmentId</td><td>Sólo es posible ingresar uno de los campos: Lista/s o Segmentos.</td></tr><tr><td>errorMsg_contentOrContentUrl</td><td>Sólo es posible ingresar uno de los campos: Contenido HTML o Url.</td></tr><tr><td>errorMsg_campaignPaused</td><td>La campaña está pausada.</td></tr><tr><td>errorMsg_campaignSending</td><td>La campaña está enviándose o programada.</td></tr><tr><td>errorMsg_campaignPendingForApprova</td><td>La campaña está pendiente de aprobación.</td></tr><tr><td>errorMsg_campaignCompleted</td><td>La campaña está enviada.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>4</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>name</td><td>Prueba editar campaña</td><td><p>Nombre de la campaña.</p></td></tr><tr><td>subject</td><td>Hola %Member:CustomField1% %Member:CustomField2%</td><td><p>Asunto de la campaña. Puedes incluir campos personalizados utilizando el “Código del campo personalizado” obtenido en el servicio “Obtener detalle de un campo personalizado”.</p></td></tr><tr><td>previewText</td><td>Texto de vista previa</td><td><p>Texto de vista previa.</p></td></tr><tr><td>fromAlias</td><td>Empresa S.A.</td><td><p>Nombre del remitente.</p></td></tr><tr><td>fromEmail</td><td>empresa@ejemplo.com</td><td><p>Dirección de email desde la cuál saldrá la campaña. Requerido solo si se completa el campo “fromAlias”.</p></td></tr><tr><td>replyEmail</td><td>correo@ejemplo.com</td><td><p>Dirección email para “Responder a”.</p></td></tr><tr><td>mailListsIds[]</td><td>2</td><td><p>Array de Ids de listas de contactos.</p></td></tr><tr><td>segmentId</td><td>1</td><td><p>Id del segmento.</p></td></tr><tr><td>content</td><td><p>%Member:CustomField1% %Member:CustomField2% ¡Mirá las promociones que tenemos para vos!</p></td><td><p>Contenido del email en Html. Puedes incluir campos personalizados utilizando el “Código del campo personalizado” obtenido en el servicio “Obtener detalle de un campo personalizado”.</p></td></tr><tr><td>contentUrl</td><td>http://google.com.ar</td><td><p>Generar contenido html de la campaña desde una url.</p></td></tr><tr><td>trackLinkClicks</td><td>0</td><td><p>Seguir enlaces. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackReads</td><td>0</td><td><p>Contar aperturas. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackAnalitics</td><td>0</td><td><p>Vincular con Google Analytics. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>sendReport</td><td>0</td><td><p>Enviar reporte. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>publicArchive</td><td>1</td><td><p>Agregar al archivo público. Valores posibles: 0/1. Por defecto 0.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_04_29Editarunacampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_04_29Editarunacampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_04_29Editarunacampa_C3_B1a_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_04_29Editarunacampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>4</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>name</td><td>Prueba editar campaña</td><td><p>Nombre de la campaña.</p></td></tr><tr><td>subject</td><td>Hola %Member:CustomField1%</td><td><p>Asunto de la campaña.</p></td></tr><tr><td>previewText</td><td>Texto de vista previa</td><td><p>Texto de vista previa.</p></td></tr><tr><td>fromAlias</td><td>Empresa S.A.</td><td><p>Nombre del remitente.</p></td></tr><tr><td>fromEmail</td><td>empresa@ejemplo.com</td><td><p>Dirección email desde la cuá saldrá la campaña. Requerido solo si se completa el campo “fromAlias”.</p></td></tr><tr><td>replyEmail</td><td>correo@ejemplo.com</td><td><p>Dirección email para “Responder a”.</p></td></tr><tr><td>segmentId</td><td>1</td><td><p>Id del segmento.</p></td></tr><tr><td>contentUrl</td><td>http://google.com.ar</td><td><p>Generar contenido html de la campaña desde una url.</p></td></tr><tr><td>trackLinkClicks</td><td>0</td><td><p>Seguir enlaces. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackReads</td><td>0</td><td><p>Contar aperturas. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackAnalitics</td><td>0</td><td><p>Vincular con Google Analytics. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>sendReport</td><td>0</td><td><p>Enviar reporte. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>publicArchive</td><td>1</td><td><p>Agregar al archivo público. Valores posibles: 0/1. Por defecto 0.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_campaignUpdated",
"mailListsNotFound": [],
"segmentNotFound": []
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_04_29Editarunacampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>4</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>name</td><td>Prueba editar campaña</td><td><p>Nombre de la campaña.</p></td></tr><tr><td>subject</td><td>Hola %Member:CustomField1%</td><td><p>Asunto de la campaña.</p></td></tr><tr><td>previewText</td><td>Texto de vista previa</td><td><p>Texto de vista previa.</p></td></tr><tr><td>fromAlias</td><td>Empresa S.A.</td><td><p>Nombre del remitente.</p></td></tr><tr><td>fromEmail</td><td>empresa@ejemplo.com</td><td><p>Dirección email desde la cuá saldrá la campaña. Requerido solo si se completa el campo “fromAlias”.</p></td></tr><tr><td>replyEmail</td><td>correo@ejemplo.com</td><td><p>Dirección email para “Responder a”.</p></td></tr><tr><td>mailListsIds[]</td><td>2</td><td><p>Array de Ids de listas de contactos.</p></td></tr><tr><td>segmentId</td><td>1</td><td><p>Id del segmento.</p></td></tr><tr><td>contentUrl</td><td>http://google.com.ar</td><td><p>Generar contenido html de la campaña desde una url.</p></td></tr><tr><td>trackLinkClicks</td><td>0</td><td><p>Seguir enlaces. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackReads</td><td>0</td><td><p>Contar aperturas. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackAnalitics</td><td>0</td><td><p>Vincular con Google Analytics. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>sendReport</td><td>0</td><td><p>Enviar reporte. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>publicArchive</td><td>1</td><td><p>Agregar al archivo público. Valores posibles: 0/1. Por defecto 0.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_mailListsIdsOrSegmentId"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_04_29Editarunacampa_C3_B1a_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>4</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>name</td><td>Prueba editar campaña</td><td><p>Nombre de la campaña.</p></td></tr><tr><td>subject</td><td>Hola %Member:CustomField1%</td><td><p>Asunto de la campaña.</p></td></tr><tr><td>previewText</td><td>Texto de vista previa</td><td><p>Texto de vista previa.</p></td></tr><tr><td>fromAlias</td><td>Empresa S.A.</td><td><p>Nombre del remitente.</p></td></tr><tr><td>fromEmail</td><td>empresa@ejemplo.com</td><td><p>Dirección email desde la cuá saldrá la campaña. Requerido solo si se completa el campo “fromAlias”.</p></td></tr><tr><td>replyEmail</td><td>correo@ejemplo.com-</td><td><p>Dirección email para “Responder a”.</p></td></tr><tr><td>segmentId</td><td>1</td><td><p>Id del segmento.</p></td></tr><tr><td>contentUrl</td><td>http://google.com.ar</td><td><p>Generar contenido html de la campaña desde una url.</p></td></tr><tr><td>trackLinkClicks</td><td>0</td><td><p>Seguir enlaces. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackReads</td><td>0</td><td><p>Contar aperturas. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>trackAnalitics</td><td>0</td><td><p>Vincular con Google Analytics. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>sendReport</td><td>0</td><td><p>Enviar reporte. Valores posibles: 0/1. Por defecto 1.</p></td></tr><tr><td>publicArchive</td><td>1</td><td><p>Agregar al archivo público. Valores posibles: 0/1. Por defecto 0.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"replyEmail": [
"invalid_email_format"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-05_29Previsualizarunacampa_C3_B1aporemail"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-05_29Previsualizarunacampa_C3_B1aporemail" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>05) Previsualizar una campaña por email</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/preview/email</h4></a></div><div id="collapse-Campa_C3_B1as-05_29Previsualizarunacampa_C3_B1aporemail" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite previsualizar las campañas por email.<br>Se enviará una vista previa de la campaña a los correos indicados. Si posee campos personalizados en el contenido: toma el valor de algún contacto al azar de la lista asignada o cualquier usuario al azar en el caso que no posea lista.</p><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr><tr><td>errorMsg_warnPreviewLimit</td><td>Limite máximo de envíos diarios excedido.</td></tr><tr><td>errorMsg_notAllowed</td><td>No tiene permitido enviar vistas previas.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>1</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>emails[]</td><td>correo@ejemplo.com</td><td><p>Array de emails. Requerido. Máximo: 5.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_05_29Previsualizarunacampa_C3_B1aporemail_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_05_29Previsualizarunacampa_C3_B1aporemail_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_05_29Previsualizarunacampa_C3_B1aporemail_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_05_29Previsualizarunacampa_C3_B1aporemail_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/preview/email</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>1</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>emails[]</td><td>correo@ejemplo.com</td><td><p>Array de emails. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_emailSended"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_05_29Previsualizarunacampa_C3_B1aporemail_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/preview/email</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>265</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>emails[]</td><td>correo@ejemplo.com</td><td><p>Array de emails. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_05_29Previsualizarunacampa_C3_B1aporemail_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/preview/email</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2-</td><td><p>Id de la campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
],
"emails": [
"required"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-06_29Previsualizarunacampa_C3_B1aporhtml"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-06_29Previsualizarunacampa_C3_B1aporhtml" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>06) Previsualizar una campaña por html</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/preview/html</h4></a></div><div id="collapse-Campa_C3_B1as-06_29Previsualizarunacampa_C3_B1aporhtml" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite previsualizar las campañas por navegador.
Devuelve un Html de la campaña para poder previsualizarla en cualquier navegador.</p><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>1</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>email</td><td>correo@ejemplo.com</td><td><p>Email utilizado para completar los campos personalizados incluidos en la campaña. Si no se envía este dato y la campaña posee campos personalizados los mismos se completarán con datos de contactos al azar.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_06_29Previsualizarunacampa_C3_B1aporhtml_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_06_29Previsualizarunacampa_C3_B1aporhtml_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_06_29Previsualizarunacampa_C3_B1aporhtml_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_06_29Previsualizarunacampa_C3_B1aporhtml_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/preview/html</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>email</td><td>correo@ejemplo.com</td><td><p>Email utilizado para completar los campos personalizados incluidos en la campaña. Si no se envía este dato y la campaña posee campos personalizados los mismos se completarán con datos de contactos al azar.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"html": "&lt;!DOCTYPE html \"-//w3c//dtd xhtml 1.0 transitional //en\" \"http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd\"&gt;&lt;html xmlns=\"http://www.w3.org/1999/xhtml\"&gt;&lt;head&gt;&lt;!--[if gte mso 9]&gt;\n &lt;xml&gt;\n &lt;o:OfficeDocumentSettings&gt;\n &lt;o:AllowPNG/&gt;\n &lt;o:PixelsPerInch&gt;96&lt;/o:PixelsPerInch&gt;\n &lt;/o:OfficeDocumentSettings&gt;\n &lt;/xml&gt;\n&lt;![endif]--&gt;\n&lt;meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"&gt;\n&lt;meta name=\"viewport\" content=\"width=device-width\"&gt;\n&lt;meta http-equiv=\"X-UA-Compatible\" content=\"IE=9; IE=8; IE=7; IE=EDGE\"&gt;\n&lt;!--[if !mso]&gt;&lt;!- - --&gt;&lt;link href=\"https://fonts.googleapis.com/css?family=Droid+Sans|Lato:400,700|Merriweather:400,700|Montserrat:400,700|Raleway:400,700|Roboto:400,700|Source+Sans+Pro:300,400,700\" rel=\"stylesheet\"&gt;\n&lt;!--&lt;![endif]--&gt;&lt;/head&gt;&lt;body style=\"width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF;\"&gt;&lt;style id=\"media-query\"&gt;#outlook a {\n padding: 0;\n}\n\n/* .ExternalClass (Outlook.com) */\n.ExternalClass {\n width: 100%;\n}\n\n.ExternalClass,\n.ExternalClass p,\n.ExternalClass span,\n.ExternalClass font,\n.ExternalClass td,\n.ExternalClass div {\n line-height: 100%;\n}\n\n#backgroundTable {\n margin: 0;\n padding: 0;\n width: 100% !important;\n line-height: 100% !important;\n}\n\n/* Buttons */\n.button a {\n display: inline-block;\n text-decoration: none;\n -webkit-text-size-adjust: none;\n text-align: center;\n}\n\n.button a div {\n text-align: center !important;\n}\n\n/* Outlook First */\nbody.outlook p {\n display: inline !important;\n}\n\n/* Media Queries */\n@media only screen and (max-width: 600px) {\n table[class=\"body\"] img {\n height: auto !important;\n width: 100% !important;\n }\n\n table[class=\"body\"] img.fullwidth {\n max-width: 100% !important;\n }\n\n table[class=\"body\"] center {\n min-width: 0 !important;\n }\n\n table[class=\"body\"] .container {\n width: 95% !important;\n }\n\n table[class=\"body\"] .row {\n width: 100% !important;\n display: block !important;\n }\n\n table[class=\"body\"] .wrapper {\n display: block !important;\n padding-right: 0 !important;\n }\n\n table[class=\"body\"] .columns, table[class=\"body\"] .column {\n table-layout: fixed !important;\n float: none !important;\n width: 100% !important;\n padding-right: 0px !important;\n padding-left: 0px !important;\n display: block !important;\n }\n\n table[class=\"body\"] .wrapper.first .columns, table[class=\"body\"] .wrapper.first .column {\n display: table !important;\n }\n\n table[class=\"body\"] table.columns td, table[class=\"body\"] table.column td, .col {\n width: 100% !important;\n }\n\n table[class=\"body\"] table.columns td.expander {\n width: 1px !important;\n }\n\n table[class=\"body\"] .right-text-pad, table[class=\"body\"] .text-pad-right {\n padding-left: 10px !important;\n }\n\n table[class=\"body\"] .left-text-pad, table[class=\"body\"] .text-pad-left {\n padding-right: 10px !important;\n }\n\n table[class=\"body\"] .hide-for-small, table[class=\"body\"] .show-for-desktop {\n display: none !important;\n }\n\n table[class=\"body\"] .show-for-small, table[class=\"body\"] .hide-for-desktop {\n display: inherit !important;\n }\n\n .mixed-two-up .col {\n width: 100% !important;\n }\n}\n\n@media screen and (max-width: 600px) {\n div[class=\"col\"] {\n width: 100% !important;\n }\n}\n\n@media screen and (min-width: 280px) and (max-width: 600px) {\n\n .under600 {\n width: 100% !important;\n }\n\n}\n\n@media screen and (min-width: 601px) {\n table[class=\"container\"] {\n width: 600px !important;\n }\n}&lt;/style&gt;&lt;!--[if gte mso 12]&gt;\n&lt;style type=\"text/css\"&gt;\n/* Your Outlook-specific CSS goes here. */\n.hideMSO2007{\n display: none !important;\n}\n&lt;/style&gt;\n&lt;![endif]--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\"&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF\" align=\"center\" valign=\"top\" class=\"center\"&gt;&lt;!-- tabla (5)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;!--[if gte mso 9]&gt;\n &lt;table id=\"outlookholder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;&lt;tr&gt;&lt;td&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n &lt;td&gt;\n&lt;![endif]--&gt;&lt;!-- tabla (4)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 600px;margin: 0 auto;text-align: inherit\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\" class=\"container\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 600px;color: #000000;background-color: transparent\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"transparent\" class=\"block-grid\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0; background-color: undefined\"&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;table width=\"100%\" align=\"center\" bgcolor=\"transparent\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;td valign=\"top\" width=\"600\"&gt;\n&lt;![endif]--&gt;&lt;div style=\"display: inline-block; vertical-align: top; text-align: center; width: 600px\" class=\"col\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;font-size: 12px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: undefined;border-right: undefined;border-bottom: undefined;border-left: undefined\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top:20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;p style='text-align:center'&gt;Si no puedes visualizar este mail haz &lt;a href=\"http://49584.clicks.tstes.net/test/click?u=web&amp;p=34393538343a333a303a303a303a31&amp;s=e10e8b823505c80b4e34936f1370864e&amp;m=5\" target='blank'&gt;click aquí&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;![endif]--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;!--[if mso]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;&lt;!-- fin tabla (4)--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;!-- fin tabla (5)--&gt;&lt;/table&gt;&lt;!-- tabla (5)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;!--[if gte mso 9]&gt;\n &lt;table id=\"outlookholder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;&lt;tr&gt;&lt;td&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n &lt;td&gt;\n&lt;![endif]--&gt;&lt;!-- tabla (4)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 600px;margin: 0 auto;text-align: inherit\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\" class=\"container\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 600px;color: #000000;background-color: transparent\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"transparent\" class=\"block-grid\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0; background-color: undefined\"&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;table width=\"100%\" align=\"center\" bgcolor=\"transparent\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;td valign=\"top\" width=\"600\"&gt;\n&lt;![endif]--&gt;&lt;div style=\"display: inline-block; vertical-align: top; text-align: center; width: 600px\" class=\"col\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: #EAEFF2;font-size: 12px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: undefined;border-right: undefined;border-bottom: undefined;border-left: undefined\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top:20px;padding-right: 20px;padding-bottom: 0;padding-left: 20px\" align=\"left\"&gt;&lt;table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"&gt;&lt;tr&gt;&lt;td style=\"padding-right: 0; padding-left: 0; padding-top:7.5px; padding-bottom:7.5px;\"&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top: 0;padding-right: 20px;padding-bottom: 0;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;h1 style=\"text-align: center;font-family:Arial, Helvetica, sans-serif;font-size:36px;color:rgb(4,36,183);line-height:1em;margin: 0 0 0.5em 0; font-weight: normal; letter-spacing: nullpx;\"&gt;Hola María!&lt;/h1&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top: 0;padding-right: 20px;padding-bottom: 0;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;p style=\"text-align: center;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333333;line-height:1.5em;margin: 0 0 0.75em 0; font-weight: normal; letter-spacing: nullpx;\"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor eleifend sagittis. Maecenas at ex eget libero lacinia gravida. Sed volutpat sed nibh sit amet tristique. Vestibulum tellus sapien, porta mollis rhoncus ac, gravida quis nisl. Fusce euismod lorem at risus lobortis aliquam. Nullam erat lorem, consequat a nibh et, euismod aliquam elit. Nam lacus tellus, dapibus ut maximus nec, accumsan at nulla.&lt;/p&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top: 0;padding-right: 20px;padding-bottom: 20px;padding-left: 20px\" align=\"center\"&gt;&lt;table data-table-button=\"data-table-button\" align=\"center\" valign=\"middle\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td width=\"auto\" align=\"center\" valign=\"middle\" style=\"background-color:#dfdfdf; border-top-left-radius:4px; border-bottom-left-radius:4px;border-top-right-radius:4px; border-bottom-right-radius:4px; background-clip: padding-box;font-size:18px; font-family: Courier New, courier, monospace; text-align:center; color:#333333; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border: 1px solid #dfdfdf;\"&gt;&lt;table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td valign=\"middle\" style=\"text-align:null\"&gt;&lt;a data-a-end-button=\"data-a-end-button\" href=\"http://49584.clicks.tstes.net/test/click?u=1431&amp;p=34393538343a333a303a303a313a31&amp;s=e10e8b823505c80b4e34936f1370864e&amp;m=5\" target=\"_blank\" style=\"text-decoration:none; color:#333333; font-family:Courier New, courier, monospace; font-size:18px;font-style:normal;font-weight: normal;letter-spacing: nullpx;\"&gt;Botón&lt;/a&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;![endif]--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;!--[if mso]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;&lt;!-- fin tabla (4)--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;!-- fin tabla (5)--&gt;&lt;/table&gt;&lt;!-- tabla (5)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;!--[if gte mso 9]&gt;\n &lt;table id=\"outlookholder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;&lt;tr&gt;&lt;td&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n &lt;td&gt;\n&lt;![endif]--&gt;&lt;!-- tabla (4)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 600px;margin: 0 auto;text-align: inherit\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\" class=\"container\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 600px;color: #000000;background-color: transparent\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"transparent\" class=\"block-grid\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0; background-color: undefined\"&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;table width=\"100%\" align=\"center\" bgcolor=\"transparent\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;td valign=\"top\" width=\"600\"&gt;\n&lt;![endif]--&gt;&lt;div style=\"display: inline-block; vertical-align: top; text-align: center; width: 600px\" class=\"col\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;font-size: 12px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: undefined;border-right: undefined;border-bottom: undefined;border-left: undefined\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top:20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;p style='text-align:center'&gt;¿Te gustó este mail? &lt;a href=\"http://49584.clicks.tstes.net/test/click?u=forwardto&amp;p=34393538343a333a303a303a323a31&amp;s=e10e8b823505c80b4e34936f1370864e&amp;m=5\" target='blank'&gt;Reenvíalo a un amigo&lt;/a&gt;.&lt;/p&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;![endif]--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;!--[if mso]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;&lt;!-- fin tabla (4)--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;!-- fin tabla (5)--&gt;&lt;/table&gt;&lt;!-- tabla (5)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #E6E7E9\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;!--[if gte mso 9]&gt;\n &lt;table id=\"outlookholder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"&gt;&lt;tr&gt;&lt;td&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;table width=\"600\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n &lt;td&gt;\n&lt;![endif]--&gt;&lt;!-- tabla (4)--&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 600px;margin: 0 auto;text-align: inherit\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\" class=\"container\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\" width=\"100%\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 600px;color: #000000;background-color: transparent\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"transparent\" class=\"block-grid\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0; background-color: undefined\"&gt;&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;table width=\"100%\" align=\"center\" bgcolor=\"transparent\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"&gt;\n &lt;tr&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;\n &lt;td valign=\"top\" width=\"600\"&gt;\n&lt;![endif]--&gt;&lt;div style=\"display: inline-block; vertical-align: top; text-align: center; width: 600px\" class=\"col\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" border=\"0\"&gt;&lt;tbody&gt;&lt;tr style=\"vertical-align: top\"&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: #E6E7E9;font-size: 12px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: undefined;border-right: undefined;border-bottom: undefined;border-left: undefined\"&gt;&lt;table style=\"border-spacing: 0;border-collapse: collapse;vertical-align: top\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%; padding-top:20px;padding-right: 20px;padding-bottom: 20px;padding-left: 20px\" align=\"left\"&gt;&lt;div style=\"font-family: Arial, Helvetica, sans-serif;padding: 2px;word-break: break-word;\"&gt;&lt;p style=\"text-align: center;font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333333;line-height:1.5em;margin: 0 0 0.75em 0; font-weight: normal; letter-spacing: nullpx;\"&gt;Recibes este mail porque est&amp;aacute;s suscripto a nuestra lista de correos.&lt;br /&gt;&lt;u&gt;&lt;a href=\"http://49584.clicks.tstes.net/test/click?u=unsubscribe&amp;p=34393538343a333a303a303a333a31&amp;s=e10e8b823505c80b4e34936f1370864e&amp;m=5\" style=\"text-decoration: none; color: #333333!important\" target=\"_blank\" style=\"text-decoration: none; color: #333333!important\" target=\"_blank\" style=\"text-decoration: none; color: #333333!important\" target=\"_blank\" style=\"text-decoration: none; color: #333333!important\" target=\"_blank\"&gt;Para desuscribirte haz click aqu&amp;iacute;.&lt;/a&gt;&lt;/u&gt;&lt;/p&gt;&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/div&gt;\n&lt;!--[if (gte mso 9)|(IE)]&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;![endif]--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;!--[if mso]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;\n&lt;!--[if (IE)]&gt;\n &lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n&lt;![endif]--&gt;&lt;!-- fin tabla (4)--&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;!-- fin tabla (5)--&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;\n\n&lt;!-- trackReads --&gt;&lt;img src=\"http://49584.reads.tstes.net/demo.png?s=362fd90a4390968eb887717ba5bebec2&amp;AdministratorID=49584&amp;CampaignID=3&amp;Demo=1&amp;MemberID=5&amp;v=6\" width=\"1\" height=\"1\"&gt;&lt;!-- END trackReads --&gt;&lt;/body&gt;&lt;/html&gt;"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_06_29Previsualizarunacampa_C3_B1aporhtml_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/preview/html</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>8</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>email</td><td>correo@ejemplo.com</td><td><p>Email utilizado para completar los campos personalizados incluidos en la campaña. Si no se envía este dato y la campaña posee campos personalizados los mismos se completarán con datos de contactos al azar.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_06_29Previsualizarunacampa_C3_B1aporhtml_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/preview/html</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>8</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>email</td><td>correo@ejemplo.com-</td><td><p>Email utilizado para completar los campos personalizados incluidos en la campaña. Si no se envía este dato y la campaña posee campos personalizados los mismos se completarán con datos de contactos al azar.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"email": [
"invalid_email_format"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-07_29Chequearelestadodelacampa_C3_B1a"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-07_29Chequearelestadodelacampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>07) Chequear el estado de la campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/checkstatus</h4></a></div><div id="collapse-Campa_C3_B1as-07_29Chequearelestadodelacampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Chequea si la campaña cumple con todas las condiciones para poder ser enviada. En la respuesta se incluirán tres secciones adicionales:</p><ul><li><strong>canSend</strong> donde se indicará si la campaña está en condiciones de ser enviada o no.</li><li><strong>errors</strong> donde se mostrará un detalle de los motivos por los cuales no podrá ser enviada la campaña, en caso de existir.</li><li><strong>warnings</strong> donde se mostrará un detalle de advertencias que si bien no impiden enviar la campaña indican cuestiones a mejorar, en caso de existir.</li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-subject</td><td align="center">Es necesario completar el campo subject.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-replyTo</td><td align="center">Es necesario completar el campo replyTo.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-fromToName</td><td align="center">Es necesario completar el campo fromToName.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-fromTo</td><td align="center">Es necesario completar el campo fromTo.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-content</td><td align="center">La campaña no tiene contenido.</td></tr><tr><td align="left">errorMsg_noListNoSegmentSelected</td><td align="center">Es necesario asociar una lista de emails o un segmento.</td></tr><tr><td align="left">errorMsg_campaignPaused</td><td align="center">La campaña está pausada.</td></tr><tr><td align="left">errorMsg_campaignSending</td><td align="center">La campaña está enviándose o programada.</td></tr><tr><td align="left">errorMsg_campaignPendingForApproval</td><td align="center">La campaña está pendiente de aprobación.</td></tr><tr><td align="left">errorMsg_campaignCompleted</td><td align="center">La campaña está enviada.</td></tr><tr><td align="left">errorMsg_maxSimultaneousCampaignLimitExceeded</td><td align="center">Alcanzó el limite máximo de campañas enviándose simultáneamente.</td></tr><tr><td align="left">errorMsg_senderDomainNotVerified</td><td align="center">El dominio no está verificado.</td></tr><tr><td align="left">errorMsg_noContactsInMailLists</td><td align="center">Alguna de las listas no poseen contactos.</td></tr><tr><td align="left">errorMsg_noContactsInSegments</td><td align="center">El segmento no posee contactos.</td></tr><tr><td align="left">errorMsg_contactListFilter</td><td align="center">No tienes permiso para enviar campañas.</td></tr><tr><td align="left">errorMsg_spamRateErrorThreshold</td><td align="center">La campaña no pasó el chequeo de SPAM.</td></tr><tr><td align="left">errorMsg_invalidMaillistsSelected</td><td align="center">Alguna de las listas asociadas a la campaña no existe.</td></tr></tbody></table><p><strong>Advertencias:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignIntegrityFail-subjectShort</td><td align="center">El campo subject es corto</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-subjectLong</td><td align="center">El campo subject es largo.</td></tr><tr><td align="left">errorMsg_spamRateWarningThreshold</td><td align="center">La campaña pasó el chequeo de SPAM, pero puedes mejorar el resultado.</td></tr><tr><td align="left">errorMsg_senderDomainNotAuthenticated</td><td align="center">Dominio no autenticado.</td></tr><tr><td align="left">errorMsg_senderDmarcAllowedDomain</td><td align="center">Se recomienda usar dominios propios para mantener una buena reputación y mejorar tu capacidad de entrega.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3</td><td><p>Id de la campaña. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_07_29Chequearelestadodelacampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_07_29Chequearelestadodelacampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_07_29Chequearelestadodelacampa_C3_B1a_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_07_29Chequearelestadodelacampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/checkstatus</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>4</td><td><p>Id de la campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"canSend": true,
"errors": [],
"warnings": [
"errorMsg_senderDomainNotAuthenticated"
]
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_07_29Chequearelestadodelacampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/checkstatus</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>40</td><td><p>Id de la campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_07_29Chequearelestadodelacampa_C3_B1a_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/checkstatus</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>1-</td><td><p>Id de la campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-08_29Enviarcampa_C3_B1a"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-08_29Enviarcampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>08) Enviar campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/send</h4></a></div><div id="collapse-Campa_C3_B1as-08_29Enviarcampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite enviar una campaña en borrador o detenida, teniendo en cuenta que:</p><ul><li>Si la campaña está en borrador, siempre hay que indicar el campo Enviar ahora.</li><li>Si la campaña está detenida, si se indica el campo Enviar ahora tomará el valor indicado, caso contrario se reanudará con los valores que ya tenga configurado.</li></ul><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la campaña enviada</td></tr><tr><td align="left">status</td><td align="center">Pending</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignPaused</td><td align="center">La campaña está pausada.</td></tr><tr><td align="left">errorMsg_campaignSending</td><td align="center">La campaña está enviándose o programada.</td></tr><tr><td align="left">errorMsg_campaignPendingForApproval</td><td align="center">La campaña está pendiente de aprobación.</td></tr><tr><td align="left">errorMsg_campaignCompleted</td><td align="center">La campaña está enviada.</td></tr><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-subject</td><td align="center">Es necesario completar el campo subject.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-replyTo</td><td align="center">Es necesario completar el campo replyTo.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-fromToName</td><td align="center">Es necesario completar el campo fromToName.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-fromTo</td><td align="center">Es necesario completar el campo fromTo.</td></tr><tr><td align="left">errorMsg_campaignIntegrityFail-content</td><td align="center">La campaña no tiene contenido.</td></tr><tr><td align="left">errorMsg_noListNoSegmentSelected</td><td align="center">Es necesario asociar una lista de emails o un segmento.</td></tr><tr><td align="left">errorMsg_maxSimultaneousCampaignLimitExceeded</td><td align="center">Alcanzó el limite máximo de campañas enviándose simultáneamente.</td></tr><tr><td align="left">errorMsg_senderDomainNotVerified</td><td align="center">El dominio no está verificado.</td></tr><tr><td align="left">errorMsg_noContactsInMailLists</td><td align="center">Alguna de las listas no poseen contactos.</td></tr><tr><td align="left">errorMsg_noContactsInSegments</td><td align="center">El segmento no posee contactos.</td></tr><tr><td align="left">errorMsg_contactListFilter</td><td align="center">No tienes permiso para enviar campañas.</td></tr><tr><td align="left">errorMsg_spamRateErrorThreshold</td><td align="center">La campaña no pasó el chequeo de SPAM.</td></tr><tr><td align="left">errorMsg_invalidMaillistsSelected</td><td align="center">Alguna de las listas asociadas a la campaña no existe.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>4</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>sendNow</td><td>0</td><td><p>Enviar ahora. Valores posibles: 1 (Enviar ahora) y 0 (Programar). Sólo es requerido cuando la campaña está en borrador.</p></td></tr><tr><td>sendDate</td><td>2022-12-31 11:00:00</td><td><p>Fecha de programación de la campaña. Formato: YYYY-MM-DD HH:MM:DD. Tiene que ser mayor a la fecha y hora actual. Requerido, si sendNow = 0 (Programar).</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_08_29Enviarcampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_08_29Enviarcampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_08_29Enviarcampa_C3_B1a_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_08_29Enviarcampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/send</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>sendNow</td><td>0</td><td><p>Enviar ahora. Valores posibles: 1 (Enviar ahora) y 0 (Programar). Sólo es requerido cuando la campaña está en borrador.</p></td></tr><tr><td>sendDate</td><td>2022-12-31 11:00:00</td><td><p>Fecha de programación de la campaña. Formato: YYYY-MM-DD HH:MM:DD. Tiene que ser mayor a la fecha y hora actual. Requerido, si sendNow = 0 (Programar).</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_campaignSended",
"data": {
"campaign": {
"id": 3,
"status": "Pending"
}
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_08_29Enviarcampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/send</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>sendNow</td><td>0</td><td><p>Enviar ahora. Valores posibles: 1 (Enviar ahora) y 0 (Programar). Sólo es requerido cuando la campaña está en borrador.</p></td></tr><tr><td>sendDate</td><td>2022-13-31 11:00:00</td><td><p>Fecha de programación de la campaña. Formato: YYYY-MM-DD HH:MM:DD. Tiene que ser mayor a la fecha y hora actual. Requerido, si sendNow = 0 (Programar).</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": [
"errorMsg_campaignIntegrityFail-replyTo",
"errorMsg_campaignIntegrityFail-fromToName",
"errorMsg_campaignIntegrityFail-fromTo",
"errorMsg_noListNoSegmentSelected"
]
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_08_29Enviarcampa_C3_B1a_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/send</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>4</td><td><p>Id de la campaña. Requerido.</p></td></tr><tr><td>sendNow</td><td>0</td><td><p>Enviar ahora. Valores posibles: 1 (Enviar ahora) y 0 (Programar). Sólo es requerido cuando la campaña está en borrador.</p></td></tr><tr><td>sendDate</td><td>2022-13-31 11:00:00</td><td><p>Fecha de programación de la campaña. Formato: YYYY-MM-DD HH:MM:DD. Tiene que ser mayor a la fecha y hora actual. Requerido, si sendNow = 0 (Programar).</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"sendDate": [
"invalid_date_format"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-09_29Pausarcampa_C3_B1a"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-09_29Pausarcampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>09) Pausar campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/pause</h4></a></div><div id="collapse-Campa_C3_B1as-09_29Pausarcampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite pausar una campaña que está enviándose, programada o en revisión.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la campaña pausada.</td></tr><tr><td align="left">status</td><td align="center">Paused</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr><tr><td align="left">errorMsg_campaignNotActive</td><td align="center">La campaña está en borrador.</td></tr><tr><td align="left">errorMsg_campaignPaused</td><td align="center">La campaña ya está pausada.</td></tr><tr><td align="left">errorMsg_campaignCompleted</td><td align="center">La campaña está enviada.</td></tr><tr><td align="left">errorMsg_campaignStopped</td><td align="center">La campaña está detenida.</td></tr><tr><td align="left">errorMsg_campaignNotPaused</td><td align="center">La campaña no pudo ser pausada.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>112</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_09_29Pausarcampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_09_29Pausarcampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_09_29Pausarcampa_C3_B1a_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_09_29Pausarcampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/pause</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>112</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_campaignPaused",
"data": {
"campaign": {
"id": 112,
"status": "Paused"
}
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_09_29Pausarcampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/pause</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>112</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignStopped"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_09_29Pausarcampa_C3_B1a_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/pause</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>12-</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-10_29Detenercampa_C3_B1a"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-10_29Detenercampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>10) Detener campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/stop</h4></a></div><div id="collapse-Campa_C3_B1as-10_29Detenercampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite detener una campaña que está enviándose, programada, en revisión o pausada.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la campaña detenida</td></tr><tr><td align="left">status</td><td align="center">Stopped</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr><tr><td align="left">errorMsg_campaignNotActive</td><td align="center">La campaña está en borrador.</td></tr><tr><td align="left">errorMsg_campaignCompleted</td><td align="center">La campaña está enviada.</td></tr><tr><td align="left">errorMsg_campaignStopped</td><td align="center">La campaña ya está detenida.</td></tr><tr><td align="left">errorMsg_campaignNotStopped</td><td align="center">La campaña no pudo ser detenida.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>112</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_10_29Detenercampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_10_29Detenercampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_10_29Detenercampa_C3_B1a_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_10_29Detenercampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/stop</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>112</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_campaignPaused",
"data": {
"campaign": {
"id": 112,
"status": "Stopped"
}
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_10_29Detenercampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/stop</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>256</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_10_29Detenercampa_C3_B1a_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/stop</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>12+</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-11_29Reanudarcampa_C3_B1a"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-11_29Reanudarcampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>11) Reanudar campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/resume</h4></a></div><div id="collapse-Campa_C3_B1as-11_29Reanudarcampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite reanudar una campaña detenida o pausada.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la campaña reanudada</td></tr><tr><td align="left">status</td><td align="center">Sending</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr><tr><td align="left">errorMsg_campaignSending</td><td align="center">La campaña está enviándose o programada.</td></tr><tr><td align="left">errorMsg_campaignPendingForApproval</td><td align="center">La campaña está pendiente de aprobación .</td></tr><tr><td align="left">errorMsg_campaignCompleted</td><td align="center">La camapaña está enviada.</td></tr><tr><td align="left">errorMsg_campaignNotPausedOrStopped</td><td align="center">La campaña está en borrador.</td></tr><tr><td align="left">campaignBlocked</td><td align="center">Se detectaron ciertos inconvenientes en el contenido de tu campaña.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>197</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_11_29Reanudarcampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_11_29Reanudarcampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_11_29Reanudarcampa_C3_B1a_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_11_29Reanudarcampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/resume</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>243</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_campaignResumed",
"data": {
"campaign": {
"id": 243,
"status": "Pending"
}
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_11_29Reanudarcampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/resume</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>256</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_11_29Reanudarcampa_C3_B1a_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/resume</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>24o</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Campa_C3_B1as-12_29Eliminarcampa_C3_B1a"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campa_C3_B1as" href="#collapse-Campa_C3_B1as-12_29Eliminarcampa_C3_B1a" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>12) Eliminar campaña</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/campaign/delete</h4></a></div><div id="collapse-Campa_C3_B1as-12_29Eliminarcampa_C3_B1a" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite eliminar una campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la campaña que fue eliminada</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>113</td><td><p>Id de campaña a eliminar. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campa_C3_B1as_12_29Eliminarcampa_C3_B1a_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campa_C3_B1as_12_29Eliminarcampa_C3_B1a_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campa_C3_B1as_12_29Eliminarcampa_C3_B1a_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campa_C3_B1as_12_29Eliminarcampa_C3_B1a_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/delete</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>113</td><td><p>Id de campaña a eliminar. Requerido. Máximo: 100 registros.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_campaignDeleted",
"data": {
"campaign": {
"id": 113
}
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campa_C3_B1as_12_29Eliminarcampa_C3_B1a_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/delete</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>256</td><td><p>Id de campaña a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campa_C3_B1as_12_29Eliminarcampa_C3_B1a_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/campaign/delete</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>113-</td><td><p>Id de campaña a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Campospersonalizados">Campos personalizados
<span class="badge">7</span></h3></div><div class="panel-body"><p></p><p>Este módulo agrupa servicios para la gestión de campos personalizados utilizados para la información de los contactos, los formularios de suscripción y la personalización de tus campañas.</p><div class="request-item"><div class="panel-group" id="accordion-Campospersonalizados"><div class="panel panel-success" id="jump-Campospersonalizados-01_29Obtenercolecci_C3_B3ndecampospersonalizados"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campospersonalizados" href="#collapse-Campospersonalizados-01_29Obtenercolecci_C3_B3ndecampospersonalizados" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Obtener colección de campos personalizados</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/customfields/getall</h4></a></div><div id="collapse-Campospersonalizados-01_29Obtenercolecci_C3_B3ndecampospersonalizados" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve una lista con todos los campos personalizados. Pueden filtrarse por nombre.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID del campo personalizado</td></tr><tr><td align="left">name</td><td align="center">Nombre del campo personalizado</td></tr><tr><td align="left">code</td><td align="center">Código del campo personalizado.<br>Con este código podrás incluir los campos personalizados en el asunto y contenido de la campaña</td></tr><tr><td align="left">type</td><td align="center">Tipo de campo. Ver los posibles valores en: <strong>Obtener tipos de campos personalizados</strong></td></tr><tr><td align="left">validation</td><td align="center">Tipo de validación. Ver los posibles valores en: <strong>Obtener validaciones de campos personalizados</strong>. Se muestra solo para Tipo de campo = Campo de texto o Campo oculto</td></tr><tr><td align="left">validationCustomRegExp</td><td align="center">Validación personalizada. Se muestra solo si Validación = Personalizada)</td></tr><tr><td align="left">options_values</td><td align="center">Opciones posibles. Se muestra solo para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única</td></tr><tr><td align="left">value_default</td><td align="center">Valor por defecto. Se muestra solo para Tipo de campo = Campo de texto o Campo oculto o Evento anual</td></tr><tr><td align="left">date_value</td><td align="center">Fecha por defecto. Se muestra solo para Tipo de campo = Evento anual</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>campo</td><td><p>Filtro por nombre o parte del nombre del campo personalizado.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>name</td><td><p>Criterio para ordenar los campos. Valores posibles: nombre/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campospersonalizados_01_29Obtenercolecci_C3_B3ndecampospersonalizados_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campospersonalizados_01_29Obtenercolecci_C3_B3ndecampospersonalizados_1_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campospersonalizados_01_29Obtenercolecci_C3_B3ndecampospersonalizados_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los campos. Valores posibles: nombre/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"id": 1,
"name": "Nombre",
"code": "%Member:CustomField1%",
"type": "Text field",
"validation": "",
"validationCustomRegExp": "",
"options_values": null,
"value_default": "",
"date_value": null
},
{
"id": 2,
"name": "Apellido",
"code": "%Member:CustomField2%",
"type": "Text field",
"validation": "",
"validationCustomRegExp": "",
"options_values": null,
"value_default": "",
"date_value": null
},
{
"id": 3,
"name": "País",
"code": "%Member:CustomField3%",
"type": "Drop list",
"validation": "Do not Apply",
"validationCustomRegExp": "",
"options_values": "Argentina,Chile,Colombia,México,Uruguay,Brasil",
"value_default": null,
"date_value": null
},
{
"id": 4,
"name": "Género",
"code": "%Member:CustomField4%",
"type": "Radio button",
"validation": "Do not Apply",
"validationCustomRegExp": "",
"options_values": "Masculino,Femenino,Otro",
"value_default": null,
"date_value": null
}
],
"first_page_url": "http://api.catatrepa.com/customfields/getall?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http://api.catatrepa.com/customfields/getall?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "http://api.catatrepa.com/customfields/getall?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "http://api.catatrepa.com/customfields/getall",
"per_page": "10",
"prev_page_url": null,
"to": 4,
"total": 4
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campospersonalizados_01_29Obtenercolecci_C3_B3ndecampospersonalizados_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los campos. Valores posibles: nombre/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>ascen</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"order": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-info" id="jump-Campospersonalizados-02_29Obtenerdetalledeuncampopersonalizado"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Campospersonalizados" href="#collapse-Campospersonalizados-02_29Obtenerdetalledeuncampopersonalizado" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>02) Obtener detalle de un campo personalizado</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/customfields/:customfield_id</h4></a></div><div id="collapse-Campospersonalizados-02_29Obtenerdetalledeuncampopersonalizado" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de un campo personalizado.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID del campo personalizado.</td></tr><tr><td align="left">name</td><td align="center">Nombre del campo personalizado</td></tr><tr><td align="left">code</td><td align="center">Código del campo personalizado.<br>Con este código podrás incluir los campos personalizados en el asunto y contenido de la campaña</td></tr><tr><td align="left">type</td><td align="center">Tipo de campo. Ver los posibles valores en: <strong>Obtener tipos de campos personalizados</strong></td></tr><tr><td align="left">validation</td><td align="center">Tipo de validación. Ver los posibles valores en: <strong>Obtener validaciones de campos personalizados</strong> Se muestra solo para Tipo de campo = Campo de texto o Campo oculto.</td></tr><tr><td align="left">validationCustomRegExp</td><td align="center">Validación personalizada. Se muestra solo si Validación = Personalizada)</td></tr><tr><td align="left">options_values</td><td align="center">Opciones posibles. Se muestra solo para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única</td></tr><tr><td align="left">value_default</td><td align="center">Valor por defecto. Se muestra solo para Tipo de campo = Campo de texto o Campo oculto o Evento anual</td></tr><tr><td align="left">date_value</td><td align="center">Fecha por defecto. Se muestra solo para Tipo de campo = Evento anual</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_customFieldNotFound</td><td align="center">No existe campo personalizado con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>customfield_id</td><td>3</td><td><p>Id del campo personalizado.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campospersonalizados_02_29Obtenerdetalledeuncampopersonalizado_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campospersonalizados_02_29Obtenerdetalledeuncampopersonalizado_1_Error_28Status400_29">Error (Status 400)</option></select><br><section id="req_res_Campospersonalizados_02_29Obtenerdetalledeuncampopersonalizado_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/:customfield_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>customfield_id</td><td>3</td><td><p>Id del campo personalizado. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"id": 3,
"name": "País",
"code": "%Member:CustomField3%",
"type": "Drop list",
"validation": "Do not Apply",
"validationCustomRegExp": "",
"options_values": "Argentina,Chile,Colombia,México,Uruguay,Brasil",
"value_default": null,
"date_value": null
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campospersonalizados_02_29Obtenerdetalledeuncampopersonalizado_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/:customfield_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>customfield_id</td><td>33</td><td><p>Id del campo personalizado. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_customFieldNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section></div></div></div><div class="panel panel-info" id="jump-Campospersonalizados-03_29Obtenervalidacionesdecampospersonalizados"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Campospersonalizados" href="#collapse-Campospersonalizados-03_29Obtenervalidacionesdecampospersonalizados" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>03) Obtener validaciones de campos personalizados</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/customfields/getvalidations</h4></a></div><div id="collapse-Campospersonalizados-03_29Obtenervalidacionesdecampospersonalizados" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve un listado de tipos de validaciones que serán utilizados en la creación y/o edición de los campos personalizados tipo = Campo de texto o Campo oculto.</p><p><strong>Detalle de los valores:</strong></p><p>A continuación se deja una descripción de los valores actuales:</p><table class="table table-hover"><thead><tr><th align="left">Valor</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">Do not Apply</td><td align="center">Desactivar</td></tr><tr><td align="left">Numeric Only</td><td align="center">Aceptar sólo dígitos</td></tr><tr><td align="left">Alpha Only</td><td align="center">Aceptar solo letras y espacios</td></tr><tr><td align="left">Alpha Numeric Only</td><td align="center">Aceptar solo letras, números y espacios</td></tr><tr><td align="left">Email Format Check</td><td align="center">Aceptar sólo direcciones de correo</td></tr><tr><td align="left">Custom</td><td align="center">Personalizada</td></tr></tbody></table></small><br><br><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campospersonalizados_03_29Obtenervalidacionesdecampospersonalizados_0_Ok_28Status200_29">Ok (Status 200)</option></select><br><section id="req_res_Campospersonalizados_03_29Obtenervalidacionesdecampospersonalizados_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/getvalidations</h5><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": [
"Do not Apply",
"Numeric Only",
"Alpha Only",
"Alpha Numeric Only",
"Email Format Check",
"Custom"
]
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section></div></div></div><div class="panel panel-info" id="jump-Campospersonalizados-04_29Obtenertiposdecampospersonalizados"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Campospersonalizados" href="#collapse-Campospersonalizados-04_29Obtenertiposdecampospersonalizados" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>04) Obtener tipos de campos personalizados</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/customfields/gettypes</h4></a></div><div id="collapse-Campospersonalizados-04_29Obtenertiposdecampospersonalizados" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve un listado de tipos de campos que serán utilizados en la creación y/o edición de los campo personalizados.</p><p><strong>Detalle de los valores:</strong></p><p>A continuación se deja una descripción de los valores actuales:</p><table class="table table-hover"><thead><tr><th align="left">Valor</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">Text field</td><td align="center">Campo de texto</td></tr><tr><td align="left">Hidden field</td><td align="center">Campo oculto</td></tr><tr><td align="left">Check box</td><td align="center">Listado con selección múltiple</td></tr><tr><td align="left">Radio button</td><td align="center">Listado con selección única</td></tr><tr><td align="left">Anual Date</td><td align="center">Evento anual</td></tr><tr><td align="left">Drop list</td><td align="center">Listado</td></tr></tbody></table></small><br><br><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campospersonalizados_04_29Obtenertiposdecampospersonalizados_0_Ok_28Status200_29">Ok (Status 200)</option></select><br><section id="req_res_Campospersonalizados_04_29Obtenertiposdecampospersonalizados_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/gettypes</h5><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": [
"Text field",
"Hidden field",
"Check box",
"Radio button",
"Anual Date",
"Drop list"
]
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section></div></div></div><div class="panel panel-success" id="jump-Campospersonalizados-05_29Crearcampopersonalizado"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campospersonalizados" href="#collapse-Campospersonalizados-05_29Crearcampopersonalizado" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>05) Crear campo personalizado</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/customfields/create</h4></a></div><div id="collapse-Campospersonalizados-05_29Crearcampopersonalizado" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite crear un nuevo campo personalizado, teniendo en cuenta las siguientes consideraciones:</p><ul><li>Siempre será requerido: Nombre y Tipo de campo.</li><li>Para campos tipo = Campo de texto o Campo oculto, siempre se pedirán los siguientes parámetros:<ul><li>Tipo de validación. Es requerido indicar un valor.</li><li>Expresión regular. Es requerido indicar un valor para Validación = Personalizada.</li><li>Valor por defecto. No es requerido indicar un valor por lo que puede quedar en blanco.</li></ul></li><li>Para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única siempre se pedirá el parámetro Opciones, siendo requerido indicar un valor.</li><li>Para Tipo de campo = Evento anual, siempre se pedirá el parámetro
Valor por defecto pero no es requerido indicar un valor por lo que puede quedar en blanco.</li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">valueDefaultWithValidationCustomRegExp</td><td align="center">El valor por defecto no cumple con la validación personalizada.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Apellido</td><td><p>Nombre del campo. Requerido.</p></td></tr><tr><td>type</td><td>Text field</td><td><p>Tipo de campo. Ver los posibles valores en: Obtener tipos de campos personalizados. Requerido.</p></td></tr><tr><td>validation_type</td><td>Do not Apply</td><td><p>Tipo de validación. Ver los posibles valores en: Obtener validaciones de campos personalizados. Requerido. si Tipo de campo = Campo de texto o Campo oculto.</p></td></tr><tr><td>validationCustomRegExp</td><td>/^[0-9]*$/</td><td><p>Expresion regular para la validación del campo. Requerido para Validación = Personalizada.</p></td></tr><tr><td>value_default</td><td>Desconocido</td><td><p>Valor por defecto. Requerido para Tipo de campo = Campo de texto o Campo oculto. Puede quedar en blanco el valor.</p></td></tr><tr><td>options_values[]</td><td>Opción1</td><td><p>Array con valores de las opciones. Es requerido indicar al menos una opción con valor para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única.</p></td></tr><tr><td>date_value</td><td>02-28</td><td><p>Fecha anual por defecto. Formato: MM-DD. Requerido para Tipo de campo = Evento anual. Puede quedar en blanco el valor.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campospersonalizados_05_29Crearcampopersonalizado_0_Error_28Status422_29">Error (Status 422)
</option><option value="req_res_Campospersonalizados_05_29Crearcampopersonalizado_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campospersonalizados_05_29Crearcampopersonalizado_2_Ok_28Status200_29">Ok (Status 200)</option></select><br><section id="req_res_Campospersonalizados_05_29Crearcampopersonalizado_0_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Numero de cliente</td><td><p>Nombre del campo. Requerido.</p></td></tr><tr><td>type</td><td>Text field</td><td><p>Tipo de campo. Ver los posibles valores en: Obtener tipos de campos personalizados. Requerido.</p></td></tr><tr><td>validation_type</td><td>Numeric Only</td><td><p>Tipo de validación. Ver los posibles valores en: Obtener validaciones de campos personalizados. Requerido. si Tipo de campo = Campo de texto o Campo oculto.</p></td></tr><tr><td>value_default</td><td>Num</td><td><p>Valor por defecto. Requerido para Tipo de campo = Campo de texto o Campo oculto. Puede quedar en blanco el valor.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"value_default": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section><section id="req_res_Campospersonalizados_05_29Crearcampopersonalizado_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Numero de cliente</td><td><p>Nombre del campo. Requerido.</p></td></tr><tr><td>type</td><td>Text field</td><td><p>Tipo de campo. Ver los posibles valores en: Obtener tipos de campos personalizados. Requerido.</p></td></tr><tr><td>validation_type</td><td>Custom</td><td><p>Tipo de validación. Ver los posibles valores en: Obtener validaciones de campos personalizados. Requerido. si Tipo de campo = Campo de texto o Campo oculto.</p></td></tr><tr><td>validationCustomRegExp</td><td>/^[0-9]*$/</td><td><p>Expresion regular para la validación del campo. Requerido para Validación = Personalizada.</p></td></tr><tr><td>value_default</td><td>Num</td><td><p>Valor por defecto. Requerido para Tipo de campo = Campo de texto o Campo oculto. Puede quedar en blanco el valor.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_valueDefaultWithValidationCustomRegExp"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campospersonalizados_05_29Crearcampopersonalizado_2_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Numero de cliente</td><td><p>Nombre del campo. Requerido.</p></td></tr><tr><td>type</td><td>Text field</td><td><p>Tipo de campo. Ver los posibles valores en: Obtener tipos de campos personalizados. Requerido.</p></td></tr><tr><td>validation_type</td><td>Custom</td><td><p>Tipo de validación. Ver los posibles valores en: Obtener validaciones de campos personalizados. Requerido. si Tipo de campo = Campo de texto o Campo oculto.</p></td></tr><tr><td>validationCustomRegExp</td><td>/^[0-9]*$/</td><td><p>Expresion regular para la validación del campo. Requerido para Validación = Personalizada.</p></td></tr><tr><td>value_default</td><td></td><td><p>Valor por defecto. Requerido para Tipo de campo = Campo de texto o Campo oculto. Puede quedar en blanco el valor.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_customFieldCreated",
"data": {
"id": 5,
"name": "Numero de cliente"
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section></div></div></div><div class="panel panel-success" id="jump-Campospersonalizados-06_29Editaruncampopersonalizado"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Campospersonalizados" href="#collapse-Campospersonalizados-06_29Editaruncampopersonalizado" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>06) Editar un campo personalizado</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/customfields/edit</h4></a></div><div id="collapse-Campospersonalizados-06_29Editaruncampopersonalizado" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite editar un campo personalizado, teniendo en cuenta las siguientes consideraciones:</p><ul><li>Siempre será requerido: Nombre y Tipo de campo.</li><li>Para campos tipo = Campo de texto o Campo oculto, siempre se pedirán los siguientes parámetros:<ul><li>Tipo de validación. Es requerido indicar un valor.</li><li>Expresión regular. Es requerido indicar un valor para Validación = Personalizada.</li><li>Valor por defecto. No es requerido indicar un valor por lo que puede quedar en blanco.</li></ul></li><li>Para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única siempre se pedirá el parámetro Opciones, siendo requerido indicar un valor.</li><li>Para Tipo de campo = Evento anual, siempre se pedirá el parámetro
Valor por defecto pero no es requerido indicar un valor por lo que puede quedar en blanco.</li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripcion</th></tr></thead><tbody><tr><td align="left">errorMsg_customFieldNotFound</td><td align="center">No existe campo personalizado con el ID informado.</td></tr><tr><td align="left">valueDefaultWithValidationCustomRegExp</td><td align="center">El valor por defecto no cumple con la validación personalizada.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>8</td><td><p>Id de campo personalizado a modificar. Requerido.</p></td></tr><tr><td>name</td><td>Fecha de nacimiento</td><td><p>Nombre del campo. Requerido.</p></td></tr><tr><td>type</td><td>Anual Date</td><td><p>Tipo de campo. Ver los posibles valores en: Obtener tipos de campos personalizados. Requerido.</p></td></tr><tr><td>validation_type</td><td>Custom</td><td><p>Tipo de validación. Ver los posibles valores en: Obtener validaciones de campos personalizados. Requerido. si Tipo de campo = Campo de texto o Campo oculto.</p></td></tr><tr><td>validationCustomRegExp</td><td>/^[0-9]*$/</td><td><p>Expresion regular para la validación del campo. Requerido para Validación = Personalizada.</p></td></tr><tr><td>value_default</td><td>Desconocido</td><td><p>Valor por defecto. Requerido para Tipo de campo = Campo de texto o Campo oculto. Puede quedar en blanco el valor.</p></td></tr><tr><td>options_values[]</td><td>Opción1</td><td><p>Array con valores de las opciones. Es requerido indicar al menos una opción con valor para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única.</p></td></tr><tr><td>date_value</td><td>02-29</td><td><p>Fecha anual por defecto. Formato: MM-DD. Requerido para Tipo de campo = Evento anual. Puede quedar en blanco el valor.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campospersonalizados_06_29Editaruncampopersonalizado_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Campospersonalizados_06_29Editaruncampopersonalizado_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campospersonalizados_06_29Editaruncampopersonalizado_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Campospersonalizados_06_29Editaruncampopersonalizado_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id de campo personalizado a modificar. Requerido.</p></td></tr><tr><td>name</td><td>Fecha de nacimiento</td><td><p>Nombre del campo. Requerido.</p></td></tr><tr><td>type</td><td>Anual Date</td><td><p>Tipo de campo. Ver los posibles valores en: Obtener tipos de campos personalizados. Requerido.</p></td></tr><tr><td>date_value</td><td>02-29</td><td><p>Fecha anual por defecto. Formato: MM-DD. Requerido para Tipo de campo = Evento anual. Puede quedar en blanco el valor.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_customFieldUpdated"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Campospersonalizados_06_29Editaruncampopersonalizado_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>8</td><td><p>Id de campo personalizado a modificar. Requerido.</p></td></tr><tr><td>name</td><td>Fecha de nacimiento</td><td><p>Nombre del campo. Requerido.</p></td></tr><tr><td>type</td><td>Anual Date</td><td><p>Tipo de campo. Ver los posibles valores en: Obtener tipos de campos personalizados. Requerido.</p></td></tr><tr><td>validation_type</td><td>Custom</td><td><p>Tipo de validación. Ver los posibles valores en: Obtener validaciones de campos personalizados. Requerido. si Tipo de campo = Campo de texto o Campo oculto.</p></td></tr><tr><td>validationCustomRegExp</td><td>/^[0-9]*$/</td><td><p>Expresion regular para la validación del campo. Requerido para Validación = Personalizada.</p></td></tr><tr><td>value_default</td><td>Desconocido</td><td><p>Valor por defecto. Requerido para Tipo de campo = Campo de texto o Campo oculto. Puede quedar en blanco el valor.</p></td></tr><tr><td>options_values[]</td><td>Opción1</td><td><p>Array con valores de las opciones. Es requerido indicar al menos una opción con valor para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única.</p></td></tr><tr><td>date_value</td><td>02-29</td><td><p>Fecha anual por defecto. Formato: MM-DD. Requerido para Tipo de campo = Evento anual. Puede quedar en blanco el valor.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_customFieldNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campospersonalizados_06_29Editaruncampopersonalizado_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id de campo personalizado a modificar. Requerido.</p></td></tr><tr><td>name</td><td>Fecha de nacimiento</td><td><p>Nombre del campo. Requerido.</p></td></tr><tr><td>type</td><td>Anual Dates</td><td><p>Tipo de campo. Ver los posibles valores en: Obtener tipos de campos personalizados. Requerido.</p></td></tr><tr><td>validation_type</td><td>Custom</td><td><p>Tipo de validación. Ver los posibles valores en: Obtener validaciones de campos personalizados. Requerido. si Tipo de campo = Campo de texto o Campo oculto.</p></td></tr><tr><td>validationCustomRegExp</td><td>/^[0-9]*$/</td><td><p>Expresion regular para la validación del campo. Requerido para Validación = Personalizada.</p></td></tr><tr><td>value_default</td><td>Desconocido</td><td><p>Valor por defecto. Requerido para Tipo de campo = Campo de texto o Campo oculto. Puede quedar en blanco el valor.</p></td></tr><tr><td>options_values[]</td><td>Opción1</td><td><p>Array con valores de las opciones. Es requerido indicar al menos una opción con valor para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única.</p></td></tr><tr><td>date_value</td><td>02-29</td><td><p>Fecha anual por defecto. Formato: MM-DD. Requerido para Tipo de campo = Evento anual. Puede quedar en blanco el valor.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"type": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-info" id="jump-Campospersonalizados-07_29Eliminarcampopersonalizado"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Campospersonalizados" href="#collapse-Campospersonalizados-07_29Eliminarcampopersonalizado" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>07) Eliminar campo personalizado</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/customfields/delete/:customfield_id</h4></a></div><div id="collapse-Campospersonalizados-07_29Eliminarcampopersonalizado" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite eliminar una campo personalizado siempre que el mismo no esté siendo usado en algún segmento, formulario o automation.</p><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_customFieldNotFound</td><td align="center">No existe campo personalizado con el ID informado.</td></tr><tr><td align="left">errorMsg_customFieldIsUsed</td><td align="center">No puede eliminarse el campo personalizado debido a que está siendo usado en algún segmento, formulario o automation.</td></tr></tbody></table></small><br><br><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>customfield_id</td><td>5</td><td><p>id del campo personalizado a eliminar. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Campospersonalizados_07_29Eliminarcampopersonalizado_0_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Campospersonalizados_07_29Eliminarcampopersonalizado_1_Ok_28Status200_29">Ok (Status 200)</option></select><br><section id="req_res_Campospersonalizados_07_29Eliminarcampopersonalizado_0_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/delete/:customfield_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>customfield_id</td><td>38</td><td><p>id del campo personalizado a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_customFieldNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Campospersonalizados_07_29Eliminarcampopersonalizado_1_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/customfields/delete/:customfield_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>customfield_id</td><td>2</td><td><p>id del campo personalizado a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_customFieldDeleted"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Contactos">Contactos
<span class="badge">7</span></h3></div><div class="panel-body"><p></p><p>Este modulo te permitirá realizar toda la gestión asociada a contactos que luego serán utilizados en listas y/o segmentos.</p><div class="request-item"><div class="panel-group" id="accordion-Contactos"><div class="panel panel-success" id="jump-Contactos-01_29Obtenercolecci_C3_B3ndecontactos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Contactos" href="#collapse-Contactos-01_29Obtenercolecci_C3_B3ndecontactos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Obtener colección de contactos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/contacts/getall</h4></a></div><div id="collapse-Contactos-01_29Obtenercolecci_C3_B3ndecontactos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve una lista con todos los contactos. Pueden filtrarse por email o por lista.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID del contacto</td></tr><tr><td align="left">email</td><td align="center">Email del contacto</td></tr><tr><td align="left">created</td><td align="center">Fecha de creación</td></tr><tr><td align="left">lastSend</td><td align="center">Fecha de último envío</td></tr><tr><td align="left">suscriptions</td><td align="center">Cantidad de listas a las que está suscripto</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_mailListNotFound</td><td align="center">No de encontró lista con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>email</td><td>luis</td><td><p>Filtro por email o parte del email del contacto.</p></td></tr><tr><td>listId</td><td>2</td><td><p>Filtro por lista de contactos.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los contactos. Valores posibles: email/id. Por defecto: id</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Contactos_01_29Obtenercolecci_C3_B3ndecontactos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Contactos_01_29Obtenercolecci_C3_B3ndecontactos_1_Error_28Status422_29">Error (Status 422)
</option><option value="req_res_Contactos_01_29Obtenercolecci_C3_B3ndecontactos_2_Error_28Status400_29">Error (Status 400)</option></select><br><section id="req_res_Contactos_01_29Obtenercolecci_C3_B3ndecontactos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los contactos. Valores posibles: email/id. Por defecto: id</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"id": 2,
"email": "jose@ejemplo.com",
"created": "2021-09-03 14:08:36",
"lastSend": "2021-09-07 16:18:45",
"suscriptions": 0
},
{
"id": 3,
"email": "maria@ejemplo.com",
"created": "2021-09-03 14:10:22",
"lastSend": "2021-09-07 16:18:45",
"suscriptions": 2
},
{
"id": 4,
"email": "luis@ejemplo.com",
"created": "2021-09-03 14:10:59",
"lastSend": null,
"suscriptions": 1
}
],
"first_page_url": "http://api.catatrepa.com/contacts/getall?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http://api.catatrepa.com/contacts/getall?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "http://api.catatrepa.com/contacts/getall?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "http://api.catatrepa.com/contacts/getall",
"per_page": "10",
"prev_page_url": null,
"to": 3,
"total": 3
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Contactos_01_29Obtenercolecci_C3_B3ndecontactos_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los contactos. Valores posibles: email/id. Por defecto: id</p></td></tr><tr><td>order</td><td>ascen</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"order": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section><section id="req_res_Contactos_01_29Obtenercolecci_C3_B3ndecontactos_2_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>listId</td><td>8</td><td><p>Filtro por lista de contactos.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los contactos. Valores posibles: email/id. Por defecto: id</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_mailListNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section></div></div></div><div class="panel panel-info" id="jump-Contactos-02_29Obtenereldetalledeuncontacto"><div class="panel-heading">
<a class="text-info" data-toggle="collapse" data-parent="#accordion-Contactos" href="#collapse-Contactos-02_29Obtenereldetalledeuncontacto" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>02) Obtener el detalle de un contacto</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/contacts/:contact_id</h4></a></div><div id="collapse-Contactos-02_29Obtenereldetalledeuncontacto" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de un contacto.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID del contacto</td></tr><tr><td align="left">email</td><td align="center">Email del contacto</td></tr><tr><td align="left">created</td><td align="center">Fecha de creación</td></tr><tr><td align="left">lastActivity</td><td align="center">Fecha última actividad</td></tr><tr><td align="left">mailLists</td><td align="center">Lista/s en la/s que está suscripto (ID y Nombre)</td></tr><tr><td align="left">customFields</td><td align="center">Campos personalizados (ID, Nombre, Tipo y Valor)</td></tr><tr><td align="left">lastSend</td><td align="center">Fecha de último envío</td></tr><tr><td align="left">reads</td><td align="center">Aperturas totales</td></tr><tr><td align="left">clicks</td><td align="center">Clicks totales</td></tr><tr><td align="left">hardBounce</td><td align="center">Rebotes duros</td></tr><tr><td align="left">softBounce</td><td align="center">Rebotes blandos</td></tr><tr><td align="left">shared</td><td align="center">Compartidos</td></tr><tr><td align="left">unsubscription</td><td align="center">Desuscripciones</td></tr><tr><td align="left">complaint</td><td align="center">Quejas</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_contactNotFound</td><td align="center">No existe contacto con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contact_id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr></tbody></table><h5 class="label label-primary">Body</h5><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Contactos_02_29Obtenereldetalledeuncontacto_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Contactos_02_29Obtenereldetalledeuncontacto_1_Error_28Status400_29">Error (Status 400)</option></select><br><section id="req_res_Contactos_02_29Obtenereldetalledeuncontacto_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/:contact_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contact_id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"id": 2,
"email": "jose@ejemplo.com",
"created": "2021-09-03 14:08:36",
"lastActivity": "2021-09-10 11:02:26",
"mailLists": [],
"customFields": [
{
"id": 5,
"name": "Numero de cliente",
"type": "Text field",
"value": "451263"
},
{
"id": 4,
"name": "Género",
"type": "Radio button",
"value": "Masculino"
},
{
"id": 3,
"name": "País",
"type": "Drop list",
"value": "Argentina"
},
{
"id": 2,
"name": "Apellido",
"type": "Text field",
"value": "Pérez"
},
{
"id": 1,
"name": "Nombre",
"type": "Text field",
"value": "José"
}
],
"lastSend": "2021-09-07 16:18:45",
"reads": 10,
"clicks": 3,
"hardBounce": 1,
"softBounce": 1,
"shared": 9,
"unsubscription": 1,
"complaint": 0
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Contactos_02_29Obtenereldetalledeuncontacto_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/:contact_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contact_id</td><td>20</td><td><p>Id del contacto. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section></div></div></div><div class="panel panel-success" id="jump-Contactos-03_29Crearcontacto"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Contactos" href="#collapse-Contactos-03_29Crearcontacto" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>03) Crear contacto</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/contacts/create</h4></a></div><div id="collapse-Contactos-03_29Crearcontacto" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite crear un nuevo contacto, teniendo en cuenta las siguientes consideraciones:</p><ul><li>Sólo es requerido ingresar el correo electrónico.</li><li>El contacto se asignará a las listas mediante otro servicio.</li><li>Para completar los campos personalizados se utilizará el siguiente criterio:<ul><li>Si se envía el campo con un valor, se completará con dicho valor.</li><li>Si se envía el campo vacío, el campo se completará con valor vacío.</li><li>Si no se envía el campo, se completará con el valor por defecto configurado (en caso de tenerlo).</li></ul></li></ul><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID del contacto creado</td></tr><tr><td align="left">email</td><td align="center">Email del contacto</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_contactAlreadyExist</td><td align="center">Ya existe un contacto con el mismo correo.</td></tr><tr><td align="left">customsFieldsNotFound</td><td align="center">No existe el campo personalizado indicado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>email</td><td>sofia@ejemplo.com</td><td><p>Email del contacto nuevo. Requerido.</p></td></tr><tr><td>customFields[1]</td><td>Sofia</td><td><p>Array de campos personalizados.
Debe colocarse el id del campo que se desea completar como key del array.
En el caso de ser un valor de tipo fecha debe tener formato MM-DD.
En el caso de un listado de opciones múltiple, separar las opciones con coma y sin espacios. Por ejemplo: opcion1,opcion3.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Contactos_03_29Crearcontacto_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Contactos_03_29Crearcontacto_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Contactos_03_29Crearcontacto_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Contactos_03_29Crearcontacto_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>email</td><td>sofia@ejemplo.com</td><td><p>Email del contacto nuevo. Requerido.</p></td></tr><tr><td>customFields[1]</td><td>Sofia</td><td><p>Array de campos personalizados.
Debe colocarse el id del campo que se desea completar como key del array.
En el caso de ser un valor de tipo fecha debe tener formato MM-DD.
En el caso de un listado de opciones múltiple, separar las opciones con coma y sin espacios. Por ejemplo: opcion1,opcion3.</p></td></tr><tr><td>customFields[2]</td><td>Sánchez</td><td></td></tr><tr><td>customFields[3]</td><td>Argentina</td><td></td></tr><tr><td>customFields[4]</td><td>Femenino</td><td></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_contactCreated",
"data": {
"id": 6,
"email": "sofia@ejemplo.com"
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Contactos_03_29Crearcontacto_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>email</td><td>sofia@ejemplo.com</td><td><p>Email del contacto nuevo. Requerido.</p></td></tr><tr><td>customFields[1]</td><td>Sofia</td><td><p>Array de campos personalizados.
Debe colocarse el id del campo que se desea completar como key del array.
En el caso de ser un valor de tipo fecha debe tener formato MM-DD.
En el caso de un listado de opciones múltiple, separar las opciones con coma y sin espacios. Por ejemplo: opcion1,opcion3.</p></td></tr><tr><td>customFields[2]</td><td>Sánchez</td><td></td></tr><tr><td>customFields[3]</td><td>Argentina</td><td></td></tr><tr><td>customFields[4]</td><td>Femenino</td><td></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactAlreadyExist"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Contactos_03_29Crearcontacto_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>email</td><td>sofia@ejemplo.com-</td><td><p>Email del contacto nuevo. Requerido.</p></td></tr><tr><td>customFields[1]</td><td>Sofia</td><td><p>Array de campos personalizados.
Debe colocarse el id del campo que se desea completar como key del array.
En el caso de ser un valor de tipo fecha debe tener formato MM-DD.
En el caso de un listado de opciones múltiple, separar las opciones con coma y sin espacios. Por ejemplo: opcion1,opcion3.</p></td></tr><tr><td>customFields[2]</td><td>Sánchez</td><td></td></tr><tr><td>customFields[3]</td><td>Argentina</td><td></td></tr><tr><td>customFields[4]</td><td>Femenino</td><td></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"email": [
"invalid_email_format"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Contactos-04_29Editaruncontacto"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Contactos" href="#collapse-Contactos-04_29Editaruncontacto" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>04) Editar un contacto</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/contacts/edit</h4></a></div><div id="collapse-Contactos-04_29Editaruncontacto" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite editar un contacto, teniendo en cuenta las siguientes consideraciones:</p><ul><li>No es requerido ningún campo.</li><li>El contacto se asignará a listas mediante otro servicio.</li><li>Para editar los campos personalizados se utilizará el siguiente criterio:<ul><li>Si se envía el campo con un valor, se modifica con el valor indicado.</li><li>Si se envía el campo vacío, se modifica con el valor indicado (blanco).</li><li>Si no se envía el campo, no se actualiza el valor del campo quedando el valor actual.</li></ul></li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripcion</th></tr></thead><tbody><tr><td align="left">errorMsg_contactNotFound</td><td align="center">No existe contacto con el ID informado.</td></tr><tr><td align="left">customsFieldsNotFound</td><td align="center">No existe el campo personalizado indicado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>6</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>customFields[1]</td><td>Sofía</td><td><p>Array de campos personalizados.
Debe colocarse el id del campo que se desea completar como key del array.
En el caso de ser un valor de tipo fecha debe tener formato MM-DD.
En el caso de un listado de opciones múltiple, separar las opciones con coma y sin espacios. Por ejemplo: opcion1,opcion3.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Contactos_04_29Editaruncontacto_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Contactos_04_29Editaruncontacto_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Contactos_04_29Editaruncontacto_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Contactos_04_29Editaruncontacto_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>6</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>customFields[1]</td><td>Sofía</td><td><p>Array de campos personalizados.
Debe colocarse el id del campo que se desea completar como key del array.
En el caso de ser un valor de tipo fecha debe tener formato MM-DD.
En el caso de un listado de opciones múltiple, separar las opciones con coma y sin espacios. Por ejemplo: opcion1,opcion3.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_contactUpdated"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Contactos_04_29Editaruncontacto_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>12</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>customFields[1]</td><td>Sofía</td><td><p>Array de campos personalizados.
Debe colocarse el id del campo que se desea completar como key del array.
En el caso de ser un valor de tipo fecha debe tener formato MM-DD.
En el caso de un listado de opciones múltiple, separar las opciones con coma y sin espacios. Por ejemplo: opcion1,opcion3.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Contactos_04_29Editaruncontacto_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>6</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>customFields[9]</td><td>Sofía</td><td><p>Array de campos personalizados.
Debe colocarse el id del campo que se desea completar como key del array.
En el caso de ser un valor de tipo fecha debe tener formato MM-DD.
En el caso de un listado de opciones múltiple, separar las opciones con coma y sin espacios. Por ejemplo: opcion1,opcion3.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "customsFieldsNotFound",
"data": [
"customFields.9"
]
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Contactos-05_29Suscribircontactosaunalista"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Contactos" href="#collapse-Contactos-05_29Suscribircontactosaunalista" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>05) Suscribir contactos a una lista</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/contacts/suscribe</h4></a></div><div id="collapse-Contactos-05_29Suscribircontactosaunalista" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite suscribir varios contactos a una lista, teniendo en cuenta las siguiente consideraciones:</p><ul><li>Los contactos que estén excluidos no podrán suscribirse. En estos casos, los mismos se mostrarán en la respuesta dentro de <strong>contactExclude</strong> y no se suscribirán.</li><li>En caso de que algunos de los contactos indicados no existan, los mismos se mostrarán en la respuesta dentro de <strong>contactNotFound</strong>.</li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_mailListNotFound</td><td align="center">No existe lista de contactos con el ID informado.</td></tr><tr><td align="left">invalidContacts</td><td align="center">Ninguno de los contactos fue suscripto ya sea porque no existen o porque están excluídos</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>4</td><td><p>Array de Ids de contactos a suscribir. Requerido. Máximo: 100 registros.</p></td></tr><tr><td>listId</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Contactos_05_29Suscribircontactosaunalista_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Contactos_05_29Suscribircontactosaunalista_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Contactos_05_29Suscribircontactosaunalista_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Contactos_05_29Suscribircontactosaunalista_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/suscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>4</td><td><p>Array de Ids de contactos a suscribir. Requerido.</p></td></tr><tr><td>contactsIds[]</td><td>6</td><td></td></tr><tr><td>contactsIds[]</td><td>15</td><td></td></tr><tr><td>listId</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_contactsSuscribe",
"contactSubscribed": [
4,
6
],
"errors": {
"contactExclude": [],
"contactNotFound": [
15
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Contactos_05_29Suscribircontactosaunalista_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/suscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>15</td><td></td></tr><tr><td>listId</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "invalidContacts",
"contactSubscribed": [],
"errors": {
"contactExclude": [],
"contactNotFound": [
15
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Contactos_05_29Suscribircontactosaunalista_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/suscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>4</td><td><p>Array de Ids de contactos a suscribir. Requerido.</p></td></tr><tr><td>contactsIds[]</td><td>6</td><td></td></tr><tr><td>listId</td><td>1p</td><td><p>Id de la lista. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"listId": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Contactos-06_29Desuscribircontactosdeunalista"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Contactos" href="#collapse-Contactos-06_29Desuscribircontactosdeunalista" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>06) Desuscribir contactos de una lista</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/contacts/unsuscribe</h4></a></div><div id="collapse-Contactos-06_29Desuscribircontactosdeunalista" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite desuscribir varios contactos de una lista, teniendo en cuenta las siguiente consideraciones:</p><ul><li>En caso de que algunos de los contactos indicados no existan, los mismos se mostrarán en la respuesta dentro de <strong>contactNotFound</strong>.</li><li>Los contactos que no estén suscriptos a la lista indicada, se mostrarán en la respuesta dentro de <strong>subscribeNotFound</strong>.</li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_mailListNotFound</td><td align="center">No existe lista de contactos con el ID informado.</td></tr><tr><td align="left">invalidContacts</td><td align="center">Ninguno de los contactos fue desuscripto ya sea porque no existen o porque no estaban suscriptos en la lista indicada.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>12</td><td><p>Array de Ids de contactos a desuscribir. Requerido. Máximo: 100 registros.</p></td></tr><tr><td>listId</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Contactos_06_29Desuscribircontactosdeunalista_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Contactos_06_29Desuscribircontactosdeunalista_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Contactos_06_29Desuscribircontactosdeunalista_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Contactos_06_29Desuscribircontactosdeunalista_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/unsuscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>12</td><td><p>Array de Ids de contactos a desuscribir. Requerido.</p></td></tr><tr><td>contactsIds[]</td><td>4</td><td></td></tr><tr><td>listId</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_contactsUnsuscribe",
"contactunsubscribed": [
4
],
"errors": {
"subscribeNotFound": [],
"contactNotFound": [
12
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Contactos_06_29Desuscribircontactosdeunalista_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/unsuscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>12</td><td><p>Array de Ids de contactos a desuscribir. Requerido.</p></td></tr><tr><td>contactsIds[]</td><td>14</td><td></td></tr><tr><td>listId</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "invalidContacts",
"contactunsubscribed": [],
"errors": {
"subscribeNotFound": [],
"contactNotFound": [
12,
14
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Contactos_06_29Desuscribircontactosdeunalista_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/unsuscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>4</td><td><p>Array de Ids de contactos a desuscribir. Requerido.</p></td></tr><tr><td>contactsIds[]</td><td>6p</td><td></td></tr><tr><td>listId</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"contactsIds.1": [
"invalid_value_integer"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Contactos-07_29Eliminarcontactos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Contactos" href="#collapse-Contactos-07_29Eliminarcontactos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>07) Eliminar contactos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/contacts/delete</h4></a></div><div id="collapse-Contactos-07_29Eliminarcontactos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite eliminar varios contactos, teniendo en cuenta que:</p><ul><li>En caso de que algunos de los contactos indicados no existan, los mismos se mostrarán en la respuesta dentro de <strong>contactsNotFound</strong>.</li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_contactsNotFound</td><td align="center">No existe ninguno de los contactos informados.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>49</td><td><p>Array de Ids de contactos a eliminar. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Contactos_07_29Eliminarcontactos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Contactos_07_29Eliminarcontactos_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Contactos_07_29Eliminarcontactos_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Contactos_07_29Eliminarcontactos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/delete</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>2</td><td><p>Array de Ids de contactos a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_contactsDeleted",
"contactsNotFound": []
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Contactos_07_29Eliminarcontactos_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/delete</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>16</td><td><p>Array de Ids de contactos a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactsNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Contactos_07_29Eliminarcontactos_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/contacts/delete</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>contactsIds[]</td><td>1p</td><td><p>Array de Ids de contactos a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"contactsIds.0": [
"invalid_value_integer"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Cuenta">Cuenta
<span class="badge">5</span></h3></div><div class="panel-body"><p></p><p>Este modulo agrupa servicios para gestionar la configuración de tu cuenta y conocer el resumen de tu actividad.</p><div class="request-item"><div class="panel-group" id="accordion-Cuenta"><div class="panel panel-info" id="jump-Cuenta-01_29Obtenerconfiguraci_C3_B3ngeneraldelacuenta"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Cuenta" href="#collapse-Cuenta-01_29Obtenerconfiguraci_C3_B3ngeneraldelacuenta" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Obtener configuración general de la cuenta</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/administrator/profile</h4></a></div><div id="collapse-Cuenta-01_29Obtenerconfiguraci_C3_B3ngeneraldelacuenta" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve información de la cuenta del administrador.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la cuenta</td></tr><tr><td align="left">name</td><td align="center">Nombre y apellido</td></tr><tr><td align="left">username</td><td align="center">Nombre de usuario</td></tr><tr><td align="left">email</td><td align="center">Correo electrónico</td></tr><tr><td align="left">timeZone</td><td align="center">Zona horaria. Ver los posibles valores en: <strong>Obtener zonas horarias</strong></td></tr><tr><td align="left">country</td><td align="center">País. Ver los posibles valores en: <strong>Obtener países</strong></td></tr><tr><td align="left">subscription.Type</td><td align="center">Tipo de plan. Valores posibles:<br>Prepaid –&gt; Prepago<br>Monthly –&gt; Mensual</td></tr><tr><td align="left">subscription.Quota</td><td align="center">Cantidad de envíos del plan. Solo se muestra para Tipo de plan = Mensual</td></tr><tr><td align="left">subscription.TermBegin</td><td align="center">Fecha de inicio. Solo se muestra para Tipo de plan = Mensual</td></tr><tr><td align="left">subscription.TermEnd</td><td align="center">Fecha de fin. Solo se muestra para Tipo de plan = Mensual</td></tr><tr><td align="left">subscription.Credits</td><td align="center">Créditos disponibles</td></tr><tr><td align="left">created</td><td align="center">Fecha de creación de la cuenta</td></tr><tr><td align="left">publicArchivesURL</td><td align="center">Url para acceder al archivo público de campañas</td></tr></tbody></table></small><br><br><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Cuenta_01_29Obtenerconfiguraci_C3_B3ngeneraldelacuenta_0_Ok_28Status200_29">Ok (Status 200)</option></select><br><section id="req_res_Cuenta_01_29Obtenerconfiguraci_C3_B3ngeneraldelacuenta_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/administrator/profile</h5><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"id": 49584,
"name": "Indumentaria S.A.",
"username": "administrador.ejemplo",
"email": "administrador@ejemplo.com",
"timeZone": "-10800",
"country": "ar",
"subscription": {
"Type": "Monthly",
"Quota": 3000,
"TermBegin": "2021-09-01",
"TermEnd": "2021-09-30",
"Credits": 2998
},
"created": "2020-08-07 10:39:12",
"publicArchivesURL": "https://v4.envialosimple.com/archive?AdministratorID=ec37387a779e31a65e"
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section></div></div></div><div class="panel panel-success" id="jump-Cuenta-02_29Editarconfiguraci_C3_B3ngeneraldelacuenta"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Cuenta" href="#collapse-Cuenta-02_29Editarconfiguraci_C3_B3ngeneraldelacuenta" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>02) Editar configuración general de la cuenta</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/administrator/profile/edit</h4></a></div><div id="collapse-Cuenta-02_29Editarconfiguraci_C3_B3ngeneraldelacuenta" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small></small><p><small>Permite editar la configuración de la cuenta.</small><br><br></p><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Juan Pérez</td><td><p>Nombre y apellido. Requerido.</p></td></tr><tr><td>email</td><td>cuenta@ejemplo.com</td><td><p>Email. Requerido.</p></td></tr><tr><td>timezone</td><td>-10800</td><td><p>Zona Horaria. Requerido. Ver los posibles valores en: Obtener zonas horarias.</p></td></tr><tr><td>country</td><td>ar</td><td><p>Pais. Requerido. Ver los posibles valores en: Obtener países.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Cuenta_02_29Editarconfiguraci_C3_B3ngeneraldelacuenta_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Cuenta_02_29Editarconfiguraci_C3_B3ngeneraldelacuenta_1_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Cuenta_02_29Editarconfiguraci_C3_B3ngeneraldelacuenta_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/administrator/profile/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Juan Pérez</td><td><p>Nombre y apellido. Requerido.</p></td></tr><tr><td>email</td><td>cuenta@ejemplo.com</td><td><p>Email. Requerido.</p></td></tr><tr><td>timezone</td><td>-10800</td><td><p>Zona Horaria. Requerido. Ver los posibles valores en: Obtener zonas horarias.</p></td></tr><tr><td>country</td><td>ar</td><td><p>Pais. Requerido. Ver los posibles valores en: Obtener países.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_administratorEdited"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Cuenta_02_29Editarconfiguraci_C3_B3ngeneraldelacuenta_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/administrator/profile/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>email</td><td>cuenta@ejemplo.com-</td><td><p>Email. Requerido.</p></td></tr><tr><td>timezone</td><td>-10800</td><td><p>Zona Horaria. Requerido. Ver los posibles valores en: Obtener zonas horarias.</p></td></tr><tr><td>country</td><td>ar</td><td><p>Pais. Requerido. Ver los posibles valores en: Obtener países.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"name": [
"required"
],
"email": [
"invalid_email_format"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-info" id="jump-Cuenta-03_29Obtenerestad_C3_ADsticasdelacuenta"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Cuenta" href="#collapse-Cuenta-03_29Obtenerestad_C3_ADsticasdelacuenta" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>03) Obtener estadísticas de la cuenta</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/administrator/profile/resume</h4></a></div><div id="collapse-Cuenta-03_29Obtenerestad_C3_ADsticasdelacuenta" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve estadísticas de la cuenta del administrador.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">TotalSent</td><td align="center">Total de envíos del último mes</td></tr><tr><td align="left">AvgMonthlyTotalSent</td><td align="center">Promedio de envíos en los últimos seis meses</td></tr><tr><td align="left">campaigns.Count</td><td align="center">Total de campañas creadas</td></tr><tr><td align="left">campaigns.Sent</td><td align="center">Total de envíos en campañas</td></tr><tr><td align="left">autoresponders.Count</td><td align="center">Total de automation creados</td></tr><tr><td align="left">autoresponders.Sent</td><td align="center">Total de envíos en automations</td></tr><tr><td align="left">maillists.Count</td><td align="center">Cantidad de listas activas</td></tr><tr><td align="left">activeMembers.Count</td><td align="center">Cantidad de contactos activos</td></tr><tr><td align="left">reads.Count</td><td align="center">Total de aperturas en campañas y automations (aperturas totales)</td></tr><tr><td align="left">clicks.Count</td><td align="center">Total de clicks en campañas y automations (clicks totales)</td></tr></tbody></table></small><br><br><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Cuenta_03_29Obtenerestad_C3_ADsticasdelacuenta_0_Ok_28Status200_29">Ok (Status 200)</option></select><br><section id="req_res_Cuenta_03_29Obtenerestad_C3_ADsticasdelacuenta_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/administrator/profile/resume</h5><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"TotalSent": "122062",
"AvgMonthlyTotalSent": 24379.6,
"campaigns": {
"Count": 166,
"Sent": "122047"
},
"autoresponders": {
"Count": 12,
"Sent": "3"
},
"maillists": {
"Count": 6
},
"activeMembers": {
"Count": 100003
},
"reads": {
"Count": "56"
},
"clicks": {
"Count": "19"
}
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section></div></div></div><div class="panel panel-info" id="jump-Cuenta-04_29Obtenerzonashorarias"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Cuenta" href="#collapse-Cuenta-04_29Obtenerzonashorarias" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>04) Obtener zonas horarias</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/administrator/profile/timezone</h4></a></div><div id="collapse-Cuenta-04_29Obtenerzonashorarias" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve un listado de las posibles zonas horarias para la configuración de la cuenta.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">label</td><td align="center">Descripción de la zona horaria</td></tr><tr><td align="left">value</td><td align="center">Código de zona horaria. Se utilizará en <strong>Editar configuración general de la cuenta</strong></td></tr></tbody></table></small><br><br><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Cuenta_04_29Obtenerzonashorarias_0_Ok_28Status200_29">Ok (Status 200)</option></select><br><section id="req_res_Cuenta_04_29Obtenerzonashorarias_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/administrator/profile/timezone</h5><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": [
{
"label": "(-10:00) Hawaii",
"value": -36000
},
{
"label": "(-09:00) Alaska",
"value": -32400
},
{
"label": "(-08:00) Hora del Pacífico (EE.UU. y Canadá)",
"value": -28800
},
{
"label": "(-07:00) Arizona / Chihuahua, La Paz, Mazatlan / Hora de las Montañas Rocosas (EE.UU. y Canadá) ",
"value": -25200
},
{
"label": "(-06:00) América Central / Guadalajara, Ciudad de México, Monterrey / Hora central (EE.UU. y Canadá)",
"value": -21600
},
{
"label": "(-05:00) Bogotá, Lima, Quito / Haití / Hora del este (EE.UU. y Canadá) / Indiana (este)",
"value": -18000
},
{
"label": "(-04:00) Asunción / Caracas / La Paz, Manaos, San Juan / Hora del Atlántico (Canadá) / Santiago",
"value": -14400
},
{
"label": "(-03:30) Terranova",
"value": -12600
},
{
"label": "(-03:00) Brasilia / Ciudad de Buenos Aires / Groenlandia / Montevideo / Punta Arenas / Salvador",
"value": -10800
},
{
"label": "(-02:00) Hora universal coordinada-02",
"value": -7200
},
{
"label": "(-01:00) Azores / Cabo Verde",
"value": -3600
},
{
"label": "(+00:00) Hora universal coordinada / Dublín, Edimburgo, Lisboa, Londres / Monrovia / Santo Tomé",
"value": 0
},
{
"label": "(+01:00) Casablanca / África Central Occidental / Amsterdam, Berlín, Berna, Roma, Estocolmo, Viena / Belgrado, Budapest / Madrid, París",
"value": 3600
},
{
"label": "(+02:00) Atenas, Bucarest / Beirut / Damasco / El Cairo / Gaza / Helsinki, Kiev, Riga / Jerusalén / Kaliningrado",
"value": 7200
},
{
"label": "(+03:00) Bagdad / Estambul / Kuwait / Minsk / Moscú, San Petersburgo / Nairobi / Volgogrado",
"value": 10800
},
{
"label": "(+03:30) Teherán",
"value": 12600
},
{
"label": "(+04:00) Abu Dabi / Bakú / Ereván / Port Louis / Tiflis",
"value": 14400
},
{
"label": "(+04:30) Kabul",
"value": 16200
},
{
"label": "(+05:00) Asjabad, Tashkent / Ekaterimburgo / Islamabad, Karachi / Qyzylorda",
"value": 18000
},
{
"label": "(+05:30) Chennai, Calcuta, Mumbai, Nueva Delhi / Sri Jayawardenepura",
"value": 19800
},
{
"label": "(+05:45) Katmandú",
"value": 20700
},
{
"label": "(+06:00) Astaná / Dacca / Omsk",
"value": 21600
},
{
"label": "(+06:30) Yangón (Rangún)",
"value": 23400
},
{
"label": "(+07:00) Bangkok, Hanoí, Yakarta / Barnaul, Gorno-Altaysk / Krasnoyarsk / Novosibirsk / Tomsk",
"value": 25200
},
{
"label": "(+08:00) Beijing, Hong Kong / Kuala Lumpur, Singapur / Perth / Taipéi / Ulán Bator",
"value": 28800
},
{
"label": "(+09:00) Osaka, Sapporo, Tokio / Pyongyang / Seúl / Yakutsk",
"value": 32400
},
{
"label": "(+09:30) Adelaida / Darwin",
"value": 34200
},
{
"label": "(+10:00) Brisbane / Canberra, Melbourne, Sídney / Guam, Port Moresby / Hobart / Vladivostok",
"value": 36000
},
{
"label": "(+11:00) Islas Salomón, Nueva Caledonia / Magadán / Sajalín",
"value": 39600
},
{
"label": "(+12:00) Auckland, Wellington / Fiyi / Hora universal coordinada +12",
"value": 43200
}
]
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section></div></div></div><div class="panel panel-info" id="jump-Cuenta-05_29Obtenerpa_C3_ADses"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Cuenta" href="#collapse-Cuenta-05_29Obtenerpa_C3_ADses" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>05) Obtener países</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/administrator/profile/countries</h4></a></div><div id="collapse-Cuenta-05_29Obtenerpa_C3_ADses" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve un listado de los posibles países para la configuración de la cuenta.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">label</td><td align="center">Descripción del país</td></tr><tr><td align="left">value</td><td align="center">Código de país. Se utilizará en <strong>Editar configuración general de la cuenta</strong></td></tr></tbody></table></small><br><br><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Cuenta_05_29Obtenerpa_C3_ADses_0_Ok_28Status200_29">Ok (Status 200)</option></select><br><section id="req_res_Cuenta_05_29Obtenerpa_C3_ADses_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/administrator/profile/countries</h5><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": [
{
"label": "Argentina",
"value": "ar"
},
{
"label": "Aruba",
"value": "aw"
},
{
"label": "Bahamas",
"value": "bs"
},
{
"label": "Barbados",
"value": "bb"
},
{
"label": "Belize",
"value": "bz"
},
{
"label": "Bermuda",
"value": "bm"
},
{
"label": "Bolivia",
"value": "bo"
},
{
"label": "Brazil",
"value": "br"
},
{
"label": "Canada",
"value": "ca"
},
{
"label": "Chile",
"value": "cl"
},
{
"label": "Cocos Islands",
"value": "cc"
},
{
"label": "Colombia",
"value": "co"
},
{
"label": "Costa Rica",
"value": "cr"
},
{
"label": "Cuba",
"value": "cu"
},
{
"label": "Dominica",
"value": "dm"
},
{
"label": "Dominican Republic",
"value": "do"
},
{
"label": "Ecuador",
"value": "ec"
},
{
"label": "El Salvador",
"value": "sv"
},
{
"label": "Islas Malvinas",
"value": "fk"
},
{
"label": "French Guiana",
"value": "gf"
},
{
"label": "Gibraltar",
"value": "gi"
},
{
"label": "Grenada",
"value": "gd"
},
{
"label": "Guadeloupe",
"value": "gp"
},
{
"label": "Guatemala",
"value": "gt"
},
{
"label": "Guyana",
"value": "gy"
},
{
"label": "Haiti",
"value": "ht"
},
{
"label": "Honduras",
"value": "hn"
},
{
"label": "Jamaica",
"value": "jm"
},
{
"label": "Macao",
"value": "mo"
},
{
"label": "Martinique",
"value": "mq"
},
{
"label": "Mexico",
"value": "mx"
},
{
"label": "Montserrat",
"value": "ms"
},
{
"label": "Antillas Holandesas",
"value": "an"
},
{
"label": "Nicaragua",
"value": "ni"
},
{
"label": "Panama",
"value": "pa"
},
{
"label": "Paraguay",
"value": "py"
},
{
"label": "Peru",
"value": "pe"
},
{
"label": "Portugal",
"value": "pt"
},
{
"label": "Puerto Rico",
"value": "pr"
},
{
"label": "Saint Helena",
"value": "sh"
},
{
"label": "Saint Kitts and Nevis",
"value": "kn"
},
{
"label": "Saint Lucia",
"value": "lc"
},
{
"label": "España",
"value": "es"
},
{
"label": "Trinidad and Tobago",
"value": "tt"
},
{
"label": "Estados Unidos",
"value": "us"
},
{
"label": "Uruguay",
"value": "uy"
},
{
"label": "Venezuela",
"value": "ve"
},
{
"label": "Virgin Islands, British",
"value": "vg"
},
{
"label": "Virgin Islands, U.s.",
"value": "vi"
}
]
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Exclusiones">Exclusiones
<span class="badge">3</span></h3></div><div class="panel-body"><p></p><p>Este modulo te permitirá realizar toda la gestión de exclusiones de contactos para que no se les envíen tus campañas.</p><div class="request-item"><div class="panel-group" id="accordion-Exclusiones"><div class="panel panel-success" id="jump-Exclusiones-01_29Obtenercolecci_C3_B3ndeexclusiones"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Exclusiones" href="#collapse-Exclusiones-01_29Obtenercolecci_C3_B3ndeexclusiones" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Obtener colección de exclusiones</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/exclusions/getall</h4></a></div><div id="collapse-Exclusiones-01_29Obtenercolecci_C3_B3ndeexclusiones" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small></small><p><small>Devuelve una lista con todas las exclusiones creadas por Usuario. Pueden filtrarse por email.</small><br><br></p><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>email</td><td>correo@ejemplo.com</td><td><p>Filtro por email.</p></td></tr><tr><td>limit</td><td>5</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>email</td><td><p>Criterio para ordenar las exclusiones. Valores posibles: email/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Exclusiones_01_29Obtenercolecci_C3_B3ndeexclusiones_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Exclusiones_01_29Obtenercolecci_C3_B3ndeexclusiones_1_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Exclusiones_01_29Obtenercolecci_C3_B3ndeexclusiones_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/exclusions/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>5</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar las exclusiones. Valores posibles: email/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"id": 1,
"email": "jose@ejemplo.com",
"list": 1
},
{
"id": 2,
"email": "jose@ejemplo.com",
"list": 2
},
{
"id": 3,
"email": "contacto1@ejemplo.com",
"list": "Global"
},
{
"id": 4,
"email": "contacto2@ejemplo.com",
"list": "Global"
}
],
"first_page_url": "http://api.catatrepa.com/exclusions/getall?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http://api.catatrepa.com/exclusions/getall?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "http://api.catatrepa.com/exclusions/getall?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "http://api.catatrepa.com/exclusions/getall",
"per_page": "5",
"prev_page_url": null,
"to": 4,
"total": 4
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Exclusiones_01_29Obtenercolecci_C3_B3ndeexclusiones_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/exclusions/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>email</td><td>correo@ejemplo.com</td><td><p>Filtro por email.</p></td></tr><tr><td>limit</td><td>5</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar las exclusiones. Valores posibles: email/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>ascen</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"order": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Exclusiones-02_29Agregarexclusiones"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Exclusiones" href="#collapse-Exclusiones-02_29Agregarexclusiones" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>02) Agregar exclusiones</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/exclusions/add</h4></a></div><div id="collapse-Exclusiones-02_29Agregarexclusiones" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite crear exclusiones, teniendo en cuenta que:</p><ul><li>En caso de que algunas de las listas indicadas no existan, las mismas se mostrarán en la respuesta dentro de <strong>listsNotFound</strong>.</li></ul><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">msg_listsNotFounds</td><td align="center">No existe ninguna de las listas informadas.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>always</td><td>0</td><td><p>Tipo de exclusión. Valores posibles : 0 (sobre listas seleccionadas) / 1 (sobre todas las listas y futuras).</p></td></tr><tr><td>emails[]</td><td>exclusion@ejemplo.com</td><td><p>Array de Ids de contactos a excluir. Requerido. Máximo: 100 registros.</p></td></tr><tr><td>listIds[]</td><td>1</td><td><p>Array de Ids de listas. Requerido para Tipo de exclusión = Sobre listas seccionadas. Máximo: 100 registros.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Exclusiones_02_29Agregarexclusiones_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Exclusiones_02_29Agregarexclusiones_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Exclusiones_02_29Agregarexclusiones_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Exclusiones_02_29Agregarexclusiones_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/exclusions/add</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>always</td><td>0</td><td><p>Tipo de exclusión. Valores posibles : 0 (sobre listas seleccionadas) / 1 (sobre todas las listas y futuras).</p></td></tr><tr><td>emails[]</td><td>exclusion@ejemplo.com</td><td><p>Array de Ids de contactos a excluir. Requerido.</p></td></tr><tr><td>listIds[]</td><td>1</td><td><p>Array de Ids de listas. Requerido para Tipo de exclusión = Sobre listas seccionadas.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_exclusionsCreated",
"listsNotFound": []
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Exclusiones_02_29Agregarexclusiones_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/exclusions/add</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>always</td><td>0</td><td><p>Tipo de exclusión. Valores posibles : 0 (sobre listas seleccionadas) / 1 (sobre todas las listas y futuras).</p></td></tr><tr><td>emails[]</td><td>exclusion@ejemplo.com</td><td><p>Array de Ids de contactos a excluir. Requerido.</p></td></tr><tr><td>listIds[]</td><td>13</td><td><p>Array de Ids de listas. Requerido para Tipo de exclusión = Sobre listas seccionadas.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "msg_listsNotFounds"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Exclusiones_02_29Agregarexclusiones_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/exclusions/add</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>always</td><td>Y</td><td><p>Tipo de exclusión. Valores posibles : 0 (sobre listas seleccionadas) / 1 (sobre todas las listas y futuras).</p></td></tr><tr><td>emails[]</td><td>exclusion@ejemplo.com</td><td><p>Array de Ids de contactos a excluir. Requerido.</p></td></tr><tr><td>listIds[]</td><td>1</td><td><p>Array de Ids de listas. Requerido para Tipo de exclusión = Sobre listas seccionadas.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"always": [
"invalid_boolean"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-info" id="jump-Exclusiones-03_29Eliminarexclusiones"><div class="panel-heading">
<a class="text-info" data-toggle="collapse" data-parent="#accordion-Exclusiones" href="#collapse-Exclusiones-03_29Eliminarexclusiones" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>03) Eliminar exclusiones</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/exclusions/delete/:exclusion_id</h4></a></div><div id="collapse-Exclusiones-03_29Eliminarexclusiones" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite eliminar una exclusión creada por Usuario.</p><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_exclusionNotFound</td><td align="center">No existe exclusión con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>exclusion_id</td><td>3</td><td><p>Id de exlcusión a eliminar. Requerido.</p></td></tr></tbody></table><h5 class="label label-primary">Body</h5><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Exclusiones_03_29Eliminarexclusiones_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Exclusiones_03_29Eliminarexclusiones_1_Error_28Status400_29">Error (Status 400)</option></select><br><section id="req_res_Exclusiones_03_29Eliminarexclusiones_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/exclusions/delete/:exclusion_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>exclusion_id</td><td>2</td><td><p>Id de exlcusión a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_exclusionDeleted"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Exclusiones_03_29Eliminarexclusiones_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/exclusions/delete/:exclusion_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>exclusion_id</td><td>33</td><td><p>Id de exlcusión a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_exclusionNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Listasdecontactos">Listas de contactos
<span class="badge">5</span></h3></div><div class="panel-body"><p></p><p>Este módulo agrupa servicios para la gestión de las listas de contactos que podrán ser utilizadas en tus campañas.</p><div class="request-item"><div class="panel-group" id="accordion-Listasdecontactos"><div class="panel panel-success" id="jump-Listasdecontactos-01_29Obtenercolecci_C3_B3ndelistasdecontactos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Listasdecontactos" href="#collapse-Listasdecontactos-01_29Obtenercolecci_C3_B3ndelistasdecontactos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Obtener colección de listas de contactos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/listscontacts/getall</h4></a></div><div id="collapse-Listasdecontactos-01_29Obtenercolecci_C3_B3ndelistasdecontactos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve una lista de todas las listas de contactos. Pueden filtrarse por nombre.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la lista</td></tr><tr><td align="left">name</td><td align="center">Nombre de la lista</td></tr><tr><td align="left">count</td><td align="center">Cantidad de contactos</td></tr><tr><td align="left">lastSend</td><td align="center">Fecha de último envío</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>nombre</td><td><p>Filtro por nombre o parte del nombre de lista.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar las listas. Valores posibles: name/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>desc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Listasdecontactos_01_29Obtenercolecci_C3_B3ndelistasdecontactos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Listasdecontactos_01_29Obtenercolecci_C3_B3ndelistasdecontactos_1_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Listasdecontactos_01_29Obtenercolecci_C3_B3ndelistasdecontactos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar las listas. Valores posibles: nombre/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>desc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"id": 2,
"name": "ListaPrueba2",
"count": 3,
"lastSend": "2021-09-03 14:56:05"
},
{
"id": 1,
"name": "ListaPrueba1",
"count": 3,
"lastSend": "2021-09-07 16:22:12"
}
],
"first_page_url": "http://api.catatrepa.com/listscontacts/getall?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http://api.catatrepa.com/listscontacts/getall?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "http://api.catatrepa.com/listscontacts/getall?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "http://api.catatrepa.com/listscontacts/getall",
"per_page": "10",
"prev_page_url": null,
"to": 2,
"total": 2
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Listasdecontactos_01_29Obtenercolecci_C3_B3ndelistasdecontactos_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>nombre</td><td><p>Filtro por nombre o parte del nombre de lista.</p></td></tr><tr><td>limit</td><td>10p</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar las listas. Valores posibles: nombre/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>desc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"limit": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-info" id="jump-Listasdecontactos-02_29Obtenereldetalledeunalista"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Listasdecontactos" href="#collapse-Listasdecontactos-02_29Obtenereldetalledeunalista" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>02) Obtener el detalle de una lista</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/listscontacts/20</h4></a></div><div id="collapse-Listasdecontactos-02_29Obtenereldetalledeunalista" class="panel-collapse collapse"><div class="panel-body"><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Listasdecontactos_02_29Obtenereldetalledeunalista_0_Ok_28Status200_29">Ok ( Status 200)
</option><option value="req_res_Listasdecontactos_02_29Obtenereldetalledeunalista_1_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Listasdecontactos_02_29Obtenereldetalledeunalista_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/20</h5><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"id": 20,
"name": "test import",
"count": 6,
"lastSend": "2021-04-21 10:49:43"
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Listasdecontactos_02_29Obtenereldetalledeunalista_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/201</h5><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactListNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section></div></div></div><div class="panel panel-success" id="jump-Listasdecontactos-03_29Crearlistasdecontactos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Listasdecontactos" href="#collapse-Listasdecontactos-03_29Crearlistasdecontactos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>03) Crear listas de contactos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/listscontacts/create</h4></a></div><div id="collapse-Listasdecontactos-03_29Crearlistasdecontactos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite crear una nueva lista.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID de la lista creada</td></tr><tr><td align="left">name</td><td align="center">Nombre de la lista</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Lista nueva</td><td><p>Nombre de la lista. Requerido. No se permiten caracteres especiales.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Listasdecontactos_03_29Crearlistasdecontactos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Listasdecontactos_03_29Crearlistasdecontactos_1_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Listasdecontactos_03_29Crearlistasdecontactos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>Lista nueva</td><td><p>Nombre de la lista. Requerido. No se permiten caracteres especiales.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_contactListCreated",
"data": {
"id": 3,
"name": "Lista nueva"
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Listasdecontactos_03_29Crearlistasdecontactos_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/create</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>ListaPrueba2</td><td><p>Nombre de la lista. Requerido. No se permiten caracteres especiales.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"name": "is_used"
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Listasdecontactos-04_29Editarlistasdecontactos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Listasdecontactos" href="#collapse-Listasdecontactos-04_29Editarlistasdecontactos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>04) Editar listas de contactos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/listscontacts/edit</h4></a></div><div id="collapse-Listasdecontactos-04_29Editarlistasdecontactos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite editar una lista.</p><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_contactListNotFound</td><td align="center">No existe lista con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr><tr><td>name</td><td>Lista de prueba</td><td><p>Nombre de la lista. Requerido. No se permiten caracteres especiales.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Listasdecontactos_04_29Editarlistasdecontactos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Listasdecontactos_04_29Editarlistasdecontactos_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Listasdecontactos_04_29Editarlistasdecontactos_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Listasdecontactos_04_29Editarlistasdecontactos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>1</td><td><p>Id de la lista. Requerido.</p></td></tr><tr><td>name</td><td>Otra lista</td><td><p>Nombre de la lista. Requerido. No se permiten caracteres especiales.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_contactListUpdated"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Listasdecontactos_04_29Editarlistasdecontactos_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>13</td><td><p>Id de la lista. Requerido.</p></td></tr><tr><td>name</td><td>Nombre lista</td><td><p>Nombre de la lista. Requerido. No se permiten caracteres especiales.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactListNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Listasdecontactos_04_29Editarlistasdecontactos_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/edit</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>13-</td><td><p>Id de la lista. Requerido.</p></td></tr><tr><td>name</td><td>Nombre lista</td><td><p>Nombre de la lista. Requerido. No se permiten caracteres especiales.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-info" id="jump-Listasdecontactos-05_29Eliminarlistasdecontactos"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Listasdecontactos" href="#collapse-Listasdecontactos-05_29Eliminarlistasdecontactos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>05) Eliminar listas de contactos</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/listscontacts/delete/:list_id</h4></a></div><div id="collapse-Listasdecontactos-05_29Eliminarlistasdecontactos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Permite eliminar una lista.</p><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_listContactNotFound</td><td align="center">No existe lista con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>list_id</td><td>10</td><td><p>Id de lista a eliminar. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Listasdecontactos_05_29Eliminarlistasdecontactos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Listasdecontactos_05_29Eliminarlistasdecontactos_1_Error_28Status400_29">Error (Status 400)</option></select><br><section id="req_res_Listasdecontactos_05_29Eliminarlistasdecontactos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/delete/:list_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>list_id</td><td>3</td><td><p>Id de lista a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"code": "msg_contactListDeleted"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Listasdecontactos_05_29Eliminarlistasdecontactos_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/listscontacts/delete/:list_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>list_id</td><td>152</td><td><p>Id de lista a eliminar. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_listContactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Reportesdecampa_C3_B1as">Reportes de campañas
<span class="badge">10</span></h3></div><div class="panel-body"><p></p><p>Este módulo te permitirá conocer el reporte y las estadísticas de cada campaña enviada.</p><div class="request-item"><div class="panel-group" id="accordion-Reportesdecampa_C3_B1as"><div class="panel panel-info" id="jump-Reportesdecampa_C3_B1as-01_29Reportegeneral"><div class="panel-heading"><a class="text-info" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-01_29Reportegeneral" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Reporte general</strong> &nbsp;|&nbsp;
<strong class="request-method border-info">GET</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/:campaign_id</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-01_29Reportegeneral" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el reporte general de una campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="center">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="center">campaign.name</td><td align="center">Nombre de la campaña</td></tr><tr><td align="center">campaign.sendDate</td><td align="center">Fecha y hora de envío</td></tr><tr><td align="center">publicURL</td><td align="center">Url reporte público</td></tr><tr><td align="center">delivery.total</td><td align="center">Total de contactos. Es la suma de todos los contactos incluidos dentro de las listas o segmentos a los que se envió la campaña</td></tr><tr><td align="center">delivery.exclusions.duplicated.Amount</td><td align="center">Contactos repetidos</td></tr><tr><td align="center">delivery.exclusions.duplicated.Percentage</td><td align="center">Porcentaje de contactos repetidos sobre el total de contactos excluidos del envío</td></tr><tr><td align="center">delivery.exclusions.banned.Amount</td><td align="center">Contactos en lista de exclusión</td></tr><tr><td align="center">delivery.exclusions.banned.Percentage</td><td align="center">Porcentaje de contactos en lista de exclusión sobre el total de contactos excluidos del envío</td></tr><tr><td align="center">delivery.exclusions.total</td><td align="center">Contactos excluidos del envío (Contactos repetidos + Contactos en lista de exclusión)</td></tr><tr><td align="center">delivery.exclusions.totalPercentage</td><td align="center">Porcentaje de contactos excluídos sobre el total de contactos</td></tr><tr><td align="center">delivery.bounces.hard.Amount</td><td align="center">Rebotes duros</td></tr><tr><td align="center">delivery.bounces.hard.Percentage</td><td align="center">Porcentaje de rebotes duros sobre el total de rebotes</td></tr><tr><td align="center">delivery.bounces.soft.Amount</td><td align="center">Rebotes blandos</td></tr><tr><td align="center">delivery.bounces.soft.Percentage</td><td align="center">Porcentaje de rebotes blandos sobre el total de rebotes</td></tr><tr><td align="center">delivery.bounces.total</td><td align="center">Total de rebotes. Son los mails que no pudieron entregarse porque los servidores de los correos de destino los rechazaron</td></tr><tr><td align="center">delivery.bounces.totalPercentage</td><td align="center">Porcentaje de rebotes sobre el total de contactos</td></tr><tr><td align="center">delivery.pending</td><td align="center">Total de pendientes. Son las direcciones de correo a las que el sistema aún no ha enviado el mail</td></tr><tr><td align="center">delivery.pendingPercentage</td><td align="center">Porcentaje de pendientes sobre el total de contactos</td></tr><tr><td align="center">delivery.delivered</td><td align="center">Total entregados. Comprende el total de mails que llegaron a destino</td></tr><tr><td align="center">delivery.deliveredPercentage</td><td align="center">Porcentaje de entregados sobre el total de contactos</td></tr><tr><td align="center">performance.reads</td><td align="center">Cantidad de veces que fue abierta la campaña</td></tr><tr><td align="center">performance.uniqueReads</td><td align="center">Cantidad de contactos que abrieron la campaña</td></tr><tr><td align="center">performance.readsPercentage</td><td align="center">Porcentaje de contactos que abrieron la campaña sobre el total entregado</td></tr><tr><td align="center">performance.clicks</td><td align="center">Cantidad de clicks que se hicieron en la campaña</td></tr><tr><td align="center">performance.uniqueClicks</td><td align="center">Cantidad de contactos que hicieron click en la campaña</td></tr><tr><td align="center">performance.clicksPercentage</td><td align="center">Porcentaje de contactos que hicieron click en la campaña sobre el total entregado</td></tr><tr><td align="center">performance.shared.total</td><td align="center">Total de compartidos</td></tr><tr><td align="center">performance.shared.forwardto.Amount</td><td align="center">Total de compartidos por correo</td></tr><tr><td align="center">performance.shared.forwardto.Percentage</td><td align="center">Porcentaje de compartidos por correo</td></tr><tr><td align="center">performance.shared.facebook.Amount</td><td align="center">Total de compartidos por Facebook</td></tr><tr><td align="center">performance.shared.facebook.Percentage</td><td align="center">Porcentaje de compartidos por Facebook</td></tr><tr><td align="center">performance.shared.linkedin.Amount</td><td align="center">Total de compartidos por LinkedIn</td></tr><tr><td align="center">performance.shared.linkedin.Percentage</td><td align="center">Porcentaje de compartidos por LinkedIn</td></tr><tr><td align="center">performance.shared.twitter.Amount</td><td align="center">Total de compartidos por Twitter</td></tr><tr><td align="center">performance.shared.twitter.Percentage</td><td align="center">Porcentaje de compartidos por Twitter</td></tr><tr><td align="center">performance.shared.pinterest.Amount</td><td align="center">Total de compartidos por Pinterest</td></tr><tr><td align="center">performance.shared.pinterest.Percentage</td><td align="center">Porcentaje de compartidos por Pinterest</td></tr><tr><td align="center">performance.shared.whatsapp.Amount</td><td align="center">Total de compartidos por Whatsapp</td></tr><tr><td align="center">performance.shared. whatsapp.Percentage</td><td align="center">Porcentaje de compartidos por Whatsapp</td></tr><tr><td align="center">performance.unsubscriptions.total</td><td align="center">Total de desuscripciones</td></tr><tr><td align="center">performance.unsubscriptions.alreadyUnsubscribed.Amount</td><td align="center">Total de desuscriptos con motivo Ya me desuscribi</td></tr><tr><td align="center">performance.unsubscriptions.alreadyUnsubscribed.Percentage</td><td align="center">Porcentaje de desuscriptos con motivo Ya me desuscribi</td></tr><tr><td align="center">performance.unsubscriptions.irrelevant.Amount</td><td align="center">Total de desuscriptos con motivo Contenidos irrelevantes</td></tr><tr><td align="center">performance.unsubscriptions.irrelevant.Percentage</td><td align="center">Porcentaje de desuscriptos por Contenidos irrelevantes</td></tr><tr><td align="center">performance.unsubscriptions.neverSignUp.Amount</td><td align="center">Total de desuscriptos con motivo Nunca me suscribi</td></tr><tr><td align="center">performance.unsubscriptions.neverSignUp.Percentage</td><td align="center">Porcentaje de desuscriptos con motivo Nunca me suscribi</td></tr><tr><td align="center">performance.unsubscriptions.spam.Amount</td><td align="center">Total de desuscriptos con motivo Lo considero SPAM</td></tr><tr><td align="center">performance.unsubscriptions.spam.Percentage</td><td align="center">Porcentaje de desuscriptos con motivo Lo considero SPAM</td></tr><tr><td align="center">performance.unsubscriptions.tooOften.Amount</td><td align="center">Total de desuscriptos con motivo Demasiada frecuencia</td></tr><tr><td align="center">performance.unsubscriptions.tooOften.Percentage</td><td align="center">Porcentaje de desuscriptos con motivo Demasiada frecuencia</td></tr><tr><td align="center">performance.unsubscriptions.other.Amount</td><td align="center">Total de desuscriptos con otros motivos</td></tr><tr><td align="center">performance.unsubscriptions.other.Percentage</td><td align="center">Porcentaje de desuscriptos con otros motivos</td></tr><tr><td align="center">performance.complaints</td><td align="center">Cantidad de quejas. Es el número de destinatarios que marcaron la campaña como spam</td></tr><tr><td align="center">devices.mobileTotal</td><td align="center">Total de aperturas en Móviles</td></tr><tr><td align="center">devices.mobilePercentage</td><td align="center">Porcentaje de aperturas en Móviles</td></tr><tr><td align="center">devices.mobileAgents</td><td align="center">Detalle de aperturas en Móviles (Cantidad por agente y Porcentaje)</td></tr><tr><td align="center">devices.desktopTotal</td><td align="center">Total de aperturas en Escritorio</td></tr><tr><td align="center">devices.desktopPercentage</td><td align="center">Porcentaje de aperturas en Escritorio</td></tr><tr><td align="center">devices.desktopAgents</td><td align="center">Detalle de aperturas en Escritorio (Cantidad por agente y Porcentaje)</td></tr><tr><td align="center">devices.tabletTotal</td><td align="center">Total de aperturas en Tablets</td></tr><tr><td align="center">devices.tabletPercentage</td><td align="center">Porcentaje de aperturas en Tablets</td></tr><tr><td align="center">devices.tabletAgents</td><td align="center">Detalle de aperturas en Tablets (Cantidad por agente y Porcentaje)</td></tr><tr><td align="center">devices.unknownTotal</td><td align="center">Total de aperturas en Dispositvos desconocidos</td></tr><tr><td align="center">devices.unknownPercentage</td><td align="center">Porcentaje de aperturas en Dispositvos desconocidos</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th align="left">Código</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">errorMsg_campaignNotFound</td><td align="center">No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>campaign_id</td><td>100</td><td></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_01_29Reportegeneral_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_01_29Reportegeneral_1_Error_28Status400_29">Error (Status 400)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_01_29Reportegeneral_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/:campaign_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>campaign_id</td><td>100</td><td></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"campaign": {
"name": "Promoción 2x1",
"sendDate": "2021-09-12 08:36:04"
},
"publicURL": "https://v3.envialosimple.com/report/guest/APIKey/xxxxxxxxxxxxx56b93236dad7f6f2de66dc7f33a12b2706a8e00c1bc05a1907ade1c922c764c2b2f/lang/es",
"delivery": {
"total": 4,
"exclusions": {
"groups": {
"duplicated": {
"Amount": 0,
"Percentage": 0
},
"banned": {
"Amount": 0,
"Percentage": 0
}
},
"total": 0,
"totalPercentage": 0
},
"bounces": {
"groups": {
"hard": {
"Amount": 0,
"Percentage": 0
},
"soft": {
"Amount": 0,
"Percentage": 0
}
},
"total": 0,
"totalPercentage": 0
},
"pending": 0,
"pendingPercentage": 0,
"delivered": 4,
"deliveredPercentage": 100
},
"performance": {
"reads": 4,
"uniqueReads": 1,
"readsPercentage": 25,
"clicks": 13,
"uniqueClicks": 1,
"clicksPercentage": 25,
"shared": {
"total": 5,
"detail": {
"forwardto": {
"Amount": 0,
"Percentage": 0
},
"facebook": {
"Amount": 1,
"Percentage": 20
},
"linkedin": {
"Amount": 1,
"Percentage": 20
},
"twitter": {
"Amount": 1,
"Percentage": 20
},
"pinterest": {
"Amount": 1,
"Percentage": 20
},
"whatsapp": {
"Amount": 1,
"Percentage": 20
}
}
},
"unsubscriptions": {
"total": 0,
"detail": {
"alreadyUnsubscribed": {
"Amount": 0,
"Percentage": 0
},
"irrelevant": {
"Amount": 0,
"Percentage": 0
},
"neverSignUp": {
"Amount": 0,
"Percentage": 0
},
"spam": {
"Amount": 0,
"Percentage": 0
},
"tooOften": {
"Amount": 0,
"Percentage": 0
},
"other": {
"Amount": 0,
"Percentage": 0
}
}
},
"complaints": 0
},
"devices": {
"mobileTotal": 0,
"mobilePercentage": 0,
"mobileAgents": {
"Otros": {
"amount": 0,
"percentage": 0
}
},
"desktopTotal": 4,
"desktopPercentage": 100,
"desktopAgents": {
"Chrome": {
"amount": 4,
"percentage": 100
},
"Otros": {
"amount": 0,
"percentage": 0
}
},
"tabletTotal": 0,
"tabletPercentage": 0,
"tabletAgents": {
"Otros": {
"amount": 0,
"percentage": 0
}
},
"unknownTotal": 0,
"unknownPercentage": 0
}
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_01_29Reportegeneral_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/:campaign_id</h5><h5 class="label label-info">URL Variables</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>campaign_id</td><td>999</td><td></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-02_29Detalledeaperturas"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-02_29Detalledeaperturas" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>02) Detalle de aperturas</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/reads</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-02_29Detalledeaperturas" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de las aperturas de la campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>email</td><td>Email del contacto que realizó la apertura</td></tr><tr><td>date</td><td>Fecha y hora de la apertura</td></tr><tr><td>countryCode</td><td>País donde se abrió la campaña (Código ISO)</td></tr><tr><td>city</td><td>Cuidad donde se abrió la campaña (Descripción)</td></tr><tr><td>platform</td><td>Dispositivo donde se abrió la campaña</td></tr><tr><td>latitude</td><td>Coordenada geográfica donde se abrió la campaña (latitud)</td></tr><tr><td>longitude</td><td>Coordenada geográfica donde se abrió la campaña (longitud)</td></tr><tr><td>app</td><td>Aplicación donde se abrió la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_02_29Detalledeaperturas_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_02_29Detalledeaperturas_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_02_29Detalledeaperturas_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_02_29Detalledeaperturas_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/reads</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>page</td><td>1</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>limit</td><td>3</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"email": "contacto1@ejemplo.com",
"date": "2021-09-22 09:45:16",
"countryCode": "AR",
"city": "Rosario",
"platform": "Desktop",
"latitude": "-32.9468002319336",
"longitude": "-60.6393013000488",
"app": "Thunderbird"
},
{
"email": "contacto2@ejemplo.com",
"date": "2021-09-22 09:45:18",
"countryCode": "AR",
"city": "Rosario",
"platform": "Desktop",
"latitude": "-32.9468002319336",
"longitude": "-60.6393013000488",
"app": "Thunderbird"
},
{
"email": "contacto3@ejemplo.com",
"date": "2021-09-22 09:45:39",
"countryCode": "AR",
"city": "Rosario",
"platform": "Desktop",
"latitude": "-32.9468002319336",
"longitude": "-60.6393013000488",
"app": "Thunderbird"
}
],
"first_page_url": "https://api.catatrepa.com/report/campaign/reads?page=1",
"from": 1,
"last_page": 6,
"last_page_url": "https://api.catatrepa.com/report/campaign/reads?page=6",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/reads?page=1",
"label": 1,
"active": true
},
{
"url": "https://api.catatrepa.com/report/campaign/reads?page=2",
"label": 2,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/reads?page=3",
"label": 3,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/reads?page=4",
"label": 4,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/reads?page=5",
"label": 5,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/reads?page=6",
"label": 6,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/reads?page=2",
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": "https://api.catatrepa.com/report/campaign/reads?page=2",
"path": "https://api.catatrepa.com/report/campaign/reads",
"per_page": "3",
"prev_page_url": null,
"to": 3,
"total": 16
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_02_29Detalledeaperturas_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/reads</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3500</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_02_29Detalledeaperturas_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/reads</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>100</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>ascen</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"order": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-03_29Detalledeclicks"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-03_29Detalledeclicks" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>03) Detalle de clicks</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/clicks</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-03_29Detalledeclicks" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de los clicks realizados en la campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora del click</td></tr><tr><td>url</td><td>Url donde se hizó click</td></tr><tr><td>email</td><td>Email del contacto que realizó el click</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_03_29Detalledeclicks_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_03_29Detalledeclicks_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_03_29Detalledeclicks_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_03_29Detalledeclicks_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/clicks</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>page</td><td>1</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>limit</td><td>3</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>desc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-09-23 11:37:34",
"url": "https://www.facebook.com/share.php?mkt_hm=7&amp;u=...",
"email": "contacto1@ejemplo.com"
},
{
"date": "2021-09-22 09:51:24",
"url": "https://v3.envialosimple.com/guest/forward?mkt_hm=8&amp;...",
"email": "contacto2@ejemplo.com"
},
{
"date": "2021-09-21 09:50:02",
"url": "https://v3.envialosimple.com/guest/forward?mkt_hm=8&amp;...",
"email": "contacto3@ejemplo.com"
}
],
"first_page_url": "https://api.catatrepa.com/report/campaign/clicks?page=1",
"from": 1,
"last_page": 3,
"last_page_url": "https://api.catatrepa.com/report/campaign/clicks?page=3",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/clicks?page=1",
"label": 1,
"active": true
},
{
"url": "https://api.catatrepa.com/report/campaign/clicks?page=2",
"label": 2,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/clicks?page=3",
"label": 3,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/clicks?page=2",
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": "https://api.catatrepa.com/report/campaign/clicks?page=2",
"path": "https://api.catatrepa.com/report/campaign/clicks",
"per_page": "3",
"prev_page_url": null,
"to": 3,
"total": 8
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_03_29Detalledeclicks_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/clicks</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3500</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_03_29Detalledeclicks_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/clicks</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10p</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"limit": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-04_29Detalledecompartidos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-04_29Detalledecompartidos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>04) Detalle de compartidos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/shared</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-04_29Detalledecompartidos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de los compartidos de la campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora que se compartió la campaña</td></tr><tr><td>via</td><td>Medio donde se compartió la campaña. Valores posibles:<br>forwardto -&gt; Correo<br>facebook -&gt; Facebook<br>twitter -&gt; Twitter<br>linkedin -&gt; LinkedIn<br>pinterest -&gt; Pinterest<br>whatsapp -&gt; WhatsApp</td></tr><tr><td>email</td><td>Email del contacto que compartió la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_04_29Detalledecompartidos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_04_29Detalledecompartidos_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_04_29Detalledecompartidos_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_04_29Detalledecompartidos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/shared</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>page</td><td>1</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>limit</td><td>5</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-09-10 09:46:05",
"via": "whatsapp",
"email": "contacto1@ejemplo.com"
},
{
"date": "2021-09-22 09:46:48",
"via": "twitter",
"email": "contacto1@ejemplo.com"
},
{
"date": "2021-09-22 09:46:55",
"via": "pinterest",
"email": "contacto1@ejemplo.com"
},
{
"date": "2021-09-22 09:46:59",
"via": "linkedin",
"email": "contacto2@ejemplo.com"
},
{
"date": "2021-09-22 09:47:02",
"via": "facebook",
"email": "contacto3@ejemplo.com"
}
],
"first_page_url": "https://api.catatrepa.com/report/campaign/shared?page=1",
"from": 1,
"last_page": 2,
"last_page_url": "https://api.catatrepa.com/report/campaign/shared?page=2",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/shared?page=1",
"label": 1,
"active": true
},
{
"url": "https://api.catatrepa.com/report/campaign/shared?page=2",
"label": 2,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/shared?page=2",
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": "https://api.catatrepa.com/report/campaign/shared?page=2",
"path": "https://api.catatrepa.com/report/campaign/shared",
"per_page": "5",
"prev_page_url": null,
"to": 5,
"total": 8
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_04_29Detalledecompartidos_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/shared</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3500</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_04_29Detalledecompartidos_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/shared</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>120</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"limit": [
"invalid_max_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-05_29Detallederebotes"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-05_29Detallederebotes" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>05) Detalle de rebotes</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/bounces</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-05_29Detallederebotes" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de los rebotes (duros y blandos) que se registraron para la campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora del rebote</td></tr><tr><td>type</td><td>Tipo de rebote. Valores posibles:<br>soft -&gt; Rebote blando<br>hard -&gt; Rebote duro</td></tr><tr><td>email</td><td>Email del contacto que rebotó</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr><tr><td>type</td><td>hard</td><td><p>Filtro por tipo de rebote. Valores posibles: soft/hard.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_05_29Detallederebotes_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_05_29Detallederebotes_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_05_29Detallederebotes_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_05_29Detallederebotes_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/bounces</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>page</td><td>1</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>limit</td><td>3</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr><tr><td>type</td><td>hard</td><td><p>Filtro por tipo de rebote. Valores posibles: soft/hard.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-11-03 11:18:10",
"type": "Hard",
"email": "contacto1@ejemplo.com"
},
{
"date": "2021-11-03 11:18:11",
"type": "Hard",
"email": "contacto2@ejemplo.com"
},
{
"date": "2021-11-03 11:18:12",
"type": "Hard",
"email": "contacto3@ejemplo.com"
}
],
"first_page_url": "https://api.catatrepa.com/report/campaign/bounces?page=1",
"from": 1,
"last_page": 7,
"last_page_url": "https://api.catatrepa.com/report/campaign/bounces?page=7",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/bounces?page=1",
"label": 1,
"active": true
},
{
"url": "https://api.catatrepa.com/report/campaign/bounces?page=2",
"label": 2,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/bounces?page=3",
"label": 3,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/bounces?page=4",
"label": 4,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/bounces?page=5",
"label": 5,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/bounces?page=6",
"label": 6,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/bounces?page=7",
"label": 7,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/bounces?page=2",
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": "https://api.catatrepa.com/report/campaign/bounces?page=2",
"path": "https://api.catatrepa.com/report/campaign/bounces",
"per_page": "3",
"prev_page_url": null,
"to": 3,
"total": 21
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_05_29Detallederebotes_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/bounces</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3500</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr><tr><td>type</td><td>hard</td><td><p>Filtro por tipo de rebote. Valores posibles: soft/hard.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_05_29Detallederebotes_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/bounces</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr><tr><td>type</td><td>softs</td><td><p>Filtro por tipo de rebote. Valores posibles: soft/hard.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"type": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-06_29Detallededesuscripciones"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-06_29Detallededesuscripciones" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>06) Detalle de desuscripciones</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/unsubscribe</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-06_29Detallededesuscripciones" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de desuscripciones realizadas en la campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora de la desuscripción</td></tr><tr><td>reason</td><td>Razón de la desuscripción. Valores posibles:<br>irrelevant -&gt; Contenidos irrelevantes<br>tooOften -&gt; Demasiada frecuencia<br>neverSignUp -&gt; Nunca me suscribí<br>alreadyUnsubscribed -&gt; Ya me desuscribí<br>spam -&gt; Lo considero SPAM<br>other -&gt; Otros</td></tr><tr><td>note</td><td>Notas adicionales cuando selecciona motivo = Otros</td></tr><tr><td>email</td><td>Email del contacto que se desuscribió</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_06_29Detallededesuscripciones_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_06_29Detallededesuscripciones_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_06_29Detallededesuscripciones_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_06_29Detallededesuscripciones_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/unsubscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>page</td><td>1</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>limit</td><td>5</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>desc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-09-22 11:42:31",
"reason": "other",
"note": "Motivo de prueba",
"email": "contacto1@ejemplo.com"
},
{
"date": "2021-09-22 11:41:50",
"reason": "other",
"note": "No me interesan las promociones",
"email": "contacto2@ejemplo.com"
},
{
"date": "2021-09-22 11:41:25",
"reason": "alreadyUnsubscribed",
"note": "",
"email": "contacto3@ejemplo.com"
},
{
"date": "2021-08-28 17:12:22",
"reason": "neverSignUp",
"note": "",
"email": "contacto4@ejemplo.com"
},
{
"date": "2021-08-28 10:40:31",
"reason": "spam",
"note": "",
"email": "contacto5@ejemplo.com"
}
],
"first_page_url": "https://api.catatrepa.com/report/campaign/unsubscribe?page=1",
"from": 1,
"last_page": 2,
"last_page_url": "https://api.catatrepa.com/report/campaign/unsubscribe?page=2",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/unsubscribe?page=1",
"label": 1,
"active": true
},
{
"url": "https://api.catatrepa.com/report/campaign/unsubscribe?page=2",
"label": 2,
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/unsubscribe?page=2",
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": "https://api.catatrepa.com/report/campaign/unsubscribe?page=2",
"path": "https://qaapi.catatrepa.com/report/campaign/unsubscribe",
"per_page": "5",
"prev_page_url": null,
"to": 5,
"total": 6
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_06_29Detallededesuscripciones_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/unsubscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3500</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_06_29Detallededesuscripciones_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/unsubscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>100</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1a</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"page": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-07_29Detalledequejas"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-07_29Detalledequejas" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>07) Detalle de quejas</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/complaints</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-07_29Detalledequejas" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de quejas realizadas en la campaña.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora de la queja</td></tr><tr><td>email</td><td>Email del contacto que realizó la queja</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_07_29Detalledequejas_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_07_29Detalledequejas_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_07_29Detalledequejas_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_07_29Detalledequejas_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/complaints</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>page</td><td>1</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-11-01 09:24:16",
"email": "contacto1@gmail.com"
}
],
"first_page_url": "https://api.catatrepa.com/report/campaign/complaints?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "https://api.catatrepa.com/report/campaign/complaints?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/complaints?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "https://api.catatrepa.com/report/campaign/complaints",
"per_page": "10",
"prev_page_url": null,
"to": 1,
"total": 1
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_07_29Detalledequejas_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/complaints</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3500</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_07_29Detalledequejas_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/complaints</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386=</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-08_29Detalledeexcluidos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-08_29Detalledeexcluidos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>08) Detalle de excluidos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/exclusions</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-08_29Detalledeexcluidos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de contactos excluidos ya sea por duplicado o por estar en lista de exclusión. Tener en cuenta que estos últimos sólo se registraban en las versiones anteriores; ahora no se registran más.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>email</td><td>Email del contacto excluido</td></tr><tr><td>reason</td><td>Razón de la exclusión. Valores posibles:<br>duplicated -&gt; Duplicado<br>banned -&gt; En lista de exclusión</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por email. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_08_29Detalledeexcluidos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_08_29Detalledeexcluidos_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_08_29Detalledeexcluidos_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_08_29Detalledeexcluidos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/exclusions</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>15</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por email. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"email": "contacto1@ejemplo.com",
"reason": "duplicated"
},
{
"email": "contacto2@ejemplo.com",
"reason": "duplicated"
},
{
"email": "contacto3@ejemplo.com",
"reason": "duplicated"
},
{
"email": "contacto4@ejemplo.com",
"reason": "duplicated"
}
],
"first_page_url": "https://api.catatrepa.com/report/campaign/exclusions?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "https://api.catatrepa.com/report/campaign/exclusions?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/campaign/exclusions?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "https://api.catatrepa.com/report/campaign/exclusions",
"per_page": "10",
"prev_page_url": null,
"to": 4,
"total": 4
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_08_29Detalledeexcluidos_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/exclusions</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>3500</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por email. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_08_29Detalledeexcluidos_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/exclusions</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1p</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por email. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"page": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-09_29Descargarenviados"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-09_29Descargarenviados" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>09) Descargar enviados</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/sents</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-09_29Descargarenviados" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve un archivo con el detalle de los contactos a los que se envió la campaña.</p><p><strong>Importante</strong>: Esta información solo estará disponible 6 meses desde el envío de la campaña, pasado ese tiempo no podrá descargarse más.</p><p><strong>Estructura de salida:</strong></p><p>Se generará un archivo <strong>sents.txt</strong> conteniendo en cada línea: fecha de envío, hora de envío y email del contacto al que se envió la campaña.</p><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado</td></tr><tr><td>errorMsg_campaignStatisticsNotFound</td><td>La campaña todavía no fue enviada</td></tr><tr><td>errorMsg_campaignSentsNotFound</td><td>El archivo ya no está disponible por haber pasado más de 6 meses desde el envío de la campaña</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_09_29Descargarenviados_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_09_29Descargarenviados_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_09_29Descargarenviados_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_09_29Descargarenviados_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/sents</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">2021-12-21 15:24:58 contacto1@ejemplo.com
2021-12-21 15:24:58 contacto2@ejemplo.com
2021-12-21 15:24:58 contacto3@ejemplo.com
2021-12-21 15:24:58 contacto4@ejemplo.com</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_09_29Descargarenviados_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/sents</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>80</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignSentsNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_09_29Descargarenviados_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/sents</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386a</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecampa_C3_B1as-10_29Descargarduplicados"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecampa_C3_B1as" href="#collapse-Reportesdecampa_C3_B1as-10_29Descargarduplicados" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>10) Descargar duplicados</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/campaign/duplicates</h4></a></div><div id="collapse-Reportesdecampa_C3_B1as-10_29Descargarduplicados" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve un archivo con el detalle de los contactos duplicados.</p><p><strong>Importante</strong>: Esta información solo estará disponible 6 meses desde el envío de la campaña, pasado ese tiempo no podrá descargarse más.</p><p><strong>Estructura de salida:</strong></p><p>Se generará un archivo <strong>duplicates.csv</strong> conteniendo dos datos: email del contacto repetido y cantidad de repeticiones.</p><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_campaignNotFound</td><td>No existe campaña con el ID informado</td></tr><tr><td>errorMsg_campaignStatisticsNotFound</td><td>La campaña todavía no fue enviada</td></tr><tr><td>errorMsg_campaignDuplicatesNotFound</td><td>El archivo ya no está disponible por haber pasado más de 6 meses desde el envío de la campaña</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecampa_C3_B1as_10_29Descargarduplicados_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecampa_C3_B1as_10_29Descargarduplicados_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecampa_C3_B1as_10_29Descargarduplicados_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecampa_C3_B1as_10_29Descargarduplicados_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/duplicates</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">Email, Repeticiones
contacto2@ejemplo.com, 1
contacto3@ejemplo.com, 2</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecampa_C3_B1as_10_29Descargarduplicados_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/duplicates</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>350</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_campaignStatisticsNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecampa_C3_B1as_10_29Descargarduplicados_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/campaign/duplicates</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>386a</td><td><p>Id de campaña. Requerido.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Reportesdecontactos">Reportes de contactos
<span class="badge">6</span></h3></div><div class="panel-body"><p></p><p>Este módulo te permitirá conocer el detalle de la actividad del contacto.</p><div class="request-item"><div class="panel-group" id="accordion-Reportesdecontactos"><div class="panel panel-success" id="jump-Reportesdecontactos-01_29Detalledeaperturas"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecontactos" href="#collapse-Reportesdecontactos-01_29Detalledeaperturas" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Detalle de aperturas</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/contact/reads</h4></a></div><div id="collapse-Reportesdecontactos-01_29Detalledeaperturas" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de las aperturas de campañas realizadas por el contacto.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora de la apertura</td></tr><tr><td>countryCode</td><td>País desde el que se abrió</td></tr><tr><td>platform</td><td>Dispositvo desde el que se abrió</td></tr><tr><td>campaignName</td><td>Nombre de la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_contactNotFound</td><td>No existe contacto con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecontactos_01_29Detalledeaperturas_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecontactos_01_29Detalledeaperturas_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecontactos_01_29Detalledeaperturas_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecontactos_01_29Detalledeaperturas_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/reads</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>4</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>desc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-11-26 11:07:42",
"countryCode": "AR",
"platform": "Desktop",
"campaignName": "Campaña ejemplo 4"
},
{
"date": "2021-11-26 11:07:26",
"countryCode": "AR",
"platform": "Desktop",
"campaignName": "Campaña ejemplo 3"
},
{
"date": "2021-10-07 11:40:16",
"countryCode": "AR",
"platform": "Desktop",
"campaignName": "Campaña ejemplo 2"
},
{
"date": "2021-10-06 15:59:31",
"countryCode": "AR",
"platform": "Desktop",
"campaignName": "Camapaña ejemplo 1"
}
],
"first_page_url": "https://api.catatrepa.com/report/contact/reads?page=1",
"from": 1,
"last_page": 14,
"last_page_url": "https://api.catatrepa.com/report/contact/reads?page=14",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=1",
"label": 1,
"active": true
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=2",
"label": 2,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=3",
"label": 3,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=4",
"label": 4,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=5",
"label": 5,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=6",
"label": 6,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=7",
"label": 7,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=8",
"label": 8,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=9",
"label": 9,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=10",
"label": 10,
"active": false
},
{
"url": null,
"label": "...",
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=13",
"label": 13,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=14",
"label": 14,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/reads?page=2",
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": "https://api.catatrepa.com/report/contact/reads?page=2",
"path": "https://api.catatrepa.com/report/contact/reads",
"per_page": "4",
"prev_page_url": null,
"to": 4,
"total": 54
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecontactos_01_29Detalledeaperturas_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/reads</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>25350</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecontactos_01_29Detalledeaperturas_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/reads</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2a</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecontactos-02_29Detalledeclicks"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecontactos" href="#collapse-Reportesdecontactos-02_29Detalledeclicks" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>02) Detalle de clicks</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/contact/clicks</h4></a></div><div id="collapse-Reportesdecontactos-02_29Detalledeclicks" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de los clicks realizados por el contacto.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora del click</td></tr><tr><td>url</td><td>URL donde hizo click</td></tr><tr><td>campaignName</td><td>Nombre de la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_contactNotFound</td><td>No existe contacto con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecontactos_02_29Detalledeclicks_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecontactos_02_29Detalledeclicks_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecontactos_02_29Detalledeclicks_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecontactos_02_29Detalledeclicks_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/clicks</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>2</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-03-23 15:30:07",
"url": "https://v3.envialosimple.com/guest/forward?mkt_hm=2&amp;AdministratorID=55555&amp;CampaignID=2&amp;StatisticID=113&amp;MemberID=26&amp;s=3e25ea1baa7460729f686fa614cc447c&amp;isDemo=0",
"campaignName": "Campaña descuentos"
},
{
"date": "2021-08-17 08:58:26",
"url": "https://www.facebook.com/share.php?mkt_hm=6&amp;u=https%3A%2F%2Fv3.envialosimple.com%2Fcampaign%2Fhtmlversion%2FAdministratorID%2F55555%2FCampaignID%2F3%2FMemberID%2F2%2Fs%2Fb686f697bcfc9cc15301d21cb441a546%2Fsource%2Ffacebook&amp;t=Prueba%20mail%20de%20camp",
"campaignName": "Campaña promo 2x1"
}
],
"first_page_url": "https://api.catatrepa.com/report/contact/clicks?page=1",
"from": 1,
"last_page": 7,
"last_page_url": "https://api.catatrepa.com/report/contact/clicks?page=7",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/clicks?page=1",
"label": 1,
"active": true
},
{
"url": "https://api.catatrepa.com/report/contact/clicks?page=2",
"label": 2,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/clicks?page=3",
"label": 3,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/clicks?page=4",
"label": 4,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/clicks?page=5",
"label": 5,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/clicks?page=6",
"label": 6,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/clicks?page=7",
"label": 7,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/clicks?page=2",
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": "https://api.catatrepa.com/report/contact/clicks?page=2",
"path": "https://api.catatrepa.com/report/contact/clicks",
"per_page": "2",
"prev_page_url": null,
"to": 2,
"total": 13
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecontactos_02_29Detalledeclicks_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/clicks</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>25350</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecontactos_02_29Detalledeclicks_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/clicks</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>120</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"limit": [
"invalid_max_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecontactos-03_29Detalledecompartidos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecontactos" href="#collapse-Reportesdecontactos-03_29Detalledecompartidos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>03) Detalle de compartidos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/contact/shared</h4></a></div><div id="collapse-Reportesdecontactos-03_29Detalledecompartidos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de las campañas compartidas por el contacto.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora que compartió la campaña</td></tr><tr><td>via</td><td>Medio donde se compartió la campaña. Valores posibles:<br>forwardto -&gt; Correo<br>facebook -&gt; Facebook<br>twitter -&gt; Twitter<br>linkedin -&gt; LinkedIn<br>pinterest -&gt; Pinterest<br>whatsapp -&gt; WhatsApp</td></tr><tr><td>campaignName</td><td>Nombre de la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_contactNotFound</td><td>No existe contacto con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecontactos_03_29Detalledecompartidos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecontactos_03_29Detalledecompartidos_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecontactos_03_29Detalledecompartidos_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecontactos_03_29Detalledecompartidos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/shared</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>5</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>desc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-10-13 13:44:39",
"via": "whatsapp",
"campaignName": "Campaña ejemplo"
},
{
"date": "2021-10-13 13:44:31",
"via": "linkedin",
"campaignName": "Campaña ejemplo"
},
{
"date": "2021-10-13 13:44:24",
"via": "pinterest",
"campaignName": "Campaña ejemplo"
},
{
"date": "2021-10-13 13:44:10",
"via": "twitter",
"campaignName": "Campaña ejemplo"
},
{
"date": "2021-10-13 13:44:01",
"via": "facebook",
"campaignName": "Campaña ejemplo"
}
],
"first_page_url": "https://api.catatrepa.com/report/contact/shared?page=1",
"from": 1,
"last_page": 7,
"last_page_url": "https://api.catatrepa.com/report/contact/shared?page=7",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/shared?page=1",
"label": 1,
"active": true
},
{
"url": "https://api.catatrepa.com/report/contact/shared?page=2",
"label": 2,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/shared?page=3",
"label": 3,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/shared?page=4",
"label": 4,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/shared?page=5",
"label": 5,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/shared?page=6",
"label": 6,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/shared?page=7",
"label": 7,
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/shared?page=2",
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": "https://api.catatrepa.com/report/contact/shared?page=2",
"path": "https://api.catatrepa.com/report/contact/shared",
"per_page": "5",
"prev_page_url": null,
"to": 5,
"total": 33
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecontactos_03_29Detalledecompartidos_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/shared</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>25350</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecontactos_03_29Detalledecompartidos_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/shared</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1a</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"page": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecontactos-04_29Detallederebotes"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecontactos" href="#collapse-Reportesdecontactos-04_29Detallederebotes" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>04) Detalle de rebotes</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/contact/bounces</h4></a></div><div id="collapse-Reportesdecontactos-04_29Detallederebotes" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de los rebotes (duros y blandos) que se registraron para el contacto.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora del rebote</td></tr><tr><td>type</td><td>Tipo de rebote. Valores posibles:<br>soft -&gt; Rebote blando<br>hard -&gt; Rebote duro</td></tr><tr><td>campaignName</td><td>Nombre de la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_contactNotFound</td><td>No existe contacto con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr><tr><td>type</td><td>hard</td><td><p>Filtro por tipo de rebote. Valores posibles: soft/hard.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecontactos_04_29Detallederebotes_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecontactos_04_29Detallederebotes_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecontactos_04_29Detallederebotes_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecontactos_04_29Detallederebotes_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/bounces</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr><tr><td>type</td><td>hard</td><td><p>Filtro por tipo de rebote. Valores posibles: soft/hard.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-12-01 14:25:35",
"type": "Hard",
"campaignName": "Campaña ejemplo 1"
},
{
"date": "2021-12-15 14:27:01",
"type": "Hard",
"campaignName": "Campaña ejemplo 2"
}
],
"first_page_url": "https://api.catatrepa.com/report/contact/bounces?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "https://api.catatrepa.com/report/contact/bounces?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://qaapi.catatrepa.com/report/contact/bounces?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "https://api.catatrepa.com/report/contact/bounces",
"per_page": "10",
"prev_page_url": null,
"to": 2,
"total": 2
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecontactos_04_29Detallederebotes_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/bounces</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>25350</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr><tr><td>type</td><td>hard</td><td><p>Filtro por tipo de rebote. Valores posibles: soft/hard.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecontactos_04_29Detallederebotes_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/bounces</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr><tr><td>type</td><td>hards</td><td><p>Filtro por tipo de rebote. Valores posibles: soft/hard.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"type": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecontactos-05_29Detallededesuscripciones"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecontactos" href="#collapse-Reportesdecontactos-05_29Detallededesuscripciones" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>05) Detalle de desuscripciones</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/contact/unsubscribe</h4></a></div><div id="collapse-Reportesdecontactos-05_29Detallededesuscripciones" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de las desuscripciones realizadas por el contacto desde las campañas.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora de la desuscripción</td></tr><tr><td>reason</td><td>Razón de la desuscripción. Valores posibles:<br>irrelevant -&gt; Contenidos irrelevantes<br>tooOften -&gt; Demasiada frecuencia<br>neverSignUp -&gt; Nunca me suscribí<br>alreadyUnsubscribed -&gt; Ya me desuscribí<br>spam -&gt; Lo considero SPAM<br>other -&gt; Otros</td></tr><tr><td>campaignName</td><td>Nombre de la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_contactNotFound</td><td>No existe contacto con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecontactos_05_29Detallededesuscripciones_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecontactos_05_29Detallededesuscripciones_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecontactos_05_29Detallededesuscripciones_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecontactos_05_29Detallededesuscripciones_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/unsubscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>100</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-01-13 13:15:33",
"reason": "neverSignUp",
"campaignName": "Campaña ejemplo 1"
},
{
"date": "2021-09-22 11:41:50",
"reason": "other",
"campaignName": "Campaña ejemplo 2"
}
],
"first_page_url": "https://api.catatrepa.com/report/contact/unsubscribe?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "https://api.catatrepa.com/report/contact/unsubscribe?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/unsubscribe?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "https://api.catatrepa.com/report/contact/unsubscribe",
"per_page": "100",
"prev_page_url": null,
"to": 2,
"total": 2
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecontactos_05_29Detallededesuscripciones_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/unsubscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>25350</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecontactos_05_29Detallededesuscripciones_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/unsubscribe</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>ascen</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"order": [
"invalid_value_in"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div><div class="panel panel-success" id="jump-Reportesdecontactos-06_29Detalledequejas"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Reportesdecontactos" href="#collapse-Reportesdecontactos-06_29Detalledequejas" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>06) Detalle de quejas</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/report/contact/complaints</h4></a></div><div id="collapse-Reportesdecontactos-06_29Detalledequejas" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve el detalle de las quejas realizadas por el contacto desde las campañas.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th>Campo</th><th>Descripción</th></tr></thead><tbody><tr><td>date</td><td>Fecha y hora de la queja</td></tr><tr><td>campaignName</td><td>Nombre de la campaña</td></tr></tbody></table><p><strong>Errores:</strong></p><table class="table table-hover"><thead><tr><th>Código</th><th>Descripción</th></tr></thead><tbody><tr><td>errorMsg_contactNotFound</td><td>No existe contacto con el ID informado.</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Ordenar por fecha. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Reportesdecontactos_06_29Detalledequejas_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Reportesdecontactos_06_29Detalledequejas_1_Error_28Status400_29">Error (Status 400)
</option><option value="req_res_Reportesdecontactos_06_29Detalledequejas_2_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Reportesdecontactos_06_29Detalledequejas_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/complaints</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>100</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>desc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"date": "2021-12-24 18:38:35",
"campaignName": "Saludo Navideño"
}
],
"first_page_url": "https://api.catatrepa.com/report/contact/complaints?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "https://api.catatrepa.com/report/contact/complaints?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "https://api.catatrepa.com/report/contact/complaints?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "https://api.catatrepa.com/report/contact/complaints",
"per_page": "100",
"prev_page_url": null,
"to": 1,
"total": 1
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Reportesdecontactos_06_29Detalledequejas_1_Error_28Status400_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/complaints</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>25350</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": "errorMsg_contactNotFound"
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>400</strong></section><section id="req_res_Reportesdecontactos_06_29Detalledequejas_2_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/report/contact/complaints</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>2e</td><td><p>Id del contacto. Requerido.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"id": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title" id="Segmentos">Segmentos
<span class="badge">1</span></h3></div><div class="panel-body"><p></p><p>Este modulo permite obtener un detalle de los segmentos que podrán ser utilizados en tus campañas.</p><div class="request-item"><div class="panel-group" id="accordion-Segmentos"><div class="panel panel-success" id="jump-Segmentos-01_29Obtenercolecci_C3_B3ndesegmentos"><div class="panel-heading">
<a class="text-success" data-toggle="collapse" data-parent="#accordion-Segmentos" href="#collapse-Segmentos-01_29Obtenercolecci_C3_B3ndesegmentos" draggable="false"><h4 class="panel-title"><span class="glyphicon glyphicon-plus"></span><strong>01) Obtener colección de segmentos</strong> &nbsp;|&nbsp;
<strong class="request-method border-success">POST</strong>
&nbsp;
https://api.catatrepa.com/segments/getall</h4></a></div><div id="collapse-Segmentos-01_29Obtenercolecci_C3_B3ndesegmentos" class="panel-collapse collapse"><div class="panel-body"><h5 class="label label-default">Description</h5><br><small><p>Devuelve una lista de todas los segmentos. Pueden filtrarse por nombre.</p><p><strong>Estructura de salida:</strong></p><table class="table table-hover"><thead><tr><th align="left">Campo</th><th align="center">Descripción</th></tr></thead><tbody><tr><td align="left">id</td><td align="center">ID del segmento</td></tr><tr><td align="left">name</td><td align="center">Nombre del segmento</td></tr><tr><td align="left">created</td><td align="center">Fecha de creación</td></tr><tr><td align="left">members</td><td align="center">Cantidad de contactos</td></tr><tr><td align="left">lastSend</td><td align="center">Fecha de último envío</td></tr></tbody></table></small><br><br><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>nombre</td><td><p>Filtro por nombre o parte del nombre del segmento.</p></td></tr><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página. Máximo: 100.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los segmentos. Valores posibles: nombre/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><select class="resp-selector form-control">
<option value="">Select Example Request/Response
</option><option value="req_res_Segmentos_01_29Obtenercolecci_C3_B3ndesegmentos_0_Ok_28Status200_29">Ok (Status 200)
</option><option value="req_res_Segmentos_01_29Obtenercolecci_C3_B3ndesegmentos_1_Error_28Status422_29">Error (Status 422)</option></select><br><section id="req_res_Segmentos_01_29Obtenercolecci_C3_B3ndesegmentos_0_Ok_28Status200_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/segments/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>10</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los segmentos. Valores posibles: nombre/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "ok",
"data": {
"current_page": 1,
"data": [
{
"id": 1,
"name": "SegmentoPueba1",
"created": "2021-09-03 14:14:00",
"members": 0,
"lastSend": null
},
{
"id": 2,
"name": "SegmentoPueba2",
"created": "2021-09-03 14:14:10",
"members": 0,
"lastSend": null
}
],
"first_page_url": "http://api.catatrepa.com/segments/getall?page=1",
"from": 1,
"last_page": 1,
"last_page_url": "http://api.catatrepa.com/segments/getall?page=1",
"links": [
{
"url": null,
"label": "&amp;laquo; Anterior",
"active": false
},
{
"url": "http://api.catatrepa.com/segments/getall?page=1",
"label": 1,
"active": true
},
{
"url": null,
"label": "Siguiente &amp;raquo;",
"active": false
}
],
"next_page_url": null,
"path": "http://api.catatrepa.com/segments/getall",
"per_page": "10",
"prev_page_url": null,
"to": 2,
"total": 2
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>200</strong></section><section id="req_res_Segmentos_01_29Obtenercolecci_C3_B3ndesegmentos_1_Error_28Status422_29" style="display:none"><h4>Example Request</h4><h5>URL: https://api.catatrepa.com/segments/getall</h5><h5 class="label label-primary">Body</h5><table class="table table-hover"><thead><tr><th>Key</th><th>Value</th><th>Description</th></tr></thead><tbody><tr><td>limit</td><td>10-</td><td><p>Cantidad de registros a mostrar por página.</p></td></tr><tr><td>page</td><td>1</td><td><p>Numero de página a mostrar.</p></td></tr><tr><td>orderBy</td><td>id</td><td><p>Criterio para ordenar los segmentos. Valores posibles: nombre/id. Por defecto: id.</p></td></tr><tr><td>order</td><td>asc</td><td><p>Tipo de ordenamiento. Valores posibles: asc/desc. Por defecto: desc.</p></td></tr></tbody></table><h4>Example Response</h4><h5 class="label label-success">Body</h5><span class="resp-prettyprint">{
"status": "error",
"code": {
"limit": [
"only_numeric"
]
}
}</span><div class="clearfix"></div><h5 class="label label-info">Code:</h5><strong>422</strong></section></div></div></div></div></div></div></div></div></div></div><script>/*!jQuery v1.12.4 | (c) jQuery Foundation | jquery.org/license*/!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=a.document,e=c.slice,f=c.concat,g=c.push,h=c.indexOf,i={},j=i.toString,k=i.hasOwnProperty,l={},m="1.12.4",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return e.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:e.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a){return n.each(this,a)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(e.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor()},push:g,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(e=arguments[h]))for(d in e)a=g[d],c=e[d],g!==c&&(j&&c&&(n.isPlainObject(c)||(b=n.isArray(c)))?(b?(b=!1,f=a&&n.isArray(a)?a:[]):f=a&&n.isPlainObject(a)?a:{},g[d]=n.extend(j,f,c)):void 0!==c&&(g[d]=c));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray||function(a){return"array"===n.type(a)},isWindow:function(a){return null!=a&&a==a.window},isNumeric:function(a){var b=a&&a.toString();return!n.isArray(a)&&b-parseFloat(b)+1>=0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},isPlainObject:function(a){var b;if(!a||"object"!==n.type(a)||a.nodeType||n.isWindow(a))return!1;try{if(a.constructor&&!k.call(a,"constructor")&&!k.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}if(!l.ownFirst)for(b in a)return k.call(a,b);for(b in a);return void 0===b||k.call(a,b)},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?i[j.call(a)]||"object":typeof a},globalEval:function(b){b&&n.trim(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b){var c,d=0;if(s(a)){for(c=a.length;c>d;d++)if(b.call(a[d],d,a[d])===!1)break}else for(d in a)if(b.call(a[d],d,a[d])===!1)break;return a},trim:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):g.call(c,a)),c},inArray:function(a,b,c){var d;if(b){if(h)return h.call(b,a,c);for(d=b.length,c=c?0>c?Math.max(0,d+c):c:0;d>c;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,b){var c=+b.length,d=0,e=a.length;while(c>d)a[e++]=b[d++];if(c!==c)while(void 0!==b[d])a[e++]=b[d++];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,e,g=0,h=[];if(s(a))for(d=a.length;d>g;g++)e=b(a[g],g,c),null!=e&&h.push(e);else for(g in a)e=b(a[g],g,c),null!=e&&h.push(e);return f.apply([],h)},guid:1,proxy:function(a,b){var c,d,f;return"string"==typeof b&&(f=a[b],b=a,a=f),n.isFunction(a)?(c=e.call(arguments,2),d=function(){return a.apply(b||this,c.concat(e.call(arguments)))},d.guid=a.guid=a.guid||n.guid++,d):void 0},now:function(){return+new Date},support:l}),"function"==typeof Symbol&&(n.fn[Symbol.iterator]=c[Symbol.iterator]),n.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(a,b){i["[object "+b+"]"]=b.toLowerCase()});function s(a){var b=!!a&&"length"in a&&a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u="sizzle"+1*new Date,v=a.document,w=0,x=0,y=ga(),z=ga(),A=ga(),B=function(a,b){return a===b&&(l=!0),0},C=1<<31,D={}.hasOwnProperty,E=[],F=E.pop,G=E.push,H=E.push,I=E.slice,J=function(a,b){for(var c=0,d=a.length;d>c;c++)if(a[c]===b)return c;return-1},K="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",L="[\\x20\\t\\r\\n\\f]",M="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",N="\\["+L+"*("+M+")(?:"+L+"*([*^$|!~]?=)"+L+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+M+"))|)"+L+"*\\]",O=":("+M+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+N+")*)|.*)\\)|)",P=new RegExp(L+"+","g"),Q=new RegExp("^"+L+"+|((?:^|[^\\\\])(?:\\\\.)*)"+L+"+$","g"),R=new RegExp("^"+L+"*,"+L+"*"),S=new RegExp("^"+L+"*([>+~]|"+L+")"+L+"*"),T=new RegExp("="+L+"*([^\\]'\"]*?)"+L+"*\\]","g"),U=new RegExp(O),V=new RegExp("^"+M+"$"),W={ID:new RegExp("^#("+M+")"),CLASS:new RegExp("^\\.("+M+")"),TAG:new RegExp("^("+M+"|[*])"),ATTR:new RegExp("^"+N),PSEUDO:new RegExp("^"+O),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+L+"*(even|odd|(([+-]|)(\\d*)n|)"+L+"*(?:([+-]|)"+L+"*(\\d+)|))"+L+"*\\)|)","i"),bool:new RegExp("^(?:"+K+")$","i"),needsContext:new RegExp("^"+L+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+L+"*((?:-\\d)?\\d*)"+L+"*\\)|)(?=[^-]|$)","i")},X=/^(?:input|select|textarea|button)$/i,Y=/^h\d$/i,Z=/^[^{]+\{\s*\[native \w/,$=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,_=/[+~]/,aa=/'|\\/g,ba=new RegExp("\\\\([\\da-f]{1,6}"+L+"?|("+L+")|.)","ig"),ca=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)},da=function(){m()};try{H.apply(E=I.call(v.childNodes),v.childNodes),E[v.childNodes.length].nodeType}catch(ea){H={apply:E.length?function(a,b){G.apply(a,I.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function fa(a,b,d,e){var f,h,j,k,l,o,r,s,w=b&&b.ownerDocument,x=b?b.nodeType:9;if(d=d||[],"string"!=typeof a||!a||1!==x&&9!==x&&11!==x)return d;if(!e&&((b?b.ownerDocument||b:v)!==n&&m(b),b=b||n,p)){if(11!==x&&(o=$.exec(a)))if(f=o[1]){if(9===x){if(!(j=b.getElementById(f)))return d;if(j.id===f)return d.push(j),d}else if(w&&(j=w.getElementById(f))&&t(b,j)&&j.id===f)return d.push(j),d}else{if(o[2])return H.apply(d,b.getElementsByTagName(a)),d;if((f=o[3])&&c.getElementsByClassName&&b.getElementsByClassName)return H.apply(d,b.getElementsByClassName(f)),d}if(c.qsa&&!A[a+" "]&&(!q||!q.test(a))){if(1!==x)w=b,s=a;else if("object"!==b.nodeName.toLowerCase()){(k=b.getAttribute("id"))?k=k.replace(aa,"\\$&"):b.setAttribute("id",k=u),r=g(a),h=r.length,l=V.test(k)?"#"+k:"[id='"+k+"']";while(h--)r[h]=l+" "+qa(r[h]);s=r.join(","),w=_.test(a)&&oa(b.parentNode)||b}if(s)try{return H.apply(d,w.querySelectorAll(s)),d}catch(y){}finally{k===u&&b.removeAttribute("id")}}}return i(a.replace(Q,"$1"),b,d,e)}function ga(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function ha(a){return a[u]=!0,a}function ia(a){var b=n.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function ja(a,b){var c=a.split("|"),e=c.length;while(e--)d.attrHandle[c[e]]=b}function ka(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||C)-(~a.sourceIndex||C);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function la(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function ma(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function na(a){return ha(function(b){return b=+b,ha(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function oa(a){return a&&"undefined"!=typeof a.getElementsByTagName&&a}c=fa.support={},f=fa.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},m=fa.setDocument=function(a){var b,e,g=a?a.ownerDocument||a:v;return g!==n&&9===g.nodeType&&g.documentElement?(n=g,o=n.documentElement,p=!f(n),(e=n.defaultView)&&e.top!==e&&(e.addEventListener?e.addEventListener("unload",da,!1):e.attachEvent&&e.attachEvent("onunload",da)),c.attributes=ia(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=ia(function(a){return a.appendChild(n.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=Z.test(n.getElementsByClassName),c.getById=ia(function(a){return o.appendChild(a).id=u,!n.getElementsByName||!n.getElementsByName(u).length}),c.getById?(d.find.ID=function(a,b){if("undefined"!=typeof b.getElementById&&p){var c=b.getElementById(a);return c?[c]:[]}},d.filter.ID=function(a){var b=a.replace(ba,ca);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(ba,ca);return function(a){var c="undefined"!=typeof a.getAttributeNode&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return"undefined"!=typeof b.getElementsByTagName?b.getElementsByTagName(a):c.qsa?b.querySelectorAll(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return"undefined"!=typeof b.getElementsByClassName&&p?b.getElementsByClassName(a):void 0},r=[],q=[],(c.qsa=Z.test(n.querySelectorAll))&&(ia(function(a){o.appendChild(a).innerHTML="<a id='"+u+"'></a><select id='"+u+"-\r\\' msallowcapture=''><option selected=''></option></select>",a.querySelectorAll("[msallowcapture^='']").length&&q.push("[*^$]="+L+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||q.push("\\["+L+"*(?:value|"+K+")"),a.querySelectorAll("[id~="+u+"-]").length||q.push("~="),a.querySelectorAll(":checked").length||q.push(":checked"),a.querySelectorAll("a#"+u+"+*").length||q.push(".#.+[+~]")}),ia(function(a){var b=n.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&q.push("name"+L+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),q.push(",.*:")})),(c.matchesSelector=Z.test(s=o.matches||o.webkitMatchesSelector||o.mozMatchesSelector||o.oMatchesSelector||o.msMatchesSelector))&&ia(function(a){c.disconnectedMatch=s.call(a,"div"),s.call(a,"[s!='']:x"),r.push("!=",O)}),q=q.length&&new RegExp(q.join("|")),r=r.length&&new RegExp(r.join("|")),b=Z.test(o.compareDocumentPosition),t=b||Z.test(o.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},B=b?function(a,b){if(a===b)return l=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===n||a.ownerDocument===v&&t(v,a)?-1:b===n||b.ownerDocument===v&&t(v,b)?1:k?J(k,a)-J(k,b):0:4&d?-1:1)}:function(a,b){if(a===b)return l=!0,0;var c,d=0,e=a.parentNode,f=b.parentNode,g=[a],h=[b];if(!e||!f)return a===n?-1:b===n?1:e?-1:f?1:k?J(k,a)-J(k,b):0;if(e===f)return ka(a,b);c=a;while(c=c.parentNode)g.unshift(c);c=b;while(c=c.parentNode)h.unshift(c);while(g[d]===h[d])d++;return d?ka(g[d],h[d]):g[d]===v?-1:h[d]===v?1:0},n):n},fa.matches=function(a,b){return fa(a,null,null,b)},fa.matchesSelector=function(a,b){if((a.ownerDocument||a)!==n&&m(a),b=b.replace(T,"='$1']"),c.matchesSelector&&p&&!A[b+" "]&&(!r||!r.test(b))&&(!q||!q.test(b)))try{var d=s.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return fa(b,n,null,[a]).length>0},fa.contains=function(a,b){return(a.ownerDocument||a)!==n&&m(a),t(a,b)},fa.attr=function(a,b){(a.ownerDocument||a)!==n&&m(a);var e=d.attrHandle[b.toLowerCase()],f=e&&D.call(d.attrHandle,b.toLowerCase())?e(a,b,!p):void 0;return void 0!==f?f:c.attributes||!p?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},fa.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},fa.uniqueSort=function(a){var b,d=[],e=0,f=0;if(l=!c.detectDuplicates,k=!c.sortStable&&a.slice(0),a.sort(B),l){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return k=null,a},e=fa.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=fa.selectors={cacheLength:50,createPseudo:ha,match:W,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(ba,ca),a[3]=(a[3]||a[4]||a[5]||"").replace(ba,ca),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||fa.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&fa.error(a[0]),a},PSEUDO:function(a){var b,c=!a[6]&&a[2];return W.CHILD.test(a[0])?null:(a[3]?a[2]=a[4]||a[5]||"":c&&U.test(c)&&(b=g(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(ba,ca).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=y[a+" "];return b||(b=new RegExp("(^|"+L+")"+a+"("+L+"|$)"))&&y(a,function(a){return b.test("string"==typeof a.className&&a.className||"undefined"!=typeof a.getAttribute&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=fa.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e.replace(P," ")+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),s=!i&&!h,t=!1;if(q){if(f){while(p){m=b;while(m=m[p])if(h?m.nodeName.toLowerCase()===r:1===m.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&s){m=q,l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),j=k[a]||[],n=j[0]===w&&j[1],t=n&&j[2],m=n&&q.childNodes[n];while(m=++n&&m&&m[p]||(t=n=0)||o.pop())if(1===m.nodeType&&++t&&m===b){k[a]=[w,n,t];break}}else if(s&&(m=b,l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),j=k[a]||[],n=j[0]===w&&j[1],t=n),t===!1)while(m=++n&&m&&m[p]||(t=n=0)||o.pop())if((h?m.nodeName.toLowerCase()===r:1===m.nodeType)&&++t&&(s&&(l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),k[a]=[w,t]),m===b))break;return t-=e,t===d||t%d===0&&t/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||fa.error("unsupported pseudo: "+a);return e[u]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?ha(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=J(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:ha(function(a){var b=[],c=[],d=h(a.replace(Q,"$1"));return d[u]?ha(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),b[0]=null,!c.pop()}}),has:ha(function(a){return function(b){return fa(a,b).length>0}}),contains:ha(function(a){return a=a.replace(ba,ca),function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:ha(function(a){return V.test(a||"")||fa.error("unsupported lang: "+a),a=a.replace(ba,ca).toLowerCase(),function(b){var c;do if(c=p?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===o},focus:function(a){return a===n.activeElement&&(!n.hasFocus||n.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return Y.test(a.nodeName)},input:function(a){return X.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:na(function(){return[0]}),last:na(function(a,b){return[b-1]}),eq:na(function(a,b,c){return[0>c?c+b:c]}),even:na(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:na(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:na(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:na(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=la(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=ma(b);function pa(){}pa.prototype=d.filters=d.pseudos,d.setFilters=new pa,g=fa.tokenize=function(a,b){var c,e,f,g,h,i,j,k=z[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){c&&!(e=R.exec(h))||(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=S.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(Q," ")}),h=h.slice(c.length));for(g in d.filter)!(e=W[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?fa.error(a):z(a,i).slice(0)};function qa(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function ra(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=x++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j,k=[w,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(j=b[u]||(b[u]={}),i=j[b.uniqueID]||(j[b.uniqueID]={}),(h=i[d])&&h[0]===w&&h[1]===f)return k[2]=h[2];if(i[d]=k,k[2]=a(b,c,g))return!0}}}function sa(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function ta(a,b,c){for(var d=0,e=b.length;e>d;d++)fa(a,b[d],c);return c}function ua(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(c&&!c(f,d,e)||(g.push(f),j&&b.push(h)));return g}function va(a,b,c,d,e,f){return d&&!d[u]&&(d=va(d)),e&&!e[u]&&(e=va(e,f)),ha(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||ta(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:ua(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=ua(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?J(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=ua(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):H.apply(g,r)})}function wa(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],h=g||d.relative[" "],i=g?1:0,k=ra(function(a){return a===b},h,!0),l=ra(function(a){return J(b,a)>-1},h,!0),m=[function(a,c,d){var e=!g&&(d||c!==j)||((b=c).nodeType?k(a,c,d):l(a,c,d));return b=null,e}];f>i;i++)if(c=d.relative[a[i].type])m=[ra(sa(m),c)];else{if(c=d.filter[a[i].type].apply(null,a[i].matches),c[u]){for(e=++i;f>e;e++)if(d.relative[a[e].type])break;return va(i>1&&sa(m),i>1&&qa(a.slice(0,i-1).concat({value:" "===a[i-2].type?"*":""})).replace(Q,"$1"),c,e>i&&wa(a.slice(i,e)),f>e&&wa(a=a.slice(e)),f>e&&qa(a))}m.push(c)}return sa(m)}function xa(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,h,i,k){var l,o,q,r=0,s="0",t=f&&[],u=[],v=j,x=f||e&&d.find.TAG("*",k),y=w+=null==v?1:Math.random()||.1,z=x.length;for(k&&(j=g===n||g||k);s!==z&&null!=(l=x[s]);s++){if(e&&l){o=0,g||l.ownerDocument===n||(m(l),h=!p);while(q=a[o++])if(q(l,g||n,h)){i.push(l);break}k&&(w=y)}c&&((l=!q&&l)&&r--,f&&t.push(l))}if(r+=s,c&&s!==r){o=0;while(q=b[o++])q(t,u,g,h);if(f){if(r>0)while(s--)t[s]||u[s]||(u[s]=F.call(i));u=ua(u)}H.apply(i,u),k&&!f&&u.length>0&&r+b.length>1&&fa.uniqueSort(i)}return k&&(w=y,j=v),t};return c?ha(f):f}return h=fa.compile=function(a,b){var c,d=[],e=[],f=A[a+" "];if(!f){b||(b=g(a)),c=b.length;while(c--)f=wa(b[c]),f[u]?d.push(f):e.push(f);f=A(a,xa(e,d)),f.selector=a}return f},i=fa.select=function(a,b,e,f){var i,j,k,l,m,n="function"==typeof a&&a,o=!f&&g(a=n.selector||a);if(e=e||[],1===o.length){if(j=o[0]=o[0].slice(0),j.length>2&&"ID"===(k=j[0]).type&&c.getById&&9===b.nodeType&&p&&d.relative[j[1].type]){if(b=(d.find.ID(k.matches[0].replace(ba,ca),b)||[])[0],!b)return e;n&&(b=b.parentNode),a=a.slice(j.shift().value.length)}i=W.needsContext.test(a)?0:j.length;while(i--){if(k=j[i],d.relative[l=k.type])break;if((m=d.find[l])&&(f=m(k.matches[0].replace(ba,ca),_.test(j[0].type)&&oa(b.parentNode)||b))){if(j.splice(i,1),a=f.length&&qa(j),!a)return H.apply(e,f),e;break}}}return(n||h(a,o))(f,b,!p,e,!b||_.test(a)&&oa(b.parentNode)||b),e},c.sortStable=u.split("").sort(B).join("")===u,c.detectDuplicates=!!l,m(),c.sortDetached=ia(function(a){return 1&a.compareDocumentPosition(n.createElement("div"))}),ia(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||ja("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&ia(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||ja("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),ia(function(a){return null==a.getAttribute("disabled")})||ja(K,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),fa}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.uniqueSort=n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=function(a,b,c){var d=[],e=void 0!==c;while((a=a[b])&&9!==a.nodeType)if(1===a.nodeType){if(e&&n(a).is(c))break;d.push(a)}return d},v=function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c},w=n.expr.match.needsContext,x=/^<([\w-]+)\s*\/?>(?:<\/\1>|)$/,y=/^.[^:#\[\.,]*$/;function z(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(y.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return n.inArray(a,b)>-1!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=[],d=this,e=d.length;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;e>b;b++)if(n.contains(d[b],this))return!0}));for(b=0;e>b;b++)n.find(a,d[b],c);return c=this.pushStack(e>1?n.unique(c):c),c.selector=this.selector?this.selector+" "+a:a,c},filter:function(a){return this.pushStack(z(this,a||[],!1))},not:function(a){return this.pushStack(z(this,a||[],!0))},is:function(a){return!!z(this,"string"==typeof a&&w.test(a)?n(a):a||[],!1).length}});var A,B=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,C=n.fn.init=function(a,b,c){var e,f;if(!a)return this;if(c=c||A,"string"==typeof a){if(e="<"===a.charAt(0)&&">"===a.charAt(a.length-1)&&a.length>=3?[null,a,null]:B.exec(a),!e||!e[1]&&b)return!b||b.jquery?(b||c).find(a):this.constructor(b).find(a);if(e[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(e[1],b&&b.nodeType?b.ownerDocument||b:d,!0)),x.test(e[1])&&n.isPlainObject(b))for(e in b)n.isFunction(this[e])?this[e](b[e]):this.attr(e,b[e]);return this}if(f=d.getElementById(e[2]),f&&f.parentNode){if(f.id!==e[2])return A.find(a);this.length=1,this[0]=f}return this.context=d,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?"undefined"!=typeof c.ready?c.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};C.prototype=n.fn,A=n(d);var D=/^(?:parents|prev(?:Until|All))/,E={children:!0,contents:!0,next:!0,prev:!0};n.fn.extend({has:function(a){var b,c=n(a,this),d=c.length;return this.filter(function(){for(b=0;d>b;b++)if(n.contains(this,c[b]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=w.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.uniqueSort(f):f)},index:function(a){return a?"string"==typeof a?n.inArray(this[0],n(a)):n.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.uniqueSort(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function F(a,b){do a=a[b];while(a&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return u(a,"parentNode")},parentsUntil:function(a,b,c){return u(a,"parentNode",c)},next:function(a){return F(a,"nextSibling")},prev:function(a){return F(a,"previousSibling")},nextAll:function(a){return u(a,"nextSibling")},prevAll:function(a){return u(a,"previousSibling")},nextUntil:function(a,b,c){return u(a,"nextSibling",c)},prevUntil:function(a,b,c){return u(a,"previousSibling",c)},siblings:function(a){return v((a.parentNode||{}).firstChild,a)},children:function(a){return v(a.firstChild)},contents:function(a){return n.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(E[a]||(e=n.uniqueSort(e)),D.test(a)&&(e=e.reverse())),this.pushStack(e)}});var G=/\S+/g;function H(a){var b={};return n.each(a.match(G)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?H(a):n.extend({},a);var b,c,d,e,f=[],g=[],h=-1,i=function(){for(e=a.once,d=b=!0;g.length;h=-1){c=g.shift();while(++h<f.length)f[h].apply(c[0],c[1])===!1&&a.stopOnFalse&&(h=f.length,c=!1)}a.memory||(c=!1),b=!1,e&&(f=c?[]:"")},j={add:function(){return f&&(c&&!b&&(h=f.length-1,g.push(c)),function d(b){n.each(b,function(b,c){n.isFunction(c)?a.unique&&j.has(c)||f.push(c):c&&c.length&&"string"!==n.type(c)&&d(c)})}(arguments),c&&!b&&i()),this},remove:function(){return n.each(arguments,function(a,b){var c;while((c=n.inArray(b,f,c))>-1)f.splice(c,1),h>=c&&h--}),this},has:function(a){return a?n.inArray(a,f)>-1:f.length>0},empty:function(){return f&&(f=[]),this},disable:function(){return e=g=[],f=c="",this},disabled:function(){return!f},lock:function(){return e=!0,c||j.disable(),this},locked:function(){return!!e},fireWith:function(a,c){return e||(c=c||[],c=[a,c.slice?c.slice():c],g.push(c),b||i()),this},fire:function(){return j.fireWith(this,arguments),this},fired:function(){return!!d}};return j},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().progress(c.notify).done(c.resolve).fail(c.reject):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=e.call(arguments),d=c.length,f=1!==d||a&&n.isFunction(a.promise)?d:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(d){b[a]=this,c[a]=arguments.length>1?e.call(arguments):d,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(d>1)for(i=new Array(d),j=new Array(d),k=new Array(d);d>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().progress(h(b,j,i)).done(h(b,k,c)).fail(g.reject):--f;return f||g.resolveWith(k,c),g.promise()}});var I;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){(a===!0?--n.readyWait:n.isReady)||(n.isReady=!0,a!==!0&&--n.readyWait>0||(I.resolveWith(d,[n]),n.fn.triggerHandler&&(n(d).triggerHandler("ready"),n(d).off("ready"))))}});function J(){d.addEventListener?(d.removeEventListener("DOMContentLoaded",K),a.removeEventListener("load",K)):(d.detachEvent("onreadystatechange",K),a.detachEvent("onload",K))}function K(){(d.addEventListener||"load"===a.event.type||"complete"===d.readyState)&&(J(),n.ready())}n.ready.promise=function(b){if(!I)if(I=n.Deferred(),"complete"===d.readyState||"loading"!==d.readyState&&!d.documentElement.doScroll)a.setTimeout(n.ready);else if(d.addEventListener)d.addEventListener("DOMContentLoaded",K),a.addEventListener("load",K);else{d.attachEvent("onreadystatechange",K),a.attachEvent("onload",K);var c=!1;try{c=null==a.frameElement&&d.documentElement}catch(e){}c&&c.doScroll&&!function f(){if(!n.isReady){try{c.doScroll("left")}catch(b){return a.setTimeout(f,50)}J(),n.ready()}}()}return I.promise(b)},n.ready.promise();var L;for(L in n(l))break;l.ownFirst="0"===L,l.inlineBlockNeedsLayout=!1,n(function(){var a,b,c,e;c=d.getElementsByTagName("body")[0],c&&c.style&&(b=d.createElement("div"),e=d.createElement("div"),e.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(e).appendChild(b),"undefined"!=typeof b.style.zoom&&(b.style.cssText="display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1",l.inlineBlockNeedsLayout=a=3===b.offsetWidth,a&&(c.style.zoom=1)),c.removeChild(e))}),function(){var a=d.createElement("div");l.deleteExpando=!0;try{delete a.test}catch(b){l.deleteExpando=!1}a=null}();var M=function(a){var b=n.noData[(a.nodeName+" ").toLowerCase()],c=+a.nodeType||1;return 1!==c&&9!==c?!1:!b||b!==!0&&a.getAttribute("classid")===b},N=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,O=/([A-Z])/g;function P(a,b,c){if(void 0===c&&1===a.nodeType){var d="data-"+b.replace(O,"-$1").toLowerCase();if(c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:N.test(c)?n.parseJSON(c):c}catch(e){}n.data(a,b,c)}else c=void 0;}return c}function Q(a){var b;for(b in a)if(("data"!==b||!n.isEmptyObject(a[b]))&&"toJSON"!==b)return!1;return!0}function R(a,b,d,e){if(M(a)){var f,g,h=n.expando,i=a.nodeType,j=i?n.cache:a,k=i?a[h]:a[h]&&h;if(k&&j[k]&&(e||j[k].data)||void 0!==d||"string"!=typeof b)return k||(k=i?a[h]=c.pop()||n.guid++:h),j[k]||(j[k]=i?{}:{toJSON:n.noop}),"object"!=typeof b&&"function"!=typeof b||(e?j[k]=n.extend(j[k],b):j[k].data=n.extend(j[k].data,b)),g=j[k],e||(g.data||(g.data={}),g=g.data),void 0!==d&&(g[n.camelCase(b)]=d),"string"==typeof b?(f=g[b],null==f&&(f=g[n.camelCase(b)])):f=g,f}}function S(a,b,c){if(M(a)){var d,e,f=a.nodeType,g=f?n.cache:a,h=f?a[n.expando]:n.expando;if(g[h]){if(b&&(d=c?g[h]:g[h].data)){n.isArray(b)?b=b.concat(n.map(b,n.camelCase)):b in d?b=[b]:(b=n.camelCase(b),b=b in d?[b]:b.split(" ")),e=b.length;while(e--)delete d[b[e]];if(c?!Q(d):!n.isEmptyObject(d))return}(c||(delete g[h].data,Q(g[h])))&&(f?n.cleanData([a],!0):l.deleteExpando||g!=g.window?delete g[h]:g[h]=void 0)}}}n.extend({cache:{},noData:{"applet ":!0,"embed ":!0,"object ":"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(a){return a=a.nodeType?n.cache[a[n.expando]]:a[n.expando],!!a&&!Q(a)},data:function(a,b,c){return R(a,b,c)},removeData:function(a,b){return S(a,b)},_data:function(a,b,c){return R(a,b,c,!0)},_removeData:function(a,b){return S(a,b,!0)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=n.data(f),1===f.nodeType&&!n._data(f,"parsedAttrs"))){c=g.length;while(c--)g[c]&&(d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),P(f,d,e[d])));n._data(f,"parsedAttrs",!0)}return e}return"object"==typeof a?this.each(function(){n.data(this,a)}):arguments.length>1?this.each(function(){n.data(this,a,b)}):f?P(f,a,n.data(f,a)):void 0},removeData:function(a){return this.each(function(){n.removeData(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=n._data(a,b),c&&(!d||n.isArray(c)?d=n._data(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return n._data(a,c)||n._data(a,c,{empty:n.Callbacks("once memory").add(function(){n._removeData(a,b+"queue"),n._removeData(a,c)})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=n._data(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}}),function(){var a;l.shrinkWrapBlocks=function(){if(null!=a)return a;a=!1;var b,c,e;return c=d.getElementsByTagName("body")[0],c&&c.style?(b=d.createElement("div"),e=d.createElement("div"),e.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(e).appendChild(b),"undefined"!=typeof b.style.zoom&&(b.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1",b.appendChild(d.createElement("div")).style.width="5px",a=3!==b.offsetWidth),c.removeChild(e),a):void 0}}();var T=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,U=new RegExp("^(?:([+-])=|)("+T+")([a-z%]*)$","i"),V=["Top","Right","Bottom","Left"],W=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)};function X(a,b,c,d){var e,f=1,g=20,h=d?function(){return d.cur()}:function(){return n.css(a,b,"")},i=h(),j=c&&c[3]||(n.cssNumber[b]?"":"px"),k=(n.cssNumber[b]||"px"!==j&&+i)&&U.exec(n.css(a,b));if(k&&k[3]!==j){j=j||k[3],c=c||[],k=+i||1;do f=f||".5",k/=f,n.style(a,b,k+j);while(f!==(f=h()/i)&&1!==f&&--g)}return c&&(k=+k||+i||0,e=c[1]?k+(c[1]+1)*c[2]:+c[2],d&&(d.unit=j,d.start=k,d.end=e)),e}var Y=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)Y(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f},Z=/^(?:checkbox|radio)$/i,$=/<([\w:-]+)/,_=/^$|\/(?:java|ecma)script/i,aa=/^\s+/,ba="abbr|article|aside|audio|bdi|canvas|data|datalist|details|dialog|figcaption|figure|footer|header|hgroup|main|mark|meter|nav|output|picture|progress|section|summary|template|time|video";function ca(a){var b=ba.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}!function(){var a=d.createElement("div"),b=d.createDocumentFragment(),c=d.createElement("input");a.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",l.leadingWhitespace=3===a.firstChild.nodeType,l.tbody=!a.getElementsByTagName("tbody").length,l.htmlSerialize=!!a.getElementsByTagName("link").length,l.html5Clone="<:nav></:nav>"!==d.createElement("nav").cloneNode(!0).outerHTML,c.type="checkbox",c.checked=!0,b.appendChild(c),l.appendChecked=c.checked,a.innerHTML="<textarea>x</textarea>",l.noCloneChecked=!!a.cloneNode(!0).lastChild.defaultValue,b.appendChild(a),c=d.createElement("input"),c.setAttribute("type","radio"),c.setAttribute("checked","checked"),c.setAttribute("name","t"),a.appendChild(c),l.checkClone=a.cloneNode(!0).cloneNode(!0).lastChild.checked,l.noCloneEvent=!!a.addEventListener,a[n.expando]=1,l.attributes=!a.getAttribute(n.expando)}();var da={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:l.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]};da.optgroup=da.option,da.tbody=da.tfoot=da.colgroup=da.caption=da.thead,da.th=da.td;function ea(a,b){var c,d,e=0,f="undefined"!=typeof a.getElementsByTagName?a.getElementsByTagName(b||"*"):"undefined"!=typeof a.querySelectorAll?a.querySelectorAll(b||"*"):void 0;if(!f)for(f=[],c=a.childNodes||a;null!=(d=c[e]);e++)!b||n.nodeName(d,b)?f.push(d):n.merge(f,ea(d,b));return void 0===b||b&&n.nodeName(a,b)?n.merge([a],f):f}function fa(a,b){for(var c,d=0;null!=(c=a[d]);d++)n._data(c,"globalEval",!b||n._data(b[d],"globalEval"))}var ga=/<|&#?\w+;/,ha=/<tbody/i;function ia(a){Z.test(a.type)&&(a.defaultChecked=a.checked)}function ja(a,b,c,d,e){for(var f,g,h,i,j,k,m,o=a.length,p=ca(b),q=[],r=0;o>r;r++)if(g=a[r],g||0===g)if("object"===n.type(g))n.merge(q,g.nodeType?[g]:g);else if(ga.test(g)){i=i||p.appendChild(b.createElement("div")),j=($.exec(g)||["",""])[1].toLowerCase(),m=da[j]||da._default,i.innerHTML=m[1]+n.htmlPrefilter(g)+m[2],f=m[0];while(f--)i=i.lastChild;if(!l.leadingWhitespace&&aa.test(g)&&q.push(b.createTextNode(aa.exec(g)[0])),!l.tbody){g="table"!==j||ha.test(g)?"<table>"!==m[1]||ha.test(g)?0:i:i.firstChild,f=g&&g.childNodes.length;while(f--)n.nodeName(k=g.childNodes[f],"tbody")&&!k.childNodes.length&&g.removeChild(k)}n.merge(q,i.childNodes),i.textContent="";while(i.firstChild)i.removeChild(i.firstChild);i=p.lastChild}else q.push(b.createTextNode(g));i&&p.removeChild(i),l.appendChecked||n.grep(ea(q,"input"),ia),r=0;while(g=q[r++])if(d&&n.inArray(g,d)>-1)e&&e.push(g);else if(h=n.contains(g.ownerDocument,g),i=ea(p.appendChild(g),"script"),h&&fa(i),c){f=0;while(g=i[f++])_.test(g.type||"")&&c.push(g)}return i=null,p}!function(){var b,c,e=d.createElement("div");for(b in{submit:!0,change:!0,focusin:!0})c="on"+b,(l[b]=c in a)||(e.setAttribute(c,"t"),l[b]=e.attributes[c].expando===!1);e=null}();var ka=/^(?:input|select|textarea)$/i,la=/^key/,ma=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,na=/^(?:focusinfocus|focusoutblur)$/,oa=/^([^.]*)(?:\.(.+)|)/;function pa(){return!0}function qa(){return!1}function ra(){try{return d.activeElement}catch(a){}}function sa(a,b,c,d,e,f){var g,h;if("object"==typeof b){"string"!=typeof c&&(d=d||c,c=void 0);for(h in b)sa(a,h,c,d,b[h],f);return a}if(null==d&&null==e?(e=c,d=c=void 0):null==e&&("string"==typeof c?(e=d,d=void 0):(e=d,d=c,c=void 0)),e===!1)e=qa;else if(!e)return a;return 1===f&&(g=e,e=function(a){return n().off(a),g.apply(this,arguments)},e.guid=g.guid||(g.guid=n.guid++)),a.each(function(){n.event.add(this,b,e,d,c)})}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n._data(a);if(r){c.handler&&(i=c,c=i.handler,e=i.selector),c.guid||(c.guid=n.guid++),(g=r.events)||(g=r.events={}),(k=r.handle)||(k=r.handle=function(a){return"undefined"==typeof n||a&&n.event.triggered===a.type?void 0:n.event.dispatch.apply(k.elem,arguments)},k.elem=a),b=(b||"").match(G)||[""],h=b.length;while(h--)f=oa.exec(b[h])||[],o=q=f[1],p=(f[2]||"").split(".").sort(),o&&(j=n.event.special[o]||{},o=(e?j.delegateType:j.bindType)||o,j=n.event.special[o]||{},l=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},i),(m=g[o])||(m=g[o]=[],m.delegateCount=0,j.setup&&j.setup.call(a,d,p,k)!==!1||(a.addEventListener?a.addEventListener(o,k,!1):a.attachEvent&&a.attachEvent("on"+o,k))),j.add&&(j.add.call(a,l),l.handler.guid||(l.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,l):m.push(l),n.event.global[o]=!0);a=null}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n.hasData(a)&&n._data(a);if(r&&(k=r.events)){b=(b||"").match(G)||[""],j=b.length;while(j--)if(h=oa.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=k[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),i=f=m.length;while(f--)g=m[f],!e&&q!==g.origType||c&&c.guid!==g.guid||h&&!h.test(g.namespace)||d&&d!==g.selector&&("**"!==d||!g.selector)||(m.splice(f,1),g.selector&&m.delegateCount--,l.remove&&l.remove.call(a,g));i&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete k[o])}else for(o in k)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(k)&&(delete r.handle,n._removeData(a,"events"))}},trigger:function(b,c,e,f){var g,h,i,j,l,m,o,p=[e||d],q=k.call(b,"type")?b.type:b,r=k.call(b,"namespace")?b.namespace.split("."):[];if(i=m=e=e||d,3!==e.nodeType&&8!==e.nodeType&&!na.test(q+n.event.triggered)&&(q.indexOf(".")>-1&&(r=q.split("."),q=r.shift(),r.sort()),h=q.indexOf(":")<0&&"on"+q,b=b[n.expando]?b:new n.Event(q,"object"==typeof b&&b),b.isTrigger=f?2:3,b.namespace=r.join("."),b.rnamespace=b.namespace?new RegExp("(^|\\.)"+r.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=e),c=null==c?[b]:n.makeArray(c,[b]),l=n.event.special[q]||{},f||!l.trigger||l.trigger.apply(e,c)!==!1)){if(!f&&!l.noBubble&&!n.isWindow(e)){for(j=l.delegateType||q,na.test(j+q)||(i=i.parentNode);i;i=i.parentNode)p.push(i),m=i;m===(e.ownerDocument||d)&&p.push(m.defaultView||m.parentWindow||a)}o=0;while((i=p[o++])&&!b.isPropagationStopped())b.type=o>1?j:l.bindType||q,g=(n._data(i,"events")||{})[b.type]&&n._data(i,"handle"),g&&g.apply(i,c),g=h&&i[h],g&&g.apply&&M(i)&&(b.result=g.apply(i,c),b.result===!1&&b.preventDefault());if(b.type=q,!f&&!b.isDefaultPrevented()&&(!l._default||l._default.apply(p.pop(),c)===!1)&&M(e)&&h&&e[q]&&!n.isWindow(e)){m=e[h],m&&(e[h]=null),n.event.triggered=q;try{e[q]()}catch(s){}n.event.triggered=void 0,m&&(e[h]=m)}return b.result}},dispatch:function(a){a=n.event.fix(a);var b,c,d,f,g,h=[],i=e.call(arguments),j=(n._data(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,c=0;while((g=f.handlers[c++])&&!a.isImmediatePropagationStopped())a.rnamespace&&!a.rnamespace.test(g.namespace)||(a.handleObj=g,a.data=g.data,d=((n.event.special[g.origType]||{}).handle||g.handler).apply(f.elem,i),void 0!==d&&(a.result=d)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&("click"!==a.type||isNaN(a.button)||a.button<1))for(;i!=this;i=i.parentNode||this)if(1===i.nodeType&&(i.disabled!==!0||"click"!==a.type)){for(d=[],c=0;h>c;c++)f=b[c],e=f.selector+" ",void 0===d[e]&&(d[e]=f.needsContext?n(e,this).index(i)>-1:n.find(e,this,null,[i]).length),d[e]&&d.push(f);d.length&&g.push({elem:i,handlers:d})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},fix:function(a){if(a[n.expando])return a;var b,c,e,f=a.type,g=a,h=this.fixHooks[f];h||(this.fixHooks[f]=h=ma.test(f)?this.mouseHooks:la.test(f)?this.keyHooks:{}),e=h.props?this.props.concat(h.props):this.props,a=new n.Event(g),b=e.length;while(b--)c=e[b],a[c]=g[c];return a.target||(a.target=g.srcElement||d),3===a.target.nodeType&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,h.filter?h.filter(a,g):a},props:"altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,e,f,g=b.button,h=b.fromElement;return null==a.pageX&&null!=b.clientX&&(e=a.target.ownerDocument||d,f=e.documentElement,c=e.body,a.pageX=b.clientX+(f&&f.scrollLeft||c&&c.scrollLeft||0)-(f&&f.clientLeft||c&&c.clientLeft||0),a.pageY=b.clientY+(f&&f.scrollTop||c&&c.scrollTop||0)-(f&&f.clientTop||c&&c.clientTop||0)),!a.relatedTarget&&h&&(a.relatedTarget=h===a.target?b.toElement:h),a.which||void 0===g||(a.which=1&g?1:2&g?3:4&g?2:0),a}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==ra()&&this.focus)try{return this.focus(),!1}catch(a){}},delegateType:"focusin"},blur:{trigger:function(){return this===ra()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return n.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&a.originalEvent&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c){var d=n.extend(new n.Event,c,{type:a,isSimulated:!0});n.event.trigger(d,null,b),d.isDefaultPrevented()&&c.preventDefault()}},n.removeEvent=d.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c)}:function(a,b,c){var d="on"+b;a.detachEvent&&("undefined"==typeof a[d]&&(a[d]=null),a.detachEvent(d,c))},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&a.returnValue===!1?pa:qa):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={constructor:n.Event,isDefaultPrevented:qa,isPropagationStopped:qa,isImmediatePropagationStopped:qa,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=pa,a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=pa,a&&!this.isSimulated&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){var a=this.originalEvent;this.isImmediatePropagationStopped=pa,a&&a.stopImmediatePropagation&&a.stopImmediatePropagation(),this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return e&&(e===d||n.contains(d,e))||(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),l.submit||(n.event.special.submit={setup:function(){return n.nodeName(this,"form")?!1:void n.event.add(this,"click._submit keypress._submit",function(a){var b=a.target,c=n.nodeName(b,"input")||n.nodeName(b,"button")?n.prop(b,"form"):void 0;c&&!n._data(c,"submit")&&(n.event.add(c,"submit._submit",function(a){a._submitBubble=!0}),n._data(c,"submit",!0))})},postDispatch:function(a){a._submitBubble&&(delete a._submitBubble,this.parentNode&&!a.isTrigger&&n.event.simulate("submit",this.parentNode,a))},teardown:function(){return n.nodeName(this,"form")?!1:void n.event.remove(this,"._submit")}}),l.change||(n.event.special.change={setup:function(){return ka.test(this.nodeName)?("checkbox"!==this.type&&"radio"!==this.type||(n.event.add(this,"propertychange._change",function(a){"checked"===a.originalEvent.propertyName&&(this._justChanged=!0)}),n.event.add(this,"click._change",function(a){this._justChanged&&!a.isTrigger&&(this._justChanged=!1),n.event.simulate("change",this,a)})),!1):void n.event.add(this,"beforeactivate._change",function(a){var b=a.target;ka.test(b.nodeName)&&!n._data(b,"change")&&(n.event.add(b,"change._change",function(a){!this.parentNode||a.isSimulated||a.isTrigger||n.event.simulate("change",this.parentNode,a)}),n._data(b,"change",!0))})},handle:function(a){var b=a.target;return this!==b||a.isSimulated||a.isTrigger||"radio"!==b.type&&"checkbox"!==b.type?a.handleObj.handler.apply(this,arguments):void 0},teardown:function(){return n.event.remove(this,"._change"),!ka.test(this.nodeName)}}),l.focusin||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a))};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=n._data(d,b);e||d.addEventListener(a,c,!0),n._data(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=n._data(d,b)-1;e?n._data(d,b,e):(d.removeEventListener(a,c,!0),n._removeData(d,b))}}}),n.fn.extend({on:function(a,b,c,d){return sa(this,a,b,c,d)},one:function(a,b,c,d){return sa(this,a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return b!==!1&&"function"!=typeof b||(c=b,b=void 0),c===!1&&(c=qa),this.each(function(){n.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}});var ta=/ jQuery\d+="(?:null|\d+)"/g,ua=new RegExp("<(?:"+ba+")[\\s/>]","i"),va=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,wa=/<script|<style|<link/i,xa=/checked\s*(?:[^=]|=\s*.checked.)/i,ya=/^true\/(.*)/,za=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,Aa=ca(d),Ba=Aa.appendChild(d.createElement("div"));function Ca(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function Da(a){return a.type=(null!==n.find.attr(a,"type"))+"/"+a.type,a}function Ea(a){var b=ya.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function Fa(a,b){if(1===b.nodeType&&n.hasData(a)){var c,d,e,f=n._data(a),g=n._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;e>d;d++)n.event.add(b,c,h[c][d])}g.data&&(g.data=n.extend({},g.data))}}function Ga(a,b){var c,d,e;if(1===b.nodeType){if(c=b.nodeName.toLowerCase(),!l.noCloneEvent&&b[n.expando]){e=n._data(b);for(d in e.events)n.removeEvent(b,d,e.handle);b.removeAttribute(n.expando)}"script"===c&&b.text!==a.text?(Da(b).text=a.text,Ea(b)):"object"===c?(b.parentNode&&(b.outerHTML=a.outerHTML),l.html5Clone&&a.innerHTML&&!n.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):"input"===c&&Z.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):"option"===c?b.defaultSelected=b.selected=a.defaultSelected:"input"!==c&&"textarea"!==c||(b.defaultValue=a.defaultValue)}}function Ha(a,b,c,d){b=f.apply([],b);var e,g,h,i,j,k,m=0,o=a.length,p=o-1,q=b[0],r=n.isFunction(q);if(r||o>1&&"string"==typeof q&&!l.checkClone&&xa.test(q))return a.each(function(e){var f=a.eq(e);r&&(b[0]=q.call(this,e,f.html())),Ha(f,b,c,d)});if(o&&(k=ja(b,a[0].ownerDocument,!1,a,d),e=k.firstChild,1===k.childNodes.length&&(k=e),e||d)){for(i=n.map(ea(k,"script"),Da),h=i.length;o>m;m++)g=k,m!==p&&(g=n.clone(g,!0,!0),h&&n.merge(i,ea(g,"script"))),c.call(a[m],g,m);if(h)for(j=i[i.length-1].ownerDocument,n.map(i,Ea),m=0;h>m;m++)g=i[m],_.test(g.type||"")&&!n._data(g,"globalEval")&&n.contains(j,g)&&(g.src?n._evalUrl&&n._evalUrl(g.src):n.globalEval((g.text||g.textContent||g.innerHTML||"").replace(za,"")));k=e=null}return a}function Ia(a,b,c){for(var d,e=b?n.filter(b,a):a,f=0;null!=(d=e[f]);f++)c||1!==d.nodeType||n.cleanData(ea(d)),d.parentNode&&(c&&n.contains(d.ownerDocument,d)&&fa(ea(d,"script")),d.parentNode.removeChild(d));return a}n.extend({htmlPrefilter:function(a){return a.replace(va,"<$1></$2>")},clone:function(a,b,c){var d,e,f,g,h,i=n.contains(a.ownerDocument,a);if(l.html5Clone||n.isXMLDoc(a)||!ua.test("<"+a.nodeName+">")?f=a.cloneNode(!0):(Ba.innerHTML=a.outerHTML,Ba.removeChild(f=Ba.firstChild)),!(l.noCloneEvent&&l.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(d=ea(f),h=ea(a),g=0;null!=(e=h[g]);++g)d[g]&&Ga(e,d[g]);if(b)if(c)for(h=h||ea(a),d=d||ea(f),g=0;null!=(e=h[g]);g++)Fa(e,d[g]);else Fa(a,f);return d=ea(f,"script"),d.length>0&&fa(d,!i&&ea(a,"script")),d=h=e=null,f},cleanData:function(a,b){for(var d,e,f,g,h=0,i=n.expando,j=n.cache,k=l.attributes,m=n.event.special;null!=(d=a[h]);h++)if((b||M(d))&&(f=d[i],g=f&&j[f])){if(g.events)for(e in g.events)m[e]?n.event.remove(d,e):n.removeEvent(d,e,g.handle);j[f]&&(delete j[f],k||"undefined"==typeof d.removeAttribute?d[i]=void 0:d.removeAttribute(i),c.push(f))}}}),n.fn.extend({domManip:Ha,detach:function(a){return Ia(this,a,!0)},remove:function(a){return Ia(this,a)},text:function(a){return Y(this,function(a){return void 0===a?n.text(this):this.empty().append((this[0]&&this[0].ownerDocument||d).createTextNode(a))},null,a,arguments.length)},append:function(){return Ha(this,arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=Ca(this,a);b.appendChild(a)}})},prepend:function(){return Ha(this,arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=Ca(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return Ha(this,arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return Ha(this,arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},empty:function(){for(var a,b=0;null!=(a=this[b]);b++){1===a.nodeType&&n.cleanData(ea(a,!1));while(a.firstChild)a.removeChild(a.firstChild);a.options&&n.nodeName(a,"select")&&(a.options.length=0)}return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return Y(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a)return 1===b.nodeType?b.innerHTML.replace(ta,""):void 0;if("string"==typeof a&&!wa.test(a)&&(l.htmlSerialize||!ua.test(a))&&(l.leadingWhitespace||!aa.test(a))&&!da[($.exec(a)||["",""])[1].toLowerCase()]){a=n.htmlPrefilter(a);try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(ea(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=[];return Ha(this,arguments,function(b){var c=this.parentNode;n.inArray(this,a)<0&&(n.cleanData(ea(this)),c&&c.replaceChild(b,this))},a)}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=0,e=[],f=n(a),h=f.length-1;h>=d;d++)c=d===h?this:this.clone(!0),n(f[d])[b](c),g.apply(e,c.get());return this.pushStack(e)}});var Ja,Ka={HTML:"block",BODY:"block"};function La(a,b){var c=n(b.createElement(a)).appendTo(b.body),d=n.css(c[0],"display");return c.detach(),d}function Ma(a){var b=d,c=Ka[a];return c||(c=La(a,b),"none"!==c&&c||(Ja=(Ja||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=(Ja[0].contentWindow||Ja[0].contentDocument).document,b.write(),b.close(),c=La(a,b),Ja.detach()),Ka[a]=c),c}var Na=/^margin/,Oa=new RegExp("^("+T+")(?!px)[a-z%]+$","i"),Pa=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e},Qa=d.documentElement;!function(){var b,c,e,f,g,h,i=d.createElement("div"),j=d.createElement("div");if(j.style){j.style.cssText="float:left;opacity:.5",l.opacity="0.5"===j.style.opacity,l.cssFloat=!!j.style.cssFloat,j.style.backgroundClip="content-box",j.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===j.style.backgroundClip,i=d.createElement("div"),i.style.cssText="border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute",j.innerHTML="",i.appendChild(j),l.boxSizing=""===j.style.boxSizing||""===j.style.MozBoxSizing||""===j.style.WebkitBoxSizing,n.extend(l,{reliableHiddenOffsets:function(){return null==b&&k(),f},boxSizingReliable:function(){return null==b&&k(),e},pixelMarginRight:function(){return null==b&&k(),c},pixelPosition:function(){return null==b&&k(),b},reliableMarginRight:function(){return null==b&&k(),g},reliableMarginLeft:function(){return null==b&&k(),h}});function k(){var k,l,m=d.documentElement;m.appendChild(i),j.style.cssText="-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%",b=e=h=!1,c=g=!0,a.getComputedStyle&&(l=a.getComputedStyle(j),b="1%"!==(l||{}).top,h="2px"===(l||{}).marginLeft,e="4px"===(l||{width:"4px"}).width,j.style.marginRight="50%",c="4px"===(l||{marginRight:"4px"}).marginRight,k=j.appendChild(d.createElement("div")),k.style.cssText=j.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",k.style.marginRight=k.style.width="0",j.style.width="1px",g=!parseFloat((a.getComputedStyle(k)||{}).marginRight),j.removeChild(k)),j.style.display="none",f=0===j.getClientRects().length,f&&(j.style.display="",j.innerHTML="<table><tr><td></td><td>t</td></tr></table>",j.childNodes[0].style.borderCollapse="separate",k=j.getElementsByTagName("td"),k[0].style.cssText="margin:0;border:0;padding:0;display:none",f=0===k[0].offsetHeight,f&&(k[0].style.display="",k[1].style.display="none",f=0===k[0].offsetHeight)),m.removeChild(i)}}}();var Ra,Sa,Ta=/^(top|right|bottom|left)$/;a.getComputedStyle?(Ra=function(b){var c=b.ownerDocument.defaultView;return c&&c.opener||(c=a),c.getComputedStyle(b)},Sa=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Ra(a),g=c?c.getPropertyValue(b)||c[b]:void 0,""!==g&&void 0!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),c&&!l.pixelMarginRight()&&Oa.test(g)&&Na.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f),void 0===g?g:g+""}):Qa.currentStyle&&(Ra=function(a){return a.currentStyle},Sa=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Ra(a),g=c?c[b]:void 0,null==g&&h&&h[b]&&(g=h[b]),Oa.test(g)&&!Ta.test(b)&&(d=h.left,e=a.runtimeStyle,f=e&&e.left,f&&(e.left=a.currentStyle.left),h.left="fontSize"===b?"1em":g,g=h.pixelLeft+"px",h.left=d,f&&(e.left=f)),void 0===g?g:g+""||"auto"});function Ua(a,b){return{get:function(){return a()?void delete this.get:(this.get=b).apply(this,arguments)}}}var Va=/alpha\([^)]*\)/i,Wa=/opacity\s*=\s*([^)]*)/i,Xa=/^(none|table(?!-c[ea]).+)/,Ya=new RegExp("^("+T+")(.*)$","i"),Za={position:"absolute",visibility:"hidden",display:"block"},$a={letterSpacing:"0",fontWeight:"400"},_a=["Webkit","O","Moz","ms"],ab=d.createElement("div").style;function bb(a){if(a in ab)return a;var b=a.charAt(0).toUpperCase()+a.slice(1),c=_a.length;while(c--)if(a=_a[c]+b,a in ab)return a}function cb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=n._data(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&W(d)&&(f[g]=n._data(d,"olddisplay",Ma(d.nodeName)))):(e=W(d),(c&&"none"!==c||!e)&&n._data(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}function db(a,b,c){var d=Ya.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function eb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+V[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+V[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+V[f]+"Width",!0,e))):(g+=n.css(a,"padding"+V[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+V[f]+"Width",!0,e)));return g}function fb(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=Ra(a),g=l.boxSizing&&"border-box"===n.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=Sa(a,b,f),(0>e||null==e)&&(e=a.style[b]),Oa.test(e))return e;d=g&&(l.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+eb(a,b,c||(g?"border":"content"),d,f)+"px"}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=Sa(a,"opacity");return""===c?"1":c}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":l.cssFloat?"cssFloat":"styleFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;if(b=n.cssProps[h]||(n.cssProps[h]=bb(h)||h),g=n.cssHooks[b]||n.cssHooks[h],void 0===c)return g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b];if(f=typeof c,"string"===f&&(e=U.exec(c))&&e[1]&&(c=X(a,b,e),f="number"),null!=c&&c===c&&("number"===f&&(c+=e&&e[3]||(n.cssNumber[h]?"":"px")),l.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),!(g&&"set"in g&&void 0===(c=g.set(a,c,d)))))try{i[b]=c}catch(j){}}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=bb(h)||h),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(f=g.get(a,!0,c)),void 0===f&&(f=Sa(a,b,d)),"normal"===f&&b in $a&&(f=$a[b]),""===c||c?(e=parseFloat(f),c===!0||isFinite(e)?e||0:f):f}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?Xa.test(n.css(a,"display"))&&0===a.offsetWidth?Pa(a,Za,function(){return fb(a,b,d)}):fb(a,b,d):void 0},set:function(a,c,d){var e=d&&Ra(a);return db(a,c,d?eb(a,b,d,l.boxSizing&&"border-box"===n.css(a,"boxSizing",!1,e),e):0)}}}),l.opacity||(n.cssHooks.opacity={get:function(a,b){return Wa.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=n.isNumeric(b)?"alpha(opacity="+100*b+")":"",f=d&&d.filter||c.filter||"";c.zoom=1,(b>=1||""===b)&&""===n.trim(f.replace(Va,""))&&c.removeAttribute&&(c.removeAttribute("filter"),""===b||d&&!d.filter)||(c.filter=Va.test(f)?f.replace(Va,e):f+" "+e)}}),n.cssHooks.marginRight=Ua(l.reliableMarginRight,function(a,b){return b?Pa(a,{display:"inline-block"},Sa,[a,"marginRight"]):void 0}),n.cssHooks.marginLeft=Ua(l.reliableMarginLeft,function(a,b){return b?(parseFloat(Sa(a,"marginLeft"))||(n.contains(a.ownerDocument,a)?a.getBoundingClientRect().left-Pa(a,{marginLeft:0},function(){return a.getBoundingClientRect().left}):0))+"px":void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+V[d]+b]=f[d]||f[d-2]||f[0];return e}},Na.test(a)||(n.cssHooks[a+b].set=db)}),n.fn.extend({css:function(a,b){return Y(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=Ra(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)},a,b,arguments.length>1)},show:function(){return cb(this,!0)},hide:function(){return cb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){W(this)?n(this).show():n(this).hide()})}});function gb(a,b,c,d,e){return new gb.prototype.init(a,b,c,d,e)}n.Tween=gb,gb.prototype={constructor:gb,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||n.easing._default,this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=gb.propHooks[this.prop];return a&&a.get?a.get(this):gb.propHooks._default.get(this)},run:function(a){var b,c=gb.propHooks[this.prop];return this.options.duration?this.pos=b=n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):this.pos=b=a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):gb.propHooks._default.set(this),this}},gb.prototype.init.prototype=gb.prototype,gb.propHooks={_default:{get:function(a){var b;return 1!==a.elem.nodeType||null!=a.elem[a.prop]&&null==a.elem.style[a.prop]?a.elem[a.prop]:(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0)},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):1!==a.elem.nodeType||null==a.elem.style[n.cssProps[a.prop]]&&!n.cssHooks[a.prop]?a.elem[a.prop]=a.now:n.style(a.elem,a.prop,a.now+a.unit)}}},gb.propHooks.scrollTop=gb.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2},_default:"swing"},n.fx=gb.prototype.init,n.fx.step={};var hb,ib,jb=/^(?:toggle|show|hide)$/,kb=/queueHooks$/;function lb(){return a.setTimeout(function(){hb=void 0}),hb=n.now()}function mb(a,b){var c,d={height:a},e=0;for(b=b?1:0;4>e;e+=2-b)c=V[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function nb(a,b,c){for(var d,e=(qb.tweeners[b]||[]).concat(qb.tweeners["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function ob(a,b,c){var d,e,f,g,h,i,j,k,m=this,o={},p=a.style,q=a.nodeType&&W(a),r=n._data(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,m.always(function(){m.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[p.overflow,p.overflowX,p.overflowY],j=n.css(a,"display"),k="none"===j?n._data(a,"olddisplay")||Ma(a.nodeName):j,"inline"===k&&"none"===n.css(a,"float")&&(l.inlineBlockNeedsLayout&&"inline"!==Ma(a.nodeName)?p.zoom=1:p.display="inline-block")),c.overflow&&(p.overflow="hidden",l.shrinkWrapBlocks()||m.always(function(){p.overflow=c.overflow[0],p.overflowX=c.overflow[1],p.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],jb.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(q?"hide":"show")){if("show"!==e||!r||void 0===r[d])continue;q=!0}o[d]=r&&r[d]||n.style(a,d)}else j=void 0;if(n.isEmptyObject(o))"inline"===("none"===j?Ma(a.nodeName):j)&&(p.display=j);else{r?"hidden"in r&&(q=r.hidden):r=n._data(a,"fxshow",{}),f&&(r.hidden=!q),q?n(a).show():m.done(function(){n(a).hide()}),m.done(function(){var b;n._removeData(a,"fxshow");for(b in o)n.style(a,b,o[b])});for(d in o)g=nb(q?r[d]:0,d,m),d in r||(r[d]=g.start,q&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function pb(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function qb(a,b,c){var d,e,f=0,g=qb.prefilters.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=hb||lb(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{},easing:n.easing._default},c),originalProperties:b,originalOptions:c,startTime:hb||lb(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?(h.notifyWith(a,[j,1,0]),h.resolveWith(a,[j,b])):h.rejectWith(a,[j,b]),this}}),k=j.props;for(pb(k,j.opts.specialEasing);g>f;f++)if(d=qb.prefilters[f].call(j,a,k,j.opts))return n.isFunction(d.stop)&&(n._queueHooks(j.elem,j.opts.queue).stop=n.proxy(d.stop,d)),d;return n.map(k,nb,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(qb,{tweeners:{"*":[function(a,b){var c=this.createTween(a,b);return X(c.elem,a,U.exec(b),c),c}]},tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.match(G);for(var c,d=0,e=a.length;e>d;d++)c=a[d],qb.tweeners[c]=qb.tweeners[c]||[],qb.tweeners[c].unshift(b)},prefilters:[ob],prefilter:function(a,b){b?qb.prefilters.unshift(a):qb.prefilters.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,null!=d.queue&&d.queue!==!0||(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(W).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=qb(this,n.extend({},a),f);(e||n._data(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=n._data(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&kb.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));!b&&c||n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=n._data(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(mb(b,!0),a,d,e)}}),n.each({slideDown:mb("show"),slideUp:mb("hide"),slideToggle:mb("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=n.timers,c=0;for(hb=n.now();c<b.length;c++)a=b[c],a()||b[c]!==a||b.splice(c--,1);b.length||n.fx.stop(),hb=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){ib||(ib=a.setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){a.clearInterval(ib),ib=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(b,c){return b=n.fx?n.fx.speeds[b]||b:b,c=c||"fx",this.queue(c,function(c,d){var e=a.setTimeout(c,b);d.stop=function(){a.clearTimeout(e)}})},function(){var a,b=d.createElement("input"),c=d.createElement("div"),e=d.createElement("select"),f=e.appendChild(d.createElement("option"));c=d.createElement("div"),c.setAttribute("className","t"),c.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=c.getElementsByTagName("a")[0],b.setAttribute("type","checkbox"),c.appendChild(b),a=c.getElementsByTagName("a")[0],a.style.cssText="top:1px",l.getSetAttribute="t"!==c.className,l.style=/top/.test(a.getAttribute("style")),l.hrefNormalized="/a"===a.getAttribute("href"),l.checkOn=!!b.value,l.optSelected=f.selected,l.enctype=!!d.createElement("form").enctype,e.disabled=!0,l.optDisabled=!f.disabled,b=d.createElement("input"),b.setAttribute("value",""),l.input=""===b.getAttribute("value"),b.value="t",b.setAttribute("type","radio"),l.radioValue="t"===b.value}();var rb=/\r/g,sb=/[\x20\t\r\n\f]+/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(rb,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.trim(n.text(a)).replace(sb," ")}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],(c.selected||i===e)&&(l.optDisabled?!c.disabled:null===c.getAttribute("disabled"))&&(!c.parentNode.disabled||!n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)if(d=e[g],n.inArray(n.valHooks.option.get(d),f)>-1)try{d.selected=c=!0}catch(h){d.scrollHeight}else d.selected=!1;return c||(a.selectedIndex=-1),e}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>-1:void 0}},l.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})});var tb,ub,vb=n.expr.attrHandle,wb=/^(?:checked|selected)$/i,xb=l.getSetAttribute,yb=l.input;n.fn.extend({attr:function(a,b){return Y(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(3!==f&&8!==f&&2!==f)return"undefined"==typeof a.getAttribute?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),e=n.attrHooks[b]||(n.expr.match.bool.test(b)?ub:tb)),void 0!==c?null===c?void n.removeAttr(a,b):e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:(a.setAttribute(b,c+""),c):e&&"get"in e&&null!==(d=e.get(a,b))?d:(d=n.find.attr(a,b),null==d?void 0:d))},attrHooks:{type:{set:function(a,b){if(!l.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(G);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)?yb&&xb||!wb.test(c)?a[d]=!1:a[n.camelCase("default-"+c)]=a[d]=!1:n.attr(a,c,""),a.removeAttribute(xb?c:d)}}),ub={set:function(a,b,c){return b===!1?n.removeAttr(a,c):yb&&xb||!wb.test(c)?a.setAttribute(!xb&&n.propFix[c]||c,c):a[n.camelCase("default-"+c)]=a[c]=!0,c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=vb[b]||n.find.attr;yb&&xb||!wb.test(b)?vb[b]=function(a,b,d){var e,f;return d||(f=vb[b],vb[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,vb[b]=f),e}:vb[b]=function(a,b,c){return c?void 0:a[n.camelCase("default-"+b)]?b.toLowerCase():null}}),yb&&xb||(n.attrHooks.value={set:function(a,b,c){return n.nodeName(a,"input")?void(a.defaultValue=b):tb&&tb.set(a,b,c)}}),xb||(tb={set:function(a,b,c){var d=a.getAttributeNode(c);return d||a.setAttributeNode(d=a.ownerDocument.createAttribute(c)),d.value=b+="","value"===c||b===a.getAttribute(c)?b:void 0}},vb.id=vb.name=vb.coords=function(a,b,c){var d;return c?void 0:(d=a.getAttributeNode(b))&&""!==d.value?d.value:null},n.valHooks.button={get:function(a,b){var c=a.getAttributeNode(b);return c&&c.specified?c.value:void 0},set:tb.set},n.attrHooks.contenteditable={set:function(a,b,c){tb.set(a,""===b?!1:b,c)}},n.each(["width","height"],function(a,b){n.attrHooks[b]={set:function(a,c){return""===c?(a.setAttribute(b,"auto"),c):void 0}}})),l.style||(n.attrHooks.style={get:function(a){return a.style.cssText||void 0},set:function(a,b){return a.style.cssText=b+""}});var zb=/^(?:input|select|textarea|button|object)$/i,Ab=/^(?:a|area)$/i;n.fn.extend({prop:function(a,b){return Y(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return a=n.propFix[a]||a,this.each(function(){try{this[a]=void 0,delete this[a]}catch(b){}})}}),n.extend({prop:function(a,b,c){var d,e,f=a.nodeType;if(3!==f&&8!==f&&2!==f)return 1===f&&n.isXMLDoc(a)||(b=n.propFix[b]||b,e=n.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){var b=n.find.attr(a,"tabindex");return b?parseInt(b,10):zb.test(a.nodeName)||Ab.test(a.nodeName)&&a.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),l.hrefNormalized||n.each(["href","src"],function(a,b){n.propHooks[b]={get:function(a){return a.getAttribute(b,4)}}}),l.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null},set:function(a){var b=a.parentNode;b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex)}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this}),l.enctype||(n.propFix.enctype="encoding");var Bb=/[\t\r\n\f]/g;function Cb(a){return n.attr(a,"class")||""}n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h,i=0;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,Cb(this)))});if("string"==typeof a&&a){b=a.match(G)||[];while(c=this[i++])if(e=Cb(c),d=1===c.nodeType&&(" "+e+" ").replace(Bb," ")){g=0;while(f=b[g++])d.indexOf(" "+f+" ")<0&&(d+=f+" ");h=n.trim(d),e!==h&&n.attr(c,"class",h)}}return this},removeClass:function(a){var b,c,d,e,f,g,h,i=0;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,Cb(this)))});if(!arguments.length)return this.attr("class","");if("string"==typeof a&&a){b=a.match(G)||[];while(c=this[i++])if(e=Cb(c),d=1===c.nodeType&&(" "+e+" ").replace(Bb," ")){g=0;while(f=b[g++])while(d.indexOf(" "+f+" ")>-1)d=d.replace(" "+f+" "," ");h=n.trim(d),e!==h&&n.attr(c,"class",h)}}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):n.isFunction(a)?this.each(function(c){n(this).toggleClass(a.call(this,c,Cb(this),b),b)}):this.each(function(){var b,d,e,f;if("string"===c){d=0,e=n(this),f=a.match(G)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else void 0!==a&&"boolean"!==c||(b=Cb(this),b&&n._data(this,"__className__",b),n.attr(this,"class",b||a===!1?"":n._data(this,"__className__")||""))})},hasClass:function(a){var b,c,d=0;b=" "+a+" ";while(c=this[d++])if(1===c.nodeType&&(" "+Cb(c)+" ").replace(Bb," ").indexOf(b)>-1)return!0;return!1}}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}});var Db=a.location,Eb=n.now(),Fb=/\?/,Gb=/(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;n.parseJSON=function(b){if(a.JSON&&a.JSON.parse)return a.JSON.parse(b+"");var c,d=null,e=n.trim(b+"");return e&&!n.trim(e.replace(Gb,function(a,b,e,f){return c&&b&&(d=0),0===d?a:(c=e||b,d+=!f-!e,"")}))?Function("return "+e)():n.error("Invalid JSON: "+b)},n.parseXML=function(b){var c,d;if(!b||"string"!=typeof b)return null;try{a.DOMParser?(d=new a.DOMParser,c=d.parseFromString(b,"text/xml")):(c=new a.ActiveXObject("Microsoft.XMLDOM"),c.async="false",c.loadXML(b))}catch(e){c=void 0}return c&&c.documentElement&&!c.getElementsByTagName("parsererror").length||n.error("Invalid XML: "+b),c};var Hb=/#.*$/,Ib=/([?&])_=[^&]*/,Jb=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Kb=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Lb=/^(?:GET|HEAD)$/,Mb=/^\/\//,Nb=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,Ob={},Pb={},Qb="*/".concat("*"),Rb=Db.href,Sb=Nb.exec(Rb.toLowerCase())||[];function Tb(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(G)||[];if(n.isFunction(c))while(d=f[e++])"+"===d.charAt(0)?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function Ub(a,b,c,d){var e={},f=a===Pb;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function Vb(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(d in b)void 0!==b[d]&&((e[d]?a:c||(c={}))[d]=b[d]);return c&&n.extend(!0,a,c),a}function Wb(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===e&&(e=a.mimeType||b.getResponseHeader("Content-Type"));if(e)for(g in h)if(h[g]&&h[g].test(e)){i.unshift(g);break}if(i[0]in c)f=i[0];else{for(g in c){if(!i[0]||a.converters[g+" "+i[0]]){f=g;break}d||(d=g)}f=f||d}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function Xb(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Rb,type:"GET",isLocal:Kb.test(Sb[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Qb,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?Vb(Vb(a,n.ajaxSettings),b):Vb(n.ajaxSettings,a)},ajaxPrefilter:Tb(Ob),ajaxTransport:Tb(Pb),ajax:function(b,c){"object"==typeof b&&(c=b,b=void 0),c=c||{};var d,e,f,g,h,i,j,k,l=n.ajaxSetup({},c),m=l.context||l,o=l.context&&(m.nodeType||m.jquery)?n(m):n.event,p=n.Deferred(),q=n.Callbacks("once memory"),r=l.statusCode||{},s={},t={},u=0,v="canceled",w={readyState:0,getResponseHeader:function(a){var b;if(2===u){if(!k){k={};while(b=Jb.exec(g))k[b[1].toLowerCase()]=b[2]}b=k[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===u?g:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return u||(a=t[c]=t[c]||a,s[a]=b),this},overrideMimeType:function(a){return u||(l.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>u)for(b in a)r[b]=[r[b],a[b]];else w.always(a[w.status]);return this},abort:function(a){var b=a||v;return j&&j.abort(b),y(0,b),this}};if(p.promise(w).complete=q.add,w.success=w.done,w.error=w.fail,l.url=((b||l.url||Rb)+"").replace(Hb,"").replace(Mb,Sb[1]+"//"),l.type=c.method||c.type||l.method||l.type,l.dataTypes=n.trim(l.dataType||"*").toLowerCase().match(G)||[""],null==l.crossDomain&&(d=Nb.exec(l.url.toLowerCase()),l.crossDomain=!(!d||d[1]===Sb[1]&&d[2]===Sb[2]&&(d[3]||("http:"===d[1]?"80":"443"))===(Sb[3]||("http:"===Sb[1]?"80":"443")))),l.data&&l.processData&&"string"!=typeof l.data&&(l.data=n.param(l.data,l.traditional)),Ub(Ob,l,c,w),2===u)return w;i=n.event&&l.global,i&&0===n.active++&&n.event.trigger("ajaxStart"),l.type=l.type.toUpperCase(),l.hasContent=!Lb.test(l.type),f=l.url,l.hasContent||(l.data&&(f=l.url+=(Fb.test(f)?"&":"?")+l.data,delete l.data),l.cache===!1&&(l.url=Ib.test(f)?f.replace(Ib,"$1_="+Eb++):f+(Fb.test(f)?"&":"?")+"_="+Eb++)),l.ifModified&&(n.lastModified[f]&&w.setRequestHeader("If-Modified-Since",n.lastModified[f]),n.etag[f]&&w.setRequestHeader("If-None-Match",n.etag[f])),(l.data&&l.hasContent&&l.contentType!==!1||c.contentType)&&w.setRequestHeader("Content-Type",l.contentType),w.setRequestHeader("Accept",l.dataTypes[0]&&l.accepts[l.dataTypes[0]]?l.accepts[l.dataTypes[0]]+("*"!==l.dataTypes[0]?", "+Qb+"; q=0.01":""):l.accepts["*"]);for(e in l.headers)w.setRequestHeader(e,l.headers[e]);if(l.beforeSend&&(l.beforeSend.call(m,w,l)===!1||2===u))return w.abort();v="abort";for(e in{success:1,error:1,complete:1})w[e](l[e]);if(j=Ub(Pb,l,c,w)){if(w.readyState=1,i&&o.trigger("ajaxSend",[w,l]),2===u)return w;l.async&&l.timeout>0&&(h=a.setTimeout(function(){w.abort("timeout")},l.timeout));try{u=1,j.send(s,y)}catch(x){if(!(2>u))throw x;y(-1,x)}}else y(-1,"No Transport");function y(b,c,d,e){var k,s,t,v,x,y=c;2!==u&&(u=2,h&&a.clearTimeout(h),j=void 0,g=e||"",w.readyState=b>0?4:0,k=b>=200&&300>b||304===b,d&&(v=Wb(l,w,d)),v=Xb(l,v,w,k),k?(l.ifModified&&(x=w.getResponseHeader("Last-Modified"),x&&(n.lastModified[f]=x),x=w.getResponseHeader("etag"),x&&(n.etag[f]=x)),204===b||"HEAD"===l.type?y="nocontent":304===b?y="notmodified":(y=v.state,s=v.data,t=v.error,k=!t)):(t=y,!b&&y||(y="error",0>b&&(b=0))),w.status=b,w.statusText=(c||y)+"",k?p.resolveWith(m,[s,y,w]):p.rejectWith(m,[w,y,t]),w.statusCode(r),r=void 0,i&&o.trigger(k?"ajaxSuccess":"ajaxError",[w,l,k?s:t]),q.fireWith(m,[w,y]),i&&(o.trigger("ajaxComplete",[w,l]),--n.active||n.event.trigger("ajaxStop")))}return w},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax(n.extend({url:a,type:b,dataType:e,data:c,success:d},n.isPlainObject(a)&&a))}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){if(n.isFunction(a))return this.each(function(b){n(this).wrapAll(a.call(this,b))});if(this[0]){var b=n(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&1===a.firstChild.nodeType)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return n.isFunction(a)?this.each(function(b){n(this).wrapInner(a.call(this,b))}):this.each(function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}});function Yb(a){return a.style&&a.style.display||n.css(a,"display")}function Zb(a){if(!n.contains(a.ownerDocument||d,a))return!0;while(a&&1===a.nodeType){if("none"===Yb(a)||"hidden"===a.type)return!0;a=a.parentNode}return!1}n.expr.filters.hidden=function(a){return l.reliableHiddenOffsets()?a.offsetWidth<=0&&a.offsetHeight<=0&&!a.getClientRects().length:Zb(a)},n.expr.filters.visible=function(a){return!n.expr.filters.hidden(a)};var $b=/%20/g,_b=/\[\]$/,ac=/\r?\n/g,bc=/^(?:submit|button|image|reset|file)$/i,cc=/^(?:input|select|textarea|keygen)/i;function dc(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||_b.test(a)?d(a,e):dc(a+"["+("object"==typeof e&&null!=e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)dc(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)dc(c,a[c],b,e);return d.join("&").replace($b,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&cc.test(this.nodeName)&&!bc.test(a)&&(this.checked||!Z.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(ac,"\r\n")}}):{name:b.name,value:c.replace(ac,"\r\n")}}).get()}}),n.ajaxSettings.xhr=void 0!==a.ActiveXObject?function(){return this.isLocal?ic():d.documentMode>8?hc():/^(get|post|head|put|delete|options)$/i.test(this.type)&&hc()||ic()}:hc;var ec=0,fc={},gc=n.ajaxSettings.xhr();a.attachEvent&&a.attachEvent("onunload",function(){for(var a in fc)fc[a](void 0,!0)}),l.cors=!!gc&&"withCredentials"in gc,gc=l.ajax=!!gc,gc&&n.ajaxTransport(function(b){if(!b.crossDomain||l.cors){var c;return{send:function(d,e){var f,g=b.xhr(),h=++ec;if(g.open(b.type,b.url,b.async,b.username,b.password),b.xhrFields)for(f in b.xhrFields)g[f]=b.xhrFields[f];b.mimeType&&g.overrideMimeType&&g.overrideMimeType(b.mimeType),b.crossDomain||d["X-Requested-With"]||(d["X-Requested-With"]="XMLHttpRequest");for(f in d)void 0!==d[f]&&g.setRequestHeader(f,d[f]+"");g.send(b.hasContent&&b.data||null),c=function(a,d){var f,i,j;if(c&&(d||4===g.readyState))if(delete fc[h],c=void 0,g.onreadystatechange=n.noop,d)4!==g.readyState&&g.abort();else{j={},f=g.status,"string"==typeof g.responseText&&(j.text=g.responseText);try{i=g.statusText}catch(k){i=""}f||!b.isLocal||b.crossDomain?1223===f&&(f=204):f=j.text?200:404}j&&e(f,i,j,g.getAllResponseHeaders())},b.async?4===g.readyState?a.setTimeout(c):g.onreadystatechange=fc[h]=c:c()},abort:function(){c&&c(void 0,!0)}}}});function hc(){try{return new a.XMLHttpRequest}catch(b){}}function ic(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c=d.head||n("head")[0]||d.documentElement;return{send:function(e,f){b=d.createElement("script"),b.async=!0,a.scriptCharset&&(b.charset=a.scriptCharset),b.src=a.url,b.onload=b.onreadystatechange=function(a,c){(c||!b.readyState||/loaded|complete/.test(b.readyState))&&(b.onload=b.onreadystatechange=null,b.parentNode&&b.parentNode.removeChild(b),b=null,c||f(200,"success"))},c.insertBefore(b,c.firstChild)},abort:function(){b&&b.onload(void 0,!0)}}}});var jc=[],kc=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=jc.pop()||n.expando+"_"+Eb++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(kc.test(b.url)?"url":"string"==typeof b.data&&0===(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&kc.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(kc,"$1"+e):b.jsonp!==!1&&(b.url+=(Fb.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){void 0===f?n(a).removeProp(e):a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,jc.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||d;var e=x.exec(a),f=!c&&[];return e?[b.createElement(e[1])]:(e=ja([a],b,f),f&&f.length&&n(f).remove(),n.merge([],e.childNodes))};var lc=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&lc)return lc.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>-1&&(d=n.trim(a.slice(h,a.length)),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(e="POST"),g.length>0&&n.ajax({url:a,type:e||"GET",dataType:"html",data:b}).done(function(a){f=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).always(c&&function(a,b){g.each(function(){c.apply(this,f||[a.responseText,b,a])})}),this},n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};function mc(a){return n.isWindow(a)?a:9===a.nodeType?a.defaultView||a.parentWindow:!1}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&n.inArray("auto",[f,i])>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,n.extend({},h))),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d={top:0,left:0},e=this[0],f=e&&e.ownerDocument;if(f)return b=f.documentElement,n.contains(b,e)?("undefined"!=typeof e.getBoundingClientRect&&(d=e.getBoundingClientRect()),c=mc(f),{top:d.top+(c.pageYOffset||b.scrollTop)-(b.clientTop||0),left:d.left+(c.pageXOffset||b.scrollLeft)-(b.clientLeft||0)}):d},position:function(){if(this[0]){var a,b,c={top:0,left:0},d=this[0];return"fixed"===n.css(d,"position")?b=d.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(c=a.offset()),c.top+=n.css(a[0],"borderTopWidth",!0),c.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-c.top-n.css(d,"marginTop",!0),left:b.left-c.left-n.css(d,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent;while(a&&!n.nodeName(a,"html")&&"static"===n.css(a,"position"))a=a.offsetParent;return a||Qa})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var c=/Y/.test(b);n.fn[a]=function(d){return Y(this,function(a,d,e){var f=mc(a);return void 0===e?f?b in f?f[b]:f.document.documentElement[d]:a[d]:void(f?f.scrollTo(c?n(f).scrollLeft():e,c?e:n(f).scrollTop()):a[d]=e)},a,d,arguments.length,null)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=Ua(l.pixelPosition,function(a,c){return c?(c=Sa(a,b),Oa.test(c)?n(a).position()[b]+"px":c):void 0})}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return Y(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.extend({bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}}),n.fn.size=function(){return this.length},n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var nc=a.jQuery,oc=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=oc),b&&a.jQuery===n&&(a.jQuery=nc),n},b||(a.jQuery=a.$=n),n});/*!* Bootstrap v3.3.7 (http://getbootstrap.com)
* Copyright 2011-2016 Twitter, Inc.
* Licensed under the MIT license*/if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(a){"use strict";var b=a.fn.jquery.split(" ")[0].split(".");if(b[0]<2&&b[1]<9||1==b[0]&&9==b[1]&&b[2]<1||b[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(jQuery),+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]};return!1}a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one("bsTransitionEnd",function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b(),a.support.transition&&(a.event.special.bsTransitionEnd={bindType:a.support.transition.end,delegateType:a.support.transition.end,handle:function(b){if(a(b.target).is(this))return b.handleObj.handler.apply(this,arguments)}})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var c=a(this),e=c.data("bs.alert");e||c.data("bs.alert",e=new d(this)),"string"==typeof b&&e[b].call(c)})}var c='[data-dismiss="alert"]',d=function(b){a(b).on("click",c,this.close)};d.VERSION="3.3.7",d.TRANSITION_DURATION=150,d.prototype.close=function(b){function c(){g.detach().trigger("closed.bs.alert").remove()}var e=a(this),f=e.attr("data-target");f||(f=e.attr("href"),f=f&&f.replace(/.*(?=#[^\s]*$)/,""));var g=a("#"===f?[]:f);b&&b.preventDefault(),g.length||(g=e.closest(".alert")),g.trigger(b=a.Event("close.bs.alert")),b.isDefaultPrevented()||(g.removeClass("in"),a.support.transition&&g.hasClass("fade")?g.one("bsTransitionEnd",c).emulateTransitionEnd(d.TRANSITION_DURATION):c())};var e=a.fn.alert;a.fn.alert=b,a.fn.alert.Constructor=d,a.fn.alert.noConflict=function(){return a.fn.alert=e,this},a(document).on("click.bs.alert.data-api",c,d.prototype.close)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.button"),f="object"==typeof b&&b;e||d.data("bs.button",e=new c(this,f)),"toggle"==b?e.toggle():b&&e.setState(b)})}var c=function(b,d){this.$element=a(b),this.options=a.extend({},c.DEFAULTS,d),this.isLoading=!1};c.VERSION="3.3.7",c.DEFAULTS={loadingText:"loading..."},c.prototype.setState=function(b){var c="disabled",d=this.$element,e=d.is("input")?"val":"html",f=d.data();b+="Text",null==f.resetText&&d.data("resetText",d[e]()),setTimeout(a.proxy(function(){d[e](null==f[b]?this.options[b]:f[b]),"loadingText"==b?(this.isLoading=!0,d.addClass(c).attr(c,c).prop(c,!0)):this.isLoading&&(this.isLoading=!1,d.removeClass(c).removeAttr(c).prop(c,!1))},this),0)},c.prototype.toggle=function(){var a=!0,b=this.$element.closest('[data-toggle="buttons"]');if(b.length){var c=this.$element.find("input");"radio"==c.prop("type")?(c.prop("checked")&&(a=!1),b.find(".active").removeClass("active"),this.$element.addClass("active")):"checkbox"==c.prop("type")&&(c.prop("checked")!==this.$element.hasClass("active")&&(a=!1),this.$element.toggleClass("active")),c.prop("checked",this.$element.hasClass("active")),a&&c.trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active")),this.$element.toggleClass("active")};var d=a.fn.button;a.fn.button=b,a.fn.button.Constructor=c,a.fn.button.noConflict=function(){return a.fn.button=d,this},a(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(c){var d=a(c.target).closest(".btn");b.call(d,"toggle"),a(c.target).is('input[type="radio"], input[type="checkbox"]')||(c.preventDefault(),d.is("input,button")?d.trigger("focus"):d.find("input:visible,button:visible").first().trigger("focus"))}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(b){a(b.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(b.type))})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.carousel"),f=a.extend({},c.DEFAULTS,d.data(),"object"==typeof b&&b),g="string"==typeof b?b:f.slide;e||d.data("bs.carousel",e=new c(this,f)),"number"==typeof b?e.to(b):g?e[g]():f.interval&&e.pause().cycle()})}var c=function(b,c){this.$element=a(b),this.$indicators=this.$element.find(".carousel-indicators"),this.options=c,this.paused=null,this.sliding=null,this.interval=null,this.$active=null,this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",a.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",a.proxy(this.pause,this)).on("mouseleave.bs.carousel",a.proxy(this.cycle,this))};c.VERSION="3.3.7",c.TRANSITION_DURATION=600,c.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},c.prototype.keydown=function(a){if(!/input|textarea/i.test(a.target.tagName)){switch(a.which){case 37:this.prev();break;case 39:this.next();break;default:return}a.preventDefault()}},c.prototype.cycle=function(b){return b||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(a.proxy(this.next,this),this.options.interval)),this},c.prototype.getItemIndex=function(a){return this.$items=a.parent().children(".item"),this.$items.index(a||this.$active)},c.prototype.getItemForDirection=function(a,b){var c=this.getItemIndex(b),d="prev"==a&&0===c||"next"==a&&c==this.$items.length-1;if(d&&!this.options.wrap)return b;var e="prev"==a?-1:1,f=(c+e)%this.$items.length;return this.$items.eq(f)},c.prototype.to=function(a){var b=this,c=this.getItemIndex(this.$active=this.$element.find(".item.active"));if(!(a>this.$items.length-1||a<0))return this.sliding?this.$element.one("slid.bs.carousel",function(){b.to(a)}):c==a?this.pause().cycle():this.slide(a>c?"next":"prev",this.$items.eq(a))},c.prototype.pause=function(b){return b||(this.paused=!0),this.$element.find(".next, .prev").length&&a.support.transition&&(this.$element.trigger(a.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},c.prototype.next=function(){if(!this.sliding)return this.slide("next")},c.prototype.prev=function(){if(!this.sliding)return this.slide("prev")},c.prototype.slide=function(b,d){var e=this.$element.find(".item.active"),f=d||this.getItemForDirection(b,e),g=this.interval,h="next"==b?"left":"right",i=this;if(f.hasClass("active"))return this.sliding=!1;var j=f[0],k=a.Event("slide.bs.carousel",{relatedTarget:j,direction:h});if(this.$element.trigger(k),!k.isDefaultPrevented()){if(this.sliding=!0,g&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var l=a(this.$indicators.children()[this.getItemIndex(f)]);l&&l.addClass("active")}var m=a.Event("slid.bs.carousel",{relatedTarget:j,direction:h});return a.support.transition&&this.$element.hasClass("slide")?(f.addClass(b),f[0].offsetWidth,e.addClass(h),f.addClass(h),e.one("bsTransitionEnd",function(){f.removeClass([b,h].join(" ")).addClass("active"),e.removeClass(["active",h].join(" ")),i.sliding=!1,setTimeout(function(){i.$element.trigger(m)},0)}).emulateTransitionEnd(c.TRANSITION_DURATION)):(e.removeClass("active"),f.addClass("active"),this.sliding=!1,this.$element.trigger(m)),g&&this.cycle(),this}};var d=a.fn.carousel;a.fn.carousel=b,a.fn.carousel.Constructor=c,a.fn.carousel.noConflict=function(){return a.fn.carousel=d,this};var e=function(c){var d,e=a(this),f=a(e.attr("data-target")||(d=e.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,""));if(f.hasClass("carousel")){var g=a.extend({},f.data(),e.data()),h=e.attr("data-slide-to");h&&(g.interval=!1),b.call(f,g),h&&f.data("bs.carousel").to(h),c.preventDefault()}};a(document).on("click.bs.carousel.data-api","[data-slide]",e).on("click.bs.carousel.data-api","[data-slide-to]",e),a(window).on("load",function(){a('[data-ride="carousel"]').each(function(){var c=a(this);b.call(c,c.data())})})}(jQuery),+function(a){"use strict";function b(b){var c,d=b.attr("data-target")||(c=b.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"");return a(d)}function c(b){return this.each(function(){var c=a(this),e=c.data("bs.collapse"),f=a.extend({},d.DEFAULTS,c.data(),"object"==typeof b&&b);!e&&f.toggle&&/show|hide/.test(b)&&(f.toggle=!1),e||c.data("bs.collapse",e=new d(this,f)),"string"==typeof b&&e[b]()})}var d=function(b,c){this.$element=a(b),this.options=a.extend({},d.DEFAULTS,c),this.$trigger=a('[data-toggle="collapse"][href="#'+b.id+'"],[data-toggle="collapse"][data-target="#'+b.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};d.VERSION="3.3.7",d.TRANSITION_DURATION=350,d.DEFAULTS={toggle:!0},d.prototype.dimension=function(){var a=this.$element.hasClass("width");return a?"width":"height"},d.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var b,e=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(e&&e.length&&(b=e.data("bs.collapse"),b&&b.transitioning))){var f=a.Event("show.bs.collapse");if(this.$element.trigger(f),!f.isDefaultPrevented()){e&&e.length&&(c.call(e,"hide"),b||e.data("bs.collapse",null));var g=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var h=function(){this.$element.removeClass("collapsing").addClass("collapse in")[g](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!a.support.transition)return h.call(this);var i=a.camelCase(["scroll",g].join("-"));this.$element.one("bsTransitionEnd",a.proxy(h,this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])}}}},d.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var b=a.Event("hide.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.dimension();this.$element[c](this.$element[c]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var e=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return a.support.transition?void this.$element[c](0).one("bsTransitionEnd",a.proxy(e,this)).emulateTransitionEnd(d.TRANSITION_DURATION):e.call(this)}}},d.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},d.prototype.getParent=function(){return a(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(a.proxy(function(c,d){var e=a(d);this.addAriaAndCollapsedClass(b(e),e)},this)).end()},d.prototype.addAriaAndCollapsedClass=function(a,b){var c=a.hasClass("in");a.attr("aria-expanded",c),b.toggleClass("collapsed",!c).attr("aria-expanded",c)};var e=a.fn.collapse;a.fn.collapse=c,a.fn.collapse.Constructor=d,a.fn.collapse.noConflict=function(){return a.fn.collapse=e,this},a(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(d){var e=a(this);e.attr("data-target")||d.preventDefault();var f=b(e),g=f.data("bs.collapse"),h=g?"toggle":e.data();c.call(f,h)})}(jQuery),+function(a){"use strict";function b(b){var c=b.attr("data-target");c||(c=b.attr("href"),c=c&&/#[A-Za-z]/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));var d=c&&a(c);return d&&d.length?d:b.parent()}function c(c){c&&3===c.which||(a(e).remove(),a(f).each(function(){var d=a(this),e=b(d),f={relatedTarget:this};e.hasClass("open")&&(c&&"click"==c.type&&/input|textarea/i.test(c.target.tagName)&&a.contains(e[0],c.target)||(e.trigger(c=a.Event("hide.bs.dropdown",f)),c.isDefaultPrevented()||(d.attr("aria-expanded","false"),e.removeClass("open").trigger(a.Event("hidden.bs.dropdown",f)))))}))}function d(b){return this.each(function(){var c=a(this),d=c.data("bs.dropdown");d||c.data("bs.dropdown",d=new g(this)),"string"==typeof b&&d[b].call(c)})}var e=".dropdown-backdrop",f='[data-toggle="dropdown"]',g=function(b){a(b).on("click.bs.dropdown",this.toggle)};g.VERSION="3.3.7",g.prototype.toggle=function(d){var e=a(this);if(!e.is(".disabled, :disabled")){var f=b(e),g=f.hasClass("open");if(c(),!g){"ontouchstart"in document.documentElement&&!f.closest(".navbar-nav").length&&a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click",c);var h={relatedTarget:this};if(f.trigger(d=a.Event("show.bs.dropdown",h)),d.isDefaultPrevented())return;e.trigger("focus").attr("aria-expanded","true"),f.toggleClass("open").trigger(a.Event("shown.bs.dropdown",h))}return!1}},g.prototype.keydown=function(c){if(/(38|40|27|32)/.test(c.which)&&!/input|textarea/i.test(c.target.tagName)){var d=a(this);if(c.preventDefault(),c.stopPropagation(),!d.is(".disabled, :disabled")){var e=b(d),g=e.hasClass("open");if(!g&&27!=c.which||g&&27==c.which)return 27==c.which&&e.find(f).trigger("focus"),d.trigger("click");var h=" li:not(.disabled):visible a",i=e.find(".dropdown-menu"+h);if(i.length){var j=i.index(c.target);38==c.which&&j>0&&j--,40==c.which&&j<i.length-1&&j++,~j||(j=0),i.eq(j).trigger("focus")}}}};var h=a.fn.dropdown;a.fn.dropdown=d,a.fn.dropdown.Constructor=g,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=h,this},a(document).on("click.bs.dropdown.data-api",c).on("click.bs.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.bs.dropdown.data-api",f,g.prototype.toggle).on("keydown.bs.dropdown.data-api",f,g.prototype.keydown).on("keydown.bs.dropdown.data-api",".dropdown-menu",g.prototype.keydown)}(jQuery),+function(a){"use strict";function b(b,d){return this.each(function(){var e=a(this),f=e.data("bs.modal"),g=a.extend({},c.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data("bs.modal",f=new c(this,g)),"string"==typeof b?f[b](d):g.show&&f.show(d)})}var c=function(b,c){this.options=c,this.$body=a(document.body),this.$element=a(b),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,a.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};c.VERSION="3.3.7",c.TRANSITION_DURATION=300,c.BACKDROP_TRANSITION_DURATION=150,c.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},c.prototype.toggle=function(a){return this.isShown?this.hide():this.show(a)},c.prototype.show=function(b){var d=this,e=a.Event("show.bs.modal",{relatedTarget:b});this.$element.trigger(e),this.isShown||e.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',a.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){d.$element.one("mouseup.dismiss.bs.modal",function(b){a(b.target).is(d.$element)&&(d.ignoreBackdropClick=!0)})}),this.backdrop(function(){var e=a.support.transition&&d.$element.hasClass("fade");d.$element.parent().length||d.$element.appendTo(d.$body),d.$element.show().scrollTop(0),d.adjustDialog(),e&&d.$element[0].offsetWidth,d.$element.addClass("in"),d.enforceFocus();var f=a.Event("shown.bs.modal",{relatedTarget:b});e?d.$dialog.one("bsTransitionEnd",function(){d.$element.trigger("focus").trigger(f)}).emulateTransitionEnd(c.TRANSITION_DURATION):d.$element.trigger("focus").trigger(f)}))},c.prototype.hide=function(b){b&&b.preventDefault(),b=a.Event("hide.bs.modal"),this.$element.trigger(b),this.isShown&&!b.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),a(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),a.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",a.proxy(this.hideModal,this)).emulateTransitionEnd(c.TRANSITION_DURATION):this.hideModal())},c.prototype.enforceFocus=function(){a(document).off("focusin.bs.modal").on("focusin.bs.modal",a.proxy(function(a){document===a.target||this.$element[0]===a.target||this.$element.has(a.target).length||this.$element.trigger("focus")},this))},c.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",a.proxy(function(a){27==a.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},c.prototype.resize=function(){this.isShown?a(window).on("resize.bs.modal",a.proxy(this.handleUpdate,this)):a(window).off("resize.bs.modal")},c.prototype.hideModal=function(){var a=this;this.$element.hide(),this.backdrop(function(){a.$body.removeClass("modal-open"),a.resetAdjustments(),a.resetScrollbar(),a.$element.trigger("hidden.bs.modal")})},c.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},c.prototype.backdrop=function(b){var d=this,e=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var f=a.support.transition&&e;if(this.$backdrop=a(document.createElement("div")).addClass("modal-backdrop "+e).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",a.proxy(function(a){return this.ignoreBackdropClick?void(this.ignoreBackdropClick=!1):void(a.target===a.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide()))},this)),f&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!b)return;f?this.$backdrop.one("bsTransitionEnd",b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):b()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var g=function(){d.removeBackdrop(),b&&b()};a.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):g()}else b&&b()},c.prototype.handleUpdate=function(){this.adjustDialog()},c.prototype.adjustDialog=function(){var a=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&a?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!a?this.scrollbarWidth:""})},c.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},c.prototype.checkScrollbar=function(){var a=window.innerWidth;if(!a){var b=document.documentElement.getBoundingClientRect();a=b.right-Math.abs(b.left)}this.bodyIsOverflowing=document.body.clientWidth<a,this.scrollbarWidth=this.measureScrollbar()},c.prototype.setScrollbar=function(){var a=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"",this.bodyIsOverflowing&&this.$body.css("padding-right",a+this.scrollbarWidth)},c.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad)},c.prototype.measureScrollbar=function(){var a=document.createElement("div");a.className="modal-scrollbar-measure",this.$body.append(a);var b=a.offsetWidth-a.clientWidth;return this.$body[0].removeChild(a),b};var d=a.fn.modal;a.fn.modal=b,a.fn.modal.Constructor=c,a.fn.modal.noConflict=function(){return a.fn.modal=d,this},a(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(c){var d=a(this),e=d.attr("href"),f=a(d.attr("data-target")||e&&e.replace(/.*(?=#[^\s]+$)/,"")),g=f.data("bs.modal")?"toggle":a.extend({remote:!/#/.test(e)&&e},f.data(),d.data());d.is("a")&&c.preventDefault(),f.one("show.bs.modal",function(a){a.isDefaultPrevented()||f.one("hidden.bs.modal",function(){d.is(":visible")&&d.trigger("focus")})}),b.call(f,g,this)})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tooltip"),f="object"==typeof b&&b;!e&&/destroy|hide/.test(b)||(e||d.data("bs.tooltip",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",a,b)};c.VERSION="3.3.7",c.TRANSITION_DURATION=150,c.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},c.prototype.init=function(b,c,d){if(this.enabled=!0,this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.$viewport=this.options.viewport&&a(a.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var e=this.options.trigger.split(" "),f=e.length;f--;){var g=e[f];if("click"==g)this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this));else if("manual"!=g){var h="hover"==g?"mouseenter":"focusin",i="hover"==g?"mouseleave":"focusout";this.$element.on(h+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(i+"."+this.type,this.options.selector,a.proxy(this.leave,this))}}this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.getOptions=function(b){return b=a.extend({},this.getDefaults(),this.$element.data(),b),b.delay&&"number"==typeof b.delay&&(b.delay={show:b.delay,hide:b.delay}),b},c.prototype.getDelegateOptions=function(){var b={},c=this.getDefaults();return this._options&&a.each(this._options,function(a,d){c[a]!=d&&(b[a]=d)}),b},c.prototype.enter=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusin"==b.type?"focus":"hover"]=!0),c.tip().hasClass("in")||"in"==c.hoverState?void(c.hoverState="in"):(clearTimeout(c.timeout),c.hoverState="in",c.options.delay&&c.options.delay.show?void(c.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show)):c.show())},c.prototype.isInStateTrue=function(){for(var a in this.inState)if(this.inState[a])return!0;return!1},c.prototype.leave=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);if(c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusout"==b.type?"focus":"hover"]=!1),!c.isInStateTrue())return clearTimeout(c.timeout),c.hoverState="out",c.options.delay&&c.options.delay.hide?void(c.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide)):c.hide()},c.prototype.show=function(){var b=a.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(b);var d=a.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(b.isDefaultPrevented()||!d)return;var e=this,f=this.tip(),g=this.getUID(this.type);this.setContent(),f.attr("id",g),this.$element.attr("aria-describedby",g),this.options.animation&&f.addClass("fade");var h="function"==typeof this.options.placement?this.options.placement.call(this,f[0],this.$element[0]):this.options.placement,i=/\s?auto?\s?/i,j=i.test(h);j&&(h=h.replace(i,"")||"top"),f.detach().css({top:0,left:0,display:"block"}).addClass(h).data("bs."+this.type,this),this.options.container?f.appendTo(this.options.container):f.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var k=this.getPosition(),l=f[0].offsetWidth,m=f[0].offsetHeight;if(j){var n=h,o=this.getPosition(this.$viewport);h="bottom"==h&&k.bottom+m>o.bottom?"top":"top"==h&&k.top-m<o.top?"bottom":"right"==h&&k.right+l>o.width?"left":"left"==h&&k.left-l<o.left?"right":h,f.removeClass(n).addClass(h)}var p=this.getCalculatedOffset(h,k,l,m);this.applyPlacement(p,h);var q=function(){var a=e.hoverState;e.$element.trigger("shown.bs."+e.type),e.hoverState=null,"out"==a&&e.leave(e)};a.support.transition&&this.$tip.hasClass("fade")?f.one("bsTransitionEnd",q).emulateTransitionEnd(c.TRANSITION_DURATION):q()}},c.prototype.applyPlacement=function(b,c){var d=this.tip(),e=d[0].offsetWidth,f=d[0].offsetHeight,g=parseInt(d.css("margin-top"),10),h=parseInt(d.css("margin-left"),10);isNaN(g)&&(g=0),isNaN(h)&&(h=0),b.top+=g,b.left+=h,a.offset.setOffset(d[0],a.extend({using:function(a){d.css({top:Math.round(a.top),left:Math.round(a.left)})}},b),0),d.addClass("in");var i=d[0].offsetWidth,j=d[0].offsetHeight;"top"==c&&j!=f&&(b.top=b.top+f-j);var k=this.getViewportAdjustedDelta(c,b,i,j);k.left?b.left+=k.left:b.top+=k.top;var l=/top|bottom/.test(c),m=l?2*k.left-e+i:2*k.top-f+j,n=l?"offsetWidth":"offsetHeight";d.offset(b),this.replaceArrow(m,d[0][n],l)},c.prototype.replaceArrow=function(a,b,c){this.arrow().css(c?"left":"top",50*(1-a/b)+"%").css(c?"top":"left","")},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},c.prototype.hide=function(b){function d(){"in"!=e.hoverState&&f.detach(),e.$element&&e.$element.removeAttr("aria-describedby").trigger("hidden.bs."+e.type),b&&b()}var e=this,f=a(this.$tip),g=a.Event("hide.bs."+this.type);if(this.$element.trigger(g),!g.isDefaultPrevented())return f.removeClass("in"),a.support.transition&&f.hasClass("fade")?f.one("bsTransitionEnd",d).emulateTransitionEnd(c.TRANSITION_DURATION):d(),this.hoverState=null,this},c.prototype.fixTitle=function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},c.prototype.hasContent=function(){return this.getTitle()},c.prototype.getPosition=function(b){b=b||this.$element;var c=b[0],d="BODY"==c.tagName,e=c.getBoundingClientRect();null==e.width&&(e=a.extend({},e,{width:e.right-e.left,height:e.bottom-e.top}));var f=window.SVGElement&&c instanceof window.SVGElement,g=d?{top:0,left:0}:f?null:b.offset(),h={scroll:d?document.documentElement.scrollTop||document.body.scrollTop:b.scrollTop()},i=d?{width:a(window).width(),height:a(window).height()}:null;return a.extend({},e,h,i,g)},c.prototype.getCalculatedOffset=function(a,b,c,d){return"bottom"==a?{top:b.top+b.height,left:b.left+b.width/2-c/2}:"top"==a?{top:b.top-d,left:b.left+b.width/2-c/2}:"left"==a?{top:b.top+b.height/2-d/2,left:b.left-c}:{top:b.top+b.height/2-d/2,left:b.left+b.width}},c.prototype.getViewportAdjustedDelta=function(a,b,c,d){var e={top:0,left:0};if(!this.$viewport)return e;var f=this.options.viewport&&this.options.viewport.padding||0,g=this.getPosition(this.$viewport);if(/right|left/.test(a)){var h=b.top-f-g.scroll,i=b.top+f-g.scroll+d;h<g.top?e.top=g.top-h:i>g.top+g.height&&(e.top=g.top+g.height-i)}else{var j=b.left-f,k=b.left+f+c;j<g.left?e.left=g.left-j:k>g.right&&(e.left=g.left+g.width-k)}return e},c.prototype.getTitle=function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||("function"==typeof c.title?c.title.call(b[0]):c.title)},c.prototype.getUID=function(a){do a+=~~(1e6*Math.random());while(document.getElementById(a));return a},c.prototype.tip=function(){if(!this.$tip&&(this.$tip=a(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},c.prototype.enable=function(){this.enabled=!0},c.prototype.disable=function(){this.enabled=!1},c.prototype.toggleEnabled=function(){this.enabled=!this.enabled},c.prototype.toggle=function(b){var c=this;b&&(c=a(b.currentTarget).data("bs."+this.type),c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c))),b?(c.inState.click=!c.inState.click,c.isInStateTrue()?c.enter(c):c.leave(c)):c.tip().hasClass("in")?c.leave(c):c.enter(c)},c.prototype.destroy=function(){var a=this;clearTimeout(this.timeout),this.hide(function(){a.$element.off("."+a.type).removeData("bs."+a.type),a.$tip&&a.$tip.detach(),a.$tip=null,a.$arrow=null,a.$viewport=null,a.$element=null})};var d=a.fn.tooltip;a.fn.tooltip=b,a.fn.tooltip.Constructor=c,a.fn.tooltip.noConflict=function(){return a.fn.tooltip=d,this}}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.popover"),f="object"==typeof b&&b;!e&&/destroy|hide/.test(b)||(e||d.data("bs.popover",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.init("popover",a,b)};if(!a.fn.tooltip)throw new Error("Popover requires tooltip.js");c.VERSION="3.3.7",c.DEFAULTS=a.extend({},a.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),c.prototype=a.extend({},a.fn.tooltip.Constructor.prototype),c.prototype.constructor=c,c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle(),c=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b),a.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof c?"html":"append":"text"](c),a.removeClass("fade top bottom left right in"),a.find(".popover-title").html()||a.find(".popover-title").hide()},c.prototype.hasContent=function(){return this.getTitle()||this.getContent()},c.prototype.getContent=function(){var a=this.$element,b=this.options;return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var d=a.fn.popover;a.fn.popover=b,a.fn.popover.Constructor=c,a.fn.popover.noConflict=function(){return a.fn.popover=d,this}}(jQuery),+function(a){"use strict";function b(c,d){this.$body=a(document.body),this.$scrollElement=a(a(c).is(document.body)?window:c),this.options=a.extend({},b.DEFAULTS,d),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",a.proxy(this.process,this)),this.refresh(),this.process()}function c(c){return this.each(function(){var d=a(this),e=d.data("bs.scrollspy"),f="object"==typeof c&&c;e||d.data("bs.scrollspy",e=new b(this,f)),"string"==typeof c&&e[c]()})}b.VERSION="3.3.7",b.DEFAULTS={offset:10},b.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},b.prototype.refresh=function(){var b=this,c="offset",d=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),a.isWindow(this.$scrollElement[0])||(c="position",d=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var b=a(this),e=b.data("target")||b.attr("href"),f=/^#./.test(e)&&a(e);return f&&f.length&&f.is(":visible")&&[[f[c]().top+d,e]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){b.offsets.push(this[0]),b.targets.push(this[1])})},b.prototype.process=function(){var a,b=this.$scrollElement.scrollTop()+this.options.offset,c=this.getScrollHeight(),d=this.options.offset+c-this.$scrollElement.height(),e=this.offsets,f=this.targets,g=this.activeTarget;if(this.scrollHeight!=c&&this.refresh(),b>=d)return g!=(a=f[f.length-1])&&this.activate(a);if(g&&b<e[0])return this.activeTarget=null,this.clear();for(a=e.length;a--;)g!=f[a]&&b>=e[a]&&(void 0===e[a+1]||b<e[a+1])&&this.activate(f[a])},b.prototype.activate=function(b){this.activeTarget=b,this.clear();var c=this.selector+'[data-target="'+b+'"],'+this.selector+'[href="'+b+'"]',d=a(c).parents("li").addClass("active");d.parent(".dropdown-menu").length&&(d=d.closest("li.dropdown").addClass("active")),d.trigger("activate.bs.scrollspy")},b.prototype.clear=function(){a(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var d=a.fn.scrollspy;a.fn.scrollspy=c,a.fn.scrollspy.Constructor=b,a.fn.scrollspy.noConflict=function(){return a.fn.scrollspy=d,this},a(window).on("load.bs.scrollspy.data-api",function(){a('[data-spy="scroll"]').each(function(){var b=a(this);c.call(b,b.data())})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tab");e||d.data("bs.tab",e=new c(this)),"string"==typeof b&&e[b]()})}var c=function(b){this.element=a(b)};c.VERSION="3.3.7",c.TRANSITION_DURATION=150,c.prototype.show=function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a"),f=a.Event("hide.bs.tab",{relatedTarget:b[0]}),g=a.Event("show.bs.tab",{relatedTarget:e[0]});if(e.trigger(f),b.trigger(g),!g.isDefaultPrevented()&&!f.isDefaultPrevented()){var h=a(d);this.activate(b.closest("li"),c),this.activate(h,h.parent(),function(){e.trigger({type:"hidden.bs.tab",relatedTarget:b[0]}),b.trigger({type:"shown.bs.tab",relatedTarget:e[0]})})}}},c.prototype.activate=function(b,d,e){function f(){g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),h?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu").length&&b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),e&&e()}var g=d.find("> .active"),h=e&&a.support.transition&&(g.length&&g.hasClass("fade")||!!d.find("> .fade").length);g.length&&h?g.one("bsTransitionEnd",f).emulateTransitionEnd(c.TRANSITION_DURATION):f(),g.removeClass("in")};var d=a.fn.tab;a.fn.tab=b,a.fn.tab.Constructor=c,a.fn.tab.noConflict=function(){return a.fn.tab=d,this};var e=function(c){c.preventDefault(),b.call(a(this),"show")};a(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',e).on("click.bs.tab.data-api",'[data-toggle="pill"]',e)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.affix"),f="object"==typeof b&&b;e||d.data("bs.affix",e=new c(this,f)),"string"==typeof b&&e[b]()})}var c=function(b,d){this.options=a.extend({},c.DEFAULTS,d),this.$target=a(this.options.target).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(b),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};c.VERSION="3.3.7",c.RESET="affix affix-top affix-bottom",c.DEFAULTS={offset:0,target:window},c.prototype.getState=function(a,b,c,d){var e=this.$target.scrollTop(),f=this.$element.offset(),g=this.$target.height();if(null!=c&&"top"==this.affixed)return e<c&&"top";if("bottom"==this.affixed)return null!=c?!(e+this.unpin<=f.top)&&"bottom":!(e+g<=a-d)&&"bottom";var h=null==this.affixed,i=h?e:f.top,j=h?g:b;return null!=c&&e<=c?"top":null!=d&&i+j>=a-d&&"bottom"},c.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(c.RESET).addClass("affix");var a=this.$target.scrollTop(),b=this.$element.offset();return this.pinnedOffset=b.top-a},c.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},c.prototype.checkPosition=function(){if(this.$element.is(":visible")){var b=this.$element.height(),d=this.options.offset,e=d.top,f=d.bottom,g=Math.max(a(document).height(),a(document.body).height());"object"!=typeof d&&(f=e=d),"function"==typeof e&&(e=d.top(this.$element)),"function"==typeof f&&(f=d.bottom(this.$element));var h=this.getState(g,b,e,f);if(this.affixed!=h){null!=this.unpin&&this.$element.css("top","");var i="affix"+(h?"-"+h:""),j=a.Event(i+".bs.affix");if(this.$element.trigger(j),j.isDefaultPrevented())return;this.affixed=h,this.unpin="bottom"==h?this.getPinnedOffset():null,this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix","affixed")+".bs.affix")}"bottom"==h&&this.$element.offset({top:g-b-f})}};var d=a.fn.affix;a.fn.affix=b,a.fn.affix.Constructor=c,a.fn.affix.noConflict=function(){return a.fn.affix=d,this},a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var c=a(this),d=c.data();d.offset=d.offset||{},null!=d.offsetBottom&&(d.offset.bottom=d.offsetBottom),null!=d.offsetTop&&(d.offset.top=d.offsetTop),b.call(c,d)})})}(jQuery);$(document).ready(function(){$(".collapse.in").each(function(){$(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");});$(".collapse").on('show.bs.collapse',function(){$(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");}).on('hide.bs.collapse',function(){$(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");});$('.resp-prettyprint').each(function(){var ctx=$(this);var html=ctx.html();ctx.html("");html=html.replaceAll('\\n','');html=html.replaceAll('\\t','');html=html.replaceAll('\\','');html=html.trim();if(html.charAt(0)==='"'){html=html.substr(1);html=html.slice(0,-1);}
if(IsJsonString(html)){var obj=JSON.parse(html);var formattedJson=JSON.stringify(obj,null,4);ctx.html("<pre>"+syntaxHighlight(formattedJson)+"</pre>");}else{ctx.html("<pre>"+escapeHtml(html)+"</pre>");}});$(".resp-selector").change(function(){$(this).find("option").map(function(){$("#"+this.value).hide()});var $option=$(this).find('option:selected');$("#"+$option.val()).show()});$('[data-toggle="tooltip"]').tooltip();});function escapeHtml(text){var map={'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'};return text.replace(/[&<>"']/g,function(m){return map[m];});}
function IsJsonString(str){try{JSON.parse(str);}catch(e){return false;}
return true;}
String.prototype.replaceAll=function(replaceThis,withThis){var re=new RegExp(RegExp.quote(replaceThis),"g");return this.replace(re,withThis);};RegExp.quote=function(str){return str.replace(/([.?*+^$[\]\\(){}-])/g,"\\$1");};function syntaxHighlight(json){json=json.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g,function(match){var cls='number';if(/^"/.test(match)){if(/:$/.test(match)){cls='key';}else{cls='string';}}else if(/true|false/.test(match)){cls='boolean';}else if(/null/.test(match)){cls='null';}
return '<span class="'+cls+'">'+match+'</span>';});}</script><br><br></div><link href="/public/static/css/api.css" rel="stylesheet"><script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('#btnMenu').onclick = function() {
                toggleMenu();
            }
            const links = document.querySelectorAll('.mainMenu a');
            for (const link of links) {
                link.onclick = function() {
                    toggleMenu();
                }
            }

            $('.resp-selector').off('change');
            $('.resp-selector').on('change',function(){
                let value = $(this).val();
                $(this).parent().find('section').css('display', 'none');
                $('#'+value).css('display', 'block');
            });
        }, false);

        function toggleMenu() {
            if(!document.querySelector('body').classList.contains('openMenu')) {
                document.querySelector('body').classList.add('openMenu');
            } else {
                document.querySelector('body').classList.remove('openMenu');
            }
        }
    </script>
        <script type="text/javascript">
            (function (p,o,s,t,m,a,n) {
            !p[s] && (p[s] = function () { (p[t] || (p[t] = [])).push(arguments); });
            !o.getElementById(s+t) && o.getElementsByTagName("head")[0].appendChild((
                (n = o.createElement("script")),
                (n.id = s+t), (n.async = 1), (n.src = m), n
            ));
            }(window, document, "_pm", "PostmanRunObject", "https://run.pstmn.io/button.js"));
        </script>
    		</section>
	</div>
							
					
</div>
		<div id="es_spinner" style="display:none;">
			<div class="spinner"></div>
		</div>
						
			<script src="/public/static/js/cem.js"></script>
			<script src="/public/build/runtime.518d4a5c.js"></script><script src="/public/build/npm.webpack.847fa39a.js"></script>
			<script src="/public/build/npm.core-js.8ce799e4.js"></script><script src="/public/build/npm.jquery.d045a507.js"></script>
			<script src="/public/build/npm.fortawesome.6d41236a.js"></script><script src="/public/build/npm.bootstrap.9f279d22.js"></script>
			<script src="/public/build/npm.popper.js.2bd0e96d.js"></script>
			<script src="/public/build/npm.setimmediate.53c7066e.js"></script>
			<script src="/public/build/npm.process.6e56d31d.js"></script>
			<script src="/public/build/npm.timers-browserify.d005e066.js"></script>
			<script src="/public/build/npm.google-libphonenumber.eada93e4.js"></script>
			<script src="/public/build/2.4363f070.js"></script>
			

			<script src="/public/static/js/jquery.cookie.min.js"></script>
			<script async src="https://js.convertflow.co/production/websites/3696.js"></script>
			<script src="/public/build/branding.eaaedb6f.js"></script>
		
	<script src="/public/build/api.e06fd8fe.js"></script>
	</body>
</html>

