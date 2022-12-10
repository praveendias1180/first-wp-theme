# WordPress Theme Developer

The Exciting World of WordPress Themes

## WordPress Theme Handbook

https://developer.wordpress.org/themes/

![](developer-handbook.png)

# Rewind Posts

You can use rewind_posts() to loop through the same query a second time. This is useful if you want to display the same query twice in different locations on a page.

```php
rewind_posts();
```

# Reset Post Data

You will often want to create a secondary query to display different content on the template. For example, you might want to display two groups of posts on the same page, but do different things to each group.

Use `wp_reset_postdata()`