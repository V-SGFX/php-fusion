<?php
defined('IN_FUSION') or die();

function render_forum($info) {
?>
<div class="card mb-3">
    <div class="card-header">
        <h2 class="h4"><?php echo $info['thread_subject']; ?></h2>
    </div>
    <div class="card-body">
        <p class="text-muted">
            Autor: <?php echo $info['thread_author_name']; ?> |
            Data: <?php echo showdate('forumdate', $info['thread_lastpost']); ?>
        </p>
        <div class="forum-content">
            <?php echo nl2br($info['thread_message']); ?>
        </div>
    </div>
</div>
<?php
}
