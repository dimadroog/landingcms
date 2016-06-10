<h1>Управление сайтом</h1>
<p><a href="<?php echo Yii::app()->createUrl('/block/create/'); ?>">Создать новый блок</a></p>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6"> 
                <p><a href="<?php echo Yii::app()->createUrl('/site/seo/'); ?>">SEO данные</a></p>
                <p class="text-muted">title, description, keywords</p>
            </div>
            <div class="col-sm-6 text-right">  
                <a class="btn btn-xs btn-primary" href="<?php echo Yii::app()->createUrl('/site/seo/'); ?>">Просмотреть</a>
                <a class="btn btn-xs btn-warning" href="<?php echo Yii::app()->createUrl('/site/seoedit/'); ?>">Редактировать</a>
            </div>
        </div>
    </div>
</div>
<?php foreach ($blocks as $block): ?>  
    <div class="panel panel-default item">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">  
                    <p>Блок: <a href="<?php echo Yii::app()->createUrl('/block/view/'.$block->id); ?>"><?php echo $block->name; ?></a></p>
                    <p class="text-muted">Опубликован: <?php echo ($block->publish == 1)?'<span class="label label-success">Да</span>':'<span class="label label-danger">Нет</span>'; ?></p>
                    <p class="text-muted">Порядок: <?php echo $block->weight; ?></p>
                </div>
                <div class="col-sm-6 text-right">  
                    <a class="btn btn-xs btn-primary" href="<?php echo Yii::app()->createUrl('/block/view/'.$block->id); ?>">Просмотреть</a>
                    <a class="btn btn-xs btn-warning" href="<?php echo Yii::app()->createUrl('/block/edit/'.$block->id); ?>">Редактировать</a>
                    <?php if ($block->alias == 'plain'): ?>
                        <a class="btn btn-xs btn-danger" onclick="ItemDelete(this, '<?php echo get_class($block); ?>', <?php echo $block->id; ?>, '<?php echo Yii::app()->createUrl('/block/itemdelete/'); ?>')">Удалить</a>
                    <?php endif; ?>

                    <!-- book or contact csv  -->
                    <?php if ($block->alias == 'book' || $block->alias == 'contact' ): ?>
                        <a class="btn btn-xs btn-success" href="<?php echo Yii::app()->request->baseUrl; ?>/images/contacts.csv" target="_blank">contacts.csv</a>
                    <?php endif; ?>

                    
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6"> 
                <h4><a href="<?php echo Yii::app()->createUrl('/setting/index'); ?>">Настройки сайта</a></h4>
                <p class="text-muted">Настройки сайта</p>
            </div>
            <div class="col-sm-6 text-right">  
                <a class="btn btn-xs btn-primary" href="<?php echo Yii::app()->createUrl('/setting/index/'); ?>">Просмотреть</a>
                <a class="btn btn-xs btn-warning" href="<?php echo Yii::app()->createUrl('/setting/edit/'); ?>">Редактировать</a>
            </div>
        </div>
    </div>
</div>
