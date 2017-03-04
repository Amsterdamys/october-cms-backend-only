# October cms backend only

Sometimes you may need to use october cms only as a control panel, 
and you're gonna face with issues when non-backend pages are still accessed.
That library painfully resolves this problem.

## Installation via [composer](https://getcomposer.org/)

`composer require amsterdamys/october-cms-backend-only`

## Setup

Add ServiceProvider to the providers array in app/config/app.php

`Amsterdamys\OctoberCmsBackendOnly\RedirectServiceProvider::class,`

## Finish

Now, your application will be redirected from others pages to the backend automatically.
