<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            #groundhog {
                display: block;
                position: fixed;
                top: 16px;
                left: 16px;
                z-index: 9999;
                box-shadow: 0 0 30px 5px #c71123;
                transition: top 10s, left 10s, box-shadow 10s;
            }
            #groundhog a {
                display: block;
                background-color: transparent;
                color: #fff;
                padding: 1rem 1.25rem;
                font-size: 1.25rem;
                line-height: 1.25rem;
                text-decoration: none;
                /*text-shadow: 0 0 10px #c71123;*/
            }
            #groundhog a:hover {
                background-color: #fff;
                color: #000;
                /*text-shadow: none;*/
            }
        </style>
