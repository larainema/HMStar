<div id="hmstar-hearder"></div>
<div class="hmstar-category">
  <div class="hmstar-category-header">
    <span>分类浏览</span>
  </div>
    <?php if (!empty($pcs1)) { ?>
    <div class="hmstar-category-body">
      <table class="table">
        <tbody>
          <tr>
            <?php foreach ($pcs1 as $item):?>
            <td><a href="$item->projectCategoryId"><?php echo $item->projectCategoryName;?></a></td>
            <?php endforeach;?>
          </tr>
          <tr>
            <?php foreach ($pcs2 as $item):?>
            <td><a href="$item->projectCategoryId"><?php echo $item->projectCategoryName;?></a></td>
            <?php endforeach;?>
          </tr>
          <tr>
            <?php foreach ($pcs3 as $item):?>
            <td><a href="$item->projectCategoryId"><?php echo $item->projectCategoryName;?></a></td>
            <?php endforeach;?>
          </tr>
          <tr>
            <?php foreach ($pcs4 as $item):?>
            <td><a href="$item->projectCategoryId"><?php echo $item->projectCategoryName;?></a></td>
            <?php endforeach;?>
          </tr>
        </tbody>
      </table>
    </div>
    <?php } ?>
</div>
