<?php
// include 'php/header.php';
include 'php/connexion.php';

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mdp = $_POST["mdp"];
  $role = $_POST["role"];

  // Vérification si le nom d'utilisateur est déjà pris
  $sql = "SELECT * FROM utilisateur WHERE email = '$email'";
  $res = mysqli_query($conn, $sql);

  if (!mysqli_num_rows($res) > 0) {
    // Ajout de l'utilisateur à la base de données
    $sql2 = "INSERT INTO utilisateur (nom , email, mdp, idRole) VALUES ('$name','$email', '$mdp', '$role')";
    if (mysqli_query($conn, $sql2)) {
      echo "<h2>Inscription réussie ! Vous pouvez maintenant vous connecter.</h2>";
    } else {
      echo "<h2>Erreur lors de l'inscription : " . mysqli_error($conn) . "</h2>";
    }
  } else {
    echo "<h2 class='text-red-500'>Le nom d'utilisateur est déjà pris. Veuillez en choisir un autre.";
  }

  header("location: signin.php");

  // Fermeture de la conn
  mysqli_close($conn);
}
?>

<div class=" min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-24 w-auto" src="img/logo.png" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-green-800">Sign up for free</h2>
    </div>
    <form class="mt-8 space-y-6" action="" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="email-address" class="sr-only">Nom </label>
          <input id="email-address" name="name" type="text" autocomplete="email" required
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-green-800 focus:border-green-500 focus:z-10 sm:text-sm"
            placeholder="Nom">
        </div>
        <div>
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-green-800 focus:border-green-500 focus:z-10 sm:text-sm"
            placeholder="Email address">
        </div>
        <div>
          <select name="role" id="">
            <option value="admin">Admin</option>
            <option value="client">Client</option>
          </select>
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="mdp" type="password" autocomplete="current-password" required
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-green-800 focus:border-green-500 focus:z-10 sm:text-sm"
            placeholder="Password">
        </div>
      </div>
      <div>
        <a href="signin.php">
          <button type="submit" name="submit"
            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            Sign up
          </button>
        </a>
      </div>
    </form>
  </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
</body>

</html>