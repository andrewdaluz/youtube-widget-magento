# Youtube Widget #

This README describes technical issues to install or work with Trezo Youtube Module.

### How to install with composer repository magento ###

* composer config repositories.trezo-youtube git git@github.com:andrewdaluz/youtube-widget-magento.git
* composer require trezo/youtube 1.0.0

### How to install with modman ###

* modgit init
* modgit clone trezo-youtube git@github.com:andrewdaluz/youtube-widget-magento.git

## Configuration ##

To use this widget you can configure it on admin -> CMS -> Widget and create your widget configuration with your video code.
After create your widget you can set up in you CMS Page (admin -> CMS -> Page) and include Widget on the listed widgets created.

Or, you can add it manually on you CMS Page using this command:

```html
{{widget type="trezo_youtube/youtube" code="YOURVIDEOCODE" height="500" width="350" }}
```

You can change parameters code, height and width for your own configuration and then a youtube frame will be shown on your cms page.
