import { defineConfig } from 'vite';
import vitePluginPhp from 'vite-plugin-php';


export default defineConfig({
  base: './', 
  plugins: [
    vitePluginPhp({entry: [
      'index.php',
      'components/**/*.*',
      'vendor/*/*.*',
      'vendor/*.*',
      'src/*.php',
      'db/*.*',
      'assets/*.js',
      'assets/*.css'
    ]})
  ]
});
 