<table>
  <tbody>
    <tr>
      <th>City:</th>
      <td><?php echo $city->getCityId() ?></td>
    </tr>
    <tr>
      <th>City name:</th>
      <td><?php echo $city->getCityName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $city->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('city/edit?city_id='.$city->getCityId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('city/index') ?>">List</a>
