<?php header("X-XSS-Protection: 0"); ?>
<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
	<head>
	    <title><?php echo Setting::getData('seo_title'); ?></title>
	    <meta name="description" content="<?php echo Setting::getData('seo_description'); ?>">
	    <meta name="keywords" content="<?php echo Setting::getData('seo_keywords'); ?>">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon">
	    <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon">

        <!-- animate -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/animate.css" rel="stylesheet">
	    <!-- crop -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/crop/css/jquery.Jcrop.css" rel="stylesheet">
	    <!-- Bootstrap Core CSS -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/bootstrap/css/<?php echo Setting::getData('bootstrap_theme'); ?>.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/style.css" rel="stylesheet">
	    <!-- colorpicker -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
	    <!-- Fonts -->
	    <!-- <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'> -->
	    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		
		<!-- jQuery -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/jquery-1.11.1.min.js"></script>
		
	</head>
    <body id="page-top" class="index" data-spy="scroll" data-target=".<?php echo Setting::getData('navbar_position'); ?>">
    	<a href="#" class="scrollup">Наверх</a> 



		<?php echo $content; ?>



 </body>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/bootstrap/js/bootstrap.min.js"></script>
	    <!-- my script -->
        <!-- wysiwyg -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/wysiwyg/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
		    jQuery( window ).load(function() { //it must be before all document.ready functions
			    if (jQuery("textarea").is("[name='wysiwyg']")) {
			        CKEDITOR.replace('wysiwyg',{
			            'filebrowserBrowseUrl':'<?php echo Yii::app()->request->baseUrl; ?>/static/wysiwyg/kcfinder/browse.php?type=files',
			            'filebrowserImageBrowseUrl':'<?php echo Yii::app()->request->baseUrl; ?>/static/wysiwyg/kcfinder/browse.php?type=images',
			            'filebrowserFlashBrowseUrl':'<?php echo Yii::app()->request->baseUrl; ?>/static/wysiwyg/kcfinder/browse.php?type=flash',
			            'filebrowserUploadUrl':'<?php echo Yii::app()->request->baseUrl; ?>/static/wysiwyg/kcfinder/upload.php?type=files',
			            'filebrowserImageUploadUrl':'<?php echo Yii::app()->request->baseUrl; ?>/static/wysiwyg/kcfinder/upload.php?type=images',
			            'filebrowserFlashUploadUrl':'<?php echo Yii::app()->request->baseUrl; ?>/static/wysiwyg/kcfinder/upload.php?type=flash'
			        });
			    }
			});
        </script>

	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/script.js"></script>
        <!-- wow -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/wow.min.js"></script>
        <script type="text/javascript">
            wow = new WOW({
        		mobile: false
            });
            wow.init();
        </script>
        <!-- crop -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/crop/js/jquery.Jcrop.js"></script> 
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/crop/js/script.js"></script>
        <!-- colorpicker -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/static/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	</body>
</html>