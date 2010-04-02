<div class="ussTableHeader" >
	<h1>Itemss List</h1>
</div>

<table class="borderboxWithData">
  <thead class="tbheader">
    <tr>
      <th>Item</th>
      <th>Item name</th>
      <th>Item price</th>
      <th>Category</th>
      <th>Item description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($itemss as $items): ?>
    <tr>
      <td class="rowWord"><a href="<?php echo url_for('items/show?item_id='.$items->getItemId()) ?>"><?php echo $items->getItemId() ?></a></td>
      <td class="rowWord"><?php echo $items->getItemName() ?></td>
      <td class="rowWord"><?php echo $items->getItemPrice() ?></td>
      <td class="rowWord"><?php echo $items->getCategory()->getCategoryName() ?></td>
      <td class="rowWord"><?php echo $items->getItemDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

 <div class="ussTableHeader" >
 <a href="<?php echo url_for('items/new') ?>">New</a>
</div>
