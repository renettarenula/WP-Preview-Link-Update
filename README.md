# WP Preview Link Update

A simple plugin to update preview links on WordPress. This doesn't exactly update the preview links but it actually update permalinks for drafts. The filters `preview_post_link` and `preview_page_link`a used to work but it is no longer supported on WordPress Gutenberg. See this issues here:

- https://github.com/WordPress/gutenberg/issues/4555
- https://github.com/WordPress/gutenberg/issues/13998

I supposed there is a way to make it work with Gutenberg but ain't nobody got time for that! If you have a better solution for this, feel free to contribute <3

## Config

Edit `wp-preview-link-update.php` and change `localhost:3000` to your WP site url and `your.site.com` to your previewing site url.
