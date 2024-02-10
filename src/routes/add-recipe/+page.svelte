<script>
    import { navigate } from 'svelte-routing';
    import { createClient } from '@supabase/supabase-js'; // Import Supabase client
    import { writable } from 'svelte/store'; // Import writable from Svelte store
    
    // Initialize Supabase client with your Supabase URL and API key
    const supabaseUrl = 'https://hnerragxwflvikhfmyfi.supabase.co';
    const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImhuZXJyYWd4d2ZsdmlraGZteWZpIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MDcyMTc2NzgsImV4cCI6MjAyMjc5MzY3OH0.yHK_nHSiw1An5GMEtvAoKncuL88zT2ktnVeI5WMBZJM';
    const supabase = createClient(supabaseUrl, supabaseKey);
    
    // Initialize writable store to hold the form data
    const recipeFormData = writable({
        name: '',
        prepTime: '',
        energy: '',
        fat: '',
        carbohydrate: '',
        protein: '',
        kitchenware: '',
        ingrediënten: '',
        bereidingswijze: ''
    });
    
    // Function to handle form submission
    const handleSubmit = async (event) => {
        event.preventDefault(); // Prevent the default form submission behavior
        const formData = $recipeFormData; // Accessing the current value of the store
        try {
            // Insert the new recipe data into the recipes table
            const { data, error } = await supabase.from('recipes').insert([formData]);
            if (error) {
                throw error;
            }
            console.log('Recipe added successfully:', data);
            // After submitting the form, navigate back to the main page
            navigate('/dashboard');
        } catch (error) {
            console.error('Error adding recipe:', error.message);
        }
        console.log(handleSubmit);
    };
</script>
    
<main class="min-h-screen flex items-center justify-center bg-background">
    <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Add New Recipe</h1>
        <form on:submit|preventDefault={handleSubmit}>
            <label class="block mb-4">
                Creator:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.creator} required />
            </label>
            <label class="block mb-4">
                Recipe Name:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.name} required />
            </label>
            <label class="block mb-4">
                Prep Time:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.prepTime} required />
            </label>
            <label class="block mb-4">
                Energy:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.energy} required />
            </label>
            <label class="block mb-4">
                Fat:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.fat} required />
            </label>
            <label class="block mb-4">
                Carbohydrate:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.carbohydrate} required />
            </label>
            <label class="block mb-4">
                Protein:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.protein} required />
            </label>
            <label class="block mb-4">
                Benodigdheden:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.kitchenware} required />
            </label>
            <label class="block mb-4">
                Ingrediënten:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.ingrediënten} required />
            </label>
            <label class="block mb-4">
                Bereidingswijze:
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md" bind:value={$recipeFormData.bereidingswijze} required />
            </label>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md">Add Recipe</button>
        </form>
    </div>
</main>
