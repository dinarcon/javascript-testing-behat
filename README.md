# javascript-testing-behat
Example of JavaScript testing with Behat

# Instructions

1. Clone this repository.
2. Install dependencies `composer install`
3. Start Chrome/Chromium in `remote debugging mode` at port `9222`. If a different port is used, update `behat.yml` accordingly.
4. Execute the tests `./vendor/bin/behat`

To start Chrome/Chromium in headless mode:

`google-chrome --disable-gpu --headless --remote-debugging-address=0.0.0.0 --remote-debugging-port=9222`

To start Chrome/Chromium showing the browser window:

`google-chrome --remote-debugging-address=0.0.0.0 --remote-debugging-port=9222`

You might get an error if you do not start Chrome/Chromium in headless mode and you already had a browser window opened. If so, close any browser windon and try again. The error you get is similar to:

`Could not fetch version information from http://127.0.0.1:9222/json/version. Please check if Chrome is running. Please see docs/troubleshooting.md if Chrome crashed unexpected. (RuntimeException)`
