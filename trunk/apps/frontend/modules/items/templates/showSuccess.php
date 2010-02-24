<table>
  <tbody>
    <tr>
      <th>Item:</th>
      <td><?php echo $items->getItemId() ?></td>
    </tr>
    <tr>
      <th>Item name:</th>
      <td><?php echo $items->getItemName() ?></td>
    </tr>
    <tr>
      <th>Item price:</th>
      <td><?php echo $items->getItemPrice() ?></td>
    </tr>
    <tr>
      <th>Item description:</th>
      <td><?php echo $items->getItemDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('items/edit?item_id='.$items->getItemId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('items/index') ?>">List</a>
