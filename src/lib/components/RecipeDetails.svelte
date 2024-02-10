<!-- lib/components/RecipeDetails.svelte -->
<script>
    export let recipe;
</script>
  
<div class="recipe-details">
  <h2>{recipe.name}</h2>
  <ul>
    <li>Prep Time: {recipe.prepTime}</li>
    <li>Energy: {recipe.energy}</li>
    <li>Fat: {recipe.fat}</li>
    <li>Carbohydrate: {recipe.carbohydrate}</li>
    <li>Protein: {recipe.protein}</li>
    <!-- Add more details as needed -->
  </ul>
</div>

