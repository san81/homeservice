<div class="ussTableHeader" >
	<h1>Zoness List</h1>
</div>

<table class="borderboxWithData">
  <thead class="tbheader">
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
      <td class="rowWord"><a href="<?php echo url_for('zones/show?zone_id='.$zones->getZoneId()) ?>"><?php echo $zones->getZoneId() ?></a></td>
      <td class="rowWord"><?php echo $zones->getZoneCode() ?></td>
      <td class="rowWord"><?php echo $zones->getZoneName() ?></td>
      <td class="rowWord"><?php echo $zones->getCityId() ?></td>
      <td class="rowWord"><?php echo $zones->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="ussTableHeader" >
	<a href="<?php echo url_for('zones/new') ?>">New</a>
</div>
