<?php
   include('config/app.php');
   include('html/header.php');
   include('fct/item.php');
   include('fct/request.php');

   if(!file_exists(FILE_NAME)){
    file_put_contents(FILE_NAME, serialize([]));
}
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
                          <input type="text" class="form-control" name="intitule" placeholder="Saisissez ici votre Todo">
                          <span class="input-group-append">
                              <button type="submit" class="btn btn-info btn-flat">+</button>
                          </span>
                      </div>
                  </form>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <ul class="todo-list ui-sortable" data-widget="todo-list">
                        <?php
                            $items = getItems();
                            foreach($items as $key=>$item){
                              echo displayItem($key,$item);
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

