<h1>Areass List</h1>

<table>
  <thead>
    <tr>
      <th>Area</th>
      <th>Area code</th>
      <th>Area name</th>
      <th>Zone</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($areass as $areas): ?>
    <tr>
      <td><a href="<?php echo url_for('areas/show?area_id='.$areas->getAreaId()) ?>"><?php echo $areas->getAreaId() ?></a></td>
      <td><?php echo $areas->getAreaCode() ?></td>
      <td><?php echo $areas->getAreaName() ?></td>
      <td><?php echo $areas->getZoneId() ?></td>
      <td><?php echo $areas->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('areas/new') ?>">New</a>
