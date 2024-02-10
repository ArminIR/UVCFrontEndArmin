import { writable } from 'svelte/store';

// Initialize a writable store for managing recipe-related data
export const recipeStore = writable({
  // Initial state or default data structure for recipes
  id: 'number of the recipe',
  name: 'name of the recipe',
  prepTime: 'prep time of the recipe',
  energy: 'energy of the recipe',
  fat: 'fat of the recipe',
  carbohydrate: 'carbohydrate of the recipe',
  protein: 'protein of the recipe',
  kitchenware: 'benodigdheden of the recipe',
  // Any other properties or methods related to managing recipes
});

/**
 * update is a method that takes one argument which is a callback. 
 * The callback takes the existing store value as its argument 
 * and returns the new value to be set to the store.
 * @param {*} customer - new value
 */
// export const setSelectedCustomer = (customer) => {
//     selectedCustomer.update(() => ({...customer}));
// }

