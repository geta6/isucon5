<h2>友だちリスト</h2>
<div class="row panel panel-primary" id="friends">
  <dl>
    <?php $i = 0 ?>
    <?php foreach ($friends as $user_id => $created_at) { ?>
    <dt class="friend-date"><?php h($created_at) ?></dt><dd class="friend-friend"><a href="/profile/<?php h($friend['account_name']) ?>"><?php h($nick_names[$i]) ?></a></dd>
    <?php $i++ ?>
    <?php } ?>
  </dl>
</div>
