# Fitness in the Park Block Theme

A bespoke WordPress block theme for Fitness in the Park, a personal training and group fitness business in Goulburn, NSW.

The theme is built for the WordPress Site Editor using native Gutenberg blocks and contains no Custom HTML blocks. It uses the established Fitness in the Park colour palette, logo, photography and session videos in a responsive, modern layout.

WooCommerce support is included for the shop, product categories and tags, product search, single products, cart, checkout, order confirmation and customer account pages. Store templates use native WooCommerce and Gutenberg blocks, with theme-specific styling in `assets/css/woocommerce.css`.

PTminder integrations use the `[fitp_bookings]` and `[fitp_client_login]` shortcodes, with responsive presentation in `assets/css/ptminder.css` and dedicated block templates for both pages.

## Theme Structure

- `wp-content/themes/fitness-in-the-park/` - custom block theme.
  - `templates/` and `parts/` - block templates and reusable template parts.
  - `theme.json` - colours, typography, spacing and global block styles.
  - `assets/` - theme assets such as fonts, images, css, js
  - `tools/seed-content.php` - creates the initial page set and configures the static homepage.
