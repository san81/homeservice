<h1>Employees List</h1>

<table>
  <thead>
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
      <td><a href="<?php echo url_for('employee/show?emp_id='.$employee->getEmpId()) ?>"><?php echo $employee->getEmpId() ?></a></td>
      <td><?php echo $employee->getRegDate() ?></td>
      <td><?php echo $employee->getEmpCode() ?></td>
      <td><?php echo $employee->getEmpProfileId() ?></td>
      <td><?php echo $employee->getName() ?></td>
      <td><?php echo $employee->getSurName() ?></td>
      <td><?php echo $employee->getMobile() ?></td>
      <td><?php echo $employee->getZoneId() ?></td>
      <td><?php echo $employee->getAreaId() ?></td>
      <td><?php echo $employee->getWorkingUnder() ?></td>
      <td><?php echo $employee->getSkillSet() ?></td>
      <td><?php echo $employee->getCategoryId() ?></td>
      <td><?php echo $employee->getAddress() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('employee/new') ?>">New</a>
