<div class="leftcol_box">
    <div id="catalog">
        <h2>
            <a href="<?php echo url_for('complaints/edit?id='.$complaints->getId()) ?>">Edit</a>
       </h2>
    </div>
</div>

&nbsp;
<a href="<?php echo url_for('complaints/index') ?>">List</a>

<table class="borderboxDuplicate">
  <tbody>
  <thead  class="headerTitle">
    <td colspan="2" align="center">Complaint Details of <?php echo $complaints->getComplaintCode() ?></td>
  </thead>
    <tr>
      <th>Id:</th>
      <td><?php echo $complaints->getId() ?></td>
    </tr>
    <tr>
      <th>Complaint date:</th>
      <td><?php echo $complaints->getComplaintDate() ?></td>
    </tr>
    <!--<tr>
      <th>Complaint code:</th>
      <td><?php echo $complaints->getComplaintCode() ?></td>
    </tr> -->
    <tr>
      <th>Customer:</th>
      <td><?php echo $complaints->getCustomer()->getName() ?></td>
    </tr>
    <tr>
      <th>Assigned emp:</th>
      <td><?php echo $complaints->getEmployee()->getName() ?></td>
    </tr>
    <tr>
      <th>Item:</th>
      <td><?php echo $complaints->getItems()->getItem_name() ?></td>
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




