---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>--- metadata.title --- - StaticPHP Docs</title>
        
        <link rel="stylesheet" type="text/css" href="https://webfonts.staticly.ict.rocks/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="sidebar">
                <h1><a href="/">StaticPHP Docs</a></h1>

                <nav>
                    <a href="/getting-started"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == "getting-started" ) echo ' class="current"'; ?>>Getting Started</a>
                    <a href="/metadata"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == "metadata" ) echo ' class="current"'; ?>>MetaData</a>
                </nav>
            </div>

            <div class="content">
                {{ content }}
            </div>
        </div>
    </body>
</html>
