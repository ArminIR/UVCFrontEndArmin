// frontend/supabase.js
import { createClient } from '@supabase/supabase-js';

const supabaseUrl = 'https://hnerragxwflvikhfmyfi.supabase.co';
const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImhuZXJyYWd4d2ZsdmlraGZteWZpIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MDcyMTc2NzgsImV4cCI6MjAyMjc5MzY3OH0.yHK_nHSiw1An5GMEtvAoKncuL88zT2ktnVeI5WMBZJM';

export const supabase = createClient(supabaseUrl, supabaseKey);