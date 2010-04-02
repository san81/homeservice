<div class="ussTableHeader" >
	<h1>Customers List</h1>
</div>


<table class="borderboxWithData">
  <thead class="tbheader">
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
      <td class="rowWord"><a href="<?php echo url_for('customer/show?customer_id='.$customer->getCustomerId()) ?>"><?php echo $customer->getCustomerId() ?></a></td>
      <td class="rowWord"><?php echo $customer->getRegDate() ?></td>
      <td class="rowWord"><?php echo $customer->getPersonCode() ?></td>
      <td class="rowWord"><?php echo $customer->getName() ?></td>
      <td class="rowWord"><?php echo $customer->getSurName() ?></td>
      <td class="rowWord"><?php echo $customer->getMobile() ?></td>
      <td class="rowWord"><?php echo $customer->getZones()->getZoneName() ?></td>
      <td class="rowWord"><?php echo $customer->getAreas()->getAreaName() ?></td>
      <td class="rowWord"><?php echo $customer->getRegExpiry() ?></td>
      <td class="rowWord"><?php echo $customer->getAddress() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="ussTableHeader" >
  <a href="<?php echo url_for('customer/new') ?>">New</a>
</div>
