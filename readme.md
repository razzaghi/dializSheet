<html>
    <body>
        <div id="readme" class="readme boxed-group clearfix announce instapaper_body md">

                <h1>Laravel PHP Framework</h1>

            <h2>Requirements</h2>
            <ul>
                <li>Laravel <code>^5.2</code> - Because of changed routing middleware and unsupported package <code>illuminate/html</code></li>
            </ul>

            <h3>Laravel 5.1.11 users info!</h3>
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