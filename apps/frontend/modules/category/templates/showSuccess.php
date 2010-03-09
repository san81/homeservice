<table>
  <tbody>
    <tr>
      <th>Category:</th>
      <td><?php echo $category->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Category name:</th>
      <td><?php echo $category->getCategoryName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $category->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('category/edit?category_id='.$category->getCategoryId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('category/index') ?>">List</a>
