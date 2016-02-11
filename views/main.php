<?php
include "header.php";
$db=DBModel::getDB();
?>
<ul>
    <?php foreach($this->data as $allNews):?>
    <li>
        <p><?=$allNews['title']?></p>
          <hr>
        <p><?=$allNews['text']?></p>
        <p><a href=<?=$allNews['link']?>>Ссылка</a></p>
        <div class="divider"></div>
    </li>
<?php endforeach; ?>
</ul>
<?php
include "footer.php"
?>
