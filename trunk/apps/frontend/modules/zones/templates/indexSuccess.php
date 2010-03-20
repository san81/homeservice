<h1>Zoness List</h1>

<table>
  <thead>
    <tr>
      <th>Zone</th>
      <th>Zone code</th>
      <th>Zone name</th>
      <th>City</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($zoness as $zones): ?>
    <tr>
      <td><a href="<?php echo url_for('zones/show?zone_id='.$zones->getZoneId()) ?>"><?php echo $zones->getZoneId() ?></a></td>
      <td><?php echo $zones->getZoneCode() ?></td>
      <td><?php echo $zones->getZoneName() ?></td>
      <td><?php echo $zones->getCityId() ?></td>
      <td><?php echo $zones->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('zones/new') ?>">New</a>
