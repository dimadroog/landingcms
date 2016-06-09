<?php foreach ($blocks as $key => $item): ?>  
    <?php if ($item->publish == 1):?>
        <div id="<?php echo $item->alias.$item->id ?>">
            <div class="block-content <?php echo $item->animate ?>" style="<?php echo Block::buildStyle($item->id, $key); ?>">
                    <div class="container">
                        <?php $this->widget('application.extensions.blockwidget.BlockWidget', array('item' => $item)); ?>
                    </div>
            </div>
        </div>
	<?php endif; ?>
<?php endforeach; ?>
