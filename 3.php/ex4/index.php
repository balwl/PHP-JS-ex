<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <?php 
        $dirname = "images";
        $images = glob($dirname."/*.{png,gif,jpg,PNG,GIF,JPG}", GLOB_BRACE);
		$result = filter_input(INPUT_GET, 'result');  
    ?>
    
</head>
<body>
	<main>
		<section class="images">
			<h1>Фотогалерея: </h1>
			<?php foreach ($images as $image) : ?>                     
				<img src="<?php echo $image;  ?>">                        
			<?php endforeach; ?>
		</section>		
		<form method="post" action="upload.php" enctype="multipart/form-data">        
			<p>
				<input type="file" name="img">
			</p>
			<p>
				<button type="submit">Загрузить</button>
			</p>
		</form>
		<p class="result">
			<?php if ($result === 'success') :  ?>
				Изображение успешно добавлено.
			<?php elseif ($result === 'err_exists') : ?>
				Изображение с таким именем уже существует.
			<?php elseif ($result === 'err_upload') : ?>
				Не удалось загрузить.
			<?php elseif ($result === 'err_notimg') : ?>
				Разрешена загрузка только изображений.
			<?php endif; ?>
		</p>
	</main>
</body>
</html>