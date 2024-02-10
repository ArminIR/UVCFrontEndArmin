import adapter from '@sveltejs/adapter-auto';
import { vitePreprocess } from '@sveltejs/kit/vite';
// svelte.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  resolve: {
    alias: {
      $lib: '/src'
    }
  }
});


/** @type {import('@sveltejs/kit').Config} */
const config = {
 kit: {
  adapter: adapter()
 },
 preprocess:vitePreprocess()
};
