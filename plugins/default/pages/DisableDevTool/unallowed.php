<?php
/**
 * Open Source Social Network
 *
 * @package   Disable Developer Tool
 * @author    Red Crested <contact@redcrested.net>
 * @copyright (C) Red Crested
 * @license   Red Crested License  http://www.redcrested.net/license
 * @link      https://www.redcrested.net/
 * 
 */

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo ossn_print('com:disabledevtool:unallowed:page:title'); ?>
    </title>
    <style>
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: white;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        h1 {
            font-size: 10rem;
            margin: 0;
        }

        h2 {
            font-size: 5rem;
            margin-top: 0;
            margin-bottom: 2rem;
        }

        p {
            font-size: 2rem;
        }

        a:link {
            text-decoration: none;
            font-weight: 700;
            color:#000080;
        }
        
        
        a:visited {
            text-decoration: none;
            font-weight: 700;
            color:#000080;
        }
        
        
        a:hover {
            text-decoration: none;
            font-weight: 700;
            color:#000080;
        }
        
        
        a:active {
            text-decoration: none;
            font-weight: 700;
            color:#000080;
        }
    </style>

</head>

<body>
    <h1><svg xmlns="http://www.w3.org/2000/svg" height="1em"
            viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <style>
                svg {
                    fill: #ff7b00
                }
            </style>
            <path
                d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" />
        </svg></h1>
    <h2>
        <?php echo ossn_print('com:disabledevtool:unallowed:page:title'); ?>
    </h2>
    <p>
        <?php echo ossn_print('com:disabledevtool:unallowed:help'); ?>
        <a href="javascript:history.back(-1);">
            <?php echo ossn_print('com:disabledevtool:unallowed:help:link:text'); ?>
        </a>
    </p>
</body>

</html>