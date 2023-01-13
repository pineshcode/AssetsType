CONTENTS OF THIS FILE
---------------------

* Introduction
* Requirements
* Installation
* Configuration
* Maintainers


INTRODUCTION
------------

Create a configuration form in a custom module that contains the below fields.
Assets Type (Select List) - Values should be 'Default', 'Custom'
Assets Paths (Text Area). 
In that module, libaries.yml should have some default js/CSS files.
Create a feature same as bootstrap theme CDN, where when selecting 'Custom' from 'Assets Type' dropdown should show 'Assets Paths' text area where users can add external CSS/js as many as they want.
When ‘Assets Type’ is ‘Custom’, the site should include added CSS/js in textarea.

REQUIREMENTS
------------

This module requires the following module:

* "No special requirements".


INSTALLATION
------------

Install the addweb module as you would normally install a contributed Drupal
module. Visit https://www.drupal.org/node/895232 for further information.


CONFIGURATION
-------------

1. The user can set which JS,CSS CDN is used as the showing via
   Administration > Configuration > user-interface > add-web.
   By default, value default.
2. To add Custom CSS and JS, Configuration select 
   the user-interface > add-web
   Change default to custom and add CDN js, CSS file using comma-separated Save configuration.


MAINTAINERS
-----------

* Pinesh Kumar - https://www.drupal.org/u/pinesh-kumar
