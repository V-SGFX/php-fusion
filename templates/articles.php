<?php
defined('IN_FUSION') or die();

function render_article($subject, $article, $info) {
?>
<div class="card mb-3">
    <div class="card-header">
        <h2 class="h4"><?php echo $subject; ?></h2>
    </div>
    <div class="card-body">
        <p class="text-muted">
            Autor: <?php echo $info['user_name']; ?> |
            Data: <?php echo showdate('longdate', $info['article_date']); ?>
        </p>
        <div class="article-content">
            <?php echo nl2br($article); ?>
        </div>
    </div>
</div>
<?php
}
