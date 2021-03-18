# American Promise Child Theme

This is a a child theme for the Genesis Framework, including a modular architecture, SASS, gulp, Burboun, and Neat.
It is based on the Developers Starter Theme by KnowTheCode.

## Features
-integrated with The Events Calendar plugin
-integrated with Form Assembly
-Custom JS live search feature, with custom Wordpress api
-Modular theme architecture
-Custom api end point for event submission

## Dependencies
This child theme has no global dependencies, but does have dev dependencies.

## Develpoment Dependencies
"autoprefixer": "^9.3.1",
"bourbon": "^5.1.0",
"bourbon-neat": "^1.9.1",
"css-mqpacker": "^7.0.0",
"gulp": "^3.9.1",
"gulp-cssnano": "^2.1.3",
"gulp-notify": "^3.2.0",
"gulp-plumber": "^1.2.0",
"gulp-postcss": "^8.0.0",
"gulp-rename": "^1.4.0",
"gulp-sass": "^4.0.2",
"gulp-sass-lint": "^1.4.0",
"gulp-sourcemaps": "^2.6.4",
"npm": "^6.4.1",
"sass-rem": "^2.0.1

This child theme requires the following dependencies:
- Genesis Framework
- Wordpress

##A Note on functions.php:
This is a modular child theme that has broken functions.php into many different files.

Unlike a standard Wordpress theme, functions that are being added must be placed into one of the PHP files in lib. Functions defined in these files must be name spaced properly, or they will not be recognized by the Genesis or Wordpress hooks. 

The assets folder holds the SASS, JS, image files, and csv data used by the site. The SASS is compiled using gulp. Use 'gulp styles' to compile to styles.css and styles.min.css

When unregistering Genesis actions, make sure the code is placed inside a unregister function, at the top of each structure file. These unregister functions are called by unregister_genesis_callbacks() in setup.php.
