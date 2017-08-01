<?php if (isset($this->items) && count($this->items) >= 1) : ?>
                    <?php foreach ($this->items as $item): ?>
                        <?php
                        $url = JRoute::_("index.php?option=com_exams&view=stucategory&catid=".$item->catid);
                        ?>
                        <a href="<?php echo $url; ?>">
                            <img src="<?php echo $item->icon;?>" alt="">
                            <p><?php echo $item->title; ?></p>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if (isset($this->cates) && count($this->cates) >= 1) : ?>
                    <?php foreach ($this->cates as $cate): ?>
                        <?php
                        $url = JRoute::_("index.php?option=com_exams&view=stucategory&catid=".$cate->catid);
                        ?>
                        <a href="<?php echo $url; ?>">
                            <img src="/components/com_exams/assets/cate-img/icon1.png" alt="">
                            <p><?php echo $cate->title; ?></p>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if (isset($this->cates) && isset($this->items) && count($this->cates) == 0 && count($this->cates) == 0) : ?>
                    <div class="alert alert-danger" role="alert" style="background-color: #fff;border: none;color: #8c8585;font-size: 15px;">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        <?php echo JText::_("COM_EXAMS_NO_CATE"); ?>
                    </div>
                <?php endif; ?>