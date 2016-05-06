<style type="text/css">
    
/*! HTML5 Boilerplate v5.0 | MIT License | http://h5bp.com/ */

html {
    color: #222;
    font-size: 1em;
    line-height: 1.4;
    font-family: tahoma;
}

body {
    background-color: #F3F3F3;
    /*background-color: #FFFFFF;*/
}

::-moz-selection {
    background: #b3d4fc;
    text-shadow: none;
}

::selection {
    background: #b3d4fc;
    text-shadow: none;
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

pre {
    font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
    font-size: 12px;
    border: 1px solid #D8D8D8;
    margin-bottom: 10px;
    overflow: auto;
    width: auto;
    padding: 5px;
    background-color: #eee;
    max-height: 600px;
}

pre span{
    color: #2f6f9f;
}

code {
    font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
    font-size: 12px;
    margin-bottom: 10px;
    overflow: auto;
    width: auto;
    padding: 5px;
    background-color: #eee;
    max-height: 600px;
    color: #C7254E;
}

code span{
    color: #C7254E;
}

kbd {
    padding: 2px 4px;
    font-size: 90%;
    color: #fff;
    background-color: #333;
    
}



h1,h2,h3,h4,h5,h6{
    font-family: arial;
    font-weight: normal;
}



audio,
canvas,
iframe,
img,
svg,
video {
    vertical-align: middle;
}

fieldset {
    border: 0;
    margin: 0;
    padding: 0;
}

textarea {
    resize: vertical;
}

.browserupgrade {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}



/* ==========================================================================
   Media Queries
   ========================================================================== */

@media only screen and (min-width: 35em) {

}

@media print,
       (-o-min-device-pixel-ratio: 5/4),
       (-webkit-min-device-pixel-ratio: 1.25),
       (min-resolution: 120dpi) {

}

/* ==========================================================================
   Helper classes
   ========================================================================== */

.hidden {
    display: none !important;
    visibility: hidden;
}

.visuallyhidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

.invisible {
    visibility: hidden;
}

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}

.clearfix {
    *zoom: 1;
}

/* ==========================================================================
   Print styles
   ========================================================================== */

@media print {
    *,
    *:before,
    *:after {
        background: transparent !important;
        color: #000 !important;
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: " (" attr(href) ")";
    }

    abbr[title]:after {
        content: " (" attr(title) ")";
    }

    a[href^="#"]:after,
    a[href^="javascript:"]:after {
        content: "";
    }

    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }
    

    thead {
        display: table-header-group;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}


/* ==========================================================================
   SCREEN SIZES
   ========================================================================== */

/* --- Phone --- */

@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 750px)
  and (-webkit-min-device-pixel-ratio: 2) {
      
      div.header h1 span.site_title{
          display: none;
      }

}

/* Tablets */
@media only screen 
  and (min-device-width: 750px) 
  and (max-device-width: 1024px) 
  and (-webkit-min-device-pixel-ratio: 1) {
      
      div.header h1 span.site_title{
          display: none;
      }

}


/* --- Laptop --- */
@media screen 
  and (min-device-width: 1200px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 1) { 
}






/* ==========================================================================
   Author's custom styles
   ========================================================================== */


.hide_table{
    display: none;
}

.title_achors{
    text-decoration: none;
}

.title_icon{
    font-weight: normal;
    font-size: 16px;
}


/* TABLE CONTENTS */

table{
    color: #6C6F70;
}

th, td {
    padding: 2px;
}

table tr td sm
{
    font-size: 11px;
}

table tr td span.tbl_span{
    margin: 10px 0;
}


table tr td input[type=text],
table tr td input[type=password],
table tr td input[type=file]
{
    width: 93%;
}

table tr td a.link{
    text-decoration: none;
}



    
    
</style>