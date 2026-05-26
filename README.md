# Moduleskit

A small example site for [Kirby Modules](https://github.com/medienbaecker/kirby-modules).

## A note on licenses

Both [Kirby](https://getkirby.com) itself and the kirby-modules plugin are commercial. They're free to use on your local machine while you're trying things out, but going live with either one needs a paid licence:

- Kirby: <https://getkirby.com/buy>
- Kirby Modules: <https://medienbaecker.com/plugins/modules>

## Get going

[Download the ZIP](https://github.com/medienbaecker/modules-example/archive/refs/heads/main.zip) or clone the repo:

```sh
git clone https://github.com/medienbaecker/modules-example.git moduleskit
```

Drop the folder into [Herd](https://herd.laravel.com), MAMP or XAMPP and open it in the browser. The Panel lives at `/panel`.

Kirby and the plugin are bundled, so there's nothing to install.

## What's where

```
site/
├── blueprints/pages/default.yml   the page with the modules section
├── blueprints/modules/            one blueprint per module type
├── snippets/modules/              one snippet per module type
└── templates/default.php          calls $page->modules()
```
