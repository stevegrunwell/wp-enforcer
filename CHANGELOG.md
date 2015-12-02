# Change Log

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [0.4.0] - Unreleased

* Restore explicit reference to `vendor/bin` (previously removed in [#3]) within the pre-commit Git hook ([#11]). Props @leewillis77.
* Added `--help` and `--version` options to the `wp-enforcer` command for easier usage (and setting us up for more fun options in the future, [#8]). Props @daveross.
* Fixed major bug wherein PHP_CodeSniffer was complaining about files not containing any code ([#12]).
* Moved the Change Log out of the README and into CHANGELOG.md ([#19]).


## [0.3.0] - 2015-11-29

* Remove explicit references to `./vendor/bin/`, as Composer automatically prepends this directory to the user's path ([#3]). Props @johnpbloch, @bswatson.
* Automatically create a `.git/hooks` directory if it doesn't already exist ([#5]).


## [0.2.0] - 2015-11-27

* Restrict the Git hook to only changed files, not the entire codebase ([#1]).
* Confirmed Windows Compatibility (as Git Bash ships with a version of Cygwin for all the Unix-y goodness needed). Props @EricMann ([#2]).


## 0.1.0 - 2015-11-22

* Initial public release.

[0.4.0]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.3.0...HEAD
[0.3.0]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/stevegrunwell/wp-enforcer/compare/v0.1.0...v0.2.0
[#1]: https://github.com/stevegrunwell/wp-enforcer/issues/1
[#2]: https://github.com/stevegrunwell/wp-enforcer/issues/2
[#3]: https://github.com/stevegrunwell/wp-enforcer/issues/3
[#5]: https://github.com/stevegrunwell/wp-enforcer/issues/5
[#8]: https://github.com/stevegrunwell/wp-enforcer/issues/8
[#11]: https://github.com/stevegrunwell/wp-enforcer/issues/11
[#12]: https://github.com/stevegrunwell/wp-enforcer/issues/12
[#19]: https://github.com/stevegrunwell/wp-enforcer/issues/19