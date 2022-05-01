<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.27.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.27.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                        <a href="#endpoints-POSTapi-login">Get a JWT via given credentials.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-images">
                        <a href="#endpoints-POSTapi-images">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-images">
                        <a href="#endpoints-DELETEapi-images">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-images--id-">
                        <a href="#endpoints-PUTapi-images--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-home">
                        <a href="#endpoints-GETapi-home">GET api/home</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-search">
                        <a href="#endpoints-POSTapi-search">POST api/search</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-users">
                        <a href="#endpoints-GETapi-users">GET api/users</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-users--id-">
                        <a href="#endpoints-GETapi-users--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-users--id-">
                        <a href="#endpoints-POSTapi-users--id-">update a User.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-users--id-">
                        <a href="#endpoints-DELETEapi-users--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-drivers">
                        <a href="#endpoints-GETapi-drivers">GET api/drivers</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-companies">
                        <a href="#endpoints-GETapi-companies">GET api/companies</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-companies--id-">
                        <a href="#endpoints-GETapi-companies--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-companies-company-accept--id-">
                        <a href="#endpoints-GETapi-companies-company-accept--id-">GET api/companies/company-accept/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-techniques-technique-accept--id-">
                        <a href="#endpoints-GETapi-techniques-technique-accept--id-">GET api/techniques/technique-accept/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-companies--id-">
                        <a href="#endpoints-POSTapi-companies--id-">Register a User.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-companies--id-">
                        <a href="#endpoints-DELETEapi-companies--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-technique-types">
                        <a href="#endpoints-GETapi-technique-types">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-technique-types--id-">
                        <a href="#endpoints-GETapi-technique-types--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-technique-types">
                        <a href="#endpoints-POSTapi-technique-types">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-technique-types--id-">
                        <a href="#endpoints-DELETEapi-technique-types--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-techniques-by-type--id-">
                        <a href="#endpoints-GETapi-techniques-by-type--id-">GET api/techniques-by-type/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-sliders">
                        <a href="#endpoints-GETapi-sliders">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-sliders">
                        <a href="#endpoints-POSTapi-sliders">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-sliders-update--id-">
                        <a href="#endpoints-POSTapi-sliders-update--id-">POST api/sliders/update/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-sliders--id-">
                        <a href="#endpoints-GETapi-sliders--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-sliders--id-">
                        <a href="#endpoints-DELETEapi-sliders--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-pages">
                        <a href="#endpoints-GETapi-pages">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-pages">
                        <a href="#endpoints-POSTapi-pages">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-pages--id-">
                        <a href="#endpoints-PUTapi-pages--id-">PUT api/pages/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-pages--id-">
                        <a href="#endpoints-GETapi-pages--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-pages--id-">
                        <a href="#endpoints-DELETEapi-pages--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-state">
                        <a href="#endpoints-GETapi-state">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-state">
                        <a href="#endpoints-POSTapi-state">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-state--id-">
                        <a href="#endpoints-GETapi-state--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-state--id-">
                        <a href="#endpoints-DELETEapi-state--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-countries">
                        <a href="#endpoints-GETapi-countries">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-countries">
                        <a href="#endpoints-POSTapi-countries">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-countries--id-">
                        <a href="#endpoints-GETapi-countries--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-countries--id-">
                        <a href="#endpoints-DELETEapi-countries--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-requests-all">
                        <a href="#endpoints-GETapi-requests-all">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-requests">
                        <a href="#endpoints-GETapi-requests">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-requests--id-">
                        <a href="#endpoints-GETapi-requests--id-">GET api/requests/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-requests--id--answers">
                        <a href="#endpoints-GETapi-requests--id--answers">GET api/requests/{id}/answers</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-requests">
                        <a href="#endpoints-POSTapi-requests">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-requests--id-">
                        <a href="#endpoints-PUTapi-requests--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-requests--id-">
                        <a href="#endpoints-DELETEapi-requests--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-requests--id--answersCancel">
                        <a href="#endpoints-GETapi-requests--id--answersCancel">GET api/requests/{id}/answersCancel</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-requests-status-0">
                        <a href="#endpoints-GETapi-requests-status-0">GET api/requests/status/0</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-requests-status-1">
                        <a href="#endpoints-GETapi-requests-status-1">GET api/requests/status/1</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-user-register">
                        <a href="#endpoints-POSTapi-user-register">Register a User.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-user-logout">
                        <a href="#endpoints-POSTapi-user-logout">Log the user out (Invalidate the token).</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-user-refresh">
                        <a href="#endpoints-POSTapi-user-refresh">Refresh a token.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-user-update">
                        <a href="#endpoints-POSTapi-user-update">POST api/user/update</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user-user-profile">
                        <a href="#endpoints-GETapi-user-user-profile">Get the authenticated User.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user-images">
                        <a href="#endpoints-GETapi-user-images">GET api/user/images</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-techniques">
                        <a href="#endpoints-GETapi-techniques">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-techniques-all">
                        <a href="#endpoints-GETapi-techniques-all">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-techniques">
                        <a href="#endpoints-POSTapi-techniques">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-techniques--id-">
                        <a href="#endpoints-GETapi-techniques--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-techniques--id-">
                        <a href="#endpoints-DELETEapi-techniques--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-techniques--id-">
                        <a href="#endpoints-POSTapi-techniques--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-techniques--id--images">
                        <a href="#endpoints-GETapi-techniques--id--images">GET api/techniques/{id}/images</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-routes-all">
                        <a href="#endpoints-GETapi-routes-all">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-routes">
                        <a href="#endpoints-GETapi-routes">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-routes--id-">
                        <a href="#endpoints-GETapi-routes--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-routes">
                        <a href="#endpoints-POSTapi-routes">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-routes--id-">
                        <a href="#endpoints-DELETEapi-routes--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-routes--id-">
                        <a href="#endpoints-PUTapi-routes--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-request-answers-all">
                        <a href="#endpoints-GETapi-request-answers-all">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-request-answers">
                        <a href="#endpoints-GETapi-request-answers">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-request-answers--id-">
                        <a href="#endpoints-GETapi-request-answers--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-request-answers">
                        <a href="#endpoints-POSTapi-request-answers">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-request-answers--id-">
                        <a href="#endpoints-DELETEapi-request-answers--id-">Remove the specified resource from storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-request-answers--id-">
                        <a href="#endpoints-PUTapi-request-answers--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-request-answers--id--accept">
                        <a href="#endpoints-GETapi-request-answers--id--accept">only authenticated user can accept
and change status of requests and request_answers tables</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-request-answers--id--cancel">
                        <a href="#endpoints-GETapi-request-answers--id--cancel">only authenticated user can cancel and
change status to -1</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-company-register">
                        <a href="#endpoints-POSTapi-company-register">Register a Company.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-company-logout">
                        <a href="#endpoints-POSTapi-company-logout">Log the company out (Invalidate the token).</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-company-refresh">
                        <a href="#endpoints-POSTapi-company-refresh">Refresh a token.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-company-update">
                        <a href="#endpoints-POSTapi-company-update">POST api/company/update</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-company-company-profile">
                        <a href="#endpoints-GETapi-company-company-profile">Get the authenticated Company.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-company-images">
                        <a href="#endpoints-GETapi-company-images">GET api/company/images</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="login-and-admin-authentication">
                    <a href="#login-and-admin-authentication">Login and Admin Authentication</a>
                </li>
                                    <ul id="tocify-subheader-login-and-admin-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="login-and-admin-authentication-POSTapi-admin-logout">
                        <a href="#login-and-admin-authentication-POSTapi-admin-logout">Log the admin out (Invalidate the token).</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="login-and-admin-authentication-POSTapi-admin-refresh">
                        <a href="#login-and-admin-authentication-POSTapi-admin-refresh">Refresh an admin token.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="login-and-admin-authentication-GETapi-admin-admin-profile">
                        <a href="#login-and-admin-authentication-GETapi-admin-admin-profile">Get the authenticated admin.</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 1 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-POSTapi-login">Get a JWT via given credentials.</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"ricky.stoltenberg@example.net\",
    \"password\": \"kvfuv\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ricky.stoltenberg@example.net",
    "password": "kvfuv"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-login"
               value="ricky.stoltenberg@example.net"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-login"
               value="kvfuv"
               data-component="body" hidden>
    <br>
<p>Must be at least 6 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-POSTapi-images">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-images">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/images" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"quisquam\",
    \"owner_id\": \"est\",
    \"image\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/images"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "quisquam",
    "owner_id": "est",
    "image": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-images">
</span>
<span id="execution-results-POSTapi-images" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-images"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-images"></code></pre>
</span>
<span id="execution-error-POSTapi-images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-images"></code></pre>
</span>
<form id="form-POSTapi-images" data-method="POST"
      data-path="api/images"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-images', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-images"
                    onclick="tryItOut('POSTapi-images');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-images"
                    onclick="cancelTryOut('POSTapi-images');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-images" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/images</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="POSTapi-images"
               value="quisquam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>owner_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="owner_id"
               data-endpoint="POSTapi-images"
               value="est"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="image"
               data-endpoint="POSTapi-images"
               value="architecto"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-images">Remove the specified resource from storage.</h2>

<p>
</p>

<p>owner_id is needed when deleting image of technique
owner_id is technique id,
id is image's id</p>

<span id="example-requests-DELETEapi-images">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/images" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"labore\",
    \"id\": \"sequi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/images"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "labore",
    "id": "sequi"
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-images">
</span>
<span id="execution-results-DELETEapi-images" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-images"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-images"></code></pre>
</span>
<span id="execution-error-DELETEapi-images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-images"></code></pre>
</span>
<form id="form-DELETEapi-images" data-method="DELETE"
      data-path="api/images"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-images', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-images"
                    onclick="tryItOut('DELETEapi-images');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-images"
                    onclick="cancelTryOut('DELETEapi-images');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-images" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/images</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="DELETEapi-images"
               value="labore"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-images"
               value="sequi"
               data-component="body" hidden>
    <br>
<p>&quot;owner_id&quot;     =&gt; 'required',.</p>
        </p>
        </form>

            <h2 id="endpoints-PUTapi-images--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-images--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/images/15" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"a\",
    \"owner_id\": \"labore\",
    \"image\": \"temporibus\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/images/15"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "a",
    "owner_id": "labore",
    "image": "temporibus"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-images--id-">
</span>
<span id="execution-results-PUTapi-images--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-images--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-images--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-images--id-"></code></pre>
</span>
<form id="form-PUTapi-images--id-" data-method="PUT"
      data-path="api/images/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-images--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-images--id-"
                    onclick="tryItOut('PUTapi-images--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-images--id-"
                    onclick="cancelTryOut('PUTapi-images--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-images--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/images/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-images--id-"
               value="15"
               data-component="url" hidden>
    <br>
<p>The ID of the image.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="PUTapi-images--id-"
               value="a"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>owner_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="owner_id"
               data-endpoint="PUTapi-images--id-"
               value="labore"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="image"
               data-endpoint="PUTapi-images--id-"
               value="temporibus"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-home">GET api/home</h2>

<p>
</p>



<span id="example-requests-GETapi-home">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/home" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/home"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-home">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;routes&quot;: {
        &quot;data&quot;: [],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/home?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/home?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/home?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/home&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;sliders&quot;: {
        &quot;data&quot;: [],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/home?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/home?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/home?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/home&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;countries&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Belgium&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Brazil&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Cambodia&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Cape Verde&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Equatorial Guinea&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Faroe Islands&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Grenada&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Saint Barthelemy&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Solomon Islands&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Tonga&quot;
            }
        ]
    },
    &quot;companies&quot;: {
        &quot;data&quot;: [],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/home?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/home?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/home?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/home&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;techniquetype&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;aut&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;quia&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;molestiae&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;dicta&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;ea&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;quia&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;consectetur&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;necessitatibus&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;voluptatum&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;quidem&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost/api/home?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost/api/home?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/home?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost/api/home&quot;,
        &quot;per_page&quot;: 20,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 10
    },
    &quot;pages&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [],
        &quot;first_page_url&quot;: &quot;http://localhost/api/home?page=1&quot;,
        &quot;from&quot;: null,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost/api/home?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/home?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost/api/home&quot;,
        &quot;per_page&quot;: 20,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: null,
        &quot;total&quot;: 0
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-home" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-home"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-home"></code></pre>
</span>
<span id="execution-error-GETapi-home" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-home"></code></pre>
</span>
<form id="form-GETapi-home" data-method="GET"
      data-path="api/home"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-home', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-home"
                    onclick="tryItOut('GETapi-home');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-home"
                    onclick="cancelTryOut('GETapi-home');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-home" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/home</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-search">POST api/search</h2>

<p>
</p>



<span id="example-requests-POSTapi-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"necessitatibus\",
    \"q\": \"voluptatum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "necessitatibus",
    "q": "voluptatum"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-search">
</span>
<span id="execution-results-POSTapi-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-search"></code></pre>
</span>
<span id="execution-error-POSTapi-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-search"></code></pre>
</span>
<form id="form-POSTapi-search" data-method="POST"
      data-path="api/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-search"
                    onclick="tryItOut('POSTapi-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-search"
                    onclick="cancelTryOut('POSTapi-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-search" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/search</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="POSTapi-search"
               value="necessitatibus"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>q</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="q"
               data-endpoint="POSTapi-search"
               value="voluptatum"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-users">GET api/users</h2>

<p>
</p>



<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Heber Bauch&quot;,
                &quot;email&quot;: &quot;rbernier@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Brazil&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;+1-703-499-8029&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Miss Mattie Olson III&quot;,
                &quot;email&quot;: &quot;randall17@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 4,
                    &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;781-277-7572&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Jacklyn Olson&quot;,
                &quot;email&quot;: &quot;gideon35@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;Cape Verde&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;+1.314.294.8549&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Benedict Corkery&quot;,
                &quot;email&quot;: &quot;schumm.dena@example.org&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Solomon Islands&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;1-972-657-9964&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Rosemary Hickle&quot;,
                &quot;email&quot;: &quot;yquigley@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Belgium&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;(551) 508-2663&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Dr. Idell Wisozk Sr.&quot;,
                &quot;email&quot;: &quot;lew.heidenreich@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Faroe Islands&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;541-729-6278&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Gia McKenzie&quot;,
                &quot;email&quot;: &quot;padberg.chelsey@example.org&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 10,
                    &quot;title&quot;: &quot;Equatorial Guinea&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;272.306.9221&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Dr. Helen Powlowski&quot;,
                &quot;email&quot;: &quot;emmanuelle.feil@example.com&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Belgium&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;480-465-9582&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Dr. Patricia Friesen PhD&quot;,
                &quot;email&quot;: &quot;dsenger@example.org&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Solomon Islands&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;+1.458.699.4344&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            },
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Dr. Sandra Lesch DDS&quot;,
                &quot;email&quot;: &quot;douglas.alexandrine@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;Tonga&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;989-254-7085&quot;,
                &quot;address&quot;: &quot;Ashgabat&quot;,
                &quot;passport_no&quot;: &quot;######&quot;,
                &quot;avatar&quot;: null
            }
        ],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/users?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/users?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/users?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/users&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: 10,
            &quot;total&quot;: 10
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-users--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Rosemary Hickle&quot;,
        &quot;email&quot;: &quot;yquigley@example.net&quot;,
        &quot;country&quot;: {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Belgium&quot;,
            &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
        },
        &quot;phone&quot;: &quot;(551) 508-2663&quot;,
        &quot;address&quot;: &quot;Ashgabat&quot;,
        &quot;passport_no&quot;: &quot;######&quot;,
        &quot;avatar&quot;: null
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"></code></pre>
</span>
<span id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-"></code></pre>
</span>
<form id="form-GETapi-users--id-" data-method="GET"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id-"
                    onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id-"
                    onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-users--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-users--id-">update a User.</h2>

<p>
</p>



<span id="example-requests-POSTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/users/12" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/12"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users--id-">
</span>
<span id="execution-results-POSTapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users--id-"></code></pre>
</span>
<span id="execution-error-POSTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users--id-"></code></pre>
</span>
<form id="form-POSTapi-users--id-" data-method="POST"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users--id-"
                    onclick="tryItOut('POSTapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users--id-"
                    onclick="cancelTryOut('POSTapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="POSTapi-users--id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-users--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/users/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--id-">
</span>
<span id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-"></code></pre>
</span>
<form id="form-DELETEapi-users--id-" data-method="DELETE"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--id-"
                    onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--id-"
                    onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-users--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-drivers">GET api/drivers</h2>

<p>
</p>



<span id="example-requests-GETapi-drivers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/drivers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/drivers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-drivers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Yvonne Feil&quot;,
                &quot;email&quot;: &quot;fjones@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 4,
                    &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;(931) 982-4690&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            },
            {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Dr. Julius Wilkinson MD&quot;,
                &quot;email&quot;: &quot;ebert.wallace@example.com&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;Cape Verde&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;561.342.7425&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            },
            {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Alfredo Hauck&quot;,
                &quot;email&quot;: &quot;leone.heidenreich@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Belgium&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;+1.347.651.3688&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            },
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Van Kuvalis&quot;,
                &quot;email&quot;: &quot;abigayle31@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Cambodia&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;+1-339-536-1721&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            }
        ],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/drivers?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/drivers?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/drivers?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/drivers&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: 4,
            &quot;total&quot;: 4
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-drivers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-drivers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-drivers"></code></pre>
</span>
<span id="execution-error-GETapi-drivers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-drivers"></code></pre>
</span>
<form id="form-GETapi-drivers" data-method="GET"
      data-path="api/drivers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-drivers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-drivers"
                    onclick="tryItOut('GETapi-drivers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-drivers"
                    onclick="cancelTryOut('GETapi-drivers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-drivers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/drivers</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-companies">GET api/companies</h2>

<p>
</p>



<span id="example-requests-GETapi-companies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/companies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/companies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-companies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Miss Jane Thompson DVM&quot;,
                &quot;email&quot;: &quot;eleanora.schroeder@example.org&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Solomon Islands&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;352-749-3552&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Prof. Chyna Dietrich IV&quot;,
                &quot;email&quot;: &quot;harber.jazmyne@example.com&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Brazil&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;(480) 314-7805&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Lucinda Mueller&quot;,
                &quot;email&quot;: &quot;wrice@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Brazil&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;(231) 489-8592&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Miss Jazmin Kshlerin&quot;,
                &quot;email&quot;: &quot;zstokes@example.net&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Solomon Islands&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;+1-501-661-2717&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Robbie Schulist&quot;,
                &quot;email&quot;: &quot;reinger.eleazar@example.org&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Solomon Islands&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;+1 (531) 290-3779&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            },
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Dr. Nils Frami&quot;,
                &quot;email&quot;: &quot;merritt.ebert@example.org&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 4,
                    &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                },
                &quot;phone&quot;: &quot;1-440-478-3371&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: 0,
                &quot;short_description&quot;: null,
                &quot;description&quot;: [],
                &quot;avatar&quot;: &quot;&quot;,
                &quot;auto_model&quot;: null,
                &quot;accepted&quot;: 0,
                &quot;car_year&quot;: null,
                &quot;car_number&quot;: null,
                &quot;owner&quot;: null
            }
        ],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/companies?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/companies?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/companies?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/companies&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: 6,
            &quot;total&quot;: 6
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-companies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-companies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-companies"></code></pre>
</span>
<span id="execution-error-GETapi-companies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-companies"></code></pre>
</span>
<form id="form-GETapi-companies" data-method="GET"
      data-path="api/companies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-companies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-companies"
                    onclick="tryItOut('GETapi-companies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-companies"
                    onclick="cancelTryOut('GETapi-companies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-companies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/companies</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-companies--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-companies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/companies/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/companies/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-companies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: {},
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-companies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-companies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-companies--id-"></code></pre>
</span>
<span id="execution-error-GETapi-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-companies--id-"></code></pre>
</span>
<form id="form-GETapi-companies--id-" data-method="GET"
      data-path="api/companies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-companies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-companies--id-"
                    onclick="tryItOut('GETapi-companies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-companies--id-"
                    onclick="cancelTryOut('GETapi-companies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-companies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/companies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-companies--id-"
               value="17"
               data-component="url" hidden>
    <br>
<p>The ID of the company.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-companies-company-accept--id-">GET api/companies/company-accept/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-companies-company-accept--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/companies/company-accept/et" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/companies/company-accept/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-companies-company-accept--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-companies-company-accept--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-companies-company-accept--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-companies-company-accept--id-"></code></pre>
</span>
<span id="execution-error-GETapi-companies-company-accept--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-companies-company-accept--id-"></code></pre>
</span>
<form id="form-GETapi-companies-company-accept--id-" data-method="GET"
      data-path="api/companies/company-accept/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-companies-company-accept--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-companies-company-accept--id-"
                    onclick="tryItOut('GETapi-companies-company-accept--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-companies-company-accept--id-"
                    onclick="cancelTryOut('GETapi-companies-company-accept--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-companies-company-accept--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/companies/company-accept/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-companies-company-accept--id-"
               value="et"
               data-component="url" hidden>
    <br>
<p>The ID of the company accept.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-techniques-technique-accept--id-">GET api/techniques/technique-accept/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-techniques-technique-accept--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/techniques/technique-accept/ut" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques/technique-accept/ut"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-techniques-technique-accept--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: {},
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-techniques-technique-accept--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-techniques-technique-accept--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-techniques-technique-accept--id-"></code></pre>
</span>
<span id="execution-error-GETapi-techniques-technique-accept--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-techniques-technique-accept--id-"></code></pre>
</span>
<form id="form-GETapi-techniques-technique-accept--id-" data-method="GET"
      data-path="api/techniques/technique-accept/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-techniques-technique-accept--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-techniques-technique-accept--id-"
                    onclick="tryItOut('GETapi-techniques-technique-accept--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-techniques-technique-accept--id-"
                    onclick="cancelTryOut('GETapi-techniques-technique-accept--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-techniques-technique-accept--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/techniques/technique-accept/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-techniques-technique-accept--id-"
               value="ut"
               data-component="url" hidden>
    <br>
<p>The ID of the technique accept.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-companies--id-">Register a User.</h2>

<p>
</p>



<span id="example-requests-POSTapi-companies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/companies/10" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/companies/10"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-companies--id-">
</span>
<span id="execution-results-POSTapi-companies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-companies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-companies--id-"></code></pre>
</span>
<span id="execution-error-POSTapi-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-companies--id-"></code></pre>
</span>
<form id="form-POSTapi-companies--id-" data-method="POST"
      data-path="api/companies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-companies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-companies--id-"
                    onclick="tryItOut('POSTapi-companies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-companies--id-"
                    onclick="cancelTryOut('POSTapi-companies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-companies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/companies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="POSTapi-companies--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the company.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-companies--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-companies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/companies/14" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/companies/14"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-companies--id-">
</span>
<span id="execution-results-DELETEapi-companies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-companies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-companies--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-companies--id-"></code></pre>
</span>
<form id="form-DELETEapi-companies--id-" data-method="DELETE"
      data-path="api/companies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-companies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-companies--id-"
                    onclick="tryItOut('DELETEapi-companies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-companies--id-"
                    onclick="cancelTryOut('DELETEapi-companies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-companies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/companies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-companies--id-"
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the company.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-technique-types">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-technique-types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/technique-types" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/technique-types"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-technique-types">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;aut&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;quia&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;molestiae&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;dicta&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;ea&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;quia&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;consectetur&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;necessitatibus&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;voluptatum&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;quidem&quot;,
                &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost/api/technique-types?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost/api/technique-types?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/technique-types?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost/api/technique-types&quot;,
        &quot;per_page&quot;: 20,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 10
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-technique-types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-technique-types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-technique-types"></code></pre>
</span>
<span id="execution-error-GETapi-technique-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-technique-types"></code></pre>
</span>
<form id="form-GETapi-technique-types" data-method="GET"
      data-path="api/technique-types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-technique-types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-technique-types"
                    onclick="tryItOut('GETapi-technique-types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-technique-types"
                    onclick="cancelTryOut('GETapi-technique-types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-technique-types" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/technique-types</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-technique-types--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-technique-types--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/technique-types/maiores" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/technique-types/maiores"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-technique-types--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-technique-types--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-technique-types--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-technique-types--id-"></code></pre>
</span>
<span id="execution-error-GETapi-technique-types--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-technique-types--id-"></code></pre>
</span>
<form id="form-GETapi-technique-types--id-" data-method="GET"
      data-path="api/technique-types/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-technique-types--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-technique-types--id-"
                    onclick="tryItOut('GETapi-technique-types--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-technique-types--id-"
                    onclick="cancelTryOut('GETapi-technique-types--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-technique-types--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/technique-types/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-technique-types--id-"
               value="maiores"
               data-component="url" hidden>
    <br>
<p>The ID of the technique type.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-technique-types">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-technique-types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/technique-types" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"voluptatum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/technique-types"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "voluptatum"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-technique-types">
</span>
<span id="execution-results-POSTapi-technique-types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-technique-types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-technique-types"></code></pre>
</span>
<span id="execution-error-POSTapi-technique-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-technique-types"></code></pre>
</span>
<form id="form-POSTapi-technique-types" data-method="POST"
      data-path="api/technique-types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-technique-types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-technique-types"
                    onclick="tryItOut('POSTapi-technique-types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-technique-types"
                    onclick="cancelTryOut('POSTapi-technique-types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-technique-types" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/technique-types</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-technique-types"
               value="voluptatum"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-technique-types--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-technique-types--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/technique-types/sed" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/technique-types/sed"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-technique-types--id-">
</span>
<span id="execution-results-DELETEapi-technique-types--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-technique-types--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-technique-types--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-technique-types--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-technique-types--id-"></code></pre>
</span>
<form id="form-DELETEapi-technique-types--id-" data-method="DELETE"
      data-path="api/technique-types/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-technique-types--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-technique-types--id-"
                    onclick="tryItOut('DELETEapi-technique-types--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-technique-types--id-"
                    onclick="cancelTryOut('DELETEapi-technique-types--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-technique-types--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/technique-types/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-technique-types--id-"
               value="sed"
               data-component="url" hidden>
    <br>
<p>The ID of the technique type.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-techniques-by-type--id-">GET api/techniques-by-type/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-techniques-by-type--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/techniques-by-type/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques-by-type/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-techniques-by-type--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: {},
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-techniques-by-type--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-techniques-by-type--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-techniques-by-type--id-"></code></pre>
</span>
<span id="execution-error-GETapi-techniques-by-type--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-techniques-by-type--id-"></code></pre>
</span>
<form id="form-GETapi-techniques-by-type--id-" data-method="GET"
      data-path="api/techniques-by-type/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-techniques-by-type--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-techniques-by-type--id-"
                    onclick="tryItOut('GETapi-techniques-by-type--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-techniques-by-type--id-"
                    onclick="cancelTryOut('GETapi-techniques-by-type--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-techniques-by-type--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/techniques-by-type/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-techniques-by-type--id-"
               value="consequatur"
               data-component="url" hidden>
    <br>
<p>The ID of the techniques by type.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-sliders">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-sliders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/sliders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sliders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-sliders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/sliders?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/sliders?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/sliders?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/sliders&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-sliders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-sliders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sliders"></code></pre>
</span>
<span id="execution-error-GETapi-sliders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sliders"></code></pre>
</span>
<form id="form-GETapi-sliders" data-method="GET"
      data-path="api/sliders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-sliders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-sliders"
                    onclick="tryItOut('GETapi-sliders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-sliders"
                    onclick="cancelTryOut('GETapi-sliders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-sliders" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/sliders</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-sliders">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-sliders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/sliders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title_tm\": \"voluptatem\",
    \"title_ru\": \"similique\",
    \"title_en\": \"consequatur\",
    \"description_tm\": \"perferendis\",
    \"description_ru\": \"a\",
    \"description_en\": \"ullam\",
    \"url\": \"eum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sliders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title_tm": "voluptatem",
    "title_ru": "similique",
    "title_en": "consequatur",
    "description_tm": "perferendis",
    "description_ru": "a",
    "description_en": "ullam",
    "url": "eum"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-sliders">
</span>
<span id="execution-results-POSTapi-sliders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-sliders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-sliders"></code></pre>
</span>
<span id="execution-error-POSTapi-sliders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-sliders"></code></pre>
</span>
<form id="form-POSTapi-sliders" data-method="POST"
      data-path="api/sliders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-sliders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-sliders"
                    onclick="tryItOut('POSTapi-sliders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-sliders"
                    onclick="cancelTryOut('POSTapi-sliders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-sliders" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/sliders</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title_tm</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title_tm"
               data-endpoint="POSTapi-sliders"
               value="voluptatem"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title_ru</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title_ru"
               data-endpoint="POSTapi-sliders"
               value="similique"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title_en</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title_en"
               data-endpoint="POSTapi-sliders"
               value="consequatur"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description_tm</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description_tm"
               data-endpoint="POSTapi-sliders"
               value="perferendis"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description_ru</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description_ru"
               data-endpoint="POSTapi-sliders"
               value="a"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description_en</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description_en"
               data-endpoint="POSTapi-sliders"
               value="ullam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="url"
               data-endpoint="POSTapi-sliders"
               value="eum"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-POSTapi-sliders-update--id-">POST api/sliders/update/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-sliders-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/sliders/update/quasi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sliders/update/quasi"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-sliders-update--id-">
</span>
<span id="execution-results-POSTapi-sliders-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-sliders-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-sliders-update--id-"></code></pre>
</span>
<span id="execution-error-POSTapi-sliders-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-sliders-update--id-"></code></pre>
</span>
<form id="form-POSTapi-sliders-update--id-" data-method="POST"
      data-path="api/sliders/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-sliders-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-sliders-update--id-"
                    onclick="tryItOut('POSTapi-sliders-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-sliders-update--id-"
                    onclick="cancelTryOut('POSTapi-sliders-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-sliders-update--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/sliders/update/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="POSTapi-sliders-update--id-"
               value="quasi"
               data-component="url" hidden>
    <br>
<p>The ID of the update.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-sliders--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-sliders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/sliders/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sliders/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-sliders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: [],
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-sliders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-sliders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-sliders--id-"></code></pre>
</span>
<span id="execution-error-GETapi-sliders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-sliders--id-"></code></pre>
</span>
<form id="form-GETapi-sliders--id-" data-method="GET"
      data-path="api/sliders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-sliders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-sliders--id-"
                    onclick="tryItOut('GETapi-sliders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-sliders--id-"
                    onclick="cancelTryOut('GETapi-sliders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-sliders--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/sliders/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-sliders--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the slider.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-sliders--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-sliders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/sliders/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sliders/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-sliders--id-">
</span>
<span id="execution-results-DELETEapi-sliders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-sliders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-sliders--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-sliders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-sliders--id-"></code></pre>
</span>
<form id="form-DELETEapi-sliders--id-" data-method="DELETE"
      data-path="api/sliders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-sliders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-sliders--id-"
                    onclick="tryItOut('DELETEapi-sliders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-sliders--id-"
                    onclick="cancelTryOut('DELETEapi-sliders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-sliders--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/sliders/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-sliders--id-"
               value="3"
               data-component="url" hidden>
    <br>
<p>The ID of the slider.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-pages">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-pages">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pages" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pages"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pages">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [],
        &quot;first_page_url&quot;: &quot;http://localhost/api/pages?page=1&quot;,
        &quot;from&quot;: null,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost/api/pages?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/pages?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost/api/pages&quot;,
        &quot;per_page&quot;: 20,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: null,
        &quot;total&quot;: 0
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pages" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pages"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pages"></code></pre>
</span>
<span id="execution-error-GETapi-pages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pages"></code></pre>
</span>
<form id="form-GETapi-pages" data-method="GET"
      data-path="api/pages"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pages', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pages"
                    onclick="tryItOut('GETapi-pages');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pages"
                    onclick="cancelTryOut('GETapi-pages');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pages" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pages</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-pages">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-pages">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/pages" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title_tm\": \"autem\",
    \"title_ru\": \"aut\",
    \"title_en\": \"laborum\",
    \"path\": \"optio\",
    \"is_published\": 20
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pages"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title_tm": "autem",
    "title_ru": "aut",
    "title_en": "laborum",
    "path": "optio",
    "is_published": 20
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-pages">
</span>
<span id="execution-results-POSTapi-pages" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-pages"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pages"></code></pre>
</span>
<span id="execution-error-POSTapi-pages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pages"></code></pre>
</span>
<form id="form-POSTapi-pages" data-method="POST"
      data-path="api/pages"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-pages', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-pages"
                    onclick="tryItOut('POSTapi-pages');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-pages"
                    onclick="cancelTryOut('POSTapi-pages');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-pages" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/pages</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title_tm</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title_tm"
               data-endpoint="POSTapi-pages"
               value="autem"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title_ru</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title_ru"
               data-endpoint="POSTapi-pages"
               value="aut"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title_en</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title_en"
               data-endpoint="POSTapi-pages"
               value="laborum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>path</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="path"
               data-endpoint="POSTapi-pages"
               value="optio"
               data-component="body" hidden>
    <br>
<p>&quot;description_tm&quot;     =&gt; 'required',
&quot;description_ru&quot;     =&gt; 'required',
&quot;description_en&quot;     =&gt; 'required',
&quot;content_tm&quot;     =&gt; 'required',
&quot;content_ru&quot;     =&gt; 'required',
&quot;content_en&quot;     =&gt; 'required',.</p>
        </p>
                <p>
            <b><code>is_published</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="is_published"
               data-endpoint="POSTapi-pages"
               value="20"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-PUTapi-pages--id-">PUT api/pages/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-pages--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/pages/10" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pages/10"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-pages--id-">
</span>
<span id="execution-results-PUTapi-pages--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-pages--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-pages--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-pages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-pages--id-"></code></pre>
</span>
<form id="form-PUTapi-pages--id-" data-method="PUT"
      data-path="api/pages/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-pages--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-pages--id-"
                    onclick="tryItOut('PUTapi-pages--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-pages--id-"
                    onclick="cancelTryOut('PUTapi-pages--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-pages--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/pages/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-pages--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the page.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-pages--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-pages--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pages/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pages/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-pages--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: [],
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pages--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pages--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pages--id-"></code></pre>
</span>
<span id="execution-error-GETapi-pages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pages--id-"></code></pre>
</span>
<form id="form-GETapi-pages--id-" data-method="GET"
      data-path="api/pages/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pages--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pages--id-"
                    onclick="tryItOut('GETapi-pages--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pages--id-"
                    onclick="cancelTryOut('GETapi-pages--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pages--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pages/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-pages--id-"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the page.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-pages--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-pages--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/pages/13" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pages/13"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-pages--id-">
</span>
<span id="execution-results-DELETEapi-pages--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-pages--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pages--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-pages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pages--id-"></code></pre>
</span>
<form id="form-DELETEapi-pages--id-" data-method="DELETE"
      data-path="api/pages/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pages--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-pages--id-"
                    onclick="tryItOut('DELETEapi-pages--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-pages--id-"
                    onclick="cancelTryOut('DELETEapi-pages--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-pages--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/pages/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-pages--id-"
               value="13"
               data-component="url" hidden>
    <br>
<p>The ID of the page.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-state">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-state">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/state" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/state"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-state">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;West Audrey&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 4,
                    &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Nienowland&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Brazil&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Boyerburgh&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;Tonga&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Helenabury&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Faroe Islands&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Lake Clarabelle&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Cambodia&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Montanaport&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Belgium&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Pfannerstillstad&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Belgium&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;South Bernardo&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 5,
                    &quot;title&quot;: &quot;Grenada&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Port Melodymouth&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;Tonga&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Lake Rosalind&quot;,
                &quot;country&quot;: {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Cambodia&quot;,
                    &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                }
            }
        ],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/state?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/state?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/state?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/state&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: 10,
            &quot;total&quot;: 10
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-state" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-state"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-state"></code></pre>
</span>
<span id="execution-error-GETapi-state" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-state"></code></pre>
</span>
<form id="form-GETapi-state" data-method="GET"
      data-path="api/state"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-state', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-state"
                    onclick="tryItOut('GETapi-state');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-state"
                    onclick="cancelTryOut('GETapi-state');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-state" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/state</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-state">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-state">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/state" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"qui\",
    \"country\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/state"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "qui",
    "country": "et"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-state">
</span>
<span id="execution-results-POSTapi-state" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-state"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-state"></code></pre>
</span>
<span id="execution-error-POSTapi-state" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-state"></code></pre>
</span>
<form id="form-POSTapi-state" data-method="POST"
      data-path="api/state"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-state', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-state"
                    onclick="tryItOut('POSTapi-state');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-state"
                    onclick="cancelTryOut('POSTapi-state');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-state" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/state</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-state"
               value="qui"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>country</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="country"
               data-endpoint="POSTapi-state"
               value="et"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-state--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-state--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/state/15" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/state/15"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-state--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-state--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-state--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-state--id-"></code></pre>
</span>
<span id="execution-error-GETapi-state--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-state--id-"></code></pre>
</span>
<form id="form-GETapi-state--id-" data-method="GET"
      data-path="api/state/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-state--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-state--id-"
                    onclick="tryItOut('GETapi-state--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-state--id-"
                    onclick="cancelTryOut('GETapi-state--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-state--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/state/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-state--id-"
               value="15"
               data-component="url" hidden>
    <br>
<p>The ID of the state.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-state--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-state--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/state/11" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/state/11"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-state--id-">
</span>
<span id="execution-results-DELETEapi-state--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-state--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-state--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-state--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-state--id-"></code></pre>
</span>
<form id="form-DELETEapi-state--id-" data-method="DELETE"
      data-path="api/state/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-state--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-state--id-"
                    onclick="tryItOut('DELETEapi-state--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-state--id-"
                    onclick="cancelTryOut('DELETEapi-state--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-state--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/state/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-state--id-"
               value="11"
               data-component="url" hidden>
    <br>
<p>The ID of the state.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-countries">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-countries">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/countries" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/countries"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-countries">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Equatorial Guinea&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Faroe Islands&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Cambodia&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Tonga&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Brazil&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Grenada&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Saint Barthelemy&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Cape Verde&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Solomon Islands&quot;
            },
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Belgium&quot;
            }
        ],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/countries?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/countries?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/countries?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/countries&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: 10,
            &quot;total&quot;: 10
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-countries" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-countries"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries"></code></pre>
</span>
<span id="execution-error-GETapi-countries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries"></code></pre>
</span>
<form id="form-GETapi-countries" data-method="GET"
      data-path="api/countries"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-countries', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-countries"
                    onclick="tryItOut('GETapi-countries');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-countries"
                    onclick="cancelTryOut('GETapi-countries');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-countries" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/countries</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-countries">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-countries">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/countries" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"reiciendis\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/countries"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "reiciendis"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-countries">
</span>
<span id="execution-results-POSTapi-countries" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-countries"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-countries"></code></pre>
</span>
<span id="execution-error-POSTapi-countries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-countries"></code></pre>
</span>
<form id="form-POSTapi-countries" data-method="POST"
      data-path="api/countries"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-countries', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-countries"
                    onclick="tryItOut('POSTapi-countries');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-countries"
                    onclick="cancelTryOut('POSTapi-countries');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-countries" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/countries</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-countries"
               value="reiciendis"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-countries--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-countries--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/countries/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/countries/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-countries--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-countries--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-countries--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries--id-"></code></pre>
</span>
<span id="execution-error-GETapi-countries--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries--id-"></code></pre>
</span>
<form id="form-GETapi-countries--id-" data-method="GET"
      data-path="api/countries/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-countries--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-countries--id-"
                    onclick="tryItOut('GETapi-countries--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-countries--id-"
                    onclick="cancelTryOut('GETapi-countries--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-countries--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/countries/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-countries--id-"
               value="17"
               data-component="url" hidden>
    <br>
<p>The ID of the country.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-countries--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-countries--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/countries/18" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/countries/18"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-countries--id-">
</span>
<span id="execution-results-DELETEapi-countries--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-countries--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-countries--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-countries--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-countries--id-"></code></pre>
</span>
<form id="form-DELETEapi-countries--id-" data-method="DELETE"
      data-path="api/countries/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-countries--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-countries--id-"
                    onclick="tryItOut('DELETEapi-countries--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-countries--id-"
                    onclick="cancelTryOut('DELETEapi-countries--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-countries--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/countries/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-countries--id-"
               value="18"
               data-component="url" hidden>
    <br>
<p>The ID of the country.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-requests-all">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-requests-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/requests/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-requests-all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 40,
                &quot;user&quot;: {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Dr. Idell Wisozk Sr.&quot;,
                    &quot;email&quot;: &quot;lew.heidenreich@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 9,
                        &quot;title&quot;: &quot;Faroe Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;541-729-6278&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;vitae&quot;,
                &quot;date1&quot;: &quot;13.04.2022&quot;,
                &quot;date2&quot;: &quot;17.04.2022&quot;,
                &quot;weight_min&quot;: &quot;641kg&quot;,
                &quot;weight_max&quot;: &quot;255kg&quot;,
                &quot;cubm_min&quot;: &quot;sunt&quot;,
                &quot;cubm_max&quot;: &quot;odit&quot;,
                &quot;budget_min&quot;: &quot;5418 man&quot;,
                &quot;budget_max&quot;: &quot;5205 man&quot;,
                &quot;cargo_type&quot;: &quot;ea&quot;,
                &quot;car_body&quot;: &quot;fugit&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Dr. Julius Wilkinson MD&quot;,
                    &quot;email&quot;: &quot;ebert.wallace@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;561.342.7425&quot;,
                    &quot;type&quot;: &quot;driver&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Qui et eos eum non atque.&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;2&quot;,
                &quot;destination&quot;: &quot;7&quot;
            },
            {
                &quot;id&quot;: 39,
                &quot;user&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Jacklyn Olson&quot;,
                    &quot;email&quot;: &quot;gideon35@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1.314.294.8549&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;voluptatem&quot;,
                &quot;date1&quot;: &quot;22.04.2022&quot;,
                &quot;date2&quot;: &quot;14.04.2022&quot;,
                &quot;weight_min&quot;: &quot;940kg&quot;,
                &quot;weight_max&quot;: &quot;403kg&quot;,
                &quot;cubm_min&quot;: &quot;temporibus&quot;,
                &quot;cubm_max&quot;: &quot;debitis&quot;,
                &quot;budget_min&quot;: &quot;8714 man&quot;,
                &quot;budget_max&quot;: &quot;9831 man&quot;,
                &quot;cargo_type&quot;: &quot;ipsum&quot;,
                &quot;car_body&quot;: &quot;eum&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Nils Frami&quot;,
                    &quot;email&quot;: &quot;merritt.ebert@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 4,
                        &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-440-478-3371&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Placeat ut consequatur veniam fugit quam.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;7&quot;,
                &quot;destination&quot;: &quot;7&quot;
            },
            {
                &quot;id&quot;: 38,
                &quot;user&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Benedict Corkery&quot;,
                    &quot;email&quot;: &quot;schumm.dena@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 2,
                        &quot;title&quot;: &quot;Solomon Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-972-657-9964&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;ut&quot;,
                &quot;date1&quot;: &quot;10.04.2022&quot;,
                &quot;date2&quot;: &quot;13.04.2022&quot;,
                &quot;weight_min&quot;: &quot;610kg&quot;,
                &quot;weight_max&quot;: &quot;539kg&quot;,
                &quot;cubm_min&quot;: &quot;praesentium&quot;,
                &quot;cubm_max&quot;: &quot;illum&quot;,
                &quot;budget_min&quot;: &quot;2096 man&quot;,
                &quot;budget_max&quot;: &quot;1782 man&quot;,
                &quot;cargo_type&quot;: &quot;sint&quot;,
                &quot;car_body&quot;: &quot;eum&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Prof. Chyna Dietrich IV&quot;,
                    &quot;email&quot;: &quot;harber.jazmyne@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 6,
                        &quot;title&quot;: &quot;Brazil&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;(480) 314-7805&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Eum laudantium autem sed nesciunt et.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;6&quot;,
                &quot;destination&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 37,
                &quot;user&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Benedict Corkery&quot;,
                    &quot;email&quot;: &quot;schumm.dena@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 2,
                        &quot;title&quot;: &quot;Solomon Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-972-657-9964&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;vel&quot;,
                &quot;date1&quot;: &quot;14.04.2022&quot;,
                &quot;date2&quot;: &quot;16.04.2022&quot;,
                &quot;weight_min&quot;: &quot;312kg&quot;,
                &quot;weight_max&quot;: &quot;343kg&quot;,
                &quot;cubm_min&quot;: &quot;quod&quot;,
                &quot;cubm_max&quot;: &quot;harum&quot;,
                &quot;budget_min&quot;: &quot;9276 man&quot;,
                &quot;budget_max&quot;: &quot;8583 man&quot;,
                &quot;cargo_type&quot;: &quot;voluptas&quot;,
                &quot;car_body&quot;: &quot;earum&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Robbie Schulist&quot;,
                    &quot;email&quot;: &quot;reinger.eleazar@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 2,
                        &quot;title&quot;: &quot;Solomon Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1 (531) 290-3779&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Harum repellat eius quia quidem sunt optio.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;5&quot;,
                &quot;destination&quot;: &quot;7&quot;
            },
            {
                &quot;id&quot;: 36,
                &quot;user&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Sandra Lesch DDS&quot;,
                    &quot;email&quot;: &quot;douglas.alexandrine@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 7,
                        &quot;title&quot;: &quot;Tonga&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;989-254-7085&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;eos&quot;,
                &quot;date1&quot;: &quot;26.04.2022&quot;,
                &quot;date2&quot;: &quot;06.04.2022&quot;,
                &quot;weight_min&quot;: &quot;024kg&quot;,
                &quot;weight_max&quot;: &quot;978kg&quot;,
                &quot;cubm_min&quot;: &quot;cumque&quot;,
                &quot;cubm_max&quot;: &quot;illum&quot;,
                &quot;budget_min&quot;: &quot;0336 man&quot;,
                &quot;budget_max&quot;: &quot;9895 man&quot;,
                &quot;cargo_type&quot;: &quot;sit&quot;,
                &quot;car_body&quot;: &quot;sapiente&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Dr. Julius Wilkinson MD&quot;,
                    &quot;email&quot;: &quot;ebert.wallace@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;561.342.7425&quot;,
                    &quot;type&quot;: &quot;driver&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Odit soluta in quisquam ipsam fuga cum et.&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;4&quot;,
                &quot;destination&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 35,
                &quot;user&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Sandra Lesch DDS&quot;,
                    &quot;email&quot;: &quot;douglas.alexandrine@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 7,
                        &quot;title&quot;: &quot;Tonga&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;989-254-7085&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;est&quot;,
                &quot;date1&quot;: &quot;12.04.2022&quot;,
                &quot;date2&quot;: &quot;30.04.2022&quot;,
                &quot;weight_min&quot;: &quot;449kg&quot;,
                &quot;weight_max&quot;: &quot;832kg&quot;,
                &quot;cubm_min&quot;: &quot;esse&quot;,
                &quot;cubm_max&quot;: &quot;optio&quot;,
                &quot;budget_min&quot;: &quot;1237 man&quot;,
                &quot;budget_max&quot;: &quot;9579 man&quot;,
                &quot;cargo_type&quot;: &quot;qui&quot;,
                &quot;car_body&quot;: &quot;molestias&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Nils Frami&quot;,
                    &quot;email&quot;: &quot;merritt.ebert@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 4,
                        &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-440-478-3371&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Praesentium iste quis architecto ipsam dolores voluptatem facere.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;5&quot;,
                &quot;destination&quot;: &quot;9&quot;
            },
            {
                &quot;id&quot;: 34,
                &quot;user&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Jacklyn Olson&quot;,
                    &quot;email&quot;: &quot;gideon35@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1.314.294.8549&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;sunt&quot;,
                &quot;date1&quot;: &quot;06.04.2022&quot;,
                &quot;date2&quot;: &quot;20.04.2022&quot;,
                &quot;weight_min&quot;: &quot;470kg&quot;,
                &quot;weight_max&quot;: &quot;909kg&quot;,
                &quot;cubm_min&quot;: &quot;qui&quot;,
                &quot;cubm_max&quot;: &quot;modi&quot;,
                &quot;budget_min&quot;: &quot;6677 man&quot;,
                &quot;budget_max&quot;: &quot;5469 man&quot;,
                &quot;cargo_type&quot;: &quot;consequatur&quot;,
                &quot;car_body&quot;: &quot;ipsa&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Nils Frami&quot;,
                    &quot;email&quot;: &quot;merritt.ebert@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 4,
                        &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-440-478-3371&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Totam expedita sequi omnis consequatur dignissimos.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;4&quot;,
                &quot;destination&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 33,
                &quot;user&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Sandra Lesch DDS&quot;,
                    &quot;email&quot;: &quot;douglas.alexandrine@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 7,
                        &quot;title&quot;: &quot;Tonga&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;989-254-7085&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;quidem&quot;,
                &quot;date1&quot;: &quot;12.04.2022&quot;,
                &quot;date2&quot;: &quot;11.04.2022&quot;,
                &quot;weight_min&quot;: &quot;204kg&quot;,
                &quot;weight_max&quot;: &quot;253kg&quot;,
                &quot;cubm_min&quot;: &quot;voluptate&quot;,
                &quot;cubm_max&quot;: &quot;ut&quot;,
                &quot;budget_min&quot;: &quot;9554 man&quot;,
                &quot;budget_max&quot;: &quot;6231 man&quot;,
                &quot;cargo_type&quot;: &quot;impedit&quot;,
                &quot;car_body&quot;: &quot;ipsum&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Nils Frami&quot;,
                    &quot;email&quot;: &quot;merritt.ebert@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 4,
                        &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-440-478-3371&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Unde eos quo dolorem possimus voluptatem dolorum soluta.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;6&quot;,
                &quot;destination&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 32,
                &quot;user&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Dr. Patricia Friesen PhD&quot;,
                    &quot;email&quot;: &quot;dsenger@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 2,
                        &quot;title&quot;: &quot;Solomon Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1.458.699.4344&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;consequatur&quot;,
                &quot;date1&quot;: &quot;27.04.2022&quot;,
                &quot;date2&quot;: &quot;02.04.2022&quot;,
                &quot;weight_min&quot;: &quot;375kg&quot;,
                &quot;weight_max&quot;: &quot;510kg&quot;,
                &quot;cubm_min&quot;: &quot;quidem&quot;,
                &quot;cubm_max&quot;: &quot;deserunt&quot;,
                &quot;budget_min&quot;: &quot;4711 man&quot;,
                &quot;budget_max&quot;: &quot;8955 man&quot;,
                &quot;cargo_type&quot;: &quot;est&quot;,
                &quot;car_body&quot;: &quot;quis&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Van Kuvalis&quot;,
                    &quot;email&quot;: &quot;abigayle31@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 8,
                        &quot;title&quot;: &quot;Cambodia&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1-339-536-1721&quot;,
                    &quot;type&quot;: &quot;driver&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Eveniet non tenetur iusto vitae sequi.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;8&quot;,
                &quot;destination&quot;: &quot;8&quot;
            },
            {
                &quot;id&quot;: 31,
                &quot;user&quot;: {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;Heber Bauch&quot;,
                    &quot;email&quot;: &quot;rbernier@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 6,
                        &quot;title&quot;: &quot;Brazil&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1-703-499-8029&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;aut&quot;,
                &quot;date1&quot;: &quot;23.04.2022&quot;,
                &quot;date2&quot;: &quot;20.04.2022&quot;,
                &quot;weight_min&quot;: &quot;853kg&quot;,
                &quot;weight_max&quot;: &quot;401kg&quot;,
                &quot;cubm_min&quot;: &quot;qui&quot;,
                &quot;cubm_max&quot;: &quot;velit&quot;,
                &quot;budget_min&quot;: &quot;3209 man&quot;,
                &quot;budget_max&quot;: &quot;1247 man&quot;,
                &quot;cargo_type&quot;: &quot;quo&quot;,
                &quot;car_body&quot;: &quot;rem&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Alfredo Hauck&quot;,
                    &quot;email&quot;: &quot;leone.heidenreich@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 1,
                        &quot;title&quot;: &quot;Belgium&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1.347.651.3688&quot;,
                    &quot;type&quot;: &quot;driver&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Sunt vero id ratione.&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;8&quot;,
                &quot;destination&quot;: &quot;6&quot;
            },
            {
                &quot;id&quot;: 30,
                &quot;user&quot;: {
                    &quot;id&quot;: 3,
                    &quot;name&quot;: &quot;Dr. Helen Powlowski&quot;,
                    &quot;email&quot;: &quot;emmanuelle.feil@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 1,
                        &quot;title&quot;: &quot;Belgium&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;480-465-9582&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;dolorum&quot;,
                &quot;date1&quot;: &quot;05.04.2022&quot;,
                &quot;date2&quot;: &quot;06.04.2022&quot;,
                &quot;weight_min&quot;: &quot;480kg&quot;,
                &quot;weight_max&quot;: &quot;329kg&quot;,
                &quot;cubm_min&quot;: &quot;in&quot;,
                &quot;cubm_max&quot;: &quot;aut&quot;,
                &quot;budget_min&quot;: &quot;6118 man&quot;,
                &quot;budget_max&quot;: &quot;9212 man&quot;,
                &quot;cargo_type&quot;: &quot;ex&quot;,
                &quot;car_body&quot;: &quot;delectus&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 5,
                    &quot;name&quot;: &quot;Lucinda Mueller&quot;,
                    &quot;email&quot;: &quot;wrice@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 6,
                        &quot;title&quot;: &quot;Brazil&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;(231) 489-8592&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Praesentium asperiores inventore expedita minus nesciunt asperiores.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;8&quot;,
                &quot;destination&quot;: &quot;10&quot;
            },
            {
                &quot;id&quot;: 29,
                &quot;user&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Jacklyn Olson&quot;,
                    &quot;email&quot;: &quot;gideon35@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1.314.294.8549&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;molestiae&quot;,
                &quot;date1&quot;: &quot;05.04.2022&quot;,
                &quot;date2&quot;: &quot;28.04.2022&quot;,
                &quot;weight_min&quot;: &quot;623kg&quot;,
                &quot;weight_max&quot;: &quot;380kg&quot;,
                &quot;cubm_min&quot;: &quot;enim&quot;,
                &quot;cubm_max&quot;: &quot;aliquid&quot;,
                &quot;budget_min&quot;: &quot;3035 man&quot;,
                &quot;budget_max&quot;: &quot;2954 man&quot;,
                &quot;cargo_type&quot;: &quot;voluptatem&quot;,
                &quot;car_body&quot;: &quot;cupiditate&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Miss Jane Thompson DVM&quot;,
                    &quot;email&quot;: &quot;eleanora.schroeder@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 2,
                        &quot;title&quot;: &quot;Solomon Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;352-749-3552&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Velit modi aut velit necessitatibus.&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;8&quot;,
                &quot;destination&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 28,
                &quot;user&quot;: {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Gia McKenzie&quot;,
                    &quot;email&quot;: &quot;padberg.chelsey@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 10,
                        &quot;title&quot;: &quot;Equatorial Guinea&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;272.306.9221&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;nobis&quot;,
                &quot;date1&quot;: &quot;21.04.2022&quot;,
                &quot;date2&quot;: &quot;02.04.2022&quot;,
                &quot;weight_min&quot;: &quot;613kg&quot;,
                &quot;weight_max&quot;: &quot;600kg&quot;,
                &quot;cubm_min&quot;: &quot;quidem&quot;,
                &quot;cubm_max&quot;: &quot;excepturi&quot;,
                &quot;budget_min&quot;: &quot;5480 man&quot;,
                &quot;budget_max&quot;: &quot;3743 man&quot;,
                &quot;cargo_type&quot;: &quot;sit&quot;,
                &quot;car_body&quot;: &quot;adipisci&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 10,
                    &quot;name&quot;: &quot;Yvonne Feil&quot;,
                    &quot;email&quot;: &quot;fjones@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 4,
                        &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;(931) 982-4690&quot;,
                    &quot;type&quot;: &quot;driver&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Aut qui quo doloribus ipsam.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;4&quot;,
                &quot;destination&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 27,
                &quot;user&quot;: {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Rosemary Hickle&quot;,
                    &quot;email&quot;: &quot;yquigley@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 1,
                        &quot;title&quot;: &quot;Belgium&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;(551) 508-2663&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;nisi&quot;,
                &quot;date1&quot;: &quot;04.04.2022&quot;,
                &quot;date2&quot;: &quot;02.04.2022&quot;,
                &quot;weight_min&quot;: &quot;916kg&quot;,
                &quot;weight_max&quot;: &quot;827kg&quot;,
                &quot;cubm_min&quot;: &quot;voluptatem&quot;,
                &quot;cubm_max&quot;: &quot;sequi&quot;,
                &quot;budget_min&quot;: &quot;7516 man&quot;,
                &quot;budget_max&quot;: &quot;1442 man&quot;,
                &quot;cargo_type&quot;: &quot;maiores&quot;,
                &quot;car_body&quot;: &quot;itaque&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Nils Frami&quot;,
                    &quot;email&quot;: &quot;merritt.ebert@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 4,
                        &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-440-478-3371&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Inventore sed accusamus cumque praesentium.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;2&quot;,
                &quot;destination&quot;: &quot;6&quot;
            },
            {
                &quot;id&quot;: 26,
                &quot;user&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Miss Mattie Olson III&quot;,
                    &quot;email&quot;: &quot;randall17@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 4,
                        &quot;title&quot;: &quot;Saint Barthelemy&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;781-277-7572&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;laborum&quot;,
                &quot;date1&quot;: &quot;29.04.2022&quot;,
                &quot;date2&quot;: &quot;24.04.2022&quot;,
                &quot;weight_min&quot;: &quot;765kg&quot;,
                &quot;weight_max&quot;: &quot;048kg&quot;,
                &quot;cubm_min&quot;: &quot;laboriosam&quot;,
                &quot;cubm_max&quot;: &quot;quis&quot;,
                &quot;budget_min&quot;: &quot;8754 man&quot;,
                &quot;budget_max&quot;: &quot;6575 man&quot;,
                &quot;cargo_type&quot;: &quot;tempore&quot;,
                &quot;car_body&quot;: &quot;et&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Dr. Julius Wilkinson MD&quot;,
                    &quot;email&quot;: &quot;ebert.wallace@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;561.342.7425&quot;,
                    &quot;type&quot;: &quot;driver&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Ex quaerat porro nesciunt voluptas nulla ut voluptas.&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;3&quot;,
                &quot;destination&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 25,
                &quot;user&quot;: {
                    &quot;id&quot;: 8,
                    &quot;name&quot;: &quot;Jacklyn Olson&quot;,
                    &quot;email&quot;: &quot;gideon35@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1.314.294.8549&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;eos&quot;,
                &quot;date1&quot;: &quot;16.04.2022&quot;,
                &quot;date2&quot;: &quot;18.04.2022&quot;,
                &quot;weight_min&quot;: &quot;797kg&quot;,
                &quot;weight_max&quot;: &quot;780kg&quot;,
                &quot;cubm_min&quot;: &quot;qui&quot;,
                &quot;cubm_max&quot;: &quot;doloribus&quot;,
                &quot;budget_min&quot;: &quot;2413 man&quot;,
                &quot;budget_max&quot;: &quot;4756 man&quot;,
                &quot;cargo_type&quot;: &quot;tenetur&quot;,
                &quot;car_body&quot;: &quot;quidem&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Robbie Schulist&quot;,
                    &quot;email&quot;: &quot;reinger.eleazar@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 2,
                        &quot;title&quot;: &quot;Solomon Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;+1 (531) 290-3779&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Hic maxime quibusdam facere quaerat et hic.&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;7&quot;,
                &quot;destination&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 24,
                &quot;user&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Dr. Sandra Lesch DDS&quot;,
                    &quot;email&quot;: &quot;douglas.alexandrine@example.net&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 7,
                        &quot;title&quot;: &quot;Tonga&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;989-254-7085&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;nobis&quot;,
                &quot;date1&quot;: &quot;19.04.2022&quot;,
                &quot;date2&quot;: &quot;30.04.2022&quot;,
                &quot;weight_min&quot;: &quot;719kg&quot;,
                &quot;weight_max&quot;: &quot;164kg&quot;,
                &quot;cubm_min&quot;: &quot;modi&quot;,
                &quot;cubm_max&quot;: &quot;esse&quot;,
                &quot;budget_min&quot;: &quot;1024 man&quot;,
                &quot;budget_max&quot;: &quot;5256 man&quot;,
                &quot;cargo_type&quot;: &quot;voluptates&quot;,
                &quot;car_body&quot;: &quot;facilis&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Dr. Julius Wilkinson MD&quot;,
                    &quot;email&quot;: &quot;ebert.wallace@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;561.342.7425&quot;,
                    &quot;type&quot;: &quot;driver&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Inventore illum exercitationem voluptatibus aut.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;6&quot;,
                &quot;destination&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 23,
                &quot;user&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Benedict Corkery&quot;,
                    &quot;email&quot;: &quot;schumm.dena@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 2,
                        &quot;title&quot;: &quot;Solomon Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-972-657-9964&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;assumenda&quot;,
                &quot;date1&quot;: &quot;24.04.2022&quot;,
                &quot;date2&quot;: &quot;08.04.2022&quot;,
                &quot;weight_min&quot;: &quot;970kg&quot;,
                &quot;weight_max&quot;: &quot;899kg&quot;,
                &quot;cubm_min&quot;: &quot;eaque&quot;,
                &quot;cubm_max&quot;: &quot;autem&quot;,
                &quot;budget_min&quot;: &quot;3567 man&quot;,
                &quot;budget_max&quot;: &quot;3054 man&quot;,
                &quot;cargo_type&quot;: &quot;omnis&quot;,
                &quot;car_body&quot;: &quot;delectus&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Prof. Chyna Dietrich IV&quot;,
                    &quot;email&quot;: &quot;harber.jazmyne@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 6,
                        &quot;title&quot;: &quot;Brazil&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;(480) 314-7805&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Sed est illo quo voluptate deserunt.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;2&quot;,
                &quot;destination&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 22,
                &quot;user&quot;: {
                    &quot;id&quot;: 4,
                    &quot;name&quot;: &quot;Gia McKenzie&quot;,
                    &quot;email&quot;: &quot;padberg.chelsey@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 10,
                        &quot;title&quot;: &quot;Equatorial Guinea&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;272.306.9221&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;non&quot;,
                &quot;date1&quot;: &quot;12.04.2022&quot;,
                &quot;date2&quot;: &quot;05.04.2022&quot;,
                &quot;weight_min&quot;: &quot;052kg&quot;,
                &quot;weight_max&quot;: &quot;646kg&quot;,
                &quot;cubm_min&quot;: &quot;sunt&quot;,
                &quot;cubm_max&quot;: &quot;necessitatibus&quot;,
                &quot;budget_min&quot;: &quot;8182 man&quot;,
                &quot;budget_max&quot;: &quot;2524 man&quot;,
                &quot;cargo_type&quot;: &quot;aut&quot;,
                &quot;car_body&quot;: &quot;eveniet&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 9,
                    &quot;name&quot;: &quot;Dr. Julius Wilkinson MD&quot;,
                    &quot;email&quot;: &quot;ebert.wallace@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Cape Verde&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;561.342.7425&quot;,
                    &quot;type&quot;: &quot;driver&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Nihil officiis quibusdam voluptates voluptatem illum rerum ut.&quot;,
                &quot;type&quot;: &quot;driver&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;2&quot;,
                &quot;destination&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 21,
                &quot;user&quot;: {
                    &quot;id&quot;: 7,
                    &quot;name&quot;: &quot;Benedict Corkery&quot;,
                    &quot;email&quot;: &quot;schumm.dena@example.org&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 2,
                        &quot;title&quot;: &quot;Solomon Islands&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;1-972-657-9964&quot;,
                    &quot;address&quot;: &quot;Ashgabat&quot;,
                    &quot;passport_no&quot;: &quot;######&quot;,
                    &quot;avatar&quot;: null
                },
                &quot;title&quot;: &quot;at&quot;,
                &quot;date1&quot;: &quot;25.04.2022&quot;,
                &quot;date2&quot;: &quot;01.04.2022&quot;,
                &quot;weight_min&quot;: &quot;873kg&quot;,
                &quot;weight_max&quot;: &quot;963kg&quot;,
                &quot;cubm_min&quot;: &quot;perferendis&quot;,
                &quot;cubm_max&quot;: &quot;non&quot;,
                &quot;budget_min&quot;: &quot;8599 man&quot;,
                &quot;budget_max&quot;: &quot;7401 man&quot;,
                &quot;cargo_type&quot;: &quot;aut&quot;,
                &quot;car_body&quot;: &quot;esse&quot;,
                &quot;company&quot;: {
                    &quot;id&quot;: 6,
                    &quot;name&quot;: &quot;Prof. Chyna Dietrich IV&quot;,
                    &quot;email&quot;: &quot;harber.jazmyne@example.com&quot;,
                    &quot;country&quot;: {
                        &quot;id&quot;: 6,
                        &quot;title&quot;: &quot;Brazil&quot;,
                        &quot;created_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-05-01T08:41:51.000000Z&quot;
                    },
                    &quot;phone&quot;: &quot;(480) 314-7805&quot;,
                    &quot;type&quot;: &quot;company&quot;,
                    &quot;status&quot;: 0,
                    &quot;short_description&quot;: null,
                    &quot;description&quot;: [],
                    &quot;avatar&quot;: &quot;&quot;,
                    &quot;auto_model&quot;: null,
                    &quot;accepted&quot;: 0,
                    &quot;car_year&quot;: null,
                    &quot;car_number&quot;: null,
                    &quot;owner&quot;: null
                },
                &quot;note&quot;: &quot;Eligendi aut minus qui vitae facilis ut repellat rerum.&quot;,
                &quot;type&quot;: &quot;company&quot;,
                &quot;status&quot;: &quot;1&quot;,
                &quot;source&quot;: &quot;9&quot;,
                &quot;destination&quot;: &quot;2&quot;
            }
        ],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/requests/all?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/requests/all?page=2&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: &quot;http://localhost/api/requests/all?page=2&quot;
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 2,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/requests/all?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/requests/all?page=2&quot;,
                    &quot;label&quot;: &quot;2&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/requests/all?page=2&quot;,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/requests/all&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: 20,
            &quot;total&quot;: 40
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-requests-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-requests-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-requests-all"></code></pre>
</span>
<span id="execution-error-GETapi-requests-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-requests-all"></code></pre>
</span>
<form id="form-GETapi-requests-all" data-method="GET"
      data-path="api/requests/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-requests-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-requests-all"
                    onclick="tryItOut('GETapi-requests-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-requests-all"
                    onclick="cancelTryOut('GETapi-requests-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-requests-all" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/requests/all</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-requests">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-requests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/requests" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-requests">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-requests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-requests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-requests"></code></pre>
</span>
<span id="execution-error-GETapi-requests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-requests"></code></pre>
</span>
<form id="form-GETapi-requests" data-method="GET"
      data-path="api/requests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-requests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-requests"
                    onclick="tryItOut('GETapi-requests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-requests"
                    onclick="cancelTryOut('GETapi-requests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-requests" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/requests</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-requests--id-">GET api/requests/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-requests--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/requests/et" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-requests--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 43
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: {},
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-requests--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-requests--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-requests--id-"></code></pre>
</span>
<span id="execution-error-GETapi-requests--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-requests--id-"></code></pre>
</span>
<form id="form-GETapi-requests--id-" data-method="GET"
      data-path="api/requests/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-requests--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-requests--id-"
                    onclick="tryItOut('GETapi-requests--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-requests--id-"
                    onclick="cancelTryOut('GETapi-requests--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-requests--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/requests/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-requests--id-"
               value="et"
               data-component="url" hidden>
    <br>
<p>The ID of the request.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-requests--id--answers">GET api/requests/{id}/answers</h2>

<p>
</p>



<span id="example-requests-GETapi-requests--id--answers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/requests/repudiandae/answers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests/repudiandae/answers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-requests--id--answers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 42
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: {},
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-requests--id--answers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-requests--id--answers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-requests--id--answers"></code></pre>
</span>
<span id="execution-error-GETapi-requests--id--answers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-requests--id--answers"></code></pre>
</span>
<form id="form-GETapi-requests--id--answers" data-method="GET"
      data-path="api/requests/{id}/answers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-requests--id--answers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-requests--id--answers"
                    onclick="tryItOut('GETapi-requests--id--answers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-requests--id--answers"
                    onclick="cancelTryOut('GETapi-requests--id--answers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-requests--id--answers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/requests/{id}/answers</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-requests--id--answers"
               value="repudiandae"
               data-component="url" hidden>
    <br>
<p>The ID of the request.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-requests">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-requests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/requests" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"modi\",
    \"date1\": \"impedit\",
    \"date2\": \"sed\",
    \"type\": \"consequatur\",
    \"source\": \"est\",
    \"destination\": \"iusto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "modi",
    "date1": "impedit",
    "date2": "sed",
    "type": "consequatur",
    "source": "est",
    "destination": "iusto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-requests">
</span>
<span id="execution-results-POSTapi-requests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-requests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-requests"></code></pre>
</span>
<span id="execution-error-POSTapi-requests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-requests"></code></pre>
</span>
<form id="form-POSTapi-requests" data-method="POST"
      data-path="api/requests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-requests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-requests"
                    onclick="tryItOut('POSTapi-requests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-requests"
                    onclick="cancelTryOut('POSTapi-requests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-requests" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/requests</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-requests"
               value="modi"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>date1</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="date1"
               data-endpoint="POSTapi-requests"
               value="impedit"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>date2</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="date2"
               data-endpoint="POSTapi-requests"
               value="sed"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="type"
               data-endpoint="POSTapi-requests"
               value="consequatur"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>source</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="source"
               data-endpoint="POSTapi-requests"
               value="est"
               data-component="body" hidden>
    <br>
<p>&quot;weight_min&quot;       =&gt; 'required',
&quot;weight_max&quot;       =&gt; 'required',
&quot;cubm_min&quot;       =&gt; 'required',
&quot;cubm_max&quot;       =&gt; 'required',
&quot;budget_min&quot;       =&gt; 'required',
&quot;budget_max&quot;       =&gt; 'required',
&quot;cargo_type&quot;       =&gt; 'required',
&quot;car_body&quot;       =&gt; 'required',
&quot;note&quot;       =&gt; 'required',.</p>
        </p>
                <p>
            <b><code>destination</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="destination"
               data-endpoint="POSTapi-requests"
               value="iusto"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-PUTapi-requests--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-requests--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/requests/aperiam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests/aperiam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-requests--id-">
</span>
<span id="execution-results-PUTapi-requests--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-requests--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-requests--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-requests--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-requests--id-"></code></pre>
</span>
<form id="form-PUTapi-requests--id-" data-method="PUT"
      data-path="api/requests/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-requests--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-requests--id-"
                    onclick="tryItOut('PUTapi-requests--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-requests--id-"
                    onclick="cancelTryOut('PUTapi-requests--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-requests--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/requests/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-requests--id-"
               value="aperiam"
               data-component="url" hidden>
    <br>
<p>The ID of the request.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-requests--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-requests--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/requests/ex" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests/ex"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-requests--id-">
</span>
<span id="execution-results-DELETEapi-requests--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-requests--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-requests--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-requests--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-requests--id-"></code></pre>
</span>
<form id="form-DELETEapi-requests--id-" data-method="DELETE"
      data-path="api/requests/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-requests--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-requests--id-"
                    onclick="tryItOut('DELETEapi-requests--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-requests--id-"
                    onclick="cancelTryOut('DELETEapi-requests--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-requests--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/requests/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-requests--id-"
               value="ex"
               data-component="url" hidden>
    <br>
<p>The ID of the request.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-requests--id--answersCancel">GET api/requests/{id}/answersCancel</h2>

<p>
</p>



<span id="example-requests-GETapi-requests--id--answersCancel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/requests/repellat/answersCancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests/repellat/answersCancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-requests--id--answersCancel">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-requests--id--answersCancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-requests--id--answersCancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-requests--id--answersCancel"></code></pre>
</span>
<span id="execution-error-GETapi-requests--id--answersCancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-requests--id--answersCancel"></code></pre>
</span>
<form id="form-GETapi-requests--id--answersCancel" data-method="GET"
      data-path="api/requests/{id}/answersCancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-requests--id--answersCancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-requests--id--answersCancel"
                    onclick="tryItOut('GETapi-requests--id--answersCancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-requests--id--answersCancel"
                    onclick="cancelTryOut('GETapi-requests--id--answersCancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-requests--id--answersCancel" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/requests/{id}/answersCancel</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-requests--id--answersCancel"
               value="repellat"
               data-component="url" hidden>
    <br>
<p>The ID of the request.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-requests-status-0">GET api/requests/status/0</h2>

<p>
</p>



<span id="example-requests-GETapi-requests-status-0">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/requests/status/0" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests/status/0"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-requests-status-0">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 41
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/requests/status/0?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/requests/status/0?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/requests/status/0?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/requests/status/0&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-requests-status-0" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-requests-status-0"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-requests-status-0"></code></pre>
</span>
<span id="execution-error-GETapi-requests-status-0" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-requests-status-0"></code></pre>
</span>
<form id="form-GETapi-requests-status-0" data-method="GET"
      data-path="api/requests/status/0"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-requests-status-0', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-requests-status-0"
                    onclick="tryItOut('GETapi-requests-status-0');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-requests-status-0"
                    onclick="cancelTryOut('GETapi-requests-status-0');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-requests-status-0" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/requests/status/0</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-requests-status-1">GET api/requests/status/1</h2>

<p>
</p>



<span id="example-requests-GETapi-requests-status-1">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/requests/status/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/requests/status/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-requests-status-1">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-requests-status-1" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-requests-status-1"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-requests-status-1"></code></pre>
</span>
<span id="execution-error-GETapi-requests-status-1" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-requests-status-1"></code></pre>
</span>
<form id="form-GETapi-requests-status-1" data-method="GET"
      data-path="api/requests/status/1"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-requests-status-1', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-requests-status-1"
                    onclick="tryItOut('GETapi-requests-status-1');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-requests-status-1"
                    onclick="cancelTryOut('GETapi-requests-status-1');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-requests-status-1" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/requests/status/1</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-user-register">Register a User.</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/user/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"cqmmtncinarynhffkxbpznjkjlhmrihljauygmjuqd\",
    \"email\": \"mpviuqivxnlpodznrllejhveamkabmoudeysggioxnupagmhhxixdeskqwjleatooohcqvspnsjmjotsreuxvuygk\",
    \"password\": \"w\",
    \"phone\": \"assumenda\",
    \"country\": \"nisi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "cqmmtncinarynhffkxbpznjkjlhmrihljauygmjuqd",
    "email": "mpviuqivxnlpodznrllejhveamkabmoudeysggioxnupagmhhxixdeskqwjleatooohcqvspnsjmjotsreuxvuygk",
    "password": "w",
    "phone": "assumenda",
    "country": "nisi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-register">
</span>
<span id="execution-results-POSTapi-user-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-register"></code></pre>
</span>
<span id="execution-error-POSTapi-user-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-register"></code></pre>
</span>
<form id="form-POSTapi-user-register" data-method="POST"
      data-path="api/user/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-register"
                    onclick="tryItOut('POSTapi-user-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-register"
                    onclick="cancelTryOut('POSTapi-user-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-user-register"
               value="cqmmtncinarynhffkxbpznjkjlhmrihljauygmjuqd"
               data-component="body" hidden>
    <br>
<p>Must be between 2 and 100 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-user-register"
               value="mpviuqivxnlpodznrllejhveamkabmoudeysggioxnupagmhhxixdeskqwjleatooohcqvspnsjmjotsreuxvuygk"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address. Must not be greater than 100 characters.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-user-register"
               value="w"
               data-component="body" hidden>
    <br>
<p>Must be at least 6 characters.</p>
        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="POSTapi-user-register"
               value="assumenda"
               data-component="body" hidden>
    <br>
<p>|confirmed',.</p>
        </p>
                <p>
            <b><code>country</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="country"
               data-endpoint="POSTapi-user-register"
               value="nisi"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-POSTapi-user-logout">Log the user out (Invalidate the token).</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/user/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-logout">
</span>
<span id="execution-results-POSTapi-user-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-logout"></code></pre>
</span>
<span id="execution-error-POSTapi-user-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-logout"></code></pre>
</span>
<form id="form-POSTapi-user-logout" data-method="POST"
      data-path="api/user/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-logout"
                    onclick="tryItOut('POSTapi-user-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-logout"
                    onclick="cancelTryOut('POSTapi-user-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/logout</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-user-refresh">Refresh a token.</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-refresh">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/user/refresh" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/refresh"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-refresh">
</span>
<span id="execution-results-POSTapi-user-refresh" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-refresh"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-refresh"></code></pre>
</span>
<span id="execution-error-POSTapi-user-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-refresh"></code></pre>
</span>
<form id="form-POSTapi-user-refresh" data-method="POST"
      data-path="api/user/refresh"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-refresh', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-refresh"
                    onclick="tryItOut('POSTapi-user-refresh');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-refresh"
                    onclick="cancelTryOut('POSTapi-user-refresh');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-refresh" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/refresh</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-user-update">POST api/user/update</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-update">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/user/update" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-update">
</span>
<span id="execution-results-POSTapi-user-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-update"></code></pre>
</span>
<span id="execution-error-POSTapi-user-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-update"></code></pre>
</span>
<form id="form-POSTapi-user-update" data-method="POST"
      data-path="api/user/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-update"
                    onclick="tryItOut('POSTapi-user-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-update"
                    onclick="cancelTryOut('POSTapi-user-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-update" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/update</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-user-user-profile">Get the authenticated User.</h2>

<p>
</p>



<span id="example-requests-GETapi-user-user-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user/user-profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/user-profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user-user-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user-user-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user-user-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-user-profile"></code></pre>
</span>
<span id="execution-error-GETapi-user-user-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-user-profile"></code></pre>
</span>
<form id="form-GETapi-user-user-profile" data-method="GET"
      data-path="api/user/user-profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user-user-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user-user-profile"
                    onclick="tryItOut('GETapi-user-user-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user-user-profile"
                    onclick="cancelTryOut('GETapi-user-user-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user-user-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/user-profile</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-user-images">GET api/user/images</h2>

<p>
</p>



<span id="example-requests-GETapi-user-images">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user/images" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/images"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user-images">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user-images" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user-images"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-images"></code></pre>
</span>
<span id="execution-error-GETapi-user-images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-images"></code></pre>
</span>
<form id="form-GETapi-user-images" data-method="GET"
      data-path="api/user/images"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user-images', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user-images"
                    onclick="tryItOut('GETapi-user-images');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user-images"
                    onclick="cancelTryOut('GETapi-user-images');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user-images" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/images</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-techniques">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-techniques">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/techniques" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-techniques">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-techniques" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-techniques"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-techniques"></code></pre>
</span>
<span id="execution-error-GETapi-techniques" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-techniques"></code></pre>
</span>
<form id="form-GETapi-techniques" data-method="GET"
      data-path="api/techniques"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-techniques', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-techniques"
                    onclick="tryItOut('GETapi-techniques');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-techniques"
                    onclick="cancelTryOut('GETapi-techniques');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-techniques" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/techniques</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-techniques-all">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-techniques-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/techniques/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-techniques-all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 40
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/techniques/all?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/techniques/all?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/techniques/all?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/techniques/all&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-techniques-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-techniques-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-techniques-all"></code></pre>
</span>
<span id="execution-error-GETapi-techniques-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-techniques-all"></code></pre>
</span>
<form id="form-GETapi-techniques-all" data-method="GET"
      data-path="api/techniques/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-techniques-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-techniques-all"
                    onclick="tryItOut('GETapi-techniques-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-techniques-all"
                    onclick="cancelTryOut('GETapi-techniques-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-techniques-all" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/techniques/all</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-techniques">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-techniques">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/techniques" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"technique_type_id\": \"dolor\",
    \"state\": \"saepe\",
    \"title\": \"assumenda\",
    \"owner\": \"consequuntur\",
    \"price\": \"nulla\",
    \"description\": \"consequatur\",
    \"photos\": [
        \"fugit\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "technique_type_id": "dolor",
    "state": "saepe",
    "title": "assumenda",
    "owner": "consequuntur",
    "price": "nulla",
    "description": "consequatur",
    "photos": [
        "fugit"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-techniques">
</span>
<span id="execution-results-POSTapi-techniques" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-techniques"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-techniques"></code></pre>
</span>
<span id="execution-error-POSTapi-techniques" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-techniques"></code></pre>
</span>
<form id="form-POSTapi-techniques" data-method="POST"
      data-path="api/techniques"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-techniques', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-techniques"
                    onclick="tryItOut('POSTapi-techniques');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-techniques"
                    onclick="cancelTryOut('POSTapi-techniques');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-techniques" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/techniques</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>technique_type_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="technique_type_id"
               data-endpoint="POSTapi-techniques"
               value="dolor"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state"
               data-endpoint="POSTapi-techniques"
               value="saepe"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-techniques"
               value="assumenda"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>owner</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="owner"
               data-endpoint="POSTapi-techniques"
               value="consequuntur"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="price"
               data-endpoint="POSTapi-techniques"
               value="nulla"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-techniques"
               value="consequatur"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>photos</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
                <input type="text"
               name="photos[0]"
               data-endpoint="POSTapi-techniques"
               data-component="body" hidden>
        <input type="text"
               name="photos[1]"
               data-endpoint="POSTapi-techniques"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-techniques--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-techniques--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/techniques/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-techniques--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 39
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: [],
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-techniques--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-techniques--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-techniques--id-"></code></pre>
</span>
<span id="execution-error-GETapi-techniques--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-techniques--id-"></code></pre>
</span>
<form id="form-GETapi-techniques--id-" data-method="GET"
      data-path="api/techniques/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-techniques--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-techniques--id-"
                    onclick="tryItOut('GETapi-techniques--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-techniques--id-"
                    onclick="cancelTryOut('GETapi-techniques--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-techniques--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/techniques/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-techniques--id-"
               value="3"
               data-component="url" hidden>
    <br>
<p>The ID of the technique.</p>
            </p>
                    </form>

            <h2 id="endpoints-DELETEapi-techniques--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-techniques--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/techniques/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques/20"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-techniques--id-">
</span>
<span id="execution-results-DELETEapi-techniques--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-techniques--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-techniques--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-techniques--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-techniques--id-"></code></pre>
</span>
<form id="form-DELETEapi-techniques--id-" data-method="DELETE"
      data-path="api/techniques/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-techniques--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-techniques--id-"
                    onclick="tryItOut('DELETEapi-techniques--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-techniques--id-"
                    onclick="cancelTryOut('DELETEapi-techniques--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-techniques--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/techniques/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-techniques--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the technique.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-techniques--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-techniques--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/techniques/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-techniques--id-">
</span>
<span id="execution-results-POSTapi-techniques--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-techniques--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-techniques--id-"></code></pre>
</span>
<span id="execution-error-POSTapi-techniques--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-techniques--id-"></code></pre>
</span>
<form id="form-POSTapi-techniques--id-" data-method="POST"
      data-path="api/techniques/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-techniques--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-techniques--id-"
                    onclick="tryItOut('POSTapi-techniques--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-techniques--id-"
                    onclick="cancelTryOut('POSTapi-techniques--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-techniques--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/techniques/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="POSTapi-techniques--id-"
               value="4"
               data-component="url" hidden>
    <br>
<p>The ID of the technique.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-techniques--id--images">GET api/techniques/{id}/images</h2>

<p>
</p>



<span id="example-requests-GETapi-techniques--id--images">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/techniques/16/images" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/techniques/16/images"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-techniques--id--images">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-techniques--id--images" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-techniques--id--images"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-techniques--id--images"></code></pre>
</span>
<span id="execution-error-GETapi-techniques--id--images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-techniques--id--images"></code></pre>
</span>
<form id="form-GETapi-techniques--id--images" data-method="GET"
      data-path="api/techniques/{id}/images"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-techniques--id--images', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-techniques--id--images"
                    onclick="tryItOut('GETapi-techniques--id--images');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-techniques--id--images"
                    onclick="cancelTryOut('GETapi-techniques--id--images');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-techniques--id--images" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/techniques/{id}/images</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-techniques--id--images"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the technique.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-routes-all">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-routes-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/routes/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-routes-all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 38
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/routes/all?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/routes/all?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/routes/all?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/routes/all&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-routes-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-routes-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-routes-all"></code></pre>
</span>
<span id="execution-error-GETapi-routes-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-routes-all"></code></pre>
</span>
<form id="form-GETapi-routes-all" data-method="GET"
      data-path="api/routes/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-routes-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-routes-all"
                    onclick="tryItOut('GETapi-routes-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-routes-all"
                    onclick="cancelTryOut('GETapi-routes-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-routes-all" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/routes/all</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-routes">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-routes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/routes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-routes">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-routes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-routes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-routes"></code></pre>
</span>
<span id="execution-error-GETapi-routes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-routes"></code></pre>
</span>
<form id="form-GETapi-routes" data-method="GET"
      data-path="api/routes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-routes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-routes"
                    onclick="tryItOut('GETapi-routes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-routes"
                    onclick="cancelTryOut('GETapi-routes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-routes" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/routes</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-routes--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-routes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/routes/delectus" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes/delectus"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-routes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 37
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;false&quot;,
    &quot;data&quot;: {},
    &quot;message&quot;: &quot;Not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-routes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-routes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-routes--id-"></code></pre>
</span>
<span id="execution-error-GETapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-routes--id-"></code></pre>
</span>
<form id="form-GETapi-routes--id-" data-method="GET"
      data-path="api/routes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-routes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-routes--id-"
                    onclick="tryItOut('GETapi-routes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-routes--id-"
                    onclick="cancelTryOut('GETapi-routes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-routes--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/routes/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-routes--id-"
               value="delectus"
               data-component="url" hidden>
    <br>
<p>The ID of the route.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-routes">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-routes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/routes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"date1\": \"quos\",
    \"date2\": \"est\",
    \"note\": \"earum\",
    \"source\": \"voluptate\",
    \"destination\": \"optio\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "date1": "quos",
    "date2": "est",
    "note": "earum",
    "source": "voluptate",
    "destination": "optio"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-routes">
</span>
<span id="execution-results-POSTapi-routes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-routes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-routes"></code></pre>
</span>
<span id="execution-error-POSTapi-routes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-routes"></code></pre>
</span>
<form id="form-POSTapi-routes" data-method="POST"
      data-path="api/routes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-routes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-routes"
                    onclick="tryItOut('POSTapi-routes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-routes"
                    onclick="cancelTryOut('POSTapi-routes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-routes" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/routes</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>date1</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="date1"
               data-endpoint="POSTapi-routes"
               value="quos"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>date2</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="date2"
               data-endpoint="POSTapi-routes"
               value="est"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>note</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="note"
               data-endpoint="POSTapi-routes"
               value="earum"
               data-component="body" hidden>
    <br>
<p>&quot;car_body&quot;       =&gt; 'required',.</p>
        </p>
                <p>
            <b><code>source</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="source"
               data-endpoint="POSTapi-routes"
               value="voluptate"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>destination</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="destination"
               data-endpoint="POSTapi-routes"
               value="optio"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-routes--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-routes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/routes/rerum" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes/rerum"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-routes--id-">
</span>
<span id="execution-results-DELETEapi-routes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-routes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-routes--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-routes--id-"></code></pre>
</span>
<form id="form-DELETEapi-routes--id-" data-method="DELETE"
      data-path="api/routes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-routes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-routes--id-"
                    onclick="tryItOut('DELETEapi-routes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-routes--id-"
                    onclick="cancelTryOut('DELETEapi-routes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-routes--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/routes/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-routes--id-"
               value="rerum"
               data-component="url" hidden>
    <br>
<p>The ID of the route.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-routes--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-routes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/routes/quaerat" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes/quaerat"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-routes--id-">
</span>
<span id="execution-results-PUTapi-routes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-routes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-routes--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-routes--id-"></code></pre>
</span>
<form id="form-PUTapi-routes--id-" data-method="PUT"
      data-path="api/routes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-routes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-routes--id-"
                    onclick="tryItOut('PUTapi-routes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-routes--id-"
                    onclick="cancelTryOut('PUTapi-routes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-routes--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/routes/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-routes--id-"
               value="quaerat"
               data-component="url" hidden>
    <br>
<p>The ID of the route.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-request-answers-all">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-request-answers-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/request-answers/all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/request-answers/all"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-request-answers-all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 36
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;true&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [],
        &quot;links&quot;: {
            &quot;first&quot;: &quot;http://localhost/api/request-answers/all?page=1&quot;,
            &quot;last&quot;: &quot;http://localhost/api/request-answers/all?page=1&quot;,
            &quot;prev&quot;: null,
            &quot;next&quot;: null
        },
        &quot;meta&quot;: {
            &quot;current_page&quot;: 1,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost/api/request-answers/all?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;path&quot;: &quot;http://localhost/api/request-answers/all&quot;,
            &quot;per_page&quot;: 20,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;message&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-request-answers-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-request-answers-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-request-answers-all"></code></pre>
</span>
<span id="execution-error-GETapi-request-answers-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-request-answers-all"></code></pre>
</span>
<form id="form-GETapi-request-answers-all" data-method="GET"
      data-path="api/request-answers/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-request-answers-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-request-answers-all"
                    onclick="tryItOut('GETapi-request-answers-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-request-answers-all"
                    onclick="cancelTryOut('GETapi-request-answers-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-request-answers-all" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/request-answers/all</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-request-answers">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-request-answers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/request-answers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/request-answers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-request-answers">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-request-answers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-request-answers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-request-answers"></code></pre>
</span>
<span id="execution-error-GETapi-request-answers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-request-answers"></code></pre>
</span>
<form id="form-GETapi-request-answers" data-method="GET"
      data-path="api/request-answers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-request-answers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-request-answers"
                    onclick="tryItOut('GETapi-request-answers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-request-answers"
                    onclick="cancelTryOut('GETapi-request-answers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-request-answers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/request-answers</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-request-answers--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-request-answers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/request-answers/ipsa" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/request-answers/ipsa"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-request-answers--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 35
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Trying to get property 'id' of non-object&quot;,
    &quot;exception&quot;: &quot;ErrorException&quot;,
    &quot;file&quot;: &quot;/var/www/logistika-backend/app/Http/Controllers/RequestAnswersController.php&quot;,
    &quot;line&quot;: 196,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/app/Http/Controllers/RequestAnswersController.php&quot;,
            &quot;line&quot;: 196,
            &quot;function&quot;: &quot;handleError&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\HandleExceptions&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;show&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\RequestAnswersController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 262,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 205,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 721,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 127,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 55,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 723,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 698,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/fruitcake/laravel-cors/src/HandleCors.php&quot;,
            &quot;line&quot;: 52,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fruitcake\\Cors\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 89,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 222,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 179,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 118,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 75,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 653,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 136,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 298,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 1015,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 94,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/var/www/logistika-backend/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-request-answers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-request-answers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-request-answers--id-"></code></pre>
</span>
<span id="execution-error-GETapi-request-answers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-request-answers--id-"></code></pre>
</span>
<form id="form-GETapi-request-answers--id-" data-method="GET"
      data-path="api/request-answers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-request-answers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-request-answers--id-"
                    onclick="tryItOut('GETapi-request-answers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-request-answers--id-"
                    onclick="cancelTryOut('GETapi-request-answers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-request-answers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/request-answers/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-request-answers--id-"
               value="ipsa"
               data-component="url" hidden>
    <br>
<p>The ID of the request answer.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-request-answers">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-request-answers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/request-answers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"request_id\": \"qui\",
    \"price\": \"vero\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/request-answers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "request_id": "qui",
    "price": "vero"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-request-answers">
</span>
<span id="execution-results-POSTapi-request-answers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-request-answers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-request-answers"></code></pre>
</span>
<span id="execution-error-POSTapi-request-answers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-request-answers"></code></pre>
</span>
<form id="form-POSTapi-request-answers" data-method="POST"
      data-path="api/request-answers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-request-answers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-request-answers"
                    onclick="tryItOut('POSTapi-request-answers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-request-answers"
                    onclick="cancelTryOut('POSTapi-request-answers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-request-answers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/request-answers</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>request_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="request_id"
               data-endpoint="POSTapi-request-answers"
               value="qui"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="price"
               data-endpoint="POSTapi-request-answers"
               value="vero"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-request-answers--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-request-answers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/request-answers/quisquam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/request-answers/quisquam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-request-answers--id-">
</span>
<span id="execution-results-DELETEapi-request-answers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-request-answers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-request-answers--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-request-answers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-request-answers--id-"></code></pre>
</span>
<form id="form-DELETEapi-request-answers--id-" data-method="DELETE"
      data-path="api/request-answers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-request-answers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-request-answers--id-"
                    onclick="tryItOut('DELETEapi-request-answers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-request-answers--id-"
                    onclick="cancelTryOut('DELETEapi-request-answers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-request-answers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/request-answers/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-request-answers--id-"
               value="quisquam"
               data-component="url" hidden>
    <br>
<p>The ID of the request answer.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-request-answers--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-request-answers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/request-answers/ullam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/request-answers/ullam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-request-answers--id-">
</span>
<span id="execution-results-PUTapi-request-answers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-request-answers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-request-answers--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-request-answers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-request-answers--id-"></code></pre>
</span>
<form id="form-PUTapi-request-answers--id-" data-method="PUT"
      data-path="api/request-answers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-request-answers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-request-answers--id-"
                    onclick="tryItOut('PUTapi-request-answers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-request-answers--id-"
                    onclick="cancelTryOut('PUTapi-request-answers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-request-answers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/request-answers/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-request-answers--id-"
               value="ullam"
               data-component="url" hidden>
    <br>
<p>The ID of the request answer.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-request-answers--id--accept">only authenticated user can accept
and change status of requests and request_answers tables</h2>

<p>
</p>



<span id="example-requests-GETapi-request-answers--id--accept">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/request-answers/quo/accept" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/request-answers/quo/accept"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-request-answers--id--accept">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-request-answers--id--accept" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-request-answers--id--accept"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-request-answers--id--accept"></code></pre>
</span>
<span id="execution-error-GETapi-request-answers--id--accept" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-request-answers--id--accept"></code></pre>
</span>
<form id="form-GETapi-request-answers--id--accept" data-method="GET"
      data-path="api/request-answers/{id}/accept"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-request-answers--id--accept', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-request-answers--id--accept"
                    onclick="tryItOut('GETapi-request-answers--id--accept');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-request-answers--id--accept"
                    onclick="cancelTryOut('GETapi-request-answers--id--accept');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-request-answers--id--accept" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/request-answers/{id}/accept</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-request-answers--id--accept"
               value="quo"
               data-component="url" hidden>
    <br>
<p>The ID of the request answer.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-request-answers--id--cancel">only authenticated user can cancel and
change status to -1</h2>

<p>
</p>



<span id="example-requests-GETapi-request-answers--id--cancel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/request-answers/sed/cancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/request-answers/sed/cancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-request-answers--id--cancel">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-request-answers--id--cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-request-answers--id--cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-request-answers--id--cancel"></code></pre>
</span>
<span id="execution-error-GETapi-request-answers--id--cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-request-answers--id--cancel"></code></pre>
</span>
<form id="form-GETapi-request-answers--id--cancel" data-method="GET"
      data-path="api/request-answers/{id}/cancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-request-answers--id--cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-request-answers--id--cancel"
                    onclick="tryItOut('GETapi-request-answers--id--cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-request-answers--id--cancel"
                    onclick="cancelTryOut('GETapi-request-answers--id--cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-request-answers--id--cancel" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/request-answers/{id}/cancel</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-request-answers--id--cancel"
               value="sed"
               data-component="url" hidden>
    <br>
<p>The ID of the request answer.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-company-register">Register a Company.</h2>

<p>
</p>



<span id="example-requests-POSTapi-company-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/company/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"lsjtmcpzpgvtvohdicoxmemyaouhrnliqmlwbqpnmfopedowjqiwxwjcgxaxmoehszu\",
    \"email\": \"zfscpockxowslnujlsvoblvskjrjypinghpvzeloe\",
    \"password\": \"\",
    \"phone\": \"eum\",
    \"country\": \"placeat\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/company/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "lsjtmcpzpgvtvohdicoxmemyaouhrnliqmlwbqpnmfopedowjqiwxwjcgxaxmoehszu",
    "email": "zfscpockxowslnujlsvoblvskjrjypinghpvzeloe",
    "password": "",
    "phone": "eum",
    "country": "placeat"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-company-register">
</span>
<span id="execution-results-POSTapi-company-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-company-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-company-register"></code></pre>
</span>
<span id="execution-error-POSTapi-company-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-company-register"></code></pre>
</span>
<form id="form-POSTapi-company-register" data-method="POST"
      data-path="api/company/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-company-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-company-register"
                    onclick="tryItOut('POSTapi-company-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-company-register"
                    onclick="cancelTryOut('POSTapi-company-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-company-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/company/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-company-register"
               value="lsjtmcpzpgvtvohdicoxmemyaouhrnliqmlwbqpnmfopedowjqiwxwjcgxaxmoehszu"
               data-component="body" hidden>
    <br>
<p>Must be between 2 and 100 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-company-register"
               value="zfscpockxowslnujlsvoblvskjrjypinghpvzeloe"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address. Must not be greater than 100 characters.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-company-register"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be at least 6 characters.</p>
        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="POSTapi-company-register"
               value="eum"
               data-component="body" hidden>
    <br>
<p>|confirmed',</p>
<ul>
<li>'status' =&gt; 'required', */.</li>
</ul>
        </p>
                <p>
            <b><code>country</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="country"
               data-endpoint="POSTapi-company-register"
               value="placeat"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-POSTapi-company-logout">Log the company out (Invalidate the token).</h2>

<p>
</p>



<span id="example-requests-POSTapi-company-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/company/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/company/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-company-logout">
</span>
<span id="execution-results-POSTapi-company-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-company-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-company-logout"></code></pre>
</span>
<span id="execution-error-POSTapi-company-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-company-logout"></code></pre>
</span>
<form id="form-POSTapi-company-logout" data-method="POST"
      data-path="api/company/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-company-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-company-logout"
                    onclick="tryItOut('POSTapi-company-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-company-logout"
                    onclick="cancelTryOut('POSTapi-company-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-company-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/company/logout</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-company-refresh">Refresh a token.</h2>

<p>
</p>



<span id="example-requests-POSTapi-company-refresh">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/company/refresh" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/company/refresh"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-company-refresh">
</span>
<span id="execution-results-POSTapi-company-refresh" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-company-refresh"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-company-refresh"></code></pre>
</span>
<span id="execution-error-POSTapi-company-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-company-refresh"></code></pre>
</span>
<form id="form-POSTapi-company-refresh" data-method="POST"
      data-path="api/company/refresh"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-company-refresh', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-company-refresh"
                    onclick="tryItOut('POSTapi-company-refresh');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-company-refresh"
                    onclick="cancelTryOut('POSTapi-company-refresh');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-company-refresh" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/company/refresh</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-company-update">POST api/company/update</h2>

<p>
</p>



<span id="example-requests-POSTapi-company-update">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/company/update" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/company/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-company-update">
</span>
<span id="execution-results-POSTapi-company-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-company-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-company-update"></code></pre>
</span>
<span id="execution-error-POSTapi-company-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-company-update"></code></pre>
</span>
<form id="form-POSTapi-company-update" data-method="POST"
      data-path="api/company/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-company-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-company-update"
                    onclick="tryItOut('POSTapi-company-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-company-update"
                    onclick="cancelTryOut('POSTapi-company-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-company-update" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/company/update</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-company-company-profile">Get the authenticated Company.</h2>

<p>
</p>



<span id="example-requests-GETapi-company-company-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/company/company-profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/company/company-profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-company-company-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-company-company-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-company-company-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-company-company-profile"></code></pre>
</span>
<span id="execution-error-GETapi-company-company-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-company-company-profile"></code></pre>
</span>
<form id="form-GETapi-company-company-profile" data-method="GET"
      data-path="api/company/company-profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-company-company-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-company-company-profile"
                    onclick="tryItOut('GETapi-company-company-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-company-company-profile"
                    onclick="cancelTryOut('GETapi-company-company-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-company-company-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/company/company-profile</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-company-images">GET api/company/images</h2>

<p>
</p>



<span id="example-requests-GETapi-company-images">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/company/images" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/company/images"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-company-images">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-company-images" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-company-images"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-company-images"></code></pre>
</span>
<span id="execution-error-GETapi-company-images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-company-images"></code></pre>
</span>
<form id="form-GETapi-company-images" data-method="GET"
      data-path="api/company/images"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-company-images', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-company-images"
                    onclick="tryItOut('GETapi-company-images');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-company-images"
                    onclick="cancelTryOut('GETapi-company-images');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-company-images" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/company/images</code></b>
        </p>
                    </form>

        <h1 id="login-and-admin-authentication">Login and Admin Authentication</h1>

    <p>APIs for managing users</p>

            <h2 id="login-and-admin-authentication-POSTapi-admin-logout">Log the admin out (Invalidate the token).</h2>

<p>
</p>



<span id="example-requests-POSTapi-admin-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-logout">
</span>
<span id="execution-results-POSTapi-admin-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-logout"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-logout"></code></pre>
</span>
<form id="form-POSTapi-admin-logout" data-method="POST"
      data-path="api/admin/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-logout"
                    onclick="tryItOut('POSTapi-admin-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-logout"
                    onclick="cancelTryOut('POSTapi-admin-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/logout</code></b>
        </p>
                    </form>

            <h2 id="login-and-admin-authentication-POSTapi-admin-refresh">Refresh an admin token.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-refresh">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/refresh" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/refresh"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-refresh">
</span>
<span id="execution-results-POSTapi-admin-refresh" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-refresh"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-refresh"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-refresh"></code></pre>
</span>
<form id="form-POSTapi-admin-refresh" data-method="POST"
      data-path="api/admin/refresh"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-refresh', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-refresh"
                    onclick="tryItOut('POSTapi-admin-refresh');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-refresh"
                    onclick="cancelTryOut('POSTapi-admin-refresh');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-refresh" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/refresh</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-refresh" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-refresh"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="login-and-admin-authentication-GETapi-admin-admin-profile">Get the authenticated admin.</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-admin-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/admin-profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/admin-profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-admin-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-admin-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-admin-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-admin-profile"></code></pre>
</span>
<span id="execution-error-GETapi-admin-admin-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-admin-profile"></code></pre>
</span>
<form id="form-GETapi-admin-admin-profile" data-method="GET"
      data-path="api/admin/admin-profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-admin-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-admin-profile"
                    onclick="tryItOut('GETapi-admin-admin-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-admin-profile"
                    onclick="cancelTryOut('GETapi-admin-admin-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-admin-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/admin-profile</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
