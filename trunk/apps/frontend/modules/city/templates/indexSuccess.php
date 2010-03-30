 
<div class="ussTableHeader" >
	<h1>Citys List</h1>
</div>


<table class="borderboxWithData">
  <thead class="tbheader">
    <tr>
      <th>City</th>
      <th>City name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($citys as $city): ?>
    <tr>
      <td><a href="<?php echo url_for('city/show?city_id='.$city->getCityId()) ?>"><?php echo $city->getCityId() ?></a></td>
      <td><?php echo $city->getCityName() ?></td>
      <td><?php echo $city->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

 
<div class="ussTableHeader" >  
  <a href="<?php echo url_for('city/new') ?>">New</a>
</div>