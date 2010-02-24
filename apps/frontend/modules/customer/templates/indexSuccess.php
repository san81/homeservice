<h1>Customers List</h1>

<table>
  <thead>
    <tr>
      <th>Customer</th>
      <th>Reg date</th>
      <th>Person code</th>
      <th>Name</th>
      <th>Sur name</th>
      <th>Mobile</th>
      <th>Zone</th>
      <th>Area</th>
      <th>Reg expiry</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($customers as $customer): ?>
    <tr>
      <td><a href="<?php echo url_for('customer/show?customer_id='.$customer->getCustomerId()) ?>"><?php echo $customer->getCustomerId() ?></a></td>
      <td><?php echo $customer->getRegDate() ?></td>
      <td><?php echo $customer->getPersonCode() ?></td>
      <td><?php echo $customer->getName() ?></td>
      <td><?php echo $customer->getSurName() ?></td>
      <td><?php echo $customer->getMobile() ?></td>
      <td><?php echo $customer->getZoneId() ?></td>
      <td><?php echo $customer->getAreaId() ?></td>
      <td><?php echo $customer->getRegExpiry() ?></td>
      <td><?php echo $customer->getAddress() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('customer/new') ?>">New</a>
