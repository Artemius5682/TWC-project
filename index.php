<?php
	if ($_COOKIE['admin'] == '' &&  $_COOKIE['rso'] == '' && $_COOKIE['dispacher'] == '' && $_COOKIE['observer'] == ''){
     header("Location:registration.php");
     exit();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tula Web Cup Progger - train</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container main-container">
	<a href="exit.php"><div class="btn btn-success">Выйти из аккаунта</div></a>
	<h3 class="text-center">Панель управления и контроля инцидентов, происходящих в ведении РСО.</h3>
	<div class="row">
		<div class="col-md-4">
			<div class="block-relations">
			<h4>Связи</h4>
			 <?php if ($_COOKIE['admin'] != '' || $_COOKIE['rso'] != '' || $_COOKIE['observer'] != ''): ?>
			<button type="button" class="btn btn-primary btn-modal-2">Добавить связь</button>
			<div class="modal-window-2">
				<form class="form-insert-relations" action="insert-relations.php" method="post">
					<input placeholder="Идентификатор адреса:" class="form-control" type="text" name="addres_impact">
					<input placeholder="Название" class="form-control" type="text" name="type">
					<input placeholder="Параметры объекта" class="form-control" type="text" name="parametrs">
					<input placeholder="Жалобы жильцов?" class="form-control" type="text" name="other_relations">
					<input class="btn btn-success" value="Добавить" type="submit">
				</form>
			</div>
			 <?php endif; ?>
			<?include"modules/relations.php";?>
		    </div>
		</div>
		<div class="col-md-4">
			<div class="block-incidents">
			<h4>Инциденты</h4>
			<button type="button" class="btn btn-primary btn-modal">Добавить инцидент</button>
			<div class="modal-window">
				<form class="form-insert-incident" action="insert-incident.php" method="post">
					<input placeholder="Идентификатор случая:" class="form-control" type="text" name="type_objective">
					<input placeholder="Формат (2020-10-06)" class="form-control" type="text" name="date_begin">
					<input placeholder="Формат (2020-10-08)" class="form-control" type="text" name="date_end">
					<input placeholder="Вид" class="form-control" type="text" name="view">
					<input placeholder="Что планируется сделать?" class="form-control" type="text" name="additional_info">
					<input placeholder="Срочность задания?" class="form-control" type="text" name="other">
					<input class="btn btn-success" value="Добавить" type="submit">
				</form>
			</div>
			<? include"modules/incidents.php";?>
		    </div>
		</div>
		<div class="col-md-4">
			<div class="block-informations">
			<h4>Отчётность</h4>
			<div>Не успел сделать (</div>
			<img src="cat.jpg">
		</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
     $('.btn-modal').click(function(){
     	$('.modal-window').toggle(200);
     })
     $('.btn-modal-2').click(function(){
     	$('.modal-window-2').toggle(200);
     })
	});
</script>
</body>
</html>