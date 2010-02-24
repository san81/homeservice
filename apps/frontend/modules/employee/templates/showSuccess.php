<table>
  <tbody>
    <tr>
      <th>Emp:</th>
      <td><?php echo $employee->getEmpId() ?></td>
    </tr>
    <tr>
      <th>Reg date:</th>
      <td><?php echo $employee->getRegDate() ?></td>
    </tr>
    <tr>
      <th>Emp code:</th>
      <td><?php echo $employee->getEmpCode() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $employee->getName() ?></td>
    </tr>
    <tr>
      <th>Sur name:</th>
      <td><?php echo $employee->getSurName() ?></td>
    </tr>
    <tr>
      <th>Mobile:</th>
      <td><?php echo $employee->getMobile() ?></td>
    </tr>
    <tr>
      <th>Zone:</th>
      <td><?php echo $employee->getZoneId() ?></td>
    </tr>
    <tr>
      <th>Area:</th>
      <td><?php echo $employee->getAreaId() ?></td>
    </tr>
    <tr>
      <th>Role:</th>
      <td><?php echo $employee->getRole() ?></td>
    </tr>
    <tr>
      <th>Working under:</th>
      <td><?php echo $employee->getWorkingUnder() ?></td>
    </tr>
    <tr>
      <th>Skill set:</th>
      <td><?php echo $employee->getSkillSet() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $employee->getAddress() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('employee/edit?emp_id='.$employee->getEmpId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('employee/index') ?>">List</a>
