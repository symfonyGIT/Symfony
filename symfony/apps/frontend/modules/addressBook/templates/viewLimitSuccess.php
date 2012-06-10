<h1>Addressess List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Description</th>
      <th>Created</th>
      <th>Updated</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($addressess as $addresses): ?>
    <tr>
      <td><a href="<?php echo url_for('addressBook/edit?id='.$addresses->getId()) ?>"><?php echo $addresses->getId() ?></a></td>
      <td><?php echo $addresses->getFirstName() ?></td>
      <td><?php echo $addresses->getLastName() ?></td>
      <td><?php echo $addresses->getEmail() ?></td>
      <td><?php echo $addresses->getPhone() ?></td>
      <td><?php echo $addresses->getDescription() ?></td>
      <td><?php echo $addresses->getCreated() ?></td>
      <td><?php echo $addresses->getUpdated() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('addressBook/new') ?>">New</a>
