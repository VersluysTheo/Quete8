<form action="index.php" method="POST">
    <!-- NOM ET PRENOM -->
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control bg-dark text-white" id="prenom" name="prenom" placeholder="Nyugga">

    <label for="nom">Nom</label>
    <input type="text" class="form-control bg-dark text-white" id="nom" name="nom" placeholder="Nyugga">

  <!-- AGE -->
    <label for="age">Age ( 10 à 60 ans )</label>
    <input type="number" min="10" max="60" class="form-control bg-dark text-white" id="age" name="age" placeholder="42">
  <!-- Taille -->

  <div class="mb-3">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-dark text-white" id="validatedInputGroupPrepend">Taille ( Entre 1.6 et 2m )</span>
      </div>
      <input type="number" class="form-control" aria-describedby="validatedInputGroupPrepend" step="0.01" min="1.6" max="2" name="taille">
      <div class="input-group-prepend">
        <span class="input-group-text bg-dark text-white" id="validatedInputGroupPrepend">m</span>
      </div>
    </div>
  </div>
<!-- Bouton -->
  <div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="apprenants" value="apprenant">
  <label class="form-check-label" for="apprenants">
    Apprenants
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="formateur" value="formateur">
  <label class="form-check-label" for="formateur">
    Formateur
  </label>
</div>
<!-- Bouton2 -->

  <button type="submit" class="btn btn-dark text-align-right" name="submit" >Enregistre les Données</button>
</form>