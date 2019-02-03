<?php
require __DIR__ . '/functions.php';
if (isset ($_POST['name']) && isset ($_POST['strength']) && isset($_POST['life']) && ($_POST['type'] )) {
  $name = $_POST['name'];
  $strength = $_POST['strength'];
  $life = $_POST['life'];
  $type = $_POST['type'];
  
  $statement = $Bdd->prepare('INSERT INTO monsters(name , strength , life, type) VALUES( :name, :strength , :life , :type);');
  if ($statement->execute([':name' => $name, ':strength'=>$strength, ':life'=>$life,'type'=>$type])) {
    $message = 'data inserted successfully';
    header("Location:index.php");
  }
  else {
      
  }
}
 ?>

    
      <h2>Create Monster</h2>
 
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="Post" action="create.php">
        <div >
          <label for="name">Name</label>
          <input type="text" name="name" id="name">
       
          <label for="strength">strength</label>
          <input type="strength" name="strength" id="strength">
          <label for="life">life</label>
          <input type="life" name="life" id="life">
          <label for="type">type</label>
          <input type="type" name="type" id="type">
        
          <button type="submit">Create Monster</button>
        
      </form>
   
