<?php /* @var $this Controller */ ?>
<title>Админка <?php echo Setting::getData('sitename'); ?></title>

<?php $this->beginContent('//layouts/main'); ?>
	<nav class="navbar <?php echo Setting::getData('navbar_position'); ?> <?php echo Setting::getData('navbar_theme'); ?>">
		<div class="container">
		    <div class="container-fluid">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand"  href="<?php echo Yii::app()->createUrl('/site/index'); ?>"><?php echo Setting::getData('sitename'); ?></a>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Быстрый переход <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo Yii::app()->createUrl('/site/admin') ?>">Админка</a></li>
								<li><a href="<?php echo Yii::app()->createUrl('/site/seo') ?>">Seo данные</a></li>
			                    <?php foreach (Block::getAll() as $block): ?>
			                        <li><a href="<?php echo Yii::app()->createUrl('/block/view/'.$block->id) ?>">Блок: <?php echo $block->name ?></a></li>
			                    <?php endforeach;?>
								<li><a href="<?php echo Yii::app()->createUrl('/block/create') ?>">Создать блок</a></li>
								<li><a href="<?php echo Yii::app()->createUrl('/setting/index') ?>">Настройки сайта</a></li>
							</ul>
						</li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
	    				<li><a href="<?php echo Yii::app()->createUrl('/site/admin/'); ?>">Админка</a></li>
	                    <li><a href="<?php echo Yii::app()->createUrl('/site/index'); ?>">Сайт</a></li>
	                    <li><a href="<?php echo Yii::app()->createUrl('/site/logout'); ?>">Выйти</a></li>
		            </ul>
		        </div><!-- /.navbar-collapse -->
		    </div><!-- /.container-fluid -->
		</div>
	</nav>
	<div class="container">
		<?php echo $content; ?>
	</div>
<?php $this->endContent(); ?>
