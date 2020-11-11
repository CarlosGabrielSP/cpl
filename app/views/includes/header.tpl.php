<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<title>CPL</title>
</head>
<body>
	<main class="grid">
		<div class="row no-gap">
			<!-- <div class="cell">
				<nav class="barra-superior">
					<ul class="fg-white h-menu">
					    <li><a href="/"><strong>Home</strong></a></li>
					    <li><a href="#">Links</a></li>
					</ul>
				</nav>
			</div> -->
		</div>
		<div class="row no-gap">
			<div class="cell-2">
				<section class="barra-lateral">
					<div class="pesquisa">
						<form action="index.html"><input type="text" data-role="input" name="pesquisa" data-clear-button="false" data-search-button="true"></form>
					</div>
					<ul class="v-menu">
						<li class="menu-title">Principal</li>
					    <li class="fg-white"><a href="/index"><span class="mif-home icon"></span> Início</a></li>
						<li class="menu-title">Recursos</li>
						<li class="fg-white"><a href="/recursos/links"><span class="mif-new-tab icon"></span> Links</a></li>
						<li class="menu-title">Outros Links</li>
					    <li class="bg-green-hover fg-white"><a href="http://nie-tcmpa.droppages.com/painel-covid"><span class="mif-ambulance icon"></span> COVID-19</a></li>
						<li class="menu-title">Opções</li>
						<li class="fg-white">
							<ul class="lista-sub-menu border">
								<?php if(isset($opcoes)) include $opcoes; ?>
							</ul>
						</li>
					</ul>
				</section>
			</div>
			<div class="cell-10">
				<section class="conteudo">
					<!-- <h1>Comissão Permanente de Licitação</h1> -->

					