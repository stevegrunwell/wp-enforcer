# WP Enforcer

[![GitHub release](https://img.shields.io/github/release/stevegrunwell/wp-enforcer.svg)](https://github.com/stevegrunwell/wp-enforcer/releases/latest)
[![GitHub license](https://img.shields.io/github/license/stevegrunwell/wp-enforcer.svg)](https://github.com/stevegrunwell/wp-enforcer/blob/master/LICENSE.txt)

When writing for a platform as big as WordPress – especially in a team environment – a consistent set of coding standards is vital. Having multiple developers committing code using a mixture of spaces and tabs, inconsistent formatting, or otherwise varying coding styles can lead to headache-inducing merge conflicts.

There are a number of great tools available to check against established coding standards (namely [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)), but setting them up on a project can be a pain. WP Enforcer is designed to make this setup a breeze.


## How does it work?

WP Enforcer uses [Git Hooks](https://git-scm.com/book/en/v2/Customizing-Git-Git-Hooks) to automatically run PHP CodeSniffer every time a developer tries to make a commit; if the code isn't up-to-snuff, the commit will be rejected and the developer will get a message explaining what needs to be fixed.

**Note:** If your project already has messy standards you may not want to make WP Enforcer mandatory until *after* you've cleaned up the codebase or suddenly commits will be quite painful! See [Adding to an Existing Project](#adding-to-an-existing-project) for an easy work-around.


## Installation

The easiest way to install WP Enforcer is via Composer:

```bash
$ composer require stevegrunwell/wp-enforcer
```

This will add WP Enforcer to your composer.json file and install the WP Enforcer package.

Next, you'll need to run the WP Enforcer installation script to copy the Git hooks into your local repository:

```bash
$ ./vendor/bin/wp-enforcer
```

If you'd like to require WP Enforcer for all developers on your project, you can add the following commands to your composer.json file to have WP Enforcer automatically set up Git hooks on `composer install` and `composer update`:

```json
"post-install-cmd": [
	"wp-enforcer"
],
"post-update-cmd": [
	"wp-enforcer"
]
```


## Configuration

PHP CodeSniffer allows you to [define a custom, default ruleset by creating a phpcs.xml file in your project root](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#using-a-default-configuration-file). WP Enforcer will automatically create a phpcs.xml file in your project if one doesn't already exist, but you can edit this to exclude certain files/directories, ignore specific rules, or load additional rulesets.

For a complete list of configuration options, see [the PHP CodeSniffer ruleset.xml standard](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Annotated-ruleset.xml).


## Adding to an Existing Project

Adding coding standards to an existing project can be a painful process. WP Enforcer will only run the Git hook against changed files, but if the current codebase is a mess, making even standards cleanup commits becomes a giant hassle.

If you're adding WP Enforcer to a current project, it's recommended to follow the installation instructions above **in a new clean-up branch**, then remove the pre-commit hook:

```bash
$ rm .git/hooks/pre-commit
```
> **Reminder:** Use the `rm` command with care; double-check everything you're passing to it before you execute, as we'd hate to see you lose valuable repository information (or worse: your operating system).

This leaves you with a copy of PHP CodeSniffer, a phpcs.xml file, and the WordPress Coding Standards but removes the "don't commit improperly formatted code" restrictions. While still in your clean-up branch, work through the codebase and clean up coding standards, running PHP CodeSniffer manually as needed:

```bash
$ ./vendor/bin/phpcs
```

Once CodeSniffer comes back clean, re-run the WP Enforcer installation script to restore the Git hook, forcing all future commits to be clean:

```bash
$ ./vendor/bin/wp-enforcer
```

Finally, merge your clean-up branch into master, kicking your project's coding standards compliance into high gear.

## Changelog

### 0.3.0 - November 29, 2015

* Remove explicit references to `./vendor/bin/`, as Composer automatically prepends this directory to the user's path ([#3](https://github.com/stevegrunwell/wp-enforcer/issues/3)). Props @johnpbloch, @bswatson.
* Automatically create a `.git/hooks` directory if it doesn't already exist ([#5](https://github.com/stevegrunwell/wp-enforcer/issues/5)).

### 0.2.0 - November 27, 2015

* Restrict the Git hook to only changed files, not the entire codebase ([#1](https://github.com/stevegrunwell/wp-enforcer/issues/1)).
* Confirmed Windows Compatibility (as Git Bash ships with a version of Cygwin for all the Unix-y goodness needed). Props @EricMann ([#2](https://github.com/stevegrunwell/wp-enforcer/issues/2)).
