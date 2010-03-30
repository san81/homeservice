
<div class="ussTableHeader" >
	<h1>Areass List</h1>
</div>

<table class="borderboxWithData">
  <thead class="tbheader">
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
      <td class="rowWord"><a href="<?php echo url_for('areas/show?area_id='.$areas->getAreaId()) ?>"><?php echo $areas->getAreaId() ?></a></td>
      <td class="rowWord"><?php echo $areas->getAreaCode() ?></td>
      <td class="rowWord"><?php echo $areas->getAreaName() ?></td>
      <td class="rowWord"><?php echo $areas->getZoneId() ?></td>
      <td class="rowWord"><?php echo $areas->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

 
<div class="ussTableHeader" >
	<h4><a href="<?php echo url_for('areas/new') ?>">New</a></h4>
 </div>