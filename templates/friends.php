<h2>友だちリスト</h2>
<div class="row panel panel-primary" id="friends">
  <dl>
    <?php foreach ($friends as $user_id => $created_at) { ?>
    <?php $friend_info = get_user($user_id) ?>
    <dt class="friend-date"><?php h($created_at) ?></dt><dd class="friend-friend"><a href="/profile/<?php h($friend_info['account_name']) ?>"><?php h($friend_info['nick_name']) ?></a></dd>
    <?php } ?>
  </dl>
</div>
