<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin_page</title>
</head>

<h1><center>
  User Details
</center></h1>

<table class="table table-primary table-striped table-responsive table-bordered">

  <thead>
      <tr>
        <th scope="col">sno</th>
        <th scope="col">name</th>
        <th scope="col">password</th>
        <th scope="col">email</th>
              <th scope="col">birthday</th>
                    <th scope="col">number</th>
                          <th scope="col">gender</th>
                                <th scope="col">address</th>
                                      <th scope="col">vehicle</th>
                                            <th scope="col">lucky</th>
                                            <th scope="col">last</th>
                                                <th scope="col">timestamp</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include('config.php');
      $sql="select *from userdetails";
      $query=mysqli_query($con,$sql);
      $nums=mysqli_num_rows($query);
      while($res=mysqli_fetch_array($query)){
       ?>
      <tr>
        <td><?php echo $res['sno']; ?></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['password']; ?></td>
          <td><?php echo $res['email']; ?></td>
            <td><?php echo $res['birthday']; ?></td>
              <td><?php echo $res['number']; ?></td>
                <td><?php echo $res['gender']; ?></td>
                  <td><?php echo $res['address']; ?></td>
                    <td><?php echo $res['vehicle']; ?></td>
                        <td><?php echo $res['lucky']; ?></td>
                            <td><?php echo $res['last']; ?></td>
                                    <td><?php echo $res['timestamp']; ?></td>
      </tr>
    <?php
  }

   ?>
    </tbody>
  </table>

</html>
