<div class="headerTitle" >
    <h1>Complaintss List</h1>
</div>
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Complaint date</th>
      <th>Complaint code</th>
      <th>Customer</th>
      <th>Assigned emp</th>
      <th>Item</th>
      <th>Status</th>
      <th>Closed date</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($complaintss as $complaints): ?>
    <tr>
      <td><a href="<?php echo url_for('complaints/show?id='.$complaints->getId()) ?>"><?php echo $complaints->getId() ?></a></td>
      <td><?php echo $complaints->getComplaintDate() ?></td>
      <td><?php echo $complaints->getComplaintCode() ?></td>
      <td><?php echo $complaints->getCustomerId() ?></td>
      <td><?php echo $complaints->getAssignedEmpId() ?></td>
      <td><?php echo $complaints->getItems()->getItem_name() ?></td>
      <td><?php echo $complaints->getStatus() ?></td>
      <td><?php echo $complaints->getClosedDate() ?></td>
      <td><?php echo $complaints->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('complaints/new') ?>">New</a>
