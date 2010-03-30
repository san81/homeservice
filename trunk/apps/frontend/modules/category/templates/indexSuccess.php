<div class="ussTableHeader" >
	<h1>Categorys List</h1>
</div>

<table class="borderboxWithData">
  <thead class="tbheader">
    <tr>
      <th>Category</th>
      <th>Category name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categorys as $category): ?>
    <tr>
      <td class="rowWord"><a href="<?php echo url_for('category/show?category_id='.$category->getCategoryId()) ?>"><?php echo $category->getCategoryId() ?></a></td>
      <td class="rowWord"><?php echo $category->getCategoryName() ?></td>
      <td class="rowWord"><?php echo $category->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

 
<div class="ussTableHeader" >
  <a href="<?php echo url_for('category/new') ?>">New</a>
</div>