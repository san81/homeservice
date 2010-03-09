<h1>Itemss List</h1>

<table>
  <thead>
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
      <td><a href="<?php echo url_for('items/show?item_id='.$items->getItemId()) ?>"><?php echo $items->getItemId() ?></a></td>
      <td><?php echo $items->getItemName() ?></td>
      <td><?php echo $items->getItemPrice() ?></td>
      <td><?php echo $items->getCategoryId() ?></td>
      <td><?php echo $items->getItemDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('items/new') ?>">New</a>
