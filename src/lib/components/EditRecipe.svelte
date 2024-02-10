<script>
  import { page } from "$app/stores";
  import { onMount } from "svelte";
  import { createClient } from '@supabase/supabase-js';
  import { navigate } from "svelte-routing"; // Import the navigate function from svelte-routing

  // Initialize the Supabase client
  const supabase = createClient('https://hnerragxwflvikhfmyfi.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImhuZXJyYWd4d2ZsdmlraGZteWZpIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MDcyMTc2NzgsImV4cCI6MjAyMjc5MzY3OH0.yHK_nHSiw1An5GMEtvAoKncuL88zT2ktnVeI5WMBZJM');

  // Define variables to store recipe details
  let recipe;
  let newName = '';
  let newPrepTime = '';
  let newEnergy = '';
  let newFat = '';
  let newCarbohydrate = '';
  let newProtein = '';
  let newKitchenware = '';
  let newBereidingswijze = '';
  let newingrediënten = '';

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
      // Populate the form fields with the current recipe details
      newName = recipe.name;
      newPrepTime = recipe.prepTime;
      newEnergy = recipe.energy;
      newFat = recipe.fat;
      newCarbohydrate = recipe.carbohydrate;
      newProtein = recipe.protein;
      newKitchenware = recipe.kitchenware;
      newBereidingswijze = recipe.bereidingswijze;
      newingrediënten = recipe.ingrediënten;
    }
  }

  async function updateRecipe() {
    try {
      const { data, error } = await supabase
        .from('recipes')
        .update({
          name: newName,
          prepTime: newPrepTime,
          energy: newEnergy,
          fat: newFat,
          carbohydrate: newCarbohydrate,
          protein: newProtein,
          kitchenware: newKitchenware,
          ingrediënten: newingrediënten,
          bereidingswijze: newBereidingswijze
        })
        .eq('id', recipe.id);

      if (error) {
        console.error('Error updating recipe:', error.message);
      } else {
        console.log('Recipe updated successfully');
        // Navigate to the dashboard
        navigate('/dashboard');
      }
    } catch (error) {
      console.error('Error updating recipe:', error.message);
    }
  }

  // Fetch recipe data when the component is mounted
  onMount(fetchRecipe);
</script>

  
  <main class="bg-[#F0FFEA] flex flex-col items-center justify-center min-h-screen pt-5">
    <h1 class="text-3xl font-bold mb-6">Edit Recipe</h1>
    {#if recipe}
      <form on:submit|preventDefault={updateRecipe} class="w-full max-w-md">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" bind:value={newName} />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="prepTime">Prep Time:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prepTime" type="text" bind:value={newPrepTime} />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="energy">Energy:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="energy" type="text" bind:value={newEnergy} />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="fat">Fat:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fat" type="text" bind:value={newFat} />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="carbohydrate">Carbohydrate:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="carbohydrate" type="text" bind:value={newCarbohydrate} />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="protein">Protein:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="protein" type="text" bind:value={newProtein} />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="kitchenware">Kitchenware:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="kitchenware" type="text" bind:value={newKitchenware} />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="ingrediënten">Ingrediënten:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ingrediënten" type="text" bind:value={newingrediënten} />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="bereidingswijze">Bereidingswijze:</label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="bereidingswijze" type="text" bind:value={newBereidingswijze} />
        </div>
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
      </form>
    {:else}
      <p>Loading...</p>
    {/if}
  </main>
  
<style>
  /* Your styles here */
</style>