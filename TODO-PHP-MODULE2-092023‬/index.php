<?php
   include('config/app.php');
   include('config/db.php');
   include('connexion.php');
   include('html/header.php');
   include('fct/item.php');
   include('fct/request.php');

?>
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
                  <!-- Formulaire d'ajout -->
                  <form action="additem.php" method="POST">
                      <div class="input-group input-group-sm">
                          <input type="text" class="form-control contour" name="intitule" placeholder="Saisissez todo list">
                          <span class="input-group-append">
                              <button type="submit" class="btn btn-info btn-flat">+</button>
                          </span>
                      </div>
                  </form>
                  <div class="card-body">
                    <ul class="todo-list ui-sortable" data-widget="todo-list">
                        <?php
                            $query = "SELECT * FROM todo";
                            $stmt = $pdo->query($query);
                            while($item = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo displayItem($item);
                            }
                        ?>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php
   include('html/footer.php');
?>

