<!-- RecipeDetails.svelte -->
<script>
  import { page } from "$app/stores";
  import { onMount } from "svelte";
  import { createClient } from '@supabase/supabase-js';
  import { navigate } from "svelte-routing"; // Import the navigate function from svelte-routing
  import BottomBar from "../../../lib/components/BottomBar.svelte";
  import BackButton from "../../../lib/components/BackButton.svelte";

  // Initialize the Supabase client
  const supabase = createClient('https://hnerragxwflvikhfmyfi.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImhuZXJyYWd4d2ZsdmlraGZteWZpIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MDcyMTc2NzgsImV4cCI6MjAyMjc5MzY3OH0.yHK_nHSiw1An5GMEtvAoKncuL88zT2ktnVeI5WMBZJM');

  let recipe;

  // Fetch recipe data from Supabase based on recipe ID
  async function fetchRecipe() {
    const recipeId = $page.params.recipeId;
    const { data, error } = await supabase
      .from('recipes')
      .select('*')
      .eq('id', recipeId)
      .single();

    if (error) {
      console.error('Error fetching recipe:', error.message);
    } else {
      recipe = data;
    }
  }

  async function deleteRecipe() {
    try {
      const confirmDelete = confirm("Are you sure you want to delete this recipe?");
      if (confirmDelete) {
        const recipeId = $page.params.recipeId;
        const { error } = await supabase
          .from('recipes')
          .delete()
          .eq('id', recipeId);

        if (error) {
          console.error('Error deleting recipe:', error.message);
        } else {
          // Optionally, you can navigate the user back to the recipe list or any other page
          // For example, navigate('/recipes');
        }
      }
    } catch (error) {
      console.error('Error deleting recipe:', error.message);
    }
  }

  function editRecipe() {
    // Navigate to the edit recipe page with the recipe ID as a parameter
    navigate(`/recipes/${$page.params.recipeId}/edit`);
  }

  // Fetch recipe data when the component is mounted
  onMount(fetchRecipe);
</script>

<div class="bg-[#F0FFEA]">
  <BackButton />
</div>

<main class="bg-[#F0FFEA] min-h-screen pt-5">
  {#if recipe}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="w-full text-center mb-8">
        <img src="/src/img/logo.png" alt="Our Logo" class="max-w-full h-auto mix-blend-multiply">
      </div>
      <div class="bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-4">{recipe.name}</h2>
        <div class="grid grid-cols-1 gap-4">
          <div class="grid grid-cols-2 gap-4">
            <p class="font-bold">Creator:</p>
            <p>{recipe.creator}</p>
            <p class="font-bold">Prep Time:</p>
            <p>{recipe.prepTime}</p>
            <p class="font-bold">Energy:</p>
            <p>{recipe.energy}</p>
            <p class="font-bold">Fat:</p>
            <p>{recipe.fat}</p>
            <p class="font-bold">Carbohydrate:</p>
            <p>{recipe.carbohydrate}</p>
            <p class="font-bold">Protein:</p>
            <p>{recipe.protein}</p>
            <p class="font-bold">Kitchenware:</p>
            <p>{recipe.kitchenware}</p>
            <p class="font-bold">Ingrediënten:</p>
            <p>{recipe.ingrediënten}</p>
            <p class="font-bold">Bereidingswijze:</p>
            <p>{recipe.bereidingswijze}</p>
          </div>
        </div>
        <div class="flex justify-between mt-8">
          <button on:click={editRecipe} class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            Edit Recipe
          </button>
          <button on:click={deleteRecipe} class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
            Delete Recipe
          </button>
        </div>
      </div>
    </div>
  {:else}
    <p>Loading...</p>
  {/if}
  <BottomBar />
</main>

<style>
  /* Your styles here */
</style>
