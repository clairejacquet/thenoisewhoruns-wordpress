# The Noise Who Runs - website for a music band

`wordpress` `cms` `vuejs` `php` `seo`

This website was developed for 'The Noise Who Runs', a UK/FR rock band who released their first album in June 2020.

👉 The site is live and running here: [https://thenoisewhoruns.com](https://thenoisewhoruns.com/)

The site is integrated in Wordpress as the band members would like to regularly post content (mainly articles such as interviews and news about their current projects). Thus Wordpress was a convenient solution as the cms is not only quite flexible to use on the development side of things, but is also simple and straightforward for end users who just want to write articles.

The modified theme of the site is uploaded in this repo.


------

## Key Elements in the project

* **Site Content** : The site displays essential information of the band on the home page (about us, links to other platforms where their music is available, their previous works), a 'listen' page that showcases their music and a news section that displays all blog posts. The first version of the website was a single page application coded in nuxt.js. However, seeing that the band would post articles in the near future, I decided that I should make the jump and adapt the site to Wordpress. Therefore, the content on the home page is actually hard coded as it comes from the first version of the site that was made in nuxt.js . However the header, footer and the rest of the pages are all purely integrated in wordpress. In an updated version of this site , I will transfer the home page content that was coded directly in a partial to a page directly accessible in the Wordpress cms.

* **Styles and JS**: The site is a modified theme. I used a custom stylesheet to overwrite css from the original theme when necessary. In addition to that, functions.php includes all css and js files/links that are called on page load (bootstrap-grid, vue, jquery).

* **Vue - List Rendering** : The `v-for` directive is used to render list of items and nested data. Certain content on the home page is displayed via list rendering (`v-for` from vue) .  This avoided repetitive code which greatly simplified the structure of the page.

* **Plugins**: Plugins integrated to the site include an SEO framework (meta-tags), a plugin that adds the Google Analytics tag to all pages, and a GDPR cookie consent notification and a social media widget to share blog posts. As the shortcodes I wish I could integrate to the site weren't functioning (incompatibility most likely to due to 'Gutenberg' version of WP platform), the posts previews displayed on the home page were queried directly in php.

* **SEO and Google Analytics** : The site relies on Google Analytics to track all traffic and activity. The meta-tags of the pages are managed with a plugin that also measures and indicates if each page and posts are up to standard for indexation on search engines.

![preview](https://github.com/clairejacquet/thenoisewhoruns-wordpress/blob/master/preview.png?raw=true)
