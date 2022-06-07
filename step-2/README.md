# Step Two

Time: 20 Minutes

## Create a Theme Base

1. Navigate to `/wp-content/themes/` in your local WordPress install
2. Create a directory for your theme files - I used the name `wceu-blocks`
3. Open this directory in your IDE - For VS Code you can drag the folder into the File Explorer sidebar.
4. Create a file named style.css and add the header comment like so:

```
/**
Theme Name: WCEU Blocks 2022
**/
```
This file is required for WordPress to identify this directory as a theme that can be activated.

5. Create a file named theme.json with the following contents:

```
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 2
}
```

We'll add more to this file in a future step but this is the starting point.

6. Create a directory/folder in your theme named templates
7. Create a file in the templates directory named index.html
8. Navigate to your WordPress admin area's themes screen and activate your new theme.

This theme is now active but we have not yet added any way for the content to show on the front end.

You should see a message of "Empty Index" on the site's front end. The back end will work as expected.

[<< Go back to Step 2 ](./step-2/README.md)
[Go to Step 3 >>](./step-3/README.md)
