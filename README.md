# VOA Responsive Newsletter Template 2018

## Installation and Usage

Follow the directions to install [Premailer](https://github.com/premailer/premailer). You'll need Ruby and RubyGems installed first.

You'll then want to pull up *newsletter.php* running on localhost in your browser. Use the URL query string to adjust settings (most are simple boolean toggles) until satisfied with the preview. Adding an additional language requires a language config file and test data; see **/languages/** directory for examples.

To generate newsletter templates for the CMS, set `export=1` in the *newsletter.php* URL query string in the browser and reload. Then run this command in your terminal:

`./build-export.rb`

Follow the prompts. An inline-CSS HTML template and a text version of the newsletter will be generated in the **/output/** directory.


## Making CSS Changes

**Important: Do not edit premail.css directly.** All CSS changes should be made to *premail.scss* and then compiled to *css/premail.css* by [installing SASS](http://sass-lang.com/install) and running this command from this project's directory:

`sass --watch premail.scss:css/premail.css`


## Social Media Icons

The social media icons were generated using [FA2PNG](http://fa2png.io/) with the Font Awesome icon set and these settings:

- Icon color: #ffffff
- Background: *varies based on brand color*
- Icon size: 64px
- Icon margin: 12px
