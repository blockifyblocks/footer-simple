<?php $block->open('footer');

$block->document->tag('span', 'name');
?>
    <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
        <ul>
            <?php
            $block->document->each('@list', function ($prop, $item) use ($block) {
                $item->open('li');
                $isButton = $item['@type'] === 'Thing/Button';
                $class = $isButton ? 'btn-default' : 'btn-link';
                ?>
                <a class="btn <?= $class; ?>" href="<?= $item['url']; ?>" itemprop="url"><?= $item['name']; ?></a>
                <?php
                $item->close();
            }); ?>
        </ul>
    </nav>
<?php $block->close(); ?>
