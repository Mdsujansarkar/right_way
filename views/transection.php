<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Check #</th>
      <th scope="col">Description</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php var_dump($transections);?>
    <?php if( ! empty($transections)): ?>
      <?php foreach($transections as $$transection): ?>
        <tr>
          <th scope="row"><?= $transection[0]; ?></th>
          <td><?= $transection[0]; ?></td>
          <td><?= $transection[0]; ?></td>
          <td><?= $transection[0]; ?></td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
  <tfoot>
    <tr>
      <td>Sum</td>
      <td>$180</td>
    </tr>
  </tfoot>
</table>
</body>
</html>