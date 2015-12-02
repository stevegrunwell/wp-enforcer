# Contributing to WP Enforcer

Thank you for taking an interest in helping enforce coding standards on WordPress projects with WP Enforcer!

This project is open for anyone to make suggestions, report issues, and contribute code, but please adhere to the following guidelines:

1. **Keep the code as portable as possible!** Not everyone is running the same, super-cool setup that you use, so we're targeting code that will run across the largest number of machines. That means Bash scripting that will run on OSX, Linux, and Cygwin for our friends on Windows.
2. **The code is meant to be a starting point for PHP_CodeSniffer usage.** There are a lot of different configurations for WordPress projects, so the best thing we can do is give developers the tools they need to get started and point them to things like [the PHP_CodeSniffer ruleset.xml standard](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Annotated-ruleset.xml).

## Branching strategy

The **master** branch should be considered stable, enabling people to pull from "dev-master" at any time and be sure their projects are safe. Active development happens in the **develop** branch. New branches should fork off of the **develop** branch, as this repository is now following the [Gitflow Workflow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow) as of version 0.4.0.