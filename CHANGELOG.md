# Change Log

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).


## [0.5.0] - 2017-05-28

* Allow any version of [wp-coding-standards/wpcs](https://github.com/wp-coding-standards/wpcs), avoiding conflicts with packages that use older versions ([#37]).
* Clarify placement of scripts within `composer.json` ([#41]).
* Exclude `phpcs.xml` from being checked by PHP_CodeSniffer ([#27]).


## [0.4.2] - 2017-01-04

* Don't lock [wp-coding-standards/wpcs](https://github.com/wp-coding-standards/wpcs) to a single version.
* Remove the explicit package version in `composer.json`, add GitHub URLs.


## [0.4.1] - 2015-12-21

* Apply a `--diff-filter` in the pre-commit hook to ensure PHP_CodeSniffer doesn't attempt to tokenize files that have been deleted ([#29]). Props @JoeyBlake.


## [0.4.0] - 2015-12-02

* Restore explicit reference to `vendor/bin` (previously removed in [#3]) within the pre-commit Git hook ([#11]). Props @leewillis77.
* Added `--help` and `--version` options to the `wp-enforcer` command for easier usage (and setting us up for more fun options in the future, [#8]). Props @daveross.
* Fixed major bug wherein PHP_CodeSniffer was complaining about files not containing any code ([#12]).
* Added a `--vip` option to the `wp-enforcer` command to use WordPress.com VIP coding standards ([#7]). Props @daveross.
* Moved the Change Log out of the README and into CHANGELOG.md ([#19]).


## [0.3.0] - 2015-11-29

* Remove explicit references to `./vendor/bin/`, as Composer automatically prepends this directory to the user's path ([#3]). Props @johnpbloch, @bswatson.
* Automatically create a `.git/hooks` directory if it doesn't already exist ([#5]).


## [0.2.0] - 2015-11-27

* Restrict the Git hook to only changed files, not the entire codebase ([#1]).
* Confirmed Windows Compatibility (as Git Bash ships with a version of Cygwin for all the Unix-y goodness needed). Props @EricMann ([#2]).


## 0.1.0 - 2015-11-22

* Initial public release.


[Unreleased]: https://github.com/stevegrunwell/wp-enforcer/compare/develop...master
[0.4.2]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.5.0...master
[0.4.2]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.4.1...v0.4.2
[0.4.1]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.4.0...v0.4.1
[0.4.0]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.3.0...v0.4.0
[0.3.0]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.1.0...v0.2.0
[#1]: https://github.com/stevegrunwell/wp-enforcer/issues/1
[#2]: https://github.com/stevegrunwell/wp-enforcer/issues/2
[#3]: https://github.com/stevegrunwell/wp-enforcer/issues/3
[#5]: https://github.com/stevegrunwell/wp-enforcer/issues/5
[#7]: https://github.com/stevegrunwell/wp-enforcer/issues/7
[#8]: https://github.com/stevegrunwell/wp-enforcer/issues/8
[#11]: https://github.com/stevegrunwell/wp-enforcer/issues/11
[#12]: https://github.com/stevegrunwell/wp-enforcer/issues/12
[#19]: https://github.com/stevegrunwell/wp-enforcer/issues/19
[#27]: https://github.com/stevegrunwell/wp-enforcer/issues/27
[#29]: https://github.com/stevegrunwell/wp-enforcer/issues/29
[#37]: https://github.com/stevegrunwell/wp-enforcer/issues/37
[#41]: https://github.com/stevegrunwell/wp-enforcer/issues/41
