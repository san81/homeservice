<div class="ussTableHeader" >
	<h1>Employees List</h1>
</div>

<table class="borderboxWithData">
  <thead class="tbheader">
    <tr>
      <th>Emp</th>
      <th>Reg date</th>
      <th>Emp code</th>
      <th>Emp profile</th>
      <th>Name</th>
      <th>Sur name</th>
      <th>Mobile</th>
      <th>Zone</th>
      <th>Area</th>
      <th>Working under</th>
      <th>Skill set</th>
      <th>Category</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($employees as $employee): ?>
    <tr>
      <td class="rowWord"><a href="<?php echo url_for('employee/show?emp_id='.$employee->getEmpId()) ?>"><?php echo $employee->getEmpId() ?></a></td>
      <td class="rowWord"><?php echo $employee->getRegDate() ?></td>
      <td class="rowWord"><?php echo $employee->getEmpCode() ?></td>
      <td class="rowWord"><?php echo $employee->getEmpProfileId() ?></td>
      <td class="rowWord"><?php echo $employee->getName() ?></td>
      <td class="rowWord"><?php echo $employee->getSurName() ?></td>
      <td class="rowWord"><?php echo $employee->getMobile() ?></td>
      <td class="rowWord"><?php echo $employee->getZoneId() ?></td>
      <td class="rowWord"><?php echo $employee->getAreaId() ?></td>
      <td class="rowWord"><?php echo $employee->getWorkingUnder() ?></td>
      <td class="rowWord"><?php echo $employee->getSkillSet() ?></td>
      <td class="rowWord"><?php echo $employee->getCategoryId() ?></td>
      <td class="rowWord"><?php echo $employee->getAddress() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="ussTableHeader" > 
 <a href="<?php echo url_for('employee/new') ?>">New</a>
</div>
