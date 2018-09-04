# Post-grid-and-filter-AbeEdition
Post Grid (plugin for wordpress)



<code>[pgaf_post_grid]</code>

* **limit :** [pgaf_post_grid limit="10"] (Display latest 10 posts and then pagination).
* **cat_id :**  [pgaf_post_grid cat_id="category_id"] (Display posts categories wise).
* **include_cat_child :** [pgaf_post_grid include_cat_child="false"] (Include cat child or not. Values are "true" or "false").
* **design:** [pgaf_post_grid design="design-1"] (Select the design to display. there are 2 designs ie design-1 and design-2 ).
* **grid :** [pgaf_post_grid grid="2"](Display post in Grid formats).
* **order :**  [pgaf_post_grid order="DESC"] (Post order ie DESC or ASC).
* **orderby:** [pgaf_post_grid orderby="date"] (Order by post ie ID, author, title, date, name, rand etc).
* **image_fit :** [pgaf_post_grid image_fit="true"] (Fit the post image in wrap. Values are "true" or "false").
* **media_size :**  [pgaf_post_grid media_size="large"] (Set the featured image size to diplay in post Values are thumbnail, medium, large, full).
* **image_height :**  [pgaf_post_grid image_height="300"] (Set featured image height).
* **show_date :** [pgaf_post_grid show_date="false"] (Display post date OR not. By default value is "true". Options are "ture OR false")
* **show_author :** [pgaf_post_grid show_author="true"] (Display post author. Values are "true" or "false").
* **show_content :** [pgaf_post_grid show_content="true" ] (Display post Short content OR not. By default value is "true". Options are "ture OR false").
* **show_read_more :** [pgaf_post_grid show_read_more="true"] (Display Read more button or not. Options are "ture OR false")
* **show_category_name :** [pgaf_post_grid show_category_name="true" ] (Display post category name OR not. By default value is "True". Options are "ture OR false").
* **content_words_limit :** [pgaf_post_grid content_words_limit="30" ] (Control post short content Words limt. By default limit is 20 words).
* **content_tail :** [pgaf_post_grid content_tail=".." ] (Set content tail).
* **pagination :** [pgaf_post_grid pagination="true" ] (Set content tail).
* **pagination_type :** [pgaf_post_grid pagination_type="numeric" ] (values are "prev-next" and "numeric").
* **show_comments :** [pgaf_post_grid show_comments="true" ] (Options are "ture OR false").

= Here is shortcode parameters for grid filter =

<code>[pgaf_post_filter]</code>

* **cat_id :**  [pgaf_post_filter cat_id="category_id"] (Display posts categories wise).
* **include_cat_child :** [pgaf_post_filter include_cat_child="false"] (Include cat child or not. Values are "true" or "false").
* **design:** [pgaf_post_filter design="design-1"] (Select the design to display. there are 2 designs ie design-1 and design-2 ).
* **grid :** [pgaf_post_filter grid="2"](Display post in Grid formats).
* **order :**  [pgaf_post_filter order="DESC"] (Post order ie DESC or ASC).
* **orderby:** [pgaf_post_filter orderby="date"] (Order by post ie ID, author, title, date, name, rand etc).
* **image_fit :** [pgaf_post_filter image_fit="true"] (Fit the post image in wrap. Values are "true" or "false").
* **media_size :**  [pgaf_post_filter media_size="large"] (Set the featured image size to diplay in post Values are thumbnail, medium, large, full).
* **image_height :**  [pgaf_post_filter image_height="300"] (Set featured image height).
* **show_date :** [pgaf_post_filter show_date="false"] (Display post date OR not. By default value is "true". Options are "ture OR false")
* **show_author :** [pgaf_post_filter show_author="true"] (Display post author. Values are "true" or "false").
* **show_content :** [pgaf_post_filter show_content="true" ] (Display post Short content OR not. By default value is "true". Options are "ture OR false").
* **show_read_more :** [pgaf_post_filter show_read_more="true"] (Display Read more button or not. Options are "ture OR false")
* **show_category_name :** [pgaf_post_filter show_category_name="true" ] (Display post category name OR not. By default value is "True". Options are "ture OR false").
* **content_words_limit :** [pgaf_post_filter content_words_limit="30" ] (Control post short content Words limt. By default limit is 20 words).
* **content_tail :** [pgaf_post_filter content_tail=".." ] (Set content tail).
* **show_comments :** [pgaf_post_filter show_comments="true" ] (Options are "ture OR false").
* **cat_orderby :** [pgaf_post_filter cat_orderby="name" ]
* **all_filter_text :** [pgaf_post_filter all_filter_text="All" ]

= Template code is =
<code><?php echo do_shortcode('[pgaf_post_grid]'); ?></code>
<code><?php echo do_shortcode('[pgaf_post_filter]'); ?></code>

== Installation ==

1. Upload the 'post-grid-and-filter-ultimate' folder to the '/wp-content/plugins/' directory.
2. Activate the "Post grid and filter ultimate" list plugin through the 'Plugins' menu in WordPress.
3. Add a new page and add shortcode.
