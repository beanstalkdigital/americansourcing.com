# Eversight
A custom WordPress theme.

### Setup
- `npm install`
- `npm run dev` during development
- `npm run build` when you're ready to ship
- Instructions for setting up your local WP environment are below

### Code Organization
This theme consists of both the standard WordPress fare as well as a few juicy Vue tidbits mixed in. In general the site is built on Visual Composer so there aren't any custom templates.

Most of the theme structure/markup is broken up as follows:

- header.php
- index.php
  - template-parts/content-page.php
  - template-parts/content-post.php
  - template-parts/content-team_member.php
- footer.php

All of the source files are organized as follows (only primary files/folders are listed):

- **src/**
  - **assets/**
    - css/
      - ...
      - components/
      - pages/
      - style.css
    - js/
      - components/
  - **components/**
    - CaseStudies/
    - Loader/
    - ResourceLibrary/
      - Card
      - Grid
  - **containers/**
    - ResourceLibrary/
  - index.js
  - vue.js

## Setting up your local dev environment
In order to get a copy of the site running you're going to need to do the following:

1. Setup a local WordPress instance running at http://eversight.local (I recommend using [Devilbox](http://devilbox.org/) or [Local by Flywheel](https://local.getflywheel.com/), but you can use whatever you would like)
2. Install the [All-in-One WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/) plugin
3. Clone this theme into the themes directory and setup per the instructions above
4. On the [staging environment](http://eversightinc.staging.wpengine.com/wp-admin), login and navigate to the All-in-One WP Migration page and export the entire site EXCLUDING THE THEME AND MUST-USE PLUGINS. You can exclude these items by clicking the "Advanced Options" link and checking the appropriate box.
5. Import the export file into your local WP instance.

Some pages may appear broken, this is because Visual Composer doesn't store all of the styles as part of the post data, they're cached. To fix an issue with a page you simply need to "Edit it With Visual Compser" and immediately save the page again.