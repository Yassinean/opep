<?php
include 'php/connexion.php';
include 'php/header.php';

if(isset($_POST['submitClient'])){
  header("Location: index.php");
}
if(isset($_POST['submitAdmin'])){
  header("Location: admin.php");
}
?>
<form action="" method="post">
  <div class="bg-white">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
      <div class="space-y-12">
        <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
          <h2 class="text-3xl font-extrabold text-center tracking-tight sm:text-4xl">Choisissez Votre Role</h2>
        </div>
        <ul role="list"
          class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-2 lg:gap-x-8">
          <li>
            <div class="space-y-4">
              <div class="space-y-2">
                <div class="text-lg text-center leading-6 font-medium space-y-1 bg-green-500 text-white">
                  <button type="submit" name="submitClient">
                    <h3>Client</h3>
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="space-y-4">
              <div class="space-y-2">
                <div class="text-lg text-center leading-6 font-medium space-y-1 bg-green-500 text-white">
                  <button type="submit" name="submitAdmin">
                    <h3>Admin</h3>
                  </button>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</form>
</body>

</html>