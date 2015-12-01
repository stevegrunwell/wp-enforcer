# Contributing to WP Enforcer

Thank you for taking an interest in helping enforce coding standards on WordPress projects with WP Enforcer!

This project is open for anyone to make suggestions, report issues, and contribute code, but please adhere to the following guidelines:

1. **Keep the code as portable as possible:!** Not everyone is running the same, super-cool setup that you use, so we're targeting code that will run across the largest number of machines. That means Bash scripting that will run on OSX, Linux, and Cygwin for our friends on Windows.
2. **The code is meant to be a starting point for PHP_CodeSniffer usage.** There are a lot of different configurations for WordPress projects, so the best thing we can do is give developers the tools they need to get started and point them to things like [the PHP CodeSniffer ruleset.xml standard](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Annotated-ruleset.xml)

## Pull requests

As mentioned above, Pull Requests are welcomed with open arms. That being said, we're avoiding merging non-trivial changes directly into the master branch (which is what clicking the "Merge Pull Request" button would do); instead, releases will be tracked in `release/x.x.x` branches, enabling us to plan out multiple release cycles at once.

If your PR is accepted, you'll be notified which branch your code has been merged into. It's our goal to ensure no (reasonable) pull request ever gets closed without warm gratitude and either a) where you can see your code committed in the repository or b) a well-reasoned explanation of why we are choosing not to merge your pull request.