<?
$this->breadcrumbs=array(
    'Search'
);
?>
<div class="container">
    <div class="git-wrap">
        <h4 class="git-search-query">For search term "<?= $query; ?>" found:</h4>
        <? foreach($result['repositories'] as $item): ?>
        <div class="item-wrap">
            <p class="row-1">
                <span>
                    <a href="/git/index/<?= $item['owner'].'/'.$item['name']; ?>"><?= $item['name']; ?></a>
                </span>
                <span>
                    <a href="<?= $item['homepage']; ?>"><?= $item['homepage']; ?></a>
                </span>
                <span>
                    <a href="/git/user/<?= $item['owner']; ?>"><?= $item['owner']; ?></a>
                </span>
            </p>
            <p class="row-2"><?= $item['description']; ?></p>
            <p class="row-3">
                <span>Watchers: <?= $item['watchers']; ?></span>
                <span>Forks: <?= $item['forks']; ?></span>
                <? if(empty($item['model'])): ?>
                    <button class="prj btn pull-right git-btn" id="<?= $item['owner'].'_'.$item['name'];?>">Like</button>
                <? else: ?>
                    <button class="prj btn pull-right git-btn" id="<?= $item['owner'].'_'.$item['name'];?>">Unlike</button>
                <? endif; ?>

            </p>
        </div>
        <? endforeach; ?>
    </div>
</div>