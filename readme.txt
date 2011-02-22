=== FE Fiction ===
Contributors: phxvyper
Tags: fiction, posts, post types, custom fields
Requires at least: 3.0
Tested up to: 3.0.5
Stable tag: 3.0

== Description ==

FE Fiction provides ability to manage stories with genres, categories, ratings, as well as browse and read stories on the site.

This plugin sets everything up for you, including preset genres and ratings (which you can change at your leasure).  We have left categories empty, so it is important
that you set up your categories before you or your users start submitting content.  Having no categories will not break anything, though.

There is a simple settings page that allows you to do a few things:

1. create the page that will be used to browse (story listings) and read stories, including basic filtering (we will have full search in a future realease)
2. set the default user role to "Author".  Author role is the required minimum role to allow users to both submit and manage their own stories. Author role allows the "publish" capability, which is important.  Without this role, users will only be able to submit for review and publish by an Author or above role user
     3. we may enhanced this at a later date to allow for specifying what role to set instead of forcing the Author role
4. allow you to augment the WP Admin interface to provide users with quick and simple access to what areas of the admin they are permitted to use.  In this case, we take care to ensure that Author's cannot manage general posts and pages and only allow them to manage their stories
5. allow you to hide, for non administrators, the WP Admin menu, so what they see is the augmented interface only.

== Installation ==

Installation procedure:

1. activate
2. go to the "Settings" page
3. There is a simple settings page that allows you to do a few things
     4. create the page that will be used to browse (story listings) and read stories, including basic filtering (we will have full search in a future realease)
     5. set the default user role to "Author".  Author role is the required minimum role to allow users to both submit and manage their own stories. Author role allows the "publish" capability, which is important.  Without this role, users will only be able to submit for review and publish by an Author or above role user
     6. we may enhanced this at a later date to allow for specifying what role to set instead of forcing the Author role
     7. allow you to augment the WP Admin interface to provide users with quick and simple access to what areas of the admin they are permitted to use.  In this case, we take care to ensure that Author's cannot manage general posts and pages and only allow them to manage their stories
     8. allow you to hide, for non administrators, the WP Admin menu, so what they see is the augmented interface only
9. that's it!

== Frequently Asked Questions ==

None at this time

== Screenshots ==

None at this time

== Special Thanks to ==


== Changelog ==
= 1.0.b =
1. fixing some minor validation issues in the settings page
2. updated the readme.txt file
3. modifications to support domain locale
4. removed generic local files and added plugin specific
5. adding translation file

= 0.1.a.3 =

1. added pagination for browsing stories
2. added story meta data to pages
3. stylized meta data block
4. added new custom template functions for customized fiction display elements
5. changed admin options for better page creation and management
6. new template functions for stories, particularly for handling permalinks, meta content, taxonomies
7. improved browsing filtering
8. multiple and single story views

= 0.1.a.2 =

1. starting new front-end for browsing and searching
2. adding rewrite rules for fiction page
3. filter for [fe-fiction] that is used for browsing and searching
4. cleanup

= 0.1.a =

1. Initial Alpha.  Still incomplete and much work in progress

== Additional Documentation ==
None.