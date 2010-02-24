<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $complaints->getId() ?></td>
    </tr>
    <tr>
      <th>Complaint date:</th>
      <td><?php echo $complaints->getComplaintDate() ?></td>
    </tr>
    <tr>
      <th>Complaint code:</th>
      <td><?php echo $complaints->getComplaintCode() ?></td>
    </tr>
    <tr>
      <th>Customer:</th>
      <td><?php echo $complaints->getCustomerId() ?></td>
    </tr>
    <tr>
      <th>Assigned emp:</th>
      <td><?php echo $complaints->getAssignedEmpId() ?></td>
    </tr>
    <tr>
      <th>Item:</th>
      <td><?php echo $complaints->getItemId() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $complaints->getStatus() ?></td>
    </tr>
    <tr>
      <th>Closed date:</th>
      <td><?php echo $complaints->getClosedDate() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $complaints->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('complaints/edit?id='.$complaints->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('complaints/index') ?>">List</a>
