<!-- lib/components/AddRecipeButton.svelte -->
<script>
  import { navigate } from 'svelte-routing';

  const addRecipe = () => {
    // Navigate to the page where users can add a new recipe
    navigate('/add-recipe');
  };
</script>

<button on:click={addRecipe} class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
  Add Recipe... Hello
</button>
