<table>
  <tbody>
    <tr>
      <th>Customer:</th>
      <td><?php echo $customer->getCustomerId() ?></td>
    </tr>
    <tr>
      <th>Reg date:</th>
      <td><?php echo $customer->getRegDate() ?></td>
    </tr>
    <tr>
      <th>Person code:</th>
      <td><?php echo $customer->getPersonCode() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $customer->getName() ?></td>
    </tr>
    <tr>
      <th>Sur name:</th>
      <td><?php echo $customer->getSurName() ?></td>
    </tr>
    <tr>
      <th>Mobile:</th>
      <td><?php echo $customer->getMobile() ?></td>
    </tr>
    <tr>
      <th>Zone:</th>
      <td><?php echo $customer->getZoneId() ?></td>
    </tr>
    <tr>
      <th>Area:</th>
      <td><?php echo $customer->getAreaId() ?></td>
    </tr>
    <tr>
      <th>Reg expiry:</th>
      <td><?php echo $customer->getRegExpiry() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $customer->getAddress() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('customer/edit?customer_id='.$customer->getCustomerId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('customer/index') ?>">List</a>
