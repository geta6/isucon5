<h2>友だちリスト</h2>
<div class="row panel panel-primary" id="friends">
  <dl>
    <?php $i =0 ?>
    <?php foreach ($friends as $friend) { ?>
    <dt class="friend-date"><?php h($friend['created_at']) ?></dt><dd class="friend-friend"><a href="/profile/<?php h($friend['account_name']) ?>"><?php h($friend['nick_name']) ?></a></dd>
    <?php $i++ ?>
    <?php } ?>
  </dl>
</div>
