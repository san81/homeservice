<h1>Categorys List</h1>

<table>
  <thead>
    <tr>
      <th>Category</th>
      <th>Category name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categorys as $category): ?>
    <tr>
      <td><a href="<?php echo url_for('category/show?category_id='.$category->getCategoryId()) ?>"><?php echo $category->getCategoryId() ?></a></td>
      <td><?php echo $category->getCategoryName() ?></td>
      <td><?php echo $category->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('category/new') ?>">New</a>
