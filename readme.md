<html>
<body>
<div id="readme" class="readme boxed-group clearfix announce instapaper_body md" >
    <h3>
      <svg aria-hidden="true" class="octicon octicon-book" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"></path></svg>
      readme.md
    </h3>

      <article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-laravel-php-framework" class="anchor" href="#laravel-php-framework" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel PHP Framework</h1>

<p><a href="https://travis-ci.org/laravel/framework"><img src="https://camo.githubusercontent.com/88861b709123d23a028c2fd3ee2362d4d0a74927/68747470733a2f2f7472617669732d63692e6f72672f6c61726176656c2f6672616d65776f726b2e737667" alt="Build Status" data-canonical-src="https://travis-ci.org/laravel/framework.svg" style="max-width:100%;"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://camo.githubusercontent.com/5a674002b5c53d66601b1d59a8ac60353aa96000/68747470733a2f2f706f7365722e707567782e6f72672f6c61726176656c2f6672616d65776f726b2f642f746f74616c2e737667" alt="Total Downloads" data-canonical-src="https://poser.pugx.org/laravel/framework/d/total.svg" style="max-width:100%;"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://camo.githubusercontent.com/de9d7ef724aa9d01338f48bfb115a258047e23b6/68747470733a2f2f706f7365722e707567782e6f72672f6c61726176656c2f6672616d65776f726b2f762f737461626c652e737667" alt="Latest Stable Version" data-canonical-src="https://poser.pugx.org/laravel/framework/v/stable.svg" style="max-width:100%;"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://camo.githubusercontent.com/eb5212eb268ceba0175832a46b0731f9f176d07d/68747470733a2f2f706f7365722e707567782e6f72672f6c61726176656c2f6672616d65776f726b2f762f756e737461626c652e737667" alt="Latest Unstable Version" data-canonical-src="https://poser.pugx.org/laravel/framework/v/unstable.svg" style="max-width:100%;"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://camo.githubusercontent.com/e65c945b219ec6c6f63826a83df905b3191ae52c/68747470733a2f2f706f7365722e707567782e6f72672f6c61726176656c2f6672616d65776f726b2f6c6963656e73652e737667" alt="License" data-canonical-src="https://poser.pugx.org/laravel/framework/license.svg" style="max-width:100%;"></a></p>

<h2><a id="user-content-requirements" class="anchor" href="#requirements" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Requirements</h2>

<ul>
<li>Laravel <code>^5.2</code> - Because of changed routing middleware and unsupported package <code>illuminate/html</code></li>
</ul>

<h3><a id="user-content-laravel-5111-users-info" class="anchor" href="#laravel-5111-users-info" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 5.1.11 users info!</h3>

<p>To use Quickadmin with Laravel Laravel 5.1.11 use branch <code>0.4.x</code></p>

<h2><a id="user-content-quick-admin-installation" class="anchor" href="#quick-admin-installation" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Quick Admin installation</h2>

<h3><a id="user-content-please-note-quickadmin-requires-fresh-laravel-installation" class="anchor" href="#please-note-quickadmin-requires-fresh-laravel-installation" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Please note: QuickAdmin requires fresh Laravel installation</h3>

<ul>
<li>Configure your .env with the correct database information.</li>
</ul>

<div class="highlight highlight-text-html-php"><pre><span class="pl-s1"> <span class="pl-c1">1</span><span class="pl-k">.</span> <span class="pl-c1">Database</span> <span class="pl-c1">connection</span> <span class="pl-c1">is</span> <span class="pl-c1">required</span><span class="pl-k">.</span> <span class="pl-c1">Check</span> <span class="pl-c1">your</span> <span class="pl-s"><span class="pl-pds">`</span>.env<span class="pl-pds">`</span></span> <span class="pl-c1">file</span><span class="pl-k">.</span></span>
<span class="pl-s1"> <span class="pl-c1">2</span><span class="pl-k">.</span> <span class="pl-c1">Create</span> <span class="pl-c1">database</span><span class="pl-k">.</span></span></pre></div>

<ul>
<li>Install the package via <code>composer require laraveldaily/quickadmin</code>.</li>
<li>Run <code>php artisan quickadmin:install</code> and fill the required information.</li>
<li>Run <code>php artisan key:generate</code>.</li>
<li>Run <code>php artisan migrate --path=database/dataFix</code>.</li>
</ul>

<div class="highlight highlight-text-html-php"><pre><span class="pl-s1"><span class="pl-c1">Revert</span> <span class="pl-c1">All</span> <span class="pl-c1">change</span> <span class="pl-c1">file</span> (<span class="pl-k">if</span> <span class="pl-c1">nothing</span> <span class="pl-c1">change</span> <span class="pl-k">use</span>)</span></pre></div>

<ul>
<li>Access QuickAdmin panel by visiting <code>http://yourdomain/admin</code>.</li>
</ul>

<div class="highlight highlight-text-html-php"><pre><span class="pl-s1"><span class="pl-c1">After</span> <span class="pl-c1">update</span></span>
<span class="pl-s1"><span class="pl-c1">Run</span> <span class="pl-s"><span class="pl-pds">`</span>php artisan migrate --path=database/dataFix<span class="pl-pds">`</span></span><span class="pl-k">.</span></span></pre></div>

<p>اگر</p>

<h2><a id="user-content-more-information-and-detailed-description" class="anchor" href="#more-information-and-detailed-description" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>More information and detailed description</h2>

<p><a href="http://laraveldaily.com/packages/quickadmin/">http://laraveldaily.com/packages/quickadmin/</a></p>

<h2><a id="user-content-license" class="anchor" href="#license" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>License</h2>

<p>The MIT License (MIT). Please see <a href="/razzaghi/dializSheet/blob/master/license.md">License File</a> for more information.</p>

<p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.</p>

<p>Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.</p>

<h2><a id="user-content-official-documentation" class="anchor" href="#official-documentation" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Official Documentation</h2>

<p>Documentation for the framework can be found on the <a href="http://laravel.com/docs">Laravel website</a>.</p>

<h2><a id="user-content-contributing" class="anchor" href="#contributing" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Contributing</h2>

<p>Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the <a href="http://laravel.com/docs/contributions">Laravel documentation</a>.</p>

<h2><a id="user-content-security-vulnerabilities" class="anchor" href="#security-vulnerabilities" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Security Vulnerabilities</h2>

<p>If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at <a href="mailto:taylor@laravel.com">taylor@laravel.com</a>. All security vulnerabilities will be promptly addressed.</p>

<h2><a id="user-content-license-1" class="anchor" href="#license-1" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>License</h2>

<p>The Laravel framework is open-sourced software licensed under the <a href="http://opensource.org/licenses/MIT">MIT license</a>.</p>
</article>
  </div>
  </body>
  </html>