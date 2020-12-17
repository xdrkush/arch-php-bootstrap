<!-- Gestion Articles -->
<div class="card">
    <div class="card-header" id="headingOne">
        <div class="row justify-around">
            <div class="col-md-6">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Gestion des articles
                    </button>
                </h2>
            </div>
            <div class="col-md-6 text-center">
                <button class='btn btn-primary' data-target='#modalCreate' data-toggle="modal">create</button>
            </div>
        </div>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // Appel de la class Database et de ça fontion connect()
                    $pdo = Database::connect();

                    $sql = 'SELECT * FROM articles ORDER BY id DESC';

                    foreach ($pdo->query($sql) as $row) {
                        echo '<tr class="text-center">';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td> ' . $row['title'] . ' </td>';
                        echo '<td> ' . $row['subtitle'] . ' </td>';
                        echo '<td>';
                        echo '<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEdit' . $row['id'] . '"><i class="far fa-edit"></i></button>';
                        echo '<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete' . $row['id'] . '"><i class="far fa-trash-alt"></i></button>';
                        echo '</td>';
                        echo '</tr>';
                    }

                    // Appel de la class Database et de ça fontion disconnect()
                    Database::disconnect();
                    
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- / Gestion Articles -->


<!-- Modal Edit & Delete -->
<?php
include './views/modals/modalCreate.php';
?>
