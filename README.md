# october-cms-backend-only
Displays only backend in october cms

## Setup

Add ServiceProvider to the providers array in app/config/app.php

`Amsterdamys\OctoberCmsBackendOnly\RedirectServiceProvider::class,`

Now, your application will be redirected from others pages to the backend automatically
