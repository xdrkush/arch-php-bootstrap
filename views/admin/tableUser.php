<!-- Gestion Users -->
<div class="card">
    <div class="card-header" id="headingTwo">
        <div class="row justify-around">
            <div class="col-md-6">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Gestion des users
                    </button>
                </h2>
            </div>
        </div>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // Appel de la class Database et de ça fontion connect()
                    $pdo = Database::connect();
                    $sql = 'SELECT * FROM users ORDER BY id DESC';

                    foreach ($pdo->query($sql) as $row) {

                    ?>

                        <tr>
                            <th scope="row"> <?php echo $row['id'] ?> </th>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td>
                                <button data-target='#modalEdit' class="btn btn-warning btn-sm" data-toggle="modal" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-email="<?php echo $row['email'] ?>" data-mobile="<?php echo $row['mobile'] ?>">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button data-target='#modalDelete' class="btn btn-danger btn-sm" data-toggle="modal" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-email="<?php echo $row['email'] ?>">
                                    <i class="far fa-trash-alt"></i>
                                </button>

                            </td>
                        </tr>

                    <?php };

                    // Appel de la class Database et de ça fontion disconnect()
                    Database::disconnect();

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- / Gestion Users -->


<!-- Modal Edit & Delete -->
<?php
include './views/modals/modalEdit.php';
include './views/modals/modalDelete.php';
?>