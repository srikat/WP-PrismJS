# WP PrismJS #

Loads PrimsJS on single posts for syntax highlighting.

![Screenshot](https://github.com/srikat/WP-PrismJS/blob/master/screenshot-1.png?raw=true "Screenshot")

## Description ##

Included Themes:
* Okaidia

Included Languages:

* Markup (HTML)
* CSS
* PHP
* JS
* Markdown

Included Plugins:

* Line Highlight
* Copy to Clipboard Button (uses clipboard.js)

## Installation ##

1. Click on the `Download ZIP` button at the right to download the plugin
2. Upload the entire `wp-prismjs` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the `Plugins` menu in WordPress

## Usage ##

CSS:

`<pre><code class="language-css">p { color: red }</code></pre>`

HTML:

```
<pre><code class="language-markup"><script><h1 class="foo">Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6></script></code></pre>
```

PHP and Line Highlighting:

```
<pre data-line="9"><code class="language-php">add_filter( 'manage_media_columns', 'sk_media_columns_url' );
/**
 * Filter the Media list table columns to add a URL column.
 *
 * @param array $posts_columns Existing array of columns displayed in the Media list table.
 * @return array Amended array of columns to be displayed in the Media list table.
 */
function sk_media_columns_url( $posts_columns ) {
	$posts_columns['media_url'] = 'URL';
	return $posts_columns;
}</code></pre>
```

More info: [http://prismjs.com/index.html](http://prismjs.com/index.html)

## Changelog ##

### 1.0.0 ###
* Initial Release

## Others ##

Tested up to: 4.7.2  
License: GPLv2 or later  
License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)  
Donate link: [https://www.paypal.me/sridharkatakam](https://www.paypal.me/sridharkatakam)
