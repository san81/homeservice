<table>
  <tbody>
    <tr>
      <th>Zone:</th>
      <td><?php echo $zones->getZoneId() ?></td>
    </tr>
    <tr>
      <th>Zone code:</th>
      <td><?php echo $zones->getZoneCode() ?></td>
    </tr>
    <tr>
      <th>Zone name:</th>
      <td><?php echo $zones->getZoneName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $zones->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('zones/edit?zone_id='.$zones->getZoneId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('zones/index') ?>">List</a>
