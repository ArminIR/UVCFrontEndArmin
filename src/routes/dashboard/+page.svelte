<!-- Import necessary components and libraries -->
<script>
  import AddRecipeButton from '../../lib/components/AddRecipeButton.svelte';
  import Recipe from '../../lib/components/Recipe.svelte';
  import Bottombar from '../../lib/components/Bottombar.svelte';
  // Import Supabase client
  import { createClient } from '@supabase/supabase-js';
  // Import Svelte's onMount function
  import { onMount } from 'svelte';

  // Initialize the client with your Supabase project URL and API key
  const supabase = createClient('https://hnerragxwflvikhfmyfi.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImhuZXJyYWd4d2ZsdmlraGZteWZpIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MDcyMTc2NzgsImV4cCI6MjAyMjc5MzY3OH0.yHK_nHSiw1An5GMEtvAoKncuL88zT2ktnVeI5WMBZJM');

  // Define the table you want to query
  const tableName = 'recipes';

  // Define a writable store to hold the fetched data
  import { writable } from 'svelte/store';
  const recipes = writable([]);

  // Fetch data from the table
  async function fetchData() {
      const { data, error } = await supabase.from(tableName).select('*');

      if (error) {
          console.error('Error fetching data:', error);
          return;
      }

      console.log('Fetched data:', data);

      // Set the fetched data to the recipes store
      recipes.set(data);
  }

  // Call the fetchData function inside the onMount function
  onMount(fetchData);
</script>

<!-- Main content -->
<main class="bg-[#F0FFEA] min-h-screen pt-5">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="w-full text-center mb-8">
      <!-- Add your logo image here -->
      <img src="/src/img/logo.png" alt="Our Logo" class="max-w-full h-auto mix-blend-multiply">
    </div>
    <!-- Section title -->
    <h2 class="text-3xl font-bold text-center mb-8">Aanbevolen recepten</h2>
    <!-- Box around recipe list -->
    <div class="border border-gray-300 rounded-lg p-4">
      <!-- Recipe list -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {#each $recipes as recipe}
          <Recipe {recipe} />
        {/each}
      </div>
    </div>
    <!-- Add the AddRecipeButton component to allow users to add new recipes -->
    <div class="flex justify-center mt-8">
      <AddRecipeButton />
    </div>
  </div>
  <!-- Include the Bottombar component -->
  <Bottombar />
</main>
