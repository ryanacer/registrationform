<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryan Marquez's Web Form</title>
    <style>
        body {
            margin: 20px 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            width: 100%;
        }
        #leftContent {
            width: 50%; float: left;
        }
        table {
            width: auto;
            min-width: 400px;
            background-color: #ffe7d6;
            /* My Rainbow Border */
            border-image: linear-gradient(to bottom left, red, orange, yellow, green, blue, indigo, violet) 1;
            border-width: 4px;
            border-style: solid;
            border-bottom-width: 5px;
            margin-bottom: 8px;
        }
        thead {
            background-color: #005E9D;
            color: white;
            text-align: center;
            height: 50px;
            font-size: 24px;
        }
        .mathBG{
            background-color: #04AA6D;
        }
        #results{
            padding: 5px;
            vertical-align: top;
        }
        td label {
            margin-left: 20px;
        }
        td input {
            margin: 5px 5px 5px 0;
            height: 20px;
        }
        select {
            margin-top: 5px;
            width: 175px;
            height: 26px;
        }
        /* ----------------------- Position Terms and Condition elements */
        #terms {
            text-align: center;
            font-style: italic;
            margin-right: 20px;
        }
        #chkBoxAgree {
            vertical-align: middle;
            position: relative;
            top: -5px;
        }
        /* ----------------------*/
        tfoot {
            height: 70px;
            text-align: right;
        }
        input[type=submit] { /* Green Submit Button */
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 20px;
            text-decoration: none;
            margin: 4px 24px 4px 4px;
            cursor: pointer;
            line-height: 2px;
            border-radius: 5px;
        }
        input[type=reset] { /* Red Reset Button */
            background-color: #c22222;
            border: none;
            color: white;
            padding: 20px;
            text-decoration: none;
            margin: 4px 24px 4px 4px;
            cursor: pointer;
            line-height: 2px;
            border-radius: 5px;
        }
        #clear[type=button] { /* Red Reset Button */
            background-color: mediumslateblue;
            border: none;
            color: white;
            padding: 20px;
            text-decoration: none;
            margin: 4px 24px 4px 4px;
            cursor: pointer;
            line-height: 2px;
            border-radius: 5px;
        }
        #note {
            padding-left: 10px;
            text-align: left;
            font-style: oblique;
            color: red;
        }
        #num1 {
            width: 80px;
        }
        #num2 {
            width: 80px;
        }
        #optr {
            width: 95px;
        }
    </style>
</head>
