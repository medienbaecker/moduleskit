# Moduleskit

A small example site for [Kirby Modules](https://github.com/medienbaecker/kirby-modules).

## A note on licenses

Both [Kirby](https://getkirby.com) itself and the Modules plugin are commercial. They're free to use on your local machine while you're trying things out, but going live with either one needs a paid licence:

- Kirby: <https://getkirby.com/buy>
- Kirby Modules: <https://medienbaecker.com/plugins/modules>

## Get going

[Download the ZIP](https://github.com/medienbaecker/moduleskit/archive/refs/heads/main.zip) or clone the repo:

```sh
git clone https://github.com/medienbaecker/moduleskit.git moduleskit
```

You can then follow the [quickstart guide](https://getkirby.com/docs/guide/quickstart) in Kirby's docs.

## What's where

```
site/
├── blueprints/pages/default.yml   the page with the modules section
├── blueprints/modules/            one blueprint per module type
├── snippets/modules/              one snippet per module type
└── templates/default.php          calls $page->modules()
```
