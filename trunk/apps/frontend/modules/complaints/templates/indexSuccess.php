
<div class="ussTableHeader" >
    <h1>Complaintss List</h1>
</div>
<table class="borderboxWithData">
  <thead class="tbheader">
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
      <td class="rowWord"><a href="<?php echo url_for('complaints/show?id='.$complaints->getId()) ?>"><?php echo $complaints->getId() ?></a></td>
      <td class="rowWord"><?php echo $complaints->getComplaintDate() ?></td>
      <td class="rowWord"><?php echo $complaints->getComplaintCode() ?></td>
      <td class="rowWord"><?php echo $complaints->getCustomerId() ?></td>
      <td class="rowWord"><?php echo $complaints->getAssignedEmpId() ?></td>
      <td class="rowWord"><?php echo $complaints->getItems()->getItem_name() ?></td>
      <td class="rowWord"><?php echo $complaints->getStatus() ?></td>
      <td class="rowWord"><?php echo $complaints->getClosedDate() ?></td>
      <td class="rowWord"><?php echo $complaints->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="ussTableHeader" >
    <h4><a href="<?php echo url_for('complaints/new') ?>">New</a></h4>
</div>
