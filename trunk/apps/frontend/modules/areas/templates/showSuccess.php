<table>
  <tbody>
    <tr>
      <th>Area:</th>
      <td><?php echo $areas->getAreaId() ?></td>
    </tr>
    <tr>
      <th>Area code:</th>
      <td><?php echo $areas->getAreaCode() ?></td>
    </tr>
    <tr>
      <th>Area name:</th>
      <td><?php echo $areas->getAreaName() ?></td>
    </tr>
    <tr>
      <th>Zone:</th>
      <td><?php echo $areas->getZoneId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $areas->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('areas/edit?area_id='.$areas->getAreaId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('areas/index') ?>">List</a>
