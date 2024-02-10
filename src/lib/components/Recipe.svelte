<!-- lib/components/Recipe.svelte -->
<script>
  export let recipe;

  const viewRecipeDetails = () => {
    // Navigate to the recipe details page for the current recipe ID
    window.location.replace(`/recipe/${recipe.id}`)
  };
</script>

<div class="recipe">
  
  <!-- Button to navigate to recipe details page -->
  <button on:click={viewRecipeDetails}>
    <div class="border border-gray-300 rounded-lg p-4 mb-4">
      <!-- Individual recipe content -->
      <h3 class="text-lg font-bold mb-2">Recipe name: {recipe.name}</h3>
    </div>
  </button>
</div>
