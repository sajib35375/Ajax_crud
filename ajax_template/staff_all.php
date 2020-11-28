<?php

include_once "../vendor/autoload.php";

use App\controller\Staff;

$staff = new Staff;

$data = $staff -> allstaff();



while ($sob_data = $data -> fetch_assoc()) :
?>

<tr>
    <td>1</td>
    <td><?php echo $sob_data['name']; ?></td>
    <td><?php echo $sob_data['email']; ?></td>
    <td><?php echo $sob_data['cell']; ?></td>
    <td><img src="assets/media/img/<?php echo $sob_data['photo']; ?>" alt=""></td>
    <td>
        <a class="btn btn-sm btn-info" href="#">View</a>
        <a class="btn btn-sm btn-warning" href="#">Edit</a>
        <a class="btn btn-sm btn-danger" href="#">Delete</a>
    </td>
</tr>

<?php endwhile;?>