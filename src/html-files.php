---
title: HTML Files
current_nav_item: html-files
layout: src/_includes/base.php
---

<h2>--- metadata.title ---</h2>

<p>For more advanced sites that could benefit from things like loops and conditionals etc will need to use <a href="/php-files">PHP files</a>, but if your site is even simplier, then you just need HTML.</p>

<p>StaticPHP takes away the headache of using HTML files with a static site. You still need PHP for running StaticPHP, but you don't need to write any PHP code for your site during development.</p>

<p>Combining StaticPHP's <a href="/metadata">MetaData</a> feature with HTML files gives you the power to develop your site using only HTML files without any PHP, and best of all, no headache that comes with HTML files.</p>

<p><b>BUG:</b> At the time of writting, there is a known bug where you cannot combine an HTML file with a PHP base layout in MetaData. This is due to PHP not executing when processing HTML files, and is intended behaviour. A fix may be implemented in the future.</p>
