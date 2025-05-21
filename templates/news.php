<?php
defined('IN_FUSION') or die();

function render_news($subject, $news, $info) {
?>
<div class="card mb-3">
    <div class="card-header">
        <h2 class="h4"><?php echo $subject; ?></h2>
    </div>
    <div class="card-body">
        <p class="text-muted">
            Autor: <?php echo $info['user_name']; ?> |
            Data: <?php echo showdate('newsdate', $info['news_date']); ?>
        </p>
        <div class="news-content">
            <?php echo nl2br($news); ?>
        </div>
    </div>
</div>
<?php
}
